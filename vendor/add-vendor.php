<?php include('../includes/header.php'); ?> 


	<div class="container">
		<div class="row">

			<?php include('../includes/sidebar.php'); ?>
			
			<div class="col-md-9 mt-5">
				
				<div class="card">
				<div class="card-header bg-dark text-light">
					
					<h4 class="text-center">Add Vendor</h4>
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
							  		<th>Phone</th>
							  		<td ><input type="tel" class="form-control" placeholder="Phone" name="phone"></td>
							  	</tr>

							  	<tr>
							  		<th>Product</th>
							  		<td ><input type="text" class="form-control" placeholder="Product" name="product"></td>
							  	</tr>

							  	<tr>
							  		<th>Address</th>
							  		<td ><textarea type="text" class="form-control" name="address"></textarea></td>
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