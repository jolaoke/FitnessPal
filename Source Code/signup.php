<?php
    //Database connection:
    include('config/db_connection.php');
    //Declare variables

    function get_age($dob_day,$dob_month,$dob_year){
    $year   = gmdate('Y');
    $month  = gmdate('m');
    $day    = gmdate('d');
     //seconds in a day = 86400
    $days_in_between = (mktime(0,0,0,$month,$day,$year) - mktime(0,0,0,$dob_month,$dob_day,$dob_year))/86400;
    $age_float = $days_in_between / 365.242199; // Account for leap year
    $age = (int)($age_float); // Remove decimal places without rounding up once number is + .5
    return $age;
}

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $dd=$_POST['day'];
    $mm=$_POST['month'];
    $yyyy=$_POST['year'];
    $age=get_age($_POST['day'],$_POST['month'],$_POST['year']);
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $activity=$_POST['activity'];
    if($firstname&&$lastname&&$email&&$age&&$height&&$weight&&$gender&&$password&&$activity){
        $search_query="SELECT * FROM users WHERE email='$email'";
        $search_result=mysqli_query($conn,$search_query);
        if(mysqli_num_rows($search_result)>0){
            echo "<script>alert('This username already exists! Please enter another one.');
                  history.back();</script>";
        } else {
            $query="INSERT INTO users VALUES('','$email','$password','$firstname','$lastname','$gender','$age','$height','$weight','$activity','$dd','$mm','$yyyy')";
            $result=mysqli_query($conn,$query);
            session_start();
            $_SESSION['email']=$email;
            header('Location: index.php');
            }
    } else{
        header('Location: login.php');
    }
    include('config/setup.php');
?>