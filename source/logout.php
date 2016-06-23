<?php 
session_start();
$_SESSION['user'] = array(
	'ID' => '',
	'username' => '', 
	'password' => '', 
	'fullname' => '', 
	'RoleID' => 0, 
	'address' => '', 
	'phone' => '', 
	);

unset($_SESSION['itemID']);
unset($_SESSION['quantity']);
header("Location: ../html/home.php");
?>
