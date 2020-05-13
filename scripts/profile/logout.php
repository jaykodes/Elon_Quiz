<?php

	//Logout Backend
	//closes all of the session open

	//closes all of the session open, thus any variable that indicate whether or not the user is logged in do not exist
	//thus user is logged out and certain pages will redirect user to appropriate spot
	session_start();
	session_unset();
	session_destroy();
	header("location: ../login/login.php");