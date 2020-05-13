<?php
	
	//Account Page
	//This page displays the user's stats

	require "accountBackend.php";
	require '../css/backgroundChanger.php';

	$scoreList = array();
	$numberUserGames = count($userInfo);
	$totalUserScore = $userTotal;
	$bestUserScore = explode(",", decrypt($userInfo[0]))[2];
	$worstUserScore = explode(",", decrypt($userInfo[$numberUserGames-1]))[2];
	$averageUserScore = round(($totalUserScore / $numberUserGames), 2);

	$iterate = min(10, $numberUserGames);

	for ($i = 0; $i < $iterate; $i++) {
		$personInfo = explode(",", decrypt($userInfo[$i]));
		$scoreList[] = $personInfo[2];
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Account</title>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/fullpage.css">
		<script src="../javascript/jquery-3.3.1.min.js"></script>
		<script src="../javascript/fullpage.js"></script>
	</head>
	<body style="background: url(<?php echo "../$path"; ?>); background-size: 100vw 100vh;">
		<div id="wrapper">
			<div class="section">
				<section class="score">
					<div class="resultContainer">
						<div class="resultBackground">
							<h1 class="resultScore"><?php echo "$name's Top Ten Scores"; ?></h1>
							<!-- table that displays the best scores 1-10 from the user, echo the value from scorelist according to index position -->
							<table class="userAccountTable">
					        	<tr>
					        		<td class="boldTableText userCenter">Rank</td>
					        		<td class="boldTableText userCenter">Score</td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText userCenter">1. </td>
					        		<td class="lightTableText userCenter"><?php echo $scoreList[0]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText userCenter">2. </td>
					        		<td class="lightTableText userCenter"><?php echo $scoreList[1]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText userCenter">3. </td>
					        		<td class="lightTableText userCenter"><?php echo $scoreList[2]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText userCenter">4. </td>
					        		<td class="lightTableText userCenter"><?php echo $scoreList[3]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText userCenter">5. </td>
					        		<td class="lightTableText userCenter"><?php echo $scoreList[4]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText userCenter">6. </td>
					        		<td class="lightTableText userCenter"><?php echo $scoreList[5]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText userCenter">7. </td>
					        		<td class="lightTableText userCenter"><?php echo $scoreList[6]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText userCenter">8. </td>
					        		<td class="lightTableText userCenter"><?php echo $scoreList[7]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText userCenter">9. </td>
					        		<td class="lightTableText userCenter"><?php echo $scoreList[8]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText userCenter">10. </td>
					        		<td class="lightTableText userCenter"><?php echo $scoreList[9]; ?></td>
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
							<h1 class="resultScore">Statistics</h1>
							<!-- table that displays certain analytics to help the user improve -->
							<table class="userScoreTable">
								<tr>
					        		<td class="lightTableText userLeft">Username:</td>
					        		<td class="lightTableText userRight"><?php echo $name; ?></td>
					        	</tr>
								<tr>
					        		<td class="lightTableText userLeft">Quizzes Done:</td>
					        		<td class="lightTableText userRight"><?php echo $numberUserGames; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText userLeft">Best Score:</td>
					        		<td class="lightTableText userRight"><?php echo $bestUserScore; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText userLeft">Average Score:</td>
					        		<td class="lightTableText userRight"><?php echo $averageUserScore; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText userLeft">Worst Score:</td>
					        		<td class="lightTableText userRight"><?php echo $worstUserScore; ?></td>
					        	</tr>
							</table>
							<!-- table that has buttons to go to different pages -->
							<table class="buttonTable">
								<tr>
									<td><a href="../../profile.php" class="button buttonScore">Home</a></td>
									<td><a href="../leaderboard/leaderboard.php" class="button buttonScore">Leaderboard</a></td>
								</tr>
							</table>
						</div>
					</div>
				</section>
			</div>
		</div>
		<script>
            $('#wrapper').fullpage();
        </script>
	</body>
</html>