
$(function(){
    let n = 16, set = 0;
    let i = 0, time = 1000;
    var count = 0;
    var run;
    document.getElementById("rand").onclick = function() {start()};
    function start(){
        count = Math.floor(Math.random()*1000)+2000;
        $('.num').html(count);
        time = count;
        run = setInterval(showData, time);
        //clearInterval(run);
    }

    function showData(){
        console.log(time)
        document.getElementById(i++).style.background = "#FFF";
        i %= n;
        document.getElementById(i).style.background = "rgb(255, 173, 22)";
        set+= i;
        clearInterval(run);
        if (time > 1000) {
            time -= 200;
            run = setInterval(showData, time);
        } else if(time > 200){
            time -= 100;
            run = setInterval(showData, time);
        } else if(time > 20){
            time -= 0.5;
            run = setInterval(showData, time);
        } else if(time > 1){
            time -= 0.05;
            run = setInterval(showData, time);
        }else{
            clearInterval(run, time=null);
        }
    }
    
});

