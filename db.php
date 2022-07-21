<?php
	$servername='ip:port';
	$username='user1';
	$password='xxxxxx';
	$dbname = "out_test";
	$conn=mysqli_connect($servername,$username,$password,"$dbname");
	  if(!$conn){
		  die('Could not Connect MySql Server:' .mysqli_error());
		}
?>
