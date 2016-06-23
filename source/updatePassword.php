<?php
session_start();
include '../source/connect.php';

$oldpass = $_POST["txtOldPass"];
$newpass = $_POST["txtNewPass"];
$confirmpass = $_POST["txtConfirmPass"];

if($oldpass!=$_SESSION['user']['password']){
	$_SESSION['msg'] = "Mật khẩu cũ không đúng";
	header("Location: ../html/profile.php");
}else if($confirmpass!=$newpass){
	$_SESSION['msg'] = "Mật khẩu nhập lại không khớp";
	header("Location: ../html/profile.php");
}else{
	$sql = "update user set password = '".$newpass."' where id = '".$_SESSION['user']['ID']."';";

	mysqli_query($link, $sql);
	$_SESSION['user']['password'] = $newpass;
	header("Location: ../html/profile.php");

}

?>