<?php 
include '../layout/header.php';    
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="main-slideshow">
                <div class="flexslider">
                    <ul class="slides">
                    <!-- <?php
                        //include '../source/showSlider.php';
                    ?> -->
                        <li>
                            <img src="../images/ga.gif" />
                            <div class="slider-caption">
                                <h2><a href="#">Combo hot</a></h2>
                                <p>Đùi gà nướng bơ tỏi + hamburger</p>
                            </div>
                        </li>
                        <li>
                            <img src="../images/banh_trung.gif" />
                            <div class="slider-caption">
                                <h2><a href="#">Bánh trứng</a></h2>
                                <p>Nhìn rất ngon mắt</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> 
            <div class="row">

                <div class="col-md-6">
                    <div class="widget-main">
                        <div class="widget-main-title">
                            <h4 class="widget-title">Thức ăn mới</h4>
                        </div> 
                        <div class="widget-inner">
                            <?php 
                            include '../source/showFood.php';
                            ?>
                        </div> 
                    </div>
                </div> 

                <div class="col-md-6">
                    <div class="widget-main">
                        <div class="widget-main-title">
                            <h4 class="widget-title">Nước uống mới</h4>
                        </div> 
                        <div class="widget-inner">
                            <?php 
                            include '../source/showDrink.php';
                            ?>
                        </div>
                    </div> 
                </div> 

            </div> 
        </div> 

        <div class="col-md-4">
            <div class="widget-main">
                <div class="widget-main-title">
                    <h4 class="widget-title">Đơn hàng hàng hiện tại</h4>
                </div>
                <div class="widget-inner current-order">
                    <?php
                    include '../source/showCurrentBillItems.php';
                    ?>
                    <?php

                    ?>
                    
                </div> 
            </div>  
        </div> 
    </div>
</div>
    <div>

    </div>
<?php 
include '../layout/footer.php';
?>