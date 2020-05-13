<?php

	//Leaderboard Page
	//This page displays the Top 20 scores and the user who achieved it

	require "leaderboardBackend.php";
	require '../css/backgroundChanger.php';

	$nameList = array();
	$scoreList = array();

	//below goes through everyline of '$personScoring' and takes out and adds specific value to the empty arrays
	foreach ($personScoring as $personInfo) {
		$personInfo = decrypt($personInfo);
		$personInfo = explode(",", $personInfo);
		$nameList[] = $personInfo[1];
		$scoreList[] = $personInfo[2];
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Leaderboard</title>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/fullpage.css">
		<script src="../javascript/jquery-3.3.1.min.js"></script>
		<script src="../javascript/fullpage.js"></script>
		<script src="../javascript/script.js"></script>
	</head>
	<body style="background: url(<?php echo "../$path"; ?>); background-size: 100vw 100vh;">
		<div id="wrapper">
			<div class="section">
				<section class="score">
					<div class="resultContainer">
						<div class="resultBackground">
							<h1 class="resultScore">Leaderboard</h1>
							<!-- table that displays the scores 1-10, echo the value from namelist and scorelist according to index position -->
							<table class="scoreTable">
					        	<tr>
					        		<td class="boldTableText">Rank</td>
					        		<td class="boldTableText">Usename</td>
					        		<td class="boldTableText">Score</td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">1. </td>
					        		<td class="lightTableText"><?php echo $nameList[0]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[0]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">2. </td>
					        		<td class="lightTableText"><?php echo $nameList[1]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[1]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">3. </td>
					        		<td class="lightTableText"><?php echo $nameList[2]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[2]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">4. </td>
					        		<td class="lightTableText"><?php echo $nameList[3]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[3]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">5. </td>
					        		<td class="lightTableText"><?php echo $nameList[4]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[4]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">6. </td>
					        		<td class="lightTableText"><?php echo $nameList[5]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[5]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">7. </td>
					        		<td class="lightTableText"><?php echo $nameList[6]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[6]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">8. </td>
					        		<td class="lightTableText"><?php echo $nameList[7]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[7]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">9. </td>
					        		<td class="lightTableText"><?php echo $nameList[8]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[8]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">10. </td>
					        		<td class="lightTableText"><?php echo $nameList[9]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[9]; ?></td>
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
							<h1 class="resultScore">Leaderboard</h1>
							<!-- table that displays the scores 11-20, echo the value from namelist and scorelist according to index position -->
							<table class="scoreTable">
					        	<tr>
					        		<td class="boldTableText">Rank</td>
					        		<td class="boldTableText">Usename</td>
					        		<td class="boldTableText">Score</td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">11. </td>
					        		<td class="lightTableText"><?php echo $nameList[10]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[10]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">12. </td>
					        		<td class="lightTableText"><?php echo $nameList[11]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[11]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">13. </td>
					        		<td class="lightTableText"><?php echo $nameList[12]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[12]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">14. </td>
					        		<td class="lightTableText"><?php echo $nameList[13]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[13]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">15. </td>
					        		<td class="lightTableText"><?php echo $nameList[14]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[14]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">16. </td>
					        		<td class="lightTableText"><?php echo $nameList[15]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[15]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">17. </td>
					        		<td class="lightTableText"><?php echo $nameList[16]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[16]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">18. </td>
					        		<td class="lightTableText"><?php echo $nameList[17]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[17]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">19. </td>
					        		<td class="lightTableText"><?php echo $nameList[18]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[18]; ?></td>
					        	</tr>
					        	<tr>
					        		<td class="lightTableText">20. </td>
					        		<td class="lightTableText"><?php echo $nameList[19]; ?></td>
					        		<td class="lightTableText"><?php echo $scoreList[19]; ?></td>
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
							<!-- table that has buttons to go to different pages -->
							<table class="buttonTable">
								<tr>
									<td><a href="../../profile.php" class="button buttonScore">Home</a></td>
									<td><a href="../account/account.php" class="button buttonScore">Account</a></td>
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