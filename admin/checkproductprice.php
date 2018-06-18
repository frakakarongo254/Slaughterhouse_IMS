<?php
include('config.php');
   $productName = $_POST['productName'];
   $quantity = $_POST['avalQuantity'];
 //$id = "1";
$result_array = array();

		$customerresult=mysqli_query($conn,"select * from `product` where `product_name`='".$productName."' ");
if ($customerresult->num_rows > 0) {
	
				while($row = $customerresult->fetch_assoc()) {
				 
				 //$id =$row['brand_name'];
				  $price =$row['base_price'];
				  $aval_quantity =$row['available_quantity'];
				  if($quantity > $aval_quantity){
					  echo "only ". $aval_quantity." of ".$productName." remaining ";
					  
				  }else{
					  echo "lesss than";
				  }
				//echo $categoryName$row['category_name'];
					
					 
					//echo $price;
				}
				//echo $data;
				
} else {
    echo  "No Match"; 
}

?>