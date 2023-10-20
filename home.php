<?php 
  error_reporting(1);
  session_start();

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G Coin Gamestore</title>
    <style>
        body{
            /* height: 100%;
            background-image: url("img/ad time.jpg");
            min-height: 620px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover; */
            background-color:black;
            width:1400px;
            height:2000px;
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
    height: 100vh;
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
    video {
      width: 1400px;
      height: 450px;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
      opacity:0.3;
}
    .categories{
      width:1350px;
      height:150px;
      background-color:black;
      background(linear-gradient(top, rgba(149,149,149,1) 3%,rgba(13,13,13,1) 26%,rgba(1,1,1,1) 54%,rgba(10,10,10,1) 74%,rgba(78,78,78,1) 100%,rgba(78,78,78,1) 100%,rgba(56,56,56,1) 100%,rgba(27,27,27,1) 100%,rgba(27,27,27,1) 100%));
      margin-top:350px;
      position:absolute;
    }
    img{
      position:relative;
      margin-top:-10px;
      padding:0px 9px;
    }
    .mid-img{
      background-image:url("img/19.world of warcraft II.jpg");
      min-height:600px;
      margin-top:580px;
      background-repeat:no-repeat;
      background-size:cover;
    }
    .text-box{
      position:relative;
      align-items:center;
      margin-top:-100px;
    }
    .text-box a{
      color:white;
      font-weight:bold;
      font-size:20px;
    }
    .item1{
      float:left;
      margin-left:238px;
    }
    .item2{
      margin-left:50px;
    }
    .item3{
      float:right;
      margin-right:180px;
    }
    .price1{
      float:left;
      margin-left:250px;
    }
    .price2{
    }
    .price3{
      float:right;
      margin-right:250px;
    }
    .text-box2{
      position:relative;
      align-items:center;
    }
    .text-box2 a{
      color:white;
      font-weight:bold;
      font-size:15px;
    }
    p{
      color:white;
      font-size:50px;
      font-weight:bold;
      text-align:center;
      font-family: serif;
      opacity:0.5;
      margin-top:-70px;
      text-transform:uppercase;
    }
    h1{
      color:white;
      font-size:50px;
      opacity:0.9;
      text-align:center;
      font-family: Georgia,serif;
      text-transform:uppercase;
    }
    h2{
      color:white;
      font-size:40px;
      opacity:0.9;
      text-align:center;
      font-family: Georgia,serif;
      text-transform:uppercase;
    }
    .slide{
      width:1000px;
      height:140px;
      background-color:transparent;
      margin-top:7px;
      position:relative;
    }
    .slide-img{
      margin-top:0px;
      padding:5px;
      transition:transform .2s;
    }
    .slide-img:hover{
      transform:scale(1.3);
      z-index:1;
    }
    .btn{
      margin-bottom:50px;
      border:2px solid white;
      opacity:0.8;
      padding:10px 33px;
      border-radius:10px;
    }
    a{
      color:white;
    }
    .footer{
      width:100%;
      height:300px;
      background-image:linear-gradient(to right,rgb(32,39,43,1),rgb(50,62,68,1),rgb(58,72,79,1),rgb(67,83,91,1),
      rgb(50,62,68,1),rgb(32,39,43,1));
      margin-top:60px;
    }
    .f-img{
      width:200px;
      margin-top:120px;
    }
    </style>
</head>
<body>
<div class="container">
      <div class="nav_main">
          <video playsinline autoplay muted loop poster="cake.jpg">
            <source src="img/It Takes Two.webm" type="video/webm">
            Your browser does not support the video tag.
          </video>
        
        <div class="nav_main_logo"><img src="img/logo23.png" width="190px" class="nav_main_logo"></div>
           <ul class="nav_menu_main">
             <a href="home.php">Home</a>
             <a href="products.php">Products</a>
             <a href="feedback.php">Contact</a>
           </ul>
      </div>
      
      <div class="categories">
        <ul align="center">
          <img src="img/33.lies of p.jpg" width="380px" height="280px">
          <img src="img/26.dead by daylight.jpg" width="380px" height="280px">
          <img src="img/28.little nightmare II.jpg" width="380px" height="280px">
        </ul>
        <ul class="text-box" align="center">
            <a href="products.php" class="item1">Lies of P</a>
            <a href="products.php" class="item2">Dead by Daylight</a>
            <a href="products.php" class="item3">Little Nighmares II</a>
        </ul>
        <ul class="text-box2" align="center">
            <a href="products.php" class="price1">59.99$</a>
            <a href="products.php" class="price2">19.99$</a>
            <a href="products.php" class="price3">13.99$</a>
        </ul>
      </div>

      
      <div class="mid-img" width="1350px" height="500px"></div>
      <p>Join the</p>
      <h1>World of Fictions where You can be</h1>
      <h2>Anything you have been ever wanted.</h2><br><br>
      <center><a href="products.php" class="btn">More at Products</a></center>
      <br><br>
      <center>
      <div class="slide">
        <marquee scrollamount="7" loop="true" direction="left">
        <a href="products.php"><img class="slide-img" src="img/1.dota-2.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/2.League of legend.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/3.cs go.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/4.minecraft.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/5.valorent.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/6.genshin impact.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/7.God of war Ragnarok.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/8.last of us.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/9.minecraft dungeons.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/10.minecraft legends.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/11.assassian creed valhalla.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/12.supermario kart.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/1.dota-2.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/2.League of legend.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/3.cs go.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/4.minecraft.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/5.valorent.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/6.genshin impact.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/7.God of war Ragnarok.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/8.last of us.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/9.minecraft dungeons.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/10.minecraft legends.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/11.assassian creed valhalla.jpg" width="200px" height="140px"></a>
        <a href="products.php"><img class="slide-img" src="img/12.supermario kart.jpg" width="200px" height="140px"></a>
        </marquee>
      </div>
      <div class="slide">
        <marquee scrollamount="7" loop="true" direction="right">
        <img class="slide-img" src="img/13.need for speed.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/14.dungeons and dragons.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/15.pubg.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/16.call of duty warzone.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/17.forza horizon 5.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/18.asphalt 9.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/19.world of warcraft.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/20.atomic heart.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/21.spider_man _mile_morales.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/22.plant vs zombie battle for neighborville.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/23.resident evil 8 village.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/24.elden ring.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/13.need for speed.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/14.dungeons and dragons.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/15.pubg.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/16.call of duty warzone.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/17.forza horizon 5.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/18.asphalt 9.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/19.world of warcraft.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/20.atomic heart.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/21.spider_man _mile_morales.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/22.plant vs zombie battle for neighborville.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/23.resident evil 8 village.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/24.elden ring.jpg" width="200px" height="140px">
        </marquee>
      </div>
      <div class="slide">
        <marquee scrollamount="7" loop="true" direction="left">
        <img class="slide-img" src="img/25.Read Dead Redemption 2.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/26.dead by daylight.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/27.dying light 2.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/28.little nightmare II.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/29.little nightmare.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/30.The Forest.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/31.sea of thieves.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/32.phasmophobia.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/33.lies of p.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/34.starfield.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/35.the witcher wild hunt.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/36.it takes two.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/25.Read Dead Redemption 2.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/26.dead by daylight.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/27.dying light 2.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/28.little nightmare II.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/29.little nightmare.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/30.The Forest.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/31.sea of thieves.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/32.phasmophobia.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/33.lies of p.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/34.starfield.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/35.the witcher wild hunt.jpg" width="200px" height="140px">
        <img class="slide-img" src="img/36.it takes two.jpg" width="200px" height="140px">
        </marquee>
      </div>
      </center>
      
      <div class="footer">
        <center>
          <img class="f-img" src="img/logo23.png" >
        </center>
      </div>
</div>
</body>
</html>