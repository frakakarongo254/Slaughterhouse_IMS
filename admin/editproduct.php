
<?php
 include('config.php');
 include('config2.php');
   $productId = $_POST['id'];
// $id = "1";
$result_array = array();

				
		  //include()
		  $resultSupplier=mysqli_query($conn,"select * from `supplier` where `supplier_status`='Active' ORDER BY id DESC ");
		  //$resultCategory=mysqli_query($conn,"select * from `brand` where `status`='Active' ORDER BY id DESC ");
		  //$resultCategory=mysqli_query($conn,"select * from `category` where `status`='Active' ORDER BY id DESC ");
		  
			if ($resultSupplier->num_rows > 0) {
				
				echo '<form method="POST" action="product.php"><div class="form-group"><label for="category:"><b>Select Supplier</b></label><select name="editProductSupplier" class="form-control" required>';
				while($row = $resultSupplier->fetch_assoc()) {
					
				  $supplierName =$row['supplier_name'];
				 //echo $categoryName =$row['category_name'];
				 //echo $categoryName =$row['brand_name'];
				//echo $categoryName$row['category_name'];
				    
					
					 echo '<option value="'.$supplierName.'">'.$supplierName.'</option>';
				}
				// select from brand where category is the one select above
				
				//echo $data;
				echo '</select></div>';
				$resultCategory=mysqli_query($condb,"select * from `animal_category` where `status`='Active' ORDER BY id DESC ");
				if ($resultCategory->num_rows > 0) {
					echo '<div class="form-group"><label for="category:"><b>Select Category</b></label>
					
				<select name="editProductCategory" class="form-control" onchange="editSelectBrandInCategory(this.value)" ><option>--Select Category--</option>';
					while($row = $resultCategory->fetch_assoc()) {
						 $categoryName =$row['category_name'];
						echo '<option value="'.$categoryName.'" >'.$categoryName.'</option>';
				}
				 
				
				echo '</select>
				</div>';
				 $resultProduct=mysqli_query($condb,"select * from `animal` where `id`='".$productId."' ORDER BY id DESC ");
				 if ($resultProduct->num_rows > 0) {
					 while($row = $resultProduct->fetch_assoc()) {
						  $editanimalId =$row['id'];
						  $editAnimalId =$row['animal_id'];
						 
						  $editDateEntered =$row['supply_date'];
						  $editBuyingPrice =$row['buying_price'];
						 ;
					 }
				 
				?>
				
				
				 
				<div class="form-group">
           
              
                <label for="brand name"><b>Enter Animal ID:</b></label>
                <input class="form-control" value="<?php echo $editAnimalId;?>" id="animalId" required name="animalId" type="text" aria-describedby="nameHelp" placeholder="Enter animal id" >
                       
          </div> 
		
		 
		 <div class="form-group">
            
              
                <label for="base price"><b>Enter Animal Buying Price:</b></label>
                <input class="form-control" id="editAnimalBuyingPrice" value="<?php echo $editBuyingPrice;?>"  name="editAnimalBuyingPrice" required type="number" min="1" aria-describedby="nameHelp" placeholder="Enter Buying price">
                   
          </div>
	 
		
 
		  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="editProductButton" type="submit" >Edit Animal</button>
          </div></form>
				<?php
				
			}}
				;
			}else{
				echo "no such name";
			}
		  
		  ?>