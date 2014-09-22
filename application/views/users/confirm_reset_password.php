<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Attendance - Password Reset</title>
        <link rel="stylesheet" href="<?php echo base_url();?>static/bootstrap/css/bootstrap.min.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="<?php echo base_url();?>static/bootstrap/css/bootstrap-responsive.min.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css" type="text/css" media="screen"/>
        <style type='text/css'>
            .header_ca {
                width: 100%;
                float: left;
                margin-bottom: 20px;
                background: #2766AD url(<?php echo base_url(); ?>static/images/);
                height: 130px;
            }

            .header_ca .header_container {
                margin: 0 auto;
                width: 90%;
                margin-top: 40px;
            }

            .header_ca .header_container_wrapper {
                float:left;
                width: 100%;
            }

            .header_ca .header_btns {
                float: right;
                margin-left: 20px;
            }

            .header_ca .header_logo {
                float: left;
            }
        </style>
        
    </head>
    <body>
        <div id="header" class="header_ca">
            <div class="header_container">
                <div class='header_container_wrapper'>
                    <div class="header_logo">
                        <img src="<?php echo base_url(); ?>static/images/logomd.png" alt="EyeSay Logo" />
                    </div>
                </div>
            </div>
            <input type="hidden" value="<?php echo base_url(); ?>" id="base_url" />
        </div>
        <div class='container'>
            <div style=" width: 500px; padding: 10px; margin: 20px auto;">
        <?php if(empty($error)){ ?>
                <h4>Password changed Successfully.</h4>
            
        <?php } else { ?>
                <strong style="font-size: 15px; color: red;"><?php echo $error; ?></strong>
        <?php } ?>
                <h5>Click here to: <a class="btn btn-primary" href="<?php echo base_url(); ?>">Login <i class="icon-white icon-lock"></i></a></h5>
            </div>
        </div>
    </body>
</html>