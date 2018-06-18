<?php
include('config.php');
  $id = $_POST['id'];
 //$id = "1";
$result_array = array();

		$supplierresult=mysqli_query($conn,"select * from `supplier` where `id`='".$id."' ORDER BY id DESC ");
if ($supplierresult->num_rows > 0) {
	
				while($row = $supplierresult->fetch_assoc()) {
				 
				 $id =$row['id'];
				  $address =$row['supplier_address'];
				//echo $categoryName$row['category_name'];
					
					 
					 $data='<form role="form" class="form-vertical" method="POST" action="supplier.php" >
		  
		     <div class="form-group">
            <label for="exampleInputEmail1"><b>Supplier Name:</b></label>
            <input class="form-control" id="supplierName" name="editSupplierName" value="'.$row['supplier_name'].'" required type="text" aria-describedby="nameHelp" placeholder="Enter Spplier Name">
          </div>
		  <div class="form-group">
            <label for="exampleInputEmail1"><b>Supplier address:</b></label>
            <textarea class="form-control" id="supplierAddress" name="editSupplierAddress" value="'.$row['supplier_address'].'" type="textarea" aria-describedby="addressHelp" placeholder="Enter supplier Address" required>'.$row['supplier_address'].'</textarea>
          </div> 
		  <div class="form-group">
            <label for="exampleInputEmail1"><b>Supplier Contact 1:</b></label>
            <input class="form-control" id="supplierContact1" name="editSupplierContact1" type="telphone" value="'.$row['supplier_contact_one'].'" aria-describedby="contactHelp" placeholder="Enter supplier contact 1" required>
          </div>
		  <div class="form-group">
            <label for="exampleInputEmail1"><b>Supplier Contact 2:(optional)</b></label>
            <input class="form-control" id="supplierContact2" name="editSupplierContact2" value="'.$row['supplier_contact_two'].'"  type="telphone" aria-describedby="contactHelp" placeholder="Enter supplier contact 2" >
          </div>
		  <div class="form-group">
            <label for="status"><b>Status:</b></label>
            <select name="editSupplierStatus" class="form-control" value="'.$row['supplier_status'].'"  required>
			 <option value="Active">Active</option>
			 <option value="Inactive">Inactive</option>
			</select>
			<input name="editSupplierId" value="'.$id .'" type="hidden">
          </div>
		 	 
		  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="editSupplierButton" type="submit" >Edit Supplier</button>
            
			
            
          </div>
		   </form>';
				}
				echo $data;
				
} else {
    echo  "No Match"; 
}

?>