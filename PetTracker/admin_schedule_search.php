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
				Enter Known Fields For Schedules:</b>
			</div>
			<form class="login" action="php/schedule_search_run.php" method="POST">
				Schedule ID:<br>
				<input class="logininput" type="text" name="schedule_id" placeholder="Schedule ID" maxLength="75">
				<br><br>
				Pet ID:<br>
				<input class="logininput" type="text" name="pet_id" placeholder="Pet ID" maxLength="30">
				<br><br>
				Owner's Email:<br>
				<input class="logininput" type="text" name="email" placeholder="Owner's Email" maxLength="75">
				<br><br>
				Schedule Type:<br>
				<input class="logininput" type="text" name="schedule_type" placeholder="Schedule Type" maxLength="30">
				<br><br>
				Start Date:<br>
				<input class="logininput" type="text" name="start_date" placeholder="Start Date" maxLength="30">
				<br><br>
				Countdown (Days):<br>
				<input class="logininput" type="text" name="countdown" placeholder="Countdown" maxLength="30">
				<br><br>
				Auto Repeat:<br>
				<input class="logininput" type="text" name="auto_repeat" placeholder="Auto Repeat" maxLength="30">
				<br><br>
				<button type="submit" class="signupbtn">Search Schedules</button>
			</form>

			<div class="signupbtndiv">
				<a href="admin_profile.php"><button class="signupbtn">Back To Profile</button></a>
			</div>
		</div>
	</body>
</html>