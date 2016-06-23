<?php 
include '../layout/header.php';
$ID = $_REQUEST["ID"];
include '../../source/connect.php';
$sql = "SELECT * FROM status";
$result1 = mysqli_query($link,$sql);
$sql = "SELECT * FROM bill WHERE ID = '".$ID."'";
$result = mysqli_query($link,$sql);
while ($row = mysqli_fetch_assoc($result)) { 
	// $_POST['oldStatus'] = $row["StatusID"];
	?>

	<div class="container form-horizontal">
		<div class="row">
			<div class="col-lg-10">
				<div class="widget-item">
					<h2 class="prof-name-list text-center">SET TRẠNG THÁI HÓA ĐƠN</h2>
					<hr />                
					<form action="../source/doEditBill.php" name="EditForm" method="post">
						<input type="hidden" name="id" value="<?php echo($row["ID"]); ?>"></input>
						<input type="hidden" name="oldStatus" value="<?php echo($row["StatusID"]); ?>"></input>		
						<div class="form-group">
							<label class = "col-lg-3 control-label">Status</label> 
							<div class="col-lg-9">								
								<?php 
								while ($item = mysqli_fetch_assoc($result1)){
									if($item["ID"]==$row["StatusID"])
										echo("<input type='radio' name='status' checked value='".$item["ID"]."'>".$item["Name"]."</input><br/><br/>");
									else echo("<input type='radio' name='status' value='".$item["ID"]."'>".$item["Name"]."</input><br/><br/>");
								} 
								?>																							                        
							</div>
						</div> 
						

						<div class="form-group">
							<div class="col-md-offset-3 col-md-8">
								<input type="submit" class="btn btn-danger" value="Lưu thay đổi" />
								<a href="../html/billIndex.php"  class="btn btn-primary">Quay lại</a>
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