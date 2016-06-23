<?php 
$id = $_POST['id'];
echo ($id);
include '../../source/connect.php';
$sql = "DELETE FROM foodcategory WHERE id='".$id."'";
$result = mysqli_query($link,$sql);
header("Location: ../html/foodCategoryIndex.php");
		exit();	
?>