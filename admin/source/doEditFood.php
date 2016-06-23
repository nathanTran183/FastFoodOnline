<?php 
session_start();
$ID = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$image=$_FILES["image"]["name"]; 
$folder="/xampp2/htdocs/FastFoodOnline/images/";
$description = $_POST['description'];
$category = $_POST['categoryId'];
$quantity = $_POST['quantity'];
if (""==$name||""==$price||""==$description) {
	$_SESSION['msg'] = "No field is blanked!";
	header("Location: ../html/foodEdit.php?ID=".$ID);
	exit();
}
include '../../source/connect.php';
if ($image!=null) {
	move_uploaded_file($_FILES["image"]["tmp_name"], "$folder".$_FILES["image"]["name"]);
	$sql = "UPDATE food SET Name='".$name."',Price=".$price.",Image='".$image."',Description='".$description."',categoryID='".$category."',Quantity=".$quantity." WHERE `ID`='".$ID."'";	
}
else{
	$sql = "UPDATE food SET Name='".$name."',Price=".$price.",Description='".$description."',categoryID='".$category."',Quantity=".$quantity." WHERE `ID`='".$ID."'";
}
$result = mysqli_query($link,$sql);
header("Location: ../html/foodIndex.php");
exit();
?>