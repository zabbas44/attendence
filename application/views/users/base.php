<?php

$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
$this->output->set_header('Pragma: no-cache');
$this->output->set_header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');

$session_check = $this->session->userdata('u_logged_in');
if (!isset($session_check['session']))
    redirect(base_url() . 'login', 'refresh');

//trying to guess template if not sent
if (!isset($template))
    $template = $this->router->fetch_class() . '/' . $this->router->fetch_method();

if (!isset($css_files))
    $css_files = array();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title></title>

    <link rel="stylesheet" href="static/bootstrap-3.2/css/bootstrap.min.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="static/css/style.css" type="text/css" media="screen"/>
    <script src="<?php echo base_url(); ?>static/audiojs/audio.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>static/flowplayer/flowplayer-3.2.12.min.js'; ?>"></script>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>eyesay.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>eyesay.ico" type="image/x-icon">

    </head>
        <body>
            <div class="wrapper_main">

    <?php
            include(SITE_ROOT . 'application/views/home/header_code.php');
            include(SITE_ROOT . 'application/views/home/header.php');
    ?>

  <div class="container-ext">
    <div class='margin-all-40'>
      <?php $this->load->view($template); ?>
    </div>
  </div>

  <?php

      $is_admin_user = $this->session->userdata('is_admin_user');
      if($is_admin_user){  ?>

          <br/><br/>
          <div class="col-lg-12">
              <div class="margin-auto">
                  <a href="<?php echo base_url(); ?>company_admin" class="nounderline btn btn-info col-lg-12">Company Admin</a>
              </div>
          </div>

      <?php } ?>

  <?php include(SITE_ROOT . '/application/views/home/footer.php'); ?>

                <script src="<?php echo base_url('static/js/jquery.min.js') ?>"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>static/js/ajaxfileupload.js"></script>
                <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
                <script src='<?php echo base_url('static/bootstrap/js/bootstrap.js') ?>' type='text/javascript'></script>

                <!--            <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>-->
                <script type="text/javascript" src="<?php echo base_url() . 'static/js/jquery-ui-1.10.3.custom.min.js'; ?>"></script>
                <script type="text/javascript" src="<?php echo base_url() . 'static/script_cam/scriptcam.js'; ?>"></script>
                <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <?php
                if (!isset($js_files))
                    $js_files = array();
                        foreach ($js_files as $file):    ?>
                            <script src="<?php echo $file; ?>" type="text/javascript"></script>
                        <?php endforeach; ?>

                    <script type="text/javascript">

				        if(document.getElementById('myElement')){
					        jwplayer.key="9d7NfO0UO7RSKWT6ROwbMBP2nLZUOIpaN+kRag==";
					        jwplayer("myElement").setup({
    						    file: $('#base_url').val() + 'static/sounds/fbchatnotification.mp3',
	    					    height : 0,
		    				    width : 0
			    		    });
				    	    $('#myElement').css('display','none');
				        }

	    		    </script>

    </div>
  </body>
</html>
