<?php include_once"config.php"; ?>
<?php include_once"secction.php"; ?>
<?php include_once"functions.php"; 
admin_login_check();
if(isset($_GET["id"])){
	$id =$_GET["id"];
}else{
	js_location("../Admin/booking-list.php");
}
?>
<?php 
if(isset($_POST["update"])){

	$roomname 					= test_input($_POST["section"]);
	$firstname 					= test_input($_POST["firstname"]);
	$lastname 					= test_input($_POST["lastname"]);
	$phonenumber 					= test_input($_POST["phonenumber"]);

	
   $query = "UPDATE bookingroom SET firstname='$firstname', lastname='$lastname', phonenumber='$phonenumber',roomname='$roomname' WHERE id='$id'
	";
	global $link;
	
	$exicute = mysqli_query($link,$query );
	if($exicute){		
	$_SESSION["success_MESSAGE"]  = "Booking form is updated.";
	new_loc("../Admin/booking-edit.php?id=".$id);
	}else{

	$_SESSION["ERROR_MESSAGE"]  = "Something went wrong, Please try again!";
	new_loc("../Admin/booking-edit.php?id=".$id);
	}

}else{
	echo 'not found';


}

 ?>