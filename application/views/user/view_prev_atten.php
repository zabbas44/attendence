<div class="cotainer marginlr30">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background: whitesmoke">
    <thead class="table-header">
            <tr>
                <th>Days</th>
                <th>Name</th>
                <th>Designation</th>
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
                <td><? echo $result->u_cdate;?></td>
                <td><? echo $result->u_stime;?></td>
                <td><? echo $result->u_etime;?></td>
                <td><? echo $result->u_thours;?></td>
      </tr> 
        <?php }
            ?>   
        </tbody>
    </table>
<div class="row">
    <div class="col-lg-12" >
    <a href="<?php echo base_url(); ?>user/user_atten">
    <button class="btn btn-primary">Back</button>
    </a>
    </div>
</div>
</div>
