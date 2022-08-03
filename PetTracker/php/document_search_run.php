<?php
	include 'dbh.php';
	session_start();
	
	$document_id = $_POST["document_id"];
	$email = $_POST["email"];
	$pet_id = $_POST['pet_id'];
	$document = $_POST['document'];
	$date_uploaded = $_POST['date_uploaded'];
	
	$sql = "SELECT * FROM Documents WHERE 1=1";
	
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
	

	