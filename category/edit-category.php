<?php include('../includes/header.php'); ?> 

	

	<div class="container">
		<div class="row">

			<?php include('../includes/sidebar.php'); ?>
			
			<div class="col-md-9 mt-5">
				
				<div class="card">
				<div class="card-header bg-dark text-light">
					
					<h4 class="text-center">Edit Category</h4>
				</div>

				<div class="card-body">
						<form>
							  <table class="table table-bordered">
							  	
							  	<tr>
							  		<th>Name</th>
							  		<td ><input type="text"  name="name" class="form-control" value="Mouse"></td>
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