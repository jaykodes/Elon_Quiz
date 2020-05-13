<?php

	//Results Backend
	//This page gets all the information needed for the results page from the txt files and manipulates them

	function encrypt($dataEncrypt) {

		$encryptMethod = "AES-256-CBC";
		$secretKey = 'asiuhoisduhfguhsdogusdfoiguhdfog';
		$secretIv = 'iasudfskldlkjfsw';
		$key = hash('sha256', $secretKey);
		$iv = substr(hash('sha256', $secretIv), 0, 16);
		$encryptData = openssl_encrypt($dataEncrypt, $encryptMethod, $key, 0, $iv);
		$encryptData = base64_encode($encryptData);

		return $encryptData;
	}

	function decrypt($dataEncrypt) {

		$encryptMethod = "AES-256-CBC";
		$secretKey = 'asiuhoisduhfguhsdogusdfoiguhdfog';
		$secretIv = 'iasudfskldlkjfsw';
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

	function makeUserAnswerString($normalQuestion, $radioQuestion, $modelQuestion) {
		$userAnswerString = implode(",", $normalQuestion);
		$userAnswerString .= ",".$radioQuestion[0].",";
	
		if (!empty($modelQuestion)) {
			$modelQuestionString = implode("", $modelQuestion);
		}
		else {
			$modelQuestionString .= " ";
		}

		$userAnswerString .= $modelQuestionString;
		return $userAnswerString;
	}

	function makeActualAnswerString($answerNormal) {
		$actualAnswerString = implode(",", $answerNormal);
		return $actualAnswerString;
	}

	function makeStats($userAnswerString, $actualAnswerString, $name, $email) {

		$scantron = array();
		$amountOfCorrect = 0;
		$userAnswer = explode(",", $userAnswerString);
		$acutalAnswer = explode(",", $actualAnswerString);

		for ($i = 0; $i < 10; $i++) {
			if ($userAnswer[$i] == $acutalAnswer[$i]) {
				$scantron[] = "Correct";
				$amountOfCorrect += 1;
			}
			else {
				$scantron[] = "Incorrect";
			}
		}

		$percentage = ($amountOfCorrect / 10) * 100;
		$verdictString = implode(",", $scantron);

		$stats = "$amountOfCorrect,$percentage";
		$userStats = "$email,$name,$amountOfCorrect,$percentage";
		$userStats = encrypt($userStats);
		$userStats = $userStats."\r\n";

		$dataScores = file_get_contents("../../../txtFiles/scores.txt");
		$scores = explode("\r\n", $dataScores);
		unset($scores[sizeof($scores)-1]);

		$mid = lowSearch($email, $scores);

		$result = file_put_contents("../../../txtFiles/scores.txt", "");

		if (count($scores) == 0) {
			$result = file_put_contents("../../../txtFiles/scores.txt", $userStats, FILE_APPEND);
		}
		else if ($mid == 0) {
			$bottom = implode("\r\n", $scores);
			$bottom = $bottom."\r\n";

			$result = file_put_contents("../../../txtFiles/scores.txt", $userStats, FILE_APPEND);
			$result = file_put_contents("../../../txtFiles/scores.txt", $bottom, FILE_APPEND);
		}
		else if ($mid == count($scores)) {
			$top = implode("\r\n", $scores);
			$top = $top."\r\n";

			$result = file_put_contents("../../../txtFiles/scores.txt", $top, FILE_APPEND);
			$result = file_put_contents("../../../txtFiles/scores.txt", $userStats."\r\n", FILE_APPEND);
		}
		else {
			$top = array_slice($scores, 0, $mid);
			$top = implode("\r\n", $top);
			$top = $top."\r\n";
			$bottom = array_slice($scores, $mid);
			$bottom = implode("\r\n", $bottom);
			$bottom = $bottom."\r\n";

			$result = file_put_contents("../../../txtFiles/scores.txt", $top, FILE_APPEND);
			$result = file_put_contents("../../../txtFiles/scores.txt", $userStats, FILE_APPEND);
			$result = file_put_contents("../../../txtFiles/scores.txt", $bottom, FILE_APPEND);
		}

		return [$verdictString, $stats];
	}
