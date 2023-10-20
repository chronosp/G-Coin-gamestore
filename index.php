<?php
session_start();
error_reporting(1);
include("connection.php");
if(isset($_POST['log']))
{ 
    if($_POST['id']=="" || $_POST['pwd']==""){
        $err="fill your id and password first";
    }
    else {
    $d=mysql_query("select * from register where email='{$_POST['id']}' ");
    $row=mysql_fetch_object($d);
    $fid=$row->email;
    $fpass=$row->pw; 
    if($fid==$_POST['id'] && $fpass==$_POST['pwd']){
    $_SESSION['sid']=$_POST['id'];
    header("location:home.php"); 
    }
    else {
        $err=" your password is wrong"; 
    }}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
        @font-face {
            font-family: Klotee;
            src: url('../fonts/Klotee.ttf');
        }
        body{
            height: 100%;
            background-image: url("img/4263932.jpg");
            min-height: 620px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        h2{
            color:white;
            font-size:30px;
            font-weight:bold;
            margin-top:1px;   
        }
        p{
            color:white;
            
            font-family:system-ui;
        }
        input{
            width:300px;
            height:30px;
            border-radius:7px;
            border:none;
        }
        .form-control{
            margin-bottom:10px;
        }
        .btn{
            text-align:center;
            padding-right:50px;
            text-decoration:none;
            color:white;
            border:1px;
        }
        a:hover{
            color:#9b9b9b;
            font-size:17px;
        }
        .btn2{
            text-decoration:none;
            color:white;
            
        }
        .btn3{
           width:100px;
           background-color:#63ffbb;
           margin-right:20px;
           text-decoration:none;
           padding:3px 30px;
           border-radius:7px;
        }
        b{
            
        }
        .fp{
            text-decoration:none;
            
        }
    </style>
</head>
<body>
    <center>


    <img src="img/logo.png" width="170px">
    <h2>Looking for PC Games?</h2>
    <div width="200px" height="300px">
        <p>Playstation X Box Nitendo Anything You say</p>
        <p>All in one place, in <b>G Coin Games</b></p>
    </div>
    <form method="post">
        <a href="index.php" class="btn">Login</a>
        <a href="index2.php" class="btn2">Register</a><br><br>
        <input class="form-control" id="id" name="id" required type="email" placeholder="Email"><br>
        <input class="form-control" id="pwd" name="pwd" required type="password" placeholder="Password"><br>
        <!-- <a href="home.php" class="btn3">Login</a> -->
        <input type="submit" class="btn3" name="log" value="Login">
        <a href="https://support.google.com/accounts/answer/7682439?hl=en" class="fp" style="color:white;">Forgot password?</a>
    </form>
    </center>
    
</body>
</html>
