<?php // Include config file
require_once "config.php";
include 'functions.php';
include 'secction.php';
login_check();
global $link;
 ?>
<?php 
if(isset($_POST["booking"])){
	if(empty($_POST["firstname"]) or empty($_POST["lastname"]) or empty($_POST["phone"]) or empty($_POST["datetime"])){
		
		$_SESSION["ERROR_MESSAGE"]="All fields need to be required!";
		new_loc($_SERVER["HTTP_REFERER"]);

	}else{
		$firstname 			=test_input($_POST["firstname"]);
		$lastname 			=test_input($_POST["lastname"]);
		$phone				=test_input($_POST["phone"]);
		$message			=test_input($_POST["message"]);
		$price				=test_input($_POST["price"]);
		$roomrong			=test_input($_POST["roomrong"]);
		$datetime			=test_input($_POST["datetime"]);
		$staffname			=$_SESSION["user_name"];
			$check_booking_query ="SELECT * FROM bookingroom WHERE bookingdate ='$datetime' and roomname ='$roomrong' ";
			$check_count = mysqli_query($link,$check_booking_query);
			$exist_booking = $check_count->num_rows;
			if($exist_booking == 0){
            $mysql_query = "INSERT INTO bookingroom (firstname, lastname, phonenumber, bookingdate,roomname,roomeprice,staffname,message)
             VALUES ('$firstname','$lastname','$phone', '$datetime','$roomrong','$price','$staffname', '$message') ";
            $ran_query = mysqli_query($link,$mysql_query);
            if($ran_query){
            	
                $_SESSION["success_MESSAGE"] ="Booking successfully completed.";
                new_loc($_SERVER["HTTP_REFERER"]);
            }else{
           
		$_SESSION["ERROR_MESSAGE"]="Something went wrong, Please try again!".$exist_booking;
		new_loc($_SERVER["HTTP_REFERER"]);
            }
      $link->close();
			
      		}else{
      			$_SESSION["ERROR_MESSAGE"]="This table is booked.";
		new_loc($_SERVER["HTTP_REFERER"]);
			}

		
	}
}else{
	echo "<h1 style='color:red;'>You are not allowed here.</h1>";
}

?>
