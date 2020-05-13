<?php
	
	//Leaderboard Page Backend
	//This page gets all the information needed for the leaderboard from the txt files and manipulates them

	function decrypt($dataEncrypt) {

		$encryptMethod = "AES-256-CBC";
		$secretKey = 'asiuhoisduhfguhsdogusdfoiguhdfog';
		$secretIv = 'iasudfskldlkjfsw';
		$key = hash('sha256', $secretKey);
		$iv = substr(hash('sha256', $secretIv), 0, 16);
        $decryptData = openssl_decrypt(base64_decode($dataEncrypt), $encryptMethod, $key, 0, $iv);

        return $decryptData;
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

	$scores = array();
	$data = file_get_contents("../../../txtFiles/scores.txt");

	$personScoring = explode("\r\n", $data);
	unset($personScoring[sizeof($personScoring)-1]);

	$personScoring = mergesort($personScoring);
	$personScoring = array_reverse($personScoring);


