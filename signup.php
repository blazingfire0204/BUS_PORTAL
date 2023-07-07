<?php
session_start();
include("connection.php");
include("functions.php");

  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    if(!empty($user_name)&&!empty($password)&& !is_numeric($user_name))
    { 
        //save to database
            $user_id=random_num(11);
            $query="insert into users(user_id,user_name,password) values('$user_id','$user_name','$password')";
            mysqli_query($con,$query);
            header("Location:login.php");
            die;
    }
    else{
        header("refresh:0.01;url=Signup.php");
        echo '<script type="text/JavaScript">alert("Please enter some valid information")</script>';
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main2">
    <div id="box">
    <form method="post">
            <div class="set">Sign Up</div>
            <div class="control">
            <label for="user_name">Username</label>
            <input type="text" name="user_name"><br></br>
            </div>
            <div class="control">
            <label for="password">Password</label>
            <input type="password" name="password"><br></br>
            </div>
            <div class="control">
            <input type="submit" value="Signup"><br></br>
            </div>
            <div class="link">
            <a href="login.php">Click to Login</a><br></br>
            </div>
</form>
    </div>
    <div>
</body>
<html>