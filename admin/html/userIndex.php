<?php 
include '../layout/header.php';
?>
<div class="row">

<h2 class="text-center">QUẢN LÝ TÀI KHOẢN</h2>

<p>
	<a href="../html/userCreate.php">Tạo mới tài khoản</a>
</p>
<table class="table">
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Password</th>
		<th>Full Name</th>
		<th>Role</th>
		<th>Address</th>
		<th>Phone</th>
		<th></th>
	</tr>
	<?php
	include '../../source/connect.php';
	$sql = "SELECT u.ID, u.Username, u.Password, u.Fullname, r.Name, u.Address, u.Phone FROM user u INNER JOIN role r WHERE r.ID=u.RoleID";
	$result = mysqli_query($link,$sql);

	while ($row = mysqli_fetch_assoc($result)) {			
		echo "<tr>";
		echo "<td>".$row['ID']."</td>";
		echo "<td>".$row['Username']."</td>";
		echo "<td>".$row['Password']."</td>";
		echo "<td>".$row['Fullname']."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['Address']."</td>";
		echo "<td>".$row['Phone']."</td>";
		echo "<td>
		<a class='btn btn-warning btn-sm' href='../html/userEdit.php?ID=".$row['ID']."' role='button'><span title='Chỉnh sửa' class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
		<a class='btn btn-danger btn-sm' href='../html/userDelete.php?ID=".$row['ID']."' role='button'><span title='Xóa' class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
	</td></tr>";
}
?>
</table>
</div>
<?php 
include '../layout/footer.php';
?>