<?php 
include '../layout/header.php';   
?>
<div class="nav-bar-main" role="navigation">
    <div class="container">
        <nav class="main-navigation clearfix visible-md visible-lg" role="navigation" style="background-color: #D30F30;">
            <!-- /.main-menu -->

            <?php
            include '../source/showMenuNavibar.php';
            ?>
            <!-- /.social-icons -->
        </nav> 
        <!-- /.main-navigation -->
    </div> 
    <!-- /.container -->
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9">


            <?php
            $foodCategoryID = $_GET['foodCategoryID'];
            include '../source/showMenu.php';
            ?>    
        </div>
        <div class="col-md-3">
            <div class="widget-main">
                <div class="widget-main-title">
                    <h4 class="widget-title">Đơn hàng hàng hiện tại</h4>
                </div>
                <div class="widget-inner current-order">
                    <?php
                    include '../source/showCurrentBillItems.php';
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php 
    include '../layout/footer.php';
    ?>