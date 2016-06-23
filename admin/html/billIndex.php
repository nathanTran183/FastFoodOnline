<?php 
include '../layout/header.php';
?>

<div class="row">


<h2 class="text-center">QUẢN LÝ HÓA ĐƠN</h2>
<br/><br/>
<table class="table">
	<tr>
		<th>ID</th>
		<th>Booker Name</th>
		<th>Date</th>
		<th>Total Money</th>
		<th>Status</th>			
		<th></th>		
	</tr>
	<?php
	include '../../source/connect.php';
	$sql = "SELECT b.ID, u.Fullname, b.Date, b.TotalMoney, s.Name FROM bill b INNER JOIN user u ON b.UserID = u.ID INNER JOIN status s ON s.ID=b.StatusID";
	$result = mysqli_query($link,$sql);

	while ($row = mysqli_fetch_assoc($result)) {			
		echo "<tr>";
		echo "<td>".$row['ID']."</td>";
		echo "<td>".$row['Fullname']."</td>";
		echo "<td>".$row['Date']."</td>";
		echo "<td>".$row['TotalMoney']."</td>";
		echo "<td>".$row['Name']."</td>";	
		echo "<td>";
		echo "<a class='btn btn-danger btn-sm' href='../html/BillDetails.php?ID=".$row['ID']."' role='button'><span title='Xem Chi Tiết' class='glyphicon glyphicon-list-alt' aria-hidden='true'></span></a>";			
		if ($row['Name']!='Canceled') {			
			echo "<a class='btn btn-warning btn-sm' href='../html/BillEdit.php?ID=".$row['ID']."' role='button'><span title='set Trạng Thái' class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>";		
		}		
		echo "</td></tr>";
	}
	?>
</table>

</div>
<?php 
include '../layout/footer.php';
?>