<?php session_start();
error_reporting(0);
include  'include/config.php'; 
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{

$pid=$_GET['pid'];
if(isset($_POST['Submit'])){
$pimg = $_POST['product_img'];
$pname = $_POST['product_name'];
$pprice = $_POST['product_price'];
// $category = $_POST['category'];
// $titlename = $_POST['titlename'];
// $package = $_POST['package'];
// $packageduratiobn = $_POST['packageduratiobn'];
// $Price = $_POST['Price'];
// $photo = $_POST['photo'];
// $description = $_POST['description'];
$sql="update tbladdpackage set category=:category,titlename=:titlename,PackageType=:package,
packageduratiobn=:packageduratiobn,Price=:Price,description=:description where id=:pid";

$query = $dbh -> prepare($sql);
$query->bindParam(':product_img',$category,PDO::PARAM_STR);
$query->bindParam(':product_name',$product_name,PDO::PARAM_STR);
$query->bindParam(':product_price',$product_price,PDO::PARAM_STR);
// $query->bindParam(':category',$category,PDO::PARAM_STR);
// $query->bindParam(':titlename',$titlename,PDO::PARAM_STR);
// $query->bindParam(':package',$package,PDO::PARAM_STR);
// $query->bindParam(':packageduratiobn',$packageduratiobn,PDO::PARAM_STR);
// $query->bindParam(':Price',$Price,PDO::PARAM_STR);
// $query->bindParam(':description',$description,PDO::PARAM_STR);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query -> execute();
$query->execute();
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='manage-post.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a">
   <title>Form Samples - Vali Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      form{
        border:1px solid;
        margin-top:40px;
        height:300px;
      }
      table{
        height:250px;
        margin-top:10px;
      }
    </style>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
   <?php include 'include/header.php'; ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include 'include/sidebar.php'; ?>
    <main class="app-content">
      
      <div class="row">
        
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Update Post</h3>
            <table>
            <form method="POST">
            <?php
error_reporting(1);
include("connection.php");
$i=$_REQUEST['img'];
if ($q=mysql_query("SELECT * FROM products WHERE product_img='$i'")){
  $arr=mysql_fetch_array($q);
}else{
  $err = mysql_error();
}
$pro=$arr['product_img'];
$name=$arr['product_name'];
$price=$arr['product_price'];
?>   
          <tr>
            <td><p>Product Image</p></td>
          </tr>
          <tr>
            <td><?php echo "<img src='img/$i' width='250px'>"?></td><br>
          </tr>
          <tr>
            <td><p>Product Name</p></td>
            <td><input type="text" name="t1" value="<?php echo $name;?>"><br></td>
          </tr>
          <tr>
            <td><p>Product Price</p></td>
            <td><input type="text" name="t2" value="<?php echo $price;?>"><br></td>
          </tr>
          <tr>
            <?php 
              error_reporting(1);
              include("connection.php");
              $p_name=$_POST['t1'];
              $p_cost=$_POST['t2'];
              if(isset($_POST['upd'])){
                $data="UPDATE products SET product_name='$p_name',product_price='$p_cost'
                WHERE product_img='$i'";
                $val=mysql_query($data);
                header("location:manage-post.php");
              }
            ?>
            <td><input colspan="2" type="submit" name="upd"></td>
          </tr>    
          </table>
        </form>
        
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
  <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      
  </body>
</html>

<!-- Script -->
 <script>
function getdistrict(val) {
$.ajax({
type: "POST",
url: "ajaxfile.php",
data:'category='+val,
success: function(data){
$("#package").html(data);
}
});
}
</script>
<?php }?>