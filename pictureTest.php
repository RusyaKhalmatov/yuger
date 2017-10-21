<?php 
 if(isset($_POST["send-request"])){
 	if($_FILES['load']['error']==0){
 		if($_FILES['load']['size']<=1000000){
			//if($_FILES['load']['type']=="image/jpeg")	

 			copy($_FILES['load']['tmp_name'],'images/'.$_FILES['load']['name']);// копируем изображение из временной папки
 			//move_uploaded_file(filename, destination)
 			echo "File successfully Uploaded!";
 		}else
 		{
 			echo "File is too big";
 		}

 	}else
 	{
 		echo "Upload error";
 	}
 };

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload a picture</title>
</head>
<body>
		<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
		<!--form enctype="multipart/form-data" action="proc.php" method="POST">
		   
		    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
		  
		    Отправить этот файл: <input name="userfile" type="file" />
		    <input type="submit" value="Send File" />
		</form-->
		<form method="POST" enctype="multipart/form-data">
			<input type="file" name="load" />
			<input type="submit" name="send-request" value="Upload"/>
		</form>
		

</body>
</html>