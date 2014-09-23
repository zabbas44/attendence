<script>
function validateForm() {
    var x = document.forms["login_form"]["uname"].value;
    if (x === null || x === "") {
        alert("Name must be filled out");
        return false;
    }

</script>


<div class="container ">
    <div class="row">
       
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
<div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>User Login</b></h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post" accept-charset="utf-8" class="form-horizontal" id="login_form" name="login_form">
                        <div class="admin_login_form">
                            <br>
                            <label>User Name</label>
                                <input type="text" size="20" id="uname" name="uname" placeholder="User Name" value="" class="form-control">
                            <br>
                            <label>Password</label>
                                <input type="password" size="20" id="password" name="password" placeholder="Password" class="form-control">
                            <br>

                                                                <br>
                                                                    <div class="forgot_pass">
                                                                        <span>
                                                                            <input class="btn btn-success" type="submit" value="Login" onsubmit="validateForm()">
                                                                        </span> <a class="btn btn-danger" href="">Forgot Password?</a>
                                    </div>
                                                            </div>
                    </form>
                    </div>
                </div>
        </div>
    
    <div class="col-lg-3"></div>
    </div>
    </div>