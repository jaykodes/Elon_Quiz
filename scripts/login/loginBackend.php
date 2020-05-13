<?php
	
	//Backend work of login system
	//This page checks if user made any errors when logging in

	function decrypt($dataEncrypt) {

		$encryptMethod = "AES-256-CBC";
		$secretKey = 'asiuhoisduhfguhsdogusdfoiguhdfog';
		$secretIv = 'iasudfskldlkjfsw';
		$key = hash('sha256', $secretKey);
		$iv = substr(hash('sha256', $secretIv), 0, 16);
        $decryptData = openssl_decrypt(base64_decode($dataEncrypt), $encryptMethod, $key, 0, $iv);

        return $decryptData;
	}

	function search($nameMail, $users) {

		$low = 0;
		$high = count($users) - 1;
		$mid = 0;

		while ($low <= $high) {

			$mid = (int)(($low + $high) / 2);
			$personInfo = decrypt($users[$mid]);
			$personInfo = explode(",", $personInfo);
			$personEmail = $personInfo[0];

			if ($nameMail == $personEmail) {
				return $mid;
			}
			else if ($nameMail < $personEmail) {
				$high = $mid - 1;
			}
			else {
				$low = $mid + 1;
			}
		}

		return -1;
	}

	if (isset($_POST["submitButton"])) {

		$nameMail = $_POST["nameMail"];
		$password = $_POST["password"];
		$data = file_get_contents("../txtFiles/users.txt");
		$personInDatabase = false;
		$passwordCorrect = false;

		//checks if user typed something in all the boxes
		if (empty($nameMail) || empty($password)) {
			header("location: login.php?error=emptyfields");
			exit();
		}
		//checks if user's input is in the database
		else {

			$users = explode("\r\n", $data);
			unset($users[sizeof($users)-1]);

			$personInDatabase = search($nameMail, $users);

			if ($personInDatabase != -1) {

				if (explode(",", decrypt($users[$personInDatabase]))[2] == $password) {
					session_start();
					$_SESSION["username"] = [explode(",", decrypt($users[$personInDatabase]))[1], explode(",", decrypt($users[$personInDatabase]))[0]];
					header("location: ../profile/profile.php");
					exit();
				}
				else {
					header("location: login.php?error=wrongPassword");
					exit();
				}
			}
			else {
				header("location: login.php?error=userNotInDatabase");
				exit();
			}
		}
	}
	else {
		header("location: login.php");
		exit();
	}