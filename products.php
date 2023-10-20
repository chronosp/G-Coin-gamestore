<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="https://fontawesome.com/icons/xbox?f=brands&s=solid"></script>
    <style>
        body{
            /* height: 100%;
            /*background-image: url("img/4263932.jpg");
            min-height: 620px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover; */
            background-image:linear-gradient(to right,rgb(35, 43, 56, 1),rgb(43, 53, 68, 1),rgb(50, 61, 79, 1),rgb(57, 71, 91, 1),
            rgb(67, 83, 107, 1),rgb(73, 91, 117, 1)); 
            background-repeat:no-repeat;
            min-height:700px;
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
  table{
    border:none;
    margin-top:10px;
    align-items:center;
  }
  .product{
    width:260px;
    height:210.39px;
    padding:5px 10px;
    transition: transform .2s;
  }
  .product:hover{
    transform: scale(1.3);
  }
  h1{
    color:white;
    font-size:40px;
    margin-top:140px;
    font-family:system-ui;
  }
  p{
    color:white;
    font-size:22px;
    margin-top:3px;
    font-family:system-ui;
  }
  .search-bar{
    margin-top:50px;
    height:70px;
    background-image:linear-gradient(to right,rgb(25, 27, 28),rgb(37, 39, 40),rgb(51, 54, 56),rgb(63, 66, 68),rgb(77, 81, 84),
    rgb(89, 93, 96),rgb(100, 105, 109));
    width:1000px;
    border-radius:4px;
  }
  .sbar{
    float:right;
    width:350px;
    height:50px;
    background-color:#282828;
    margin-top:10px;
    margin-right:10px;
  }
  input{
    width:280px;
    height:40px;
    background-color:transparent;
    border:none;
    color:white;
    font-size:20px;
    margin-top:5px;
    
  }
  input:focus{
    outline:none;
    background-color:#494949;
    padding-left:5px;
  }
  ::placeholder{
    padding-left:5px;
  }
  .spy{
    width:40px;
    margin-left:10px;
    margin-top:5px;
    display: inline;
    float: left;
  }
  .types{
    float:left;
    color:white;
    opacity:0.8;
    margin-top:15px;
    margin-left:20px;
    font-size:20px;
  }
  .types a{
    color:white;
  }
  .footer{
    width:400px;
    height:50px;
    background-color:transparent;
    border-radius:30px;
    margin-top:50px;
    margin-bottom:50px;
    display:inline-block;
  }
  .pages{
    width:400px;
    height:37px;
    background-color:transparent;
    margin-top:7px;
    border-radius:20px;
    list-style-type: none;
  }
  .page-num{
    border-radius:50%;
    display:inline-block;
    background-color:#e5e5e5;
    opacity:0.7;
    width:40px;
    height:35px;
    float:left;
    margin-left:30px;
    line-height:35px;
    font-weight:bold;
    color:black;
  }
  .left-btn{
    margin-left:40px;
  }
  .is_active{
    background-color:#3affff;
    width:45px;
    height:37px;
    margin-top:-2px;
  }
  .types{
    display:flex;
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
        
        <center>
        <h1>What is your stories?</h1>
        <p>Come dive deep into the various type of stories, legends.Some far old, some far young, </p>
        <p>but what kind of legends you wanna make depends on you.As we  G Coin can take you</p>
        <p> into the world of fantasies...</p>
      

        <div class="search-bar">
            <div class="types">
              <img src="img/ghost logo.png" width="40px">
              <a href="">Horror</a>/ &nbsp;
              <img src="img/sword logo.png" width="40px">
              <a href="">Adventure</a>/ &nbsp;
              <img src="img/chess logo.png" width="40px">
              <a href="">Strategry</a>/ &nbsp;
              <img src="img/race logo.png" width="40px">
              <a href="">Racing</a>
            </div>
          <div class="sbar">
           <img class="spy" src="img/spyglass.png">
           <input type="text" placeholder="search...">
          </div>
        </div>

        <table>
        <?php
          
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from products ");
						echo"<form method='post'><table border='0' align='center'>";
   $n=0;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['product_img'];
   
    if($n%4==0)
	{
	echo "<tr>";
	}
   echo "
   <td height='280' width='240' align='center'><a href='order.php?img=$i'><img src='admin/img/$i' class='product'></a><br/>
 
  <b>product name:</b>".$arr['product_name'].
   "<br><b>Price:</b>&nbsp;".$arr['product_price']."$".
  "<br> <a href='order.php?img=$i' style='color:white;'><b>Buy</b></a>
   
   </td>";
  
  $n++;

   }
   	  echo "</tr></table>
       </form>";
	?>	
        </table>

        <div class="footer">
          <ul class="pages">
            <li>
              <a href="products 3.php" class="page-num left-btn"> < </a>
            </li>
            <li>
              <a href="products.php" class="page-num is_active">1</a>
            </li>
            <li>
              <a href="products 2.php" class="page-num">2</a>
            </li>
            <li>
              <a href="products 3.php" class="page-num">3</a>
            </li>
            <li>
              <a href="products 2.php" class="page-num"> > </a>
            </li>
          </ul>
        </div>
        </center> 
</body>
</html>


<!-- <?php
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from products ");
						echo"<form method='post'><table border='0' align='center'>";
   $n=0;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['img'];
   
    if($n%3==0)
	{
	echo "<tr>";
	}
   echo "
   <td height='280' width='240' align='center'><img src='admin/image/$i' class='product'><br/>
 
  <b>product name:</b>".$arr['product_no'].
   "<br><b>Price:</b>&nbsp;".$arr['product_price'].
  "<br><a href='login.php?img=$i'><b>Buy</b></a>
   
   </td>";
  
  $n++;

   }
   	  echo "</tr></table>
       </form>";
	?>	 -->