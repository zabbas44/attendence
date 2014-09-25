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
                <td><?=$result->u_id;?></td>
                <td><?=$result->u_name;?></td>
                <td><?=$result->u_designation;?></td>
                <td><?=$result->u_joindate;?></td>
                <td><?=$result->u_cdate;?></td>
                <td><?=$result->u_stime;?></td>
                <td><?=$result->u_etime;?></td>
                <td><?=$result->u_thours;?></td>

            </tr>  
         <?php }
            ?>
        </tbody>
     </table>
<div class="row">
    <div class="col-lg-12" >
    <a href="<?php echo base_url(); ?>sadmin/crud">
    <button class="btn btn-primary">Back To Admin</button>
    </a>
    </div>
</div>
</div>
