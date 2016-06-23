<?php 
$id = $_POST['id'];
echo ($id);
include '../../source/connect.php';
$sql = "DELETE FROM food WHERE ID='".$id."'";
$result = mysqli_query($link,$sql);
header("Location: ../html/foodIndex.php");
		exit();	
?>