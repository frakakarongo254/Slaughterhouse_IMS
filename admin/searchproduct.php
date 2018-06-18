<?php
include('config2.php');
   $name = $_POST['name'];
   
 //$id = "1";
$result_array = array();

		$customerresult=mysqli_query($condb,"select * from `animal_category` where `meat_name` LIKE '%{$name}%' ");

	
				while($row = $customerresult->fetch_array()) {
				 
				// echo $array = $row['product_name']."<br>";
				 echo "<a href='#' style='text-decoration:none;'><div id='link' onClick='addText(\"".$row['meat_name']."\");' style='display:block;color:black;font-style:bold;background-color:white'><b>" . $row['meat_name'] . "</br></div><a>";
				}
				//echo $array;
				//echo $data;
				


?>