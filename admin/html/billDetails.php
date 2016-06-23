<?php 
include '../layout/header.php';
?>

<div class="row">

<h2 class="text-center">HÓA ĐƠN CHI TIẾT</h2>
<br/><a href="../html/billIndex.php">Trở lại danh sách hóa đơn</a><br/><br/>
<table class="table">
	<tr>
		<th>ID</th>
		<th>Product Name</th>		
		<th>Current Price</th>
		<th>Quantity</th>					
	</tr>
	<?php
	include '../../source/connect.php';
	$ID = $_REQUEST['ID'];
	$sql = "SELECT f.Name,f.Image,f.Description,b.CurrentPrice, b.Quantity FROM booking b INNER JOIN food f ON b.FoodID=f.ID WHERE b.BillID ='".$ID."'";
	$result = mysqli_query($link,$sql);

	while ($row = mysqli_fetch_assoc($result)) {			
		echo "<tr>";
		echo "<td><img  height='70' src='../../images/".$row['Image']."'></td>";
		echo "<td>".$row['Name']."</td>";
		// echo "<td>".$row['Description']."</td>";
		echo "<td>".$row['CurrentPrice']."</td>";
		echo "<td>".$row['Quantity']."</td>";
	}
	?>
</table>
<br/>

</div>
<?php 
include '../layout/footer.php';
?>