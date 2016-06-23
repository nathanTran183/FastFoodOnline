<?php 
include '../layout/header.php';
$ID = $_REQUEST["ID"];
include '../../source/connect.php';
$sql = "SELECT * FROM foodcategory";
$result1 = mysqli_query($link,$sql);
$sql = "SELECT f.ID, f.Name, f.Price,f.Image, f.Description,f.Quantity, c.name FROM food f inner join foodcategory c ON f.categoryID=c.id WHERE f.ID='".$ID."'";
$result = mysqli_query($link,$sql);
while ($row = mysqli_fetch_assoc($result)) { 
	?>

	<div class="container form-horizontal">
		<div class="row">
			<div class="col-lg-10">
				<div class="widget-item">
					<h2 class="prof-name-list text-center">CHỈNH SỬA MÓN ĂN </h2>
					<hr />                
					<form action="../source/doEditFood.php" name="EditForm" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo($row["ID"]); ?>"></input>
						<div class="form-group">
							<label class = "col-lg-3 control-label" >Name</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" name="name" value="<?php echo($row["Name"]); ?>"></input>
							</div>
						</div>
						<div class="form-group">
							<label class = "col-lg-3 control-label">Price</label> 
							<div class="col-lg-9">
								<input type="text" class="form-control" name="price" value="<?php echo($row["Price"]); ?>"></input>                            
							</div>
						</div>  	
						<div class="form-group">
							<label class = "col-lg-3 control-label"></label> 
							<div class="col-lg-9">
								<img width="300" src="../../images/<?php echo($row["Image"]); ?>">                           
							</div>
						</div>
						<div class="form-group">
							<label class = "col-lg-3 control-label">Image</label> 
							<div class="col-lg-9">
								<input type="file" class="form-control" name="image"></input>                            
							</div>
						</div>  					
						<div class="form-group">
							<label class = "col-lg-3 control-label">Description</label> 
							<div class="col-lg-9">
								<textarea rows="10" class="form-control" name="description"><?php echo($row["Description"]); ?></textarea>
							</div>
						</div>  
						<div class="form-group">
							<label class = "col-lg-3 control-label">Category</label> 
							<div class="col-lg-9">
								<select name="categoryId" class="form-control">
									<?php 
									while ($item = mysqli_fetch_assoc($result1)){
										if($item["name"]==$row["name"])
											echo("<option selected value='".$item["id"]."'>".$item["name"]."</option>");
										else echo("<option value='".$item["id"]."'>".$item["name"]."</option>");
									} 
									?>									
								</select>								                         
							</div>
						</div> 
						<div class="form-group">
							<label class = "col-lg-3 control-label">Quantity</label> 
							<div class="col-lg-9">
							<input type="number" class="form-control" name="quantity" value="<?php echo($row["Quantity"]); ?>"></input>
							</div>
						</div> 

						<div class="form-group">
							<div class="col-md-offset-3 col-md-8">
								<input type="submit" class="btn btn-danger" value="Lưu thay đổi" />
								<a href="../html/foodIndex.php"  class="btn btn-primary">Quay lại</a>
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