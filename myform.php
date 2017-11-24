
<html>
<head>
	<link rel="stylesheet" type="text/css" href="myform.css">
</head>	
<body>

	<h1 align='center'><img src="2.png" width="100" height="70"><br>Loyalty Program</h1>
	<div class="outform">
		<h2>Create an Account</h2>
		<table>
			<tr>
			<td class="col1">
			<form class="inform" action="include/insert.inc.php" method="POST">
				<label>
				<p>First Name</p><input name="first" id="name" type="text" maxlength="30"required>
				</label>	
			<label>
				<p>Last Name</p><input name="last" id="lname" type= "text"maxlength="30" required>
			</label></br>

				<p>Email Adress<br><span class="underheader">This will be your username</span></p><input name="emailid" id="email_id" type="email" title="Please enter a valid email address" maxlength="100"required>
			</label>	

			<label>
				<p>Password</p><input class="password" id="password" name="pwd" type= "password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}" title="At least 7 character long, 1 Upper case letter and 1 lower case letter">
			</label>

			<label>
				<p>Confirm Password</p><input id="confirm_password" class="confirm_password" name="confirm_password" type= "password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}" title="At least 7 character long, 1 Upper case letter and 1 lower case letter">
				<span id='message'></span>
			</label>

			<label>
				<p>Phone Number<span class="underheader">(optional)</span></p><input name="phone" type= "text" id="phone" title="Enter numerical value" maxlength="12" required>
			</label></br>

	<p>Security Question</p>	
	<select name="security_question" id="secq">
		<option>What street did you live on in 6th grade?</option>
		<option>What was your childhood nickname?</option>
		<option>In what city did your mother and father meet?</option>
		<option>What was the last name of your third grade teacher?</option>
		<option>What was the name of your first stuffed animal?</option>
	</select>	

	<label></br></br>
		Security Answer</br><input name="security_answer" id="seca" type="text" maxlength="100" required>
	</label></p>

	<p><h4>Communication Preferences</h4></p>

	<p><input class="check" name="enroll" type="checkbox" checked><span class="underheader">Yes, I would like to be enrolled in the Sweepstakes. <a class="black_link" href="rules.html" target="_Blank">See Sweepstakes rules</a></span></p>

	<p><input class="check" class="underheader" name="enroll_2" type="checkbox" checked><span class="underheader" > Yes, I would like to receive emails about special promotions or sales.</span></p>

	<p class="underheader">Note: You can not opt out of transactional emails</p>

	<input class="submit" id="submit" type = "Submit" name="submit">
	<p class="underheader">By clicking this button, I agree to the<br>
	<span class="underheader"><a href="terms.html" target="_Blank">Terms of Use</a> and <a href="privacy.html" target="_Blank">Privacy Policy</a></span></p>

</form>


</div>
	</td>
	<td class="sideblock">
	<div class="xyz">
	<strong>With an Account you can register and manage your gift cards and participate in sweepstakes</strong>
		<ul>
			<li>Register any Gift Card.</li>
			<li>Transfer money between cards.</li>
			<li>Track your rewards.</li>
			<li>Automatically reload your Card balance.</li>
		</ul>
</div>	

	</td>
</table>

<script type="text/javascript" src="formjav.js"></script>
</body>
</html>

