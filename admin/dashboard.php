<?php
   include('session.php');
   if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../index.php');
}
    include("fusioncharts.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Hardware Manegement System</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script type="text/javascript" src="js/fusioncharts.js"></script>
  <script type="text/javascript" src="js/fusioncharts.theme.ocean.js"></script>
  <script src="js/fusioncharts.js"></script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" style="color:white">
    <a class="navbar-brand" href="dashboard.php" style="color:;font-size:20px;"><span class="glyphicon glyphicon-user"></span><i class="fa fa-fw fa-user"></i><b><?php echo $login_session;?></b></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
	<hr>
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="color:white">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php" style="color:white;">
		  
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="category.php" style="color:white;">
            <i class="fa fa-fw fa-folder"></i>
            <span class="nav-link-text">Animal Category</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="schedule.php" style="color:white;">
            <i class="fa fa-fw fa-folder-open"></i>
            <span class="nav-link-text">Slaughter Schedule</span>
          </a>
        </li> 
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="health.php" style="color:white;">
            <i class="fa fa-fw fa-folder-open"></i>
            <span class="nav-link-text">Health Status</span>
          </a>
        </li>
		
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="order">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" style="color:white;" href="#collapseOrder" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span class="nav-link-text">Booking</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseOrder">
            <li>
              <a href="createorder.php" style="color:white;"><i class="fa fa-cart-arrow-down"></i> Create Order</a>
            </li>
            <li>
              <a href="order.php" style="color:white;"><i class="fa fa-list-alt"></i> Manage Order</a>
            </li>
          </ul>
        </li>
      
       
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="addanimal.php" style="color:white;">
            <i class="fa fa-fw fa-list-alt"></i>
            <span class="nav-link-text">Add Animal</span>
          </a>
        </li> 
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="supplier.php" style="color:white;">
            <i class="fa fa-fw fa fa-vcard-o"></i>
            <span class="nav-link-text">Supplier</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="customer.php" style="color:white;">
            <i class="fa fa-fw fa-address-book-o"></i>
            <span class="nav-link-text">Customer</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="user.php" style="color:white;">
            <i class="fa fa-fw fa fa-users"></i>
            <span class="nav-link-text">Users</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="reports.php" style="color:white;">
            <i class="fa fa-fw  fa-area-chart"></i>
            <span class="nav-link-text">Report</span>
          </a>
        </li>
		 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="setting">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" style="color:white;" href="#collapseSetting" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text">Setting</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseSetting">
            <li>
              <a href="editprofile.php" style="color:white;"><i class="fa fa-fw fa-pencil"></i> Edit Profile</a>
            </li>
            <li>
              <a href="companysetup.php" style="color:white;"><i class="fa fa-fw fa-institution"></i> Company </a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
       
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" style="color:white;">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
     <hr>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100" style="text-align:center">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-"></i>
              </div>
              <div class="mr-5">
			  <img src="img/meat.jpg" height="100px" width="200px">
			 <?php 
			 include("config2.php");
			 $coderesult= mysqli_query($condb,"select * from `animal` where `status` ='Active' ");
			 $row=mysqli_num_rows ( $coderesult );
              echo "<b>".$row.  "</b><br>";
			  ?>  <b>Total No.of Stocks</b>
			  </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="product.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">
			  <?php 
			 $coderesult= mysqli_query($condb,"select * from `supplier` where `supplier_status` ='Active' ");
			 $row=mysqli_num_rows ( $coderesult );
              echo "<b>".$row.  "</b></br>";
			  ?>  <b>Total Suppliers</b></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="supplier.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">
			  <?php 
			 $coderesult= mysqli_query($condb,"select * from `transaction` where `transaction_id` !=' ' ");
			 $row=mysqli_num_rows ( $coderesult );
              echo "<b>".$row.  "</b></br>";
			  ?>   <b>Total   Orders</b>
			  </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="order.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">
			  <?php
			//  $dbresults=mysqli_query($conn," SELECT * FROM `order_transaction` WHERE `order_date` BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 1 DAY ) AND CURDATE( )");
			$dbresults= mysqli_query($condb,"select * from `transaction` where  `order_date` >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)");
             if ($dbresults->num_rows > 0) {
	        $grand=0;
			 while($resultrows = $dbresults->fetch_assoc()) {
				 
				 $grand+=$resultrows['grand_total'];
			  }
			  echo "<b> Ksh " .$grand."</b><br>";
			 }
			 
			 ?>
			 <b>Total this month sales</b>
			  </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"></span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
           <div class="col-md-7">
         <?php
// This is a simple example on how to draw a chart using FusionCharts and PHP.
// We have included includes/fusioncharts.php, which contains functions
// to help us easily embed the charts.
/* Include the `fusioncharts.php` file that contains functions  to embed the charts. */

  //include("fusioncharts.php");

/* The following 4 code lines contain the database connection information. Alternatively, you can move these code lines to a separate file and include the file here. You can also modify this code based on your database connection. */



  // Form the SQL query that returns the top 10 most populous countries
 // $strQuery = "SELECT product_name, available_quantity FROM product ORDER BY available_quantity DESC LIMIT 10";
  //$result=mysqli_query($condb,"SELECT product_name, available_quantity FROM product ORDER BY available_quantity ");
$result=mysqli_query($condb,"SELECT `animal_type`, COUNT(*) AS `count` FROM animal GROUP BY `animal_type`");
  // Execute the query, or else return the error message.
 // $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

  // If the query returns a valid response, prepare the JSON string
  if ($result) {
    // The `$arrData` array holds the chart attributes and data
    $arrData = array(
      "chart" => array(
          "caption" => "ANIMAL STOCK DETAILS CHART",
          "paletteColors" => "#0075c2",
          "bgColor" => "#ffffff",
          "borderAlpha"=> "20",
          "canvasBorderAlpha"=> "0",
          "usePlotGradientColor"=> "0",
          "plotBorderAlpha"=> "10",
          "showXAxisLine"=> "1",
          "xAxisLineColor" => "#999999",
          "showValues" => "0",
          "divlineColor" => "#999999",
          "divLineIsDashed" => "1",
          "showAlternateHGridColor" => "0"
        )
    );

    $arrData["data"] = array();

    // Push the data into the array
    while($row = mysqli_fetch_array($result)) {
      array_push($arrData["data"], array(
          "label" => $row["animal_type"],
          "value" => $row["count"]
          )
      );
    }

    /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

    $jsonEncodedData = json_encode($arrData);

    /*Create an object for the column chart using the FusionCharts PHP class constructor. Syntax for the constructor is ` FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. Because we are using JSON data to render the chart, the data format will be `json`. The variable `$jsonEncodeData` holds all the JSON data for the chart, and will be passed as the value for the data source parameter of the constructor.*/

    $columnChart = new FusionCharts("column2D", "myFirstChart" , 600, 300, "chart-2", "json", $jsonEncodedData);

    // Render the chart
    $columnChart->render();

    // Close the database connection
   // $dbhandle->close();
  } ?>
  
  <div id="chart-2"><!-- FusionCharts will render here--></div>
 
   
       
		   </div>
		   <div class="col-md-5">
		    <div class="col-md-12 col-md-12 mb-12">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5"><?php 
			
			 $todayresults=mysqli_query($condb," SELECT * FROM `transaction` WHERE `order_date` BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 1 DAY ) AND CURDATE( )");
			//$dbresults= mysqli_query($conn,"select * from `order_transaction` where  `order_date` >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)");
             if ($todayresults->num_rows > 0) {
	        $grand=0;
			 while($todayresultsrows = $todayresults->fetch_assoc()) {
				 
				 $grand+=$todayresultsrows['grand_total'];
			  }
			  echo "<b> Ksh " .$grand ."</b><br>";
			 }
			  ?>   <b>Total Today's Sales</b></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="order.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
		   </div>
     </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <a class="btn btn-primary" href="logout.php">Logout</a>
			
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
	<script type="text/javascript" src="js/fusioncharts.js"></script>
  </div>
</body>

</html>
