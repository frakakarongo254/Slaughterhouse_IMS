<?php
include('config2.php');
  $id = $_POST['id'];
 //$id = "1";
$result_array = array();

		$result=mysqli_query($condb,"select * from `animal_category` where `id`='".$id."' ORDER BY id DESC ");
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		$edit_category_name =$row['category_name'];
		$editCategoryId =$row['id'];
		$edit_category_status =$row['status'];
		$editMeatName =$row['meat_name'];
		$editSelling_price =$row['selling_price'];
		
		array_push($result_array, $row);
		//$data ='<div><form><div class="form-group"><lable for="username"><b>Username:</b></label><input class="form-control" name="username" value="'.$username.'" type="text"/></div></form></div>';
	     $data=' <form method="POST" action="category.php">
          <div class="form-group">  
              <input name="$editCategoryId" value="'.$editCategoryId.'" type="hidden">		  
                <label for="exampleInputName"><b>Enter category Name</b></label>
                <input class="form-control" id="edit_category_name" name="edit_category_name" value="'.$edit_category_name.'" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required>
               </div>
			   <div class="form-group">           
                <label for="exampleInputName"><b>Enter Meat Name</b></label>
                <input class="form-control" id="editMeatName" name="editMeatName" value="'.$editMeatName.'" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required>
               </div>
			   <div class="form-group">           
                <label for="exampleInputName"><b>Enter Selling Price</b></label>
                <input class="form-control" id="editSellingPrice" name="editSellingPrice" value="'.$editSelling_price.'" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required>
               </div>
			   <div class="form-group">
              <select name="edit_category_status" class="form-control" value="'.$edit_category_status.'"required>
			  <option value="Active">Active</option>
			  <option value="Inactive">Inactive</option>
			  </select>
              
           
          </div>
          
          <input name=" editCategoryId" value="'.$editCategoryId.'" type="hidden">
       
		  </div>
          <div class="modal-footer">
            
			<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="editCategoryButton" type="submit" >Edit Category</button>
          </div>
		   </form>
		 ';
	}
	echo $data;//json_encode($data);
} else {
    echo  "No Match"; 
}

?>