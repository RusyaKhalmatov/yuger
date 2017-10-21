<!DOCTYPE html>
<html>
	<head>
    <title> Шпонированный МДФ и ДСП </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Изделия из МФД и ДСП"/>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
     <link href="css/headStyle.css" rel="stylesheet">
     <link href="css/dreamSideStyle.css" style="text/css" rel="stylesheet">
      <link href="css/foorTempStyle.css" style="text/css" rel="stylesheet">
     
   
	</head>
	
	<body>
	

      <!--Navigation-->
			<?php require ("scripts/navigation.php");?>
     
        <?php include("vpd.html"); ?>
          
       



      <!--Slider-->
      <div class="container" style="margin-top:30px; box-shadow: 4px 4px 25px 1px #000000; padding: 20px;">
        <!--О Нас-->
  <!--div class="container">
        <h1 style=" margin-top: 30px;">Наши услуги</h1>
     
        <?php //include("html/aboutUs.html"); ?>
 
  </div-->
 <!--Конец о Нас-->
 

      <?php require ("scripts/slider.php");?>
    
    <div class="container-fluid" style="margin-top: 20px;">
      <h2>Наша продукция</h2>
    </div>
      <div class="container-fluid" style="margin-top: 5px;">
        <div class="row">

            <div class="col-lg-4" id="cont1">
               <img src="images/yas.jpg" alt="Avatar" class="image" width="300" height="300">
                <div class="middle">
                <div class="text">
                <h3 >Шпонированный ясень</h3>
                 <a href="product/prod.php?id=1" class="c">Подробнее</a>
                 </div>
                 
                </div>
            </div>

             <div class="col-lg-4" id="cont1">
               <img src="images/oak2.jpg" alt="Avatar" class="image" width="300" height="300">
                <div class="middle">
                <div class="text">
                <h3 >Шпонированный дуб</h3>

               <a href="product/prod.php?id=2" class="c">Подробнее</a>
                 </div>
                 
                </div>
            </div>
            
            <div class="col-lg-4" id="cont1">
               <img src="images/orex.jpg" alt="Avatar" class="image" width="300" height="300">
                <div class="middle">
                <div class="text">
                <h3 >Шпонированный орех</h3>

               <a href="product/prod.php?id=3" class="c">Подробнее</a>
                 </div>
                 
                </div>
            </div>

        </div>
      </div>
      
      

      </div>
			<?php require ("html/footer.html");?>


			
	
		
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
		<script src="js/jquery.fittext.js"></script>
    <script type="text/javascript">
    $("#address").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#phone").fitText(6, { minFontSize: '15px', maxFontSize: '25px'});
        $("#mail").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#telegram").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#gmail").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#facebook").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#shpon").fitText(1);
        $("#shpon2").fitText(1);
        </script>
	</body>
 <?php  
    include("scripts/count.php");
    ?>
</html>
