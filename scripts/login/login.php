<!-- Log In System -->
<!-- This page has the user log into our game -->

<html>
	<head>
		<title>
			Login
		</title>
		<link rel="stylesheet" href="../loginSystemFiles/css/login.css">
        <link rel="stylesheet" href="../loginSystemFiles/css/fullpage.css">
        <script src="../loginSystemFiles/javascript/jquery-3.3.1.min.js"></script>
        <script src="../loginSystemFiles/javascript/fullpage.js"></script>
	</head>
	<body>
		<form method="POST" action="loginBackend.php">
			<div class="split right">
				<div id="wrapper">
					<div class="section">
						<div class="container">
							<div class="register">
								<h3>Login Here</h3>
								<!-- Asks for the user credentials -->
								<!-- username/email -->
								<fieldset>
									<input type="text" name="nameMail" placeholder="Email..." id="username" tabindex="1">
								</fieldset>
								<!-- password -->
								<fieldset>
									<input type="password" name="password" placeholder="Password..." id="password" tabindex="2">
								</fieldset>
								<!-- submit button -->
								<fieldset>
									<button type="submit" name="submitButton" tabindex="3">Submit</button>
								</fieldset>
								<?php
									//The below code gets keywords from the url and checks if the user made any errors when logging in
									//checks if the keyword 'error' is in the url
									if (isset($_GET["error"])) {
										//error 'emptyfields'; user did not fill in all of the textboxes
										if ($_GET["error"] == "emptyfields") {
											echo "<p style='color: red; font-size: 1.25em;'>Textbox Empty</p>";
										}
										//error 'wrongPassword'; user's password did not match the one in the database
										else if ($_GET["error"] == "wrongPassword") {
											echo "<p style='color: red; font-size: 1.25em;'>Invalid Password</p>";
										}
										//error 'userNotInDatabase'; user's username/email is not in the database; user does not exist
										else if($_GET["error"] == "userNotInDatabase") {
											echo "<p style='color: red; font-size: 1.25em;'>Invalid Email</p>";
										}
									}
									//checks if the keyword 'recovery' is in the url
									else if(isset($_GET["recovery"])) {
										//user recovered credentials using email services and if success then email was sent 
										if ($_GET["recovery"] == "success") {
											echo "<p style='color: green; font-size: 1.25em;'>Check Inbox/Spam/Junk</p>";
										}
									}
								?>
								<p>Sign Up: <a href="../register/register.php">Click Here</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<script>
            $('#wrapper').fullpage();
        </script>
	</body>
</html>