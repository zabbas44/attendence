<div class="col-lg-12 nopadding headerblue">

    <div class="col-lg-2 col-sm-2 col-xs-3 col-md-2">
        <a href="<?php echo site_url('home'); ?>">
            <img src="<?php echo base_url(); ?>/static/images/logomd.png" class="logo-adjuster" alt="logo-header" />
        </a>
    </div>

    <div class="col-lg-2 col-sm-2 col-xs-3 col-md-2 float-right">

        <input type="hidden" value="<?php echo base_url(); ?>" id="base_url" />
        

            <div id="mydropdown">
                <div class="header-maker">
                    <div id="btnGroupDrop1" type="button" class="dropdown-toggle welcome_text_ho p-main" data-toggle="dropdown">

                        <div class="p_left">
                            <div class="p_title"><?php echo isset($username) ? $username : ''; ?></div>
                            <div class="p_status">Available</div>
                        </div>

                        <div class="p_right">
                            <?php echo $image_company; ?>
                        </div>

                    </div>

                <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupDrop1">
                    <li><a id="profile_uploader" href="javascript: void(0);" class="white-fix-hard bg-same">Change Photo</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0);" onclick="make_available();"> <span class="adjuster-heading" style="color: #019f96"> Available </span>   <div class="user-online dimesions-set"></div>  </a> </li>
                    <li><a href="#inline1" id="custom_status"><span class="adjuster-heading"> Custom </span> <span class="user-online dimesions-set"></span> </a> </li>
                    <li><a href="javascript:void(0);" onclick="update_status_offline('Busy');"><span class="adjuster-heading">Busy </span> <span class="user-unavailable dimesions-set"></span> </a></li>
                    <li><a href="javascript:void(0);" onclick="update_status_offline('Away');"><span class="adjuster-heading">Away </span> <span class="user-unavailable dimesions-set"></span> </a></li>
                    <?php if($mob_reg = 1) { ?>
                        <li><a href="javascript:void(0);" onclick="update_status_onmobile('On Mobile');"><span class="adjuster-heading"> On Mobile </span> <span class="glyphicon glyphicon-phone"></span> </a></li>
                    <?php } ?>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>home/groups"> Groups</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>home/logout_user">Sign out</a>
                    </li>
                </ul>

                </div>
         </div>

        </div>
    </div>
    </div>

<div style="display: none;">
    <div id="inline1">
        <h3>Update Status Message</h3>
        <div id="error_msg" class="error"></div>
        Message: <input type="text" maxlength="30" name="txt_status" id="txt_status" />
        <br />
        <button id="btn_status" class="btn btn-primary" onclick="update_status_online();">Save Status</button>
        &nbsp;&nbsp;&nbsp;
        <button id="btn_status" class="btn btn-inverse" onclick="cancel_status_update();">Cancel</button>
    </div>
</div>

<a href="#populator_view" id="common_helper_use" style="display:none"></a>
<div style="display: none;">
    <div id="populator_view"></div>
</div>


<script type="text/javascript">
function make_available(){
    var base_url = '<?php echo base_url(); ?>';
    
    $.ajax({
        url: base_url + "home/update_custom_status_message",
        type: "POST",
        data: 'msg_text=' + '' + '&st_flag=1',
        context: document.body,
        cache: false,
        success: function(data) {
            $('#custom_status_self').html('<i class="green-disc"></i>Available');
        }
    });
}


function profileload(){
    var base_url = '<?php echo base_url(); ?>';

    $.ajax({
        url: base_url + "home/viewprofile",
        type: "POST",
        context: document.body,
        cache: false,
        success: function(data) {

            $('#populator_view').html(data);
            $("#common_helper_use").fancybox(
                {
                 'autoScale': true,
                 'autoDimensions': true,
                 'height': 'auto'

            }).trigger('click');

        },
        error: function(){

        }
    });

}

function update_status_online(){
    var base_url = '<?php echo base_url(); ?>';
    var msg_text = $('#txt_status').val();
    
    $('#error_msg').html('<img src="'+base_url+'static/images/loading.gif" alt="Working..." />');
    $.ajax({
        url: base_url + "home/update_custom_status_message",
        type: "POST",
        data: 'msg_text=' + msg_text + '&st_flag=1',
        context: document.body,
        cache: false,
        success: function(data) {
            if(data.match(/success/)){
                $('#custom_status_self').html('<i class="green-disc"></i>'+msg_text);
                $.fancybox.close(true);
                $('#txt_status').val('');
                $('#error_msg').html('');
            } else {
                $('#error_msg').html(data);
                $('#txt_status').val(msg_text);
            }
        },
        error: function(){
            $('#error_msg').html('Some error occured');
        }
    });
}

function update_status_offline(msg){
    var base_url = '<?php echo base_url(); ?>';
    $.ajax({
        url: base_url + "home/update_custom_status_message",
        type: "POST",
        data: 'msg_text=' + msg + '&st_flag=2',
        context: document.body,
        cache: false,
        success: function(data) {
            $('#custom_status_self').html('<i class="red-disc"></i>'+msg);
        }
    });
}

function update_status_onmobile(msg){
    var base_url = '<?php echo base_url(); ?>';
    $.ajax({
        url: base_url + "home/update_custom_status_message",
        type: "POST",
        data: 'msg_text=' + msg + '&st_flag=3',
        context: document.body,
        cache: false,
        success: function(data) {
            $('#custom_status_self').html('<i class="purple-disc"></i>'+msg);
        }
    });
}

//close fancy box on cancel button
function cancel_status_update(){
    $('#txt_status').val('');
    $.fancybox.close(true);
}
</script>

