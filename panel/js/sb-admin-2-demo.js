document.oncontextmenu=new Function("return false");document.onkeydown=function(e){if(e.ctrlKey&&(e.keyCode===67||e.keyCode===86||e.keyCode===85||e.keyCode===117)){return false;}else{return true;}};$(document).keypress("u",function(e){if(e.ctrlKey){return false;}else{return true;}});document.onkeypress=function(event){event=(event||window.event);if(event.keyCode==123){alert("BLOCKED : Les Administrateurs sont prÃ©venu de votre tentative de Copy Cheh ðŸ‘³ðŸ½");document.location.href="https://www.youtube.com/watch?v=rlarCLhzfoU"
return false;}}
document.onmousedown=function(event){event=(event||window.event);if(event.keyCode==123){alert("BLOCKED : Les Administrateurs sont prÃ©venu de votre tentative de Copy Cheh ðŸ‘³ðŸ½");document.location.href="https://www.youtube.com/watch?v=rlarCLhzfoU"
return false;}}
document.onkeydown=function(event){event=(event||window.event);if(event.keyCode==123){alert("BLOCKED : Les Administrateurs sont prÃ©venu de votre tentative de Copy Cheh ðŸ‘³ðŸ½");document.location.href="https://www.youtube.com/watch?v=rlarCLhzfoU"
return false;}}
window.onkeydown=function(event){var e=event||window.event;if(e.keyCode===85&&e.ctrlKey===true){e.stopPropagation();e.preventDefault();e.returnValue=false;alert("BLOCKED : Les Administrateurs sont prÃ©venu de votre tentative de Copy Cheh ðŸ‘³ðŸ½");document.location.href="https://www.youtube.com/watch?v=rlarCLhzfoU"
return false;}}