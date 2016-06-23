<?php 
include '../layout/header.php';    
?>
<div class="container">
	<div class = "row">
		<div class="col-md-7">
			<div class="widget-main">
				<div class="widget-main-title">
					<h4 class="widget-title">Thông tin cá nhân</h4>
				</div> 
				<div class="widget-inner">
					<form name="changInfoForm" action="../source/updateInfo.php" method="post">
						Họ và tên
						<input type="text" class="form-control" value='<?php echo $_SESSION['user']['fullname']; ?>' name="txtfullname"/>  	
						Địa chỉ
						<input type="text" class="form-control" value='<?php echo $_SESSION['user']['address']; ?>' name="txtaddress"/>  	 
						Số điện thoại
						<input type="text" class="form-control" value='<?php echo $_SESSION['user']['phone']; ?>' name="txtphone"/>
						<br/>
						<div align="center"><input type="submit" value="Cập nhật" class="btn btn-primary"/></div>

					</form>  
				</div> 
			</div>
		</div> 
		<!-- <div class="col-md-1"></div> -->

		<div class="col-md-4">
			<div class="widget-main">
				<div class="widget-main-title">
					<h4 class="widget-title">Thay đổi mật khẩu</h4>
				</div> 
				<div class="widget-inner">
					<form name="changInfoForm" action="../source/updatePassword.php" method="post">
						Mật khẩu cũ
						<input type="password" class="form-control" name="txtOldPass"/>  	
						Mật khẩu mới
						<input type="password" class="form-control" name="txtNewPass"/>  	 
						Nhập lại mật khẩu mới
						<input type="password" class="form-control" name="txtConfirmPass"/>
						<br/>
						<div align="center"><input type="submit" value="Cập nhật" class="btn btn-primary"/></div>
					</form>  
				</div> 
			</div> 
		</div> 
	</div>
</div>
<?php 
if (isset($_SESSION['msg']))
{
    echo('<script language="javascript">alert("'.$_SESSION['msg'].'")</script>');
    unset($_SESSION['msg']);
}
include '../layout/footer.php';
?>