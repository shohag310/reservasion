<?php // Include config file
require_once "config.php";
include 'functions.php';
include 'secction.php';
admin_login_check();
global $link;
 ?>
<?php 
if(isset($_GET['id'])){
	echo $userid = $_GET['id'];}
	else{
		new_loc($_SERVER["HTTP_REFERER"]);
	}
  ?>
<?php 
if(isset($_POST['update'])){
  if(empty($_POST["password"] or $_POST["confirm_password"])){
    $_SESSION["ERROR_MESSAGE"] = "All fields are required!";
    new_loc($_SERVER["HTTP_REFERER"]);
  }else{
    $confirm_password             	= test_input($_POST["confirm_password"]);
    $password         				= test_input($_POST["password"]);
    if(($password ==$confirm_password)){
         $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
      $mysql_query = "UPDATE users SET passwords='$param_password' WHERE id='$userid'";
      

              
             
            $ran_query = mysqli_query($link,$mysql_query);
            if($ran_query){
             
                $_SESSION["success_MESSAGE"] ="User has been updated!";
                 new_loc($_SERVER["HTTP_REFERER"]);
            }else{
           
            $_SESSION["ERROR_MESSAGE"]="Something went wrong, Please try again!";
             new_loc($_SERVER["HTTP_REFERER"]);
            }
    }else{
 				$_SESSION["ERROR_MESSAGE"] ="Both passwords must match!";
                 new_loc($_SERVER["HTTP_REFERER"]);
      
    }
      
          
  }
}
   ?>
