<?php
   include('session.php');
    if (!isNonAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../index.php');
}
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
   <!-- Bootstrap css library -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!-- jQuery library -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap js library -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
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
	<br>
	<br>
	<br>
        <?php
	   include('config.php');
	    $login_session;
	
	   if(isset($_GET['insert'])){
		 echo' <div class="alert alert-success alert-dismissable">
		 <button type="button" class="close" data-dismiss="alert"
		 aria-hidden="true">
		 &times;
		 </button>
		  You have updated successfully .
		</div>';   
			   } 
			   if(isset($_GET['delete'])){
				 echo' <div class="alert alert-success alert-dismissable">
		 <button type="button" class="close" data-dismiss="alert"
		 aria-hidden="true">
		 &times;
		 </button>
		 You have successfully deleted an item.
		</div>';
			   }
			  


	if( isset($_POST['EditOrderButton']) ){
			 $paid_amount=$_POST['paid_amount'];
			 $edidpaid_amount=$_POST['paid_amount'];
			 $payment_mode=$_POST['paymentMode'];
			 $code=$_POST['code'];
			 $dueAmount=$_POST['dueAmount'];
			 $editdueAmount=$_POST['dueAmount'];
			 $DbPaidAmount=$_POST['dbPaidAmount'];
			if($paid_amount >=$dueAmount ){
				
				 $paid_amount= $DbPaidAmount + $paid_amount;
				$dueAmount='0';
				$balance = $paid_amount - $dueAmount;
			}else{
				
				$paid_amount= $DbPaidAmount + $paid_amount;
				$dueAmount=$editdueAmount - $edidpaid_amount;
			 $balance = '0';
				
			}
			 
	$result=mysqli_query($conn,"update `order_transaction` SET payment_mode= '".$payment_mode."',due_amount= '".$dueAmount."',paid_amount= '".$paid_amount."',balance_amount= '".$balance."' where `transaction_id`='".$code."' ");
if ($result) {
    // output data of each row
  echo '<script> window.location="order.php?insert=True" </script>';
	//echo json_encode("New user Added successfully");
} else {
    echo  "Sorry! something went wrong.Please try again."; 
}
    
			
			
			
				
	}
	if(isset($_POST['deleteOrderButtonFunc']))	{
		 
		echo $deleteOrderId=$_POST['deleteOrderId'];
				$deleteOrderResult=mysqli_query($conn,"DELETE FROM order_transaction WHERE `transaction_id`='".$deleteOrderId."' ");mysqli_query($conn,"DELETE FROM order_details WHERE `transaction_id`='".$deleteOrderId."' ");
			if ($deleteOrderResult) {
			//	header("Refresh:0; url=http://localhost/hardware/user.php");
				echo '<script> window.location="order.php?delete=True" </script>';
				
				}
				
			 else {
				echo  "No Match"; 
			}

	}	
	  
	    
	   ?>
	   <script>
	   
		   function deleteFuncd(id){
			   
			   var id = id;
			   var updiv = document.getElementById("message"); //document.getElementById("highodds-details");
			   //alert(id);
			  var details= '&id='+ id;
			$.ajax({
						type: "POST",
                                url: "deletesupplier.php",
                                data: details,
                                cache: false,
                                success: function(rsp) {
				//location.reload();
              //then append the result where ever you want like
             // $("#datahere").html(rsp); //data will be containing the vote count which you have echoed from the controller
			 window.location="order.php?delete=True" ;
		   
		   
                }

				
            });
			 
		   }
		   function checkPriceQuantity(data){
			   alert(data);
			   var aval_quantity= data;
			  // var quantityInput = document.getElementById("quantitycheck").value; //document.getElementById("highodds-details");
			   var productName = document.getElementById("productName[]").value; //document.getElementById("highodds-details");
			   //alert(id);
			  var data2= '&productName='+ productName +'&avalQuantity='+ aval_quantity ;
			  alert( data2);
			$.ajax({
						type: "POST",
                                url: "checkproductprice.php",
                                data:data2,
                                cache: false,
                                success: function(rsp) {
				alert(rsp);
			//var quantityInput = document.getElementById("quantitycheck").value; //document.getElementById("highodds-details");
			//var totalPrice = document.getElementById("totalPrice"); //document.getElementById("highodds-details");
			   
		              
                }

				
            });
		   }
		  </script>
	   <div id="message"></div>
      <hr>
      <!-- Icon Cards-->
            <div class="card mb-3">
        <div class="card-header btn-" style="background-color:">
		<div class="row">
		  <div class="col-md-8"><b>Order List</b></div>
		 
		</div>
		
          </div>
        <div class="card-body">
          <?php
		
		include('config.php');
		$result_array = array();

		$result=mysqli_query($conn,"select * from `order_transaction` where `transaction_id`!=' ' and `created_by`='".$login_session ."' ORDER BY order_date DESC ");
