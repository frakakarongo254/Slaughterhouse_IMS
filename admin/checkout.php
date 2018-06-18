<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Receipt</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body onload="javascript:window.print()">
<div class="container-fluid">

<?php
include('config2.php');
$vat_sql = mysqli_query($condb,"select * from company_details  ");
   
   $compRow = mysqli_fetch_array($vat_sql,MYSQLI_ASSOC);
   
    $companyName = $compRow['name'];
    $companyAddress = $compRow['address'];
    $companyPhone = $compRow['phone'];
if(isset($_GET['transactionId'])){
	$transactionCode =$_GET['transactionId'];
	include('config.php');
		$result_array = array();
$result=mysqli_query($condb,"SELECT booking_details.price,booking_details.pick_date,booking_details.total,booking_details.item, transaction.balance_amount, transaction.paid_amount, transaction.due_amount, transaction.discount,transaction.grand_total,transaction.customer_name,transaction.vat,booking_details.quantity FROM `booking_details` INNER JOIN transaction ON booking_details.transaction_id=transaction.transaction_id WHERE (booking_details.transaction_id ='".$transactionCode."' and transaction.transaction_id ='".$transactionCode."')");
	//$result=mysqli_query($conn,"select * from `order_details` where `transaction_id`='".$transactionCode."'  ");mysqli_query($conn,"select * from `order_transaction` where `transaction_id`='".$transactionCode."' ");
if ($result->num_rows > 0) {
    // output data of each row
 $clientresult= mysqli_query($condb,"select * from `transaction` where `transaction_id`='".$transactionCode."' ");
 if ($clientresult->num_rows > 0) {
	 while($row = $clientresult->fetch_assoc()) {
		 $ClientName=$row['customer_name'];
		 $d=strtotime("today");
	        $todaysdate = date("d/m/Y", $d);
		 
	 }
 }
		?>
	<table class="table">
 <thead>
 <tr>
 <th colspan="6"><b><?php echo $companyName."<br>". $companyAddress ."<br>". $companyPhone;?></b></th>
 <th></th>
 
 <th style="margin-right:100px"><?php echo $ClientName."<br> Receipt #: ".$transactionCode ."<br> Date: " . $todaysdate ;?></th>
 </tr>
 </thead>
 </table>
	<table class="table">
 <thead>
 <tr>
 <th>Date to pick</th>
 <th>Item</th>
 <th>Quantity</th>
 <th>Price</th>
 <th>Total</th>
 </tr>
 </thead>
 <tbody>
          
			  <?php
			  $tot=0;
			  while($rows = $result->fetch_assoc()) {
				  $vat=$rows["vat"];
				  $dueAmount=$rows["due_amount"];
				  $Balance=$rows["balance_amount"];
				  $paidAmount=$rows["paid_amount"];
			  $customer_name=$rows["customer_name"];
			  $grand_total=$rows["grand_total"];
			  $discount=$rows["discount"];
			  $pick_date=$rows["pick_date"];
		echo '<form method="POST" action="createorder.php" role="form" name="form1" id="form1s"><tr>
		 <td>'.$rows["pick_date"] .'</td><td>'
		  .$rows["item"].
		   '</td>
		   
		   <td>'.$rows["quantity"].'</td>
		   <td>'.$rows["price"].'</td>
		   
		   <td>'.$rows["total"] ;
		   // delete and edit category button
		 echo"</td>
		  
		 
		</tr>
		
		</form>";
		
		//array_push($result_array, $row);
		
 $tot+=$rows['total'];
 

    }
	?>
	  <tr>
       
         
         
		 
       	
         <td rowspan="7" colspan="2"></td>		
         <td rowspan="" colspan=""><b>Sub total</b></td>		
         <td><b>Ksh  <?php echo $tot;?></b></td>		
         
		</tr>
		<tr>
		
         
		 
         <td ><b>Tax</b></td>		
         <td><b>Ksh  <?php echo $vat;?></b></td>		
         	
		</tr>
		<tr>
		
		 
         <td ><b>Discount</b></td>		
         <td><b>Ksh  <?php echo $discount;?></b></td>		
         	
		</tr>
		<tr>
		
         
		 
         <td ><b>Grand Total</b></td>		
         <td><b>Ksh  <?php echo $grand_total;?></b></td>		
	
		</tr>
		<tr>
		
         
		 
         <td ><b>Paid Amount</b></td>		
         <td><b>Ksh  <?php echo $paidAmount;?></b></td>		
	
		</tr>
		<tr>
		
         
		 
         <td ><b>Due Amount</b></td>		
         <td><b>Ksh  <?php echo $dueAmount;?></b></td>		
	
		</tr>
		<tr>
		
         
		 
         <td ><b>Balance Amount</b></td>		
         <td><b>Ksh   <?php echo  $Balance;?></b></td>		
	
		</tr>
		
		</tbody>
		
</table>
		<?php
} else {
    //echo  json_encode("No Match"); 
}
	
}else{
	echo"not yet";
}


?>
</div>
</body>
</html>