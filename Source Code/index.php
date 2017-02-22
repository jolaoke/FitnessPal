<?php
    //Start session
    session_start();

    if(!isset($_SESSION['email'])){
        header('Location: login.php');
    }
?>
<?php include('config/setup.php'); ?>
<!DOCTYPE html>
<html <?php if($page['id']==6){ echo 'ng-app="Exercises"'; } ?>>
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
    <?php include('templates/navigation.php');?>
    <br/>
    <h1 class="text-center"><?php echo $page['title']; ?></h1>
    <div class="container">
        
    <?php if($page['id']==1){ 
              include('index_pages/home.php');
        } 
          elseif($page['id']==2){
              include('index_pages/bmi.php');
          }
          elseif($page['id']==3){
              include('index_pages/bmr.php');
          }
          elseif($page['id']==4){
              include('index_pages/calories_needed.php');
          }
          elseif($page['id']==5){
              include('index_pages/calories_burned.php');
          }
          elseif($page['id']==6){
              include('index_pages/exercises.php');
          }
          elseif($page['id']==8){
              include('index_pages/target_heart_rate.php');
          }
        ?>
    </div>
    <?php include('templates/footer.php'); ?>
</body>
</html>