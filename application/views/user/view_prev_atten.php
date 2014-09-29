<div class="cotainer marginlr30">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background: whitesmoke">
    <thead class="table-header">
            <tr>
                <th>Days</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Start Date and Time</th>
                <th>End Date and Time</th>
                <th>Total Hours</th>
                
                                
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($results as $key => $result) 
            {
            ?>
            <tr>
                <td><? echo $result->u_id;?></td>
                <td><? echo $result->u_name;?></td>
                <td><? echo $result->u_designation;?></td>
                <td><? echo $result->u_sdtime;?></td>
                <td><? echo $result->u_edtime;?></td>
                <td><? echo $result->u_thours;?></td>
            </tr> 
            <?php 
            }
            ?>   
      <tr>
          <td colspan="7" style="background-color: #68838b">
              <a href="<?php echo base_url(); ?>user/user_atten" class="btn btn-primary">Back</a>
          </td>
      </tr>
        </tbody>
    </table>

</div>
