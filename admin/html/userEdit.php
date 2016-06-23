<?php 
include '../layout/header.php';
$ID = $_REQUEST["ID"];
include '../../source/connect.php';
$sql = "SELECT * FROM role";
$result1 = mysqli_query($link,$sql);
$sql = "SELECT u.ID, u.Username, u.Password, u.Fullname, r.Name, u.Address, u.Phone FROM user u INNER JOIN role r ON r.ID=u.RoleID WHERE u.ID='".$ID."'";
$result = mysqli_query($link,$sql);
while ($row = mysqli_fetch_assoc($result)) { 
	?>

	<div class="container form-horizontal">
		<div class="row">
			<div class="col-lg-10">
				<div class="widget-item">
					<h2 class="prof-name-list text-center">CHỈNH SỬA TÀI KHOẢN </h2>
					<hr />                
					<form action="../source/doEditUser.php" name="EditForm" method="post">
						<input type="hidden" name="id" value="<?php echo($row["ID"]); ?>"></input>
						<div class="form-group">
							<label class = "col-lg-3 control-label" >User Name</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" name="username" value="<?php echo($row["Username"]); ?>"></input>
							</div>
						</div>
						<div class="form-group">
							<label class = "col-lg-3 control-label">Password</label> 
							<div class="col-lg-9">
								<input type="text" class="form-control" name="password" value="<?php echo($row["Password"]); ?>"></input>                            
							</div>
						</div>  					
						<div class="form-group">
							<label class = "col-lg-3 control-label">Full Name</label> 
							<div class="col-lg-9">
								<input type="text" class="form-control" name="fullname" value="<?php echo($row["Fullname"]); ?>"></input>
							</div>
						</div>  
						<div class="form-group">
							<label class = "col-lg-3 control-label">Role</label> 
							<div class="col-lg-9">
								<select name="roleID" class="form-control">
								<?php 
									while ($item = mysqli_fetch_assoc($result1)){
										if($item["Name"]==$row["Name"])
										echo("<option selected value='".$item["ID"]."'>".$item["Name"]."</option>");
										else echo("<option value='".$item["ID"]."'>".$item["Name"]."</option>");
									} 
								 ?>									
								</select>								                         
							</div>
						</div> 
						<div class="form-group">
							<label class = "col-lg-3 control-label">Address</label> 
							<div class="col-lg-9">
								<input type="text" class="form-control" name="address" value="<?php echo($row["Address"]); ?>"></input>                            
							</div>
						</div>  
						<div class="form-group">
							<label class = "col-lg-3 control-label">Phone Number</label> 
							<div class="col-lg-9">
								<input type="tel" class="form-control" name="phone" value="<?php echo($row["Phone"]); ?>"></input>                            
							</div>
						</div> 

						<div class="form-group">
							<div class="col-md-offset-3 col-md-8">
								<input type="submit" class="btn btn-danger" value="Lưu thay đổi" />
								<a href="../html/userIndex.php"  class="btn btn-primary">Quay lại</a>
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