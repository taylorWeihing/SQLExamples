<html>
	<head>
		<title>PetTracker</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div class="header">
			<div class="logodiv">
				<a href="index.php"><img class="logo" src="images/logo.png"></a>
			</div>
		</div>
		<div class="content">
			<div class="logintitle">Create an Account</div>
			
			<form class="login" action="php/signup_run.php" method="POST">
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
				Password:<br>
				<input class="logininput" type="password" name="password" placeholder="Password" maxLength="30">
				<br><br>
				<button type="submit" class="signupbtn">Create Account</button>
			</form>

			<div class="signupbtndiv">
				<a href="login.php"><button class="signupbtn">Login</button></a>
			</div>
		</div>
		
		<?php
			// looks for the error in the url
			$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			
			// if handles what to do with the error
			if(strpos($url, 'error=emailExists'))
			{
				echo '<div class="error" id="email_error">Email is already in use.</div>';
			}
		?>
		
	</body>
</html>