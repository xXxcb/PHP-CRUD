
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Username</td>
            <td><input type='text' name='username' class='form-control' placeholder='jdoe' required autocomplete="off" /></td>
        </tr>
 
        <tr>
            <td>Password</td>
            <td><input type='text' name='password' class='form-control'  required autocomplete="off" /></td>
        </tr>
 
        <tr>
            <td>Firstname</td>
            <td><input type='text' name='fname' class='form-control' placeholder='Jane' required autocomplete="off" /></td>
        </tr>
        <tr>
            <td>Lastname</td>
            <td><input type='text' name='lname' class='form-control' placeholder="Doe" required autocomplete="off" /></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><input type='checkbox' name='status' class='form-control' value=1 ></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
