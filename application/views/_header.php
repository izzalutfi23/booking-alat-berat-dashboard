<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title><?=$title?></title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?=base_url('assets/vendors/mdi/css/materialdesignicons.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/vendors/css/vendor.bundle.base.css')?>">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="<?=base_url('assets/vendors/jquery-bar-rating/css-stars.css')?>" />
	<link rel="stylesheet" href="<?=base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" />
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="<?=base_url('assets/css/demo_1/style.css')?>" />
	<!-- End layout styles -->
	<link rel="shortcut icon" href="<?=base_url('assets/images/favicon.png')?>" />
	<!-- Datatable -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" />
</head>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<ul class="nav">
				<li class="nav-item nav-profile border-bottom">
					<a href="#" class="nav-link flex-column">
						<div class="nav-profile-image">
							<img src="<?=base_url('assets/images/faces/face1.jpg')?>" alt="profile" />
							<!--change to offline or busy as needed-->
						</div>
						<div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
							<span class="font-weight-semibold mb-1 mt-2 text-center">Antonio Olson</span>
							<span class="text-secondary icon-sm text-center">$3499.00</span>
						</div>
					</a>
				</li>
				<li class="pt-2 pb-1">
					<span class="nav-item-head">Admin Dashboard</span>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('dashboard/index')?>">
						<i class="mdi mdi-compass-outline menu-icon"></i>
						<span class="menu-title">Dashboard</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('dashboard/kategori')?>">
						<i class="mdi mdi-apps menu-icon"></i>
						<span class="menu-title">Kategori</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('dashboard/operator')?>">
						<i class="mdi  mdi-account menu-icon"></i>
						<span class="menu-title">Operator</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
						aria-controls="ui-basic">
						<i class="mdi mdi-truck menu-icon"></i>
						<span class="menu-title">Alat Berat</span>
						<i class="menu-arrow"></i>
					</a>
					<div class="collapse" id="ui-basic">
						<ul class="nav flex-column sub-menu">
							<?php 
                                foreach($kat as $kategori){
                            ?>
							<li class="nav-item">
								<a class="nav-link"
									href="<?=base_url('dashboard/alatberat/'.$kategori->id)?>"><?=$kategori->nama?></a>
							</li>
							<?php } ?>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pages/forms/basic_elements.html">
						<i class="mdi mdi-format-list-bulleted menu-icon"></i>
						<span class="menu-title">Forms</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pages/charts/chartjs.html">
						<i class="mdi mdi-chart-bar menu-icon"></i>
						<span class="menu-title">Charts</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pages/tables/basic-table.html">
						<i class="mdi mdi-table-large menu-icon"></i>
						<span class="menu-title">Tables</span>
					</a>
				</li>
			</ul>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_settings-panel.html -->
			<div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
			<div id="theme-settings" class="settings-panel">
				<i class="settings-close mdi mdi-close"></i>
				<p class="settings-heading">SIDEBAR SKINS</p>
				<div class="sidebar-bg-options selected" id="sidebar-default-theme">
					<div class="img-ss rounded-circle bg-light border mr-3"></div>Default
				</div>
				<div class="sidebar-bg-options" id="sidebar-dark-theme">
					<div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
				</div>
				<p class="settings-heading mt-2">HEADER SKINS</p>
				<div class="color-tiles mx-0 px-4">
					<div class="tiles default primary"></div>
					<div class="tiles success"></div>
					<div class="tiles warning"></div>
					<div class="tiles danger"></div>
					<div class="tiles info"></div>
					<div class="tiles dark"></div>
					<div class="tiles light"></div>
				</div>
			</div>
			<!-- partial -->
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
				<div class="navbar-menu-wrapper d-flex align-items-stretch">
					<button class="navbar-toggler navbar-toggler align-self-center" type="button"
						data-toggle="minimize">
						<span class="mdi mdi-chevron-double-left"></span>
					</button>
					<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
						<a class="navbar-brand brand-logo-mini" href="index.html"><img
								src="<?=base_url('assets/images/logo-mini.svg')?>" alt="logo" /></a>
					</div>
					<ul class="navbar-nav navbar-nav-right">
						<li class="nav-item nav-logout d-none d-md-block">
							<button class="btn btn-sm btn-danger">Online</button>
						</li>
						<li class="nav-item nav-logout d-none d-lg-block">
							<a class="nav-link" href="#" title="Logout">
								<i class="mdi mdi-logout-variant"></i>
							</a>
						</li>
					</ul>
					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
						data-toggle="offcanvas">
						<span class="mdi mdi-menu"></span>
					</button>
				</div>
			</nav>
