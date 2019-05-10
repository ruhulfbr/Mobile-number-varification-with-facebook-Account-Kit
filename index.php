<html>
	<head>
		<title>Account kit Facebook </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	
	<body>
	<div class="w3-container w3-blue">
		<h1 class="w3-center">Account kit By Facebook</h1>
	</div><br><center>
	<h3 class="w3-center">Just Tap the button below and login through sms.<br> <b>OR</b> <br>you can also use this to verify the mobile no. of users...</h3>
	<br><center>
	<br>
	
	<div class="w3-container w3-center">
		<form method="get" action="https://www.accountkit.com/v1.0/basic/dialog/sms_login/">
			<input type="hidden" name="app_id" value="361860717869969">
			<input type="hidden" name="redirect" value="http://localhost/fb-kit/callback.php">
			<input type="hidden" name="state" value="csrf">
			<input type="hidden" name="fbAppEventsEnabled" value=true>
			<input type="hidden" value="+880" name="country_code" /><br>
			<center><input type="text" style="width:20%" class="w3-input" placeholder="phone number" name="phone_number"/></center><br>
			<button type="submit" class="w3-button w3-ripple w3-round w3-hover-blue w3-blue">Login with sms</button>
		</form>

	</div>	

	</body>

</html>
