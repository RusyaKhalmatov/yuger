<?php
    include ("database_connection.php");
    if(!isset($_SESSION))
   session_start();
    ensure_login();
    
db_connect();
$date= date("Y-m-d");
    
$query=mysql_query("SELECT * FROM visits WHERE date='$date'");
$row=mysql_fetch_assoc($query);

$q3=mysql_query("SELECT * FROM admins");
    $numbOfAdmins=mysql_num_rows($q3);
   
    ?>
<!DOCTYPE html>
<html>
<head>
   
    <title>Статистика</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact page dreamsatellite"/>
    <link href="css/bootstrap.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <link href="css/statisticsStyle.css" rel="stylesheet" type="text/css" />
     
</head>
<body>
	<div class="container-fluid">
        <div class="row">
            <?php require("nav.php"); ?>
        </div>
        <div class="row">
            <div class="col-lg-2" style="border-right: 1px solid black;"><?php require("left.php");?></div>
            <div class="col-lg-10">
            <div class="row" style="padding-left: 20px;">
                <h1>Добро пожаловать в отдел статистики, <?= $_SESSION["name"]?>!</h1>
            </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Посетители</a>
                          </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                          <div class="panel-body">
                              <table class="table table-hover">
                             <tbody>
                                <tr>
                                    <th>Количество посетителей в течении дня</th>
                                    <th> <?=$row["hosts"];?></th>
                                </tr>
                                 
                                <tr>
                                    <th>Количество просмотров в течении дня</th>
                                    <th><?=$row["views"];?></th>
                                </tr> 
                                
                             </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                </div>
            </div>

        </div>

    </div>

  
</body>
</html>