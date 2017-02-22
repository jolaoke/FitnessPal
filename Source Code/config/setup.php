<?php
    $site_name="FitnessPal";

    //Database connection:
    include('config/db_connection.php');

    //Functions:
    include('functions/data.php');

    if(isset($_GET['page'])){
	    $pageid=$_GET['page']; // This sets the $pageid equal to the value given in the URL
    } else{
	    $pageid=1; // This sets the $pageid to 1, which is the Home page if there is no value given in the URl
    }

    // Page setup
    $page=data_page($conn, $pageid);

    if(isset($_SESSION['email'])){
        $user=data_user($conn, $_SESSION['email']);
    }
?>