<?php
include ("includes/connection.php");

    if(isset($_POST['sign_up'])){
        
        $first_name = htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
        $last_name = htmlentities(mysqli_real_escape_string($con,$_POST['last_name']));
        $pass = htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
        $number = htmlentities(mysqli_real_escape_string($con,$_POST['u_number']));
        $gender = htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
        $status = "verified";
        $post = "no";
        $newgid = sprintf('%05d', rand(0,999999));
        
        $username = strtolower($first_name . "_" . $last_name . "_" . $newgid);
        $check_username_query = "select user_name from users where user_phone='$number'";
        $run_username = mysqli_query($con,$check_username_query);
        
        if(strlen($pass) <8 ){
            echo"<script>alert('Password should be with 8 characters')</script>";
            exit();
        }
        
        $check_number = "select * from users where user_phone='$number'";
        $run_number = mysqli_query ($con,$check_number);
        $check = mysqli_num_rows($run_number);
        
        if($check == 1){
            echo "<script>alert('Phone Number Already Exist')</script>";
            echo "<script>windows.open('signup.php','_self')</script>";
            exit();
        }
        
        $profile_pic = "usersPP.png";
        
        $insert = "insert into users (first_name,last_name,user_name,describe_user,user_pass,user_phone,user_gender,user_image,user_reg_date,status,post) 
        values('$first_name', '$last_name','$username','This is Your Account !','$pass', '$number','$gender','$profile_pic', NOW(), '$status', '$post')";
        
        $query = mysqli_query($con,$insert);
        
        if ($query){
            echo "<script>alert('Well Done $first_name, you good to go.')</script>";
            echo "<script>windows.open('signin.php','_self')</script>";
        } else {
            echo "<script>alert('Registration Failed,please try again!')</script>";
            echo "<script>windows.open('signup.php','_self')</script>";
        }
        
    }

?>