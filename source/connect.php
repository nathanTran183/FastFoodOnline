<?php 	
	//Thiết lập kết nối CSDL
$link = mysqli_connect("localhost","root","123456","fastfoodwebdb") or die("Không thể kết nói database");

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>