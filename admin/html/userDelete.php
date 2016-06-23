<?php 
include '../layout/header.php';
?>
<div class="container form-horizontal">
    <div class="row">

        <div class="widget-item">
            <div class="col-lg-10">

                <h2 class="prof-name-list text-center">BẠN CÓ MUỐN XÓA TÀI KHOẢN NÀY?</h2>
                <hr />
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <dl class="dl-horizontal">
                        <?php 
                        $ID = $_REQUEST["ID"];
                        include '../../source/connect.php';
                        $sql = "SELECT u.ID, u.Username, u.Password, u.Fullname, r.Name, u.Address, u.Phone FROM user u INNER JOIN role r ON r.ID=u.RoleID WHERE u.ID='".$ID."'";
                        $result = mysqli_query($link,$sql);
                        while ($row = mysqli_fetch_assoc($result)) { 
                            echo "<dt>Username</dt><dd>".$row["Username"]."</dd>";
                            echo "<dt>Fullname</dt><dd>".$row["Fullname"]."</dd>";
                            echo "<dt>Role</dt><dd>".$row["Name"]."</dd>";
                            echo "<dt>Address</dt><dd>".$row["Address"]."</dd>";
                            echo "<dt>Phone</dt><dd>".$row["Phone"]."</dd>";
                        
                        ?>
                    </dl>
                </div>
                <form name="DeleteForm" method="post" action="../source/doDeleteUser.php">
                    <div class="form-group">
                        <div class="col-md-offset-4 col-lg-8">   
                        <input type="hidden" name="id" value="<?php echo($row["ID"]); ?>"></input>                     
                            <input type="submit" value="Xóa" class="btn btn-danger" />
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
include '../layout/footer.php';
?>