<?php
include('config2.php');
  $id = $_POST['id'];
 // $id = "23";
$result_array = array();
  $query=mysqli_query($condb,"select * from `slaughter_schedule` where `animal_id`='".$id."'  ");
  if ($query->num_rows > 0) {
  while($rows = $query->fetch_assoc()){
	   $viewSlaughterDate =$rows['slaughter_date'];
	  
  }
		$result=mysqli_query($condb,"select * from `animal` where `animal_id`='".$id."'  ");
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
	  $viewProductId =$row['id'];
	  $viewName =$row['animal_type'];
	  
	 // $viewProductTax =$row['tax'];
	  $viewDateEntered =$row['supply_date'];
	  $viewBuyingPrice =$row['buying_price'];
	 
	  $viewStatus =$row['status'];
	 // $viewEnteredBy =$row['entered_by'];
	  $viewSupplier =$row['supplier_id'];
	  //$viewEnteredBy =$row['entered_by'];

		array_push($result_array, $row);
		//$data ='<div><form><div class="form-group"><lable for="username"><b>Username:</b></label><input class="form-control" name="username" value="'.$username.'" type="text"/></div></form></div>';
	     $data=' <table class="table ">
 <caption></caption>
 <thead>
 
 </thead>
 <tbody>
 <tr>
 <td><b>Animal Category</b></td>
 <td>'.$viewName.'</td>
 
 </tr>
 <tr>
 <td><b>Animal Supplier</b></td>
 <td>'.$viewSupplier.'</td>
 
 </tr>
 
 <tr>
 <td><b>Slaughter Date</b></td>
 <td>'. $viewSlaughterDate.'</td>
 
 </tr>
 
 
 <tr>
 <td><b>Buying Price</b></td>
 <td>'.$viewBuyingPrice.'</td>
 
 </tr>

 
 
 <tr>
 <td><b>Status</b></td>
 <td>'.$viewStatus.'</td>
 
 </tr>
 
 
 </tbody>
</table>
		 ';
	}
	echo $data;//json_encode($data);
} else {
    echo  "No Match"; 
}
}
?>