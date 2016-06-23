<?php 
session_start();
	$user = $_POST["username"];
	$pass = $_POST["password"];	

if (""==($user)||""==($pass)) {			
	$_SESSION['msg'] = "No field is blanked!";
	header("Location: ../html/login.php");
	exit();
}
	include '../source/connect.php';

$sql = "SELECT * FROM user WHERE username='".$user."' AND password='".$pass."'";
	//Truy vấn CSDL
$result =  mysqli_query($link, $sql);
if(mysqli_num_rows($result) == 0)
{	
	$_SESSION['msg'] = "Username or password is not correct, please try again";
	header("Location: ../html/login.php");
	exit();
}
while ($row = mysqli_fetch_assoc($result)) {
	$_SESSION['user'] = array(
		'ID' => $row['ID'],
		'username' => $row['Username'], 
		'password' => $row['Password'], 
		'fullname' => $row['Fullname'], 
		'RoleID' => $row['RoleID'], 
		'address' => $row['Address'], 
		'phone' => $row['Phone'], 
		);
	if($row['RoleID']==1||$row['RoleID']==3){
		header("Location: ../admin/html/index.php");
	}
	else if($row['RoleID']==2){
		header("Location: ../html/home.php");
	}
	exit();	
}
?>
