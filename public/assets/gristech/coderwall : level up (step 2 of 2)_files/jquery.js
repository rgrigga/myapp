/*
  jQuery Ketchup Plugin - Tasty Form Validation
  ---------------------------------------------
  
  Version 0.3.1 - 12. Jan 2011
  
  Copyright (c) 2011 by Sebastian Senf:
    http://mustardamus.com/
    http://usejquery.com/
    http://twitter.com/mustardamus

  Dual licensed under the MIT and GPL licenses:
    http://www.opensource.org/licenses/mit-license.php
    http://www.gnu.org/licenses/gpl.html

  Demo: http://demos.usejquery.com/ketchup-plugin/
  Repo: http://github.com/mustardamus/ketchup-plugin
*/
(function(t){t.ketchup={defaults:{attribute:"data-validate",validateIndicator:"validate",eventIndicator:"on",validateEvents:"blur",validateElements:["input","textarea","select"],createErrorContainer:null,showErrorContainer:null,hideErrorContainer:null,addErrorMessages:null},dataNames:{validationString:"ketchup-validation-string",validations:"ketchup-validations",events:"ketchup-events",elements:"ketchup-validation-elements",container:"ketchup-container"},validations:{},helpers:{},validation:function(e,t,n,r){var i;return typeof t=="function"?t=t:(i=t,t=n),this.validations[e]={message:i,func:t,init:r||function(){}},this},message:function(e,t){return this.addMessage(e,t),this},messages:function(e){for(name in e)this.addMessage(name,e[name]);return this},addMessage:function(e,t){this.validations[e]&&(this.validations[e].message=t)},helper:function(e,t){return this.helpers[e]=t,this},init:function(e,n,r){this.options=n;var i=this;n=this.initFunctions().initFields(e,r),n.each(function(){var n=t(this);i.bindValidationEvent(e,n).callInitFunctions(e,n)}),e.data(this.dataNames.elements,n),this.bindFormSubmit(e)},initFunctions:function(){var e=this.options,t=["createErrorContainer","showErrorContainer","hideErrorContainer","addErrorMessages"];for(f=0;f<t.length;f++){var n=t[f];e[n]||(e[n]=this[n])}return this},initFields:function(e,n){var r=this,i=this.dataNames,s=t(n?this.fieldsFromObject(e,n):this.fieldsFromForm(e));return s.each(function(){var e=t(this),n=r.extractValidations(e.data(i.validationString),r.options.validateIndicator);e.data(i.validations,n)}),s},callInitFunctions:function(e,t){var n=t.data(this.dataNames.validations);for(i=0;i<n.length;i++)n[i].init.apply(this.helpers,[e,t])},fieldsFromForm:function(e){var n=this,r=this.options,s=this.dataNames,o=r.validateElements,u=[];o=typeof o=="string"?[o]:o;for(i=0;i<o.length;i++){var a=e.find(o[i]+"["+r.attribute+"*="+r.validateIndicator+"]");a.each(function(){var e=t(this),i=e.attr(r.attribute),o=n.extractEvents(i,r.eventIndicator);e.data(s.validationString,i).data(s.events,o?o:r.validateEvents)}),u.push(a.get())}return this.normalizeArray(u)},fieldsFromObject:function(e,t){var n=this.options,r=this.dataNames,i=[];for(s in t){var o,u;typeof t[s]=="string"?(o=t[s],u=n.validateEvents):(o=t[s][0],u=t[s][1]);var a=e.find(s);o=this.mergeValidationString(a,o),u=this.mergeEventsString(a,u),a.data(r.validationString,n.validateIndicator+"("+o+")").data(r.events,u),i.push(a.get())}return this.normalizeArray(i)},mergeEventsString:function(e,n){var r=e.data(this.dataNames.events),s="";if(r){r=r.split(" ");for(i=0;i<r.length;i++)n.indexOf(r[i])==-1&&(s+=" "+r[i])}return t.trim(n+s)},mergeValidationString:function(e,t){var r=this.options,s=e.data(this.dataNames.validationString),u=function(e){var t=e.name;return e.arguments.length&&(t=t+"("+e.arguments.join(",")+")"),t},a=function(e,t){for(i=0;i<e.length;i++)if(e[i].name==t.name)return!0};if(s){var f=this.extractValidations(r.validateIndicator+"("+t+")",r.validateIndicator);r=this.extractValidations(s,r.validateIndicator),t="";for(o=0;o<r.length;o++)t+=u(r[o])+",";for(n=0;n<f.length;n++)a(r,f[n])||(t+=u(f[n])+",")}return t},bindFormSubmit:function(e){var t=this;e.submit(function(){return t.allFieldsValid(e,!0)})},allFieldsValid:function(e,n){var r=this,i=!0;return e.data(this.dataNames.elements).each(function(){var s=t(this);r.validateElement(s,e)!=1&&(n==1&&r.triggerValidationEvents(s),i=!1)}),e.trigger("formIs"+(i?"Valid":"Invalid"),[e]),i},bindValidationEvent:function(e,t){var n=this,r=this.options,s=this.dataNames,o=t.data(s.events).split(" ");for(i=0;i<o.length;i++)t.bind("ketchup."+o[i],function(){var i=n.validateElement(t,e),o=t.data(s.container);i!=1?(o||(o=r.createErrorContainer(e,t),t.data(s.container,o)),r.addErrorMessages(e,t,o,i),r.showErrorContainer(e,t,o)):o&&r.hideErrorContainer(e,t,o)}),this.bindValidationEventBridge(t,o[i]);return this},bindValidationEventBridge:function(e,t){e.bind(t,function(){e.trigger("ketchup."+t)})},validateElement:function(e,t){var n=[],r=e.data(this.dataNames.validations),s=[t,e,e.val()];for(i=0;i<r.length;i++)r[i].func.apply(this.helpers,s.concat(r[i].arguments))||n.push(r[i].message);return t.trigger("fieldIs"+(n.length?"Invalid":"Valid"),[t,e]),n.length?n:!0},elementIsValid:function(e){var t=this.dataNames;return e.data(t.validations)?(t=e.parentsUntil("form").last().parent(),this.validateElement(e,t)==1?!0:!1):e.data(t.elements)?this.allFieldsValid(e):null},triggerValidationEvents:function(e){for(var t=e.data(this.dataNames.events).split(" "),n=0;n<t.length;n++)e.trigger("ketchup."+t[n])},extractValidations:function(e,n){for(var r=e.substr(e.indexOf(n)+n.length+1),i="",s=[],o=0,u=[],f=0;f<r.length;f++)switch(r.charAt(f)){case"(":i+="(",o++;break;case")":o?(i+=")",o--):s.push(t.trim(i));break;case",":o?i+=",":(s.push(t.trim(i)),i="");break;default:i+=r.charAt(f)}for(v=0;v<s.length;v++){o=s[v].indexOf("("),r=s[v],i=[],o!=-1&&(r=t.trim(s[v].substr(0,o)),i=t.map(s[v].substr(r.length).split(","),function(e){return t.trim(e.replace("(","").replace(")",""))}));if((o=this.validations[r])&&o.message){f=o.message;for(a=1;a<=i.length;a++)f=f.replace("{arg"+a+"}",i[a-1]);u.push({name:r,arguments:i,func:o.func,message:f,init:o.init})}}return u},extractEvents:function(e,t){var n=!1,r=e.indexOf(t+"(");return r!=-1&&(n=e.substr(r+t.length+1).split(")")[0]),n},normalizeArray:function(t){var n=[];for(i=0;i<t.length;i++)for(e=0;e<t[i].length;e++)t[i][e]&&n.push(t[i][e]);return n},createErrorContainer:function(e,n){if(typeof e=="function")return this.defaults.createErrorContainer=e,this;var r=n.offset();return t("<div/>",{html:"<ul></ul><span></span>","class":"ketchup-error",css:{top:r.top,left:r.left+n.outerWidth()-20}}).appendTo("body")},showErrorContainer:function(e,t,n){if(typeof e=="function")return this.defaults.showErrorContainer=e,this;n.show().animate({top:t.offset().top-n.height(),opacity:1},"fast")},hideErrorContainer:function(e,t,n){if(typeof e=="function")return this.defaults.hideErrorContainer=e,this;n.animate({top:t.offset().top,opacity:0},"fast",function(){n.hide()})},addErrorMessages:function(e,n,r,s){if(typeof e=="function")return this.defaults.addErrorMessages=e,this;e=r.children("ul"),e.html("");for(i=0;i<s.length;i++)t("<li/>",{text:s[i]}).appendTo(e)}},t.fn.ketchup=function(e,n){var r=t(this);if(typeof e=="string")switch(e){case"validate":t.ketchup.triggerValidationEvents(r);break;case"isValid":return t.ketchup.elementIsValid(r)}else this.each(function(){t.ketchup.init(r,t.extend({},t.ketchup.defaults,e),n)});return this}})(jQuery),jQuery.ketchup.validation("required","This field is required.",function(e,t,n){return e=t.attr("type").toLowerCase(),e=="checkbox"||e=="radio"?t.attr("checked")==1:n.length!=0}).validation("minlength","This field must have a minimal length of {arg1}.",function(e,t,n,r){return n.length>=+r}).validation("maxlength","This field must have a maximal length of {arg1}.",function(e,t,n,r){return n.length<=+r}).validation("rangelength","This field must have a length between {arg1} and {arg2}.",function(e,t,n,r,i){return n.length>=r&&n.length<=i}).validation("min","Must be at least {arg1}.",function(e,t,n,r){return this.isNumber(n)&&+n>=+r}).validation("max","Can not be greater than {arg1}.",function(e,t,n,r){return this.isNumber(n)&&+n<=+r}).validation("range","Must be between {arg1} and {arg2}.",function(e,t,n,r,i){return this.isNumber(n)&&+n>=+r&&+n<=+i}).validation("number","Must be a number.",function(e,t,n){return this.isNumber(n)}).validation("digits","Must be digits.",function(e,t,n){return/^\d+$/.test(n)}).validation("email","Must be a valid E-Mail.",function(e,t,n){return this.isEmail(n)}).validation("url","Must be a valid URL.",function(e,t,n){return this.isUrl(n)}).validation("username","Must be a valid username.",function(e,t,n){return this.isUsername(n)}).validation("match","Must be {arg1}.",function(e,t,n,r){return t.val()==r}).validation("contain","Must contain {arg1}",function(e,t,n,r){return this.contains(n,r)}).validation("date","Must be a valid date.",function(e,t,n){return this.isDate(n)}).validation("minselect","Select at least {arg1} checkboxes.",function(e,t,n,r){return r<=this.inputsWithName(e,t).filter(":checked").length},function(e,t){this.bindBrothers(e,t)}).validation("maxselect","Select not more than {arg1} checkboxes.",function(e,t,n,r){return r>=this.inputsWithName(e,t).filter(":checked").length},function(e,t){this.bindBrothers(e,t)}).validation("rangeselect","Select between {arg1} and {arg2} checkboxes.",function(e,t,n,r,i){return e=this.inputsWithName(e,t).filter(":checked").length,r<=e&&i>=e},function(e,t){this.bindBrothers(e,t)}),jQuery.ketchup.helper("isNumber",function(e){return/^-?(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/.test(e)}).helper("contains",function(e,t){return e.indexOf(t)!=-1}).helper("isEmail",function(e){return/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i.test(e)}).helper("isUrl",function(e){return/^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(e)}).helper("isUsername",function(e){return/^([a-zA-Z])[a-zA-Z_-]*[\w_-]*[\S]$|^([a-zA-Z])[0-9_-]*[\S]$|^[a-zA-Z]*[\S]$/.test(e)}).helper("isDate",function(e){return!/Invalid|NaN/.test(new Date(e))}).helper("inputsWithName",function(e,t){return $('input[name="'+t.attr("name")+'"]',e)}).helper("inputsWithNameNotSelf",function(e,t){return this.inputsWithName(e,t).filter(function(){return $(this).index()!=t.index()})}).helper("getKetchupEvents",function(e){e=e.data("events").ketchup;var t=[];for(i=0;i<e.length;i++)t.push(e[i].namespace);return t.join(" ")}).helper("bindBrothers",function(e,t){this.inputsWithNameNotSelf(e,t).bind(this.getKetchupEvents(t),function(){t.ketchup("validate")})});