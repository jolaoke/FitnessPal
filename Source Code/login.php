<?php
//Database connection:
    include('config/db_connection.php');

    //Start session:
    session_start();

    if($_POST){
        $query="SELECT * FROM users WHERE email = '$_POST[email]' AND password = '$_POST[password]'";
        $result=mysqli_query($conn, $query);
        if(mysqli_num_rows($result)==1){
            $_SESSION['email']=$_POST['email'];
            header('Location: index.php');
        }
        else{
            echo "<script>alert('The email or password you entered are incorrect! Try again.');</script>";
        }
    }
?>
<?php include('config/setup.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image" href="images/icon.ico" />
    <title>Login | <?php echo $site_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include('config/css.php'); ?><!-- CSS Files-->
    <?php include('config/js.php'); ?><!-- JavaScript Files-->
</head>
<body>
    <div class="container">
        <div id="logo"><a href="?page=1"><h1 class="text-center"><em>Fitness<span id="my">Pal</span></em></h1></a></div>
        <hr/>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-info">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h2 class="text-center">Log In</h2>
                            </a>
                        </h4>
                    </div><!-- END panel-heading -->
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <form action="login.php" method="post">
                                        <div class="form-group">
                                            <!-- START Username-->
                                            <label for="email">Username</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Username" />
                                        </div><!-- END Username -->
                                        <div class="form-group">
                                            <!-- START Password -->
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                        </div><!-- END Password -->
                                        <!-- <div class="checkbox">
                                           <label>
                                            <input type="checkbox"> Keep me logged in
                                          </label>
                                        </div> -->
                                        <button type="submit" class="btn btn-primary">Log In</button>
                                    </form><!-- END Login Form -->
                                </div><!-- END column -->
                            </div><!-- END row -->
                        </div><!-- END panel-body -->
                    </div><!-- END panel-collapse -->
                </div><!-- END panel -->
                <div class="panel panel-info">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h2 class="text-center">Create New Account</h2>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <form action="signup.php" method="post">
                                        <div class="form-group">
                                            <!-- START First Name -->
                                            <label for="firstname">First Name</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required />
                                        </div><!-- END First Name -->
                                        <div class="form-group">
                                            <!-- START Last Name -->
                                            <label for="lastname">Last Name</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required />
                                        </div><!-- END Last Name-->
                                        <div class="form-group">
                                            <!-- START Gender-->
                                            <label for="gender">Gender</label>
                                            <select name="gender" class="form-control" required>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                          </div><!-- END Gender -->
                                        <div class="form-group">
                                            <!-- START Username -->
                                            <label for="email">Username</label><i tabindex="0" data-toggle="popover" data-trigger="focus" title="Note" data-content="This cannot be changed later. It is just the name you will use to login; it will not be displayed." class="fa fa-exclamation-circle" style="position:relative;margin-left:2px;"></i>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Username" required />
                                        </div><!-- END Username -->
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                                        </div>
                                        <div class="form-group">
                                            <!-- START Age -->
                                            <label for="age">Age</label>
                                            <div class="form-inline">
                                            <div class="input-group col-md-8">
                                            <input type="number" class="form-control" id="day" name="day" placeholder="Day" required />
                                            <div class="input-group-addon">dd</div></div>
                                            <div class="input-group col-md-8">
                                            <input type="number" class="form-control" id="month" name="month" placeholder="Month" required />
                                            <div class="input-group-addon">mm</div></div>
                                            <div class="input-group col-md-8">
                                            <input type="number" class="form-control" id="year" name="year" placeholder="Year" required />
                                            <div class="input-group-addon">yyyy</div></div>
                                            </div>
                                        </div><!-- END Age -->
                                        <div class="form-group">
                                            <!-- START Height -->
                                            <label for="height">Height (cm)</label>
                                            <input type="number" step="any" class="form-control" id="height" name="height" placeholder="Height" required />
                                            <a data-toggle="modal" data-target="#heightConversion">Convert from feet & inches to cm</a>
                                            <div class="modal fade" id="heightConversion" tabindex="-1" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h5 class="modal-title">Convert Your Height Between Feet & Inches and Centimeter</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img style="height:800px;width:100%" src="http://cdn.photonesta.com/images/img.docstoccdn.com/thumb/orig/121507928.png" />
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div><!-- END Height -->
                                        <div class="form-group">
                                            <!-- START Weight -->
                                            <label for="weight">Weight (kg)</label>
                                            <input type="number" class="form-control" id="weight" name="weight" placeholder="Weight" required />
                                        </div><!-- END Weight -->
                                        <div class="form_group">
                                            <!-- START Level of Activity -->
                                            <label for="activity">Level of Activity</label>
                                            <select class="form-control" name="activity" required>
                                                <option value="little">Sedentary - little/no exercise</option>
                                                <option value="light">Lightly active - exercise 1-2 days/week</option>
                                                <option value="moderate">Moderately active - exercise 3-5 days/week</option>
                                                <option value="very">Very active - exercise 6-7 days/week</option>
                                                <option value="extra">Extra active - very hard exercise daily and physical job</option>
                                            </select>
                                        </div><!-- END Level of Activity -->
                                        <br />
                                        <button type="submit" class="btn btn-primary">Create New Account</button>
                                    </form><!-- END Create Account Form-->
                                </div><!-- END column -->
                            </div><!-- END row -->
                        </div><!-- END Panel-body -->
                    </div><!-- END Panel-collapse -->
                </div><!-- END Panel -->
            </div><!-- END panel-group -->
        </div><!-- End ROW -->
        </div>
    <?php include('templates/footer.php'); ?>
</body>
</html>