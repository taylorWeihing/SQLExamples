<?php
	include 'dbh.php';
	session_start();
	
	$email = $_POST["email"];
	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$phone = $_POST['phone'];
	
	$sql = "SELECT * FROM Users WHERE 1=1";
	
	if($email != null)
	{
		$sql = $sql." and email='$email'";
	}
	
	if($first_name != null)
	{
		$sql = $sql." and first_name='$first_name'";
	}
	
	if($last_name != null)
	{
		$sql = $sql." and last_name='$last_name'";
	}
	
	if($phone != null)
	{
		$sql = $sql." and phone='$phone'";
	}
		
	
	$result = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($result)) 
	{
		echo '<b>Email:</b> '.$row['email'].' ';
		echo '<b>First Name:</b> '.$row['first_name'].' ';
		echo '<b>Last Name:</b> '.$row['last_name'].' ';
		echo '<b>Phone Number:</b> '.$row['phone'].'<br>';
		echo '<b>Picture:</b> '.$row['picture'].'<br>';
	}
?>
	

	