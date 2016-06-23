<?php
include '../source/connect.php';
$sql = "SELECT * FROM foodcategory";

$result = mysqli_query($link, $sql);

if(mysqli_num_rows($result)!=0){
	while($row = mysqli_fetch_assoc($result)){
		echo '<ul class="main-menu sf-menu">
                                <li><a href="../html/menu.php?foodCategoryID='.$row['id'].'">'.$row['name'].'</a></li>
                            </ul>';
	}
}
?>