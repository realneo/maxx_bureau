<?php
	session_start();
	include('db_conn.php');
	
	$id = $_REQUEST['id'];
	$unit = $_REQUEST['unit'];
	$buy_rate = $_REQUEST['buy_rate'];
	$sell_rate = $_REQUEST['sell_rate'];
	$description = $_REQUEST['description'];
	$date = date("Y-m-d");
	
	$q = mysql_query("UPDATE `fxrates` SET 
										`unit` = '$unit', 
										`buy_rate` = '$buy_rate', 
										`sell_rate` = '$sell_rate', 
										`description` = '$description', 
										`date` = '$date' 
										WHERE `id` =$id");
	
	if($q){
		echo ' success ';
	}
	
?>