<?php 
	session_start();
	include("db_conn.php");
	$country = $_POST['country'];
	$name = $_POST['currency_name'];
	$unit = $_POST['unit'];
	$buy_rate = $_POST['buy_rate'];
	$sell_rate = $_POST['sell_rate'];
	$description = $_POST['description'];
	$date = date("Y-m-d");
	
	$q = mysql_query("INSERT INTO `fxrates` (`id`, `country`, `currency_name`, `unit`, `buy_rate`, `sell_rate`, `description`, `date`) 
	VALUES ('NULL', '$country', '$name', '$unit', '$buy_rate', '$sell_rate', '$description', '$date')");
	
	if($q){
		echo "success";
	}else{
		echo "failed";
	}
	
?>