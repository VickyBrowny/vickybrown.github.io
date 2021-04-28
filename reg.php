<?php 
session_start();
require "db.php";

if(isset($_POST['Submit']))
{
	$fname = $_POST['Full_name'];
	$username = $_POST['Username'];
	$pass = $_POST['Password'];
	$pass2 = $_POST['Password2'];
	$mail = $_POST['Email'];
	$numb = $_POST['Phone_number'];
	$address = $_POST['Address'];
	$date = $_POST['Date_of_Birth'];


		$sql = "SELECT * FROM sign_in WHERE Username = '$username'";
	$result = mysqli_query($link, $sql);
	$num = mysqli_num_rows($result);

	if($num == 1 && $pass2 != $pass) {
	echo "details exist or passwords did not match";
	
	} else {
		$result = 'INSERT into sign_in (Full_name , Username , Password , Password2 , Email , Phone_number , Address , Date_of_Birth) VALUES ("'.$fname.'" , "'.$username.'" , "'.$pass.'" , "'.$pass2.'" , "'.$mail.'" , "'.$numb.'" , "'.$address.'" , "'.$date.'")';
		mysqli_query($link, $result);
		echo "Registration Successful";
		header('location: login.html');
	}
}
?>