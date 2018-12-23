<!DOCTYPE html> 
<html lang="en"> 
    <head> 
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
                        <a class="nav-link dropdown-toggle" href="datatable.html" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">功能</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="select.html">Select</a>
                            <a class="dropdown-item" href="insert.html">Insert</a>
                            <a class="dropdown-item" href="update.html">Update</a>
                            <a class="dropdown-item" href="delete.html">Delete</a>
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
                <h1>新增</h1> 
            </div>             
        </div>         
        <!-- /.container -->         
        <!-- Bootstrap core JavaScript
    ================================================== -->         
        <!-- Placed at the end of the document so the pages load faster -->         
        <div class="form-group"> 
            <label for="formInput371">Name</label>             
            <input type="text" class="form-control" id="formInput371" placeholder="Enter name"> 
        </div>
        <div class="form-group"> 
            <label for="formInput392">Name</label>             
            <input type="text" class="form-control" id="formInput392" placeholder="Enter name"> 
        </div>
        <div class="form-group"> 
            <label for="formInput398">Name</label>             
            <input type="text" class="form-control" id="formInput398" placeholder="Enter name"> 
        </div>
        <div class="form-group"> 
            <label for="formInput404">Field label</label>             
            <select id="formInput404" class="form-control"> 
                <option>1</option>                 
                <option>2</option>                 
                <option>3</option>                 
            </select>             
        </div>
        <div class="form-group float-left"> 
            <label for="formInput410">法力</label>             
            <input type="text" class="form-control" id="formInput410" name="point" placeholder="Point"> 
        </div>
        <div class="form-group float-left"> 
            <label for="formInput434">攻擊</label>             
            <input type="text" class="form-control" id="formInput434" name="defense" placeholder="Defense"> 
        </div>
        <div class="form-group float-left"> 
            <label for="formInput442">防禦</label>             
            <input type="text" class="form-control" id="formInput442" name="attack" placeholder="Attack"> 
        </div>
        <div class="form-group"> 
            <textarea class="form-control" rows="3" id="formInput472" placeholder="請輸入卡牌能力。"></textarea>             
        </div>
        <script src="../assets/js/jquery.min.js"></script>         
        <script src="../assets/js/popper.js"></script>         
        <script src="../bootstrap/js/bootstrap.min.js"></script>         
    </body>     
</html>
