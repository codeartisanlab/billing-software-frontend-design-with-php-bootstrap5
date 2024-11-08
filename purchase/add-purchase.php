<?php include('../includes/header.php'); ?> 

	

	<div class="container">
		<div class="row">

			<?php include('../includes/sidebar.php'); ?>
			
			<div class="col-md-9 mt-5">
				
				<div class="card">
				<div class="card-header bg-dark text-light">
					
					<h4 class="text-center">Add Purchase</h4>
				</div>

				<div class="card-body">
						<form>
							  <table class="table table-bordered">

							  	<tr>
							  		<th>Product</th>
							  		<td>
							  			<select class="form-select" aria-label="Default select example" name="product">
										  <option selected>Open this Product menu</option>
										  <option value="1">Mouse</option>
										  <option value="2">Keyboard</option>
										  <option value="3">Screen</option>
										</select>
							  		</td>
							  	</tr>

							  	<tr>
							  		<th>Vendor</th>
							  		<td ><input type="text" class="form-control" name="vendor" value="Vipan"></td>
							  	</tr>

							  	<tr>
							  		<th>Price</th>
							  		<td ><input type="text" class="form-control" name="price" placeholder="Price"></td>
							  	</tr>

							  	<tr>
							  		<th>Qty</th>
							  		<td ><input type="text" class="form-control" name="qty" placeholder="Qty"></td>
							  	</tr>

							  	<tr>
							  		<th>Total</th>
							  		<td ><input type="text" class="form-control" name="total" placeholder="Total"></td>
							  	</tr>

							  	<tr>
							  		<th>Discount</th>
							  		<td ><input type="text" class="form-control" name="discount" placeholder="Discount"></td>
							  	</tr>

							  	<tr>
							  		<th>Dis Price</th>
							  		<td ><input type="text" class="form-control" name="disprice" placeholder="Dis Price"></td>
							  	</tr>

							  	<tr>
							  		<th>Tax Rate (18%)</th>
							  		<td ><input type="text" class="form-control" name="taxrate" placeholder="Tax Rate"></td>
							  	</tr>

							  	<tr>
							  		<th>With Tax Price</th>
							  		<td ><input type="text" class="form-control" name="withtax" placeholder="With Tax Price"></td>
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