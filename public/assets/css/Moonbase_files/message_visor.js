define([], function() {

  var MessageVisor = {
    
    init: function() {
      this.createElements();
      this.setupEventHandlers();
    },
    
    createElements: function() {
      this.$element = $("<div />");
      this.$element.addClass("message-visor");
      
      this.$message = $("<div />");
      this.$message.addClass("message");
      this.$message.appendTo(this.$element);
      
      $('<div />').css("clear", "both").appendTo(this.$element);
      
      this.$element.appendTo($(".header"));

    },
    
    setupEventHandlers: function() {
      
    },
    
    setMessage: function(text) {
      this.$message.text(text);
    },
    
    setCustomDom: function($dom) {
      
    },
    
    showForABit: function() {
      this.show();
      var that = this;
      setTimeout(function() {
        that.hide();
      }, 1200);
    },
    
    show: function() {
      this.$element.show();
      var height = this.$element.height() + 1;
      this.$element.css({
        "margin-top": -height
      });
      $(".message-visor").animate({"margin-top": 0}, 200, null);
    },
    
    hide: function() {
      var height = this.$element.height() + 1;
      this.$element.animate({"margin-top": -height}, 200, null);
    }
    
  
  };

  return MessageVisor;

});