<?php 
include '../layout/header.php';
?>
<div class="container form-horizontal">
    <div class="row">
        <div class="col-md-8">
            <div class="widget-item">
                <section id="loginForm">
                    <form name="loginForm" action="../source/checkLogin.php" method="post" enctype="multipart/formdata">
                        <h4 class="widget-title">Log in</h4>
                        <hr />             
                        <div class="form-group">
                            <label class = "col-lg-3 control-label" >UserName</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="username"></input>                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class = "col-lg-3 control-label">Password</label> 
                            <div class="col-lg-9">
                                <input type="password" class="form-control" name="password"></input>                            
                            </div>
                        </div>                       
                        <div class="form-group">
                            <div class="col-md-offset-3 col-lg-9">
                                <input type="submit" value="Login" class="btn btn-primary" />                               
                            </div>                            
                        </div>                                                
                    </form>                
                </section>
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