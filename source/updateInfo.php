<?php
session_start();
include '../source/connect.php';
$fullname = $_POST["txtfullname"];
$address = $_POST["txtaddress"];
$phone = $_POST["txtphone"];
if($fullname == ""){
	$_SESSION['msg'] = "Không được bỏ trống họ tên";
	header("Location: ../html/profile.php");
}else{
	$sql = "update user set fullname = '".$fullname."', address = '".$address."', phone = '".$phone."' where id = '".$_SESSION['user']['ID']."';";

	mysqli_query($link, $sql);

	$_SESSION['user']['fullname'] = $fullname;
	$_SESSION['user']['address'] = $address;
	$_SESSION['user']['phone'] = $phone;
	header("Location: ../html/profile.php");
}


?>