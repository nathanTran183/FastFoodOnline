<?php 
session_start();
$ID = $_POST['id'];
$user = $_POST['username'];
$pass = $_POST['password'];
$name = $_POST['fullname'];
$add = $_POST['address'];
$phone = $_POST['phone'];
$roleID = $_POST['roleID'];
if (""==$user||""==$pass||""==$name||""==$add||""==$phone) {
	$_SESSION['msg'] = "No field is blanked!";
	header("Location: ../html/userEdit.php?ID=".$ID);
	exit();
}
$regex = "/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";
if(preg_match( $regex, $phone )==false){
	$_SESSION['msg'] = "Phone number must has number format!";
	header("Location: ../html/userEdit.php?ID=".$ID);
	exit();
}
include '../../source/connect.php';
$sql = "UPDATE user SET Username='".$user."',Password='".$pass."',Fullname='".$name."',RoleID=".$roleID.",Address='".$add."',Phone='".$phone."' WHERE `ID`='".$ID."'";
$result = mysqli_query($link,$sql);
header("Location: ../html/userIndex.php");
	exit();
?>