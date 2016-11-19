<?php
	session_start();
	print_r($_POST);
	$_SESSION['gradesRadioValue'] = $_POST;
	header("Location:confirm.php");
?>