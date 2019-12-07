<?php
    include_once '../includes/dbh.inc.php';
?>
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
                <h1>刪除</h1>
                <div class="form-group float-left"> 
                    <label for="formInput91" class="float-left">Delete card</label>                     
                    <input type="text" class="form-control" id="formInput91" placeholder="Enter card name"> 
                    <button type="button" class="btn btn-danger float-left">Delete</button>                     
                </div>                 
                <?php
                    $sql = "SELECT * FROM cards ;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    echo "                
                    <table class=\"table\">
                    <thead> 
                            <tr> 
                                <th>#卡牌編號</th> 

                                <th>卡片名稱</th> 
                                <th>卡片職業</th> 
                                <th>卡片能力</th> 
                            </tr>                         
                    </thead>  
                    <tbody>";
                    if($resultCheck > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                        echo "<tr>";
                        echo "<th><img src=\"../img/cardimg/" . $row['card_uid'] . ".png\" width=\"50\" height=\"80\"></th>";
                        echo "<td>" . $row['card_name']  . "</td>";
                        echo "<td>" . $row['card_career']  . "</td>";
                        echo "<td>" . $row['card_effect']  . "</td>";  
                        echo "</tr>";
                        }
                    }
                    echo "
                    <tbody>
                    </table>";
                ?> 
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
