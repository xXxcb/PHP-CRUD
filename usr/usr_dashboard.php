<?php
include_once('usr_login_info.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Dashboard</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../css/fontawesome.css" rel="stylesheet" type="text/css" media="screen">


<script src="https://use.fontawesome.com/c54bc7df94.js"></script>
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
			<b id="logout"><a href="../operations/logout.php">Log Out</a></b>
		</div>
        <hr />

        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Employee</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Employee</button>
        <a href="#" id="btn-view"><i class="fa fa-trash-o fa-l" aria-hidden="true" type="button" id="btn-view"></i></a>
        <hr />
        
        <div class="">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
	        <thead class="thead-light">
		        <tr>
			        <th>Item ID</th>
			        <th>Product Name</th>
			        <th>Stock Count</th>
			        <th>Category</th>
			        <th>Price</th>
			        <th>Action</th>
		        </tr>
	        </thead>
        <tbody>
        <?php
        require_once ('../dbconfig.php');
        
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
				
				<td align="center"><a id="<?php echo $row['it_id']; ?>" class="edit-link" href="#" title="Edit"><i class="fa fa-pencil-square-o fa-l"></i></a>
				<a id="<?php echo $row['it_id']; ?>" class="delete-link" href="#" title="Delete">
				<i class="fa fa-trash-o fa-l" aria-hidden="true"></i>
	            </a></td>
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