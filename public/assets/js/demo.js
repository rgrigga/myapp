


function theBeatles(){
	var theBeatles= new Array();
	theBeatles["Drummer"]="Ringo";
	theBeatles["Lead"]="John";
	theBeatles["Bass"]="Paul";
	theBeatles["Rhythym"]="George";

	var indexKey;
	for(indexKey in theBeatles){
		document.write("indexKey is " + indexKey + "<br>");
		document.write("item value is " + theBeatles[indexKey] + "<br><hr>");
	}
}

window.onload = function()
    {
        // alert('bam!');
        if(!window.jQuery)
        {
            alert('jQuery not loaded');
        }
        else
        {
             // alert('jQuery is definitely loaded');
        }
    }

$(document).ready(function(){
	$('code').addClass('prettyprint');
});

