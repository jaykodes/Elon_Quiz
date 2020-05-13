<?php

    //FAQ

    require "../quiz/css/backgroundChanger.php";//chooses a random background
?>
<!DOCTYPE html>
<html>
    <!-- below is where we link to all of our external resources. These resource help style the page and have it act in certain way -->
    <head>
        <title>
            Help
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
                <!-- first section of question -->
                <div class="container">
                    <div class="background">
                        <div class="faqHeader">Frequently Asked Questions</div>
                        <div class="faqContent">
                            <!-- first question -->
                            <div class="faqQuestion">
                                <input id="q1" type="checkbox" class="panel">
                                <div class="plus">+</div>
                                <label for="q1" class="panelTitle">How do you Write the Quiz?</label>
                                <div class="panelContent">You can write the quiz by click on the button on the home page that says 'Write the Quiz'.</div>
                            </div>
                            <!-- second question -->
                            <div class="faqQuestion">
                                <input id="q2" type="checkbox" class="panel">
                                <div class="plus">+</div>
                                <label for="q2" class="panelTitle">What is the Quiz About?</label>
                                <div class="panelContent">The quiz is about Elon's Musk. The quiz touches on his life, decisions, and companies he has been apart of.</div>
                            </div>
                            <!-- third question -->
                            <div class="faqQuestion">
                                <input id="q3" type="checkbox" class="panel">
                                <div class="plus">+</div>
                                <label for="q3" class="panelTitle">What type of Questions are there?</label>
                                <div class="panelContent">There are all types of questions with some examples being 'True or False', 'Fill in the Blank', 'Multiple Choice', 'Fill in the Blank', etc.</div>
                            </div>
                        </div>
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
                <!-- first section of question -->
                <div class="container">
                    <div class="background">
                        <div class="faqHeader">Frequently Asked Questions</div>
                        <div class="faqContent">
                            <!-- fourth question -->
                            <div class="faqQuestion">
                                <input id="q4" type="checkbox" class="panel">
                                <div class="plus">+</div>
                                <label for="q4" class="panelTitle">Is there a Step by Step Guide?</label>
                                <div class="panelContent">
                                    1. Click the 'Write the Quiz' button<br>
                                    2. Answer all of the questions<br>
                                    3. Submit your answers<br>
                                    4. Receive your results<br>
                                </div>
                            </div>
                            <!-- fifth question -->
                            <div class="faqQuestion">
                                <input id="q5" type="checkbox" class="panel">
                                <div class="plus">+</div>
                                <label for="q5" class="panelTitle">How can I be on the Leaderboard?</label>
                                <div class="panelContent">Only the Top 20 scores will be listed on the leaderboard. By working hard you may be able to see your name on the internet.</div>
                            </div>
                            <!-- sixth question -->
                            <div class="faqQuestion">
                                <input id="q6" type="checkbox" class="panel">
                                <div class="plus">+</div>
                                <label for="q6" class="panelTitle">What is Unique about your Quiz?</label>
                                <div class="panelContent">Our quiz generates new questions every time. This means that almost every quiz will challenge the user in a different way.</div>
                            </div>
                        </div>
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
                <!-- third section -->
                <div class="container">
                    <div class="background">
                        <div class="faqHeader">Frequently Asked Questions</div>
                        <div class="faqContent">
                            <!-- seventh question -->
                            <div class="faqQuestion">
                                <input id="q7" type="checkbox" class="panel">
                                <div class="plus">+</div>
                                <label for="q7" class="panelTitle">Will my Identity be Stolen?</label>
                                <div class="panelContent">We put security as our first priority and we have implemented a multi-factor authentication when registering. No two users will have the same email or username.</div>
                            </div>
                            <!-- eighth question -->
                            <div class="faqQuestion">
                                <input id="q8" type="checkbox" class="panel">
                                <div class="plus">+</div>
                                <label for="q8" class="panelTitle">What if I forgot my Password?</label>
                                <div class="panelContent">With our state of the art email system we are able to deliver user credentials with a single email. Just click the 'Forgot Password' link when in the logging in.</div>
                            </div>
                            <!-- ninth question -->
                            <div class="faqQuestion">
                                <input id="q9" type="checkbox" class="panel">
                                <div class="plus">+</div>
                                <label for="q9" class="panelTitle">How can I Improve?</label>
                                <div class="panelContent">There is an 'Account' feature where users can track thier improvement over a long period of time. Furthermore, there are specific stats that help the user see how they are doing.</div>
                            </div>
                        </div>
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