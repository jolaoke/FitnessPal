<?php
    //Start session:
    session_start();
    unset($_SESSION['email']); //Delete the key that allows us to be logged in
    //session_kill(); //Delete every created key
    header('Location: login.php'); //Redirects us back to the Log In page
?>