
<?php
error_reporting(E_ALL); 
ini_set('display_errors', 0);
include ("dbfunctions.php");
session_start();
?>


<html lang="en"><head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Table Views</span>
        </a>
   <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Table Views:</h6>
  <a class="collapse-item" href="customers.php" >all Customers</a>
  <a class="collapse-item" href="restaurants.php" >all Restaurants</a>
  <a class="collapse-item" href="products.php" >all Products</a>
  <a class="collapse-item" href="orders.php" >all Orders</a>
  <a class="collapse-item" href="Loyalty.php" >all Customer Loyalty</a>       
     </div>
        </div>
      </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Add to Tables</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Add to Tables:</h6>
  <a class="collapse-item" href = "CustomerInput.html" >Add Customer</a>
  <a class="collapse-item" href = "AddOrders.html" >Add An Order</a>
  <a class="collapse-item" href = "AddProductToOrder.html" >Add Products To An Order</a>
  <a class="collapse-item" href = "AddCard.html" >Add Card To A Customer</a>
  <a class="collapse-item" href = "AddRestaurant.html" >Add Restaurant</a>
  <a class="collapse-item" href = "AddRestaurantLocation.html" >Add Restaurant Location</a>
  <a class="collapse-item" href = "AddProduct.html" >Add Products</a>          </div>
        </div>
      </li>

  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#cca" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Get from Tables</span>
        </a>
  <div id="cca" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Get from Tables:</h6>
  <a class="collapse-item" href = "CustomerOrders.html" >Get A Order By ID</a>   
  <a class="collapse-item" href = "CustomerAccount.html" >Get A Customers By Name</a>   
  <a class="collapse-item" href = "CustomerCards.html" >Get A CC By ID</a>   
  <a class="collapse-item" href = "CustomerLoyalty.html" >Get Loyalty By Name</a>   
  <a class="collapse-item" href = "GetVoucher.html" >Get A Voucher</a>   
  <a class="collapse-item" href = "RestaurantProducts.html" >Get A Products</a>   
  <a class="collapse-item" href = "RestaurantByLoco.html" >Get Location</a>   
  <a class="collapse-item" href = "RestaurantPoints.html" >Get Points By Restaurant</a>            </div>
        </div>
      </li>
  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ccca" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Other Operations</span>
        </a>
        <div id="ccca" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Other Operations:</h6>
  <a class="collapse-item" href = "CustomerUpdate.html" >Update A Customers </a>   
  <a class="collapse-item" href = "ApplyVoucher.html" >Apply A Voucher </a>   
  <a class="collapse-item" href = "RequestCustomerDetails.html">Search Customer </a>  
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
 
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading --></br>
<?php
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$connection = dbConnect("$username", "$password") ;
$first = $_POST['first'];
$last = $_POST['last'];
$query = "SELECT * FROM CUSTOMERINFO WHERE FIRSTNAME='$first' and LASTNAME='$last'";
$result = runQuery($connection,$query);
$numrows = mysqli_num_rows($result);
if ($numrows == 0) 
{
	print "No customer with name = $first $last";
	print "</body></html>";
}
else{displayVertTable($result);
	$result = mysqli_query($connection,$query);
	$finfo = mysqli_fetch_array($result);
}
?>
<form method="post" action="UpdateCustomer.php">
<table>
<tr>  
<td> <input type="text" size="20" style="display: none" name="id" placeholder='ID' value="<?php echo $finfo[0]; ?>"/> </td> </tr>
<tr>  
<td> First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="first" placeholder='FirstName' value="<?php echo $finfo[1]; ?>"/> </td> </tr>
<tr>  
<td> Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="last" placeholder="LastName" value="<?php echo $finfo[2]; ?>" /> </td> </tr>
<tr> 
<td> Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" size="30" name="add" placeholder="Address" value="<?php echo $finfo[3]; ?>"/> </td> </tr>
<tr> 
<td> Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" size="30" name="email" placeholder="Email" value="<?php echo $finfo[4]; ?>"/> </td> </tr>
<tr> 
<td> Date Of Birth: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="10" name="doB" placeholder="Date Of Birth" value="<?php echo $finfo[5]; ?>"/> yyyy-mm-dd</td> </tr>
<tr> <br/> </td>
<td> Registration Date: &nbsp;&nbsp;<input type="text" size="10" name="regdate" placeholder="Registration Date" value="<?php echo $finfo[6]; ?>"/> </td> </tr>
<tr>
<td>Gender<br /> Male: <input type="radio" value="M" name="gen"/><br/>
Female: <input type="radio" value="F" name="gen"/></td> </tr>
</td>
<input type="submit" value="Submit"/>
</td>
</tr>
</table>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body></html>
