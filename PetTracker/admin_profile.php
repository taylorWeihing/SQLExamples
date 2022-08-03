<?php
	include 'php/dbh.php';
	session_start();
	
	if($_SESSION['email'] != "admin@pettracker.com" && $_SESSION['password'] != "admin")
	{
		
		header('Location: index.php');
		
	}
?>

<html>
	<head>
		<title>PetTracker</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div class="header">
			<div class="logodiv">
				<a href="index.php"><img class="logo" src="images/logo.png"></a>
				<span style="float: right;"><a href='php/logout_run.php'><button class='loginbtn'>Logout</button></a></span>
			</div>
		</div>
		<div class="content">
			<div class="profileimgdiv"><img class="profileimg" src="images/adminprofilepic.png"></div><br>
			<div class="profilename">
				PetTracker Administrator
				<br><br><b>Admin Commands:</b>
			</div>
			
			<div class="login">
				<div class="signupbtndiv">
					<a href="admin_user_search.php"><button class="signupbtn">Search Users</button></a>
					<a href="admin_pet_search.php"><button class="signupbtn">Search Pets</button></a>
					<a href="admin_schedule_search.php"><button class="signupbtn">Search Schedules</button></a>
					<a href="admin_document_search.php"><button class="signupbtn">Search Documents</button></a>
				</div>
			</div>
		</div>
	</body>
</html>