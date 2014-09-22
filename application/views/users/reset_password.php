<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Attendance - Reset Password</title>
        <link rel="stylesheet" href="<?php echo base_url();?>static/bootstrap/css/bootstrap.min.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="<?php echo base_url();?>static/bootstrap/css/bootstrap-responsive.min.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css" type="text/css" media="screen"/>
        <style type='text/css'>
            .header_ca {
                width: 100%;
                float: left;
                margin-bottom: 20px;
                background: #2766AD url(<?php echo base_url(); ?>static/images/bg_header.jpg);
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
        <script type="text/javascript" src="<?php echo base_url('static/js/jquery.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('static/js/jquery.validate.min.js'); ?>"></script>
        
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
        <?php if(empty($error)){ ?>
        <div style="float: left; width: 100%; ">
            <div style='width: 350px; margin: 100px auto;'>
                <?php
                $form_attr = array('class' => 'form-horizontal', 'id' => 'pass_reset_form', 'name' => 'pass_reset_form');
                $form_action = 'home/confirm_reset_password';
                
                echo form_open($form_action, $form_attr); ?>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <td colspan='2' style='text-align: center; background-color: #FFFFFF; color: white'>
                                <img style="margin-top:5px;" src='<?php echo base_url(); ?>static/images/eyesay_logo_texting_panel.png' alt='Eyesay Logo' />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="password">Password:</label></td><td><input type="password" size="20" id="password" name="password" value=""/></td>
                        </tr>
                        <tr>
                            <td><label for="password_confirm">Confirm Password:</label></td><td><input type="password" size="20" id="password_confirm" name="password_confirm"/></td>
                        </tr>
                        <?php if(validation_errors()) {?>
                            <tr>
                                <td colspan='2' style='text-align: center'><span class='error'><?php echo validation_errors(); ?></span></td>
                            </tr>
                        <? } ?>
                        <tr>
                            <td colspan='2' style='text-align: center'><input class='btn' type="submit" value="Save"/></td>
                            <input type="hidden" name="uid" id="uid" value="<?php echo $uid; ?>" />
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <?php } else { ?>
        <div class='container'>
            <div style=" width: 500px; padding: 10px; margin: 20px auto;">
                <strong style="font-size: 15px; color: red;"><?php echo $error; ?></strong>
                <h5>Click here to: <a class="btn btn-primary" href="<?php echo base_url(); ?>">Login <i class="icon-white icon-lock"></i></a></h5>
            </div>
        </div>
        <?php } ?>
    </body>
</html>