<html>
	<head>
		<title>PetTracker</title>
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
			<div class="logintitle">Login</div>
			
			<form class="login" action="php/login_run.php" method="POST">
				Email:<br>
				<input class="logininput" type="text" name="email" placeholder="Email" maxLength="75">
				<br><br>
				Password:<br>
				<input class="logininput" type="password" name="password" placeholder="Password" maxLength="30">
				<br><br>
				<button type="submit" class="signupbtn">Login</button>
			</form>

			<div class="signupbtndiv">
				<a href="signup.php"><button class="signupbtn">Create an Account</button></a>
			</div>
		</div>
		
		<?php
			// looks for the error in the url
			$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

			if(strpos($url, 'error=incorrectLogin'))
			{
				echo '<div class="error" id="login_error">Email or password is incorrect.</div>';
			}
		?>
		
	</body>
</html>