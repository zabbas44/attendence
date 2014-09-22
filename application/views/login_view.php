<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Attendance User Login</title>
        <link rel="stylesheet" href="static/bootstrap-3.2/css/bootstrap.min.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="static/css/style.css" type="text/css" media="screen"/>
        <script type="text/javascript" src="static/js/jquery.min.js"></script>
	<script type="text/javascript" src="static/js/login.index.js"></script>
        
        <script type="text/javascript">
            var dv = new Date();
            var date_offset = dv.getTimezoneOffset();
            document.cookie = "eyesay_timezone_offset="+date_offset;
        </script>
    </head>
    <body>
    <div class="row">
        <div class="col-lg-12 headerblue">
            <div class="col-lg-2">
                <a href="<?php echo base_url() ?>">
                    <img src="static/images/logomd.png" alt="logo-header" />
                 </a>
            </div>
            <div class="col-lg-10"></div>
        </div>

        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"> &nbsp; </div>
            <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12">
            <br/>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <?php

                            $form_attr = array('class' => 'form-horizontal', 'id' => 'login_form', 'name' => 'login_form');
                            $form_action = isset($controller) ? $controller.'verifylogin' : 'verifylogin';
                            echo form_open($form_action, $form_attr);

                        ?>

                        <div class="admin_login_form">
                            <br/>
                                <input type="text" size="20" id="email" name="email" placeholder="Email Address" value="<?php echo set_value('email'); ?>" class="form-control" />
                            <br/>
                                <input type="password" size="20" id="password" name="password" placeholder="Password" class="form-control" />
                            <br/>

                                <?php  $msg = validation_errors(); if(!empty($msg)){  ?>

                                    <div class="col-lg-12 nopadding">
                                        <span class='alert-danger custom-danger'><?php echo $msg; ?></span>
                                    </div>

                                <?php } ?>
                                <br/>
                                <?php if( ! stristr($controller, 'sadmin')){ ?>
                                    <div class="forgot_pass">
                                        <span><input class='btn btn-success' type="submit" value="Login"/ ></span> <a class="btn btn-danger" href="<?php echo base_url().'home/forgot_password'; ?>">Forgot Password?</a>
                                    </div>
                                <?php } ?>
                            </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">&nbsp;</div>
            </div>

              <div class="col-lg-12 text-center col-md-12 col-xs-12 col-sm-12">
                <div class="login_footer" id="login_footer">
                    <div class="footer_text_container">&COPY; Attendance All Rights Reserved</div>
                </div>
              </div>
    </div>
    </body>
</html>
<input type="hidden" value="<?php echo base_url() ?>" id="base_url" />