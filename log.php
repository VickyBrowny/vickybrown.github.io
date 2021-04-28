<?php 
session_start();
require "db.php";

if(isset($_POST['Login']))
{

	$username = $_POST['Username'];
	$pass = $_POST['Password'];
	
		$sql = "SELECT * FROM sign_in WHERE Username = '$username'";
		$_result = mysqli_query($link, $sql);


		if (mysqli_fetch_assoc($_result)) 
{
	$_SESSION['user']=$_POST['Username'];
	header('location: dashboard.php');
} 
else {
	echo "<script> alert('please enter a valid username and password');</script>";
}
  mysqli_query($link, $result);
}
?>