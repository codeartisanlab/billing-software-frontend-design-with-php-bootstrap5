<?php include('../includes/header.php'); ?> 

	

	<div class="container">
		<div class="row">

			<?php include('../includes/sidebar.php'); ?>
			
			<div class="col-md-9 mt-5">
				
				<div class="card">
				<div class="card-header bg-dark text-light">
					
					<h4 class="text-center">Edit Product</h4>
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
							  		<td ><input type="text"  name="name" class="form-control" value="Mouse"></td>
							  	</tr>

							  	<tr>
							  		<th>Category</th>
							  		<td>
							  			<input type="text"  name="category" class="form-control" value="Mouse">
							  		</td>
							  	</tr>

							  	<tr>
							  		<th>Price</th>
							  		<td ><input type="text" class="form-control"  name="price" value="500"></td>
							  	</tr>

							  	<tr>
							  		<th>Vendor</th>
							  		<td>
							  			<input type="text"  name="vendor" class="form-control" value="Vipan">
							  		</td>
							  	</tr>

							  	<tr>
							  		<th>Opening Stock</th>
							  		<td ><input type="text" class="form-control"  name="opening" value="1200"></td>
							  	</tr>

							  	<tr>
							  		<th>Current Stock</th>
							  		<td ><input type="text" class="form-control"  name="current" value="1200"></td>
							  	</tr>

							  	
							  </table>
							 
							  <button type="submit" class="btn btn-dark form-control">Edit Data</button>
							</form>
				</div>
				
			</div>
			</div>
			
		</div>
		
	</div>

<?php include('../includes/footer.php'); ?> 