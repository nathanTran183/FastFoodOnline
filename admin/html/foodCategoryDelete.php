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
                        $sql = "SELECT * FROM foodcategory WHERE id='".$ID."'";
                        $result = mysqli_query($link,$sql);
                        while ($row = mysqli_fetch_assoc($result)) { 
                            echo "<dt>Name</dt><dd>".$row["name"]."</dd>";                            
                            ?>
                        </dl>
                    </div>
                    <form name="DeleteForm" method="post" action="../source/doDeleteFoodCategory.php">
                        <div class="form-group">
                            <div class="col-md-offset-4 col-lg-8">   
                                <input type="hidden" name="id" value="<?php echo($row["id"]); ?>"></input>
                                <input type="submit" value="Xóa" class="btn btn-danger" />
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
include '../layout/footer.php';
?>