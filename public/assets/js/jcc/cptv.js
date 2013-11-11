/**************************************************************
This js is called from the form by this line in the header:

<script type="text/javascript" src="messages/messages.js"></script>

Otherwise, just adjust the variables below in this format:
var [formname] = form.[formname].value;

Then, adjust the if...then statements as necessary

Finally, adjust the regex strings approriately. 
  
*****************************************************************/


// form validation function //
function validate(form) {
  
  //alert ("Howdy from validator!!"+form);
  
  //var name = form.name.value;
  var first = form.first.value;
  
  //alert (first);
  
  var last = form.last.value;
  var address = form.address.value;
  var city = form.city.value;
  var state = form.state.value;
  var zip = form.zip.value;
  var phone1 = form.phone1.value;
  var phone2 = form.phone2.value;
  //var phone3 = form.work.value;
  var email = form.myemail.value;
  //var besttime = form.besttime.checked;
  var bestAM = form.besttime[0].checked;
  var bestPM = form.besttime[1].checked;
  var comments = form.ccomments.value;

 
  var phoneRegex = /^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$/;
  var zipRegex = /(^\d{5}$)|(^\d{5}-\d{4}$)/;
  var nameRegex = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
  //var cityRegex = /^[a-zA-Z]+(([\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
  var cityRegex= /^[A-Za-z. '-]+$/;
  var addressRegex = /\d{1,3}.?\d{0,3}\s[a-zA-Z]{2,30}\s[a-zA-Z]{2,15}/;
  var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
  var commentsRegex = new RegExp(/<\/?\w+((\s+\w+(\s*=\s*(?:".*?"|'.*?'|[^'">\s]+))?)+\s*|\s*)\/?>/gim);

//alert("Howdy");
//alert("FIRST: "+first);

//alert(state);
//alert ("Email: " + email);

  if(first == "") {
    //alert("need first");
    inlineMsg('first','You must enter your First Name.',2);
    return false;
  }
  if(!first.match(nameRegex)) {
    inlineMsg('first','You have entered an invalid name.',2);
    return false;
  }
  
  if(last == "") {
    inlineMsg('last','You must enter your Last Name.',2);
    return false;
  }
  if(!last.match(nameRegex)) {
    inlineMsg('last','You have entered an invalid name.',2);
    return false;
  }
  
  if(address == "") {
    inlineMsg('address','You must enter an Address.',2);
    return false;
  }
  
  if(!address.match(addressRegex)) {
    inlineMsg('address','You appear to have entered an invalid address - try like "123 Any Street".',2);
    return false;
  }
  
  if (city == ""){
    inlineMsg('city','You must enter a City.',2);
    return false;
  }

  if(!city.match(cityRegex)) {
    inlineMsg('city','Please enter a valid City - like "Honolulu".',2);
    return false;
  }
  
  if (state == "XX"){
    inlineMsg('state','You must choose a State.',2);
    return false;
  }
  
  if (zip == ""){
    inlineMsg('zip','You must enter a Zip Code.',2);
    return false;
  }

  if(!zip.match(zipRegex)) {
    inlineMsg('zip','You appear to have entered an invalid zip code - try like "43082" or "43082-1234".',2);
    return false;
  }
  
  //alert (phone);
  
  if (phone1 == ""){
    inlineMsg('phone1','Please enter 9 digit Phone, as in "614-898-7663".',2);
    return false;
  }
  
  //if(!phone1 == "") {
    if(!phone1.match(phoneRegex)) {
      inlineMsg('phone1','Please enter 9 digit Phone, as in "614-898-7663".',2);
      return false;
    }
  //}
  
  if(!phone2 == "") {
    if(!phone2.match(phoneRegex)) {
      inlineMsg('phone2','Please enter 9 digit Phone, as in "614-898-7663".',2);
      return false;
    }
  }
  
  //alert("Howdy! Email is " + email);
  
  //if(!phone3 == "") {
  //  if(!phone3.match(phoneRegex)) {
  //  inlineMsg('work','Please enter 9 digit Phone, as in "614-898-7663".',2);
  //  return false;
  //  }
  //}
  
  if(email == "") {
    //alert ("email is blank");
    //inlineMsg('phone2','Please enter 9 digit Phone, as in "614-898-7663".',2);
    inlineMsg('myemail','You must enter your email.',2);
    return false;
  }
  //else {
    //alert("email is not blank");
  
  //if(!email==""){
    if(!email.match(emailRegex)) {
      //inlineMsg('phone2','Please enter 9 digit Phone, as in "614-898-7663".',2);
      inlineMsg('myemail','You must enter a valid email, as in you@somewhere.com',2);
      return false;
    }
  //}
  //}
  //at this time, I am not validating for "best time to contact".
  //instead, an empty selection will trigger a value of "Any".
  //With that said, below is the working code to debug or activate besttime validation.

  //alert(besttime)
  //alert(bestAM)
  //alert(bestPM)

  //if(bestAM == false){
  //  if (bestPM == false){
  //  inlineMsg('besttimePM','<strong>Error</strong><br />Please select the best time to reach you.',2);
  //  return false;
  //  }
  //}
  
  if(comments == "") {
    inlineMsg('ccomments','Please tell us a little about how we can help you!');
    return false;
  }
  if(comments.match(commentsRegex)) {
    inlineMsg('ccomments','You have entered a message with invalid characters.');
    return false;
  }
  return true;
}

// START OF MESSAGE SCRIPT //

var MSGTIMER = 30;
var MSGSPEED = 5;
var MSGOFFSET = 3;
var MSGHIDE = 3;

// build out the divs, set attributes and call the fade function //
function inlineMsg(target,string,autohide) {
  var msg;
  var msgcontent;
  if(!document.getElementById('msg')) {
    msg = document.createElement('div');
    msg.id = 'msg';
    msgcontent = document.createElement('div');
    msgcontent.id = 'msgcontent';
    document.body.appendChild(msg);
    msg.appendChild(msgcontent);
    msg.style.filter = 'alpha(opacity=0)';
    msg.style.opacity = 0;
    msg.alpha = 0;
  } else {
    msg = document.getElementById('msg');
    msgcontent = document.getElementById('msgcontent');
  }
  msgcontent.innerHTML = string;
  msg.style.display = 'block';
  var msgheight = msg.offsetHeight;
  var targetdiv = document.getElementById(target);
  targetdiv.focus();
  var targetheight = targetdiv.offsetHeight;
  var targetwidth = targetdiv.offsetWidth;
  var topposition = topPosition(targetdiv) - ((msgheight - targetheight) / 2);
  var leftposition = leftPosition(targetdiv) + targetwidth + MSGOFFSET;
  msg.style.top = topposition + 'px';
  msg.style.left = leftposition + 'px';
  clearInterval(msg.timer);
  msg.timer = setInterval("fadeMsg(1)", MSGTIMER);
  if(!autohide) {
    autohide = MSGHIDE;  
  }
  window.setTimeout("hideMsg()", (autohide * 1500));
}

// hide the form alert //
function hideMsg(msg) {
  var msg2 = document.getElementById('msg');
  if(!msg2.timer) {
    msg2.timer = setInterval("fadeMsg(0)", MSGTIMER);
  }
}

// face the message box //
function fadeMsg(flag) {
  if(flag == null) {
    flag = 1;
  }
  var msg = document.getElementById('msg');
  var value;
  if(flag == 1) {
    value = msg.alpha + MSGSPEED;
  } else {
    value = msg.alpha - MSGSPEED;
  }
  msg.alpha = value;
  msg.style.opacity = (value / 100);
  msg.style.filter = 'alpha(opacity=' + value + ')';
  if(value >= 99) {
    clearInterval(msg.timer);
    msg.timer = null;
  } else if(value <= 1) {
    msg.style.display = "none";
    clearInterval(msg.timer);
  }
}

// calculate the position of the element in relation to the left of the browser //
function leftPosition(target) {
  var left = 0;
  if(target.offsetParent) {
    while(1) {
      left += target.offsetLeft;
      if(!target.offsetParent) {
        break;
      }
      target = target.offsetParent;
    }
  } else if(target.x) {
    left += target.x;
  }
  return left;
}

// calculate the position of the element in relation to the top of the browser window //
function topPosition(target) {
  var top = 0;
  if(target.offsetParent) {
    while(1) {
      top += target.offsetTop;
      if(!target.offsetParent) {
        break;
      }
      target = target.offsetParent;
    }
  } else if(target.y) {
    top += target.y;
  }
  return top;
}

// preload the arrow //
if(document.images) {
  arrow = new Image(7,80); 
  arrow.src = "images/msg_arrow.gif"; 
}




// Copyright (C) 2005-2008 Ilya S. Lyubinskiy. All rights reserved.
// Technical support: http://www.php-development.ru/
//
// YOU MAY NOT
// (1) Remove or modify this copyright notice.
// (2) Re-distribute this code or any part of it.
//     Instead, you may link to the homepage of this code:
//     http://www.php-development.ru/javascripts/popup-window.php
//
// YOU MAY
// (1) Use this code on your website.
// (2) Use this code as part of another product.
//
// NO WARRANTY
// This code is provided "as is" without warranty of any kind.
// You expressly acknowledge and agree that use of this code is at your own risk.

// USAGE
//
// function popup_show(id, drag_id, exit_id, position, x, y, position_id)
//
// id          - id of a popup window;
// drag_id     - id of an element within popup window intended for dragging it
// exit_id     - id of an element within popup window intended for hiding it
// position    - positioning type:
//               "element", "element-right", "element-bottom", "mouse",
//               "screen-top-left", "screen-center", "screen-bottom-right"
// x, y        - offset
// position_id - id of an element relative to which popup window will be positioned


// ***** Variables *************************************************************

var popup_dragging = false;
var popup_target;
var popup_mouseX;
var popup_mouseY;
var popup_mouseposX;
var popup_mouseposY;
var popup_oldfunction;


// ***** popup_mousedown *******************************************************

function popup_mousedown(e)
{
  var ie = navigator.appName == "Microsoft Internet Explorer";

  popup_mouseposX = ie ? window.event.clientX : e.clientX;
  popup_mouseposY = ie ? window.event.clientY : e.clientY;
}


// ***** popup_mousedown_window ************************************************

function popup_mousedown_window(e)
{
  var ie = navigator.appName == "Microsoft Internet Explorer";

  if ( ie && window.event.button != 1) return;
  if (!ie && e.button            != 0) return;

  popup_dragging = true;
  popup_target   = this['target'];
  popup_mouseX   = ie ? window.event.clientX : e.clientX;
  popup_mouseY   = ie ? window.event.clientY : e.clientY;

  if (ie)
       popup_oldfunction = document.onselectstart;
  else popup_oldfunction = document.onmousedown;

  if (ie)
       document.onselectstart = new Function("return false;");
  else document.onmousedown   = new Function("return false;");
}


// ***** popup_mousemove *******************************************************

function popup_mousemove(e)
{
  var ie      = navigator.appName == "Microsoft Internet Explorer";
  var element = document.getElementById(popup_target);
  var mouseX  = ie ? window.event.clientX : e.clientX;
  var mouseY  = ie ? window.event.clientY : e.clientY;

  if (!popup_dragging) return;

  element.style.left = (element.offsetLeft+mouseX-popup_mouseX)+'px';
  element.style.top  = (element.offsetTop +mouseY-popup_mouseY)+'px';

  popup_mouseX = ie ? window.event.clientX : e.clientX;
  popup_mouseY = ie ? window.event.clientY : e.clientY;
}

// ***** popup_mouseup *********************************************************

function popup_mouseup(e)
{
  var ie      = navigator.appName == "Microsoft Internet Explorer";
  var element = document.getElementById(popup_target);

  if (!popup_dragging) return;

  popup_dragging = false;

  if (ie)
       document.onselectstart = popup_oldfunction;
  else document.onmousedown   = popup_oldfunction;
}

// ***** popup_exit ************************************************************

function popup_exit(e)
{
  var ie      = navigator.appName == "Microsoft Internet Explorer";
  var element = document.getElementById(popup_target);

  popup_mouseup(e);
  element.style.display = 'none';
}


// ***** popup_show ************************************************************

function popup_show(id, drag_id, exit_id, position, x, y, position_id)
{
  var element      = document.getElementById(id);
  var drag_element = document.getElementById(drag_id);
  var exit_element = document.getElementById(exit_id);

  var width        = window.innerWidth  ? window.innerWidth  : document.documentElement.clientWidth;
  var height       = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight;

  element.style.position = "absolute";
  element.style.display  = "block";

  if (position == "element" || position == "element-right" || position == "element-bottom")
  {
    var position_element = document.getElementById(position_id);

    for (var p = position_element; p; p = p.offsetParent)
      if (p.style.position != 'absolute')
      {
        x += p.offsetLeft;
        y += p.offsetTop;
      }

    if (position == "element-right" ) x += position_element.clientWidth;
    if (position == "element-bottom") y += position_element.clientHeight;

    element.style.left = x+'px';
    element.style.top  = y+'px';
  }

  if (position == "mouse")
  {
    element.style.left = (document.documentElement.scrollLeft+popup_mouseposX+x)+'px';
    element.style.top  = (document.documentElement.scrollTop +popup_mouseposY+y)+'px';
  }

  if (position == "screen-top-left")
  {
    element.style.left = (document.documentElement.scrollLeft+x)+'px';
    element.style.top  = (document.documentElement.scrollTop +y)+'px';
  }

  if (position == "screen-center")
  {
    element.style.left = (document.documentElement.scrollLeft+(width -element.clientWidth )/2+x)+'px';
    element.style.top  = (document.documentElement.scrollTop +(height-element.clientHeight)/2+y)+'px';
  }

  if (position == "screen-bottom-right")
  {
    element.style.left = (document.documentElement.scrollLeft+(width -element.clientWidth )  +x)+'px';
    element.style.top  = (document.documentElement.scrollTop +(height-element.clientHeight)  +y)+'px';
  }

  drag_element['target']   = id;
  drag_element.onmousedown = popup_mousedown_window;

  exit_element.onclick     = popup_exit;
}


// ***** Attach Events *********************************************************

if (navigator.appName == "Microsoft Internet Explorer")
     document.attachEvent   ('onmousedown', popup_mousedown);
else document.addEventListener('mousedown', popup_mousedown, false);

if (navigator.appName == "Microsoft Internet Explorer")
     document.attachEvent   ('onmousemove', popup_mousemove);
else document.addEventListener('mousemove', popup_mousemove, false);

if (navigator.appName == "Microsoft Internet Explorer")
     document.attachEvent   ('onmouseup', popup_mouseup);
else document.addEventListener('mouseup', popup_mouseup, false);



	function mailpage()
	{
		mail_str = "mailto:?subject=Check this out: " + document.title;
		mail_str += "&body=I thought you might be interested in " + document.title; + ".";
		mail_str += ". You can view here: " + location.href;
		location.href = mail_str;
	}