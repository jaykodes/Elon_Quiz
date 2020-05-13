<?php
	
	//Backend work of register system
	//This page checks if user made any errors when registering

	function encrypt($dataEncrypt) {

		$encryptMethod = "AES-256-CBC";
		$secretKey = 'YOUR-SECRET-KEY';
		$secretIv = 'YOUR-SECRET-IV';
		$key = hash('sha256', $secretKey);
		$iv = substr(hash('sha256', $secretIv), 0, 16);
		$encryptData = openssl_encrypt($dataEncrypt, $encryptMethod, $key, 0, $iv);
		$encryptData = base64_encode($encryptData);

		return $encryptData;
	}

	function decrypt($dataEncrypt) {

		$encryptMethod = "AES-256-CBC";
		$secretKey = 'YOUR-SECRET-KEY';
		$secretIv = 'YOUR-SECRET-IV';
		$key = hash('sha256', $secretKey);
		$iv = substr(hash('sha256', $secretIv), 0, 16);
        	$decryptData = openssl_decrypt(base64_decode($dataEncrypt), $encryptMethod, $key, 0, $iv);

        	return $decryptData;
	}

	function lowSearch($user, $scores) {

		$low = 0;
		$high = count($scores);
		$mid = 0;

		while ($low < $high) {

			$mid = (int)(($low + $high) / 2);
			$personInfo = decrypt($scores[$mid]);
			$personInfo = explode(",", $personInfo);
			$personEmail = $personInfo[0];

			if ($user > $personEmail) {
				$low = $mid + 1;
			}
			else if ($user < $personEmail) {
				$high = $mid;
			}
			else if ($mid > 0 and explode(",", decrypt($scores[$mid-1]))[0] == $user) {
				$high = $mid;
			}
			else {
				return $mid;
			}
		}

		return $high;
	}

	if (isset($_POST["submitButton"])) {

		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$confirmPassword = $_POST["confirmPassword"];
		$data = file_get_contents("../txtFiles/users.txt");

		//below are errors that users could have made. if there is an error user is redircted to the register page
		//checks if user typed something in the boxes
		if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
			header("location: register.php?error=emptyfields");
			exit();
		}
		//checks for proper username and email
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
			header("location: register.php?error=invalidUsernameEmail");
			exit();
		}
		//checks if user typed a proper username
		else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
			header("location: register.php?error=invalidUsername");
			exit();
		}
		//checks if email is invalid
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("location: register.php?error=invalidEmail");
			exit();
		}
		//checks if password is the same as the confirm password
		else if ($password !== $confirmPassword) {
			header("location: register.php?error=passwordCheck");
			exit();
		}
		else {
			$users = explode("\r\n", $data);
			unset($users[sizeof($users)-1]);

			$mid = lowSearch($email, $users);

			if ($email == explode(",", decrypt($users[$mid]))[0]) {
				header("location: register.php?error=emailTaken");
				exit();
			}

			$info = "$email,$username,$password";
			$info = encrypt($info);
			$info = $info."\r\n";

			$result = file_put_contents("../txtFiles/users.txt", "");

			if (count($users) == 0) {
				$result = file_put_contents("../txtFiles/users.txt", $info, FILE_APPEND);
			}
			else if ($mid == 0) {
				$bottom = implode("\r\n", $users);
				$bottom = $bottom."\r\n";

				$result = file_put_contents("../txtFiles/users.txt", $info, FILE_APPEND);
				$result = file_put_contents("../txtFiles/users.txt", $bottom, FILE_APPEND);
			}
			else if ($mid == count($users)) {
				$top = implode("\r\n", $users);
				$top = $top."\r\n";

				$result = file_put_contents("../txtFiles/users.txt", $top, FILE_APPEND);
				$result = file_put_contents("../txtFiles/users.txt", $info, FILE_APPEND);
			}
			else {
				$top = array_slice($users, 0, $mid);
				$top = implode("\r\n", $top);
				$top = $top."\r\n";
				$bottom = array_slice($users, $mid);
				$bottom = implode("\r\n", $bottom);
				$bottom = $bottom."\r\n";

				$result = file_put_contents("../txtFiles/users.txt", $top, FILE_APPEND);
				$result = file_put_contents("../txtFiles/users.txt", $info, FILE_APPEND);
				$result = file_put_contents("../txtFiles/users.txt", $bottom, FILE_APPEND);
			}
			session_start();
			$_SESSION["username"] = [$username, $email];
			header("location: ../profile/profile.php");
			exit();
		}
	}
	else {
		header("location: register.php");
		exit();
	}
