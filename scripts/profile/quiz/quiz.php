<?php

	//Quiz
	//This page allows the user to write the elon quiz

	require 'css/backgroundChanger.php';//chooses a random background
	require "questions.php";//brings in a php file with all of questions in a html format

	function createFirstEight($arrayOfQuestions) {
		for ($i = 1; $i < 9; $i++) { 
			$arrayOfQuestions[$i-1] = "
				<div class='section'>
					<div class='header'>
	                    <nav class='rightNav'>
	                        <ul>
	                            <li><a href='../profile.php'>Home</a></li>
	                        </ul>
	                    </nav>
	                </div>
					<div class='container'>
						<div class='question'>
							<h3>Question $i</h3>".$arrayOfQuestions[$i-1];
			echo $arrayOfQuestions[$i-1];
		}
	}

	//if user is logged in, variable 'username' is available, continue
	session_start();
	if (isset($_SESSION["username"])) {
	    $name = $_SESSION["username"][0];
	}
	//else go to the login page
	else {
	    header("location: ../../login/login.php");
	    exit();
	}

	//the below variable are arrays; each array holds a certain number of predetermined questions and are organized in a certain way
	$questionArray = array($one, $four, $six, $eight, $nine, $ten, $eleven, $fourteen, $sixteen, $eighteen, $nineteen, $twenty, $twentyOne, $twentyFour, $twentySix, $twentyEight, $twentyNine, $thirty);
	$radioArray = array($two, $seven, $twelve, $seventeen, $twentyTwo, $twentySeven);
	$pictureQuestionArray = array($three, $five, $thirteen, $fifteen, $twentyThree, $twentyFive);

	//the below shuffles the array into a randomized order, therefore the first eight elements change and is why almost every quiz will be different
	shuffle($questionArray);
	shuffle($radioArray);
	shuffle($pictureQuestionArray);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			Quiz
		</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/fullpage.css"> <!-- stylesheet to allow the fullpage scroll -->
		<script src="javascript/jquery-3.3.1.min.js"></script>
		<script src="javascript/fullpage.js"></script> <!-- javascript to allow the fullpage scroll -->
	</head>
	<body style="background: url(<?php echo "$path"; ?>); background-size: 100vw 100vh;">
		<form method="POST" action="results/results.php">
			<div id="wrapper">
				<?php
					createFirstEight($questionArray);
					echo $radioArray[0];
					echo $pictureQuestionArray[0];
				?>
				<!-- submit button section -->
				<div class="section">
					<!-- a small link to allow the user to go back to profile page -->
					<div class='header'>
	                    <nav class='rightNav'>
	                        <ul>
	                            <li><a href='../profile.php'>Home</a></li>
	                        </ul>
	                    </nav>
	                </div>
	                <!-- submit button -->
					<div class="container">
						<div class="question">
							<h3>Submit Answers</h3>
							<br>
							<fieldset>
								<button type="submit" value="" id="btnSubmit">Submit</button>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- script that allows fullpage scroll effect -->
		<script>
            $('#wrapper').fullpage();
        </script>
	</body>
</html>