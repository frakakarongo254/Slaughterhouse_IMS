<?php
include('config.php');
    $id = $_POST['id'];
   $quantity = $_POST['quantity'];
 //$id = "1";
//$result_array = array();

		$dbresult=mysqli_query($conn,"update `product` SET available_quantity= '".$quantity."' WHERE `id`='".$id."' ");
		
if ($dbresult) {

	echo '<script> window.location="product.php?insert=True" </script>';
	}
	
 else {
    echo  "No Match"; 
}

?>