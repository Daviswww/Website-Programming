

<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <title>Insert</title>
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <title>Starter Template for Bootstrap</title>         
        <!-- Bootstrap core CSS -->         
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->         
        <link href="../starter-template.css" rel="stylesheet"> 
        <link rel="Shortcut Icon" type="image/x-icon" href="../img/cr.png" />
        <style>
        body { 
            background-image: url('../img/BG.png');
            background-repeat: repeat;
        }
        </style>
    </head>     
    <body> 
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="../devhome.html">Hearthstone</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../Home.html">Tourist interface <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active"> 
                        <a class="nav-link" href="../login/Signup.php">Developer sign up</a> 
                    </li>                     
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="datatable.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">功能</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="select.php">Select</a>
                            <a class="dropdown-item" href="insert.php">Insert</a>
                            <a class="dropdown-item" href="update.php">Update</a>
                            <a class="dropdown-item" href="delete.php">Delete</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>         
        <div class="container"> 
            <div class="starter-template"> 
                <h1>新增卡牌</h1>
                <form action="../includes/insert.inc.php" method="POST">
                    <div class="form-group"> 
                        <label for="formInput371" class="font-weight-bold lead float-left">#卡片編號</label>                         
                        <input type="text" class="form-control" name="uid" id="formInput371" placeholder="Card id"> 
                    </div>
                    <div class="form-group"> 
                        <label for="formInput392" class="float-left lead font-weight-bold">#名稱</label>                         
                        <input type="text" class="form-control" name="name" id="formInput392" placeholder="Card name"> 
                    </div>
                    <div class="form-group"> 
                        <label for="formInput398" class="float-left lead font-weight-bold">種族</label>                         
                        <input type="text" class="form-control" name="race" id="formInput398" placeholder="Card race"> 
                    </div>
                    <div class="form-group"> 
                        <label for="formInput404" class="float-left lead font-weight-bold">#職業</label>                         
                        <select id="formInput404" name="career" class="form-control"> 
                            <option>Neutral</option>                             
                            <option>Hunter</option>                             
                            <option>Mage</option>                             
                            <option>Paladin</option>                             
                            <option>Priest</option>                             
                            <option>Thief</option>                             
                            <option>Shaman</option>                             
                            <option>Warlock</option>                             
                            <option>Warrior</option>
                            <option>Druid</option>                             
                        </select>                         
                    </div>
                    <div class="form-group float-left"> 
                        <label for="formInput410" class="font-weight-bold lead">#法力</label>                         
                        <input type="text" class="form-control text-center" id="formInput410" name="point" placeholder="Point"> 
                    </div>
                    <div class="form-group float-left"> 
                        <label for="formInput434" class="font-weight-bold lead">#攻擊</label>                         
                        <input type="text" class="form-control text-center" id="formInput434" name="attack" placeholder="Attack"> 
                    </div>
                    <div class="form-group float-left"> 
                        <label for="formInput442" class="font-weight-bold lead">#防禦</label>                         
                        <input type="text" class="form-control text-center" id="formInput442" name="defense" placeholder="Defense"> 
                    </div>
                    <div class="form-group"> 
                        <textarea class="form-control" rows="3" id="formInput472" name="effect" placeholder="請輸入卡牌能力。"></textarea>                         
                    </div>
                    <small class="float-left text-danger">#為必填!!</small>
                    <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Insert</button>
                </form>
            </div>
        </div>         
        <!-- /.container -->         
        <!-- Bootstrap core JavaScript
    ================================================== -->         
        <!-- Placed at the end of the document so the pages load faster -->         
        <script src="../assets/js/jquery.min.js"></script>         
        <script src="../assets/js/popper.js"></script>         
        <script src="../bootstrap/js/bootstrap.min.js"></script>         
    </body>     
</html>
