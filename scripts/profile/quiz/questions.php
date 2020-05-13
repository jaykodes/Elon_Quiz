<?php

	//Quiz Questions
	//php file of predetermined questions

	//most of the questions have the bottom of the html coded before hand and thus once put into the create function the section will be created
	//anwers to each question is a hidden input that allows the other scripts to compare answers
	//can be randomized in any order

	$one = "
				<p>
					True or False: Elon Musk is the chairman of Tesla.
				</p>
				<input type='hidden' name='answers[]' value='false'>
				<fieldset>
					<input type='text' name='userInput[]' placeholder='Type Answer Here'>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$two = "
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
				<h3>Question 9</h3>
				<p>
					Where was Elon Musk born?
				</p>
				<input type='hidden' name='answers[]' value='d'>
				<fieldset>
					<table class='questionTable'>
						<tr>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='a'>America</td>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='b'>Canada</td>
						</tr>
						<tr>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='c'>Prague</td>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='d'>South Africa</td>
						</tr>
					</table>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$three = "
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
				<h3>Question 10</h3>
				<p>
					Select all pictures of a Tesla Model X.
				</p>
				<input type='hidden' name='answers[]' value='ab'>
				<fieldset>
					<table class='questionThreeTable' cellspacing='0' cellpadding='0'>
						<tr>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='a'>
									<img src='images/one.jpg'>
								</label>
							</td>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='b'>
									<img src='images/two.jpg'>
								</label>
							</td>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='c'>
									<img src='images/three.jpg'>
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='d'>
									<img src='images/four.jpg'>
								</label>
							</td>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='e'>
									<img src='images/five.jpg'>
								</label>
							</td>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='f'>
									<img src='images/six.jpg'>
								</label>
							</td>
						</tr>
					</table>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$four = "
				<p>
					True or False: Elon Musk's annual salary for Tesla Motors is $1.
				</p>
				<input type='hidden' name='answers[]' value='true'>
				<fieldset>
					<input type='text' name='userInput[]' placeholder='Type Answer Here'>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$five = "
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
				<h3>Question 10</h3>			
				<p>
					Place each event in chronological order, 1 being the earliest, 4 being the most recent.
				</p>
				<input type='hidden' name='answers[]' value='2143'>
				<fieldset>
					<table class='questionFiveTable'>
						<tr>
							<th>Event order</th>
							<th>Event</th>
						</tr>
						<tr>
							<td>
								<select name='model[]'>
									<option selected hidden style='display: none;' value=''></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</td>
							<td>Elon Musk starts Zip2.</td>
						</tr>
						<tr>
							<td>											
								<select name='model[]'>
									<option selected hidden style='display: none;' value=''></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</td>
							<td>Elon Musk moves to Canada.</td>
						</tr>
						<tr>
							<td>
								<select name='model[]'>
									<option selected hidden style='display: none;' value=''></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</td>
							<td>Elon Musk starts SpaceX.</td>
						</tr>
						<tr>
							<td>
								<select name='model[]'>
									<option selected hidden style='display: none;' value=''></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</td>
							<td>Elon Musk loses his job as CEO of PayPal.</td>
						</tr>
					</table>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$six = "
				<p>
					Fill in the blank: The boosters seen landing here are the Falcon _____ boosters.
				</p>
				<input type='hidden' name='answers[]' value='heavy'>
				<br>
				<img src='images/landing.jpg' class='images'>
				<fieldset>
					<input type='text' name='userInput[]' placeholder='Type Answer Here'>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$seven = "
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
				<h3>Question 9</h3>
				<p>
					Select the company that Elon Musk has never contributed to.
				</p>
				<input type='hidden' name='answers[]' value='b'>
				<fieldset>
					<table class='questionTable'>
						<tr>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='a'>Solar City</td>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='b'>ImpactVision</td>
						</tr>
						<tr>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='c'>OpenAI</td>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='d'>Neuralink</td>
						</tr>
					</table>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$eight = "
				<p>
					What rating did the National Highway Safety Adminstration give the Tesla Model S?
				</p>
				<input type='hidden' name='answers[]' value='d'>
				<br>
				<fieldset>
					<select name='userInput[]'>
						<option selected hidden style='display: none;' value=''></option>
						<option value = 'a'>3.6/5</option>
						<option value = 'b'>5/5</option>
						<option value = 'c'>4.8/5</option>
						<option value = 'd'>5.4/5</option>
					</select>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$nine = "
				<p>
					True or False: Elon Musk has a PhD in energy physics.
				</p>
				<input type='hidden' name='answers[]' value='false'>
				<fieldset>
					<input type='text' name='userInput[]' placeholder='Type Answer Here'>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$ten = "
				<p>
					What year was Elon Musk born? (1965-1975)
				</p>
				<input type='hidden' name='answers[]' value='1971'>
				<fieldset>
					<input type='number' name='userInput[]' placeholder='Type Answer Here' min='1965' max='1975'>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$eleven = "
				<p>
					True or False: Elon Musk once crashed the second fastest car in the world.
				</p>
				<input type='hidden' name='answers[]' value='false'>
				<fieldset>
					<input type='text' name='userInput[]' placeholder='Type Answer Here'>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$twelve = "
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
				<h3>Question 9</h3>
				<p>
					Which one of these is not a feature of the Tesla Model X?
				</p>
				<input type='hidden' name='answers[]' value='a'>
				<fieldset>
					<table class='questionTable'>
						<tr>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='a'>Heads-Up Display</td>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='b'>Auto-Summon</td>
						</tr>
						<tr>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='c'>Autopilot</td>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='d'>Panoramic Windshield</td>
						</tr>
					</table>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$thirteen = "
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
				<h3>Question 10</h3>
				<p>
					Select all pictures of a Tesla Model S.
				</p>
				<input type='hidden' name='answers[]' value='cf'>
				<fieldset>
					<table class='questionThreeTable' cellspacing='0' cellpadding='0'>
						<tr>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='a'>
									<img src='images/two.jpg'>
								</label>
							</td>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='b'>
									<img src='images/six.jpg'>
								</label>
							</td>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='c'>
									<img src='images/four.jpg'>
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='d'>
									<img src='images/one.jpg'>
								</label>
							</td>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='e'>
									<img src='images/five.jpg'>
								</label>
							</td>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='f'>
									<img src='images/three.jpg'>
								</label>
							</td>
						</tr>
					</table>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$fourteen = "
				<p>
					True or False: Elon Musk attended Stanford University.
				</p>
				<input type='hidden' name='answers[]' value='true'>
				<fieldset>
					<input type='text' name='userInput[]' placeholder='Type Answer Here'>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$fifteen = "
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
				<h3>Question 10</h3>
				<p>
					Place each event in chronological order, 1 being the earliest, 4 being the most recent.
				</p>
				<input type='hidden' name='answers[]' value='1342'>
				<fieldset>
					<table class='questionFiveTable'>
						<tr>
							<th>Event order</th>
							<th>Event</th>
						</tr>
						<tr>
							<td>
								<select name='model[]'>
									<option selected hidden style='display: none;' value=''></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</td>
							<td>Elon Musk attends the University of Pennsylvania.</td>
						</tr>
						<tr>
							<td>											
								<select name='model[]'>
									<option selected hidden style='display: none;' value=''></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</td>
							<td>Elon Musk invests in Tesla.</td>
						</tr>
						<tr>
							<td>
								<select name='model[]'>
									<option selected hidden style='display: none;' value=''></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</td>
							<td>Elon Musk starts The Boring Company.</td>
						</tr>
						<tr>
							<td>
								<select name='model[]'>
									<option selected hidden style='display: none;' value=''></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</td>
							<td>Elon Musk moves to Los Angeles to be closer to the space industry.</td>
						</tr>
					</table>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$sixteen = "
				<p>
					Fill in the blank: The Starman is seen driving a Tesla _____ through space in this historic photo.
				</p>
				<input type='hidden' name='answers[]' value='roadster'>
				<br>
				<img src='images/starman.jpg' class='images'>
				<fieldset>
					<input type='text' name='userInput[]' placeholder='Type Answer Here'>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$seventeen = "
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
				<h3>Question 9</h3>
				<p>
					Which one of these came from one of Elon Musk's companies?
				</p>
				<input type='hidden' name='answers[]' value='d'>
				<fieldset>
					<table class='questionTable'>
						<tr>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='a'>Smart Contact Lenses</td>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='b'>Gliding Car</td>
						</tr>
						<tr>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='c'>Hovercraft</td>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='d'>Flamethrower</td>
						</tr>
					</table>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$eighteen = "
				<p>
					Which one of these companies is not competing with SpaceX?
				</p>
				<input type='hidden' name='answers[]' value='b'>
				<br>
				<fieldset>
					<select name='userInput[]'>
						<option selected hidden style='display: none;' value=''></option>
						<option value='a'>Blue Origin</option>
						<option value='b'>Air Canada</option>
						<option value='c'>Virgin Galactic</option>
						<option value='d'>Boeing</option>
					</select>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$nineteen = "
				<p>
					True or False: Elon Musk has appeared in an episode of The Simpsons.
				</p>
				<input type='hidden' name='answers[]' value='true'>
				<fieldset>
					<input type='text' name='userInput[]' placeholder='Type Answer Here'>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$twenty = "
				<p>
					How many kids does Elon Musk have? (1-7)
				</p>
				<input type='hidden' name='answers[]' value='5'>
				<fieldset>
					<input type='number' name='userInput[]' placeholder='Type Answer Here' min='1' max='7'>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$twentyOne = "
				<p>
					True or False: Elon Musk once spent three months sleeping in his office.
				</p>
				<input type='hidden' name='answers[]' value='true'>
				<fieldset>
					<input type='text' name='userInput[]' placeholder='Type Answer Here'>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$twentyTwo = "
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
				<h3>Question 9</h3>
				<p>
					Which of these countries does Elon Musk not have a citizenship for?
				</p>
				<input type='hidden' name='answers[]' value='d'>
				<fieldset>
					<table class='questionTable'>
						<tr>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='a'>America</td>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='b'>South Africa</td>
						</tr>
						<tr>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='c'>Canada</td>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='d'>Australia</td>
						</tr>
					</table>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$twentyThree = "
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
				<h3>Question 10</h3>
				<p>
					Select all pictures of a Tesla Model 3.
				</p>
				<input type='hidden' name='answers[]' value='ac'>
				<fieldset>
					<table class='questionThreeTable' cellspacing='0' cellpadding='0'>
						<tr>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='a'>
									<img src='images/six.jpg'>
								</label>
							</td>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='b'>
									<img src='images/four.jpg'>
								</label>
							</td>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='c'>
									<img src='images/five.jpg'>
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='d'>
									<img src='images/two.jpg'>
								</label>
							</td>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='e'>
									<img src='images/three.jpg'>
								</label>
							</td>
							<td>
								<label>
									<input type='checkbox' name='model[]' value='f'>
									<img src='images/one.jpg'>
								</label>
							</td>
						</tr>
					</table>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$twentyFour = "
				<p>
					True or False: The MCU character of Tony Stark was somewhat based on Elon Musk.
				</p>
				<input type='hidden' name='answers[]' value='true'>
				<fieldset>
					<input type='text' name='userInput[]' placeholder='Type Answer Here'>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$twentyFive = "
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
				<h3>Question 10</h3>
				<p>
					Place each event in chronological order, 1 being the earliest, 4 being the most recent.
				</p>
				<input type='hidden' name='answers[]' value='4123'>
				<fieldset>
					<table class='questionFiveTable'>
						<tr>
							<th>Event order</th>
							<th>Event</th>
						</tr>
						<tr>
							<td>
								<select name='model[]'>
									<option selected hidden style='display: none;' value=''></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</td>
							<td>Elon Musk promises to send humans to Mars.</td>
						</tr>
						<tr>
							<td>											
								<select name='model[]'>
									<option selected hidden style='display: none;' value=''></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</td>
							<td>Elon Musk gets married for the first time.</td>
						</tr>
						<tr>
							<td>
								<select name='model[]'>
									<option selected hidden style='display: none;' value=''></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</td>
							<td>Elon Musk's first rocket launches and explodes.</td>
						</tr>
						<tr>
							<td>
								<select name='model[]'>
									<option selected hidden style='display: none;' value=''></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</td>
							<td>Elon Musk wins a NASA contract for 12 flights for $1.6B.</td>
						</tr>
					</table>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$twentySix = "
				<p>
					Fill in the blank: This is a photo of a cargo spacecraft known as the SpaceX _____.
				</p>
				<input type='hidden' name='answers[]' value='dragon'>
				<br>
				<img src='images/dragon.jpg' class='images'>
				<fieldset>
					<input type='text' name='userInput[]' placeholder='Type Answer Here'>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$twentySeven = "
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
				<h3>Question 9</h3>
				<p>
					Which one of these was Elon Musk's first company?
				</p>
				<input type='hidden' name='answers[]' value='c'>
				<fieldset>
					<table class='questionTable'>
						<tr>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='a'>X.com</td>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='a'>Solar City</td>
						</tr>
						<tr>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='c'>Zip2</td>
							<td><input class='questionOption' type='radio' name='radioValue[]' value='d'>PayPal</td>
						</tr>
					</table>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$twentyEight = "
				<p>
					Fill in the blank: Elon Musk is known for scheduling his days in increments of _____.
				</p>
				<input type='hidden' name='answers[]' value='b'>
				<br>
				<fieldset>
					<select name='userInput[]'>
						<option selected hidden style='display: none;' value=''></option>
						<option value='a'>30 minutes.</option>
						<option value ='b'>5 minutes.</option>
						<option value='c'>3 minutes.</option>
						<option value='d'>1 hour.</option>
					</select>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$twentyNine = "
				<p>
					True or False: Elon Musk believes our reality might be a computer simulation.
				</p>
				<input type='hidden' name='answers[]' value='true'>
				<fieldset>
					<input type='text' name='userInput[]' placeholder='Type Answer Here'>
				</fieldset>
			</div>
		</div>
	</div>
	";

	$thirty = "
				<p>
					At what age did Elon Musk teach himself computer programming? (6-15)
				</p>
				<input type='hidden' name='answers[]' value='9'>
				<fieldset>
					<input type='number' name='userInput[]' placeholder='Type Answer Here' min='6' max='15'>
				</fieldset>
			</div>
		</div>
	</div>
	";