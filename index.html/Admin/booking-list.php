<?php include'header.php'; ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
	<?php
		echo successMessage();
		echo Message();
	?>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Booking List</h1>
		<div class="dropdown mb-3">
			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Choose Action
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="../includ/bookingdeleteall.php">Delete All</a>
			</div>
		</div>
	</div>
	<!-- Row -->
	<div class="row">
		<!-- DataTable with Hover -->
		<div class="col-lg-12">
			<div class="card mb-4">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Booking List</h6>
				</div>
				<div class="table-responsive p-3">
					<table class="table align-items-center table-flush table-hover" id="dataTableHover">
						<thead class="thead-light">
							<tr class="text-center">
								<th class="sorting_1 sorting_desc">Booking ID</th>
								<th>Booking Date</th>
								<th>Staff Name</th>
								<th>Booking Name</th>
								<th>Message</th>
								<th>Phone Number</th>
								<th>Section Booked</th>
								<th>Price</th>
								<th>Action</th>
							</tr>
						</thead>
						<tfoot>
						<tr class="text-center">
							<th>Booking ID</th>
							<th>Booking Date</th>
							<th>Staff Name</th>
							<th>Booking Name</th>
							<th>Message</th>
							<th>Phone Number</th>
							<th>Section Booked</th>
							<th>Price</th>
							<th>Action</th>
						</tr>
						</tfoot>
						<tbody>
							<?php

								$bookingroom ="SELECT * FROM bookingroom ";
								$run_bookingroom_query = mysqli_query($link,$bookingroom);
								$as =0;
								while ( $bookinglist = mysqli_fetch_array($run_bookingroom_query) ) {
									$id = $bookinglist["id"];
									$firstname = $bookinglist["firstname"];
									$lastname = $bookinglist["lastname"];
									$phonenumber = $bookinglist["phonenumber"];
									$bookingdate = $bookinglist["bookingdate"];
									$roomname = $bookinglist["roomname"];
									$roomeprice = $bookinglist["roomeprice"];
									$staffname = $bookinglist["staffname"];
									$message = $bookinglist["message"];
								
							?>
							
							<tr class="text-center">
								<td>ID-<?php echo $id; ?></td>
								<td><?php echo $bookingdate; ?></td>
								<td><?php echo $staffname; ?></td>
								<td><?php echo $firstname; ?> <?php echo $lastname; ?></td>
								<td><?php echo $message; ?></td>
								<td><?php echo $phonenumber; ?></td>
								<td><?php echo $roomname; ?></td>
								<td><?php echo $roomeprice; ?></td>
								
								<td><a href="booking-edit.php?id=<?php echo $id; ?>"><i class="fas fa-edit mr-2"></i></a><a href="../includ/bookingdelete.php?id=<?php echo $id; ?>"><i class="fas fa-trash-alt"></i></a></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!--Row-->
	<!-- Documentation Link -->
	<div class="row">
<?php include'footer.php'; ?>