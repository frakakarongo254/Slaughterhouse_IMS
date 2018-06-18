<?php
include('config.php');
  $id = $_POST['id'];
 //$id = "1";
$result_array = array();

		$customerresult=mysqli_query($conn,"select * from `customer` where `id`='".$id."' ORDER BY id DESC ");
if ($customerresult->num_rows > 0) {
	
				while($row = $customerresult->fetch_assoc()) {
				 
				 $id =$row['id'];
				  $address =$row['customer_address'];
				//echo $categoryName$row['category_name'];
					
					 
					 $data='<form role="form" class="form-vertical" method="POST" action="customer.php" >
		  
		     <div class="form-group">
            <label for="exampleInputEmail1"><b>Customer Name:</b></label>
            <input class="form-control" id="editCustomerName" name="editCustomerName" value="'.$row['customer_name'].'" required type="text" aria-describedby="nameHelp" placeholder="Enter customer Name">
          
		  </div>
		  <div class="form-group">
            <label for="exampleInputEmail1"><b>Customer address:</b></label>
            <textarea class="form-control" id="editCustomerAddress" name="editCustomerAddress" value="'.$row['customer_address'].'" type="text" aria-describedby="addressHelp" placeholder="Enter customer Address" required>'.$row['customer_address'].'</textarea>
          </div>
		  <div class="form-group">
            <label for="exampleInputEmail1"><b>Customer Email:</b></label>
           <input class="form-control" id="editCustomerEmail" name="editCustomerEmail" value="'.$row['customer_email'].'" required type="email" aria-describedby="nameHelp" placeholder="Enter customer email">
          
		  </div> 
		  <div class="form-group">
            <label for="exampleInputEmail1"><b>Customer Contact 1:</b></label>
            <input class="form-control" id="editCustomerContact1" name="editCustomerContact1" value="'.$row['customer_contact_one'].'" type="number" min="0" aria-describedby="contactHelp" placeholder="Enter customer contact 1" required>
          </div>
		  <div class="form-group">
            <label for="exampleInputEmail1"><b>Customer Contact 2:(optional)</b></label>
            <input class="form-control" id="editCustomerContact2" name="editCustomerContact2" value="'.$row['customer_contact_two'].'" type="number" min="0" aria-describedby="contactHelp" placeholder="Enter customer contact 2" >
          </div>
		  <div class="form-group">
		  
		  <input  name="editCustomerId" type="hidden" value="'.$row['id'].'">
            <label for="status"><b>Customer Status:</b></label>
            <select name="editCustomerStatus" class="form-control" value="'.$row['customer_status'].'" required>
			 <option value="Active">Active</option>
			 <option value="Inactive">Inactive</option>
			</select>
			
          </div>
		 	 
		  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="editCustomerButton" type="submit" >Edit Customer</button>
            
			
            
          </div>
		   </form>';
				}
				echo $data;
				
} else {
    echo  "No Match"; 
}

?>