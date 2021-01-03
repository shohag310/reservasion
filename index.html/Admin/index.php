<?php include'header.php'; ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
	<?php
		echo successMessage();
		echo Message();
	?>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
	</div>
	<!-- Post List -->
	<div class="row">
		<div class="col-lg-12 mb-4">
			<!-- Simple Tables -->
			<div class="card">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Booking Lists</h6>
				</div>
				<div class="table-responsive">
					<table class="table align-items-center table-flush">
						<thead class="thead-light text-center">
							<tr>
								<th>Name</th>
								<th>Booking Date</th>
								<th>Table Booked</th>
								<th>Price</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody class="text-center">
							<?php

								$bookingroom ="SELECT * FROM bookingroom ORDER BY id DESC LIMIT 5";
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
							<tr>
								<td><?php echo $firstname; ?> <?php echo $lastname; ?></td>
								<td><?php echo $bookingdate; ?></td>
								<td><?php echo $roomname; ?></td>
								<td><span class="badge badge-success p-2"><?php echo $roomeprice; ?></span></td>
								<td><a href="booking-edit.php?id=<?php echo $id; ?>" class="btn btn-sm btn-primary">Detail</a></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="card-footer"></div>
			</div>
		</div>
	</div>
<?php include'footer.php'; ?>