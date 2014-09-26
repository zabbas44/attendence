<div class="cotainer marginlr30">
    <form method="post" action="<?php base_url() ?>user_atten">
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
                    <select class="form-control" id="uname" name="uname">
                    <option value="Zain Abbas">Zain Abbas</option>
                    <option value="Umair Majeed">Umair Majeed</option>
                    <option value="Danish Hameed">Danish Hameed</option>
                    <option value="Yasir Rehman">Yasir Rehman</option>
                    <option value="Muhammad Waseem">Muhammad Waseem</option>
                    </select>
                    
                </td>
                
                <td >
                    <select class="form-control" id="desig" name="desig">
                    <option value="CEO">CEO</option>
                    <option value="Senior Developer">Senior Developer</option>
                    <option value="Quality Assurance">Quality Assurance</option>
                    <option value="Front End Developer">Front End Developer</option>
                    <option value="Internee">Internee</option>
                    </select>
                </td>
                <td><input type="text" class="form-control" id="cdate" name="cdate" /></td>
                <td><input type="text" class="form-control" id="stime" name="stime" /></td>
                <td><input type="text" class="form-control" id="etime" name="etime" /></td>
                <td><input type="text" class="form-control" id="ttime" name="thours" /></td>
            </tr>  
            <tr>
                <td colspan="6" class="table-header">
                    <input type="submit" class="btn btn-success" value="Submit"/>
                    &nbsp;
                <a href="<?php echo base_url() ?>user/view_prev_atten" class="btn btn-success ">Previous Attendance</a>
                </td>
            </tr>
</tbody>

    </table>
    </form>

</div>
