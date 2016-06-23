<?php 
$id = $_REQUEST['ID'];
echo ($id);
include '../source/connect.php';
$sql = "UPDATE `bill` SET `StatusID`= 4 WHERE ID='".$id."'";
$result = mysqli_query($link,$sql);
header("Location: ../html/billList.php");
exit();	
?>