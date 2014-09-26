<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Admin - Reset Password</title>
        
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#pass_reset_form').validate({
                    rules: {
                        password: {
                            required: true,
                        },
                        password_confirm : {
                            required: true,
                            equalTo : "#password"
                        }
                    },
                    messages: {
                        password: {
                            required: "Password field cannot be empty.",
                        },
                        password_confirm : {
                            required: "Confirm Password field cannot be empty.",
                            equalTo : "Password does not match as above."
                        }
                    },
                    success: function(error_label) {
                        error_label.hide();
                    }
                });
            });
        </script>
    </head>
    <body>

        <?php if(empty($error)){ ?>
        <div class="container">
    <div class="row">
       
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
     <div class="panel">
                    <div class="panel-heading table-header">
                        <h3 class="panel-title"><b>Admin Password Reset</b></h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo base_url()?>sadmin/password_changed" method="post" accept-charset="utf-8" class="form-horizontal" id="login_form" name="login_form">
                        <div class="admin_login_form">
                            <br>
                            <label>New Password</label>
                            <input type="password" size="20" id="uname" name="uname" placeholder="New Password" value="" class="form-control" />
                            <br/>
                            <label>Repeat New Password</label>
                                <input type="password" size="20" id="password" name="password" placeholder="Repeat New Password" class="form-control" />
                            <br/>
                            <br/>

                                        <a href="<?php echo base_url()?>sadmin/password_changed">
                                        <input type="submit" class="btn btn-bg" value="Reset" />
                                        </a>

                            </div>
                    </form>
                    </div>
                </div>
        <?php } else { ?>

        <?php } ?>
            <div class="col-lg-3"></div>
    </div>
    </div>
    </body>
</html>