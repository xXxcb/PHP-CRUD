
<style type="text/css">
#dis{
	display:none;
}
</style>
	
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='usr-SaveProd' action="#">
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Item ID</td>
            <td><input type='text' name='it_id' class='form-control' placeholder='jdoe' required autocomplete="off" /></td>
        </tr>
 
        <tr>
            <td>Product Name</td>
            <td><input type='text' name='item_name' class='form-control' required autocomplete="off" /></td>
        </tr>
 
        <tr>
            <td>Stock</td>
            <td><input type='text' name='stock_count' class='form-control' placeholder='Jane' required autocomplete="off" /></td>
        </tr>
        <tr>
            <td>Category</td>
            <td><select name="category" multiple>
                <option value="">-------</option>
                <option value="Stationery">Stationery</option>
                <option value="Food">Food</option>
                <option value="Tools">Tools</option>
                <option value="Technology">Technology</option>                
            </select></td>
           <!--  <td><input type='text' name='lname' class='form-control' placeholder="Doe" required autocomplete="off" /></td> -->
        </tr>
        <tr>
            <td>Price</td>
            <td><input type='text' name='price' class='form-control' required autocomplete="off" ></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save Product
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
