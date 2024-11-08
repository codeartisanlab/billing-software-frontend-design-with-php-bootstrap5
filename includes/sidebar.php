<?php $baseurl="http://localhost/Billing-Software/" ?>



<div class="col-md-3 mt-5">
				<ul class="list-group">
				  <li class="list-group-item active bg-dark" aria-current="true"><a href="<?php echo "$baseurl"; ?>dashboard.php" class="text-light text-decoration-none"><i class="fa-solid fa-gauge"></i> Dashboard</a></li>
				  <li class="nav-item dropdown list-group-item">
			          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			            <i class="fa-brands fa-product-hunt"></i> Products
			          </a>
			          <ul class="dropdown-menu">
			            <li><a class="dropdown-item" href="<?php echo "$baseurl"; ?>product/add-product.php">Add Product</a></li>
			            <li><a class="dropdown-item" href="<?php echo "$baseurl"; ?>product/view-product.php">View Product</a></li>
			            
			          </ul>
			        </li>

			        <li class="nav-item dropdown list-group-item">
			          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			            <i class="fa-solid fa-list"></i> Category
			          </a>
			          <ul class="dropdown-menu">
			            <li><a class="dropdown-item" href="<?php echo "$baseurl"; ?>category/add-category.php">Add Category</a></li>
			            <li><a class="dropdown-item" href="<?php echo "$baseurl"; ?>category/view-category.php">View Category</a></li>
			            
			          </ul>
			        </li>

			        <li class="nav-item dropdown list-group-item">
			          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			            <i class="fa-solid fa-person"></i> Vendors
			          </a>
			          <ul class="dropdown-menu">
			            <li><a class="dropdown-item" href="<?php echo "$baseurl"; ?>vendor/add-vendor.php">Add Vendor</a></li>
			            <li><a class="dropdown-item" href="<?php echo "$baseurl"; ?>vendor/view-vendor.php">View Vendor</a></li>
			            
			          </ul>
			        </li>

			        <li class="nav-item dropdown list-group-item">
			          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			            <i class="fa-solid fa-cart-shopping"></i> Purchase
			          </a>
			          <ul class="dropdown-menu">
			            <li><a class="dropdown-item" href="<?php echo "$baseurl"; ?>purchase/add-purchase.php">Add Purchase</a></li>
			            <li><a class="dropdown-item" href="<?php echo "$baseurl"; ?>purchase/view-purchase.php">View Purchase</a></li>
			            
			          </ul>
			        </li>


			        <li class="nav-item dropdown list-group-item">
			          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			            <i class="fa-solid fa-universal-access"></i> Sale
			          </a>
			          <ul class="dropdown-menu">
			            <li><a class="dropdown-item" href="<?php echo "$baseurl"; ?>sale/add-sale.php">Add Sale</a></li>
			            <li><a class="dropdown-item" href="<?php echo "$baseurl"; ?>sale/view-sale.php">View Sale</a></li>
			            
			          </ul>
			        </li>

			       
				</ul>
			</div>