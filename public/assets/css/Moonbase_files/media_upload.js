define(['graph_editor/register_plugin'], function(registerPlugin) {
  
  var MediaUpload = {

    init: function(editor) {
      this.editor = editor;
      this.element = $("body");
      this.setupEventHandlers();
    },

    setupEventHandlers: function() {
      var that = this;
      var stopDropAndRoll = function(event) {
        event.stopPropagation();
        event.preventDefault();
      };

      this.element.on("dragenter", stopDropAndRoll);
      this.element.on("dragexit", stopDropAndRoll);
      this.element.on("dragover", stopDropAndRoll);
      this.element.on("drop", function(event) {
        stopDropAndRoll(event);
        that.dropEvent(event);
      });

    },

    dropEvent: function(event) {

      var dropX = event.originalEvent.offsetX;
      var dropY = event.originalEvent.offsetY;

      var dataTransfer = event.originalEvent.dataTransfer;

      if (dataTransfer.files.length > 0) {

        for (var i=0; i < dataTransfer.files.length; i++) {
          var file = dataTransfer.files[i];
          if (file.type.slice(0,5) == "audio") {
            this.handleAudioFile(file, event, dropX, dropY, i);
          }
          else if (file.type.slice(0,5) == "image") {
            this.handleImageFile(file, event, dropX, dropY, i);
          }
        }

      }

      return false;
    },

    handleImageFile: function(file, event, dropX, dropY, i) {

      var image_file_node = this.editor.createNode({
        type: 'image file',
        x: dropX,
        y: dropY + (i * 60),
        patch: this.editor.currentPatch.id
      });

      var reader = new FileReader();

      var that = this;

      // init the reader event handlers
      reader.onloadend = function(evt) {
        var url = evt.target.result;

        var options = {
          runtime: "Animation",
          worker_id: image_file_node.id,
          input_name: "url",
          value: url
        };
        var json_options = JSON.stringify(options);
        that.editor.emit("setWorkerAttribute", json_options);

        if (event.originalEvent.altKey) {
          var sprite_node = that.editor.createNode({
            type: 'sprite',
            x: dropX + 250,
            y: dropY + (i * 60),
            patch: that.editor.currentPatch.id
          });

          that.editor.connect({
            source_id: image_file_node.id,
            destination_id: sprite_node.id,
            input_name: "image",
            output_name: "image"
          });

        }

      };
      reader.readAsDataURL(file);

      this.uploadFile({

        file: file,

        uploadStart: function(evt) {
          image_file_node.file_url = evt.file_url;
          image_file_node.uploadStarted = true;
          image_file_node.percentUploadComplete = 0;
        },

        uploadProgress: function(evt) {
          if (evt.lengthComputable) {
            var percentComplete = Math.round(evt.loaded * 100 / evt.total);
            image_file_node.percentUploadComplete = percentComplete;
          }
          else {
            //console.log('unable to compute', evt);
          }
        },

        uploadComplete: function(evt) {
          image_file_node.uploadCompleted = true;
          
          var options = {
            runtime: "Animation",
            worker_id: image_file_node.id,
            input_name: "url",
            value: image_file_node.file_url
          };
          var json_options = JSON.stringify(options);
          that.editor.emit("setWorkerAttribute", json_options);

          that.editor.emit("updated");

        },

        uploadFailed: function(evt) {
          image_file_node.uploadFailed = true;
        },

        uploadCanceled: function(evt) {
          image_file_node.uploadCanceled = true;
        }
      });

    },

    handleAudioFile: function(file, event, dropX, dropY, i) {
      var audio_file_node = this.editor.createNode({
        type: 'audio file',
        x: dropX,
        y: dropY + (i * 60),
        patch: this.editor.currentPatch.id
      });

      if (event.originalEvent.altKey) {
        var audio_output_node = this.editor.createNode({
          type: 'audio output',
          x: dropX + 150,
          y: dropY + (i * 60),
          patch: this.editor.currentPatch.id
        });

        this.editor.connect({
          source_id: audio_file_node.id,
          destination_id: audio_output_node.id,
          input_name: "audio_in",
          output_name: "audio_out"
        });

      }

      var that = this;

      var reader = new FileReader();
      reader.onloadend = function(event) {
        var buffer = event.target.result;
        
        var options = {
          runtime: "Audio",
          worker_id: audio_file_node.id,
          input_name: "buffer",
          value: buffer
        };
        
        that.editor.emit("setArrayBufferWorkerAttribute", options); // notice that this isn't JSON...
        // we are gonna move over to window.postMessage at some point!
        // http://updates.html5rocks.com/2011/12/Transferable-Objects-Lightning-Fast
        // http://updates.html5rocks.com/2011/09/Workers-ArrayBuffer
        
      };
      reader.readAsArrayBuffer(file);

      this.uploadFile({

        file: file,

        uploadStart: function(evt) {
          audio_file_node.file_url = evt.file_url;
          audio_file_node.uploadStarted = true;
          audio_file_node.percentUploadComplete = 0;
        },

        uploadProgress: function(evt) {
          if (evt.lengthComputable) {
            var percentComplete = Math.round(evt.loaded * 100 / evt.total);
            audio_file_node.percentUploadComplete = percentComplete;
          }
          else {
            //console.log('unable to compute', evt);
          }
        },

        uploadComplete: function(evt) {
          audio_file_node.uploadCompleted = true;
          
          var options = {
            runtime: "Audio",
            worker_id: audio_file_node.id,
            input_name: "url",
            value: audio_file_node.file_url
          };
          var json_options = JSON.stringify(options);
          that.editor.emit("setWorkerAttribute", json_options);

          that.editor.emit("updated");

        },

        uploadFailed: function(evt) {
          audio_file_node.uploadFailed = true;
        },

        uploadCanceled: function(evt) {
          audio_file_node.uploadCanceled = true;
        }
      });
    },

    uploadFile: function(options) {

      var file = options.file;
      var uploadProgress = options.uploadProgress;
      var uploadComplete = options.uploadComplete;
      var uploadFailed = options.uploadFailed;
      var uploadCanceled = options.uploadCanceled;
      var uploadStart = options.uploadStart;

      var key = (new Date()).getTime() + '-' + file.name;
      var url = 'https://graph-editor-upload.s3.amazonaws.com/';

      var file_url = url + key;

      var signature = "UIxxGYZY0cbxnDLw0f6va2oOgx8=";
      var policy = "eyJleHBpcmF0aW9uIjogIjIwMjAtMDEtMDFUMDA6MDA6MDBaIiwKImNvbmRpdGlvbnMiOiBbIAogIHsiYnVja2V0IjogImdyYXBoLWVkaXRvci11cGxvYWQifSwgCiAgWyJzdGFydHMtd2l0aCIsICIka2V5IiwgIiJdLAogIHsiYWNsIjogInB1YmxpYy1yZWFkIn0sCiAgWyJzdGFydHMtd2l0aCIsICIkQ29udGVudC1UeXBlIiwgIiJdLAogIFsiY29udGVudC1sZW5ndGgtcmFuZ2UiLCAwLCA1MjQyODgwMDBdCl0KfQ==";
      var access_key = "AKIAIONDHVBZ6Z4CP75A";

      var formData = new FormData();

      formData.append('key', key);
      formData.append('acl', 'public-read'); 
      formData.append('Content-Type', file.type);      
      formData.append('AWSAccessKeyId', access_key);
      formData.append('policy', policy);
      formData.append('signature',signature);
      formData.append("file",file);

      var xhr = new XMLHttpRequest();

      xhr.upload.addEventListener("progress", uploadProgress, false);
      xhr.addEventListener("load", uploadComplete, false);
      xhr.addEventListener("error", uploadFailed, false);
      xhr.addEventListener("abort", uploadCanceled, false);

      xhr.open('POST', url, true);

      xhr.send(formData);

      uploadStart({
        file_url: file_url
      });
    }

  };

  registerPlugin({
    name: "media_upload",
    plugin: MediaUpload
  });
  
});