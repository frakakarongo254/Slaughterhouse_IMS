<?php
include('config.php');
  $id = $_POST['id'];
 // $id = "23";
$result_array = array();

		$result=mysqli_query($conn,"select * from `product` where `id`='".$id."'  ");
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
	  $viewProductId =$row['id'];
	  $viewProductName =$row['product_name'];
	  $viewProductDescription =$row['product_description'];
	  $viewProductQuantity =$row['available_quantity'];
	  $viewProductCategory =$row['category'];
	  $viewProductUnit =$row['product_unit'];
	  $viewProductTax =$row['tax'];
	  $viewProductDateEntered =$row['date_entered'];
	  $viewProductPrice =$row['selling_price'];
	  $viewProductBrand =$row['brand'];
	  $viewProductStatus =$row['status'];
	  $viewProductEnteredBy =$row['entered_by'];
	  $viewProductSupplier =$row['product_supplier'];
	  //$viewEnteredBy =$row['entered_by'];

		array_push($result_array, $row);
		//$data ='<div><form><div class="form-group"><lable for="username"><b>Username:</b></label><input class="form-control" name="username" value="'.$username.'" type="text"/></div></form></div>';
	     $data=' <table class="table ">
 <caption></caption>
 <thead>
 
 </thead>
 <tbody>
 <tr>
 <td><b>Product Name</b></td>
 <td>'.$viewProductName.'</td>
 
 </tr>
 <tr>
 <td><b>Product Supplier</b></td>
 <td>'.$viewProductSupplier.'</td>
 
 </tr>
 <tr>
 <td><b>Product Description</b></td>
 <td>'.$viewProductDescription.'</td>
 
 </tr>
 <tr>
 <td><b>Category</b></td>
 <td>'.$viewProductCategory.'</td>
 
 </tr>
 <tr>
 <td><b>Brand</b></td>
 <td>'.$viewProductBrand.'</td>
 
 </tr>
 <tr>
 <td><b>Available Quantity</b></td>
 <td>'.$viewProductQuantity.'</td>
 
 </tr>
 <tr>
 <td><b>Selling Price</b></td>
 <td>'.$viewProductPrice.'</td>
 
 </tr>
 
 <tr>
 <td><b>Entered by</b></td>
 <td>'.$viewProductEnteredBy.' </td>
 
 </tr>
 <tr>
 <td><b>Status</b></td>
 <td>'.$viewProductStatus.'</td>
 
 </tr>
 
 
 </tbody>
</table>
		 ';
	}
	echo $data;//json_encode($data);
} else {
    echo  "No Match"; 
}

?>