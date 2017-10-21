<?php 
function load_files($files){
	//mkdir("images/newDir", 0700);
	for($i=0;$i<count($files['name']);$i++){
		 	if($files['error'][$i]==0){
		 		if($files['size'][$i]<=1000000){
					//if($_FILES['load']['type']=="image/jpeg")	

		 			copy($files['tmp_name'][$i],'images/NewDir/'.$files['name'][$i]);// копируем изображение из временной папки
		 			//move_uploaded_file(filename, destination)
		 			echo "File ".$files['name'][$i]." successfully Uploaded!";
		 		}else
		 		{
		 			echo "File is too big";
		 		}

		 	}else
		 	{
		 		echo "Upload error";
		 	}
		}
}
 if(isset($_POST["send-request"])){
 	
 	load_files($_FILES['load']);
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
			<input type="file" name="load[]" multiple="multiple" />
			<!--input type="file" name="load[]" />
			<input type="file" name="load[]" /-->
			<input type="submit" name="send-request" value="Upload"/>
			
		</form>
		
<?php 
	$fuck="Fuck you";
	$fd="Sorry";
		echo "Hi".$fuck.$fd;
 ?>
</body>
</html>