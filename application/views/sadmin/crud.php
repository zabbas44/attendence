<div class="cotainer marginlr30">
    <form action="sadmin/crud" method="post">
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
                    <td><?php echo $result->u_id;?> </td>
                    <td><?php echo $result->u_name;?></td>
                    <td><?php echo $result->u_designation;?></td>
                    <td><?php echo $result->u_joindate;?></td>
                    <td>     
                        <div class="row">
                            <div class="col-lg-12" >
                                <a href="<?php echo base_url();?>sadmin/edit_record/<?php echo $result->u_id;  ?>" class="font-20 glyphicon glyphicon-pencil" title="Edit" ></a>
                                &nbsp;
                                <a href="<?php echo base_url() ?>sadmin/delete_record/<?php echo $result->u_id; ?>" class="font-red font-20 glyphicon glyphicon-trash" title="Delete"></a>
                            </div>
                        </div>
                    </td>
                </tr> 
               
            <?php }
            ?>
                <tr >
                    <td colspan="5" style="background-color: #68838b">
                        <a href="<?php echo base_url() ?>sadmin/add_user" class="btn btn-success float-left">Add New User</a>
                        &nbsp;
                        <a href="<?php echo base_url() ?>sadmin/view_log" class="btn btn-success float-left"  >View Log</a>
                        
                        
    
                    </td> 
                </tr>
    </tbody>        

    </table>
</form>
<div class="row">
    <div class="col-lg-12" >
    
    </div>
</div>
</div>
