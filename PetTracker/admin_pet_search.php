<?php
	include 'php/dbh.php';
	session_start();
?>

<html>
	<head>
		<title>Pet Tracker</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div class="header">
			<div class="logodiv">
				<a href="index.php"><img class="logo" src="images/logo.png"></a>
				<span style="float: right;">
				<?php
					if (isset($_SESSION['email']))
					{
						echo "<a href='user_profile.php'><button class='loginbtn'>Profile</button></a>";
					}
					else
					{
						echo "<a href='login.php'><button class='loginbtn'>Login</button></a>";
					}
				?>
				</span>
			</div>
		</div>
		<div class="content">
			<div class="profilename">
				Enter Known Information:</b>
			</div>
			<form class="login" action="php/pet_search_run.php" method="POST">
				Owner's Email:<br>
				<input class="logininput" type="text" name="user_email" placeholder="Owner's Email" maxLength="30">
				<br><br>
				Pet ID:<br>
				<input class="logininput" type="text" name="pet_id" placeholder="Pet ID" maxLength="75">
				<br><br>
				Pet Type:<br>
				<input class="logininput" type="text" name="type" placeholder="Pet Type" maxLength="30">
				<br><br>
				Pet Name:<br>
				<input class="logininput" type="text" name="name" placeholder="Pet Name" maxLength="30">
				<br><br>
				Pet Age:<br>
				<input class="logininput" type="text" name="age" placeholder="Pet Age" maxLength="30">
				<br><br>
				<button type="submit" class="signupbtn">Search Pets</button>
			</form>

			<div class="signupbtndiv">
				<a href="admin_profile.php"><button class="signupbtn">Back To Profile</button></a>
			</div>
		</div>
	</body>
</html>