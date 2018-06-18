<?php
   include('session.php');
    if (!isNonAdmin()) {
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

<body class="" id="page-top">
  <!-- Navigation-->
  <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="dashboard.php">Dashboard</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="product.php"><i class="fa fa-eye"></i> Product <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="createorder.php" style="color:white" ><i class="fa fa-shopping-cart"></i> New Order </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="order.php" style="color:white"><i class="fa fa-list"></i> My order</a>
            </li>
           
          </ul>
		  <ul class="navbar-nav ml-auto">
          <li class="nav-item">
               <a class="navbar-brand" href="dashboard.php" style="color:;font-size:20px;"><span class="glyphicon glyphicon-user"></span><i class="fa fa-fw fa-user"></i><b><?php echo $login_session;?></b></a>
            </li> 
			<li class="nav-item">
              <a class="nav-link" href="editprofile.php" style="color:white">Settings</a>
            </li>
        <li class="nav-item">
		
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" style="color:white">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
         
        </div>
      </nav>
    </header>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      
      <!-- Icon Cards-->
	  <br>
	  <br>
	  <br>
	  <div class="row">
	    <div class="col-md-2"></div>
	    <div class="col-md-8">
		
		
     <div class="row">
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100" style="text-align:center">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-money"></i>
              </div>
              <div class="mr-5">
			 <?php 
			
			 $todayresults=mysqli_query($conn," SELECT * FROM `order_transaction` WHERE `order_date` BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 1 DAY ) AND CURDATE( )");
			//$dbresults= mysqli_query($conn,"select * from `order_transaction` where  `order_date` >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)");
             if ($todayresults->num_rows > 0) {
	        $grand=0;
			 while($todayresultsrows = $todayresults->fetch_assoc()) {
				 
				 $grand+=$todayresultsrows['grand_total'];
			  }
			  echo "<b> Ksh " .$grand ."</b><br>";
			 }
			  ?>   <b>Today's Sales</b>
			  </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="order.php">
              <span class="float-left"><b>Details</b></span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">
			  <?php 
			 $coderesult= mysqli_query($conn,"select * from `order_transaction` where `created_by` ='".$login_session." ' ");
			 $row=mysqli_num_rows ( $coderesult );
              echo "<b>".$row.  "</b></br>";
			  ?> <b>My Total   Orders</b>  </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="order.php">
              <span class="float-left"><b>Details</b></span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">
			  <?php 
			 $coderesult= mysqli_query($conn,"select * from `product` where `status` ='Active' ");
			 $row=mysqli_num_rows ( $coderesult );
              echo "<b>".$row.  "</b><br>";
			  ?>  <b>Total Available Product</b>
			 
			  </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="product.php">
              <span class="float-left"><b>Details</b></span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
       <div class="row">
	   <div class="col-md-"></div>
           <div class="col-md-9">
         <?php
 //include("fusioncharts.php");
 // $strQuery = "SELECT product_name, available_quantity FROM product ORDER BY available_quantity DESC LIMIT 10";
  $graphResult=mysqli_query($conn,"SELECT order_date, grand_total FROM order_transaction where created_by= '".$login_session."' ORDER BY order_date DESC LIMIT 10 ");

  // Execute the query, or else return the error message.
 // $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

  // If the query returns a valid response, prepare the JSON string
  if ($graphResult) {
    // The `$arrData` array holds the chart attributes and data
    $arrData = array(
      "chart" => array(
          "caption" => "SALES FOR THE LAST 10 DAYS",
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
    while($row = mysqli_fetch_array($graphResult)) {
      array_push($arrData["data"], array(
          "label" => $row["order_date"],
          "value" => $row["grand_total"]
          )
      );
    }

    /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

    $jsonEncodedData = json_encode($arrData);

    /*Create an object for the column chart using the FusionCharts PHP class constructor. Syntax for the constructor is ` FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. Because we are using JSON data to render the chart, the data format will be `json`. The variable `$jsonEncodeData` holds all the JSON data for the chart, and will be passed as the value for the data source parameter of the constructor.*/

    $columnChart = new FusionCharts("column2D", "mySecondChart" , 600, 300, "chart-2", "json", $jsonEncodedData);

    // Render the chart
    $columnChart->render();

    // Close the database connection
   // $dbhandle->close();
  } ?>
  
  <div id="chart-2"><!-- FusionCharts will render here--> hhj</div>
 
   
       
		   </div>
		
     </div>     
     </div>
	<div class="col-md-2"></div>
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
