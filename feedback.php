
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
        body{
            height: 100%;
            background-image: url("img/ad time.jpg");
            background-position: center;
            min-height:620px;
            background-repeat: no-repeat;
            background-size: cover;        
        }
        h1{
            color:#b3ff3a;
            border:2px solid ;
            border-radius:7px;
            font-size:30px;
            width:230px;
            height:50px;
        }
        input{
            width:300px;
            height:50px;
            border-top:none;
            border-left:none;
            border-right:none;
            background-color:transparent;
            font-size:15px;
            font-weight:bold;
            color:white;
        }
        form{
            margin-top:30px;
        }
        ::placeholder{
            color:white;
            font-size:15px;
            opacity:0.7;
            outline:none !important;  
        }
        input:focus{
            outline:none;
        }
        .btn{
            text-decoration:none;
            border:none;
            background-color:#00ff4c;
            padding:13px 133px;
            border-radius:7px;
            font-weight:bold;
            color:black;
        }
        .txtarea{
            width:300px;
            height:100px;
            border-top:none;
            border-left:none;
            border-right:none;
            background-color:transparent;
            font-size:15px;
            font-weight:bold;
            font-family:system-ui;
            color:white;
        }
        textarea:focus{
            outline:none;
        }
    </style>
</head>
<body>
        <br><br><br>
        <center>
        <?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$mesg=$_POST['t3'];
if(mysql_query("insert into feedback(user,email,message) values('$name','$email','$mesg')"))
{header("location:home.php"); }
}

?>        
            <h1>Feedback</h1>
            <form method="post">
                <input type="text" name="t1" placeholder="username"><br><br>
                <input type="email" name="t2" placeholder="email"><br><br>
                <textarea class="txtarea" name="t3" placeholder="message"></textarea><br><br>
                <!-- <a href="home.php" class="btn">Send</a><br><br> -->
                <input type="submit" class="btn" name="sub" value="Send"><br><br>
                <a href="home.php" class="btn">back</a>
            </form>
           
        </center>
       
</body>
</html>
