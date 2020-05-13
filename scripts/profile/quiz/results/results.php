<?php
	
	//Results Page
	//This page displays the user's answers, actual answers, and user's score

	require '../css/backgroundChanger.php';//chooses a random background
	require 'resultsBackend.php';

	function verdictUnknown($resultOfVerdict) {
		if ($resultOfVerdict == "Correct") {
			echo "<td class='lightTableText' style='color: green;'>Correct</td>";
		}
		else if($resultOfVerdict == "Incorrect") {
			echo "<td class='lightTableText' style='color: red;'>Incorrect</td>";
		}
	}

	function isPassing($percentNumber) {
		if ($percentNumber >= 50) {
			echo "<td class='lightTableText userRight' style='color: green;'>Pass</td>";
		}
		else {
			echo "<td class='lightTableText userRight' style='color: red;'>Fail</td>";
		}
	}
	
	session_start();
	if (isset($_SESSION["username"])) {
	    $name = $_SESSION["username"][0];
	    $email = $_SESSION["username"][1];
	}
	else {
	    header("location: ../../../login/login.php");
	    exit();
	}

	$normalQuestion = $_POST["userInput"];
	$radioQuestion = $_POST["radioValue"];
	$modelQuestion = $_POST["model"];
	$answerNormal = $_POST["answers"];

	$userAnswerString = makeUserAnswerString($normalQuestion, $radioQuestion, $modelQuestion);
	$actualAnswerString = makeActualAnswerString($answerNormal);
	$data = makeStats($userAnswerString, $actualAnswerString, $name, $email);
	$verdictString = $data[0];
	$stats = $data[1];

	$userAnswer = explode(",", $userAnswerString);
	$actualAnswer = explode(",", $actualAnswerString);
	$verdict = explode(",", $verdictString);
	$scoring = explode(",", $stats);
?>

<!DOCTYPE html>
<html>
	<!-- below is where we link to all of our external resources. These resource help style the page and have it act in certain way -->
	<head>
		<title>
			Results
		</title>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/fullpage.css"> <!-- stylesheet to allow the fullpage scroll -->
		<script src="../javascript/jquery-3.3.1.min.js"></script>
		<script src="../javascript/fullpage.js"></script> <!-- javascript to allow the fullpage scroll -->
	</head>
	<body style="background: url(<?php echo "../$path"; ?>); background-size: 100vw 100vh;"> <!-- echo a path to the image; path is random -->
		<div id="wrapper">
			<div class="section">
				<section class="score">
					<div class="resultContainer">
						<div class="resultBackground">
				        	<h1 class="resultScore">Results</h1>
				        	<!-- table that displays question number, the user's answer, the actual answer, and if user was right or not -->
				        	<!-- echo the value from userAnswer, actualAnswer, and verdict according to index position -->
				        	<table class="scoreTable">
					        	<tr>
					        		<td class="boldTableText">Question</td>
					        		<td class="boldTableText">Your Answer</td>
					        		<td class="boldTableText">Actual Answer</td>
					        		<td class="boldTableText">Verdict</td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">1. </td>
					        		<td class="lightTableText"><?php echo $userAnswer[0]; ?></td>
					        		<td class="lightTableText"><?php echo $actualAnswer[0]; ?></td>
					        		<?php verdictUnknown($verdict[0]); ?>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">2. </td>
					        		<td class="lightTableText"><?php echo $userAnswer[1]; ?></td>
					        		<td class="lightTableText"><?php echo $actualAnswer[1]; ?></td>
					        		<?php verdictUnknown($verdict[1]); ?>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">3. </td>
					        		<td class="lightTableText"><?php echo $userAnswer[2]; ?></td>
					        		<td class="lightTableText"><?php echo $actualAnswer[2]; ?></td>
					        		<?php verdictUnknown($verdict[2]); ?>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">4. </td>
					        		<td class="lightTableText"><?php echo $userAnswer[3]; ?></td>
					        		<td class="lightTableText"><?php echo $actualAnswer[3]; ?></td>
					        		<?php verdictUnknown($verdict[3]); ?>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">5. </td>
					        		<td class="lightTableText"><?php echo $userAnswer[4]; ?></td>
					        		<td class="lightTableText"><?php echo $actualAnswer[4]; ?></td>
					        		<?php verdictUnknown($verdict[4]); ?>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">6. </td>
					        		<td class="lightTableText"><?php echo $userAnswer[5]; ?></td>
					        		<td class="lightTableText"><?php echo $actualAnswer[5]; ?></td>
					        		<?php verdictUnknown($verdict[5]); ?>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">7. </td>
					        		<td class="lightTableText"><?php echo $userAnswer[6]; ?></td>
					        		<td class="lightTableText"><?php echo $actualAnswer[6]; ?></td>
					        		<?php verdictUnknown($verdict[6]); ?>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">8. </td>
					        		<td class="lightTableText"><?php echo $userAnswer[7]; ?></td>
					        		<td class="lightTableText"><?php echo $actualAnswer[7]; ?></td>
					        		<?php verdictUnknown($verdict[7]); ?>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">9. </td>
					        		<td class="lightTableText"><?php echo $userAnswer[8]; ?></td>
					        		<td class="lightTableText"><?php echo $actualAnswer[8]; ?></td>
					        		<?php verdictUnknown($verdict[8]); ?>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">10. </td>
					        		<td class="lightTableText"><?php echo $userAnswer[9]; ?></td>
					        		<td class="lightTableText"><?php echo $actualAnswer[9]; ?></td>
					        		<?php verdictUnknown($verdict[9]); ?>
					        	</tr>
					        </table>
				        </div>
				    </div>
				</section>
        	</div>
        	<div class="section">
        		<section class="score">
					<div class="resultContainer">
						<div class="resultBackground">
							<h1 class="resultScore">Score</h1>
							<!-- table that displays the user's score, percentage, and if they passed or failed -->
							<table class="userScoreTable">
								<tr>
					        		<td class="lightTableText userLeft">Score:</td>
					        		<td class="lightTableText userRight"><?php echo $scoring[0]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText userLeft">Percentage:</td>
					        		<td class="lightTableText userRight"><?php echo $scoring[1]."%"; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText userLeft">Result:</td>
					        		<?php isPassing($scoring[1]); ?>
					        	</tr>
							</table>
							<!-- table that has buttons to go to different pages -->
							<table class="buttonTable">
								<tr>
									<td><a href="../../profile.php" class="button buttonScore">Home</a></td>
									<td><a href="../leaderboard/leaderboard.php" class="button buttonScore">Leaderboard</a></td>
									<td><a href="../account/account.php" class="button buttonScore">Account</a></td>
								</tr>
							</table>
						</div>
					</div>
				</section>
        	</div>
        <script>
            $('#wrapper').fullpage();
        </script>
	</body>
</html>