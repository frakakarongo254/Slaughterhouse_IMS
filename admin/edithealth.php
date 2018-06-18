<?php
include('config.php');
  $id = $_POST['id'];
 //$id = "1";
$result_array = array();

		$brandresult=mysqli_query($conn,"select * from `brand` where `id`='".$id."' ORDER BY id DESC ");
if ($brandresult->num_rows > 0) {
	echo '<form method="POST" action="brand.php"><div class="form-group">';
				while($row = $brandresult->fetch_assoc()) {
				 $categoryName =$row['category'];
				 $brandName =$row['brand_name'];
				 $id =$row['id'];
				//echo $categoryName$row['category_name'];
					
					 $categoryOption= '<option value="'.$categoryName.'">'.$categoryName.'</option>';
					 $brandOption= '<option value="'.$categoryName.'">'.$categoryName.'</option>';
				}
				//echo $data;
				echo '<div class="form-group">
                  <input name="editBrandId" value="'.$id .'" type="hidden">
              
                <label for="brand name"><b>Edit Brand Name:</b></label>
                <input class="form-control" id="category_name" name="edit_brand_name" type="text" aria-describedby="nameHelp" value="'.$brandName.'" placeholder="Edit brand name">
              
              
           
          </div>
				<div class="form-group">
				<label for="category:"><b>Select Status</b></label><select name="edit_brandStatus" class="form-control"><option value="Active">Active</option><option value="Inactive">Inactive</option></select></div>
				
				</div>
				 </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="editBrandButton" type="submit" >Add Brand</button>
          </div></form>';
} else {
    echo  "No Match"; 
}

?>