<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Hardware Manegement System</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet
  
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Hardware System</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="category.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Category</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="brand.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Brand</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="order">
		 <a class="nav-link" href="order.php">
		   <i class="fa fa-fw fa-table"></i>
		   <span class="nav-link-text">Order</span>
		 </a>
		</li>
     
       
       
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
       
        <li class="nav-item">
		
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
   

	<form method="post" action="submit.php">
            
    <div class="form-group fieldGroup">
        <div class="input-group">
            <input type="text" name="name[]" class="form-control" placeholder="Enter name"/>
            <input type="text" name="email[]" class="form-control" placeholder="Enter email"/>
            <div class="input-group-addon"> 
                <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
            </div>
        </div>
    </div>
    
    <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT"/>
    
</form>

<!-- copy of input fields group -->
<div class="form-group fieldGroupCopy" style="display: none;">
    <div class="input-group">
        <input type="text" name="name[]" class="form-control" placeholder="Enter name"/>
        <input type="text" name="email[]" class="form-control" placeholder="Enter email"/>
        <div class="input-group-addon"> 
            <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    //group add limit
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});
</script>
        <?php
	   include('config.php');
	  $rand= rand(10000,20000);
	  $d=strtotime("today");
	   $todaysdate = date("Ymdms", $d);
	echo  $orderId = "cuo-".$rand."".$todaysdate;
	  echo "francis";
	  if ( isset($_POST['addProductButton'])){
   // Do Stuff
 echo"karongo";
  echo"karongo";
	    if( isset($_POST['addProductButton'])and isset($_POST['brandName'])and isset($_POST['categoryName'])){
			echo  $productCategory=$_POST['categoryName'];
			echo  $productSupplier= $_POST['supplierName'];
			echo  $productBrand= $_POST['brandName'];
			 $productName=$_POST['productName'];
			 $productDescription=$_POST['productDescription'];
			 $productQuantity=$_POST['productQuantity'];
			 $productUnit=$_POST['productUnit'];
			 $productPrice=$_POST['productPrice'];
			 $productTax=$_POST['productTax'];
			 $productStatus=$_POST['productStatus'];
			 $productDateEntered=$_POST['productDateEntered'];
			 
	$result=mysqli_query($conn,"insert into `product` (product_name,product_description,category,brand,available_quantity,base_price,tax,status,date_entered,product_supplier,product_unit)
	values('$productName','$productDescription','$productCategory','$productBrand','$productQuantity','$productPrice','$productTax','$productStatus','$productDateEntered','$productSupplier','$productUnit') ");
	//header('Location: '.$_SERVER['PHP_SELF'].'?success');
//exit;

if ($result) {
    // output data of each row
  
header('Location: '.$_SERVER['PHP_SELF'].'?success');
exit;

	//echo json_encode("New user Added successfully");
} else {
    //echo  json_encode("Sorry! something went wrong.Please try again."); 
	echo' <div class="alert alert-success alert-dismissable">
 <button type="button" class="close" data-dismiss="alert"
 aria-hidden="true">
 &times;
 </button>
 Sorry! something went wrong.Please try again.
</div>';
}
    
			
			
			
				
}}
 if(ISSET($_GET['success'])){
echo' <div class="alert alert-success alert-dismissable">
 <button type="button" class="close" data-dismiss="alert"
 aria-hidden="true">
 &times;
 </button>
 Success! New Brand Added successfully.
</div>';

}
	if( isset($_POST['editBrandButton']) and isset($_POST['edit_brand_name']) and isset($_POST['edit_brandStatus'])){
			 $editBrandName=$_POST['edit_brand_name'];
			 $editBrandStatus=$_POST['edit_brandStatus'];
			 $editBrandId=$_POST['editBrandId'];
			 
	$result=mysqli_query($conn,"update `brand` SET brand_name= '".$editBrandName."',status= '".$editBrandStatus."' where `id`='".$editBrandId."' ");
if ($result) {
    // output data of each row
  echo' <div class="alert alert-success alert-dismissable">
 <button type="button" class="close" data-dismiss="alert"
 aria-hidden="true">
 &times;
 </button>
 Success !ID '.$editBrandId.'  updated successfully.
</div>';
	//echo json_encode("New user Added successfully");
} else {
    echo  json_encode("Sorry! something went wrong.Please try again."); 
}
    
			
			
			
				
			}
			
	  
	    
	   ?>
	   <script>
	   
		   function deleteFunc(id){
			   
			   var id = id;
			   var updiv = document.getElementById("message"); //document.getElementById("highodds-details");
			   //alert(id);
			  var details= '&id='+ id;
			$.ajax({
						type: "POST",
                                url: "http://localhost/hardware/deletebrand.php",
                                data: details,
                                cache: false,
                                success: function(rsp) {
				//location.reload();
              //then append the result where ever you want like
             // $("#datahere").html(rsp); //data will be containing the vote count which you have echoed from the controller
			// var updiv = document.getElementById("message"); //document.getElementById("highodds-details");
           updiv.innerHTML =rsp;
		   
		   
                }

				
            });
			 
		   }
		  </script>
		  	
	   <div id="message"></div>
      <hr>
      <!-- Icon Cards-->
            <div class="card mb-3">
        <div class="card-header" style="text-align:">
		<div class="row">
		  <div class="col-md-8">Brand List</div>
		  <div class="col-md-4 col-pull-right" style="text-align:right"><a class="btn btn-primary" href="login.html" data-toggle="modal" data-target="#product_modal">Add Product</a></div>
		</div>
		
          </div>
        <div class="card-body">
          <?php
		
		include('config.php');
		$result_array = array();

		$result=mysqli_query($conn,"select * from `product` where `id`!=' ' ORDER BY id DESC ");
if ($result->num_rows > 0) {
    // output data of each row
    
		?>
		
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Category Name</th>
                  <th>Brand</th>
                  <th>Product Name</th>
                  <th>Qunatity</th>
                  <th>Entered on</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Category Name</th>
                  <th>Brand</th>
                  <th>Product Name</th>
                  <th>Qunatity</th>
                  <th>Entered Date</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
              <tbody>
			  
			  <?php
			  while($row = $result->fetch_assoc()) {
				  $id=$row["id"];
		echo '<form method="POST" action="testing.php" role="form"><tr>
		 <td>';
		  echo $id= $row["id"].
		  '</td><td>'
		  .$row["category"].
		   '</td>
		   <td>'.$row["brand"].'</td>
		   <td>'.$row["product_name"].'</td>
		   <td>'.$row["available_quantity"].'</td>
		   <td>'.$row["date_entered"].'</td>
		   <td><span class="badge btn-success">'.$row["status"].'</span>' ;
		   // delete and edit category button
		 echo"</td><td>	 <button class='btn btn-warning' href='' data-toggle='modal' type='submit' data-target='#update_brand_modal' value='' name='updateid'  onclick='editBrandFunc(".$row["id"].")' >Update</button>";
		  
		 echo "</td><td><button class='btn btn-danger' href='' data-toggle='modal' type='submit' data-target='#delete_brand_modal' value='' name='deleteBrandbutton'  onclick='deleteBrandFunc(".$row["id"].")' >Delete</button>";
		  //echo "<button class='btn btn-warning' href='' data-toggle='modal' type='submit' data-target='#delete_user' value='' name='updateid'  onclick='editUserFunc(" ; echo $id .")' >Delete</button>";
		 echo '</td>
		</tr></form>';
		
		array_push($result_array, $row);
		


    }
	
} else {
    echo  json_encode("No Match"); 
}
			  ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
           
     
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Add product list Modal-->
    <div class="modal fade" id="product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  <?php
		  
				
		  //include()
		  $resultSupplier=mysqli_query($conn,"select * from `supplier` where `supplier_status`='Active' ORDER BY id DESC ");
		  //$resultCategory=mysqli_query($conn,"select * from `brand` where `status`='Active' ORDER BY id DESC ");
		  //$resultCategory=mysqli_query($conn,"select * from `category` where `status`='Active' ORDER BY id DESC ");
		  
			if ($resultSupplier->num_rows > 0) {
				
				echo '<form method="POST" action="testing.php"><div class="form-group"><label for="category:"><b>Select Supplier</b></label><select name="supplierName" class="form-control" required>';
				while($row = $resultSupplier->fetch_assoc()) {
					
				 echo $supplierName =$row['supplier_name'];
				 //echo $categoryName =$row['category_name'];
				 //echo $categoryName =$row['brand_name'];
				//echo $categoryName$row['category_name'];
				    
					
					 echo '<option value="'.$supplierName.'">'.$supplierName.'</option>';
				}
				// select from brand where category is the one select above
				
				//echo $data;
				echo '</select></div>';
				$resultCategory=mysqli_query($conn,"select * from `category` where `status`='Active' ORDER BY id DESC ");
				if ($resultCategory->num_rows > 0) {
					echo '<div class="form-group"><label for="category:"><b>Select Category</b></label>
				<select name="categoryName" class="form-control" onchange="checkbrand(this.value)" ><option>--Select Category--</option>';
					while($row = $resultCategory->fetch_assoc()) {
						echo $categoryNameName =$row['category_name'];
						echo '<option value="'.$categoryNameName.'" >'.$categoryNameName.'</option>';
				}
				 
				
				echo '</select>
				</div>';?>
				<script type="text/javascript">
				function checkbrand(categoryName){
					 
					  var updiv = document.getElementById('selectBrandoption');
					 var details= '&id='+ categoryName;
			$.ajax({
						type: "POST",
                                url: "http://localhost/hardware/selectbrandcategory.php",
                                data: details,
                                cache: false,
                                success: function(rsp) {
				
              //then append the result where ever you want like
             // $("#datahere").html(rsp); //data will be containing the vote count which you have echoed from the controller
			 
			 var data= '<div class="form-group"><label for="category:"><b>Select Brand </b></label><select name="brandName" class="form-control" >'+ rsp +'</select></div>';
          
		   updiv.innerHTML =data;
		   
		     
                }
            });
				 }
				 //checkbrand();
				 </script>
				 <div id="selectBrandoption"><div class="form-group"><label for="category:"><b>Select Brand </b></label>
				<select name="brand_status" class="form-control"><div id="brandoption"> </div></select>
				</div></div>
				<div class="form-group"><label for="category:"><b>Product Status </b></label><select name="productStatus" class="form-control" ><option value="Active">Active</option><option value="Inactive">Inactive</option></select></div>
				<div class="form-group">
            
              
                <label for="brand name"><b>Enter Product Name:</b></label>
                <input class="form-control" id="productName" required name="productName" type="text" aria-describedby="nameHelp" placeholder="Enter product name">
                       
          </div> 
		  <div class="form-group">
            
              
                <label for="product description"><b>Enter Product Description:</b></label>
                <textarea class="form-control" id="productDescription" name="productDescription" required type="text" aria-describedby="nameHelp" placeholder="Enter product description "> </textarea>
                       
          </div>
		  
		  <div class="form-group">
			  <div class="row">
			   <div class="col-md-8">
				   <label for="brand name"><b>Enter Product Quantity:</b></label>
				   <input class="form-control" name="productQuantity" type="digit" required>
			   </div>
			   <div class="col-md-4">
				   <label for="brand name"><b>Select Unit:</b></label>
					<select class="form-control" name="productUnit" required><option value="Kg">Kg</option><option value="pcs">pcs</option></select>
			   </div>
			  </div>
		  
		  </div>
		 <div class="form-group">
            
              
                <label for="base price"><b>Enter Product Base Price:</b></label>
                <input class="form-control" id="ProductPrice" name="productPrice" required type="digit" aria-describedby="nameHelp" placeholder="Enter base price">
                   
          </div>
		  <div class="form-group">
            
              
                <label for="base price"><b>Enter Product Tax (%):</b></label>
                <input class="form-control" id="productTax" required name="productTax" type="digit" aria-describedby="nameHelp" placeholder="Enter product tax">
                   
          </div> 
		  <div class="form-group">
            
              
                <label for="base price"><b>Enter Date:</b></label>
                <input class="form-control" id="productDateEntered" required name="productDateEntered" type="date" aria-describedby="nameHelp" placeholder="Enter product tax">
                   
          </div>
 
 
		  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="addProductButton" type="submit" >Add Product</button>
          </div></form>
				<?php
				
				}
				;
			}else{
				echo "no such name";
			}
		  
		  ?>
		  
		
        </div>
      </div>
    </div>
	<!-- update Modal-->
    <div class="modal fade" id="update_brand_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">update item?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  <div id="datahere">karongo</div>
		  <script>
		  
		   function editBrandFunc(id){
			   
			   var updiv = document.getElementById("datahere"); //document.getElementById("highodds-details");
			   //alert(id);
			  var details= '&id='+ id;
			$.ajax({
						type: "POST",
                                url: "http://localhost/hardware/editbrand.php",
                                data: details,
                                cache: false,
                                success: function(rsp) {
				
              //then append the result where ever you want like
             // $("#datahere").html(rsp); //data will be containing the vote count which you have echoed from the controller
           updiv.innerHTML =rsp;
		     
                }
            });
		   }
		  </script>
		  
        </div>
      </div>
    </div>
    </div>
	<!-- Delete category Modal-->
    <div class="modal fade" id="delete_brand_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete item?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  
		  Are you sure you want to delete this item?.<br>
		  <div id="deletedata"></div>
		  </div>
          
		  <script>
		   function deleteBrandFunc(id){
			  
			   var id = id;
			   var updiv = document.getElementById("deletedata"); //document.getElementById("highodds-details");
			    updiv.innerHTML ='<form method="POST" action="brand"><div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" name="deletebuttonFunc" id="'+ id +'" type="submit" data-dismiss="modal" onclick="deleteFunc(this.id)">Delete</button></form></div>';
		     
		   }
		  </script>
		  
            
          
        </div>
      </div>
    </div>
	<!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
	
  </div>
</body>

</html>
