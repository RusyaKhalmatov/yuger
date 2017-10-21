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
		
		
			<!--Header-->
        <!--div class="container-fluid" id="hhh">
           <div class="row">
              <div>
                <div class="col-lg-3 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-offset-1 col-sm-2 hidden-xs">
                    
                    <img src="images/logo(1).png" class="img-rounded" id="logoHead" alt="logo" width="200" height="200">
                    <img src="images/logo(1).png" class="img-rounded" id="mirrorLogo" alt="logo1" width="200" height="200">
                </div>
              </div>
                
               <div class="col-lg-5 col-lg-offset-0 col-xs-12 col-md-5 col-md-offset-0 col-sm-6 col-sm-offset-2" style="text-align: center;">
                    
                    <div class="row">
                      <h1>OOO "Yuger"</h1>
                    </div>
                   <h2 style="padding: 10px; margin-top: 0px;">
                     Надежный партнер в реализации самых смелых и креативных решений!
                   </h2>
               </div>            
           </div>    
        </div-->
      <!--End of Header-->

     
      

      <!--Navigation-->
			<?php require ("scripts/navigation.php");?>

      <!--div class="container-fluid" id="image" style="margin-top: 0px;">
        <div class="row"-->

        
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

      <!--?php require ("scripts/dreamSide.php");?-->  
    
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
        <!--О продукции-->
        <?php //include("html/productInfo.html"); ?>
        <!--Конец-->
      </div>
      
      

      </div>
			<?php require ("html/footer.html");?>


			
	
		
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
		<script src="js/jquery.fittext.js"></script>
    <script type="text/javascript">
        //$("#Contacts_info").fillText()
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

</html>