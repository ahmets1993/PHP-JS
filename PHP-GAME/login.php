<?php
	include ("sql.php");
	session_start();
	$login = new sql;
	$login->login();
?>