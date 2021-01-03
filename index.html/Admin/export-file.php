<?php

$connect = new PDO("mysql:host=localhost;dbname=rizwan_reservation", "rizwan_reserve", "bang@123");

$start_date_error = '';
$end_date_error = '';

if(isset($_POST["export"]))
{
 if(empty($_POST["start_date"]))
 {
  $start_date_error = '<label class="text-danger">Start Date is required</label>';
 }
 else if(empty($_POST["end_date"]))
 {
  $end_date_error = '<label class="text-danger">End Date is required</label>';
 }
 else
 {
  $file_name = 'Order Data.csv';
  header("Content-Description: File Transfer");
  header("Content-Disposition: attachment; filename=$file_name");
  header("Content-Type: application/csv;");

  $file = fopen('php://output', 'w');

  $header = array("Booking Date", "Staff Name", "First Name", "Last Name", "Table Booked", "Price", "Phone Number" );

  fputcsv($file, $header);

  $query = "
  SELECT * FROM bookingroom 
  WHERE bookingdate >= '".$_POST["start_date"]."' 
  AND bookingdate <= '".$_POST["end_date"]."' 
  ORDER BY bookingdate DESC
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  foreach($result as $row)
  {
   $data = array();
   $data[] = $row["bookingdate"];
   $data[] = $row["staffname"];
   $data[] = $row["firstname"];
   $data[] = $row["lastname"];
   $data[] = $row["roomname"];
   $data[] = $row["roomeprice"];
   $data[] = $row["phonenumber"];
  
   fputcsv($file, $data);
  }
  fclose($file);
  exit;
 }
}

$query = "
SELECT * FROM bookingroom 
ORDER BY bookingdate DESC;
";

$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
?>
<?php include "header.php" ?>
						<!-- Container Fluid-->
						<div class="container-fluid" id="container-wrapper">
							<div class="d-sm-flex align-items-center justify-content-between mb-4">
								<h1 class="h3 mb-0 text-gray-800">Export File</h1>
							</div>
							<div class="row mb-3">
								<!-- Blog Card -->
								<div class="col-xl-12 col-md-12 mb-4 text-center">
									<form method="post">
										<div class="card h-80">
											<div class="card-body">
												<div class="row align-items-center">
													<div class="col mr-2">
														<div class="h5 mb-0 font-weight-bold text-gray-800 d-flex justify-content-center">
															<div class="col-4">
																<div class="form-group" id="simple-date4">
																	<label for="dateRangePicker">Range Select</label>
																	<div class="input-daterange input-group">
																		<input type="text" class="input-sm form-control" name="start_date" autocomplete="off">
																		<?php echo $start_date_error; ?>
																		<div class="input-group-prepend">
																			<span class="input-group-text">to</span>
																		</div>
																		<input type="text" class="input-sm form-control" name="end_date" autocomplete="off">
																		<?php echo $end_date_error; ?>
																	</div>
																</div>
																<input type="submit" name="export" class="btn btn-primary" value="Export">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!---Container Fluid-->
					</div>
					<!-- Footer -->
					<footer class="sticky-footer bg-white">
						<div class="container my-auto">
							<div class="copyright text-center my-auto">
								<span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed , designed & customized by
								<b><a href="https://www.webphics.net" target="_blank">Webphics</a></b>
							</span>
						</div>
					</div>
				</footer>
				<!-- Footer -->
			</div>
		</div>
		<!-- Scroll to top -->
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
		</a>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
		<script src="js/ruang-admin.min.js"></script>
		<script src="vendor/chart.js/Chart.min.js"></script>
		<script src="js/demo/chart-area-demo.js"></script>
		<script>
			$('#simple-date4 .input-daterange').datepicker({        
				format: 'mm/dd/yyyy',
				autoclose: true,
				todayHighlight: true,
				todayBtn: 'linked',
			}); 
		</script>
	</body>
</html>