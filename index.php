<?php

	//This page checks if user is already logged in

	//if user is logged in, variable 'username' is available, go to user profile page
	session_start();
	if (isset($_SESSION["username"])) {
		header("location: scripts/profile/profile.php");
		exit();
	}
	//else go to the user register page
	else {
		header("location: scripts/register/register.php");
		exit();
	}

