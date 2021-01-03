<?php
// Include config file
require_once "includ/config.php";
//include session file
 include'includ/secction.php';
 //include functions file
 include'includ/functions.php';
if(!empty($_SESSION["user_name_user"])){
  new_loc("index.php");
    
}
if (isset($_POST["login"])) {
if(empty($_POST["username"] or $_POST["password"])){
  $_SESSION["ERROR_MESSAGE"] = "All Field Not Must Be Empty";
    

}else{
          $user_neme          = test_input($_POST["username"]);
          $password           = test_input($_POST["password"]);
          $pass_query         ="SELECT * FROM users WHERE username ='$user_neme' ";
          $exiqute            = mysqli_query($link,$pass_query);
          $check_user         = $exiqute->num_rows;
          global $check_user;
          if($data_cas        = mysqli_fetch_assoc($exiqute)){
          $user_name          = $data_cas['username'];
          $pas_db             = $data_cas['passwords'];
          $id_db              = $data_cas['id'];
          $id_roll            = $data_cas['roll'];
           if(password_verify($password,$pas_db)){
    $set_user = password_hash($user_name, PASSWORD_DEFAULT);   
    $_SESSION["success_MESSAGE"] = "Welcome ".$user_name;

    $_SESSION["user_name_user"]=$user_name;
    $_SESSION["id_lgn_user"]=$id_db;
    $_SESSION["user_id_user"]=$set_user;
    if($id_roll =='admin'){
    	js_location("Admin/index.php");
    }else{
    	
    js_location("index.php");
    }
    
    }else{
    $_SESSION["ERROR_MESSAGE"] = "Invalid Password";
        
  }

  }else{
    $_SESSION["ERROR_MESSAGE"] = "Invalid Username";

  }
 

   

 
    


  
}


}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		<style>
			body {
				font-family: 'Montserrat', sans-serif;
			}
			.content-section {
				background: #ffffff;
				padding: 10px 20px;
				border: 1px solid #dddddd;
				border-radius: 3px;
				margin-bottom: 20px;
				margin-top: 50px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col d-flex justify-content-center" style="margin-top: 3.1rem!important;">
					<div class="content-section">
						<form action="login.php" method="POST">
							<fieldset class="form-group">
								<legend class="border-bottom mb-4">Log In</legend>
								<?php 
								echo Message(); ?>
								<div id="div_id_username" class="form-group">
									<label for="id_username" class=" requiredField">
										Username<span class="asteriskField">*</span>
									</label>
									<div class="">
										<input type="text" name="username" autofocus class="textinput textInput form-control" required id="id_username"placeholder="Username">
									</div>
								</div>
								<div id="div_id_password" class="form-group">
									<label for="id_password" class=" requiredField">
										Password<span class="asteriskField">*</span>
									</label>
									<div class="">
										<input type="password" name="password" class="textinput textInput form-control" required id="id_password" placeholder="Password">
									</div>
								</div>
							</fieldset>
							<div class="form-group text-center">
								<input class="btn btn-outline-info" type="submit" value="Login" name="login">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/091f2766b8.js" crossorigin="anonymous"></script>
	</body>
</html>