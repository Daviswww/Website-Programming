<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Signin Template for Bootstrap</title>
        <!-- Bootstrap core CSS -->
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="sign-in.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="Home.html">Hearthstone</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../Home.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="signup.php">Sign-up</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link disabled" href="signin.php">Sign-in</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../database/datatable.html" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">功能</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="../database/select.html">Select</a>
                            <a class="dropdown-item" href="../database/insert.html">Insert</a>
                            <a class="dropdown-item" href="../database/update.html">Update</a>
                            <a class="dropdown-item" href="../database/delete.html">Delete</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../homebase/hometable.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">介紹</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="../homebase/card.html">卡片介紹</a>
                            <a class="dropdown-item" href="../homebase/Teach.html">遊戲介紹</a>
                            <a class="dropdown-item" href="../homebase/hero.html">英雄介紹</a>
                            <a class="dropdown-item" href="../homebase/secret.html">技巧介紹</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>         
        <form class="form-signin" action="includes/signup.inc.php" method="POST">
            <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Sign up</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <input type="text" name="name" id="inputName" class="form-control" placeholder="User Name" required autofocus>
            <input type="text" name="uid" id="inputUid" class="form-control" placeholder="User ID" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">submit</button>
            <p class="mt-5 mb-3 text-muted">&copy;ヽ( ﾟ ∀ 。)ノ</p>
        </form>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
