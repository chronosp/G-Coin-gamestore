<?php session_start();
error_reporting(0);
include  'include/config.php'; 
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a">
   <title>Admin | Booking Report</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
             <!---Success Message--->  
          
          <!---Error Message--->
                      <h3 class="tile-title">Feedback</h3>
            <div class="tile-body">
            <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                
                  <tr>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Username</th>
                    <th>Phone</th>      
                    <th>Address</th>      
                  </tr>
                <?php 
                  error_reporting(1);
                  include("connection.php");
                  $q = mysql_query("SELECT * FROM buy");
                  while($arr=mysql_fetch_array($q)){
                  $pname=$arr['product-name'];
                  $pprice=$arr['product-price'];
                  $user=$arr['username'];
                  $ph=$arr['phone'];
                  $add=$arr['address'];
                ?>
                  <tr>
                    <td><?php echo $pname; ?></td>
                    <td><?php echo $pprice; ?></td>
                    <td><?php echo $user; ?></td>
                    <td><?php echo $ph; ?></td>
                    <td><?php echo $add; ?></td>
                  </tr>
                  <?php } ?>
                
                </thead>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>
      <?php 
if(Isset($_POST['Submit'])){?>
<?php
 $fdate=$_POST['fdate'];
 $tdate=$_POST['todate'];
?>
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                     <th>Sr.No</th>
        <th hidden>bookingid</th>
        <th>Name</th>
        <th>email</th>
        <th>bookingdate</th>
        <th hidden>title</th>
        <th>PackageDuratiobn</th>
        <th>price</th>
        <th hidden>Description</th>
        <th>category_name</th>
        <th>PackageName</th>
        
                    
                  </tr>
                </thead>
                  <?php
                  $sql="SELECT t1.id as bookingid,t3.fname as Name, t3.email as email,t1.booking_date as bookingdate,t2.titlename as title,t2.PackageDuratiobn as PackageDuratiobn,
t2.Price as Price,t2.Description as Description,t4.category_name as category_name,t5.PackageName as PackageName FROM tblbooking as t1
 join tbladdpackage as t2
on t1.package_id =t2.id
join tbluser as t3
on t1.userid=t3.id
join tblcategory as t4
on t2.category=t4.id
join tblpackage as t5
on t2.PackageType=t5.id
where date(booking_date) between :fdate and :tdate";
                  $query= $dbh->prepare($sql);
                  $query->bindParam(':fdate',$fdate, PDO::PARAM_STR);
                  $query->bindParam(':tdate',$tdate, PDO::PARAM_STR);
                  $query-> execute();
                  $results = $query -> fetchAll(PDO::FETCH_OBJ);
                  $cnt=1;
                  if($query -> rowCount() > 0)
                  {
                  foreach($results as $result)
                  {
                  ?>

                <tbody>
                  <tr>
                    <td><?php echo($cnt);?></td>
                    <td hidden><?php echo htmlentities($result->bookingid);?></td>
                    <td><?php echo htmlentities($result->Name);?></td>
                    <td><?php echo htmlentities($result->email);?></td>
                    <td><?php echo htmlentities($result->bookingdate);?></td>
                    <td hidden><?php echo htmlentities($result->title);?></td>
                    <td><?php echo htmlentities($result->PackageDuratiobn);?></td>
                    <td><?php echo $result->Price;?></td>
                    <td hidden><?php echo $result->Description;?></td>
                    <td><?php echo htmlentities($result->category_name);?></td>
                    <td><?php echo htmlentities($result->PackageName);?></td>
                     
                  </tr>
                    <?php  $cnt=$cnt+1; } } ?>
              
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
    </main>
    <!-- Essential javascripts for application to work-->
     <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>
<?php } ?>