<?php
// Include config file
require_once "includ/config.php";
//include session file
 include'includ/secction.php';
 //include functions file
 include'includ/functions.php';
login_check();
if(isset($_GET["search"])){
	$check_date= $_GET["search"];
	$new_date=$check_date;
	
}else{
	$new_date=$the_date;
}
?>
<?php 
//room price value
$roomprice1 ='New Year';
$roomprice2 ='New Year';
$roomprice3 ='$New Year';
$roomprice4 ='$New Year';
$roomprice5 ='$New Year';
$roomprice6 ='$New Year';
$roomprice7 ='$New Year';
$roomprice8 ='$New Year';
$roomprice9 ='$New Year';
$roomprice10 ='$New Year';
$roomprice11 ='$New Year';
$roomprice12 ='$New Year';
$roomprice13 ='$New Year';
$roomprice14 ='$New Year';
$roomprice15 ='$New Year';
$roomprice16 ='$New Year';
$roomprice17 ='$New Year';
$roomprice18 ='$New Year';
$roomprice19 ='$New Year';
$roomprice20 ='$New Year';
$roomprice21 ='New Year';
$roomprice22 ='$New Year';
$roomprice23 ='$New Year';
$roomprice24 ='$New Year';
$roomprice25 ='$New Year';
$roomprice26 ='$New Year';
$roomprice27 ='$New Year';
$roomprice28 ='$New Year';
$roomprice29 ='$New Year';
$roomprice30 ='$New Year';
$roomprice31 ='$New Year';
$roomprice32 ='$New Year';
$roomprice33 ='$New Year';
$roomprice34 ='$New Year';
$roomprice35 ='$New Year';
$roomprice36 ='$New Year';
$roomprice37 ='$New Year';
$roomprice38 ='$New Year';
$roomprice39 ='$New Year';
$roomprice40 ='$New Year';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Reservation</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@1,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=BioRhyme&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
		<link rel="icon" href="img/favicon.png" sizes="16x16">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="responsive.css">
		<link href="vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" >
		<link href="css/ruang-admin.min.css" rel="stylesheet">
	</head>
	<body>

		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class="container">
					<a class="img-hover" href="#"><img class="logo" src=img/logo.png></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<div class="mx-auto"></div>
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="https://gavannanightclub.com/">Home</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="#reservation">Reservation</a>
							</li>
							<?php
							$user_id_login 				=$_SESSION["id_lgn_user"];		
							$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
							$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
							if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
							 $id_db 		= $data_cas_ec['username'];
							 $id_roll 		= $data_cas_ec['roll'];
							} if($id_roll !='user'){?>
							<li class="nav-item">
								<a class="nav-link" href="Staff/index.php" target="_blank">Dashboard</a>
							</li>
							<?php } ?>
							<li class="nav-item">
								<a class="nav-link" href="includ/logout.php">Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		
		<div class="owl-carousel owl-theme">
			<div class="slide slide-1">
				<div class="slide-content">
					<h1>Welcome To Gavanna Night Club</h1>
					<p>When not showcasing live music, Gavanna remains open as the largest progressive video dance bar in the US with music and videos by various DJs depending on the night.</p>
					<a href="#first-floor">Reserve Now</a>
				</div>
			</div>
			<div class="slide slide-2">
				<div class="slide-content">
					<h1>Where Every Night is Fun Night</h1>
					<p>To enjoy the night show, book now and get reserved. Something cool and fun gonna be happen in the night.</p>
					<a href="#first-floor">Book Now</a>
				</div>
			</div>
			<div class="slide slide-3">
				<div class="slide-content">
					<h1>Book Your Table Reservation</h1>
					<p>We love to have a conversation with you. For any information, you can us any time. We will provide your needed information.</p>
					<a href="#first-floor">Call Us</a>
				</div>
			</div>
		</div>
		<section id="reservation">
			<div class="container-fluid">
				<h2 class="text-center dynamic-header-type">Please Choose The Date To See Booking</h2>
				<!-- <h2 class="text-center dynamic-header-type">We have two map for you. You can see and reserve any table you want</h2> -->
				<div class="container">
					<form action="index.php" method="get">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-3 col-md-4 col-sm-5 text-center">
						<div class="form-group" id="simple-date1">
							<!-- <h5 style="font-family: 'Alegreya', serif;">Please Choose The Date To See Booking</h5> -->
							<div class="input-group date">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-calendar"></i></span>
								</div>
							<input type="text" class="form-control" name="search" value="<?php echo $new_date;?>" id="simpleDataInput">
							</div>
						</div>
						<button name="searchbtn" class="btn btn-primary">Check</button>
					</div>
				</div>
			</form>
				</div>
			</div>
			</div>
		</section>
		<div class="container">
		<?php 
		echo successMessage();
		echo Message(); ?>
		</div>
		<section id="first-floor" class="d-flex justify-content-center">
			<div class="section-button">
				<!-- Section 1 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='1' ";
				
				}else{
				
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='1' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-1 text-center text-decoration-none" data-toggle="modal" data-target="#section1" style="background-color: #4B6C3D;">
					<span>1</span><br><i class="fab fa-angellist"></i>
				</a>
				<a href="#" class="section-1d text-center text-decoration-none" data-toggle="modal" data-target="#section1" style="background-color: #4B6C3D;">
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-1 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked1" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>1</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<a href="#" class="section-1d text-center text-decoration-none" data-toggle="modal" data-target="#sectionbooked1" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
				</a>
				<?php
				}
				?>
				<!-- Section 1 Ending-->
				<!-- Section 2 Booking-->
					<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='2' ";
				}else{
				
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='2' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-2 text-center text-decoration-none" data-toggle="modal" data-target="#section2" style="background-color: #4B6C3D;">
					<span>2</span><br><i class="fab fa-angellist"></i>
				</a>
				<a href="#" class="section-2d text-center text-decoration-none" data-toggle="modal" data-target="#section2" style="background-color: #4B6C3D;">
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-2 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked2" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>2</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<a href="#" class="section-2d text-center text-decoration-none" data-toggle="modal" data-target="#sectionbooked2" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
				</a>
				<?php
				}
				?>
				<!-- Section 2 Ending-->
				<!-- Section 3 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='3' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='3' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-3 text-center text-decoration-none" data-toggle="modal" data-target="#section3" style="background-color: #4B6C3D;">
					<span>3</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-3 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked3" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>3</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 3 Ending-->
				<!-- Section 4 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='4' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='4' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-4 text-center text-decoration-none" data-toggle="modal" data-target="#section4" style="background-color: #4B6C3D;">
					<span>4</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-4 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked4" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>4</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 4 Ending-->
				
				<!-- Section 5 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='5' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='5' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-5 text-center text-decoration-none" data-toggle="modal" data-target="#section5" style="background-color: #4B6C3D;">
					<span>5</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-5 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked5" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>5</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 5 Ending-->
				<!-- Section 6 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='6' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='6' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-6 text-center text-decoration-none" data-toggle="modal" data-target="#section6" style="background-color: #4B6C3D;">
					<span>6</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-6 text-center text-decoration-none" data-toggle="modal" data-target="#sectionbooked6" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>6</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 6 Ending-->
				<!-- Section 7 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='7' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='7' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-7 text-center text-decoration-none" data-toggle="modal" data-target="#section7" style="background-color: #4B6C3D;">
					<span>7</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-7 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked7" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>7</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 7 Ending-->
				<!-- Section 8 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='8' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='8' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-8 text-center text-decoration-none" data-toggle="modal" data-target="#section8" style="background-color: #4B6C3D;">
					<span>8</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-8 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked8" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>8</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 8 Ending-->
				<!-- Section 9 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='9' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='9' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-9 text-center text-decoration-none" data-toggle="modal" data-target="#section9" style="background-color: #4B6C3D;">
					<span>9</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-9 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked9" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>9</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 9 Ending-->
				<!-- Section 10 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='10' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='10' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-10 text-center text-decoration-none" data-toggle="modal" data-target="#section10" style="background-color: #4B6C3D;">
					<span>10</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-10 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked10" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>10</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 10 Ending-->
				<!-- Section 11 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='11' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='11' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-11 text-center text-decoration-none" data-toggle="modal" data-target="#section11" style="background-color: #4B6C3D;">
					<span>11</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-11 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked11" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>11</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 11 Ending-->
				<!-- Section 12 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='12' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='12' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-12 text-center text-decoration-none" data-toggle="modal" data-target="#section12" style="background-color: #4B6C3D;">
					<span>12</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-12 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked12" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>12</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 12 Ending-->
				<!-- Section 13 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='13' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='13' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-13 text-center text-decoration-none" data-toggle="modal" data-target="#section13" style="background-color: #4B6C3D;">
					<span>13</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-13 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked13" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>13</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 13 Ending-->
				<!-- Section 14 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='14' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='14' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-14 text-center text-decoration-none" data-toggle="modal" data-target="#section14" style="background-color: #4B6C3D;">
					<span>14</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-14 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked14" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>14</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 14 Ending-->
				<!-- Section 15 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='15' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='15' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-15 text-center text-decoration-none" data-toggle="modal" data-target="#section15" style="background-color: #4B6C3D;">
					<span>15</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-15 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked15" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>15</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 15 Ending-->
				<!-- Section 16 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='16' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='16' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-16 text-center text-decoration-none" data-toggle="modal" data-target="#section16" style="background-color: #4B6C3D;">
					<span>16</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-16 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked16" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>16</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 16 Ending-->
				<!-- Section 17 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='17' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='17' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-17 text-center text-decoration-none" data-toggle="modal" data-target="#section17" style="background-color: #4B6C3D;">
					<span>17</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-17 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked17" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>17</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 17 Ending-->
				<!-- Section 18 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='18' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='18' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-18 text-center text-decoration-none" data-toggle="modal" data-target="#section18" style="background-color: #4B6C3D;">
					<span>18</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-18 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked18" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>18</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 18 Ending-->
				<div class="text-center">
					<img src="img/ffdwtny.jpg" class="reservation-chart" alt="">
				</div>
			</div>
		</section>
		<section id="second-floor" class="d-flex justify-content-center">
			<div class="section-button">
				<!-- Section 19 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='19' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='19' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-19 text-center text-decoration-none" data-toggle="modal" data-target="#section19" style="background-color: #4B6C3D;">
					<span>19</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-19 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked19" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>19</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 19 Ending-->
				<!-- Section 20 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='20' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='20' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-20 text-center text-decoration-none" data-toggle="modal" data-target="#section20" style="background-color: #4B6C3D;">
					<span>20</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-20 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked20" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>20</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 20 Ending-->
				<!-- Section 21 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='21' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='21' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-21 text-center text-decoration-none" data-toggle="modal" data-target="#section21" style="background-color: #4B6C3D;">
					<span>21</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-21 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked21" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>21</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 21 Ending-->
				<!-- Section 22 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='22' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='22' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-22 text-center text-decoration-none" data-toggle="modal" data-target="#section22" style="background-color: #4B6C3D;">
					<span>22</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-22 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked22" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>22</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 22 Ending-->
				<!-- Section 23 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='23' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='23' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-23 text-center text-decoration-none" data-toggle="modal" data-target="#section23" style="background-color: #4B6C3D;">
					<span>23</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-23 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked23" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>23</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 23 Ending-->
				<!-- Section 24 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='24' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='24' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-24 text-center text-decoration-none" data-toggle="modal" data-target="#section24" style="background-color: #4B6C3D;">
					<span>24</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-24 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked24" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>24</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 24 Ending-->
				<!-- Section 25 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='25' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='25' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-25 text-center text-decoration-none" data-toggle="modal" data-target="#section25" style="background-color: #4B6C3D;">
					<span>25</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-25 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked25" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>25</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 25 Ending-->
				<!-- Section 26 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='26' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='26' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-26 text-center text-decoration-none" data-toggle="modal" data-target="#section26" style="background-color: #4B6C3D;">
					<span>26</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-26 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked26" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>26</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 26 Ending-->
				<!-- Section 27 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='27' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='27' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-27 text-center text-decoration-none" data-toggle="modal" data-target="#section27" style="background-color: #4B6C3D;">
					<span>27</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-27 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked27" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>27</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 27 Ending-->
				<!-- Section 28 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='28' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='28' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-28 text-center text-decoration-none" data-toggle="modal" data-target="#section28" style="background-color: #4B6C3D;">
					<span>28</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-28 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked28" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>28</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 28 Ending-->
				<!-- Section 29 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='29' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='29' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-29 text-center text-decoration-none" data-toggle="modal" data-target="#section29" style="background-color: #4B6C3D;">
					<span>29</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-29 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked29" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>29</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 29 Ending-->
				<!-- Section 30 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='30' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='30' ";
				}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-30 text-center text-decoration-none" data-toggle="modal" data-target="#section30" style="background-color: #4B6C3D;">
					<span>30</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-30 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked30" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>30</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 30 Ending-->
				<!-- Section 31 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='31' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='31' ";
			}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-31 text-center text-decoration-none" data-toggle="modal" data-target="#section31" style="background-color: #4B6C3D;">
					<span>31</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-31 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked31" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>31</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 31 Ending-->
				<!-- Section 32 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='32' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='32' ";
			}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-32 text-center text-decoration-none" data-toggle="modal" data-target="#section32" style="background-color: #4B6C3D;">
					<span>32</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-32 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked32" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>32</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 32 Ending-->
				<!-- Section 33 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='33' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='33' ";
			}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-33 text-center text-decoration-none" data-toggle="modal" data-target="#section33" style="background-color: #4B6C3D;">
					<span>33</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-33 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked33" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>33</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 33 Ending-->
				<!-- Section 34 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='34' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='34' ";
			}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-34 text-center text-decoration-none" data-toggle="modal" data-target="#section34" style="background-color: #4B6C3D;">
					<span>34</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-34 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked34" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>34</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 34 Ending-->
				<!-- Section 35 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='35' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='35' ";
			}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-35 text-center text-decoration-none" data-toggle="modal" data-target="#section35" style="background-color: #4B6C3D;">
					<span>35</span><i class="fab fa-angellist ml-1"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-35 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked35" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>35</span><i class="fas fa-store-alt-slash ml-1"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 35 Ending-->
				<!-- Section 36 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='36' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='36' ";
			}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-36 text-center text-decoration-none" data-toggle="modal" data-target="#section36" style="background-color: #4B6C3D;">
					<span>36</span><i class="fab fa-angellist ml-1"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-36 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked36" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>36</span><i class="fas fa-store-alt-slash ml-1"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 36 Ending-->
				<!-- Section 37 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='37' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='37' ";
			}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-37 text-center text-decoration-none" data-toggle="modal" data-target="#section37" style="background-color: #4B6C3D;">
					<span>37</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-37 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked37" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>37</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 37 Ending-->
				<!-- Section 38 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='38' ";
				
				}else{
					
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='38' ";
			}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-38 text-center text-decoration-none" data-toggle="modal" data-target="#section38" style="background-color: #4B6C3D;">
					<span>38</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-38 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked38" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>38</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 38 Ending-->
				<!-- Section 39 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='39' ";
				
				}else{
				
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='39' ";
			}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-39 text-center text-decoration-none" data-toggle="modal" data-target="#section39" style="background-color: #4B6C3D;">
					<span>39</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-39 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked39" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>39</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 39 Ending-->
				<!-- Section 40 Booking-->
				<?php 
				if(isset($_GET["search"])){
					$check_date= $_GET["search"];
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$check_date' and roomname='40' ";
				}else{
				
				$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$new_date' and roomname='40' ";
			}
				$check_count = mysqli_query($link,$check_booking_query);
				$exist_booking = mysqli_num_rows($check_count);
				if($exist_booking ==0){
				?>
				<a href="#" class="section-40 text-center text-decoration-none" data-toggle="modal" data-target="#section40" style="background-color: #4B6C3D;">
					<span>40</span><br><i class="fab fa-angellist"></i>
				</a>
				<?php
				}else{
				?>
				<a href="#" class="section-40 text-center text-decoration-none" data-toggle="modal"data-target="#sectionbooked40" style="background: repeating-linear-gradient(45deg, #3F2516, #3F2516 5px, #E62F29 5px, #E62F29 15px">
					<span>40</span><br><i class="fas fa-store-alt-slash"></i>
				</a>
				<?php
				}
				?>
				<!-- Section 40 Ending-->
				<div class="text-center">
					<img src="img/sfdwtny.jpg" class="reservation-chart" alt="">
				</div>
			</div>
		</section>
		<!-- Modal -->
		<!-- Section 1 Modal -->
		<div class="modal fade" id="section1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 1 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice1; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice1; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="1" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
								<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 1 Modal End -->
		<!-- Section 2 Modal -->
		<div class="modal fade" id="section2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 2 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice2; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice2; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="2" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 2 Modal End -->
		<!-- Section 3 Modal -->
		<div class="modal fade" id="section3" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 3 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice3; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice3; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="3" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
						<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 3 Modal End -->
		<!-- Section 4 Modal -->
		<div class="modal fade" id="section4" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 4 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice4; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice4; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="4" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 4 Modal End -->
		<!-- Section 5 Modal -->
		<div class="modal fade" id="section5" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 5 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice5; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice5; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="5" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 5 Modal End -->
		<!-- Section 6 Modal -->
		<div class="modal fade" id="section6" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 6 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice6; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail6">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice5; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="6" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 6 Modal End -->
		<!-- Section 7 Modal -->
		<div class="modal fade" id="section7" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 7 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice7; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice7; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="7" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 7 Modal End -->
		<!-- Section 8 Modal -->
		<div class="modal fade" id="section8" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 8 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice8; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice8; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="8" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 8 Modal End -->
		<!-- Section 9 Modal -->
		<div class="modal fade" id="section9" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 9 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice9; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice9; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="9" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 9 Modal End -->
		<!-- Section 10 Modal -->
		<div class="modal fade" id="section10" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 10 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice10; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice10; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="10" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 10 Modal End -->
		<!-- Section 11 Modal -->
		<div class="modal fade" id="section11" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 11 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice11; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice11; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="11" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 11 Modal End -->
		<!-- Section 12 Modal -->
		<div class="modal fade" id="section12" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 12 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice12; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice12; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="12" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 12 Modal End -->
		<!-- Section 13 Modal -->
		<div class="modal fade" id="section13" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 13 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice13; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice13; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="13" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 13 Modal End -->
		<!-- Section 14 Modal -->
		<div class="modal fade" id="section14" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 14 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice14; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice14; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="14" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 14 Modal End -->
		<!-- Section 15 Modal -->
		<div class="modal fade" id="section15" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 15 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice15; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice15; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="15" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 15 Modal End -->
		<!-- Section 16 Modal -->
		<div class="modal fade" id="section16" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 16 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice16; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice16; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="16" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 16 Modal End -->
		<!-- Section 17 Modal -->
		<div class="modal fade" id="section17" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 17 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice17; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice17; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="17" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 17 Modal End -->
		<!-- Section 18 Modal -->
		<div class="modal fade" id="section18" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 18 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice18; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice18; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="18" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 18 Modal End -->
		<!-- Section 19 Modal -->
		<div class="modal fade" id="section19" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 19 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice19; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice19; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="19" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 19 Modal End -->
		<!-- Section 20 Modal -->
		<div class="modal fade" id="section20" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 20 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice20; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice20; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="20" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 20 Modal End -->
		<!-- Section 21 Modal -->
		<div class="modal fade" id="section21" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 21 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice21; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice21; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="21" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 21 Modal End -->
		<!-- Section 22 Modal -->
		<div class="modal fade" id="section22" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 22 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice22; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice22; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="22" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 22 Modal End -->
		<!-- Section 23 Modal -->
		<div class="modal fade" id="section23" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 23 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice23; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice23; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="23" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 23 Modal End -->
		<!-- Section 24 Modal -->
		<div class="modal fade" id="section24" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 24 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice24; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice24; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="24" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 24 Modal End -->
		<!-- Section 25 Modal -->
		<div class="modal fade" id="section25" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 25 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice25; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice25; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="25" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 25 Modal End -->
		<!-- Section 26 Modal -->
		<div class="modal fade" id="section26" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 26 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice26; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice26; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="26" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 26 Modal End -->
		<!-- Section 27 Modal -->
		<div class="modal fade" id="section27" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 27 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice27; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice27; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="27" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 27 Modal End -->
		<!-- Section 28 Modal -->
		<div class="modal fade" id="section28" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 28 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice28; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice28; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="28" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 28 Modal End -->
		<!-- Section 29 Modal -->
		<div class="modal fade" id="section29" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 29 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice29; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice29; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="29" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 29 Modal End -->
		<!-- Section 30 Modal -->
		<div class="modal fade" id="section30" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 30 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice30; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice30; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="30" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 30 Modal End -->
		<!-- Section 31 Modal -->
		<div class="modal fade" id="section31" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 31 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice31; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice31; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="31" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 31 Modal End -->
		<!-- Section 32 Modal -->
		<div class="modal fade" id="section32" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 32 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice32; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice32; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="32" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 32 Modal End -->
		<!-- Section 33 Modal -->
		<div class="modal fade" id="section33" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 33 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice33; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice33; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="33" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 33 Modal End -->
		<!-- Section 34 Modal -->
		<div class="modal fade" id="section34" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 34 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice34; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice34; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="34" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 34 Modal End -->
		<!-- Section 35 Modal -->
		<div class="modal fade" id="section35" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 35 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice35; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice35; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="35" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 35 Modal End -->
		<!-- Section 36 Modal -->
		<div class="modal fade" id="section36" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 36 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice36; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice36; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="36" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 36 Modal End -->
		<!-- Section 37 Modal -->
		<div class="modal fade" id="section37" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 37 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice37; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice37; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="37" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 37 Modal End -->
		<!-- Section 38 Modal -->
		<div class="modal fade" id="section38" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 38 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice38; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice38; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="38" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 38 Modal End -->
		<!-- Section 39 Modal -->
		<div class="modal fade" id="section39" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 39 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice39; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice39; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="39" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 39 Modal End -->
		<!-- Section 40 Modal -->
		<div class="modal fade" id="section40" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Table 40 Booking Form</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<h4>Price: <?php echo $roomprice40; ?></h4>
						<form action="includ/booking.php" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="Text" name="lastname" class="form-control" placeholder="Enter Last Name">
							</div>
							
								<input type="Text" class="form-control" name="price" value="<?php echo $roomprice40; ?>" hidden>
								<input type="Text" class="form-control" name="roomrong" value="40" hidden>
						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone Number">
							</div>
							<input type="text" name="datetime" value="<?php echo $new_date; ?>" hidden>
							<div class="form-group">
								<label>Note or request(If have any)</label>
								<textarea class="form-control" name="message" placeholder="Message" maxlength="50"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="booking" value="Book A Table">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Section 40 Modal End -->
		<!-- Section 1 Booked-->
		<div class="modal fade" id="sectionbooked1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='1' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 1 Booked End-->
		<!-- Section 2 Booked-->
		<div class="modal fade" id="sectionbooked2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='2' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 2 Booked End-->
		<!-- Section 3 Booked-->
		<div class="modal fade" id="sectionbooked3" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='3' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 3 Booked End-->
		<!-- Section 4 Booked-->
		<div class="modal fade" id="sectionbooked4" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='4' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 4 Booked End-->
		<!-- Section 5 Booked-->
		<div class="modal fade" id="sectionbooked5" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='5' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 5 Booked End-->
		<!-- Section 6 Booked-->
		<div class="modal fade" id="sectionbooked6" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='6' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 6 Booked End-->
		<!-- Section 7 Booked-->
		<div class="modal fade" id="sectionbooked7" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='7' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 7 Booked End-->
		<!-- Section 8 Booked-->
		<div class="modal fade" id="sectionbooked8" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='8' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 8 Booked End-->
		<!-- Section 9 Booked-->
		<div class="modal fade" id="sectionbooked9" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='9' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 9 Booked End-->
		<!-- Section 10 Booked-->
		<div class="modal fade" id="sectionbooked10" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='10' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 10 Booked End-->
		<!-- Section 11 Booked-->
		<div class="modal fade" id="sectionbooked11" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='11' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 11 Booked End-->
		<!-- Section 12 Booked-->
		<div class="modal fade" id="sectionbooked12" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='12' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 12 Booked End-->
		<!-- Section 13 Booked-->
		<div class="modal fade" id="sectionbooked13" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='13' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 13 Booked End-->
		<!-- Section 14 Booked-->
		<div class="modal fade" id="sectionbooked14" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='14' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 14 Booked End-->
		<!-- Section 15 Booked-->
		<div class="modal fade" id="sectionbooked15" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='15' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 15 Booked End-->
		<!-- Section 16 Booked-->
		<div class="modal fade" id="sectionbooked16" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='16' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 16 Booked End-->
		<!-- Section 17 Booked-->
		<div class="modal fade" id="sectionbooked17" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='17' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 17 Booked End-->
		<!-- Section 18 Booked-->
		<div class="modal fade" id="sectionbooked18" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='18' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 18 Booked End-->
		<!-- Section 19 Booked-->
		<div class="modal fade" id="sectionbooked19" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='19' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 19 Booked End-->
		<!-- Section 20 Booked-->
		<div class="modal fade" id="sectionbooked20" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='20' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 20 Booked End-->
		<!-- Section 21 Booked-->
		<div class="modal fade" id="sectionbooked21" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='21' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 21 Booked End-->
		<!-- Section 22 Booked-->
		<div class="modal fade" id="sectionbooked22" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='22' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 22 Booked End-->
		<!-- Section 23 Booked-->
		<div class="modal fade" id="sectionbooked23" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='23' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 23 Booked End-->
		<!-- Section 24 Booked-->
		<div class="modal fade" id="sectionbooked24" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='24' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 24 Booked End-->
		<!-- Section 25 Booked-->
		<div class="modal fade" id="sectionbooked25" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='25' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 25 Booked End-->
		<!-- Section 26 Booked-->
		<div class="modal fade" id="sectionbooked26" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='26' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 26 Booked End-->
		<!-- Section 27 Booked-->
		<div class="modal fade" id="sectionbooked27" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='27' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 27 Booked End-->
		<!-- Section 28 Booked-->
		<div class="modal fade" id="sectionbooked28" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='28' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 28 Booked End-->
		<!-- Section 29 Booked-->
		<div class="modal fade" id="sectionbooked29" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='29' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 29 Booked End-->
		<!-- Section 30 Booked-->
		<div class="modal fade" id="sectionbooked30" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='30' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 30 Booked End-->
		<!-- Section 31 Booked-->
		<div class="modal fade" id="sectionbooked31" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='31' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 31 Booked End-->
		<!-- Section 32 Booked-->
		<div class="modal fade" id="sectionbooked32" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='32' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 32 Booked End-->
		<!-- Section 33 Booked-->
		<div class="modal fade" id="sectionbooked33" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='33' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 33 Booked End-->
		<!-- Section 34 Booked-->
		<div class="modal fade" id="sectionbooked34" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='34' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 34 Booked End-->
		<!-- Section 35 Booked-->
		<div class="modal fade" id="sectionbooked35" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='35' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 35 Booked End-->
		<!-- Section 36 Booked-->
		<div class="modal fade" id="sectionbooked36" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='36' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 36 Booked End-->
		<!-- Section 37 Booked-->
		<div class="modal fade" id="sectionbooked37" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='37' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 37 Booked End-->
		<!-- Section 38 Booked-->
		<div class="modal fade" id="sectionbooked38" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='38' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>
				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 38 Booked End-->
		<!-- Section 39 Booked-->
		<div class="modal fade" id="sectionbooked39" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='39' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>
					<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 39 Booked End-->
		<!-- Section 40 Booked-->
		<div class="modal fade" id="sectionbooked40" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Booked!</h5>
					<?php 
					$bookinginfoquery = "SELECT * FROM bookingroom WHERE bookingdate = '$new_date' and roomname ='40' ";
					$exiuet = mysqli_query($link,$bookinginfoquery);
					while($bookingdata = mysqli_fetch_array($exiuet)){
						$staffname =$bookingdata["staffname"];
						$firstname =$bookingdata["firstname"];
						$lastname =$bookingdata["lastname"];
						$phonenumber = $bookingdata["phonenumber"];
						$message = $bookingdata["message"];
						$id =$bookingdata["id"];
					 ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<div class="modal-body text-center">
					<h5>Booked By: <?php echo $staffname; ?></h5>
					<h5>Booked For: <?php echo $firstname; ?> <?php echo $lastname; ?></h5>
					<h5>Phone Number: <?php echo $phonenumber; ?></h5>
					<?php if ($message) { ?>
					<h5>Message: <?php echo $message; ?></h5>
					<?php } 
					$user_id_login 				=$_SESSION["id_lgn_user"];		
					$mysql_query_lgn 			= "SELECT * FROM users WHERE id = '$user_id_login'";
					$exicute_ec 				= mysqli_query($link,$mysql_query_lgn);
					if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
					 $id_db 		= $data_cas_ec['username'];
					 $id_roll 		= $data_cas_ec['roll'];
					} if($id_roll !='user'){?>
					<a href="includ/bookingdelete.php?id=<?php echo $id; ?>" class="btn btn-danger">Unbooked</a>

				<?php } }?>
				</div>
				</div>
			</div>
		</div>
		<!-- Section 40 Booked End-->
		<footer style="background-color: #000; overflow: hidden;">
			<div class="container text-center">
				<p style="color: #fff; padding-top: 30px; padding-bottom: 20px;">Design & Developed by <a href="https://gavannanightclub.com/" target="_blank">GavannaNightClub</a></p>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
		<script src="js/ruang-admin.min.js"></script>
		<!-- Jquery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
		<!-- Custom Javascript -->
		<script>
			$(document).ready(function () {
				$(".owl-carousel").owlCarousel({
				items:1,
				loop:true,
				nav:true,
				dots:true,
				autoplay:true,
				autoplaySpeed:1000,
				smartSpeed:1500,
				autoplayHoverPause:true
				});
			});
			$('#simple-date1 .input-group.date').datepicker({
				format: 'mm/dd/yyyy',
				todayBtn: 'linked',
				todayHighlight: true,
				autoclose: true,
				startDate: new Date(),
			});
			// document.addEventListener('contextmenu', event => event.preventDefault());
			// document.onkeydown = function(e) {
			// 	if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117))
			// 	return false;
			// 	};

		</script>

	</body>
</html>