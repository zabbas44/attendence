<?php

if ( ! $this->session->userdata('logged_in'))
    redirect(base_url().'sadmin/login', 'refresh');

//trying to guess template if not sent
if (!isset($template))
    $template = $this->router->fetch_class() . '/' . $this->router->fetch_method();

if(!isset($css_files))
    $css_files = array();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attendance Super Admin
<?php $pg_ttl = isset($page_ttl) ? ' - '.$page_ttl : ''; echo $pg_ttl; ?>
</title>

    <link rel="stylesheet" href="static/bootstrap-3.2/css/bootstrap.min.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="static/css/style.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="static/css/sadmin.css" type="text/css" media="screen"/>



    <?php foreach ($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>/eyesay.ico" type="image/x-icon">
        <link rel="icon" href="static/images/logomd.png" type="image/x-icon">

    </head>

    <body>

            <?php
                include(SITE_ROOT . 'application/views/sadmin/login.php');
                include(SITE_ROOT . 'application/views/sadmin/header.php');
            ?>

    <div class="wrapper_top">
      <div class="wrapper_main">
        <div class="container-ext">
          <div class='margin-all-40'>
            <?php $this->load->view($template); ?>
          </div>
        </div>
      </div>
    </div>
    <?php include(SITE_ROOT . '/application/views/sadmin/footer.php'); ?>
    <script src="<?php echo base_url('static/js/jquery.min.js') ?>"></script>
    <script src='<?php echo base_url('static/bootstrap/js/bootstrap.js') ?>' type='text/javascript'></script>
    <?php
            if(!isset($js_files))
                $js_files = array();
            foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>" type="text/javascript"></script>
    <?php endforeach; ?>
</body>
</html>
