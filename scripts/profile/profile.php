<?php

    //User Profile Page
    //Profile Page that is unique to the user

    //if user is logged in, variable 'username' is available, continue
    session_start();
    if (isset($_SESSION["username"])) {
        $name = $_SESSION["username"][0];
    }
    //else go to the login page
    else {
        header("location: ../login/login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Unit One Assignment
        </title>
        <link rel="stylesheet" type="text/css" href="profileFiles/profile.css">
        <script src="profileFiles/jquery-3.3.1.min.js"></script>
        <script src="profileFiles/profile.js"></script>
    </head>
    <body>
    	<header>
            <nav class="rightNav">
				<ul>
                    <form method="POST" action="logout.php">
                        <li><a href="#downloadableTitle">Files</a></li>
                        <li><a href="quiz/account/account.php">Account</a></li>
                        <li><button type="submit">Logout</button></li>
                    </form>
				</ul>
			</nav>
        </header>

        <!-- Home; welcomes user to their page -->
        <section class="home parallaxBackground">
            <div class="container">
                <h1 class="title">
                    Welcome
                    <span id="userWelcome">
                        <?php
                            echo "$name";
                        ?>
                    </span>
                </h1>
                <a href="quiz/quiz.php" class="button buttonQuiz">Write the Quiz</a>
            </div>
        </section>

        <!-- About The Quiz -->
        <div class="container" id="descriptionTitle">
            <section class="description">
                <div class="descriptionTextbox parallaxTextbox">
                    <h1>About The Quiz</h1>
                    <p1>
                        You think you're a fan of Elon Musk? Well think again after taking this quiz. This quiz was made by Jay, Ben, and Faraan and it tests your knowledge and understanding of Elon's life. You will be asked all type of questions about Elon from his childhood to his present life. To make matters worse, questions will be formatted in different ways to annialate your brain. So prepare yourself for the hardest quiz you have ever taken in your life.
                    </p1>
                </div>
            </section>
        </div>

        <!-- Source Links -->
        <section class="links" id="downloadableTitle">
            <h1 class="downloadableSpace">Quiz Help</h1>
          	
          	<!-- How to Play -->
            <figure class="linkDescription">
                <img src="profileImages/unitOneBack.jpg">
                <figcaption class="imageDescription">
                    <p>How to Play</p>
                    <a href="helpsPage/help.php" class="button buttonDescription buttonSmall">Click to See</a>
                </figcaption>
            </figure>
            
            <!-- Screenshots -->
            <figure class="linkDescription">
                <img src="profileImages/unitTwoBack.jpg">
                <figcaption class="imageDescription">
                    <p>Webpages</p>
                    <a href="helpsPage/webpages.php" class="button buttonDescription buttonSmall">Click to See</a>
                </figcaption>
            </figure>
            
            <!-- Source Code -->
            <figure class="linkDescription">
                <img src="profileImages/unitThreeBack.jpg">
                <figcaption class="imageDescription">
                    <p>Source Code</p>
                    <a href="https://github.com/jaykodes/Elon_Quiz" class="button buttonDescription buttonSmall">Download</a>
                </figcaption>
            </figure>
        </section>

        <!-- Information user can see -->
        <section class="userInformation">
            <div class="container">
                <h1 class="title">
                    User Information
                    <span>Anaylze your Progess</span>
                </h1>
                <a href="quiz/account/account.php" class="button buttonDark">Account</a>
                <a href="quiz/leaderboard/leaderboard.php" class="button buttonDark">Leaderboard</a>
            </div>
        </section>
    </body>
</html>
