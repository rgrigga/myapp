define([], function() {

  var SignupSignin = {
    
    init: function() {
      this.setupEventHandlers();
    },
  
    setupEventHandlers: function() {
    
      $("#signup-button").click(function() {
        $("#signup").show();
        $("#signup-button").addClass("active");
        $("#signin-button").removeClass("active");
        $("#signin").hide();
      });
    
      $("#signin-button").click(function() {
        $("#signup").hide();
        $("#signin-button").addClass("active");
        $("#signup-button").removeClass("active");
        $("#signin").show();
      });
    
      $("#signup form").submit(function(event) {
        SignupSignin.validateSignupForm();
        event.preventDefault();
        return false;
      });
    
      $("#signup form #user_username").focus(function() {
        $("#signup .username-error").hide();
      });
    
      $("#signup form #user_email").focus(function() {
        $("#signup .email-error").hide();
      });
    
      $("#signup form #user_password").focus(function() {
        $("#signup .password-error").hide();
      });
    
      $("#signin form").submit(function(event) {
        SignupSignin.validateSigninForm();
        event.preventDefault();
        return false;
      });
    
      $("#signin form #user_email").focus(function() {
        $("#signin .email-error").hide();
      });
    
      $("#signin form #user_password").focus(function() {
        $("#signin .password-error").hide();
      });
    
      $('.sign-in').click(function(event) {
        event.preventDefault();
        SignupSignin.show();
      });
    
    },
    
    show: function() {
      $("#black-fade").show();
      $("#signin-or-signup").show();
      
      $("#black-fade").one("click", function() {
        $("#black-fade").hide();
        $("#signin-or-signup").hide();
      });
      
    },
  
    validateUsername: function(username) {
        var re = /^([a-z0-9_]+)$/i;
        return re.test(username);
    },

    validateEmail: function(email) { 
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    },

    validatePassword: function(password) {
      return (password.length >= 6);
    },

    validateSignupForm: function() {
      var username = $('#signup form #user_username').attr('value');
      var email = $("#signup form #user_email").attr("value");
      var password = $("#signup form #user_password").attr("value");

      var validForm = true;

      if (!this.validateUsername(username)) {
        $('#signup .username-error').show();
        validForm = false;
      }

      if (!this.validateEmail(email)) {
        $("#signup .email-error").show();
        validForm = false;
      }

      if (!this.validatePassword(password)) {
        $("#signup .password-error").show();
        validForm = false;
      }

      if (validForm) {
        $("#signup form").submit();
      }

    },

    validateSigninForm: function() {
      var email = $("#signin form #user_email").attr("value");
      var password = $("#signin form #user_password").attr("value");

      var validForm = true;

      if (!this.validateEmail(email)) {
        $("#signin .email-error").show();
        validForm = false;
      }

      if (!this.validatePassword(password)) {
        $("#signin .password-error").show();
        validForm = false;
      }

      if (validForm) {
        $("#signin form").submit();
      }

    }
  
  };

  return SignupSignin;

});