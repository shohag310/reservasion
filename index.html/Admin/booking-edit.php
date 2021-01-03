<?php include'header.php'; 
if(isset($_GET["id"])){
	$id =$_GET["id"];
}else{
	js_location("booking-list.php");
}
?>					<?php
 						$bookingroom ="SELECT * FROM bookingroom WHERE id ='$id' ";
                       
                         
                      
                         
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
						<!-- Container Fluid-->
						<div class="container-fluid" id="container-wrapper">
						<?php 
							echo successMessage();
							echo Message();
						?>
							<div class="d-sm-flex align-items-center justify-content-between mb-4">
								<h1 class="h3 mb-0 text-gray-800">Edit Booking Form</h1>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<!-- Form Basic -->
									<div class="card mb-4">
										<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
											<h6 class="m-0 font-weight-bold text-primary">Edit Booking Form</h6>
										</div>
										<div class="card-body">
											<form action="../includ/editbooking.php?id=<?php echo $id; ?>" method="post">
												<div class="form-group">
													<label>Section Booked</label>
													<input type="text" name="section" class="form-control"
													 value="<?php echo $roomname ?> " required>
												</div>
												<div class="form-group">
													<label>First Name</label>
													<input type="text" name="firstname" class="form-control"
													value="<?php echo $firstname ?> " required>
												</div>
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" name="lastname" class="form-control"
													value="<?php echo $lastname ?> " required>
												</div>
												<div class="form-group">
													<label>Phone Number</label>
													<input type="text" name="phonenumber" class="form-control"
													value="<?php echo $phonenumber ?> " required>
												</div>
												<input type="submit" name="update" class="btn btn-primary" value="Update">
											
											</form>
											<?php } ?>
										</div>
									</div>
								</div>
								
<?php include'footer.php'; ?>