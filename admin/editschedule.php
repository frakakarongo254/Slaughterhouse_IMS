<?php
include('config2.php');
  $id = $_POST['id'];
 //$id = "1";
$result_array = array();

		$brandresult=mysqli_query($condb,"select * from `slaughter_schedule` where `animal_id`='".$id."' ORDER BY id DESC ");
if ($brandresult->num_rows > 0) {
	echo '<form method="POST" action="schedule.php"><div class="form-group">';
				while($row = $brandresult->fetch_assoc()) {
				 $slaughterDate =$row['slaughter_date'];
				 $animalId =$row['animal_id'];
				 $id =$row['id'];
				//echo $categoryName$row['category_name'];
					
					// $categoryOption= '<option value="'.$categoryName.'">'.$categoryName.'</option>';
					// $brandOption= '<option value="'.$categoryName.'">'.$categoryName.'</option>';
				}
				//echo $data;
				echo ' <div class="form-group">            
                <label for="date"><b>Animal Id:</b></label>
				<input type="text" name="editAnimalId" class="form-control" value="'.$animalId.'" readonly>
                
			  </div>
			  <div class="form-group">            
                <label for="date"><b>Edit Date of Slaughter:</b></label>
				<input type="hidden" name="editAnimalId" value="'.$animalId.'">
                <input type="date" name="editslaughterDate" class="form-control" value="'. $slaughterDate .'">
			  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="editSlaughterScheduleButton" type="submit" >Edit</button>
          </div></form>';
} else {
    echo  "No Match"; 
}

?>