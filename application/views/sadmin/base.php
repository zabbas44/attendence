
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Super Admin</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>static/bootstrap-3.2/css/bootstrap.min.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/sadmin.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>static/data-tables/DT_bootstrap.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>static/data-tables/select2_metro.css" type="text/css" media="screen"/>


</head>

    <body>
        <?php
        
            $this->load->view('sadmin/header');
            
            if (!isset($template))
            $template = $this->router->fetch_class() . '/' . $this->router->fetch_method();
            $this->load->view($template); 
            
        ?>

    <script src="('<?php echo base_url(); ?>static/js/jquery.min.js')" type='text/javascript'>></script>
    <script src="('<?php echo base_url(); ?>static/bootstrap/js/bootstrap.js')"  type='text/javascript'></script>
<script src="('<?php echo base_url(); ?>static/data-tables/app.js')"  type='text/javascript'></script>
<script src="('<?php echo base_url(); ?>static/data-tables/DT_bootstrap.js')"  type='text/javascript'></script>
<script src="('<?php echo base_url(); ?>static/data-tables/jquery.dataTables.js')"  type='text/javascript'></script>
<script src="('<?php echo base_url(); ?>static/data-tables/jquery.dataTables.min.js')"  type='text/javascript'></script>
<script src="('<?php echo base_url(); ?>static/data-tables/select2.min.js')"  type='text/javascript'></script>
    <?php
    $this->load->view('sadmin/footer');
    ?>
    
</body>
</html>
