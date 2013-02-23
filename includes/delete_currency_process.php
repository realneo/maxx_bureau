<?php
	session_start();
	if(!isset($_SESSION['username'])){
	header("Location: ../index.php");
	}
	require_once("db_conn.php");
	$id = $_GET['id'];

	$q = mysql_query("DELETE FROM `fxrates` WHERE id = '$id'");
	header("Location: ../modify_currency.php");
?>