<?php session_start();  ?>
<?php
include"functions.php";
session_unset();
session_destroy();
 new_loc('../login.php');
 ?>