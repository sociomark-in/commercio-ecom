<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url('') ?>"><img src="<?= base_url() ?>assets/logo.png" alt="Logo Image" style="height: 40px;">&nbsp;<span class="d-none d-md-inline">Dashboard</span></a>
		<!-- <a class="navbar-brand" href="<?= base_url('trl-admin') ?>">Dashboard</a> -->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-between w-100" id="navbarNavAltMarkup">
			<div class="navbar-nav">

			</div>
			<div class="navbar-nav align-items-center">
				<?php if ($this->session->user['role'] == "admin") : ?>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('setting/app-settings/currency') ?>"><i class="ti ti-world"></i></a>
					</li>
				<?php endif ?>
				<li class="nav-item dropdown dropdown-hover position-static">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="ti ti-bell icon icon-left"></i>Notifications
					</a>
					<!-- Dropdown menu -->
					<div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="border-top-left-radius: 0;
								border-top-right-radius: 0;
							  ">
						<div class="container">
							<div class="row my-4"></div>
						</div>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link avatar-link d-flex lh-1 text-reset px-2 dropdown-toggle align-items-center" data-bs-toggle="dropdown" aria-label="Open user menu">
						<span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)">PK</span>
						<div class="d-none d-xl-block ps-2">
							<div><?= $this->session->user['name'] ?></div>
							<div class="mt-1 small text-secondary"><?= $this->session->user['role'] ?></div>
						</div>
					</a>
					<ul class="dropdown-menu">
						<li>
							<div class="px-3">
								<?= $this->session->user['name'] ?>
							</div>
						</li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="#">My Profile</a></li>
						<li><a class="dropdown-item" href="#">Messages</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="#">Settings</a></li>
						<li>
							<a class="dropdown-item text-danger d-flex justify-content-between" href="<?= base_url('logout') ?>">
								Logout
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
									<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
									<polyline points="16 17 21 12 16 7"></polyline>
									<line x1="21" y1="12" x2="9" y2="12"></line>
								</svg>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i class="ti ti-layout-sidebar-right-expand"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('settings/app-settings') ?>"><i class="ti ti-settings"></i></a>
				</li>
			</div>
		</div>
	</div>
</nav>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<div>
			Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
		</div>
		<div class="dropdown mt-3">
			<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
				Dropdown button
			</button>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#">Action</a></li>
				<li><a class="dropdown-item" href="#">Another action</a></li>
				<li><a class="dropdown-item" href="#">Something else here</a></li>
			</ul>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?= base_url('') ?>"><i class="ti ti-home"></i>&nbsp;Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="ti ti-box-seam"></i>&nbsp;All Orders
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Orders</a></li>
						<li><a class="dropdown-item" href="#">Abondoned Checkouts</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="#">Drafts</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="ti ti-building-warehouse"></i>&nbsp;All Products
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="<?= base_url('products') ?>">Products</a></li>
						<li><a class="dropdown-item" href="#">Inventory</a></li>
						<li><a class="dropdown-item" href="#">Collections</a></li>
						<li><a class="dropdown-item" href="#">Gift cards</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="#">Purchase Orders</a></li>
						<li><a class="dropdown-item" href="#">Transfers</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="ti ti-users"></i>&nbsp;Customer Base
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Customers</a></li>
						<li><a class="dropdown-item" href="#">Customer Segments</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="ti ti-chart-histogram"></i>&nbsp;Sales Analytics
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Analytics</a></li>
						<li><a class="dropdown-item" href="#">Reports</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="#">Live View</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="ti ti-chart-arrows-vertical"></i>&nbsp;Marketing Channels
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Marketing</a></li>
						<li><a class="dropdown-item" href="#">Campaigns</a></li>
						<li><a class="dropdown-item" href="#">Automation</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('') ?>"><i class="ti ti-discount-2"></i>&nbsp;Discounts</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="ti ti-chart-arrows-vertical"></i>&nbsp;Sales Channels
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Marketing</a></li>
						<li><a class="dropdown-item" href="#">Campaigns</a></li>
						<li><a class="dropdown-item" href="#">Automation</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<form action="search" method="get">
					<div class="row m-0">
						<div class="col-md col-12">
							<input type="search" class="form-control" name="s" id="inputSearch">
						</div>
						<div class="col-md-auto col-12">
							<button class="btn btn-primary" type="submit">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
									<circle cx="11" cy="11" r="8"></circle>
									<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
								</svg>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
