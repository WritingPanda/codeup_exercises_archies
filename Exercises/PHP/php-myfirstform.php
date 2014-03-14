<?php

echo "<p>GET:</p>";
var_dump($_GET);

echo "<p>POST:</p>";
var_dump($_POST);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My First HTML Form</title>
</head>
<body>
	<form method="POST" action="">
	    <p>
	        <label for="username">The Name of the User</label>
	        <input id="username" name="Username" type="text" placeholder="username">
	    </p>
	    <p>
	        <label for="password">Words of Passage</label>
	        <input id="password" name="Password" type="password" placeholder="password">
	    </p>
	    <p>
	        <!-- <input type="submit" name="submit" value="Oh my!"> -->
	        <button type="submit" name="submit">Oh my!</button>
	    </p>
	</form>

	<!--Add inputs to the form that would allow a user to compose an email (to, from, subject, body, and a send button). Make sure to use the appropriate input types for each form element. Put headings above the forms. Label the first form as "User Login", and the second form as "Compose an Email". When complete, try submitting the new form and view the results in RequestBin.-->

	<form method="POST" action="">
		<p>
			<label for="To">To</label>
			<input id="To" name="To" type="text" placeholder="Add an email address">
		</p>
		<p>
			<label for="From">From</label>
			<input id="From" name="From" type="text" placeholder="Your email address">
		</p>
		<p>
			<label for="subject">Subject</label>
			<input id="subject" name="subject" type="text" placeholder="Subject">
		</p>
		<p>
			<label for="save">
				<input type="checkbox" id="save" name="save" value="yes" checked> Save a copy to sent folder
			</label>
		</p>
		<p>
			<textarea id="email_body" name="email_body" rows="8" cols="50" placeholder="Type email here..."></textarea>
		</p>
		<p>
			<button type="submit">Send</button>
		</p>
	</form>
	<br>
	<form method="GET" action="">
		
		<h2>Multiple Choice Test</h2>
		<p>How many giant pandas are left in the wild?</p>
		<label for="q1a">
			<input type="radio" id="q1a" name="q1" value="1,000">
			1,000
		</label><br>
		<label for="q1b">
			<input type="radio" id="q1b" name="q1" value="2,000">
			2,000
		</label><br>
		<label for="q1c">
			<input type="radio" id="q1c" name="q1" value="1,600">
			1,600
		</label><br>
		<label for="q1d">
			<input type="radio" id="q1d" name="q1" value="2,600">
			2,600
		</label><br>

		<p>How many types of pandas are there?</p>
		<label for="q2a">
			<input type="radio" id="q2a" name="q2" value="1">
			1
		</label><br>
		<label for="q2b">
			<input type="radio" id="q2b" name="q2" value="2">
			2
		</label><br>
		<label for="q2c">
			<input type="radio" id="q2c" name="q2" value="3">
			3
		</label><br>
		<label for="q2d">
			<input type="radio" id="q2d" name="q2" value="4">
			4
		</label><br>

		<p>What languages are we covering in Codeup?</p>
		<label for="languages">
			<select id="languages" name="languages[]" multiple>
				<option value="js">JavaScript</option>
				<option value="py">Python</option>
				<option value="php">PHP</option>
				<option value="ruby">Ruby</option>
				<option value="jq">jQuery</option>
				<option value="hbo">HBO</option>
			</select>
		</label>
		<p>
			<button type="submit">Submit Answers</button>
		</p>
	</form>

	<form>
	<h2>Select Testing</h2>
	<label for="student">Are you a Codeup student? </label>
	<select id="student" name="student">
		<option value="0" selected>Choose one</option>
		<option value="1">Yes</option>
		<option value="2">No</option>
	</select>
	<br>
	<button type="submit">Submit Answer</button>
	</form>
<br><br><br><br><br>
</body>
</html>