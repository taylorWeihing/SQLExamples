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
			<div class="searchbar">
				<input type="text" id="petsearch" name="petsearch" placeholder="Search for pets...">
				<input class="searchbarsubmit" type="submit" value="Submit">
			</div>
			
			<div id="petresults">
			</div>
		</div>
	</body>
</html>