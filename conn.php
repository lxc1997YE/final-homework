<?php
$conn = mysqli_connect("localhost","root","root","music");
if(empty($conn))  {
	die("mysqli_connect failed: ".mysqli_connect_error());
	}
mysqli_query($conn,"set names utf8");
?>