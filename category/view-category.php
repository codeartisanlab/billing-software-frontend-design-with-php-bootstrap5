<?php include('../includes/header.php'); ?> 

	

	<div class="container">
		<div class="row">

			<?php include('../includes/sidebar.php'); ?>
			
			<div class="col-md-9 mt-5">
				
				<div class="card">
				<div class="card-header bg-dark text-light">
					
					<h4 class="text-center">View Category</h4>
				</div>

				<div class="card-body">
						<table class="table table-bordered">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      
						      <th scope="col">Name</th>
						      
						      <th scope="col">Edit / Delete</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      
						      <td>Mouse</td>
						      
						      <td>
						      	<a href="edit-category.php" class="btn btn-warning btn-sm">Edit</a>
						      	<a href="delete-category.php" class="btn btn-danger btn-sm">Delete</a>
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