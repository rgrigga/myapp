/*global require:false */
/*global requirejs:false */
/*global document:false */
require.config({
  urlArgs: "body=12",
  shim: {
    'jquery': {
      exports: '$'
    }
  },
  paths: {
    jquery: 'jquery.min',
    gear: 'gear.latest',
     // Point internal GEAR dependencies at the compiled GEAR library
    'lib/emitter': 'gear.latest',
    'graph_editor/graph_editor': 'gear.latest',
    'graph_editor/register_plugin': 'gear.latest',
    'runtimes/runtime_manager': 'gear.latest'
  }
});

requirejs([
  'jquery'
], 
function ($) {
  require([
    // Load GEAR
    'gear',
    // Load our Project model
    'project',
    // Load any Moonbase specific GEAR plugins
    'media_upload'
    // Load any Moonbase specific GEAR nodes
  ], 
  function(GEAR, Project) {
    
    var GraphEditor = GEAR.graph_editor;
    var RuntimeManager = GEAR.runtime_manager;
      
    // Wait for the document to fully load
    $(document).ready(function() {
      
      // Boot up the graph editor
      GraphEditor.init({
        plugins: [
          { name: "create_edge" }, // Drag between node inputs and outputs to create edges
          { name: "new_node" }, // Ctrl+N to create a new node
          { name: "media_upload" }, // Drag-n-drop media with upload to S3
          { name: "sidebar" }, // toolbar on the side
          { name: "command_history" }, // undo/redo buttons
          { name: "copy_paste" }, // copy and paste
          { name: "selection_box" } // selection box
        ]
      });
      
      // Boot up the runtimes
      RuntimeManager.init({
        list: [
          { name: "Event"},
          { name: "Animation", viewer_background: "#000"},
          { name: "Audio"}
        ]
      });
      
      // Load our project
      GraphEditor.on("graphEditorDidLoad", function() {
        Project.init();
        Project.loadCurrent();
      });
      
    });
  });
});