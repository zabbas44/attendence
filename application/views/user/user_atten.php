<div class="cotainer marginlr30">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background: whitesmoke">
    <thead class="table-header">
            <tr>
                
                <th>Name</th>
                <th>Designation</th>
                <th>Current Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Total Hours</th>
                
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <select class="form-control">
                    <option value="zain">zain abbas</option>
                    <option value="umair">umair majeed</option>
                    <option value="danish">danish hameed</option>
                    <option value="yasir">yasir rehman</option>
                    <option value="waseem">muhammad waseem</option>
                    </select>
                    
                </td>
                
                <td><select class="form-control ">
                    <option value="ceo">ceo</option>
                    <option value="developer">senior developer</option>
                    <option value="tester">tester</option>
                    <option value="internee1">internee</option>
                    <option value="internee1">internee</option>
                    </select>
                </td>
                <td><input type="text" class="form-control" id="cdate" name="cdate" /></td>
                <td><input type="text" class="form-control" id="stime" name="stime" /></td>
                <td><input type="text" class="form-control" id="etime" name="etime" /></td>
                <td><input type="text" class="form-control" id="ttime" name="ttime" /></td>
                
                
            </tr>  
</tbody>

    </table>
<div class="row">
    <div class="col-lg-12" >
    <button class="btn btn-success" >Submit</button>
    &nbsp;
    <a href="<?php echo base_url() ?>user/view_prev_atten">
    <button class="btn btn-success " >Previous Attendance</button>
    </a>
    </div>
</div>
</div>
