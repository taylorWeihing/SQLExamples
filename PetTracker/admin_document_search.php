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
				Enter Known Fields For Documents:</b>
			</div>
			<form class="login" action="php/document_search_run.php" method="POST">
				Document ID:<br>
				<input class="logininput" type="text" name="document_id" placeholder="Document ID" maxLength="75">
				<br><br>
				Owner's Email:<br>
				<input class="logininput" type="text" name="email" placeholder="Email" maxLength="75">
				<br><br>
				Pet ID:<br>
				<input class="logininput" type="text" name="pet_id" placeholder="Pet ID" maxLength="30">
				<br><br>
				Document Name:<br>
				<input class="logininput" type="text" name="document" placeholder="Document Name" maxLength="30">
				<br><br>
				Date Uploaded:<br>
				<input class="logininput" type="text" name="date_uploaded" placeholder="Date Uploaded" maxLength="30">
				<br><br>
				<button type="submit" class="signupbtn">Search Documents</button>
			</form>

			<div class="signupbtndiv">
				<a href="admin_profile.php"><button class="signupbtn">Back To Profile</button></a>
			</div>
		</div>
	</body>
</html>