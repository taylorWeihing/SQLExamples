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
			<form class="login" action="php/user_search_run.php" method="POST">
				Email:<br>
				<input class="logininput" type="text" name="email" placeholder="Email" maxLength="75">
				<br><br>
				First Name:<br>
				<input class="logininput" type="text" name="fname" placeholder="First Name" maxLength="30">
				<br><br>
				Last Name:<br>
				<input class="logininput" type="text" name="lname" placeholder="Last Name" maxLength="30">
				<br><br>
				Phone Number:<br>
				<input class="logininput" type="text" name="phone" placeholder="Phone Number" maxLength="30">
				<br><br>
				<button type="submit" class="signupbtn">Search Users</button>
			</form>

			<div class="signupbtndiv">
				<a href="admin_profile.php"><button class="signupbtn">Back To Profile</button></a>
			</div>
		</div>
	</body>
</html>