if ($result->num_rows > 0) {
    // output data of each row
    
		?>
		
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Transaction Id</th>
                  <th>Customer Name</th>
                  <th>Total Amount</th>
                  <th>Payment Status</th>
                  <th> Status</th>
                  <th>Order Date</th>
                  
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Transaction Id</th>
                  <th>Customer Name</th>
                  <th>Total Amount</th>
                  <th>Payment Status</th>
                  <th> Status</th>
                  <th>Order Date</th>
                  
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
              <tbody>
			  
			  <?php
			  while($row = $result->fetch_assoc()) {
				  $id=$row["transaction_id"];
		echo '<form method="POST" action="order.php" role="form"><tr>
		 <td>';
		  echo $id= $row["transaction_id"].
		  '</td><td>'
		  .$row["customer_name"].
		   '</td>
		   <td>'.$row["grand_total"].'</td>
		   <td>'.$row["payment_mode"].'</td>
		   <td> Active</td>
		   <td>'.$row["order_date"].'</td>';
		   
		   // delete and edit category button
		 echo"<td>	 <button class='btn btn-info' href='' data-toggle='modal' type='submit' data-target='#pay_modal' value='' name='updateid' id='".$row["transaction_id"]."' onclick='editOrderFunc(this.id)' ><i class='fa fa-edit'></i> Edit</button><a class='btn btn-warning' href='checkout.php?transactionId=".$row["transaction_id"]."'    value='' name='updateid' id='".$row["transaction_id"]."' onclick='' ><i class='fa fa-print'></i> PDF</a>";
		  
		 echo "</td><td><button class='btn btn-danger' href='' data-toggle='modal' type='submit' data-target='#delete_order_modal' value='' name='deleteOrderbutton' id='".$row["transaction_id"]."' onclick='deleteOrderFunc(this.id)' ><i class='fa fa-trash'></i></button>";
		  //echo "<button class='btn btn-warning' href='' data-toggle='modal' type='submit' data-target='#delete_user' value='' name='updateid'  onclick='editUserFunc(" ; echo $id .")' >Delete</button>";
		 echo '</td>
		</tr></form>';
		
		array_push($result_array, $row);
		


    }
	
} else {
    echo  json_encode("No Match"); 
}
			  ?>
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
           
     
 
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
     <!--  Modal-->
    <div class="modal fade" id="pay_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Order</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  <div id="editMessage"></div>
		  <script>
		   function editOrderFunc(id){
			    var id = id;
			   var updiv = document.getElementById("editMessage"); //document.getElementById("highodds-details");
			   //alert(id);
			  var details= '&id='+ id;
			$.ajax({
						type: "POST",
                                url: "editorder.php",
                                data: details,
                                cache: false,
                                success: function(rsp) {
									updiv.innerHTML=rsp;
									
								//	$("#datahere").html(rsp);
				//location.reload();
              //then append the result where ever you want like
             // $("#datahere").html(rsp); //data will be containing the vote count which you have echoed from the controller
			// window.location="order.php?delete=True" ;
		   
		   
                }

				
            });
		   }
		  </script>

        </div>
      </div>
    </div>
    </div>
		<!-- update Modal-->
   <!-- Delete order Modal-->
    <div class="modal fade" id="delete_order_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete item?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  
		  Are you sure you want to delete this item?.<br>
		  <div id="deletedata"></div>
		  </div>
          
		  <script>
		   function deleteOrderFunc(id){
			  alert(id);
			   var id = id;
			   var updiv = document.getElementById("deletedata"); //document.getElementById("highodds-details");
			    updiv.innerHTML ='<form method="POST" action="order.php"><input name="deleteOrderId" value="'+ id +'" type="hidden"><div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" name="deleteOrderButtonFunc" id="'+ id +'" type="submit"  onclick="deleteFunck(this.id)">Delete</button></form></div>';
		     
		   }
		  </script>
		  
            
          
        </div>
      </div>
    </div>
	
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
	
  </div>
</body>

</html>
