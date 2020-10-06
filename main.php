<!DOCTYPE html>
<html>
<head>
    <title>Shouter Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<style>
    body{
        overflow-x:hidden;
    }
    
    #signup{
        width: 60%;
        border-radius:30px;
        background-color:#D6893A;
        border:1px solid #D6893A;
    }
    
    #signup:hover{
        width: 60%;
        border-radius:30px;
        background-color:#AB6D2E;
        border:1px solid #D6893A;
    }
    
    #login{
        width: 60%;
        border-radius:30px;
        background-color: #fff;
        color: #D6893A;
        border:1px solid #D6893A;
    }
    #login:hover{
        width: 60%;
        border-radius:30px;
        background-color: #fff;
        color:#D6893A;
        border:2px solid #D6893A;
    }
    .well{
        background-color: #D6893A;
        
    }
    </style>    
<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <center><h1 style="color:white;">Shouter</h1></center>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <center><h2>The Place that you can <strong>SHOUT</strong> to the world</h2></center>
           <center> <form method="post" action="">
               <button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
                <?php
                    if(isset($_POST['signup'])){
                        echo "<script>window.open('signup.php','_self')</script>";
                    }
    
                ?>
                <button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
                <?php
                    if(isset($_POST['login'])){
                        echo "<script>window.open('login.php','_self')</script>";
                    }
    
                ?>
            </form></center>
        </div>
    </div>
</body>    
</html>