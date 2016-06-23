<?php 
session_start();
$ID = $_POST['id'];
$name = $_POST['name'];
if (""==$name) {
	$_SESSION['msg'] = "No field is blanked!";
	header("Location: ../html/foodCategoryEdit.php?ID=".$ID);
	exit();
}
include '../../source/connect.php';
$sql = "UPDATE foodcategory SET name='".$name."' WHERE `ID`='".$ID."'";
$result = mysqli_query($link,$sql);
header("Location: ../html/foodCategoryIndex.php");
exit();
?>