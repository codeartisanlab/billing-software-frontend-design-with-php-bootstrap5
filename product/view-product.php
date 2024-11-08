<?php include('../includes/header.php'); ?> 

	

	<div class="container">
		<div class="row">

			<?php include('../includes/sidebar.php'); ?>
			
			<div class="col-md-9 mt-5">
				
				<div class="card">
				<div class="card-header bg-dark text-light">
					
					<h4 class="text-center">View Product</h4>
				</div>

				<div class="card-body">
						<table class="table table-bordered">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Image</th>
						      <th scope="col">Name</th>
						      <th scope="col">Cat</th>
						      <th scope="col">Price</th>
						      <th scope="col">Vendor</th>
						      <th scope="col">Op. Stock</th>
						      <th scope="col">Cr. Stock</th>
						      <th scope="col">Edit / Delete</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>1.jpg</td>
						      <td>Mouse</td>
						      <td>Mouse</td>
						      <td>500</td>
						      <td>Vipan</td>
						      <td>1200</td>
						      <td>1200</td>
						      <td>
						      	<a href="edit-product.php" class="btn btn-warning btn-sm">Edit</a>
						      	<a href="delete-product.php" class="btn btn-danger btn-sm">Delete</a>
						      </td>
						    </tr>
						    
						  </tbody>
						</table>
				</div>
				
			</div>
			</div>
			
		</div>
		
	</div>

<?php include('../includes/footer.php'); ?> 