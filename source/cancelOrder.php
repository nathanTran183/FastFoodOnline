<?php
	session_start();
	$_SESSION['itemID'] = '';
	$_SESSION['quantity'] = '';

	header("Location: ../html/menu.php?foodCategoryID=FOCAT1");
?>