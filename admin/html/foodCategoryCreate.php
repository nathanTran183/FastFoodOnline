<?php 
include '../layout/header.php';
include '../../source/connect.php';
$sql = "SELECT * FROM foodcategory";
$result1 = mysqli_query($link,$sql);
?>
<div class="container form-horizontal">
	<div class="row">

		<div class="col-lg-10">
			<div class="widget-item">
				<h2 class="prof-name-list text-center">TẠO MÓN ĂN </h2>
				<hr />
				<form name="CreateForm" action="../source/doCreateFoodCategory.php" method="post">
					<div class="form-group">
						<label class = "col-lg-3 control-label" >Name</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="name"></input>
						</div>
					</div>					
					<div class="form-group">
						<div class="col-md-offset-3 col-md-8">
							<input type="submit" class="btn btn-danger" value="Tạo mới" />
							<a href="../html/foodCategoryIndex.php"  class="btn btn-primary">Quay lại</a>
						</div>
					</div>  
				</form>

			</div>
		</div>

	</div>
</div>


<?php 
if (isset($_SESSION['msg'])){
	echo('<script language="javascript">alert("'.$_SESSION['msg'].'")</script>');
	unset($_SESSION['msg']);}    
	include '../layout/footer.php';
	?>