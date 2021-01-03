<?php // Include config file
require_once "config.php";
include 'functions.php';
include 'secction.php';
admin_login_check();
global $link;
 ?>
 <?php 
if(isset($_POST["create"])){
	if(empty($_POST["username"]) or empty($_POST["password"]) or empty($_POST["confirm_password"])){
		
		$_SESSION["ERROR_MESSAGE"]="All fields need to be filled up.";
		new_loc('../registration.php?result=field empty');

	}else{
		$username 			=test_input($_POST["username"]);
		$roll 				=test_input($_POST["roll"]);
		$password 			=test_input($_POST["password"]);
		$confirm_password	=test_input($_POST["confirm_password"]);
		
		if($password == $confirm_password){
			$check_user_query ="SELECT * FROM users WHERE username = '$username' ";
			$check_count = mysqli_query($link,$check_user_query);
			$exist_user = $check_count->num_rows;
			if($exist_user == 0){
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $mysql_query = "INSERT INTO users (username,  passwords, roll, createdate)
             VALUES ('$username','$param_password','$roll', '$the_date') ";
            $ran_query = mysqli_query($link,$mysql_query);
            if($ran_query){
            	
                $_SESSION["success_MESSAGE"] ="One user has been created!";
                new_loc('../Admin/create-new-user.php');
            }else{
           
		$_SESSION["ERROR_MESSAGE"]="Something went wrong, Please try again!";
		new_loc('../Admin/create-new-user.php');
            }
      $link->close();
			
      		}else{$_SESSION["ERROR_MESSAGE"]="Username already exists. Please try with another username.";
		new_loc('../Admin/create-new-user.php');
			}

		}else{
			
		$_SESSION["ERROR_MESSAGE"]="Both passwords must match!";
		new_loc('../Admin/create-new-user.php');
		}
	}
}else{
	echo "<h1 style='color:red;'>Request Forbidden.</h1>";
}

?>