<?php

	$conn = mysqli_connect('localhost', 'root', 'kloud9', 'pettracker');
	
	if(!$conn)
	{

		die('Conection Failed: '.mysqli_connect_error());

	}
?>