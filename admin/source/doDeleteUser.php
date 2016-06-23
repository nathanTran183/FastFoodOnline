<?php 
$id = $_POST['id'];
echo ($id);
include '../../source/connect.php';
$sql = "DELETE FROM user WHERE ID='".$id."'";
$result = mysqli_query($link,$sql);
header("Location: ../html/userIndex.php");
		exit();	
?>