<?php

    //Webpages
    //This page shows the user the screenshots of the entire website

    require "../quiz/css/backgroundChanger.php";//chooses a random background
?>
<!DOCTYPE html>
<html>
    <!-- below is where we link to all of our external resources. These resource help style the page and have it act in certain way -->
    <head>
        <title>
            Webpages
        </title>
        <link rel="stylesheet" href="sidePageFolder/helps.css">
        <link rel="stylesheet" href="sidePageFolder/fullpage.css"> <!-- stylesheet to allow the fullpage scroll -->
        <script src="sidePageFolder/jquery-3.3.1.min.js"></script>
        <script src="sidePageFolder/fullpage.js"></script> <!-- javascript to allow the fullpage scroll -->
    </head>
    <body style="background: url(<?php echo "../quiz/$path"; ?>); background-size: 100vw 100vh;"> <!-- echo a path to the image; path is random -->
        <div id="wrapper">
            <div class="section">
                <!-- a small link to allow the user to go back to profile page -->
                <div class='header'>
                    <nav class='rightNav'>
                        <ul>
                            <li><a href='../profile.php'>Home</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- first screenshot -->
                <div class="container">
                    <div class="background">
                        <div class="screenHeader">Webpage One</div>
                        <img src="images/screenShotOne.png">
                        <p><strong>Home Page:</strong> You are redirected to this page as soon as you login. On this page the user can learn what the quiz is about and find links to things such as source code and links to things such as, leaderboards, personal profiles, and a help page.</p>
                    </div>
                </div>
            </div>
            <div class="section">
                <!-- a small link to allow the user to go back to profile page -->
                <div class='header'>
                    <nav class='rightNav'>
                        <ul>
                            <li><a href='../profile.php'>Home</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- second screenshot -->
                <div class="container">
                    <div class="background">
                        <div class="screenHeader">Webpage Two</div>
                        <img src="images/screenShotTwo.png">
                        <p><strong>Register Page:</strong> This page is used to create an account which is used to access the quiz and all other features.</p>
                    </div>
                </div>
            </div>
            <div class="section">
                <!-- a small link to allow the user to go back to profile page -->
                <div class='header'>
                    <nav class='rightNav'>
                        <ul>
                            <li><a href='../profile.php'>Home</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- third screenshot -->
                <div class="container">
                    <div class="background">
                        <div class="screenHeader">Webpage Three</div>
                        <img src="images/screenShotThree.png">
                        <p><strong>Login Page:</strong> This page is used to log into an account. The account is used to access the quiz and all other features.</p>
                    </div>
                </div>
            </div>
            <div class="section">
                <!-- a small link to allow the user to go back to profile page -->
                <div class='header'>
                    <nav class='rightNav'>
                        <ul>
                            <li><a href='../profile.php'>Home</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- fourth screenshot -->
                <div class="container">
                    <div class="background">
                        <div class="screenHeader">Webpage Four</div>
                        <img src="images/screenShotFour.png">
                        <p><strong>Quiz Page:</strong> Where the user writes the quiz related to Elon Musk. Once you answer a question, you can scroll down to move on to the next question.</p>
                    </div>
                </div>
            </div>
            <div class="section">
                <!-- a small link to allow the user to go back to profile page -->
                <div class='header'>
                    <nav class='rightNav'>
                        <ul>
                            <li><a href='../profile.php'>Home</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- fifth screenshot -->
                <div class="container">
                    <div class="background">
                        <div class="screenHeader">Webpage Five</div>
                        <img src="images/screenShotFive.png">
                        <p><strong>Results Page:</strong> You are redirected here as soon as you complete the quiz. As the title of the page states, this page displays the results of the quiz. It tells you which questions you got right or wrong and what the correct answer was.</p>
                    </div>
                </div>
            </div>
            <div class="section">
                <!-- a small link to allow the user to go back to profile page -->
                <div class='header'>
                    <nav class='rightNav'>
                        <ul>
                            <li><a href='../profile.php'>Home</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- sixth screenshot -->
                <div class="container">
                    <div class="background">
                        <div class="screenHeader">Webpage Six</div>
                        <img src="images/screenShotSix.png">
                        <p><strong>Leaderboard Page:</strong> This pages shows the Top 20 scores and the users who achieved them. A great honor.</p>
                    </div>
                </div>
            </div>
            <div class="section">
                <!-- a small link to allow the user to go back to profile page -->
                <div class='header'>
                    <nav class='rightNav'>
                        <ul>
                            <li><a href='../profile.php'>Home</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- seventh screenshot -->
                <div class="container">
                    <div class="background">
                        <div class="screenHeader">Webpage Seven</div>
                        <img src="images/screenShotSeven.png">
                        <p><strong>Account Page:</strong> This page show the the user's top scores and how they have done over time. Gives the user a better understaning of their development.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- script that allows fullpage scroll effect -->
        <script>
            $('#wrapper').fullpage();
        </script>
    </body>
</html>