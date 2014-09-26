<div class="cotainer marginlr30">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background: whitesmoke">
    <thead  class="table-header">
            <tr>
                <th>Serial #</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Joining Date</th>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Total Hours</th>
                
                                
            </tr>
        </thead>
        <tbody>
            <?php 
             foreach ($results as $key => $result) {
            ?>
            <tr>
                <td><? echo $result->u_id;?></td>
                <td><? echo $result->u_name;?></td>
                <td><? echo $result->u_designation;?></td>
                <td><? echo $result->u_joindate;?></td>
                <td><? echo $result->u_cdate;?></td>
                <td><? echo $result->u_stime;?></td>
                <td><? echo $result->u_etime;?></td>
                <td><? echo $result->u_thours;?></td>

            </tr>  
         <?php }
            ?>
            <tr>
                <td colspan="8" style="background-color: #68838b">
                    <a href="<?php echo base_url(); ?>sadmin/crud" class="btn btn-primary">Back To Admin</a>
                </td>
            </tr>
        </tbody>
     </table>
</div>
