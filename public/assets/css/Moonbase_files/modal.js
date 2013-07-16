define([], function() {

  var Modal = {
    
    init: function() {
      this.createElements();
      this.setupEventHandlers();
    },
    
    createElements: function() {
      this.$element = $("<div />");
      this.$element.addClass("modal");
      
      this.$message = $("<div />");
      this.$message.addClass("message");
      this.$message.appendTo(this.$element);
      
      $('<div />').css("clear", "both").appendTo(this.$element);
      
      this.$element.appendTo($(document.body));

    },
    
    setupEventHandlers: function() {
      
    },
    
    setMessage: function(text) {
      this.$message.text(text);
    },
    
    setCustomDom: function($dom) {
      
    },
    
    setButtonOne: function(title, callback) {
      
    },
    
    setButtonTwo: function(title, callback) {
      
    },
    
    show: function() {
      $("#black-fade").show();
      $(".modal").show();
      
      $("#black-fade").one("click", function() {
        $("#black-fade").hide();
        $(".modal").hide();
      });
    },
    
    hide: function() {

    }
    
  
  };

  return Modal;

});