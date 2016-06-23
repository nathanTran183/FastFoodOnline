<?php 
include '../layout/header.php';
$ID = $_REQUEST['ID'];
include '../source/connect.php';
$sql = "SELECT f.ID,f.Name,f.Price,f.Image,f.Description,f.Quantity,c.name FROM food f INNER JOIN foodcategory c ON f.categoryID = c.id WHERE f.ID='".$ID."'";
$result = mysqli_query($link, $sql);
?>
<div class="container">
	<div class="page-title clearfix">
		<div class="row">
			<div class="col-md-12">
				<h3>Thông tin chi tiết</h3>                    
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<!-- Here begin Main Content -->
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">
					<div class="event-container clearfix">
						<div class="left-event-content">
							<?php echo "<img width='20%' src='../images/".$row['Image']."' alt='' />"; ?>
							<div class="event-contact">
								<h4>Thông tin cơ bản</h4>
								<ul>
									<li>Giá: <?php echo $row['Price']; ?> VND</li>
									<li>Số lượng còn: <?php echo $row['Quantity']; ?></li>
								</ul>
							</div>
						</div> <!-- /.left-event-content -->
						<div class="right-event-content">
							<h2 class="event-title"><?php echo $row['Name']; ?></h2>	
							<span class="event-time">Loại: <?php echo ($row['name']); ?></span>
							<p><strong class="dark-text"><?php echo $row['Description']; ?></strong></p>
							
							<div class="google-map-canvas" id="map-canvas" style="height: 210px;">
							</div>
						</div> <!-- /.right-event-content -->
					</div> <!-- /.event-container -->
				</div>
			</div> <!-- /.row -->
		</div> <!-- /.col-md-8 -->

		<!-- Here begin Sidebar -->
		<?php } ?>

	</div> <!-- /.row -->
</div> <!-- /.container -->
<?php 
include '../layout/footer.php';
?>