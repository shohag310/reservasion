<?php include'header.php'; ?>
						<!-- Container Fluid-->
						<div class="container-fluid" id="container-wrapper">
						<?php 
							echo successMessage();
							echo Message();
						?>
							<div class="d-sm-flex align-items-center justify-content-between mb-4">
								<h1 class="h3 mb-0 text-gray-800">Create New User</h1>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<!-- Form Basic -->
									<div class="card mb-4">
										<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
											<h6 class="m-0 font-weight-bold text-primary">User Form</h6>
										</div>
										<div class="card-body">
											<form action="../includ/registration_user.php" method="post">
												<div class="form-group">
													<label>Username</label>
													<input type="text" name="username" class="form-control"
													placeholder="Enter Username">
												</div>
												<div class="form-group">
													<label >Roll</label>
													<select name="roll" class="form-control">
														<option value="staff">Staff</option>
														<option value="user">User</option>
													</select>
												</div>
												<div class="form-group">
													<label>Password</label>
													<input type="password" name="password" class="form-control" placeholder="Password">
												</div>
												<div class="form-group">
													<label>Confirm Password</label>
													<input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
												</div>
												<input type="submit" value="Submit" name="create" class="btn btn-primary">
											</form>
										</div>
									</div>
								</div>
								
<?php include'footer.php'; ?>