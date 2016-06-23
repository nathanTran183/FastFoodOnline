<?php 
include '../layout/header.php';
?>
<div class="row">

<h2 class="text-center">QUẢN LÝ MÓN ĂN</h2>

<p>
	<a href="../html/foodCreate.php">Tạo mới món ăn</a>
</p>
<table class="table">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Price</th>				
		<th>Category</th>
		<th>Quantity</th>		
		<th></th>
	</tr>
	<?php
	include '../../source/connect.php';
	$sql = "SELECT f.ID, f.Name, f.Price, f.Description,f.Quantity, c.name FROM food f inner join foodcategory c ON f.categoryID=c.id";
	$result = mysqli_query($link,$sql);

	while ($row = mysqli_fetch_assoc($result)) {			
		echo "<tr>";
		echo "<td>".$row['ID']."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['Price']."</td>";		
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['Quantity']."</td>";		
		echo "<td>
		<a class='btn btn-warning btn-sm' href='../html/foodEdit.php?ID=".$row['ID']."' role='button'><span title='Chỉnh sửa' class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
		<a class='btn btn-danger btn-sm' href='../html/foodDelete.php?ID=".$row['ID']."' role='button'><span title='Xóa' class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
	</td></tr>";
}
?>
</table>

</div>
<?php 
include '../layout/footer.php';
?>