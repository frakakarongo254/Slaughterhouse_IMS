<?php
include('config.php');
  echo $id = $_POST['id'];
  echo $productName= $_POST['name'];
 //$id = "1";
$result_array = array();

		$result=mysqli_query($conn,"DELETE FROM temp_table WHERE `order_id`='".$id."' and `item`='".$productName."' ");
if ($result) {
//	header("Refresh:0; url=http://localhost/hardware/user.php");
	//echo '<script> window.location="createorder.php?transactionId='.$orderId.'" </script>';
	echo '<script> window.location="createorder.php?orderId='.$id .'" </script>';
	echo' <div class="alert alert-success alert-dismissable">
 <button type="button" class="close" data-dismiss="alert"
 aria-hidden="true">
 &times;
 </button>
 You have successfully deleted an item.
</div>';
	}
	
 else {
    echo  "No Match"; 
}

?>