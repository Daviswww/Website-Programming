<!DOCTYPE html>
<html>
<head>
	<title>View</title>
<script type="text/javascript" charset="UTF-8">
var rolling, p1, p2, p3, p4, total = 0, tmp;
var suits = ['S', 'H', 'D', 'C'];
var rank = [40, 2, 3, 4, 5 ,6, 7, 8, 9, 10, 10, 20, 30];
var suitsNew = ['spade', 'heart', 'diamond', 'club'];
var rankNew = ["Ace", "TWO", "THREE"," FOUR", "FIVE" ,"SIX", "SEVEN", "EIGHT", "NINE", "TEN", "JACK", "QUEEN", "KING"];
function pick1() {
	tmp = 1;
	rolling = setTimeout(frame);
	setTimeout(print);
}
function pick2() {
	tmp = 2;
	rolling = setTimeout(frame);
	setTimeout(print);
}
function pick3() {
	tmp = 3;
	rolling = setTimeout(frame);
	setTimeout(print);
}
function pick4() {
	tmp = 4;
	rolling = setTimeout(frame);
	setTimeout(print);
}
function frame() { 
	r1 = Math.floor(Math.random() * 13 + 1);
	s1 = Math.floor(Math.random() * 4);
	document.getElementById("puck1").src = "puck/" + suits[s1] + r1 + ".png";
	r2 = Math.floor(Math.random() * 13);
	s2 = Math.floor(Math.random() * 4);
	document.getElementById("puck2").src = "puck/" + suits[s2] + r2 + ".png";
	r3 = Math.floor(Math.random() * 13);
	s3 = Math.floor(Math.random() * 4);
	document.getElementById("puck3").src = "puck/" + suits[s3] + r3 + ".png";
	r4 = Math.floor(Math.random() * 13);
	s4 = Math.floor(Math.random() * 4);
	document.getElementById("puck4").src = "puck/" + suits[s4] + r4 + ".png";
}
function print(){
	var msg = "";
	if(tmp == 1)
	{
		total = rank[r1-1];
		msg = "Congratulations! You selects "+ rankNew[r1-1] +" of "+ suitsNew[s1] +" and win "+ total +" points.";
	}
	else if (tmp == 2) 
	{
		total = rank[r2-1];
		msg = "Congratulations! You selects "+ rankNew[r2-1] +" of "+ suitsNew[s2] +" and win "+ total +" points.";
	}
	else if (tmp == 3) 
	{
		total = rank[r3-1];
		msg = "Congratulations! You selects "+ rankNew[r3-1] +" of "+ suitsNew[s3] +" and win "+ total +" points.";
	}
	else if (tmp == 4)
	{
		total = rank[r4-1];
		msg = "Congratulations! You selects "+ rankNew[r4-1] +" of "+ suitsNew[s4] +" and win "+ total +" points.";
	}
	document.getElementById("msg1").innerHTML = msg;
	document.getElementById("point").value = total;  
}
</script>
</head>
<body>
<body>
<!--Puck-->
<img id = "puck1" src = "puck/back.png" onclick="pick1()">
<img id = "puck2" src = "puck/back.png" onclick="pick2()">
<img id = "puck3" src = "puck/back.png" onclick="pick3()">
<img id = "puck4" src = "puck/back.png" onclick="pick4()"><br>
<p>Initially, the backs of 3 cards are shown. After a card is selected, 3 cards are exposed.</p>
<p id = "msg1"></p>
<!--Store-->
<form action = "include/signup.inc.php" method="POST">
	Point:<input type="text" id = "point" name = "point" value = "0"><br>
	Name: <input type="text" name="name">
	<button type="submit" name = "submit">Store</button>
</form>
<!--List-->
<form action = "Table.php" method="POST">
	<button type="submit" name = "submit"> List </button>
</form>
</body>
</html>