<!DOCTYPE html>
<html>
	<head>
    <title>Продукция</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Продукция Югер"/>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!--link href="../style.css" rel="stylesheet"-->
     <link href="../css/foorTempStyle.css" rel="stylesheet">
      
	</head>
	
	<body>
		
		
			
			<!--?php include ("navigation.php");?-->
			<!--Navigation-->
			 <?php include("navi.php"); ?>
        
        <!--Main body-->
			
			<div class="container">
			    <h1>Оборудование</h1>
			</div>
			
			
			
			<div class="navbar-fixed-bottom">
				<?php require ("../html/footer.html");?>
			</div>	
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.js"></script>
 	<script src="../js/jquery.fittext.js"></script>
	<script type="text/javascript">
        //$("#Contacts_info").fillText()
		$("#address").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#phone").fitText(6, { minFontSize: '15px', maxFontSize: '25px'});
        $("#mail").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#telegram").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#gmail").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#facebook").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
	</script>
		
	</body>

</html>