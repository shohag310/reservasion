<?php include_once"config.php"; ?>
<?php include_once"secction.php"; ?>
<?php include_once"functions.php"; ?>
<?php
admin_login_check();
$user_id = $_GET["id"];
$approved_query = "DELETE FROM bookingroom";
$ran_the_query = mysqli_query($link,$approved_query);
if($ran_the_query){
	$_SESSION["success_MESSAGE"]  ="All booking is deleted.";
	new_loc("../Admin/booking-list.php");
}else{
	$_SESSION["ERROR_MESSAGE"] ="Something went wrong, Please try again!";
	new_loc("../Admin/booking-list.php");
}
?>