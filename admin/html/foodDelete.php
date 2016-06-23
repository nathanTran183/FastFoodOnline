<?php 
include '../layout/header.php';
?>
<div class="container form-horizontal">
    <div class="row">

        <div class="widget-item">
            <div class="col-lg-10">

                <h2 class="prof-name-list text-center">BẠN CÓ MUỐN XÓA MÓN ĂN NÀY?</h2>
                <hr />
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <dl class="dl-horizontal">
                        <?php 
                        $ID = $_REQUEST["ID"];
                        include '../../source/connect.php';
                        $sql = "SELECT f.ID, f.Name, f.Price, f.Image, f.Description, c.name FROM food f inner join foodcategory c ON f.categoryID=c.id WHERE f.ID='".$ID."'";
                        $result = mysqli_query($link,$sql);
                        while ($row = mysqli_fetch_assoc($result)) { 
                            echo "<dt>Image</dt><dd><img width='300' src='../../images/".$row["Image"]."''></dd>";
                            echo "<dt>Name</dt><dd>".$row["Name"]."</dd>";
                            echo "<dt>Price</dt><dd>".$row["Price"]."</dd>";
                            echo "<dt>Description</dt><dd>".$row["Description"]."</dd>";
                            echo "<dt>Category</dt><dd>".$row["name"]."</dd>";                          
                        
                        ?>
                    </dl>
                </div>
                <form name="DeleteForm" method="post" action="../source/doDeleteFood.php">
                    <div class="form-group">
                        <div class="col-md-offset-4 col-lg-8">   
                        <input type="hidden" name="id" value="<?php echo($row["ID"]); ?>"></input>                     
                            <input type="submit" value="Xóa" class="btn btn-danger" />
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
include '../layout/footer.php';
?>