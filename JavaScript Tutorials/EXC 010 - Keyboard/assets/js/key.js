$(document).ready(function(){ 
    $(window).keydown(function(event){
        switch(event.keyCode) {
            case 38:
            alert("top");
            break;
            case 40:
            alert("down");
            break;
            case 37:
            alert("left");
            break;
            case 39:
            alert("right");
            break;
        }
    });
});