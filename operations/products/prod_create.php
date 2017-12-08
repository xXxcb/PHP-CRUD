<?php
	require_once('dbconfig.php');

	
	if(isset($_POST))
	{
		$it_id = $_POST['it_id'];
		$item_name = $_POST['item_name'];
		$stock_count = $_POST['stock_count'];
		$category = $_POST['category'];
		$price = $_POST['price'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO reg_items (it_id, item_name, stock_count, category, price) VALUES (:eid, :eitem, :estock, :ecat, :eprice)");
			$stmt->bindParam(":eid", $it_id);
			$stmt->bindParam(":eitem", $item_name);
			$stmt->bindParam(":estock", $stock_count);
			$stmt->bindParam(":ecat", $category);
			$stmt->bindParam(":eprice", $price);
			
			if($stmt->execute())
			{
				echo "Successfully Added";
			}
			else{
				echo "Query Problem";
			}	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>