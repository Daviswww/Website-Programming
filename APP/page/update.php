<?php
    session_start();
    include '../includes/dbcontrol.inc.php';
    include '../includes/dbshow.inc.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show u">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>UPDATE</title>
    <!---<link rel="stylesheet" href="resetstyle.css">--->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/main.js"></script>
  </head>
  <body>

  	<nav class="nav-main">
  	  <div class="btn-toggle-nav" onclick="toggleNav()"></div>
  	  <ul>
  	  	<li><a href="../index.php">Hearthstone</a></li>
  	  </ul>
    </nav>	
    <div class="inside">
      <aside class="nav-sidebar">
      <ul>
          <li><p></p></li>
          <li><p></p></li>
          <li><span>MENU</span></li>
          <li><a href="about.html">AUBOT</a></li>
          <li><a href="hero.html">HERO</a></li>
          <li><a href="game.html">GAME</a></li>
          <li><a href="delete.php">DELETE</a></li>
          <li><a href="update.php">UPDATE</a></li>
          <li><a href="insert.php">INSERT</a></li>
        </ul>
      </aside>
      <div class="ininder">
      <h1>UPDATE</h1><br>
      <form action = "../script/update.php" method="GET">
        	<div>
        		NAME:
            <input type="text" name="name"><br>
            COST:
				    <input type="text" name="cost"><br>
        		ATT:
        		<input type="text" name="attack"><br>
            DEF:
            <input type="text" name="defense"><br>
        	</div>
        	<button class="button" type="submit" name = "submit" ><span>Store</span></button>
      </form>	
      
      <?php
        $users = new show();
        echo "<h1>IS UPDATE</h1><br>";
        if(isset($_SESSION["name"])){
          $users->showUPDdata();
        }
        echo "<br><h1>LIST</h1><br>";
        $users->showALLdata();
      ?>
      </div>
    </div>
  </body>
</html>