<!DOCTYPE html>
<html>
	<head>
    <title>Новости</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Новости Югер"/>
    <link href="../css/bootstrap.css" style="text/css" rel="stylesheet">
    <link href="../css/foorTempStyle.css" style="text/css" rel="stylesheet">
	<link href="../news/css/newsStyle.css" style="text/css" rel="stylesheet">
	</head>
	
	<body>
		
		
			
			<!--Navigation-->
		<?php include("navi.php"); ?>
        <!--Main body-->
			<div class="container-fluid" >
				<h1 id="news_head">Новости</h1>
				<!--div class="container" id="nws">
					<div class="row" id="nns">
						
							<h3 class="zagol" >Заголовок новости</h3>
							<div class="col-lg-4" id="imgN" >
								<img src="../images/6.jpeg" class="img-rounded" id="imgnews" alt="news"> 
							</div>
							<div class="col-lg-7 col-lg-offset-1">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

								<button class="moreBut">Подробнее</button>
							</div>
						
					</div>

					<div class="row" id="nns">
						
							<h3 class="zagol" >Заголовок новости</h3>
							<div class="col-lg-4" id="imgN" >
								<img src="../images/6.jpeg" class="img-rounded" id="imgnews" alt="news"> 
							</div>
							<div class="col-lg-7 col-lg-offset-1">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

								<a href="../news/news_cont.php" class="btn btn-primary" id="button">Подробнее</a>
							</div>
						
					</div>
				</div-->

					
			
			
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