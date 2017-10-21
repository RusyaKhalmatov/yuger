<!--html>
    <head>
        <link href ="css/sliderStyle.css" style="text/css" rel="stylesheet">
        
    </head>
    
    <body>
       
       <div class="slideshow-container">
            <div class="mySlides fade">
                <!--<img id="myPhoto" src="images/10.jpg" alt="one" style="width:1280px; height:500px;"/>
                <img id="myPhoto" src="images/10.jpg" alt="one">
            </div>
        
        <div class="mySlides fade">
                
               <img id="myPhoto" src="images/yu2.jpg" alt="two"/>
               <!-- <img id="myPhoto" src="images/yu2.jpg" alt="two" style="width:1000px; height:500px;"/>
           
            </div>
        
        
        
        <div class="mySlides fade">

             <img id="myPhoto" src="images/yu3.jpg" alt="three"/>
              <!--  <img id="myPhoto" src="images/yu3.jpg" alt="three" style="width:1000px; height:500px;"/> 
              
            </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094</a>
                <a class="next" onclick="plusSlides(1)">&#10095</a>
        </div>
        <br>
        
        <div id ="dts" style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        
        <script src="js/slider.js"></script> 
    </body>
    
</html>
-->
<div id="carousel" class="carousel slide">
    <!--Индикаторы переключения слайдов-->
    <ol class="carousel-indicators">
        <li class="active" data-target="#carousel" data-slide-to="0"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
        <li data-target="#carousel" data-slide-to="3"></li>
    </ol>
    
    <!--Слайды-->
    <div class="carousel-inner">
        <div class="item active">
            <img src="images/19Ps.jpg" alt="" class="center-block">
            <!--div class="carousel-caption">
                <h3>First slide</h3>
                <p>descrition of first slide</p>
            </div-->
        </div>
        <div class="item">
            <img src="images/15Ps.jpg" alt="" class="center-block">
            <!--div class="carousel-caption">
                <h3>second slide</h3>
                <p>descrition of second slide</p>
            </div-->
        </div>
        <div class="item">
            <img src="images/picPs.jpg" alt="" class="center-block">
            <!--div class="carousel-caption">
                <h3>Third slide</h3>
                <p>descrition of third slide</p>
            </div-->
        </div>
        <div class="item">
            <img src="images/26Ps.jpg" alt="" class="center-block">
            <!--div class="carousel-caption">
                <h3>Fourth slide</h3>
                <p>descrition of fourth slide</p>
            </div-->
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

  