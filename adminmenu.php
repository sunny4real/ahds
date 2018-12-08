<!DOCTYPE html>
<html lang="en">
<head>
	<title>admin login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="ayomide.css">
	<style>
		body {font-family:"Verdana",Geneva,sans-serif;text-align:center;}
		h2 {color:#006400;}
	</style>
</head>		
<body>
	<div class="container">
		<h2>Admin Login</h2><br><br>	
		<?php
		// show potential errors / feedback (from login object)
		if (isset($login1)) {
		if ($login1->errors) {
		foreach ($login1->errors as $error) {
		echo $error;}}
		if ($login1->messages) {
		foreach ($login1->messages as $message) {
		echo $message;}}}
		?> <br><br>	
		<!-- login form box -->			
		<form class="form-horizontal" role="form" method="post" action="index_adminuser.php" name="loginadminform">
		<div class="form-group">
		<label class="control-label col-sm-2" for="login_input_username">Username:</label>
		   <div class="col-sm-10">
			<input type="text" class="form-control" id="login_input_username" name="user_name" placeholder="Enter your user name" required>
		   </div>
		</div>
		<div class="form-group">
		<label class="control-label col-sm-2" for="login_input_password">Password:</label>
		   <div class="col-sm-10">
			<input id="login_input_password" class="form-control" type="password" name="user_password" placeholder = "Enter your password" required autocomplete="off" />
		   </div>
		</div><br><br>
		<div class="form-group">
		  <div class="col-sm-12">
			<button type="submit" id="Submit" class="btn" name="login1">Log in</button>
		  </div>
		</div>				
		</form><br><br>
		<a href="register_adminuser.php">Register New Admin User</a><br><br><br>
		<a href="index.php">Return to the Home page</a><br><br>
	</div>	
</body>
</html>