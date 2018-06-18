<?php
include('config.php');
  $id = $_POST['id'];
 //$id = "1";
$result_array = array();

		$result=mysqli_query($conn,"DELETE FROM customer WHERE `id`='".$id."' ");
if ($result) {
//	header("Refresh:0; url=http://localhost/hardware/user.php");
	
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