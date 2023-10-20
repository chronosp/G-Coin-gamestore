<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
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
<?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$password=$_POST['t3'];
if(mysql_query("insert into register(name,email,pw) values('$name','$email','$password')"))
{
//echo "<script>location.href='reg_success.php?email=$email'</script>"; 
header("location:index.php");}
else {$error= "user already exists";}}
?>
    <img src="img/logo.png" width="170px">
    <h2>Looking for PC Games?</h2>
    <div width="200px" height="300px">
        <p>Playstation X Box Nitendo Anything You say</p>
        <p>All in one place, in <b>G Coin Games</b></p>
    </div>
    <form method="post">
        <a href="index.php" class="btn">Login</a>
        <a href="index2.php" class="btn2">Register</a><br><br>
        <input type="text" required class="form-control" name="t1" placeholder="username"><br>
        <input class="form-control" required type="text" name="t2" placeholder="Email"><br>
        <input class="form-control" required type="password" name="t3" placeholder="Password"><br>
        <!-- <a href="home.php" name="sub" class="btn3">Sign in</a> -->
        <input type="submit" class="btn3" name="sub" value="Sign In">
        <a href="" class="fp" style="color:white;">Forgot password?</a>
    </form>
    </center>
</body>
</html>