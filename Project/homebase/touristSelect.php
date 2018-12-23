<?php
    include_once '../includes/dbh.inc.php';
?>
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <title>ToutisSelect</title>
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
            <a class="navbar-brand" href="../Home.html">Hearthstone</a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span> 
            </button>             
            <div class="collapse navbar-collapse" id="navbarsExampleDefault"> 
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../Home.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../login/signin.php">Sign in</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link disabled" href="touristSelect.php">查詢</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="hometable.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">介紹</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="card.html">資料片介紹</a>
                            <a class="dropdown-item" href="Teach.html">遊戲介紹</a>
                            <a class="dropdown-item" href="hero.html">英雄介紹</a>
                            <a class="dropdown-item" href="secret.html">技巧介紹</a>
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
                    <form action="tourisSelect.php" method="POST"> 
                        <div class="form-group"> 
                            <label for="formInput392" class="lead font-weight-bold">#名稱</label>                             
                            <input type="text" class="form-control text-center" name="name" id="formInput392" placeholder="Card name"> 
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
                        <br>
                        <button class="btn my-2 my-sm-0 btn-dark" name="submit" type="submit">Select</button>
                            <button type="button" onclick="location.href='tourisSelect.php'" class="btn btn-danger pl-4 pr-4 mr-0">List</button>
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
                        if(isset($_POST['name']) || isset($_POST['point']) || isset($_POST['attack']) || isset($_POST['defense']))
                        {
                            $card_name      = mysqli_real_escape_string($conn, $_POST['name']);
                            if($resultCheck > 0)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    if($row['card_name'] == $card_name  || 
                                        $row['card_point']  == $_POST['point'] ||
                                        $row['card_attack']  == $_POST['attack'] ||
                                        $row['card_defense']  == $_POST['defense']
                                        )
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
                            }
                        }
                        else
                        {
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
