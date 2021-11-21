<?php

$host       = "remotemysql.com";
$user       = "SpqfQoCNvE";
$password   = "n5Sm4722In";
$db         = "SpqfQoCNvE";

$data = mysqli_connect ($host, $user, $password, $db);

if($data==false)
{
    die("connection error");
}


if (isset($_POST['submit'])) {

      $username = $_POST["username"];
      $password = $_POST["password"];
    

      if($username == "admin")
      if($password == "1234")
        {
          echo("<script>alert('Login Successful!')</script>");
          echo("<script>window.location = 'dashboard.php';</script>");
        }
  
      else
      {
        echo '<script>alert("Incorrect username or password!")</script>';
      }
}
?>







<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
  <style>
    a { text-decoration: none; }
  </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>

  <body a link="#009688" vlink="#009688">
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Admin Login</span></div>
        <form action="#" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username">
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
          <!-- <div class="pass"><a href="#">Forgot password?</a></div> -->
          <div class="row button" button id="btnOne">
            <input type="submit" name="submit" value="Login">
          </div>    
          <div id = "containerx">
            <a href="../index.php">Home</button></a>
          </div>
        </form>
      </div>
    </div>

  </body>
</html>


<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');


  button{
  font-size: 15px;
  padding:7px;
  border-radius: 4px;
  margin:5px;
  color: #009688 ;
  position: relative;
  background: #fbfaff;
  width: 10rem;
  border: none;
  outline: none;
  box-shadow:
  0 0.7px 4px rgba(0, 0, 0, 0.045),
  0 1.9px 11.1px rgba(0, 0, 0, 0.065),
  0 4.5px 26.8px rgba(0, 0, 0, 0.085),
  0 15px 89px rgba(0, 0, 0, 0.13);
}

#containerx{
  display: flex;
  align-items: center;
  justify-content: center;
  border: none;
  outline: none;
}















*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  background: linear-gradient(rgba(0,0,0,0.5),#009688),url(images/banner.jpg);
    background-size: cover;
    background-position: center;
    height: 80vh;
}
::selection{
  background: rgba(26,188,156,0.3);
}
.container{
  max-width: 440px;
  padding: 0 20px;
  margin: 170px auto;
}
.wrapper{
  width: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
}
.wrapper .title{
  height: 90px;
  background: #16a085;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form{
  padding: 30px 25px 25px 25px;
}
.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}
.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
}
form .row input:focus{
  border-color: #16a085;
  box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
form .row input::placeholder{
  color: #999;
}
.wrapper form .row i{
  position: absolute;
  width: 47px;
  height: 100%;
  color: #fff;
  font-size: 18px;
  background: #16a085;
  border: 1px solid #16a085;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass{
  margin: -8px 0 20px 0;
}
.wrapper form .pass a{
  color: #16a085;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover{
  text-decoration: underline;
}
.wrapper form .button input{
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: #16a085;
  border: 1px solid #16a085;
  cursor: pointer;
}
form .button input:hover{
  background: #12876f;
}
.wrapper form .signup-link{
  text-align: center;
  margin-top: 20px;
  font-size: 17px;
}
.wrapper form .signup-link a{
  color: #16a085;
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}

