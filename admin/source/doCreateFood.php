<?php 
session_start();
$name = $_POST['name'];
$price = $_POST['price'];
$imagename=$_FILES["myimage"]["name"]; 
$folder="/xampp2/htdocs/FastFoodOnline/images/";
$description = $_POST['description'];
$category = $_POST['category'];
$quantity = $_POST['quantity'];
if (""==$name||""==$price||""==$imagename||""==$description) {
	$_SESSION['msg'] = "No field is blanked!";
	header("Location: ../html/foodCreate.php");
	exit();
}

include '../../source/connect.php';
//Xu ly upload anh
move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$_FILES["myimage"]["name"]);
//Xu ty auto_increment ID
$sql = "SELECT ID FROM `food` ORDER BY ID DESC LIMIT 1";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result) == 0)
{	
	$ID = 'FOOD1';
	$sql = "INSERT INTO food VALUES ('".$ID."','".$name."',".$price.",'".$imagename."','".$description."','".$category."',".$quantity.")";
	mysqli_query($link,$sql);		
	header("Location: ../html/foodIndex.php");
	exit();	
}
else{
	while ($row = mysqli_fetch_assoc($result)) {	
		$ID = substr($row['ID'], 4);
		$ID++;
		$ID = 'FOOD'.$ID;
		$sql = "INSERT INTO food VALUES ('".$ID."','".$name."',".$price.",'".$imagename."','".$description."','".$category."',".$quantity.")";	
		echo $sql;	
		mysqli_query($link,$sql);			
		header("Location: ../html/foodIndex.php");
		exit();	
	}
}

?>