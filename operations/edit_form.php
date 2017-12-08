<?php
include_once ('../dbconfig.php');

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM reg_users WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style>


    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['id']; ?>' />
        <tr>
            <td>Username</td>
            <td><input type='text' name='username' class='form-control' value='<?php echo $row['username']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Password</td>
            <td><input type='text' name='password' class='form-control' value='<?php echo $row['passwd']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Firstname</td>
            <td><input type='text' name='fname' class='form-control' value='<?php echo $row['Firstname']; ?>' required></td>
        </tr>

        <tr>
            <td>Lastname</td>
            <td><input type='text' name='lname' class='form-control' value='<?php echo $row['Lastname']; ?>' required></td>
        </tr>

        <tr>
            <td>Status</td>            
            <td>
                <input type='checkbox' name='status' class='form-control' value='<?php echo $row['accstatus']; ?>'>
            </td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
