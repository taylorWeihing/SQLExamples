<?php
	include 'dbh.php';
	session_start();
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if($email == "admin@pettracker.com" && $password == "admin")
	{
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		header('Location: ../admin_profile.php');
	}
	else
	{
		$sql = "SELECT * FROM Users WHERE email='$email' AND password='$password'";
		$result = mysqli_query($conn, $sql);
		
		if(!$row = mysqli_fetch_assoc($result))
		{
			header('Location: ../login.php?error=incorrectLogin');
		}
		
		else
		{
			$_SESSION['email'] = $row['email'];
			$_SESSION['first_name'] = $row['first_name'];
			$_SESSION['last_name'] = $row['last_name'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['phone'] = $row['phone'];
			$_SESSION['picture'] = $row['picture'];
			header('Location: ../user_profile.php');
		}
	}
	

	