<?php include 'header.php'; ?>
<?php 
if(isset($_GET['id'])){
	$userid = $_GET['id'];
		?>	
						<!-- Container Fluid-->
						<div class="container-fluid" id="container-wrapper">
						<?php 
							echo successMessage();
							echo Message();
						?>
							<div class="d-sm-flex align-items-center justify-content-between mb-4">
								<h1 class="h3 mb-0 text-gray-800">Edit User</h1>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<!-- Form Basic -->
									<div class="card mb-4">
										<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
											<h6 class="m-0 font-weight-bold text-primary">User Form</h6>
										</div>
										<div class="card-body">
											<?php  
											$pass_query         ="SELECT * FROM users WHERE id ='$userid' and roll='staff' ";
								          $exiqute            = mysqli_query($link,$pass_query);
								          $check_user         = $exiqute->num_rows;
								          global $check_user;
								          if($data_cas        = mysqli_fetch_assoc($exiqute)){
								          $user_name          = $data_cas['username'];
								      								          ?>
											<form action="../includ/updateuser.php?id=<?php echo $userid; ?>" method="post">
												<div class="form-group">
													<label>Username</label>
													<input type="text" class="form-control"
													placeholder="Enter Username" value="<?php echo $user_name; ?>" disabled>
												</div>
												<div class="form-group">
													<label>Password</label>
													<input type="password" id="password"  name="password" class="form-control" placeholder="Password">
												</div>
												<div class="form-group">
													<label>Confirm Password</label>
													<input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
												</div>
												<input type="submit" value="Update" name="update" class="btn btn-primary">
											</form>
											<?php }
 ?>
										</div>
									</div>
								</div>
<?php }else{
	echo 404;
}
 ?>		
      <script>
       setTimeout(
    function() { $('#password').val(''); },
    10//1,000 milliseconds = 1 second
);
      </script>					
<?php include 'footer.php' ?>