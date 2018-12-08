<!DOCTYPE html>
<html lang="en">
<head>
	<title>Account Creation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="ayomide.css">
	<style>
		body {font-family:"Verdana",Geneva,sans-serif;text-align:center}
		h2 {color:#006400;}
		p {font-style:italic;}
	</style>
</head>	
<body>
	<div class="container">
	<!-- register form --><br><br>
  <form class="form-horizontal" role="form"  method="post" action="register_adminuser.php" name="registeradminform">
	<h2>Account Creation</h2>
	<p>All fields are mandatory</p><br>
	<?php
	// show potential errors / feedback (from registration object)
	if (isset($registration1)) {
	if ($registration1->errors) {
	foreach ($registration1->errors as $error) {
	echo $error;    }}
	if ($registration1->messages) {
	foreach ($registration1->messages as $message) {
	echo $message;    }}}
	?><br><br>
	<!-- the user name input field uses a HTML5 pattern check -->
	<div class="form-group">
		<label class="control-label col-sm-2" for="login_input_username">Username*:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="login_input_username" name="user_name" pattern="[a-zA-Z0-9]{8,54}" placeholder="only letters and numbers, 8 to 54 characters" required>
		</div>
	</div>	 		 
	<div class="form-group">
		<label class="control-label col-sm-2" for="login_input_password_new">Password*:</label>
		<div class="col-sm-10">
			<input id="login_input_password_new" class="form-control" type="password" name="user_password_new" placeholder = "--min. 6 characters--" pattern=".{6,}" required autocomplete="off" />
		</div>
	</div> 
	<div class="form-group">
		<label class="control-label col-sm-2" for="login_input_password_repeat">Repeat Password*:</label>
		<div class="col-sm-10">
			<input id="login_input_password_repeat" class="form-control" type="password" name="user_password_repeat" placeholder = "Repeat your password" pattern=".{6,}" required autocomplete="off" />
		</div>
	</div><br>
	<div class="form-group">
		<div class="col-sm-12">
			<button type="submit" id="Submit" class="btn" name="register">REGISTER</button>
		</div>
	</div>	
  </form>
	<!-- backlink --><br><br>
		<a href="index_adminuser.php">Back to Login Page</a><br><br>
  </div>
</body>
</html>