<?php
	include 'php/dbh.php';
	session_start();
	
	if($_SESSION['email'] == "admin@pettracker.com" && $_SESSION['password'] == "admin")
	{
		
		header('Location: admin_profile.php');
		
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
			<div class="profileimgdiv"><img class="profileimg" src="images/default-profile.png"></div><br>
			<div class="profilename">
				<?php 
					echo $_SESSION['first_name'].' '.$_SESSION['last_name'];
				?>
				
				<br><br><b>Your Pets:</b>
			</div>
			
			<div class="login">
				<?php 
					$sql = "SELECT name, age, note FROM Pets WHERE user_email='".$_SESSION['email']."'; ";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo "<b>Name:</b> ".$row['name']." <b>Age:</b> ".$row['age']." <b>Note:</b> ".$row['note']."<br>";
						}
					} else {
						echo "0 results";
					}
				?>
			</div>
		</div>
	</body>
</html>