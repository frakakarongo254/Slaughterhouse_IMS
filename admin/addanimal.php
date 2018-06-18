<?php
   include('session.php');
   
   if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../index.php');
}
?>
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
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" style="color:white">
    <a class="navbar-brand" href="dashboard.php" style="color:;font-size:20px;"><span class="glyphicon glyphicon-user"></span><i class="fa fa-fw fa-user"></i><b><?php echo $login_session;?></b></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
	<hr>
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="color:white">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php" style="color:white;">
		  
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="category.php" style="color:white;">
            <i class="fa fa-fw fa-folder"></i>
            <span class="nav-link-text">Animal Category</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="schedule.php" style="color:white;">
            <i class="fa fa-fw fa-folder-open"></i>
            <span class="nav-link-text">Slaughter Schedule</span>
          </a>
        </li> 
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="health.php" style="color:white;">
            <i class="fa fa-fw fa-folder-open"></i>
            <span class="nav-link-text">Health Status</span>
          </a>
        </li>
		
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="order">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" style="color:white;" href="#collapseOrder" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span class="nav-link-text">Booking</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseOrder">
            <li>
              <a href="createorder.php" style="color:white;"><i class="fa fa-cart-arrow-down"></i> Create Order</a>
            </li>
            <li>
              <a href="order.php" style="color:white;"><i class="fa fa-list-alt"></i> Manage Order</a>
            </li>
          </ul>
        </li>
      
       
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="addanimal.php" style="color:white;">
            <i class="fa fa-fw fa-list-alt"></i>
            <span class="nav-link-text">Add Animal</span>
          </a>
        </li> 
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="supplier.php" style="color:white;">
            <i class="fa fa-fw fa fa-vcard-o"></i>
            <span class="nav-link-text">Supplier</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="customer.php" style="color:white;">
            <i class="fa fa-fw fa-address-book-o"></i>
            <span class="nav-link-text">Customer</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="user.php" style="color:white;">
            <i class="fa fa-fw fa fa-users"></i>
            <span class="nav-link-text">Users</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="reports.php" style="color:white;">
            <i class="fa fa-fw  fa-area-chart"></i>
            <span class="nav-link-text">Report</span>
          </a>
        </li>
		 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="setting">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" style="color:white;" href="#collapseSetting" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text">Setting</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseSetting">
            <li>
              <a href="editprofile.php" style="color:white;"><i class="fa fa-fw fa-pencil"></i> Edit Profile</a>
            </li>
            <li>
              <a href="companysetup.php" style="color:white;"><i class="fa fa-fw fa-institution"></i> Company </a>
            </li>
          </ul>
        </li>
      </ul>
      
      <ul class="navbar-nav ml-auto">
        
       
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" style="color:white;">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
        <?php
	   include('config.php');
	   include('config2.php');
	  if(isset($_GET['insert'])){
		 echo' <div class="alert alert-success alert-dismissable">
		 <button type="button" class="close" data-dismiss="alert"
		 aria-hidden="true">
		 &times;
		 </button>
		 Success! You have added a new product.
		</div>';   
	   } 
	   if(isset($_GET['delete'])){
		 echo' <div class="alert alert-success alert-dismissable">
 <button type="button" class="close" data-dismiss="alert"
 aria-hidden="true">
 &times;
 </button>
 You have successfully deleted an item.
</div>';
	   }
	  if ( isset($_POST['addAnimalButton'])){
   // Do Stuff
 echo" francis kihiko";
	    if( isset($_POST['addAnimalButton'])and isset($_POST['animalId'])and isset($_POST['animalBuyingPrice'])){
	echo	 $animalType=$_POST['animalType'];
		echo	$animalSupplier= $_POST['supplierName'];
		echo	$animalId= $_POST['animalId'];
			//$productBrand= $_POST['brandName'];
			// $productName=$_POST['productName'];
			
			echo $animalBuyingPrice=$_POST['animalBuyingPrice'];
			
			 $d=strtotime("today");
	   $dateEntered = date("Y-m-d", $d);
	   $similarityResult=mysqli_query($condb,"select * from `animal` where `animal_id`='".$animalId."'");
if ($similarityResult->num_rows > 0) {
	
	echo' <div class="alert alert-danger alert-dismissable">
 <button type="button" class="close" data-dismiss="alert"
 aria-hidden="true">
 &times;
 </button>
 <b>Animal with the same name already exist in the database.</b>
</div>';
}else{

		$result=mysqli_query($condb,"insert into `animal` (animal_id,supplier_id,buying_price,animal_type,status,supply_date)
	values('$animalId','$animalSupplier','$animalBuyingPrice','$animalType','Active','$dateEntered') ");
	//header('Location: '.$_SERVER['PHP_SELF'].'?success');
//exit;

if ($result) {
    // output data of each row
echo '<script> window.location="addanimal.php?insert=True" </script>';
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
  

} 
			
			
			
				
}}

	if( isset($_POST['editProductButton'])){
		
			 $editAnimalId=$_POST['animalId'];
			 $editSupplier= $_POST['editProductSupplier'];
			 $editBuyingPrice= $_POST['editAnimalBuyingPrice'];
			 $editProductCategory= $_POST['editProductCategory'];
			 
			  $d=strtotime("today");
	    $editProductDateEntered = date("Ymd", $d);
	$similarityResult=mysqli_query($condb,"select * from `animal` where `animal_id`='".$editAnimalId ."' and `animal_type` !='".$editProductCategory."'");
if ($similarityResult->num_rows >0) {
	echo' <div class="alert alert-danger alert-dismissable">
 <button type="button" class="close" data-dismiss="alert"
 aria-hidden="true">
 &times;
 </button>
 <b>Animal with the same name already exist in the database.</b>
</div>';
}else{
		$result=mysqli_query($condb,"update `animal` SET supplier_id= '".$editSupplier."',buying_price= '".$editBuyingPrice."',animal_type= '".$editProductCategory."' where `animal_id`='".$editAnimalId."' ");
if ($result) {
    // output data of each row
  echo' <div class="alert alert-success alert-dismissable">
 <button type="button" class="close" data-dismiss="alert"
 aria-hidden="true">
 &times;
 </button>
 You have  updated successfully.
</div>';
	//echo json_encode("New user Added successfully");
} else {
    echo  json_encode("Sorry! something went wrong.Please try again."); 
}
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
                                url: "deleteproduct.php",
                                data: details,
                                cache: false,
                                success: function(rsp) {
				//location.reload();
              //then append the result where ever you want like
             // $("#datahere").html(rsp); //data will be containing the vote count which you have echoed from the controller
			// var updiv = document.getElementById("message"); //document.getElementById("highodds-details");
            window.location="product.php?delete=True" ;
		   
		   
                }

				
            });
			 
		   }
		   // select brand list in  the selected category when editing product
		   function editSelectBrandInCategory(editcategoryname){
			   //alert(editcategoryname);
			   var categoryName = editcategoryname;
					//alert("hello my name");
					var updiv = document.getElementById('editselectBrandoption');
					 var details= '&id='+ categoryName;
					 
			$.ajax({
						type: "POST",
                                url: "selectbrandcategory.php",
                                data: details,
                                cache: false,
                                success: function(rsp) {
				
              //then append the result where ever you want like
             // $("#datahere").html(rsp); //data will be containing the vote count which you have echoed from the controller
			 //alert(rsp);
			 var data= '<div class="form-group"><label for="category:"><b>Select Brand </b></label><select name="editProductBrand" class="form-control" >'+ rsp +'</select></div>';
          
		   updiv.innerHTML =data;
		   
		   
		     
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
		  <div class="col-md-8">Animal List</div>
		  <div class="col-md-4 col-pull-right" style="text-align:right"><a class="btn btn-primary" href="" data-toggle="modal" data-target="#product_modal">Add Product</a></div>
		</div>
		
          </div>
        <div class="card-body">
          <?php
		
		include('config.php');
		$result_array = array();

		$result=mysqli_query($condb,"select * from `animal` where `id`!=' ' ORDER BY id DESC ");
if ($result->num_rows > 0) {
    // output data of each row
    
		?>
		
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Animal Id</th>                
                  <th>Animal Type</th>                
                  <th>Supplier Name</th>
                  <th>Buying Price</th>                  
                  <th>Entered on</th>
                  <th>Status</th>
                 
                  <th>Action</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                   <th>ID</th>                
                   <th>Animal id</th>                
                   <th>Animal Type</th>                
                  <th>Supplier Name</th>
                  <th>Buying Price</th>                  
                  <th>Entered on</th>
                  <th>Status</th>
                  
                  <th>Action</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
              <tbody>
			  
			  <?php
			  while($row = $result->fetch_assoc()) {
				  $animal_id=$row["animal_id"];
				  //$available_quantity=$row["available_quantity"];
		echo '<form method="POST" action="product.php" role="form"><tr>
		 <td>';
		  echo $id= $row["id"].
		  '</td><td>'
		  .$row["animal_id"].
		   '</td>
		   <td>'.$row["animal_type"].'</td>
		   <td>'.$row["supplier_id"].'</td>
		   <td>'.$row["buying_price"].'</td>
		   <td>'.$row["supply_date"].'</td>
		   
		   <td><span class="badge btn-success">'.$row["status"].'</span></td>
		   
		   <td><span class="badge btn-primary" data-toggle="modal" type="submit" data-target="#view_product_modal" id="'. $animal_id.'" onclick="viewProductFunc(this.id)" > <i class="fa fa-eye"></i>View</span></td>' ;
		   // delete and edit category button
		 echo"<td>	 <button class='btn btn-warning' href='' data-toggle='modal' type='submit' data-target='#update_product_modal' value='' name='updateid'  onclick='editProductFunc(".$row["id"].")' ><i class='fa fa-eye'></i>Edit</button>";
		  
		 echo "</td><td><button class='btn btn-danger' href='' data-toggle='modal' type='submit' data-target='#delete_product_modal' value='' name='deleteProductuButton'  onclick='deleteProductFunc(".$row["id"].")' ><i class='fa fa-trash'></i></button>";
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
        
      </div>
           
     
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © 2018</small>
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
            <h5 class="modal-title" id="exampleModalLabel">Add Animal</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  <?php
		  
				
		  //include()
		  $resultSupplier=mysqli_query($condb,"select * from `supplier` where `supplier_status`='Active' ORDER BY id DESC ");
		  //$resultCategory=mysqli_query($conn,"select * from `brand` where `status`='Active' ORDER BY id DESC ");
		  //$resultCategory=mysqli_query($conn,"select * from `category` where `status`='Active' ORDER BY id DESC ");
		  
			if ($resultSupplier->num_rows > 0) {
				
				echo '<form method="POST" action="addanimal.php"><div class="form-group"><label for="category:"><b>Select Supplier</b></label><select name="supplierName" class="form-control" required>';
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
				$resultCategory=mysqli_query($condb,"select * from `animal_category` where `status`='Active' ORDER BY id DESC ");
				if ($resultCategory->num_rows > 0) {
					echo '<div class="form-group"><label for="category:"><b>Select Animal type</b></label>
				<select name="animalType" class="form-control" onchange="editcheckbrand(this.value)" ><option>--Select Category--</option>';
					while($row = $resultCategory->fetch_assoc()) {
						echo $categoryNameName =$row['category_name'];
						echo '<option value="'.$categoryNameName.'" >'.$categoryNameName.'</option>';
				}
				 
				
				echo '</select>
				</div>';?>
				<script type="text/javascript">
				function editcheckbrand(categoryName){
					
					  var updiv = document.getElementById('selectBrandoption');
					 var details= '&id='+ categoryName;
			$.ajax({
						type: "POST",
                                url: "selectbrandcategory.php",
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
				
				<div class="form-group">
           
              
                <label for="brand name"><b>Enter Animal ID:</b></label>
                <input class="form-control"  id="animalId" required name="animalId" type="text" aria-describedby="nameHelp" placeholder="Enter animal id" >
                       
          </div> 
		
		 
		 <div class="form-group">
            
              
                <label for="base price"><b>Enter Animal Buying Price:</b></label>
                <input class="form-control" id="animalBuyingPrice" name="animalBuyingPrice" required type="number" min="1" aria-describedby="nameHelp" placeholder="Enter Buying price">
                   
          </div>
	
		  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="addAnimalButton" type="submit" >Add Animal</button>
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
    <div class="modal fade" id="update_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Animal Details </h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  <div id="datahere">karongo</div>
		  <script>
		  
		   function editProductFunc(productid){
			   
			   var productID = productid;
			   var updiv = document.getElementById("datahere"); //document.getElementById("highodds-details");
			   //alert(id);
			  var details= '&id='+ productID;
			  
			$.ajax({
						type: "POST",
                                url: "editproduct.php",
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
	<!-- view product Modal-->
    <div class="modal fade" id="view_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">View Animal Details</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  
		  <br>
		  <div id="viewProductDetails"></div>
		  </div>
          
		  <script>
		   function viewProductFunc(viewProductId){
			  
			  var viewProductID = viewProductId;
			   var updiv = document.getElementById("viewProductDetails"); //document.getElementById("highodds-details");
			   //alert(id);
			  var details= '&id='+ viewProductID;
			  
			$.ajax({
						type: "POST",
                                url: "viewproduct.php",
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
	<!-- quick quantity change Modal-->
    <div class="modal fade" id="change_quantity_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-align:center"><center><i class="fa fa-plus"> <b>Stock</b></i></center></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  
		 
		
		  
		  <div id="quickQuantity"></div>
		  </div>
          
		  <script>
		   function quickAction(id,quantity){
				//alert(id);
				//alert(quantity);
				
				 var id = id;
				 var quantity = quantity;
			   var updiv = document.getElementById("quickQuantity"); //document.getElementById("highodds-details");
			   //alert(id);
			  var details='&id='+id  + '&quantity='+ quantity ;
			  updiv.innerHTML ='<form method="POST" action="product.php"> <div class="form-group"><label><b>Remaining Stock  :</b></label><input id="changeQuantity"  class="form-control" type="text" value="'+ quantity +'" disabled></div><hr><div class="form-group"><label><b>Enter Stock In:</b></label><input id="newQuantity"  class="form-control" type="text" value=""><input type="" name="currentQuantity" id="currentQuantity" value="'+ quantity +'"></div><div class="row"><div class="col-md-8"><input type="submit" class="btn btn-success" name="quickQuantityButton" value="Save" id="'+id +'" onclick="saveQuantityChange(this.id)"></div><hr><div class="col-md-"><button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button></div></div></form>';
			  
			
             

			}	
			function saveQuantityChange(id){
			// alert(currentQuantity);
				var id =id;
				var quantityValue = parseInt(document.getElementById("newQuantity").value);
				var currentQuantity = parseInt(document.getElementById("currentQuantity").value);
				
				   var totalquantity= quantityValue + currentQuantity;
				   alert(quantityValue);
				   alert(currentQuantity);
				   alert(totalquantity);
				var quantityDetails='&id='+ id  + '&quantity='+ totalquantity ;
				alert(quantityDetails);
				$.ajax({
						type: "POST",
                                url: "quickchangequantity.php",
                                data: quantityDetails,
                                cache: false,
                                success: function(rsp) {
								//alert(rsp);
				window.location="product.php?insert=True";
				
		     
                }
            });
				
				
			}
		  </script>
		  
            
          
        </div>
      </div>
    </div>
	<!-- Delete product Modal-->
    <div class="modal fade" id="delete_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
		   function deleteProductFunc(id){
			  
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
            <a class="btn btn-primary" href="logout.php">Logout</a>
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
	<script src="css/sweetalert.min.js"></script>
  </div>
</body>

</html>
