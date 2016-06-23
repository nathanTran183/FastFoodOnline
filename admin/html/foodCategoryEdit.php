<?php 
include '../layout/header.php';
$ID = $_REQUEST["ID"];
include '../../source/connect.php';
$sql = "SELECT * FROM foodcategory WHERE id='".$ID."'";
$result = mysqli_query($link,$sql);
while ($row = mysqli_fetch_assoc($result)) { 
	?>

	<div class="container form-horizontal">
		<div class="row">
			<div class="col-lg-10">
				<div class="widget-item">
					<h2 class="prof-name-list text-center">CHỈNH SỬA MÓN ĂN </h2>
					<hr />                
					<form action="../source/doEditFoodCategory.php" name="EditForm" method="post">
						<input type="hidden" name="id" value="<?php echo($row["id"]); ?>"></input>
						<div class="form-group">
							<label class = "col-lg-3 control-label" >Name</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" name="name" value="<?php echo($row["name"]); ?>"></input>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-offset-3 col-md-8">
								<input type="submit" class="btn btn-danger" value="Lưu thay đổi" />
								<a href="../html/foodCategoryIndex.php"  class="btn btn-primary">Quay lại</a>
							</div>
						</div>                    
					</form>
				</div>
			</div>

		</div>
	</div>
	<?php 
}
if (isset($_SESSION['msg'])){
    echo('<script language="javascript">alert("'.$_SESSION['msg'].'")</script>');
    unset($_SESSION['msg']);}
include '../layout/footer.php';
?>