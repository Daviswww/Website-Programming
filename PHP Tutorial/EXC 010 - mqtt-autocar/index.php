<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>test</title>
    <meta name="author" content="Davis" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="node_modules/qrcode-reader/dist/index.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/brython-dev/brython/3.4.0/www/src/brython.js"></script>
    <script type="text/javascript" src="assets/js/qrcode.js"></script>
    <script type="text/javascript" src="assets/js/carcon.js"></script>
    <script type="text/javascript" src="assets/js/btn.js"></script>
  </head>
  <body>
    <div id="gameboy_shell">
      <div id="game">
        <img class="cam" src="http://172.20.10.2:8080?action=stream" />
      </div>
      <div id="controller">
        <div id="controller_dpad">
          <div id="controller_left"></div>
          <div id="controller_right"></div>
          <div id="controller_up"></div>
          <div id="controller_down"></div>
        </div>
        <div id="controller_end" class="capsuleBtn">
          <input type="file" id="upload" >
        </div>
        <div id="controller_start" class="capsuleBtn">
          <input type="submit" value="GO" name="GO">
        </div>
        <?php 
          if(isset($_POST['GO'])){
            $command = escapeshellcmd('python assets/py/snapshot.py');
            $output = shell_exec($command);
            echo $output;
          }
        ?>
        <div id="controller_b" class="roundBtn"><</div>
        <div id="controller_a" class="roundBtn">></div>
      </div>      
    </div>
    
  </body>
</html>
