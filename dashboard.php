<?php
include_once('admin/admin_login.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Dashboard</title>
<link href="css/bootstrap3.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="css/datatables.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$("#btn-view").hide();
	
	$("#btn-add").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('operations/add_form.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});

	$("#btn-add-prod").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('operations/products/prod_create_form.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});
	
	$("#btn-view").click(function(){
		 
		$("body").fadeOut('slow', function()
		{
			$("body").load('dashboard.php');
			$("body").fadeIn('slow');
			window.location.href="dashboard.php";
		});
	});
	
});
</script>

</head>

<body>
    
	<div class="container">
      
        <h2 class="form-signin-heading">Welcome: <?php echo $login_session; ?></h2>
		<div>
			<b id="logout"><a href="operations/logout.php">Log Out</a></b>
		</div>
        <hr />

        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Employee</button>
        <button class="btn btn-success" type="button" id="btn-add-prod"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Products</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Employee</button>
        <hr />
        
        <div class="content-loader">
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
	        <thead class="thead-dark">
		        <tr>
			        <th>User Name</th>
			        <th>Password</th>
			        <th>Fistname</th>
			        <th>Lastname</th>
			        <th>Account Status</th>
			        <th>Action</th>
		        </tr>
	        </thead>
        <tbody>
        <?php
        require_once 'dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM reg_users ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
			<tr>
				<td><?php echo $row['username']; ?></td>
		        <td><?php echo $row['passwd']; ?></td>
		        <td><?php echo $row['Firstname']; ?></td>
		        <td><?php echo $row['Lastname']; ?></td>
		        <td><?php echo $row['accstatus']; ?></td>				
				
				<td align="center"><a id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="Edit"><img src="operations/edit.png" width="20px" />
	            </a>
				<a id="<?php echo $row['id']; ?>" class="delete-link" href="#" title="Delete">
				<img src="operations/delete.png" width="20px" />
	            </a></td>
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        
        </div>
        <br><br>
        
		<h3>Products</h3>
		<hr/>
		<!-- View Products -->
        <div class="">
        <table cellspacing="0" width="100%" id="example" class="table">
	        <thead class="">
		        <tr>
			        <th>Item ID</th>
			        <th>Product Name</th>
			        <th>In Stock</th>
			        <th>Category</th>
			        <th>Price</th>			        
		        </tr>
	        </thead>
        <tbody>
        <?php
        require_once ('dbconfig.php');
        
        $stmt = $db_con->prepare("SELECT * FROM reg_items ORDER BY item_name DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
			<tr>
				<td><?php echo $row['it_id']; ?></td>
		        <td><?php echo $row['item_name']; ?></td>
		        <td><?php echo $row['stock_count']; ?></td>
		        <td><?php echo $row['category']; ?></td>
		        <td><?php echo $row['price']; ?></td>				
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        
        </div>

    </div>
    
    <br />   

    
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/datatables.min.js"></script>
<script type="text/javascript" src="js/crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
</body>
</html>