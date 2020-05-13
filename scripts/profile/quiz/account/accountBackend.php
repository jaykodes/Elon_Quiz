<?php
	
	//Account Page Backend
	//This page gets all the information needed for the stats from the txt files and manipulates them
	
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

	function mergesort($arr) {

		if (count($arr) == 1) {
			return $arr;
		}

		$mid = (int)(count($arr) / 2);
		$left = array_slice($arr, 0, $mid);
		$right = array_slice($arr, $mid);

		$left = mergesort($left);
		$right = mergesort($right);

		return merge($left, $right);
	}

	function merge($left, $right) {

		$newArr = array();
		$indexLeft = 0;
		$indexRight = 0;

		while ($indexLeft < count($left) and $indexRight < count($right)) {

			if (explode(",", decrypt($left[$indexLeft]))[2] < explode(",", decrypt($right[$indexRight]))[2]) {
				$newArr[] = $left[$indexLeft];
				$indexLeft++;
			}
			else {
				$newArr[] = $right[$indexRight];
				$indexRight++;
			}
		}

		while ($indexLeft < count($left)) {
			$newArr[] = $left[$indexLeft];
			$indexLeft++;
		}

		while ($indexRight < count($right)) {
			$newArr[] = $right[$indexRight];
			$indexRight++;
		}

		return $newArr;
	}

	//if the user is logged in, can use $name
	session_start();
	if (isset($_SESSION["username"])) {
	    $name = $_SESSION["username"][0];
	    $email = $_SESSION["username"][1];
	}

	$userInfo = array();
	$userTotal = 0;
	$dataScores = file_get_contents("../../../txtFiles/scores.txt");
	$scores = explode("\r\n", $dataScores);
	unset($scores[sizeof($scores)-1]);

	$userStart = lowSearch($email, $scores);

	while(explode(",", decrypt($scores[$userStart]))[0] == $email) {

		$userInfo[] = $scores[$userStart];
		$userTotal += explode(",", decrypt($scores[$userStart]))[2];
		$userStart++;
	}

	$userInfo = mergesort($userInfo);
	$userInfo = array_reverse($userInfo);
