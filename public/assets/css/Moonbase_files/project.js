/*global define:false */
/*global $:false */
/*global window:false */
/*global document:false */
/*global setTimeout:false */
/*global LOGGED_IN:false */
/*global PUBLISHED_URL:false */
/*global CLONED_FROM_PROJECT_ID:false */
/*global EMBEDDED_PROJECT_JSON:false */
/*global TITLE:false */
/*global localStorage:false */
/*global FormData:false */
/*global XMLHttpRequest:false */
define(['graph_editor/graph_editor', 'runtimes/runtime_manager', 'signup_signin', 'modal', 'message_visor', 'lib/emitter'], function(GraphEditor, RuntimeManager, SignupSignin, Modal, MessageVisor, Emitter) {
  
  var Project = {
  
    init: function() {
      
      this.animation_runtime = RuntimeManager.runtimes_list.Animation;
    
      this.saved = true;
      this.saveWarning = false; 
      this.autoSave = true; // Obviously, if auto save is enabled, then it won't ever offer the save warning window
      this.didLoad = false;
      
      this.createElements();
    
      this.setupEventHandlers();
      
      //var that = this;
      // snapshot = function() {
      //   that.saveSnapshot();
      // };
    
      //ppp = this;
    
    },
    
    createElements: function() {
      
      this.$container = $("<div />");
      this.$container.addClass("project-menu");
      
      this.$new_button = $("<a>New</a>");
      this.$new_button.addClass("new");
      this.$new_button.appendTo(this.$container);
      
      $("<span class='divider'>/</span>").appendTo(this.$container);
      
      this.$publish_button = $("<a>Publish</a>");
      this.$publish_button.addClass("publish");
      this.$publish_button.appendTo(this.$container);
      
      $("<span class='divider'>/</span>").appendTo(this.$container);
      
      this.$save_button = $("<a>Save</a>");
      this.$save_button.addClass("save");
      this.$save_button.appendTo(this.$container);
      
      $("#editor-menu-bar").append(this.$container);
      $('.header .app-nav-links a.new-project').remove();
      $('.header .app-nav-links span.new-project-sep').remove();
      
      this.$edit = $('<div />');
      this.$edit.addClass("edit-icon");
      this.$edit.text("[edit]");
      $(".header").append(this.$edit);
      
      this.$title = $("<div />");
      this.$title.addClass("title");
      //this.$title.appendTo(this.$container);
      // $("#editor-menu-bar").append(this.$title);
      $(".header").append(this.$title);

      
    },
  
    setupEventHandlers: function() {
    
      GraphEditor.on(/connect|disconnect|create|remove|clearAll|setWorkerAttributes|setAllWorkerAttributes|nodeMoved|setWorkerAttribute|updated|reorderedNodes/, function() {
        if (Project.autoSave && Project.didLoad) {
          Project.saveCurrent();
        }
        Project.wasUpdated();
      });
      
      GraphEditor.on("snapshot", function() {
        Project.saveSnapshot();
      });
      
      GraphEditor.on("projectLoaded", function() {
        Project.didLoad = true;
      });
    
      window.onbeforeunload = function() {
        if (!Project.saved && Project.saveWarning) {
          return "You have unsaved changes that will be lost.  Are you sure you want to exit this page?";
        }
      };
      
      var that = this;
    
      Project.on("saved", function() {
        that.$save_button.text("Saved");
        setTimeout(function() {
          that.$save_button.text("Save");
        }, 1200);
      });
    
      Project.on("saving", function() {
        that.$save_button.text("Saving");
      });
    
      Project.on("updated", function() {

      });
      
      this.$new_button.click(function() {
        window.location.href = "/projects/new";
      });
      
      this.$save_button.click(function() {
        if (LOGGED_IN) {
          Project.saveCurrent();
        }
        else {
          that.promptForLogin("save");
        }
      });
    
      this.$publish_button.click(function() {
        if (LOGGED_IN) {
          //var project_uuid = that.getCurrentProjectUUID();
          
          that.saveSnapshot(function() {
            window.location.href = PUBLISHED_URL;
          });
          
          
        }
        else {
          that.promptForLogin("publish");
        }
        
      });
      
      this.$title.click(function(event) {
        that.showEditInPlace();
        event.stopPropagation();
      });
      
      this.$edit.click(function(event) {
        that.showEditInPlace();
        event.stopPropagation();
      });
    
    },
    
    showEditInPlace: function() {
      
      if (this.editing) {
        return;
      }
      
      this.editing = true;

      var that = this;
      
      var current_title = this.$title.text();
      this.$title.html("");
      
      var $form = $("<form />");
      
      var $input = $("<input />");
      $input.val(current_title);
      
      $form.append($input);
      
      this.$title.append($form);
      
      $input.focus();
      $input.select();
      
      $(document.body).one("click", function() {
        $form.submit();
      });
      
      $form.submit(function(event) {
        
        event.preventDefault();
        
        $(document.body).off("click");
        
        that.editing = false;
        
        var new_title = $input.val();
        
        that.title = new_title;
        that.saveCurrent();
        
        that.$title.html("");
        that.$title.text(new_title);
        
      });
        
    },
    
    promptForLogin: function(action) {
      
      if (GraphEditor.allNodes().length === 0) {
        MessageVisor.setMessage("You'll need to make something first!");
        MessageVisor.showForABit();
        return;
      }
      
      $('#action').text(action);
      
      SignupSignin.show();
      
      var $signin_new_user_project_action = $('<input class="new_user_project-action" id="new_user_project_action" name="new_user_project[action]" type="hidden">');
      var $signin_new_user_project_json = $('<input class="new_user_project-json" id="new_user_project_json" name="new_user_project[json]" type="hidden">');
      $('#signin form').append($signin_new_user_project_action);
      $('#signin form').append($signin_new_user_project_json);

      var $signup_new_user_project_action = $('<input class="new_user_project-action" id="new_user_project_action" name="new_user_project[action]" type="hidden">');
      var $signup_new_user_project_json = $('<input class="new_user_project-json" id="new_user_project_json" name="new_user_project[json]" type="hidden">');
      $('#signup form').append($signup_new_user_project_action);
      $('#signup form').append($signup_new_user_project_json);
      
      if (typeof(CLONED_FROM_PROJECT_ID) != "undefined") {
        var $signup_cloned_from_project_id = $('<input class="new_user_project-cloned_from_project_id" id="new_user_project_cloned_from_project_id" name="new_user_project[cloned_from_project_id]" type="hidden">');
        var $signin_cloned_from_project_id = $('<input class="new_user_project-cloned_from_project_id" id="new_user_project_cloned_from_project_id" name="new_user_project[cloned_from_project_id]" type="hidden">');
        $('#signup form').append($signup_cloned_from_project_id);
        $('#signin form').append($signin_cloned_from_project_id);
        $('.new_user_project-cloned_from_project_id').attr("value", CLONED_FROM_PROJECT_ID);
      }
      
      var $signup_title = $('<input class="new_user_project-title" id="new_user_project_title" name="new_user_project[title]" type="hidden">');
      var $signin_title = $('<input class="new_user_project-title" id="new_user_project_title" name="new_user_project[title]" type="hidden">');
      $('#signup form').append($signup_title);
      $('#signin form').append($signin_title);
      
      if (this.title) {
        $('.new_user_project-title').attr("value", this.title);
      }
      else {
        // Show the modal window!!!
      }

      GraphEditor.modalWindowOpen = true;

      GraphEditor.stringify(function(project_json) {
        $(".new_user_project-json").attr("value", project_json);
        $(".new_user_project-action").attr("value", action);
        localStorage.setItem("unsaved-project", project_json);
      });

    },
  
    saveCurrent: function() {
      var project_uuid = this.getCurrentProjectUUID();
      
      if (GraphEditor.allNodes().length === 0) {
        return;
      }
    
      GraphEditor.stringify(function(project_json) { 
        Project.save(project_uuid, project_json);
      });
    
    },
  
    getCurrentProjectUUID: function() {
      var path_array = window.location.pathname.split("/");
      if (path_array[2]) {
        var project_uuid = path_array[2].replace("/", "");
        return project_uuid;
      }
    },
  
    save: function(project_uuid, project_json, callback) {
      var url = "/projects/" + project_uuid  + ".json";
      var formData = new FormData();
      formData.append('project_json', project_json);
      var title = this.title || "";
      formData.append('title', title);
      var xhr = new XMLHttpRequest();
      xhr.addEventListener("load", function(event) {
        Project.wasSaved();
        if (callback) {
          callback(event.target.response);
        }
      }, false);
      xhr.open('PUT', url, true);
      var token = $("meta[name='csrf-token']").attr("content");
      xhr.setRequestHeader("X-CSRF-Token", token);
      Project.emit("saving");
      xhr.send(formData);
    },
    
    saveSnapshot: function(callback) {
      
      var project_uuid = this.getCurrentProjectUUID();
      
      var $blackout = $("<div />");
      //$blackout.text("TAKING SNAPSHOT");
      var $spinner = $('<img id="spinner" src="/assets/newPlayer/spinner.gif" />');
      $spinner.css({
        //position: "absolute"
      });
      var $blackout_text = $("<div />");
      $blackout.css({
        color: 'white',
        position: 'fixed',
        top: 0,
        left: 0,
        height: $(window).height(),
        width: $(window).width(),
        'background-color': 'black',
        "text-align": 'center',
        "font-size": $(window).width()/30 + "px",
        //"line-height": $(window).height() + "px",
        "padding-top": $(window).height()/2 - 90,
        'z-index':100000000
      });
      
      $blackout.append($spinner);
      $blackout.append($blackout_text);
      $(document.body).append($blackout);
      
      var width = this.animation_runtime.element.width;
      var height = this.animation_runtime.element.height;
      
      this.animation_runtime.resizeViewer(600,400);
      
      var that = this;
      setTimeout(function() {
        var snapshot_data_uri = that.animation_runtime.snapshot(); 
        $blackout_text.text("PUBLISHING PROJECT...");
        that.animation_runtime.resizeViewer(width, height);
        //console.log(snapshot_data_uri);
        snapshot_data_uri = snapshot_data_uri.replace(/^data:image\/(png|jpg);base64,/, "");
        var url = "/projects/" + project_uuid  + "/snapshot";
        var formData = new FormData();
        formData.append('snapshot_data_uri', snapshot_data_uri);
        var xhr = new XMLHttpRequest();
        xhr.addEventListener("load", function(event) {
          $blackout.fadeOut();
          //console.log("response", url, event.target.response);
          if (callback) {
            callback(event.target.response);
          }
          
        }, false);
        xhr.open('PUT', url, true);
        var token = $("meta[name='csrf-token']").attr("content");
        xhr.setRequestHeader("X-CSRF-Token", token);
        //console.log("PUT", url, formData, xhr);
        xhr.send(formData);
        
      }, 100);

    },
  
    find: function(project_uuid, callback) {
      var url = "/" + project_uuid  + ".json";
      var xhr = new XMLHttpRequest();
      var that = this;
      xhr.addEventListener("load", function(event) {
        if (callback) {
          var response = JSON.parse(event.target.response);
          var project_json = response.project_json;
          that.setTitle(response.title);
          that.cloned_from_project_id = response.cloned_from_project_id;
          callback(project_json);
        }
      }, false);
      xhr.open('GET', url, true);
      var token = $("meta[name='csrf-token']").attr("content");
      xhr.setRequestHeader("X-CSRF-Token", token);
      xhr.send();
    },
  
    load: function(project_uuid) {
      Project.find(project_uuid, function(project_json) {
        if (project_json && project_json != "false") {
          Project.wasSaved();
          GraphEditor.load(project_json);
          // this needs to be some sort of callback from GraphEditor.load OR
          // we need some way for the GraphEditor to not call it's own internal methods, bypassing the .emit and CommandHistory
        }
      });
    },
    
    setTitle: function(title) {
      if (title) {
        this.$title.text(title);
        this.title = title;
      }
      else {
        this.$title.text("Untitled Project");
      }
    },
  
    loadCurrent: function() {
      // check to see if the project_json is embedded in the page from the server
      if (typeof(EMBEDDED_PROJECT_JSON) != "undefined") {
        if (EMBEDDED_PROJECT_JSON != "false") {
          GraphEditor.load(EMBEDDED_PROJECT_JSON);
          if (typeof(TITLE) != "undefined") {
            this.setTitle(TITLE);
          }
        }
        else {
          Project.didLoad = true;
        }
      }
      else {
        var project_uuid = Project.getCurrentProjectUUID();
        if (project_uuid) {
          Project.load(project_uuid);
        }
      }
    },
    
    embed: function() {
      this.animation_runtime = RuntimeManager.runtimes_list.Animation;
      this.animation_runtime.didShowLoader = true;
      this.animation_runtime.embedViewer();
      this.animation_runtime.showLoader();
    },
  
    wasUpdated: function() {
      this.saved = false;
      Project.emit("updated");
    },
  
    wasSaved: function() {
      this.saved = true;
      Project.emit("saved");
    }
  
  };
  $.extend(Project, Emitter);
  
  return Project;
  
});