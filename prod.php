<?php 

	
	require ("scripts/database-connection.php");
	 db_connect();
    

	$pageID=$_GET["id"];

	//$query = mysql_query("SELECT name,descr FROM description WHERE id='$pageID'");
   	$query = mysql_query("SELECT * FROM description LEFT JOIN size ON description.id = size.id
   		LEFT JOIN price ON description.id = price.id	
   		LEFT JOIN pictures ON description.id = pictures.id
   	 WHERE description.id='$pageID'");

    $data=mysql_fetch_assoc($query);
    $img=$data['img1'];
    $img2=$data['img2'];
    $img3=$data['img3'];
 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title>Продукт</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="МДФ Ташкент"/>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/prodStyle.css">
 	<link href="../css/foorTempStyle.css" style="text/css" rel="stylesheet">

	</head>
	
	<body>
	
			
			<!--Navigation-->
		<?php require("navigation.php"); ?>
        <!--Main body-->
				

        <div class="container" id="mainProd">
        	<div class="row">
	        	<h1 style="margin-left: 30px;">Продукция</h1>

	        		<div class="col-lg-4 col-md-4 hidden-sm hidden-xs" style="margin-top: 80px; padding-left: 40px;">	
			        	<div class="gallery">
							<a tabindex="1"><?php echo "<img src='images/".$pageID."/".$img."'>"; ?></a>
							<a tabindex="2"><?php echo "<img src='images/".$pageID."/".$img2."'>"; ?></a>
							<a tabindex="3"><?php echo "<img src='images/".$pageID."/".$img3."'>"; ?></a>
						</div>	
        			</div>

        			<div class="col-lg-8 col-md-8">
        				
        				<!--h2 style="margin-left: 30px;">Название</h2-->
        				<h2 style="margin-left: 30px;"><?=$data["name"];?></h2>
        				<div class="desc">
        			
        					<p><?=$data["descr"]; ?></p>
        				</div>

        				<div class="detail">
        					<h2 style="margin-left: 30px; margin-top: 50px;">Характеристики</h2>

        					<table id="priceTable" style="margin-top: 20px;">
        						
        						<tr>
        							<td>Размер</td>
        							<td></td>
        							<td>Цена за лист</td>
        						</tr>

        						<tr>
        							
        							<th><?=$data['one']; ?></th>
        							<th></th>
        							<th><?=$data['price1']; ?></th>
        							<th>сум</th>
        						</tr>

        						<tr>
        							
        							<th><?=$data['two']; ?></th>
        							<th></th>
        							<th><?=$data['price2']; ?></th>
        							<th>сум</th>
        						</tr>

        						<tr>
        							<!--th>Размер1</th-->
        							<th><?=$data['three']; ?></th>
        							<th></th>
        							<th><?=$data['price3']; ?></th>
        							<th>сум</th>
        						</tr>
        					

        					</table>


        				</div>

        				<!--div class="order">
        					
        					<!--button class="button">Заказать</button>
        					<!-- Кнопка, открывающая модальное окно >
								<a href="#" class="btn btn-primary" id="button">Заказать</a>
								 
								<!-- HTML-код модального окна>
								<div id="myModal" class="modal fade">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <!-- Заголовок модального окна >
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								        <h4 class="modal-title">Заказ</h4>
								      </div>
								      <!-- Основное содержимое модального окна >
								      <div class="modal-body">
								        Пожалуйста заполните форму ниже
								        <form action="order.php" id="order" method="POST">
								        	<table id="ordTable">
								        		<tr>
								        			<th>*Имя</th>
								        			<th><input type="text" name="name"></th>
								        			<th>*Фамилия</th>
								        			<th><input type="text" name="surname"></th>
								        		</tr>

								        		<tr>
								        			<th>*Номер телефона</th>
								        			<th><input type="text" name="phone"></th>
								        			<th>*Адрес эл. почты</th>
								        			<th><input type="email" name="email"></th>
								        		</tr>

								        		<tr>
								        			<td id="sel">
								        				<select name="size">
														    <option value="size1">Size1</option>
														    <option value="size2">Size2</option>
														    <option value="size3">Size3</option>
														    
													 	 </select>
								        			</td>
								        		</tr>

								        		<tr>
								        			<th>*Количество материала</th>
								        			<th><input type="number" name="quantity"></th>
								        			<th>Итог</th>
								        			<th><input type="text" name="sum" readonly></th>
								        		</tr>
								        	</table>
								        </form>

								      </div>
								      <!-- Футер модального окна >
								      <div class="modal-footer">
								        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
								        <button type="button" id="accept" class="btn btn-primary">Сохранить изменения</button>
								        
								      </div>
								    </div>
								  </div>
								</div>
    					</div-->


        			</div>
        	</div>	
		</div>




		<!--FOOTER-->
		<?php require ("../html/footer.html");?>

	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.js"></script>
<script>
			$(document).ready(function(){
			  //при нажатию на любую кнопку, имеющую класс .btn
			  $(".btn").click(function() {
			    //открыть модальное окно с id="myModal"
			    $("#myModal").modal('show');
			  });
			});
		</script>

		<script>
			$(document).ready(function(){
			  //при нажатию на любую кнопку, имеющую класс .btn
			  $("#accept").click(function() {
			    //открыть модальное окно с id="myModal"
			    $("#myModal").modal('hide');
			    alert("Заказ принят");
			  });
			});
		</script>

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