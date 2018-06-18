<?php
  include('session.php');
  
   if (!isAdmin()) {
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
        <?php
	   include('config.php');
	   include('config2.php');
	  if( isset($_GET['orderId'])){
		   $orderIdCode=$_GET['orderId'];
		 $coderesult= mysqli_query($conn,"select * from `order_transaction` where `transaction_id`='".$orderIdCode."' ");
 if ($coderesult->num_rows > 0) {
 
	  $rand= rand(10000,20000);
	  $d=strtotime("today");
	   $today = date("Ymds", $d);
	  $orderId = "cuo-".$rand."".$today;
 
 }else{
	 $orderId=$_GET['orderId'];
 }
		
	 }else{
		  $rand= rand(10000,20000);
	  $d=strtotime("today");
	   $today = date("Ymds", $d);
	  $orderId = "cuo-".$rand."".$today;
	 }
if(isset($_GET['insert'])){
		 echo' <div class="alert alert-success alert-dismissable">
		 <button type="button" class="close" data-dismiss="alert"
		 aria-hidden="true">
		 &times;
		 </button>
		 Success! You have added an item.
		</div>';   
	   } 
  if(isset($_POST['addItem'])){
	 
	  $productName=$_POST['productName'];
	  $quantity=$_POST['quantity'];
	  $bookDate=$_POST['bookDate'];
	    
	  //$rand= rand(10000,20000);
	  //$d=strtotime("today");
	  //echo $todaysdate = date("Ymds", $d);
	  //echo $orderId = "cuo-".$rand."".$todaysdate;
	
	 $customerresult=mysqli_query($condb,"select * from `animal_category` where `meat_name`='".$productName."' ");
if ($customerresult->num_rows > 0) {
	$tot=0;
				while($row = $customerresult->fetch_assoc()) {
				 
				 //$id =$row['brand_name'];
				    $price =$row['selling_price'];
				    
				    $meatName=$row['meat_name'];
				 // $orderId=$_GET['orderId'];
			
					  $checkresult=mysqli_query($condb,"select * from `temp_table` where `meat_name`='".$meatName."' and `order_id`='".$orderId."'");
                   if ($checkresult->num_rows > 0){
					   while($row = $checkresult->fetch_assoc()) {
						   $addQuantity=$row['quantity'];
						   $addedQuantity =$addQuantity + $quantity;
						   $total= $addedQuantity *  $price;
						    
						
							    $addresult=mysqli_query($condb,"update `temp_table` SET quantity= '".$addedQuantity."',total='".$total."' where `item`='".$productName."' and `order_id`='".$orderId."' ");
						   if($addresult){
							  // echo "updated";
							  echo '<script> window.location="createorder.php?orderId='.$orderId.'" </script>';
						   }
						   
						  

						   
					   }
					   
				   }else{
					  	   $total= $quantity *  $price;
					  $result=mysqli_query($condb,"insert into `temp_table` (meat_name,quantity,selling_price,total,booked_on,date_entered,order_id) values('$meatName','$quantity','$price','$total','$bookDate','$today','$orderId')");
				   if ($result) {
						// output data of each row
						//$orderId="1";
					echo '<script> window.location="createorder.php?orderId='.$orderId.'" </script>';
					 //header("LOCATION:createorder.php?orderId='.$orderId.'");
					 //header("location: dashboard.php");
						//echo json_encode("New user Added successfully");
					} else {
						//echo  json_encode("Sorry! something went wrong.Please try again."); 
						echo' <div class="alert alert-success alert-dismissable">
					 <button type="button" class="close" data-dismiss="alert"
					 aria-hidden="true">
					 &times;
					 </button>
					 Sorry! something went wrong.Please try again.
					</div>';
					// die('Could not enter data: ' . mysqli_error());

					} 
				   }
					  
				
				  
				//echo $categoryName$row['category_name'];
					
					 
					//echo $price;
				
				}
				//echo $data;
				
} else {
   
	echo' <div class="alert alert-warning alert-dismissable">
					 <button type="button" class="close" data-dismiss="alert"
					 aria-hidden="true">
					 &times;
					 </button>
					 
					  '. $productName.' is currently not available .
					</div>';
}

  }
	
	//save order
	if(isset($_POST['addOrderButton'])){
		 $clientName =$_POST['clientName'];
		$paymentMode =$_POST['paymentMode'];
		$discount =$_POST['discountAmountHidden'];
		$Vat =$_POST['hiddenVat'];
		$grand_amount =$_POST['grandAmount'];
		$dueAmount =$_POST['dueAmountHidden'];
		$balanceAmount =$_POST['balanceAmountHidden'];
		$paid_amount =$_POST['paid_amount'];
		$total_amount =$_POST['total_amount'];
		$transactionCode=$orderId;
		$orderresult=mysqli_query($condb,"select * from `temp_table` where `order_id`='".$orderId."'  ");
		if ($orderresult->num_rows > 0) {				
					  $tot=0;
		while($rows = $orderresult->fetch_assoc()) {
		    $transactionCode= $rows["order_id"];
			$item= $rows["meat_name"];
			$orderQuantity= $rows["quantity"];
			$price= $rows["selling_price"];
			$subtotal= $rows["total"];
			$bookDate= $rows["booked_on"];
			
			$tot+=$rows['total'];
			$d=strtotime("today");
	        $todaysdate = date("Y/m/d", $d);
			
				$insertOrder=mysqli_query($condb,"insert into `booking_details` (item,quantity,price,total,pick_date,transaction_id) values('$item','$orderQuantity','$price','$subtotal','$bookDate','$transactionCode')");mysqli_query($condb,"insert into `transaction` (customer_name,total_amount,payment_mode,discount,due_amount,grand_total,balance_amount,paid_amount,vat,order_date,created_by,transaction_id) values('$clientName','$total_amount','$paymentMode','$discount','$dueAmount','$grand_amount','$balanceAmount','$paid_amount','$Vat','$todaysdate','$login_session','$transactionCode')");mysqli_query($condb,"DELETE FROM temp_table WHERE `order_id`='".$transactionCode."'  ");
				   if ($insertOrder) {
					   echo "yes entered";
					   echo '<script> window.location="checkout.php?transactionId='.$orderId.'" </script>';
				   }else{
					   echo "not yet entered";
				   }
			
			}
			
		}
	
		}
				
			
			
	  
	    
	   ?>
	   <script>
	   
		   function deleteFunc(id,name){
 
			  var id = id;
			   var name = name;
			   var updiv = document.getElementById("message"); //document.getElementById("highodds-details");
			   //alert(id);
			  var details= '&id='+ id +'&name='+ name;
			
			$.ajax({
						type: "POST",
                                url: "deleteorder.php",
                                data: details,
                                cache: false,
                                success: function(rsp) {
				
          <?php  echo 'window.location="createorder.php?orderId=id" ';?>
		   
                }

				
            });
			 
		   }
		   function searchName(name){
			   //alert(name);
					   if (name.length==0) { 
			document.getElementById("outputHere").innerHTML="";
			document.getElementById("outputHere").style.border="0px";
			return;
		  }
		   var updiv = document.getElementById("outputHere"); //document.getElementById("highodds-details");
		   //alert(id);
		  var details= '&name='+ name;
		  //alert(details);
		$.ajax({
					type: "POST",
							url: "searchproduct.php",
							data: details,
							cache: false,
							success: function(rsp) {
				// alert(rsp);
              //then append the result where ever you want like
             $("#outputHere").html(rsp); //data will be containing the vote count which you have echoed from the controller
           //updiv.innerHTML =rsp;
		    /// $("#outputHere").append(data);
                }
            });
		   }
		   function addText(valName){
			  
			   document.getElementById("productName").value=valName;
			   document.getElementById("outputHere").innerHTML=" ";
		   }
		  </script>
	   <div id="message"></div>
      <hr>
      <!-- Icon Cards-->
            <div class="card mb-3">
        <div class="card-header" style="text-align:">
		
		<form method="POST" >
		<div class="row">
		
		  <div class="col-md-3 form-group" >
		  <label><b>Booked on</b></label>
		  <input type="date" name="bookDate" id="bookDate" onkeyup="" value="" class="form-control" required>
		  
		  </div>
		  <div class="col-md-3 form-group" >
		  <label><b>Meat Type</b></label>
		  <input type="text" name="productName" id="productName" onkeyup="searchName(this.value)" value="" class="form-control" required>
		  <div id="outputHere"></div>
		  
		  </div>
		  
		    <div class="col-md-3 form-group" >
		  <label><b>Quantity</b></label>
		  <div class="input-group">
			 <input class="form-control" type="number" name="quantity" min="1" required>
			 <span class="input-group-btn">
			 <button class="btn btn-primary" type="submit" name="addItem">
			 <i class="fa fa-plus"> <b>Item</b></i>
			 </button>
			 </span>
			 </div>
		  </div>
		  <div class="col-md-3 form-group" >
		
		  </div>
		</div>
		<div class="form-group">
		
		</div>
		</form>
		
		 </div>
        <div class="card-body">
		<div class="table-responsive">
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Item</th>
                  <th>Quantity</th>
                  <th>Price</th>  
                  <th>Total</th>
                  <th>Action</th>
                 
                </tr>
              </thead>
             
              <tbody>
			  
          <?php
		
		include('config.php');
		$result_array = array();

		$result=mysqli_query($condb,"select * from `temp_table` where `order_id`='".$orderId."'  ");
if ($result->num_rows > 0) {
    // output data of each row
    
		
			  $tot=0;
			  while($rows = $result->fetch_assoc()) {
				  $item=$rows["meat_name"];
				  $order_id=$rows["order_id"];
		echo '<form method="POST" action="createorder.php?orderId='.$orderId.'" role="form" name="form1" id="form1s"><tr>
		 <td>';
		  echo $order_id= $rows["id"].
		  '</td><td>'
		  .$rows["meat_name"].
		   '</td>
		   
		   <td>'.$rows["quantity"].'</td>
		   <td>'.$rows["selling_price"].'</td>
		   
		   <td><span class="badge btn-">'.$rows["total"].'</span></td>' ;
		   // delete and edit category button
		 echo"<td> <button class='btn btn-danger'  data-toggle='modal' type='submit' data-target='#exampleModal' name='".$item."' id='".$order_id."'  value='".$rows["order_id"]."'  onclick='deleteFunc(this. value,this.name)' ><i class='fa fa-trash'></i></button></td>";
		  
		echo '</tr>
		
		</form>';
		
		//array_push($result_array, $row);
		
  $tot+=$rows['total'];
 $vat_sql = mysqli_query($conn,"select vat from company_details  ");
   
   $row = mysqli_fetch_array($vat_sql,MYSQLI_ASSOC);
   
    $vatCharges = $row['vat'];
    $vat= $vatCharges/100 * $tot ;
     $tal_amount=$tot + $vat;
    }
	?>
	<script>
	function discountAmt(disc){
		
		if ( disc!==""){
		var tol_amount =parseInt(document.getElementById("total_amount").value);
		var discount_amount =parseInt(document.getElementById("discount").value);
		
		var grand_total= tol_amount - discount_amount;
		
		document.getElementById("grand_amount").value=grand_total;
		document.getElementById("grandAmount").value=grand_total;
		
		document.getElementById("discount").value=disc;
		document.getElementById("discountAmount").value=disc;
		}else{
			var tol_amount =parseInt(document.getElementById("total_amount").value);
		   //var discount_amount =document.getElementById("discount").value="0";
		   var discount_amount =document.getElementById("discountAmount").value="0";
			document.getElementById("grand_amount").value=tol_amount;
			document.getElementById("grandAmount").value=tol_amount;
		}
	}
	function calDueAmount(paid_amount){
		var paidAmount= parseInt(document.getElementById("paid_amount").value);
		
		var grand_amount = parseInt(document.getElementById("grand_amount").value);
		
		if(paidAmount >= grand_amount){
			
			var bal= paidAmount - grand_amount;
			
			
			var test= document.getElementById("balanceAmount").value=bal;
			var test= document.getElementById("balanceAmountHidden").value=bal;
			document.getElementById("dueAmount").value="0";
			document.getElementById("dueAmountHidden").value="0";
			
		}else {
			
			var due=grand_amount - paid_amount;
			
			document.getElementById("dueAmount").value=due;
			document.getElementById("dueAmountHidden").value=due;
			document.getElementById("balanceAmount").value="0";
			document.getElementById("balanceAmountHidden").value="0";
			
		}
		 
	}
	</script>
	<tfoot>
	<form method="POST" >
	  <tr class="btn-">
         
         
		 
         <td colspan="2" rowspan="5"></td>		
         <td colspan="2"><b>Sub Total</b></td>		
         <td><fieldset disabled>
	
	<input type="disabled" id="sub_total" name="sub_total" value="<?php echo"Ksh  ". $tot;?>"class="disabled form-control"placeholder="Disabled input">
	</fieldset disabled></td>		
        
         	
		</tr>
		<tr class="btn-">
         
         
		 
         <td colspan="2"><b>VAT <?php echo $vatCharges;?>%</b></td>		
         <td> 
	
	<input type="disabled" id="vat" name="vat" value="<?php echo"Ksh  ". $vat;?>"class="disabled form-control"placeholder="Disabled input" disabled>
	
	</td>		
         	
         	
		</tr>
		<tr class="btn-">
         
         
		 
         <td colspan="2"><b>Total Amount</b></td>		
         <td>
		
	
	<input type="text" id="total_amount" name="total_amount" value="<?php echo $tal_amount;?>"class="form-control"placeholder="Disabled input" readonly >

		 </td>		
         	
         	
		</tr>
		<tr class="btn-">
         
         
		 
         <td colspan="2"><b>Discount</b></td>		
         <td><input class="form-control" type="number" min="0" name="discount" id="discount" value="0" onkeyup="discountAmt(this.value)"></td>		
         	
         	
		</tr>
		<tr class="btn-">
         
         
		 
         <td colspan="2"><b>Grand Amount</b></td>		
         <td>
		 <input type="text" id="grand_amount" name="grand_amount" value="<?php echo $tal_amount;?>" min="0" class=" form-control"placeholder="Disabled input" readonly>
	
		 
		 </td>		
         	
         	
		</tr>
		</form>
		</tfoot>
		         </tbody>
            </table>
			
          </div>
        </div>
        <div class="card-footer small text-muted">
		
          <a class="btn btn-secondary" href="createorder.php">Cancel</a>
		 <button class="btn btn-primary" name="addCustomerButton" type="submit" data-toggle='modal' type='submit' data-target='#pay_modal'>Pay</button>
            
		
		</div>
      </div>
           
     
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <!--<small>Copyright ©  2018</small>-->
        </div>
      </div>
    </footer>
		<?php
} else {
    //echo  json_encode("No Match"); 
}
			  ?>
			
     
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    
    <!--  Modal-->
    <div class="modal fade" id="pay_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Customer</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  
	<form method="POST" action="createorder.php?orderId=<?php echo $orderId;?>">
	<div class="form-group">
            
              
                <label for="brand name"><b>Enter Client Name:</b></label>
                <input class="form-control" id="clientName" required name="clientName" type="text" aria-describedby="nameHelp" placeholder="Enter client name">
                       
          </div> 
		  <div class="form-group">
            
              
                <label for="paid Amount" class="col-md-6"><b>Paid amount:</b></label>
                <input class="form-control col-md-" id="paid_amount" required name="paid_amount" type="number" min="0" onkeyup="calDueAmount(this.value)" aria-describedby="nameHelp" placeholder="">
                       
          </div> 
		  <div class="form-group">
		  <label for="brand name" class="col-md-"><b>Due Amount:</b></label>
		  <input class="form-control col-md-" id="dueAmount" required name="dueAmount" type="number" min="0" value="0" onchange="" aria-describedby="nameHelp" placeholder="" disabled>
		 <!-- hidden inputs -->
		 <input class="form-control col-md-" id="dueAmountHidden" required name="dueAmountHidden" type="hidden"  value="0" onchange="" aria-describedby="nameHelp" placeholder="" >
       <input type="hidden" id="grandAmount" name="grandAmount" value="<?php echo $tal_amount;?>" min="0" class=" form-control"placeholder="Disabled input" >
       <input type="hidden" id="discountAmount" name="discountAmountHidden" value="0" min="0" class=" form-control"placeholder="Disabled input" >
	 <input type="hidden" id="hiddenVat" name="hiddenVat" value="<?php echo $vat;?>"class="form-control"placeholder="Disabled input" >
	
	    </div>
		  <div class="form-group">
		  <label for="paymentMode"><b>Select Payment Mode</b></label>
	<select class="form-control" name="paymentMode" id="paymentMode" required onchange="pay(this.value)">
	 
	 <option value="Cash"><b>Cach</b></option>
	 <option value="Cheque"><b>Cheque</b></option>
	</select>
	<input type="hidden" value="<?php echo $tot;?>" name="total_amount">
	</div>
	<div class="form-group">
	<label><b>Balance:</b></label>
	<input class="form-control col-md-" id="balanceAmount" required name="balanceAmount" type="number"  value="0" onchange="" aria-describedby="nameHelp" placeholder="" disabled>
	<input class="form-control col-md-" id="balanceAmountHidden" required name="balanceAmountHidden" type="hidden"  value="0" onchange="" aria-describedby="nameHelp" placeholder="" >
      </div>
	
	 <!--<input type="text" id="balanceAmount"name="balanceAmount" value="23" class="form-control">-->
	
   
		 	
		  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="addOrderButton" type="submit" ><i class='fa fa-print'></i>Print</button>
			
			
            
          </div>
		   </form>
        </div>
      </div>
    </div>
	<!-- update Modal-->
    <div class="modal fade" id="update_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Customer?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  <div id="datahere">karongo</div>
		  <script>
		  
		   function editCustomerFunc(id){
			   
			   var updiv = document.getElementById("datahere"); //document.getElementById("highodds-details");
			   //alert(id);
			  var details= '&id='+ id;
			$.ajax({
						type: "POST",
                                url: "editcustomer.php",
                                data: details,
                                cache: false,
                                success: function(rsp) {
				
              //then append the result where ever you want like
             // $("#datahere").html(rsp); //data will be containing the vote count which you have echoed from the controller
           updiv.innerHTML =rsp;
		     
                }
            });
		   }
		  </script>
		  
        </div>
      </div>
    </div>
    </div>
	
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
		  <div id="deletedata"> </div>
		  </div>
          
		  <script>
		   function deleteOrderFunc(id,item){
			  alert(id);
			  alert(item);
			   var id = id;
			   var updiv = document.getElementById("deletedata"); //document.getElementById("highodds-details");
			    updiv.innerHTML ='<form method="POST" action="createorders.php"><div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" name="'+ item +'" id="'+ id +'" type="submit" data-dismiss="modal" onclick="deleteFunc(this.id,this.name)">Delete</button></form></div>';
		     
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
