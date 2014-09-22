<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <title>EyeSay Super Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../static/bootstrap-3.2/css/bootstrap.min.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="../static/bootstrap-3.2/css/bootstrap-responsive.min.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="../static/css/style.css" type="text/css" media="screen"/>

    </head>
    <body>
    <div class="col-lg-12 nopadding headerblue">
        <div class="col-lg-2">
            <a href="<?php echo base_url() ?>">
                <img src="../static/images/logo.png" alt="logo-header" />
            </a>
        </div>
        <div class="col-lg-10"></div>
    </div>
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">&nbsp;</div>
        <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12">
            <br/>
            <br/>
            <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>

            <div class="panel-body">
                <?php
                $form_attr = array('class' => 'form-horizontal', 'id' => 'login_form', 'name' => 'login_form');
                $form_action = isset($controller) ? $controller.'verifylogin' : 'verifylogin';
                switch ($controller){
                    case '/':
                        $forgot_pass_link = base_url().'home/forgot_password';
                        break;
                    case 'sadmin/':
                        $forgot_pass_link = '#';
                        break;
                    case 'company_admin/':
                        $forgot_pass_link = base_url().$controller.'forgot_password';
                        break;
                    default:
                        $forgot_pass_link = '#';
                }
                echo form_open($form_action, $form_attr); ?>
                    <div class="admin_login_form">

                        <input type="text" size="20" id="email" name="email" placeholder="Email Address" value="<?php echo set_value('email'); ?>" class="form-control" />
                        <br/>
                        <input type="password" size="20" id="password" name="password" placeholder="Password" class="form-control" />

                        <?php if(validation_errors()) {?>
                            <br/>
                            <div class="col-lg-12 nopadding">
                                <span class='error alert-danger custom-danger'><?php echo validation_errors(); ?></span>
                            </div>
                        <? } ?>
                        <br/>
                        <div class="forgot_pass">
                            <span><input class="btn btn-success" type="submit" value="Login"/></span>
                        </div>
                    </div>
                </form>
            </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">&nbsp;</div>

                <div class="col-lg-12 text-center col-md-12 col-xs-12 col-sm-12 text-center">
                        <div class="login_footer" id="login_footer">
                        <div class="footer_text_container">&COPY; EyeSay 2013 All Rights Reserved</div>
                    </div>
                </div>
    </body>
</html>