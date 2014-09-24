<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Admin - Forgot Password</title>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#frm_forgot_password').validate({
                    rules: {
                        username: {
                            required: true
                        }
                    },
                    messages: {
                        username: {
                            required: "Username field cannot be left empty",
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
        
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12">

            <br/>
            <br/>
        <?php if (!isset($error) || $error == 1) { ?>

            <form action="<?php echo base_url(); ?>sadmin/crud" method="post" id="password_changed">

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Admin Password Changed</h3>
                            </div>
                            <div class="panel-body">
                                <div class="admin_login_form">
                                    

                          
                           <br/>
                           <a href="<?php echo base_url(); ?>sadmin/crud">
                           <input class='btn btn-success' type="submit" value="Go To Admin Panel"/>
                           </a>
                           
                           </div>
                            </div>   
                            </div>
                         
                    </form>
                </div>
        </div>
    </div>

<?php } else { ?>


<?php } ?>
   
            
    </body>
</html>