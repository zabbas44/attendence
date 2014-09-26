<div class="cotainer marginlr30">
    <form action="<?php echo base_url() ?>sadmin/add_user" method="post">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background: whitesmoke" >
        <thead class=" table-header">
            <tr>
                <th>Name</th>
                <th>Designation</th>
                <th>Joining Date</th>

                                
            </tr>
        </thead>
<tbody>

            <tr>
                <td><input type="text" class="form-control" id="name" name="name" placeholder="Type name of user"/></td>
                <td><input type="text" class="form-control" id="desig" name="desig" placeholder="Type designation of user"/></td>
                <td><input type="text" class="form-control" id="jdate" name="jdate" placeholder="Type joining date of user"/></td>
                
            </tr>  
            
            <tr>
                
                <td colspan="3" class="table-footer">
                        
                    <input type="submit" value="Submit Changes" class="btn btn-success" />
                    &nbsp;
                    <a href="<?php echo base_url(); ?>sadmin/crud"> 
                    <span class="btn btn-primary">Back To Admin</span>
                    </a>
                </td>
                
            </tr>
            
</tbody>
 
    </table>
    </form>
    </div>
