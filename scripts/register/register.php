<!-- Register System -->
<!-- This page has the user register into our game -->

<html>
	<head>
		<title>
			Register
		</title>
		<link rel="stylesheet" href="../loginSystemFiles/css/register.css">
        <link rel="stylesheet" href="../loginSystemFiles/css/fullpage.css">
        <script src="../loginSystemFiles/javascript/jquery-3.3.1.min.js"></script>
        <script src="../loginSystemFiles/javascript/fullpage.js"></script>
	</head>
	<body>
		<form method="POST" action="registerBackend.php">
			<div class="split right">
				<div id="wrapper">
					<div class="section">
						<div class="container">
							<div class="register">
								<h3>Register Here</h3>
								<!-- Asks for the user credentials -->
								<!-- username -->
								<fieldset>
									<input type="text" name="username" placeholder="Username..." id="username" tabindex="1">
								</fieldset>
								<!-- email -->
								<fieldset>
									<input type="text" name="email" placeholder="Email..." id="email" tabindex="2">
								</fieldset>
								<!-- password -->
								<fieldset>
									<input type="password" name="password" placeholder="Password..." id="password" tabindex="3">
								</fieldset>
								<!-- retype password to confirm -->
								<fieldset>
									<input type="password" name="confirmPassword" placeholder="Confirm Password..." id="confirmPassword" tabindex="4">
								</fieldset>
								<!-- submit button -->
								<fieldset>
									<button type="submit" name="submitButton" tabindex="5">Submit</button>
								</fieldset>
								<?php
									//The below code gets keywords from the url and checks if the user made any errors when using the system
									//checks if the keyword 'error' is in the url
									if (isset($_GET["error"])) {
										//error 'emptyfields'; user did not fill in all of the textboxes
										if ($_GET["error"] == "emptyfields") {
											echo "<p style='color: red; font-size: 1.25em;'>Textbox Empty</p>";
										}
										//error 'invalidUsernameEmail'; both username and email do not follow specific outline and thus invalid
										else if ($_GET["error"] == "invalidUsernameEmail") {
											echo "<p style='color: red; font-size: 1.25em;'>Invalid Username and Email</p>";
										}
										//error 'invalidUsername'; username does not follow specific outline and thus invalid
										else if ($_GET["error"] == "invalidUsername") {
											echo "<p style='color: red; font-size: 1.25em;'>Invalid Username</p>";
										}
										//error 'invalidEmail'; email does not follow specific outline and thus invalid
										else if ($_GET["error"] == "invalidEmail") {
											echo "<p style='color: red; font-size: 1.25em;'>Invalid Email</p>";
										}
										//error 'passwordCheck'; passwords do not match
										else if ($_GET["error"] == "passwordCheck") {
											echo "<p style='color: red; font-size: 1.25em;'>Passwords did not Match</p>";
										}
										//error 'emailTaken'; email is already used
										else if ($_GET["error"] == "emailTaken") {
											echo "<p style='color: red; font-size: 1.25em;'>Email is Taken</p>";
										}
									}
								?>
								<p>Already a User? <a href="../login/login.php">Click Here</a></p>
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