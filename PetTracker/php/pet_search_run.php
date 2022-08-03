<?php
	include 'dbh.php';
	session_start();
	
	$pet_id = $_POST["pet_id"];
	$user_email = $_POST['user_email'];
	$type = $_POST['type'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	
	$sql = "SELECT * FROM Pets WHERE 1=1";
	
	if($pet_id != null)
	{
		$sql = $sql." and pet_id='$pet_id'";
	}
	
	if($user_email != null)
	{
		$sql = $sql." and user_email='$user_email'";
	}
	
	if($type != null)
	{
		$sql = $sql." and type='$type'";
	}
	
	if($name != null)
	{
		$sql = $sql." and name='$name'";
	}
	
	if($age != null)
	{
		$sql = $sql." and age='$age'";
	}
		
	
	$result = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($result)) 
	{
		echo '<b>Pet ID:</b> '.$row['pet_id'].' ';
		echo '<b>Owner Email:</b> '.$row['user_email'].' ';
		echo '<b>Pet Type:</b> '.$row['type'].' ';
		echo '<b>Name:</b> '.$row['name'].' ';
		echo '<b>Age:</b> '.$row['age'].' ';
		echo '<b>Picture:</b> '.$row['picture'].' ';
		echo '<b>Note:</b> '.$row['note'].'<br>';
	}
?>
	

	