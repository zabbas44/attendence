<div class="cotainer marginlr30">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background: whitesmoke">
        <thead>
            <tr>
                <th>Serial #</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Joining Date</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>danish</td>
                <td>senior developer</td>
                <td>13-13-13</td>
                <td>     
        <div class="row">
    <div class="col-lg-12" >
    <button class="btn btn-success  " onsubmit="">Edit</button>
    &nbsp;
    <button class="btn btn-danger" onsubmit="" >Delete</button>
    </div>
</div></td>
      </tr>  
</tbody>
 
<!--        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>-->
    </table>
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
