<?php
session_start();
include '/connect.php';

if($_SESSION['user']['ID']==''){
	header("Location: ../html/login.php");
}
else{
	$itemIDs = $_SESSION['itemID'];
	$quantities = $_SESSION['quantity'];
	$totalMoney = $_SESSION['totalMoney'];
	$userID = $_SESSION['user']['ID'];
	$date = date("Y-m-d");

	$sql = "SELECT id FROM bill";
	$result = mysqli_query($link,$sql);
	$ID = '';
	if(mysqli_num_rows($result) == 0)
	{	
		$ID = 'BILL1';
	}
	else{
		$Max = 0;
		while ($row = mysqli_fetch_assoc($result)) {	
			$ID = substr($row['id'], 4);
			if($ID>$Max){
				$Max = $ID;
			}
		}
		$Max++;
		$ID = $Max;
		$ID = 'BILL'.$ID;
	}

	$sql = "insert into bill values('".$ID."','".$userID."','".$date."',".$totalMoney.",1)";
	mysqli_query($link,$sql);

	$itemid = explode(',', $itemIDs);
	$quantity = explode(',', $quantities);
	for ($i=0; $i < count($itemid); $i++) { 
		$sql = "select * from food where id='".$itemid[$i]."';";
		$result = mysqli_query($link, $sql);
		$row = mysqli_fetch_assoc($result);

		$sql = "insert into booking values('".$ID."','".$itemid[$i]."',".$row['Price'].",".$quantity[$i].");";
		mysqli_query($link, $sql);
	}

	$_SESSION['itemID'] = '';
	$_SESSION['quantity'] = '';
	$_SESSION['totalMoney'] = '';		
	header("Location: ../html/billList.php?id1=".$ID1."&id2=".$ID);
}



?>