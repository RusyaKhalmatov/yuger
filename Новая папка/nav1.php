<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="hedStyle.css" rel="stylesheet">
  </head>
  <body>
  

<?php require ("head.html");?>
  
 <div class="container-fluid">
        <div class="row">
            
            <div class="navbar navbar-default ">
                <div class="container" id="navi">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#resp-menu">
                          <span class="sr-only"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                   </div>
                   
                    <div class="collapse navbar-collapse" id="resp-menu">
                       
                       <form class="navbar-form navbar-right" role="search" >
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Найти">
        </div>
        <button type="submit" class="btn btn-default">Поиск</button>
      </form>
                       
                        <ul class="nav navbar-nav navbar-right">
                            <li class="listNav" id="ma"><a href="#">Главная</a></li>
                            <li class="listNav" id="prod"><a href="#">Производство</a></li>
                            <li class="listNav" id="adv"><a href="#">Преимущества</a></li>
                            <li class="listNav" id="news"><a href="#">Новости</a></li>
                            <li class="listNav" id="cont"><a href="#">Контакты</a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        
        
        <div id="carousel" class="carousel slide">
    <!--Индикаторы переключения слайдов-->
    <ol class="carousel-indicators">
        <li class="active" data-target="#carousel" data-slide-to="0"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    
    <!--Слайды-->
    <div class="carousel-inner">
        <div class="item active">
            <img src="images/1.jpg" alt="">
            <div class="carousel-caption">
                <h3>First slide</h3>
                <p>descrition of first slide</p>
            </div>
        </div>
        <div class="item">
            <img src="images/2.jpg" alt="">
            <div class="carousel-caption">
                <h3>second slide</h3>
                <p>descrition of second slide</p>
            </div>
        </div>
        <div class="item">
            <img src="images/3.jpg" alt="">
            <div class="carousel-caption">
                <h3>Third slide</h3>
                <p>descrition of third slide</p>
            </div>
        </div>
        
        
    </div>
    
    <!--Стрелки переключения слайдов-->
    <a href="#carousel" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#carousel" class="right carousel-control" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>          
          
    
        
        <div class="row">
          <div class="col-sm-4 col-md-3">
            <div class="thumbnail">
              <img src="images/1.jpg" alt="..." style="width:300px; height: 200px;">

              <div class="caption">
                <h3 class="text-center">Ярлык эскиза</h3>
                <p class="text-justify">алвыоардяловралыорвалорывлоарыловра
                ыоварлоырвалорывлоарлоырва
                ылоарыловралор</p>
                <p><a href="#" class="btn btn-primary" role="button">Кнопка</a> <a href="#" class="btn btn-default" role="button">Кнопка</a></p>
              </div>
            </div>
          </div>
          
          <div class="col-sm-4 col-md-3">
            <div class="thumbnail">
              <img src="images/2.jpg" alt="..." style="width:300px; height: 200px;">

              <div class="caption">
                <h3 class="text-center">Ярлык эскиза</h3>
                <p class="text-justify">алвыоардяловралыорвалорывлоарыловра
                ыоварлоырвалорывлоарлоырва
                ылоарыловралор</p>
                <p><a href="#" class="btn btn-primary" role="button">Кнопка</a> <a href="#" class="btn btn-default" role="button">Кнопка</a></p>
              </div>
            </div>
          </div>
          
          <div class="col-sm-4 col-md-3">
            <div class="thumbnail">
              <img src="images/3.jpg" alt="..." style="width:300px; height: 200px;">

              <div class="caption">
                <h3 class="text-center">Ярлык эскиза</h3>
                <p class="text-justify">алвыоардяловралыорвалорывлоарыловра
                ыоварлоырвалорывлоарлоырва
                ылоарыловралор</p>
                <p><a href="#" class="btn btn-primary" role="button">Кнопка</a> <a href="#" class="btn btn-default" role="button">Кнопка</a></p>
              </div>
            </div>
          </div>
</div>
        
    </div>
   

<?php 
      require("hed.html"); 
      
      ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>