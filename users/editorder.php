<?php
include('config.php');

  $id = $_POST['id'];
 //$id = "1";
$result_array = array();

		$customerresult=mysqli_query($conn,"select * from `order_transaction` where `transaction_id`='".$id."'  ");
if ($customerresult->num_rows > 0) {
	
				while($row = $customerresult->fetch_assoc()) {
				  $dueAmount=$row['due_amount'];
				  $code=$row['transaction_id'];
				  $DbPaidAmount=$row['paid_amount'];
			
			echo '<form method="POST" action="order.php">
	      <div class="form-group">
		  <label for="brand name" class="col-md-"><b>Due Amount:</b></label>
		  <input class="form-control col-md-" id="dueAmount" required name="dueAmount" type="number" min="0" value="'.$dueAmount.'" onchange="" aria-describedby="nameHelp" placeholder="" disabled>
		  <input type="hidden" name="code" value="'.$code.'">
		  <input type="hidden" name="dueAmount" value="'.$dueAmount.'">
		  <input type="hidden" name="dbPaidAmount" value="'.$DbPaidAmount.'">
	    </div>
		  <div class="form-group">
            
                <label for="pay Amount" class="col-md-6"><b>Pay amount:</b></label>
                <input class="form-control col-md-" id="paid_amount" required name="paid_amount" type="number" min="0" onchange="calDueAmount(this.value)" aria-describedby="nameHelp" placeholder="">
                       
          </div> 
		 
		  <div class="form-group">
		  <label for="paymentMode"><b>Select Payment Mode</b></label>
	<select class="form-control" name="paymentMode" id="paymentMode" type="text" required onchange="pay(this.value)">
	 
	 <option value="Cash"><b>Cach</b></option>
	 <option value="Cheque"><b>Cheque</b></option>
	</select>
	<input type="hidden" value="<?php echo $tot;?>" name="total_amount">
	</div>
	
   
		 	
		  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="EditOrderButton" type="submit" >Edit</button>
			
            
          </div>
		   </form>';
			
				}
				
				
} else {
    echo  "No Match"; 
}

?>