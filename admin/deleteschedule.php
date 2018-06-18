<?php
include('config2.php');
  $id = $_POST['id'];
 //$id = "1";
$result_array = array();

		$result=mysqli_query($condb,"DELETE FROM slaughter_schedule WHERE `animal_id`='".$id."' ");
if ($result) {
//	header("Refresh:0; url=http://localhost/hardware/user.php");
	echo '<script> window.location="schedule.php?delete=True" </script>';
	
	}
	
 else {
    echo  "No Match"; 
}

?>