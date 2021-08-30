<?php
ob_start(); 
session_start();
if (isset($_SESSION['user_name'])) {
	//session active let it destroy
	unset($_SESSION['user_name']);
	//also change the location
	header("location:../index.php");
}else{
	//if session not active then change only the location
	header("location:../index.php");
}
?>