<?php include('../includes/header.php'); ?> 

	

	<div class="container">
		<div class="row">

			<?php include('../includes/sidebar.php'); ?>
			
			<div class="col-md-9 mt-5">
				
				<div class="card">
				<div class="card-header bg-dark text-light">
					
					<h4 class="text-center">Add Product</h4>
				</div>

				<div class="card-body">
						<form>
							  <table class="table table-bordered">
							  	<tr>
							  		<th>Image</th>
							  		<td ><input type="file" name="image" class="form-control"></td>
							  	</tr>
							  	<tr>
							  		<th>Name</th>
							  		<td ><input type="text" placeholder="Name" name="name" class="form-control"></td>
							  	</tr>

							  	<tr>
							  		<th>Category</th>
							  		<td>
							  			<select class="form-select" aria-label="Default select example" name="category">
										  <option selected>Open this Category menu</option>
										  <option value="1">Mouse</option>
										  <option value="2">Keyboard</option>
										  <option value="3">Screen</option>
										</select>
							  		</td>
							  	</tr>

							  	<tr>
							  		<th>Price</th>
							  		<td ><input type="text" class="form-control" placeholder="Price" name="price"></td>
							  	</tr>

							  	<tr>
							  		<th>Vendor</th>
							  		<td>
							  			<select class="form-select" aria-label="Default select example" name="vendor">
										  <option selected>Open this Vendor menu</option>
										  <option value="1">Vipan</option>
										  <option value="2">Rajat</option>
										  <option value="3">Suraj</option>
										</select>
							  		</td>
							  	</tr>

							  	<tr>
							  		<th>Opening Stock</th>
							  		<td ><input type="text" class="form-control" placeholder="Opening Stock" name="opening"></td>
							  	</tr>

							  	<tr>
							  		<th>Current Stock</th>
							  		<td ><input type="text" class="form-control" placeholder="Current Stock" name="current"></td>
							  	</tr>

							  	
							  </table>
							 
							  <button type="submit" class="btn btn-dark form-control">Add Data</button>
							</form>
				</div>
				
			</div>
			</div>
			
		</div>
		
	</div>

<?php include('../includes/footer.php'); ?> 