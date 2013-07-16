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
    jquery: 'jquery.min'
  }
});

requirejs([
  'jquery'
], 
function ($) {
  require([
    'signup_signin',
    'message_visor',
    'modal'
  ], 
  function(SignupSignin, MessageVisor, Modal) {
    
    $(document).ready(function() {
      
      SignupSignin.init();
      Modal.init();
      MessageVisor.init();
      // 
      // 
      // MessageVisor.setMessage("THIS IS A TEST");
      // mv = MessageVisor;
      // 
      // 
      // Modal.setMessage("THIS IS A TEST");
      // m = Modal;
      
      
    });
    
  });
});