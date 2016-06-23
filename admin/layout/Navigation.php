<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-brand" href="../html/index.php">FAST FOOD ONLINE</a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">                             
                <li>                    
                    <li><a href="../../html/home.php">Giao diện chính</a></li>                   
                </li>
                <li class="divider"></li>            
                <li>                    
                    <li><a href="../../source/logout.php">Đăng xuất</a></li>                   
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="../html/index.php"><i class="fa fa-bar-chart-o fa-fw"></i> Bảng điều khiển</a>
                </li>
                <li >
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý Site<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse in" style="">
                        <li>
                            <a href="../html/billIndex.php">Quản lý hóa đơn</a>
                        </li> 
                        <li>
                            <a href="../html/foodIndex.php">Quản lý món ăn</a>
                        </li>
                        <li>
                            <a href="../html/foodCategoryIndex.php">Quản lý loại món ăn</a>
                        </li>                    
                    </ul>
                </li>
                <?php if($_SESSION['user']['RoleID']==1) {                    
                    ?>
                    <li class="active">
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý hệ thống<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse in" style="">
                            <li>
                                <a href="../html/userIndex.php">Quản lý người dùng</a>
                            </li>
                        </ul>
                    </li>
                    <?php 
                } ?>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
