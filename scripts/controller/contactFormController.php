<?php 

include("../database-connection.php");
	db_connect();

	$name= $_POST['name'];
    $phone= trim($_POST['phone']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    mysql_query("INSERT INTO messages(email,name,phone_number,message) VALUES ('$email','$name','$phone','$message')");

    echo $name;
    echo "<br>";
    echo $phone;

 ?>