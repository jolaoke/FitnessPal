<?php 
    //Start session
    session_start();

    include('config/setup.php');

    if(!isset($_SESSION['email'])){
        header('Location: login.php');
    }
    $page['title']='Edit Account: '.$user['fullname'];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image" href="images/icon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include('config/css.php'); ?><!-- CSS Files-->
    <?php include('config/js.php'); ?><!-- JavaScript Files-->
    <title><?php echo $page['title'].' | '.$site_name; ?></title>
</head>
<body>
<div class="container">
    <div id="logo"><a href="?page=1"><h1 class="text-center"><em>Fitness<span id="my">Pal</span></em></h1></a></div>
</div>
<?php include('profile_navigation.php');?>
<br/>
<h1 class="text-center"><?php echo "Edit Account"; ?></h1>
<div class="container">
    <div class="col-md-6">
    <form action="editProfile.php" method="post">
        <div class="form-group">
            <!-- START First Name -->
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" autocomplete="false" value="<?php echo $user['firstname']; ?>" />
        </div><!-- END First Name -->
        <div class="form-group">
            <!-- START Last Name -->
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $user['lastname']; ?>" />
        </div><!-- END Last Name-->
        <div class="form-group">
            <!-- START Gender-->
            <label for="gender">Gender</label>
            <select name="gender" class="form-control">
                <option value="Male" <?php if($user['gender']=='Male'){ echo 'selected'; } ?>>Male</option>
                <option value="Female" <?php if($user['gender']=='Female'){ echo 'selected'; } ?>>Female</option>
            </select>
            </div><!-- END Gender -->
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $user['password']; ?>" />
        </div>
       <div class="form-group">
            <!-- START Age -->
            <label for="age">Age</label>
            <div class="form-inline">
            <div class="input-group col-md-8">
            <input type="number" class="form-control" id="day" name="day" placeholder="Day" value="<?php echo $user['dd']; ?>" />
            <div class="input-group-addon">dd</div></div>
            <div class="input-group col-md-8">
            <input type="number" class="form-control" id="month" name="month" placeholder="Month" value="<?php echo $user['mm']; ?>" />
            <div class="input-group-addon">mm</div></div>
            <div class="input-group col-md-8">
            <input type="number" class="form-control" id="year" name="year" placeholder="Year" value="<?php echo $user['yyyy']; ?>" />
            <div class="input-group-addon">yyyy</div></div>
            </div>
        </div><!-- END Age -->
        <div class="form-group">
            <!-- START Height -->
            <label for="height">Height (cm)</label>
            <input type="number" step="any" class="form-control" id="height" name="height" placeholder="Height" value="<?php echo $user['height']; ?>" />
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
            <input type="number" class="form-control" id="weight" name="weight" placeholder="Weight" value="<?php echo $user['weight']; ?>" />
        </div><!-- END Weight -->
        <div class="form_group">
            <!-- START Level of Activity -->
            <label for="activity">Level of Activity</label>
            <select class="form-control" name="activity">
                <option value="little" <?php if($user['activity']=='little'){ echo 'selected'; } ?>>Sedentary - little/no exercise</option>
                <option value="light" <?php if($user['activity']=='light'){ echo 'selected'; } ?>>Lightly active - exercise 1-2 days/week</option>
                <option value="moderate" <?php if($user['activity']=='moderate'){ echo 'selected'; } ?>>Moderately active - exercise 3-5 days/week</option>
                <option value="very" <?php if($user['activity']=='very'){ echo 'selected'; } ?>>Very active - exercise 6-7 days/week</option>
                <option value="extra" <?php if($user['activity']=='extra'){ echo 'selected'; } ?>>Extra active - very hard exercise daily and physical job</option>
            </select>
        </div><!-- END Level of Activity -->
        <br />
        <div style="margin-bottom:15px;margin-left:3px;" class="row">
            <button type="submit" class="btn btn-primary">Confirm Changes</button>
            <a role="button" class="btn btn-default" href="profile.php">Cancel</a>
        </div>
    </form><!-- END Edit Account Form-->
</div>
</div>
<?php include('templates/footer.php'); ?>
</body>
</html>