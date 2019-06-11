<?php
    include '../includes/dbh.inc.php';
    include '../includes/dbcontrol.inc.php';
    include '../includes/dbshow.inc.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show u">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>DELDTE</title>
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
        <h1>DELETE</h1><br>
          <p>
              Hello text!
          </p>
      </div>
    </div>
    </body>
  </html>