<?php 

require_once ("app_config.php");


function db_connect()
{
    require_once ("app_config.php");
	$link=mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD);
	mysql_select_db(DATABASE_NAME);
	 mysql_query("SET NAMES utf8");
}





 ?>