<?php
$success=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $retype=$_POST['password2'];

    $sql=" select * from `reg_info` where username= '$username'";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            //echo " user already exists";
            $user=1;
        }else{
            $sql=" insert into `reg_info`(username,email,password,password2) values('$username','$email','$password','$retype')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        //echo " signup successful";
        $success=1;
    }else{
        die(mysqli_eror($con));
    }

        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="stylereg.css">
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IWP project</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="C:\xampp\htdocs\travel\style.css">
    <style>
        <?php include "style.css" ?>
        </style>    
</head>
    <body>
        <?php 
        if($user)
        {
            echo '<div class="alert alert-danger alert-dimissible fade show" role="alert">
            <strong>ohh snap!</strong> user already exists<button type="button" class="close">
            <spanaria-hidden="true">&times;</span>
            </button>
            </div> ';
        }
        ?>
        <?php 
        if($success)
        {
            echo '<div class="alert alert-success alert-dimissible fade show" role="alert">
            <strong>success </strong>you are successfully signed up<button type="button" class="close">
            <spanaria-hidden="true">&times;</span>
            </button>
            </div> ';
        }
        ?>
        <header>
            <div id="menu-bar" class="fas fa-bars"></div>
            <a href="#" class="logo"><span>T</span>ravel<span> P</span>lanner</a>
            <nav class="navbar">
                <a href="index.php">home</a>
                <a href="index.php">book</a>
                <a href="index.php">packages</a>
                <a href="index.php">services</a>
                <a href="index.php">gallery</a>
                <a href="index.php">review</a>
                <a href="index.php">contact</a>
            </nav>
            <div class="icons">
                <i class="fas fa-search" id="search-btn"></i>
                <i class="fas fa-user" id="login-btn"></i>
            </div>
            <form action="registration.php" method="post" class="search-bar-container">
                <input type="search" id="search-bar" placeholder="search here...">
                <label for="search-bar" class="fas fa-search"></label>
    </form>
            
        </header>
        <div id="login-box">
            <div class="left">
                <h1 style="font-family: 'Nunito', sans-serif; font-size: 38px; text-align: center;">Sign up</h1>
      
      <input type="text" name="username" placeholder="Username" />
      <input type="text" name="email" placeholder="E-mail" />
      <input type="password" name="password" placeholder="Password" />
      <input type="password" name="password2" placeholder="Retype password" />
      
      <input type="submit" name="signup_submit" value="Sign me up" />
    </div>

    
    <div class="right">
      <span class="loginwith"><br><br></span>
      <button class="social-signin facebook">Log in with facebook</button>
      <button class="social-signin twitter">Log in with Twitter</button>
      <button class="social-signin google">Log in with Google+</button>
    </div>
    <div class="or">OR</div>
  </div>
</body>
  </html>