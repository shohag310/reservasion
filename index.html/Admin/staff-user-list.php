<?php include 'header.php'; ?>
						<!-- Container Fluid-->
						<div class="container-fluid" id="container-wrapper">
						<?php 
							echo successMessage();
							echo Message();
						?>
							<div class="d-sm-flex align-items-center justify-content-between mb-4">
								<h1 class="h3 mb-0 text-gray-800">Staff User List</h1>
								<div class="dropdown mb-3">
									<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Choose Action
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="../includ/deletealluser.php">Delete All</a>
									</div>
								</div>
							</div>
							<!-- Row -->
							<div class="row">
								<!-- DataTable with Hover -->
								<div class="col-lg-12">
									<div class="card mb-4">
										<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
											<h6 class="m-0 font-weight-bold text-primary">Staff User List</h6>
											<div class="ml-auto"></div>
											<a href="create-new-user.php" class="btn btn-primary mr-2">Create User</a>
										</div>
										<div class="table-responsive p-3">
											<table class="table align-items-center table-flush table-hover" id="dataTableHover">
												<thead class="thead-light">
													<tr class="text-center">
														<th>Name</th>
														<th>Created Date</th>
														<th>Action</th>
													</tr>
												</thead>
												<tfoot>
												<tr class="text-center">
													<th>Name</th>
													<th>Created Date</th>
													<th>Action</th>
												</tr>
												</tfoot>
												<tbody>
							<?php 
		                        $users ="SELECT * FROM users WHERE roll !='admin' ";
		                        $run_users_query = mysqli_query($link,$users);
		                          $as =0;
		                        while ( $all_users = mysqli_fetch_array($run_users_query) ) {
		                          $id 			= $all_users['id'];
		                          $username 	= $all_users['username'];
		                          $createdate 	= $all_users['createdate'];
		                          $as++;
		                     ?>  
													<tr class="text-center">
														<td><?php echo $username; ?></td>
														<td><?php echo $createdate = date("d/m/Y"); ?></td>
														<td><a href="user-edit.php?id=<?php echo $id; ?>"><i class="fas fa-edit mr-2"></i></a><a href="../includ/deleteuser.php?id=<?php echo $id; ?>"><i class="fas fa-trash-alt"></i></a></td>
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
								
<?php include 'footer.php'; ?>
						