<?php 
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];
$rePass = $_POST['repassword'];
$name = $_POST['fullname'];
$add = $_POST['address'];
$phone = $_POST['phone'];
$roleID = 2;
if (""==$user||""==$pass||""==$rePass||""==$name||""==$add||""==$phone) {
	$_SESSION['msg'] = "No field is blanked!";
	header("Location: ../html/register.php");
	exit();
}
if($pass!=$rePass){
	$_SESSION['msg'] = "Password and Re-type Password must be matched!";
	header("Location: ../html/register.php");
	exit();
}

include '../source/connect.php';
$sql = "SELECT * FROM user WHERE username='".$user."'";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result) == 0)
{
//Xu ty auto_increment ID
	$sql = "SELECT * FROM user ORDER BY ID DESC";
	$result = mysqli_query($link,$sql);
	if(mysqli_num_rows($result) == 0)
	{	
		$ID = 'USER1';
		$sql = "INSERT INTO user VALUES ('".$ID."','".$user."','".$pass."','".$name."',".$roleID.",'".$add."','".$phone."')";
		mysqli_query($link,$sql);
		$_SESSION['user'] = array(
			'ID' => $ID,
			'username' => $user, 
			'password' => $pass, 
			'fullname' => $name, 
			'RoleID' => $roleID, 
			'address' => $add, 
			'phone' => $phone, 
			);
		header("Location: ../html/home.php");
		exit();	
	}
	else{
		while ($row = mysqli_fetch_assoc($result)) {	
			$ID = substr($row['ID'], 4);
			$ID++;
			$ID = 'USER'.$ID;
			$sql = "INSERT INTO user VALUES ('".$ID."','".$user."','".$pass."','".$name."',".$roleID.",'".$add."','".$phone."')";
			mysqli_query($link,$sql);
			$_SESSION['user'] = array(
				'ID' => $ID,
				'username' => $user, 
				'password' => $pass, 
				'fullname' => $name, 
				'RoleID' => $roleID, 
				'address' => $add, 
				'phone' => $phone, 
				);
			header("Location: ../html/home.php");
			exit();	
		}
	}
}
else{
	$_SESSION['msg'] = "This username is already existed!";
	header("Location: ../html/register.php");
	exit();
}
?>