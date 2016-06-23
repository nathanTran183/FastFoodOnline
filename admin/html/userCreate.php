<?php 
include '../layout/header.php';
include '../../source/connect.php';
$sql = "SELECT * FROM role";
$result1 = mysqli_query($link,$sql);
?>
<div class="container form-horizontal">
	<div class="row">

		<div class="col-lg-10">
			<div class="widget-item">
				<h2 class="prof-name-list text-center">TẠO TÀI KHOẢN </h2>
				<hr />
				<form name="CreateForm" action="../source/doCreateUser.php" method="post">
					<div class="form-group">
						<label class = "col-lg-3 control-label" >User Name</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="username"></input>
						</div>
					</div>
					<div class="form-group">
						<label class = "col-lg-3 control-label">Password</label> 
						<div class="col-lg-9">
							<input type="text" class="form-control" name="password"></input>                            
						</div>
					</div>  
					<div class="form-group">
						<label class = "col-lg-3 control-label">Re-type Password</label> 
						<div class="col-lg-9">
							<input type="text" class="form-control" name="repassword"></input>                            
						</div>
					</div>  					
					<div class="form-group">
						<label class = "col-lg-3 control-label">Full Name</label> 
						<div class="col-lg-9">
							<input type="text" class="form-control" name="fullname"></input>
						</div>
					</div>  
					<div class="form-group">
						<label class = "col-lg-3 control-label">Role</label> 
						<div class="col-lg-9">
							<select name="roleID" class="form-control">
								<?php 
								while ($item = mysqli_fetch_assoc($result1)){									
									echo("<option value='".$item["ID"]."'>".$item["Name"]."</option>");
								} 
								?>									
							</select>								                         
						</div>
					</div> 
					<div class="form-group">
						<label class = "col-lg-3 control-label">Address</label> 
						<div class="col-lg-9">
							<input type="text" class="form-control" name="address"></input>                            
						</div>
					</div>  
					<div class="form-group">
						<label class = "col-lg-3 control-label">Phone Number</label> 
						<div class="col-lg-9">
							<input type="tel" class="form-control" name="phone"></input>                            
						</div>
					</div> 
					<div class="form-group">
							<div class="col-md-offset-3 col-md-8">
								<input type="submit" class="btn btn-danger" value="Tạo mới" />
								<a href="../html/userIndex.php"  class="btn btn-primary">Quay lại</a>
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