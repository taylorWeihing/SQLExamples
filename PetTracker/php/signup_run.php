<?php
	include "dbh.php";
	
	$email = $_POST["email"];
	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM Users WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	$email_check = mysqli_num_rows($result);
	
	if($email_check > 0)
	{
		
		header('Location: ../signup.php?error=emailExists');
		
	}
	
	else 
	{
		
		$sql = "INSERT INTO Users (email, first_name, last_name, password, phone) VALUES('$email', '$first_name', '$last_name', '$password', '$phone')";
		$result = mysqli_query($conn, $sql);
		
		header('Location: ../index.php');
		
	}

?>