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
				<form name="CreateForm" action="../source/doCreateFood.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class = "col-lg-3 control-label" >Name</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="name"></input>
						</div>
					</div>
					<div class="form-group">
						<label class = "col-lg-3 control-label">Price</label> 
						<div class="col-lg-9">
							<input type="text" class="form-control" name="price"></input>
						</div>
					</div>  
					<div class="form-group">
						<label class = "col-lg-3 control-label">Image</label> 
						<div class="col-lg-9">
							<input type="file" name="myimage" class="form-control">                     
						</div>
					</div>  					
					<div class="form-group">
						<label class = "col-lg-3 control-label">Description</label> 
						<div class="col-lg-9">
							<textarea rows="10" class="form-control" name="description"></textarea>
						</div>
					</div>  
					<div class="form-group">
						<label class = "col-lg-3 control-label">Category</label> 
						<div class="col-lg-9">
							<select name="category" class="form-control">
								<?php 
								while ($item = mysqli_fetch_assoc($result1)){									
									echo("<option value='".$item["id"]."'>".$item["name"]."</option>");
								} 
								?>									
							</select>								                         
						</div>
					</div> 
					<div class="form-group">
						<label class = "col-lg-3 control-label">Quantity</label> 
						<div class="col-lg-9">
							<input type="number" class="form-control" name="quantity"></input>
						</div>
					</div>  
					<div class="form-group">
							<div class="col-md-offset-3 col-md-8">
								<input type="submit" class="btn btn-danger" value="Tạo mới" />
								<a href="../html/foodIndex.php"  class="btn btn-primary">Quay lại</a>
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