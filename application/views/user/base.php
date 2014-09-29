<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   
<title>User</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>static/bootstrap-3.2/css/bootstrap.min.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/user.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/bootstrap.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/datepicker.css" type="text/css" media="screen"/>
</head>
   
     <body>
         
        <?php
        
            $this->load->view('user/header');
            
            if (!isset($template))
            $template = $this->router->fetch_class() . '/' . $this->router->fetch_method();
            $this->load->view($template); 
            
        ?>
         
<!--        <script src="<?php echo base_url(); ?>static/bootstrap/js/jquery.min.js" type='text/javascript'></script>-->
        <script src="<?php echo base_url(); ?>static/bootstrap-3.2/js/bootstrap.js"  type='text/javascript'></script>
        <script src="<?php echo base_url(); ?>static/jquery-1.9.1.min.js"  type='text/javascript'></script>
        <script src="<?php echo base_url(); ?>static/bootstrap-datepicker.js"  type='text/javascript'></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#cdate').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
        </script>
        <?php
            $this->load->view('user/footer');
        ?>
    
    
    </body>
</html>
