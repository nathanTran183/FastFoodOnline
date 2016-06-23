<?php 
session_start();
$name = $_POST['name'];


if (""==$name) {
	$_SESSION['msg'] = "No field is blanked!";
	header("Location: ../html/foodCategoryCreate.php");
	exit();
}

include '../../source/connect.php';
//Xu ty auto_increment ID
$sql = "SELECT id FROM `foodcategory` ORDER BY id DESC LIMIT 1";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result) == 0)
{	
	$ID = 'FOCAT1';
	$sql = "INSERT INTO foodcategory VALUES ('".$ID."','".$name."')";
	mysqli_query($link,$sql);		
	header("Location: ../html/foodCategoryIndex.php");
	exit();	
}
else{
	while ($row = mysqli_fetch_assoc($result)) {	
		$ID = substr($row['id'], 5);
		$ID++;
		$ID = 'FOCAT'.$ID;
		$sql = "INSERT INTO foodcategory VALUES ('".$ID."','".$name."')";
		echo ($sql);
		mysqli_query($link,$sql);			
		header("Location: ../html/foodCategoryIndex.php");
		exit();	
	}
}

?>