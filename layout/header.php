<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
    </html><![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
    </html><![endif]-->
    <!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> </html><![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <title>Fast food online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Description for my template" />
        <meta name="author" content="Esmet" />
        <meta charset="UTF-8" />

        <link href='../../../../fonts.googleapis.com/css_b201cc6a.css' rel='stylesheet' type='text/css' />
        
        <!-- CSS Bootstrap & Custom -->
        <script src="../layout/js/jquery-1.11.3.min.js"></script>
        <link href="../layout/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
        <link href="../layout/css/font-awesome.min.css" rel="stylesheet" media="screen" />
        <link href="../layout/css/animate.css" rel="stylesheet" media="screen" />

        <link href="../layout/style.css" rel="stylesheet" media="screen" />
        
        <!-- Favicons -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../layout/images/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../layout/images/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../layout/images/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="../layout/images/ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="../layout/images/ico/favicon.ico" /> -->
    <script src="../layout/js/jqueryDemo.js"></script>
    <!-- JavaScripts -->
    <script src="../layout/js/modernizr.js"></script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="../../../../storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
        <![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
        <body>
            <?php 
            session_start();

            if(!isset($_SESSION['itemID'])){
                $_SESSION['itemID']='';
            }

            if(!isset($_SESSION['quantity'])){
                $_SESSION['quantity']='';
            }
            ?>

            <header class="site-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 header-left">
                            
                        </div> <!-- /.header-left -->

                        <div class="col-md-4">
                            <div class="logo">
                                <a href="../html/home.php" title="Universe" rel="home">
                                    <img src="../layout/images/fast-foods-630.gif" width="100%" alt="Universe" />
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->

                        <div class="col-md-4 header-right">
                            <br/><br/><br/><br/><br/><br/>
                            <ul class="small-links">
                                <?php
                                if(isset($_SESSION['user'])){
                                    if($_SESSION['user']['RoleID']==0){
                                        echo '<li style="font-size:20px"><a href="../html/login.php">Đăng nhập</a></li>';
                                        echo '<li style="font-size:20px"><a href="../html/register.php">Đăng ký</a></li>';
                                    } else{
                                        echo '<li style="font-size:20px"><a href="../html/profile.php">'.$_SESSION['user']['fullname'].'</a></li>';
                                        echo '<li style="font-size:20px"><a href="../source/logout.php">Đăng xuất</a></li>';
                                    }
                                }else{
                                    echo '<li style="font-size:20px"><a href="../html/login.php">Đăng nhập</a></li>';
                                    echo '<li style="font-size:20px"><a href="../html/register.php">Đăng ký</a></li>';
                                }

                                ?>                                
                            </ul>
                            <div class="search-form">

                            </div>
                        </div> <!-- /.header-right -->
                    </div>
                </div> <!-- /.container -->

                <div class="nav-bar-main" role="navigation">
                    <div class="container">
                        <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                            <ul class="main-menu sf-menu">
                                <li><a href="../html/home.php">Trang chủ</a></li>
                                <li><a href="../html/menu.php?foodCategoryID=FOCAT1">Thực đơn</a></li>
                                <?php
                                if(isset($_SESSION['user'])){
                                    if($_SESSION['user']['RoleID']!=0){
                                        echo '<li><a href="../html/billList.php">Đơn hàng</a></li>';
                                    }
                                    if($_SESSION['user']['RoleID']==1||$_SESSION['user']['RoleID']==3){
                                        echo '<li><a href="../admin/html/index.php">Quản lý</a></li>';
                                    } 
                                }

                                ?>
                                <li><a href="#">Liên hệ</a></li>
                            </ul> 
                            <!-- /.main-menu -->

                            <ul class="social-icons pull-right">
                                <li><a href="https://web.facebook.com/nathanTran183?fref=ts" target="_blank" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/minh1tnk" target="_blank" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            </ul> 
                            <!-- /.social-icons -->
                        </nav> 
                        <!-- /.main-navigation -->
                    </div> 
                    <!-- /.container -->
                </div> 
                <!-- /.nav-bar-main -->

            </header> 
        </body>
    <!-- /.site-header -->