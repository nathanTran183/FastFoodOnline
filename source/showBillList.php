<?php
include '../source/connect.php';
$sql = "SELECT b.ID,b.Date,s.Name FROM bill b INNER JOIN status s ON b.StatusID = s.ID WHERE UserID= '".$_SESSION['user']['ID']."'";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result)!=0){
	while($row = mysqli_fetch_assoc($result)){
		?>
		<dt>
			<i class="fa fa-caret-right ui-icon"></i>
			<span class="level"><?php echo ($row['ID']); ?></span>
			<span class="level"><?php echo ($row['Name']); ?>
				<?php 
				if ($row['Name']=='Waiting') {
					echo("<a href='../source/deleteBill.php?ID=".$row['ID']."'>Hủy Đơn Hàng</a>");
				}
				?>
			</span>
			<?php echo("<a target='_blank' href='../html/billDetail.php?ID=".$row['ID']."''>".$row['Date']."</a>");?>	

		</dt>
		<?php 
	}
}
?>