<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
<form action = "include/signup.inc.php" method="POST">
	<div>
		<p>
			Gender:
			<input type="radio" name="gender" value="Female">Female
			<input type="radio" name="gender" value="male">Male	
		</p>
		<p>
			Age:<input type="text" name="age" placeholder="Age"></p>		
			Occupation:<input type="text" name="occupation" placeholder="Occupation"></p>
			Income:<input type="text" name="income" placeholder="Income">		
		</p>
	</div>
	<div>
		<p>
			<p>1 .  What is your favoriate drink?</p>
			<input type="radio" name="drink" value=1>Coke
			<input type="radio" name="drink" value=2>Juice
			<input type="radio" name="drink" value=3>Coke
			<input type="radio" name="drink" value=4>Juice			
		</p>
		<p>
			<p>2 .  What's your favorite bread?</p>
			<input type="radio" name="bread" value=1>Blue bread
			<input type="radio" name="bread" value=2>Red bread
			<input type="radio" name="bread" value=3>Yellow bread
			<input type="radio" name="bread" value=4>Orange bread		
		</p>
		<p>
			<p>3 .  What's your favorite seafood?</p>
			<input type="radio" name="seafood" value=1>fish
			<input type="radio" name="seafood" value=2>molluscs
			<input type="radio" name="seafood" value=3>crustaceans
			<input type="radio" name="seafood" value=4>other aquatic animals		
		</p>
		<p>
			<p>4 .  What's your favorite fruit?</p>
			<input type="radio" name="fruit" value=1>Berrys 
			<input type="radio" name="fruit" value=2>Citrus fruit
			<input type="radio" name="fruit" value=3>Stone fruits
			<input type="radio" name="fruit" value=4>Kernel fruits				
		</p>
		<p>
			<p>5 .  What's your favorite music?</p>
			<input type="radio" name="music" value=1>Rhythm and blues
			<input type="radio" name="music" value=2>Electronic Music
			<input type="radio" name="music" value=3>Techno
			<input type="radio" name="music" value=4>Hip-Hop			
		</p>
		<p>
			<p>6 .  What's your favorite ball?</p>
			<input type="radio" name="ball" value=1>Badminton
			<input type="radio" name="ball" value=2>Angleball
			<input type="radio" name="ball" value=3>Baseball
			<input type="radio" name="ball" value=4>Basketball		
		</p>
		<p>
			<p>7 .  What's your favorite clothes?</p>
			<input type="radio" name="clothes" value=1>Rolex
			<input type="radio" name="clothes" value=2>Uniqlo
			<input type="radio" name="clothes" value=3>Gucci
			<input type="radio" name="clothes" value=4>Cartier		
		</p>
		<p>
			<p>8 .  What's your favorite car?</p>
			<input type="radio" name="car" value=1>Volvo
			<input type="radio" name="car" value=2>Subaru
			<input type="radio" name="car" value=3>Lincoln
			<input type="radio" name="car" value=4>Toyota			
		</p>
		<p>
			<p>9 .  What's your favorite shoes?</p>
			<input type="radio" name="shoes" value=1>Nike
			<input type="radio" name="shoes" value=2>Reebok
			<input type="radio" name="shoes" value=3>PUMA
			<input type="radio" name="shoes" value=4>UMBRO		
		</p>
		<p>
			<p>10 . What's your favorite colour?</p>
			<input type="radio" name="colour" value=1>Blue
			<input type="radio" name="colour" value=2>Red
			<input type="radio" name="colour" value=3>Yellow
			<input type="radio" name="colour" value=4>Oringe		
		</p>
	</div>
<button type="submit" name = "submit">Store</button>
</form>	
</body>
</html>