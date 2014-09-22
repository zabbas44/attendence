<div class="col-lg-12 nopadding headerblue">

    <div class="col-lg-2 col-sm-2 col-xs-4 col-md-2">
        <a href="<?php echo site_url('sadmin'); ?>">
            <img src="/static/images/logomd.png" class="logo-adjuster" alt="logo-header" />
        </a>
    </div>

    <div class="col-lg-10 col-sm-2 col-xs-5 col-md-2 float-right">

        <input type="hidden" value="<?php echo base_url(); ?>" id="base_url" />


        <div id="welcome_text_ho" class="welcome_text_ho">
            <?php echo isset($username) ? $username : ''; ?>
            |
            <a class="signout-new" href="<?php echo base_url(); ?>sadmin/logout" title="Log Out">Sign out</a>
        </div>
    </div>
    
</div>
<div class="col-lg-12 nopadding " style="background-color: #869FA6; height:2px"> </div>

