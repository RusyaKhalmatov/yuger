<?php 

include("../database_connection.php");
	db_connect();

	$name= trim($_POST['name']);
    $phone= trim($_POST['phone']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    $sql = mysql_query("INSERT INTO messages (email','name','phone_number','message') VALUES ('$email','$name','$phone','$message')");


 ?>