<?php 
session_start();
$ID = $_POST['id'];
$status = $_POST['status'];
include '../../source/connect.php';
$sql = "UPDATE bill SET statusID=".$status." WHERE `ID`='".$ID."'";
$result = mysqli_query($link,$sql);

$oldStatus = $_POST['oldStatus'];
if($oldStatus==1&&$status!=$oldStatus&&$status!=4){
	$sql = "select * from booking where BillID ='".$ID."'";
	$result = mysqli_query($link, $sql);
	if(mysqli_num_rows($result)!=0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row['Quantity'].",".$row['FoodID'].",";
			$sql = "update food set Quantity = Quantity -".$row['Quantity']." where ID='".$row['FoodID']."'";
			mysqli_query($link, $sql);
		}
	}
}

header("Location: ../html/billIndex.php");
	exit();
?>