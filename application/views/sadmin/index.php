
<div class="container">
    <div class="row">
       
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
<div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>Admin Login</b></h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo base_url(); ?>sadmin/crud" method="post" accept-charset="utf-8" class="form-horizontal" id="login_form" name="login_form">
                        <div class="admin_login_form">
                            <br>
                            <label>Admin Name</label>
                                <input type="text" size="20" id="uname" name="uname" placeholder="Admin Name" value="" class="form-control">
                            <br>
                            <label>Password</label>
                                <input type="password" size="20" id="password" name="password" placeholder="Password" class="form-control">
                            <br>

                                                                <br>
                                    <div class="forgot_pass">
                                       
                                        <input type="submit" class="btn btn-bg" value="Login" />
                                          
                                        &nbsp;
                                        <a class="btn btn-danger" href="<?php echo base_url();?>sadmin/reset_password">Forgot Password?</a>
                                    </div>
                                                            </div>
                    </form>
                    </div>
                </div>
        </div>
    
    <div class="col-lg-3"></div>
    </div>
    </div>