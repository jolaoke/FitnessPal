<?php 
    //Start session
    session_start();

    include('config/setup.php');

    if(!isset($_SESSION['email'])){
        header('Location: login.php');
    }
    $page['title']=$user['fullname'];
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
<h1 class="text-center"><?php echo "Profile"; ?></h1>
<div class="container">
        <div class="pull-right btn-group-vertical" role="group">
        <p class="lead">Actions:</p>
        <button class="btn btn-primary" onclick="var pass = '<?php echo $user['password']; ?>'; var promp = prompt('Enter your password'); if(promp==pass){ location.href='edit_profile.php';} else if(promp!=null && promp!=pass){ alert('The password you entered was incorrect.'); } else if(promp=-false){ }">Edit Account</button>
        <br />
        <button type="button" onClick="var con = confirm('Are you sure you want to delete your account? This cannot be undone.');
    if(con==true){
        var pass = '<?php echo $user['password']; ?>';
        var prom = prompt('Enter your password:');
        if(prom==pass){
            alert('Your account has been deleted and all your records have been erased!');
            location.href='delete.php';
        } else if(prom!=null && prom!=pass) {
                alert('The password you entered is incorrect!');
                
            } else if(prom==false){
                  
              }
    } else{
            
        }" 
        class="btn btn-danger">Delete Account</button>
    </div>
    <p class="lead">First Name: <?php echo $user['firstname']; ?></p>
    <p class="lead">Last Name: <?php echo $user['lastname']; ?></p>
    <p class="lead">Username: <?php echo $user['email']; ?>
    <p class="lead">Gender: <?php echo $user['gender']; ?></p>
    <p class="lead">Age: <?php echo $user['age']; ?></p>
    <p class="lead">Height: <?php echo $user['height'].' cm'; ?></p>
    <p class="lead">Weight: <?php echo $user['weight'].' kg'; ?></p>
    <p class="lead">Level of Activity: <?php echo $user['activity']; ?></p>
</div>
<?php include('templates/footer.php'); ?>
</body>
</html>