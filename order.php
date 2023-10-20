<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <style>
        body{
            height: 100%;
            background-image: url("img/4263932.jpg");
            min-height: 620px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');
        *{
  margin: 0;
  padding: 0;
  text-decoration: none;
}
.nav_main {
  height: 80px;
  background-color: transparent;
  padding: 0 20px;
  margin-right:30px;
  color: red;
  margin-top:20px;

}
.nav_main_logo {
  line-height: 100px;
  float: left;
  text-transform: uppercase;
  vertical-align: middle;
  margin-top:6px;
  display:block;
}
.nav_menu_main {
  float: right;
  line-height: 80px;
}
.nav_menu_main a {
  color: white;
  text-transform: uppercase;
  padding: 0 10px;
  transition: 0.4s;
  font-family:system-ui;
  font-size:24px;
  font-weight:bold;
  opacity:0.7;  
}
/* TODO: Active tab
.nav_menu_main a.active
TODO: .hover */

@media screen and (max-width:700px) {
  
  .nav_menu_main {
    position: fixed;
    width: 100%;
    height: 100px;
    background: #333;
    right: -100%;
    top: 0;
    text-align: center;
    padding: 80px 0;
    line-height: normal;
    transition: 0.7s;
  }
  .nav_menu_main a {
    display: block;
    padding: 20px;
  }
}
  .form{
    width:928px;
    height:450px;
    background-color:transparent;
    border:1px solid green;
    border-radius:15px;
    margin:auto;
    margin-top:100px;
    display:flex;
  }
  .pimg{
    width:350px;
    height:400px;
    border:1px solid green;
    margin-top:25px;
    margin-left:27px;
    background-color:white;
    border-radius:13px;
  }
  .info{
    width: 500px;
    height:400px;
    border:1px solid green;
    float:right;
    margin-top:25px;
    margin-left:20px;
    background-color:transparent;
    border-radius:13px;
  }
  .p-img{
    width:350px;
    height:400px;
    border-radius:13px;
  }
  h1{
    margin-left:200px;
    color:#2bffb1;
    font-size:40px;
  }
  form{
    margin-top:10px;
  }
  input{
    width:450px;
    height:40px;
    margin-bottom:7px;
    border-top:none;
    border-right:none;
    border-left:none;
    background-color:transparent;
    color:#2bffb1;
    font-size:17px;
  }
  input:focus{
    outline:none;
  }
  ::placeholder{
    outline:none;
  }
  a{
    text-decoration:none;
    color:#26ff92;
  }
  .btn{
    border:1px solid;
    background-color:transparent;
    opacity:0.6;
    padding:5px 60px;
    border-radius:10px;
  }
    </style>
</head>
<body>
  <br>
      <div class="nav_main_logo"><img src="img/logo23.png" width="190px" class="nav_main_logo"></div>
           <ul class="nav_menu_main">
             <a href="home.php">Home</a>
             <a href="products.php">Products</a>
             <a href="feedback.php">Contact</a>
           </ul>

      <div class="form">
      <?php 
          error_reporting(1);
          include("connection.php");
          $i=$_REQUEST['img'];
          $q=mysql_query("SELECT * FROM products WHERE product_img='$i'");
          $arr=mysql_fetch_array($q);
          $pname=$arr['product_name'];
          $price=$arr['product_price'];
          $un=$_POST['username'];
          $ph=$_POST['phone'];
          $ad=$_POST['address'];
          
          ?>
        <div class="pimg">
          <?php echo "<img src='./admin/img/$i' width='350px' height='400px' style='border-radius:13px;'>"?>
        </div>
        <div class="info">
          <h1>Order</h1>
          <?php 
          error_reporting(1);
          include("connection.php");
          if(isset($_POST['send'])){
            $query="INSERT INTO buy VALUES ('','$pname','$price', '$un','$ph','$ad')";
            mysql_query($query); 
            header("location:order_success.php");
          }else{
            echo mysql_error();
          }
          ?>         
          <form  method="POST" align="center">
            <input type="text" readonly placeholder="porduct name" value="<?php echo $pname; ?>"><br>
            <input type="text" readonly placeholder="product price" value="<?php echo $price.'$'; ?>"><br>
            <input type="text" name="username" placeholder="username" required><br>
            <input type="text" name="phone" placeholder="phone" required><br>
            <input type="text" name="address" placeholder="address" required><br><br>
            <input type="submit" class="btn" name="send" value="Send" />
          </form>
        </div>
      </div>
      
</body>
</html>