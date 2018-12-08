<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet"  media="all" href="ahds_style.css" >
	<link rel="stylesheet" href="olumide.css">
</head>			
<body class="folasade">
   <div class="container-fluid">
	<?php
	if (isset($_POST['sn'])): //A contacting form has been added using the form below		
	include 'ahds.inc.php';
	$name = $_POST['name'];$PersEmail = $_POST['PersEmail'];$usersubject = $_POST['usersubject'];$userquery = $_POST['userquery'];
	$sql = "INSERT INTO contactform SET name='$name',PersEmail='$PersEmail',usersubject='$usersubject',userquery='$userquery'";
	if (@mysql_query($sql))
		{
		echo '<p style="color:#4B0082;text-align:center">Thank You<br><br>We have successfully received your Message/Query!</p>';
		echo '<p style="color:#4B0082;text-align:center">We shall endeavour to respond within 48 hours</p>';
		} else
		{
		echo '<p style="color:#FF0000;text-align:center">Error submitting your Message/Query, Please try again!</p>';
		}
	?>	<br><br>
	<p style="text-align:center"><a href="index.php">Return to Home page </a></p>
	<?php else: // allow the user to enter Message/Query details ?>	
	<form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" name = "ahds">				
	<!-- register form -->
	<div class="olu"><p>If you have a general message/query please use the contact form below:</p></div>
	<div class="ola"><p>All fields are mandatory</p></div>
				<input type = "hidden" name="sn" size="30" maxlength="10">
			   <!-- the user name input field uses a HTML5 pattern check -->			   
			  <div class="form-group">
				<label class="control-label col-sm-4" for="name">Name:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="name" name="name" maxlength="50" placeholder="Enter your name" required>
				</div>
			  </div>
			  <!-- the email input field uses a HTML5 email type check -->
			  <div class="form-group">
				<label class="control-label col-sm-4" for="PersEmail">Email:</label>
				<div class="col-sm-4">
					<input type="email" class="form-control" id="PersEmail" name="PersEmail" maxlength="54" placeholder="Enter your email" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-4" for="usersubject">Subject:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="usersubject" name="usersubject" maxlength="50" placeholder="Enter the subject of your Message/Query" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-4" for="userquery">Message/Query:</label>
				<div class="col-sm-4">
					<textarea class="form-control" rows="6" name="userquery" id="userquery" maxlength="1000" placeholder="maximum of 1000 characters..." required></textarea>
				</div>
			  </div><br>		  
			  <div class="form-group">
				<label class="control-label col-sm-4"> </label>
				<div class="col-sm-4">
					<button type="submit" id="Submit" name="Submit" class="btn">SUBMIT</button>
				</div>
			  </div>			 			
	<?php endif; ?>	
   </div>
</body>
</html>