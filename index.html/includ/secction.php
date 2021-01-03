<?php session_start(); ?>
<?php 
function Message(){
		if(isset($_SESSION["ERROR_MESSAGE"])){
		$output ="<div class='alert alert-danger mt-2'>";
		$output .=htmlentities($_SESSION["ERROR_MESSAGE"]);
		$output .="</div>";
		$_SESSION["ERROR_MESSAGE"]= null;
		return $output;
		}
		
}
function successMessage(){
		if(isset($_SESSION["success_MESSAGE"])){
		$output ="<div class='alert alert-success mt-2'>";
		$output .=htmlentities($_SESSION["success_MESSAGE"]);
		$output .="</div>";
		$_SESSION["success_MESSAGE"]= null;
		return $output;
		}
		
}



 ?>