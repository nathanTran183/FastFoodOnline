<?php 
include '../layout/header.php';
?>
<div class="container">
	<div class="page-title clearfix">
		<div class="row">
			<div class="col-md-12">
				<h3>Lịch sử đơn hàng</h3>                    
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
					<div class="widget-main">
						<div class="widget-inner">
							<dl class="course-list" role="tablist">
								<?php include '../source/showBillList.php'; ?>								
							</dl>

						</div> <!-- /.widget-inner -->
					</div> <!-- /.widget-main -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->		
		</div> <!-- /.col-md-8 -->


		<!-- Here begin Sidebar -->
		<div class="col-md-4">
			<div class="widget-main">
				<div class="widget-main-title">
					<h4 class="widget-title">Thức ăn mới</h4>
				</div> 
				<div class="widget-inner">
					<?php 
					include '../source/showFood.php';
					?>
				</div> 		
			</div> <!-- /.widget-main -->
		</div> <!-- /.col-md-4 -->
	</div> <!-- /.row -->
</div> <!-- /.container -->
<?php 
include '../layout/footer.php';
?>



