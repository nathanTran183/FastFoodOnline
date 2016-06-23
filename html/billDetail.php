<?php 
$ID = $_REQUEST['ID'];
include '../layout/header.php';
include '../source/connect.php';
?>
<div class="container">
	<div class="page-title clearfix">
		<div class="row">
			<div class="col-md-12">
				<h3>Chi tiết đơn hàng</h3>
				<?php
				$sql = "select TotalMoney from bill where ID = '".$ID."';";
				$result = mysqli_query($link, $sql);
				$row = mysqli_fetch_assoc($result);
				echo 'Tổng tiền: '.$row['TotalMoney'];
				?>                   
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">

		<!-- Here begin Main Content -->
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">
					<?php 
					$sql1 = "SELECT f.ID,f.Name,f.Image,f.Description,b.CurrentPrice, b.Quantity FROM booking b INNER JOIN food f ON b.FoodID=f.ID WHERE b.BillID ='".$ID."'";
					$result1 = mysqli_query($link, $sql1);
					if(mysqli_num_rows($result1)!=0){
						while($item = mysqli_fetch_assoc($result1)){
							?>
							<div class="list-event-item">
								<div class="box-content-inner clearfix">
									<div class="list-event-thumb">
										<?php 
										echo "<a href='../html/foodDetail.php?ID=".$item['ID']."'>"; ?>
										<?php echo "<img src='../images/".$item['Image']."' alt='' />"; ?>											
									</a>
								</div>
								<div class="list-event-header">
									<span class="event-place small-text"><i class="fa fa-globe"></i><?php echo($item['Quantity']) ?></span>
									<span class="event-date small-text"><i class="fa fa-calendar-o"></i><?php echo($item['CurrentPrice']) ?>VND</span>
									<div class="view-details"><?php 
										echo "<a href='../html/foodDetail.php?ID=".$item['ID']."' class='lightBtn'>View Details</a>"; ?>
										
									</div>
								</div>
								<h5 class="event-title"><?php 
									echo "<a href='../html/foodDetail.php?ID=".$item['ID']."'</a>"; ?><?php echo($item['Name']) ?></a></h5>
									<p></p>
								</div> <!-- /.box-content-inner -->
							</div> <!-- /.list-event-item -->
							<?php
						}
					}
					?>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->		
		</div> <!-- /.col-md-8 -->

		<!-- Here begin Sidebar -->
		<div class="col-md-4">
			<div class="widget-main">
				<div class="widget-main-title">
					<h4 class="widget-title">Nước uống mới</h4>
				</div> 
				<div class="widget-inner">
					<?php 
					include '../source/showDrink.php';
					?>
				</div>				
			</div> <!-- /.widget-main -->
		</div> <!-- /.col-md-4 -->

	</div> <!-- /.row -->
</div> <!-- /.container -->

<?php 
include '../layout/footer.php';
?>
