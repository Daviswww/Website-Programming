<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" charset="UTF-8">
var rolling, d1, d2, d3, d4, d5, d6, total = 0;
function roll() {
  rolling = setTimeout(frame);
  setTimeout(print);
}
function frame() {  
  d1 = Math.floor(Math.random() * 6) + 1;
  document.getElementById("dice1").src = "dice" + d1 + ".png";
  d2 = Math.floor(Math.random() * 6) + 1;
  document.getElementById("dice2").src = "dice" + d2 + ".png";
  d3 = Math.floor(Math.random() * 6) + 1;
  document.getElementById("dice3").src = "dice" + d3 + ".png";
  d4 = Math.floor(Math.random() * 6) + 1;
  document.getElementById("dice4").src = "dice" + d4 + ".png";
  
}
function print(){
  var msg = "";
  total = d1 + d2 + d3 + d4;
  msg = "You got " + total +" points.";
  document.getElementById("dom1").innerHTML = msg;
  document.getElementById("point").value = total;  
  }
</script>
</head>
<body>
<!--player-->
<img id = "dice1" src = "dice1.png" />
<img id = "dice2" src = "dice1.png" />
<img id = "dice3" src = "dice1.png" />
<img id = "dice4" src = "dice1.png" /><br>
<button onclick="roll()">Roll</button>
<p id = "dom1" /><br/>
<form action = "include/signup.inc.php" method="POST">
<button type="submit" name = "submit1">Store</button>
<input type="text" name="first" placeholder="Name">
<input type="text" id = "point" name = "point" value = "0">
</form> 

<form action = "View.php" method="POST">
<button type="submit" name = "submit2">List</button>
</form> 
</body>
</html>

