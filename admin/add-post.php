<?php session_start();
error_reporting(0);
include  'include/config.php'; 
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
include  'include/config.php';
if(isset($_POST['Submit'])){

$category = $_POST['category'];
$titlename = $_POST['titlename'];$package = $_POST['package'];$packageduratiobn = $_POST['packageduratiobn'];$Price = $_POST['Price'];$photo = $_POST['photo'];$description = $_POST['description'];

$sql="INSERT INTO tbladdpackage (category,titlename,PackageType,PackageDuratiobn,Price,uploadphoto,Description) 
Values(:category,:titlename,:package,:packageduratiobn,:Price,:photo,:description)";
$query = $dbh -> prepare($sql);
$query->bindParam(':category',$category,PDO::PARAM_STR);
$query->bindParam(':titlename',$titlename,PDO::PARAM_STR);
$query->bindParam(':package',$package,PDO::PARAM_STR);
$query->bindParam(':packageduratiobn',$packageduratiobn,PDO::PARAM_STR);
$query->bindParam(':Price',$Price,PDO::PARAM_STR);
$query->bindParam(':photo',$photo,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query -> execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId>0)
{
echo "<script>alert('Package Added successfully.');</script>";
echo "<script> window.location.href='manage-post.php';</script>";
 }
else {

$errormsg= "Data not insert successfully";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a">
   <title>Admin | Add Package</title>
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
      .i-img{
        
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
      <h3 align="center"> Add Products </h3>
      <hr/>
      <form method="POST" enctype="multipart/form-data" align="center">
        <table align="center">
      <?php
error_reporting(1);
include("connection.php");
$img=$_FILES['img']['name'];
$proname=$_POST['t1'];
$price=$_POST['t3'];
if($_POST['sub'])
{$qry="INSERT INTO products (product_name,product_img,product_price)VALUES('$proname','$img','$price')";
$result=mysql_query($qry) or die (mysql_error());
if($result)			
	   {
			move_uploaded_file($_FILES['img']['tmp_name'],"img/$i".$_FILES['img']['name']);	
	    $err="<font size='+2'>item inserted successfully</font>";
		}
	else
	 {
	   echo "item is not inserted";
	   }
	}  
	mysql_close($con);
?>   
          <tr>
            <td><p>Product Image</p></td>
            <td><input type="file" class="i-img" name="img"/><br></td>
          </tr>
          <tr>
            <td><p>Product Name</p></td>
            <td><input type="text" name="t1"><br></td>
          </tr>
          <tr>
            <td><p>Product Price</p></td>
            <td><input type="text" name="t3"><br></td>
          </tr>
          <tr>
            <td><input colspan="2" type="submit" name="sub"></td>
          </tr>    
          </table>
        </form>
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
<?php } ?>