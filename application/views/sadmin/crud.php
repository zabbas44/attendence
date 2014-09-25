<div class="cotainer marginlr30">
    <form action="<?php base_url()?>sadmin/add_user">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background: whitesmoke">
    
    <thead class="table-header">
            <tr>
                <td>Serial #</td>
                <td>Name</td>
                <td>Designation</td>
                <td>Joining Date</td>
                <td>Action</td>
            </tr>
    </thead>
    <tbody>
                 <?php 
                 foreach ($results as $key => $result) {
                 ?>

                <tr>
                    <td><?=$result->u_id;?> </td>
                    <td><?=$result->u_name;?></td>
                    <td><?=$result->u_designation;?></td>
                    <td><?=$result->u_joindate;?></td>
                    <td>     
                        <div class="row">
                            <div class="col-lg-12" >
                                <button class="btn btn-success  " onsubmit="">Edit</button>
                                &nbsp;
                                
                                <a href="<?php base_url()?>sadmin" class="btn btn-danger" >Delete</a>
                            </div>
                        </div></td>
                </tr> 
               
            <?php }
            ?>
    </tbody>        

    </table>
    </form>
<div class="row">
    <div class="col-lg-12" >
    <button class="btn btn-success" >Submit Changes</button>
    <a href="<?php echo base_url() ?>sadmin/view_log">
    <button class="btn btn-success float-right" style="margin-left: 10px" >View Log</button>
    </a>
    <a href="<?php echo base_url() ?>sadmin/add_user">
    <button class="btn btn-success float-right"> Add New User</button>
    </a>
    </div>
</div>
</div>
