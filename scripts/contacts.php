<!DOCTYPE html>
<html>
	<head>
    <title>Контакты</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Контакты Югер"/>
    <link href="../css/bootstrap.css" rel="stylesheet">
    
    <link href="../css/foorTempStyle.css" style="text/css" rel="stylesheet">
    <link href="../css/contactStyle.css" rel="stylesheet" style="text/style">
     
	</head>
	
	<body>
		
			<!--Navigation-->
	
       <?php include("navi.php");?> 
			<!--Main body-->
			<div class="container">
			   <div class="row">
                  <h1 id="cont_title">Контакты</h1>
                   
                   <div class="col-lg-4">
                       <h2>
                           Мы находимся по адресу:
                       </h2>
                       <p id="street">Город Ташкент, 100053, улица Богишамол, 160</p>
                       <div class="address_cont">
                           <h2>Наши контакты:</h2>
                           <div id="numbers">
                               <h4>Телефон/факс:</h4>
                               <p class="cnt">(998 71) 234-35-32</p>
                               <p class="cnt">(998 97) 718-24-44</p>
                               <h4>Telegram:</h4>
                               <p class="cnt">(998 90) 971-27-10</p>
                               <h4>Email:</h4>
                               <p class="cnt">yuger.info@mail.ru</p>
                               <p class="cnt">yugerum@gmail.com</p>
                           </div>
                           
                       </div>
                   </div>
                   <div class="col-lg-4" id="cont_contacts">
                       
                       <div id="map">My map will go here</div>
                   </div>
                   
                   <div class="col-lg-4" id="rd">
                      <h3 >Свяжитесь с нами</h3>
                       <?php include("contactForm.php"); ?>
                   </div>

			       
			   </div> 
      
			</div>
			
        <?php require ("../html/footer.html");?>
        <!--script src="../js/jquery.fittext.js"></script-->
       
        <script type="text/javascript">
		/*$("#address").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#phone").fitText(6, { minFontSize: '15px', maxFontSize: '25px'});
        $("#mail").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#telegram").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#gmail").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#facebook").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });*/
	</script>

       
<script>
function myMap() {
 var myCenter = new google.maps.LatLng(41.339488,69.300922);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 16};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>	
		
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAAXhRz3GXr2JbXvAHdvTqEnaIARdmVhI&callback=myMap"></script>     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/contactFormValid.js"></script>  <!--Contact form validation-->      
	</body>

</html>