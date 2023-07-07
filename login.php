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
        //read from database
            $query="select * from users where user_name = '$user_name' limit 1";
            $result=mysqli_query($con,$query);
            if($result && mysqli_num_rows($result)>0){
                $user_data=mysqli_fetch_assoc($result);
                if($user_data['password']==$password){
                    $_SESSION['user_id']=$user_data['user_id'];
                    header("Location:index.php");
                    die;
                }

            }
            header("refresh:0.01;url=login.php");
            echo '<script type="text/JavaScript">alert("wrong username or password")</script>';
      }
    else{
        header("refresh:0.01;url=login.php");
        echo '<script type="text/JavaScript">alert("Please enter some valid information")</script>';
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main1">
    <div id="box">
        <form method="post">
            <div class="set">Login</div>
            <div class="control">
            <label for="user_name">Username</label>
            <input type="text" name="user_name"><br></br>
            </div>
            <div class="control">
            <label for="password">Password</label>
            <input type="password" name="password"><br></br>
            </div>
            <div class="control">
            <input type="submit" value="Login"><br></br>
            </div>
            <div class="link">
            <a href="signup.php">Click to Signup</a><br></br>
            </div>
</form>
    </div>
    </div>
</body>
<html>