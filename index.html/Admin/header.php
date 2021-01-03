<?php include '../includ/config.php'; ?>
<?php include '../includ/functions.php'; ?>
<?php include '../includ/secction.php'; ?>
<?php 
//login check admin
admin_login_check();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="img/logo/user-tie-solid.svg" rel="icon">
		<title>Admin Dashboard</title>
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/ruang-admin.min.css" rel="stylesheet">
		<link href="vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" >
		<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	</head>
	<body id="page-top">
		<div id="wrapper">
			<!-- Sidebar -->
			<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
				<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
					<div class="sidebar-brand-icon">
						<img src="img/logo/user-tie-solid.png">
					</div>
					<div class="sidebar-brand-text mx-3">Dashboard</div>
				</a>
				<hr class="sidebar-divider my-0">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span></a>
					</li>
					<hr class="sidebar-divider">
					<div class="sidebar-heading">
						Staff Section
					</div>
					<li class="nav-item">
						<a class="nav-link" href="staff-user-list.php">
							<i class="fas fa-fw fa-users"></i>
							<span>Staff User List</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="create-new-user.php">
							<i class="fas fa-fw fa-user-plus"></i>
							<span>Create New User</span>
						</a>
					</li>
					<hr class="sidebar-divider">
					<div class="sidebar-heading">
						Booking
					</div>
					<li class="nav-item">
						<a class="nav-link" href="booking-list.php">
							<i class="fab fa-fw fa-wpforms"></i>
							<span>Booking List</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="export-file.php">
							<i class="fas fa-fw fa-tasks"></i>
							<span>Export File</span>
						</a>
					</li>
					<hr class="sidebar-divider">
				</ul>
				<!-- Sidebar -->
				<div id="content-wrapper" class="d-flex flex-column">
					<div id="content">
						<!-- TopBar -->
						<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
							<button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
							<i class="fa fa-bars"></i>
							</button>
							<ul class="navbar-nav ml-auto">
								<li class="nav-item no-arrow mx-1 align-middle d-flex align-items-center">
									<a class="btn btn-light" href="../index.php" target="_blank">Visit Website</a>
								</li>
								<div class="topbar-divider d-none d-sm-block"></div>
								<li class="nav-item dropdown no-arrow">
									<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">
										<img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
										<span class="ml-2 d-none d-lg-inline text-white small"><?php if(isset($_SESSION["user_name"])){
											echo $_SESSION["user_name"];
										}else{
											echo 'Admin';
										} ?></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
										<a class="dropdown-item" href="profile.php">
											<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
											Profile
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
											<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
											Logout
										</a>
									</div>
								</li>
							</ul>
						</nav>
						<!-- Topbar -->