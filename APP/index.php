<?php
    include 'includes/dbcontrol.inc.php';
    include 'includes/dbshow.inc.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show u">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Home</title>
  
    <!---<link rel="stylesheet" href="resetstyle.css">--->
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="nav-main">
  	  <div class="btn-toggle-nav" onclick="toggleNav()"></div>
  	  <ul>
  	  	<li><a href="index.php">Hearthstone</a></li>
  	  </ul>
    </nav>	
    <div class="inside">
    <aside class="nav-sidebar">
    <ul>
        <li><p></p></li>
        <li><p></p></li>
        <li><span>MENU</span></li>
        <li><a href="page/about.html">AUBOT</a></li>
        <li><a href="page/hero.html">HERO</a></li>
        <li><a href="page/game.html">GAME</a></li>
        <li><a href="page/delete.php">DELETE</a></li>
        <li><a href="page/update.php">UPDATE</a></li>
        <li><a href="page/insert.php">INSERT</a></li>
    </ul>
    </aside>
    <div class="ininder">
      <h1>Home</h1><br>
      <p>
        Hello text!
      </p>
      <p>

      </p>
    </div>
    </div>
    </body>
  </html>