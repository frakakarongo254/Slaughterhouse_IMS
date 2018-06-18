<?php
include('config.php');
   $id = $_POST['id'];
 //$id = "1";
$result_array = array();

		$customerresult=mysqli_query($conn,"select brand_name from `brand` where `category`='".$id."' and `status`='Active' ORDER BY id DESC ");
if ($customerresult->num_rows > 0) {
	
				while($row = $customerresult->fetch_assoc()) {
				 
				 //$id =$row['brand_name'];
				  $brand_name =$row['brand_name'];
				//echo $categoryName$row['category_name'];
					
					 
					echo '<option value="'.$brand_name.'">'.$brand_name.'</option>';
				}
				//echo $data;
				
} else {
    echo  "No Match"; 
}

?>