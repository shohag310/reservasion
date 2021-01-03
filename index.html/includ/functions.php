<?php 
//database include
include_once 'config.php'; ?>
<?php 
//time date function
date_default_timezone_set('America/New_York');
$the_date = date("m/d/Y");
global $the_date;
//location auto load js
function js_location($data){
	?>
	<script>
		window.location.assign('<?php echo $data; ?>');
	</script>
	<?php
}
//location auto load php
function new_loc($data){
	?>
	<script>
		window.location.assign('<?php echo $data; ?>');
	</script>
	<?php
	exit;

}
//input validation
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//login user secruty		
function login_check(){
	global $link;
	if(isset($_SESSION["user_id_user"])){
		$user_id_login =$_SESSION["id_lgn_user"];
		$licenc_login = $_SESSION["user_id_user"];
		
		$mysql_query_lgn = "SELECT * FROM users WHERE id = '$user_id_login'";
		$exicute_ec = mysqli_query($link,$mysql_query_lgn);
	if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
	
	 $id_db = $data_cas_ec['username'];
	}
	if(password_verify($id_db, $licenc_login)){
		$_SESSION["user_name"]  = $id_db;
		
	}else{
		
		$_SESSION["ERROR_MESSAGE"] = "Login Needed";
		new_loc("login.php");
		
	}
	}else{
		new_loc("login.php");
	}
}
function staff_login_check(){
	global $link;
	if(isset($_SESSION["user_id_user"])){
		$user_id_login =$_SESSION["id_lgn_user"];
		$licenc_login = $_SESSION["user_id_user"];
		
		$mysql_query_lgn = "SELECT * FROM users WHERE id = '$user_id_login'";
		$exicute_ec = mysqli_query($link,$mysql_query_lgn);
	if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
	
	 $id_db = $data_cas_ec['username'];
	 $id_roll 	= $data_cas_ec['roll'];
	}
	if(password_verify($id_db, $licenc_login)){
		$_SESSION["user_name"]  = $id_db;
		if($id_roll=='staff' or $id_roll=='admin'){
			$_SESSION["user_name"]  = $id_db;
		}else{
			new_loc("../index.php");
		}
		
	}else{
		
		$_SESSION["ERROR_MESSAGE"] = "Login Needed";
		new_loc("../login.php");
		
	}
	}else{
		new_loc("../login.php");
	}
}
function bookingcheck($romenong){
	global $link;
	$the_date = date("Y m d");
			$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate <'$the_date' and roomname='$romenong' ";
			$check_count = mysqli_query($link,$check_booking_query);
			$exist_booking = mysqli_num_rows($check_count);
			if($exist_booking>0){

			return $exist_booking;
			}
}
//admin login user secruty		
function admin_login_check(){
	global $link;
	if(isset($_SESSION["user_id_user"])){
		$user_id_login =$_SESSION["id_lgn_user"];
		$licenc_login = $_SESSION["user_id_user"];
		
		$mysql_query_lgn = "SELECT * FROM users WHERE id = '$user_id_login'";
		$exicute_ec = mysqli_query($link,$mysql_query_lgn);
	if($data_cas_ec = mysqli_fetch_assoc($exicute_ec)){
	
	 $id_db 	= $data_cas_ec['username'];
	 $id_roll 	= $data_cas_ec['roll'];
	}
	if(password_verify($id_db, $licenc_login)){
		if($id_roll=='admin'){
			$_SESSION["user_name"]  = $id_db;
		}else{
			new_loc("../index.php");
		}
		
		
	}else{
		
		$_SESSION["ERROR_MESSAGE"] = "Login Needed";
		new_loc("../index.php");
		
	}
	}else{
		new_loc("../index.php");
	}
}
 ?>