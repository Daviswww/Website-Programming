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
                <h1>卡牌查詢</h1> 
                <div class="form-group float-left"> 
                    <form action="select.php" method="POST"> 
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups"> 
                            <div class="btn-group" role="group" aria-label="First group"> 
                                <button type="button" class="btn btn-secondary">ALL</button>                                 
                                <button type="button" class="btn btn-secondary">2</button>                                 
                                <button type="button" class="btn btn-secondary">3</button>                                 
                            </div>                             
                        </div>
                        <div class="form-group"> 
                            <label for="formInput392" class="float-left lead font-weight-bold">#名稱</label>                             
                            <input type="text" class="form-control" name="name" id="formInput392" placeholder="Card name"> 
                        </div>
                        <div class="form-group float-left"> 
                            <label for="formInput410" class="font-weight-bold lead">#法力</label>                             
                            <input type="text" class="form-control text-center" id="formInput410" name="point" placeholder="Point"> 
                        </div>
                        <div class="form-group float-left"> 
                            <label for="formInput434" class="font-weight-bold lead">#攻擊</label>                             
                            <input type="text" class="form-control text-center" id="formInput434" name="defense" placeholder="Defense"> 
                        </div>
                        <div class="form-group float-left"> 
                            <label for="formInput442" class="font-weight-bold lead">#防禦</label>                             
                            <input type="text" class="form-control text-center" id="formInput442" name="attack" placeholder="Attack"> 
                        </div>
                        <small class="float-left text-danger">#為必填!!</small>
                        <button class="btn my-2 my-sm-0 btn-dark" name="submit" type="submit">Select</button>                         
                    </form>
                </div>
                <?php
                        $sql = "SELECT * FROM cards ;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        echo "                
                        <table class=\"table\">
                        <thead> 
                                <tr> 
                                    <th>圖片</th> 
                                    <th>名稱</th> 
                                    <th>職業</th> 
                                    <th>能力</th> 
                                    <th>種族</th> 
                                    <th>法力</th> 
                                    <th>攻擊</th>
                                    <th>防禦</th> 
                                </tr>                         
                        </thead>  
                        <tbody>";
                        if($resultCheck > 0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                            echo "<tr>";
                            echo "<th><img src=\"../img/cardimg/" . $row['card_uid'] . ".png\" width=\"50\" height=\"80\"></th>";
                            echo "<td>" . $row['card_name']     . "</td>";
                            echo "<td>" . $row['card_career']   . "</td>";
                            echo "<td>" . $row['card_effect']   . "</td>";
                            echo "<td>" . $row['card_race']     . "</td>";   
                            echo "<td>" . $row['card_point']    . "</td>"; 
                            echo "<td>" . $row['card_attack']   . "</td>"; 
                            echo "<td>" . $row['card_defense']  . "</td>"; 
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
