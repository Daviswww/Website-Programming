$(document).ready(function(){
      $("#li1").fadeIn(1000);
      $("#li2").fadeIn(2000);
      $("#li3").fadeIn(3000);
});
var go = true;
$(document).ready(function(){
    $("#li1").click(function(){
        if(go){
            go = false;
            $("#about").fadeOut(1000);
            $("#game").fadeOut(1000);
            $("#wellcom").delay(1000).fadeIn();
            go = true;
        }
    });
    $("#li2").click(function(){
        if(go){
            go = false;
            $("#wellcom").fadeOut(1000);
            $("#about").fadeOut(1000);
            $("#game").delay(1000).fadeIn();
            go = true;
        }
    });
    $("#li3").click(function(){
        if(go){
            go = false;
            $("#wellcom").fadeOut(1000);
            $("#game").fadeOut(1000);
            $("#about").delay(1000).fadeIn();
            go = true;
        }
    });

});