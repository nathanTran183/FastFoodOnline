<?php 
include '../layout/header.php';
?>
<div class="row">

<h2 class="text-center">QUẢN LÝ LOẠI MÓN ĂN</h2>

<p>
	<a href="../html/foodCategoryCreate.php">Tạo mới loại món</a>
</p>
<table class="table">
	<tr>
		<th>ID</th>
		<th>Name</th>			
		<th></th>
	</tr>
	<?php
	include '../../source/connect.php';
	$sql = "SELECT * FROM `foodcategory`";
	$result = mysqli_query($link,$sql);

	while ($row = mysqli_fetch_assoc($result)) {			
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>
		<a class='btn btn-warning btn-sm' href='../html/foodCategoryEdit.php?ID=".$row['id']."' role='button'><span title='Chỉnh sửa' class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
		<a class='btn btn-danger btn-sm' href='../html/foodCategoryDelete.php?ID=".$row['id']."' role='button'><span title='Xóa' class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
	</td></tr>";
}
?>
</table>

</div>
<?php 
include '../layout/footer.php';
?>