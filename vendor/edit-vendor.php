<?php include('../includes/header.php'); ?> 

	<div class="container">
		<div class="row">

			<?php include('../includes/sidebar.php'); ?>
			
			<div class="col-md-9 mt-5">
				
				<div class="card">
				<div class="card-header bg-dark text-light">
					
					<h4 class="text-center">Edit Vendor</h4>
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
							  		<td ><input type="text"  name="name" class="form-control" value="Vipan"></td>
							  	</tr>

							  	<tr>
							  		<th>Phone</th>
							  		<td ><input type="tel" class="form-control"  name="phone" value="9878693736"></td>
							  	</tr>

							  	<tr>
							  		<th>Product</th>
							  		<td ><input type="text" class="form-control"  name="product" value="Mouse"></td>
							  	</tr>

							  	<tr>
							  		<th>Address</th>
							  		<td ><textarea type="text" class="form-control" name="address">Ludhiana</textarea></td>
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