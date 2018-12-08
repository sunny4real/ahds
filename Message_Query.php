<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Message/Query</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- external JavaScript will be added in the following section -->
	<script type = "text/javascript" src = "ahdsformvalidation.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet"  media="all" href="ahds_style.css" >
	<link rel="stylesheet" href="olumide.css">
</head>
<body> 
   <div class="container-fluid"> 
    	<?php 		
		include 'ahds.inc.php';		
		// allow the user to view training booking details
		$sn = $_GET['sn'];
		$contacting = @mysql_query("SELECT * FROM contactform WHERE sn = '$sn'"); 
		if (!$contacting)
		{
		exit ('<h4 style="color:#FF0000">Error retrieving Message/Comment details: ' . mysql_error() . '</h4>');
		}		
		$contacting = mysql_fetch_array($contacting);		
		$PersEmail = $contacting['PersEmail'];$name = $contacting['name'];$usersubject = $contacting['usersubject'];$userquery = $contacting['userquery'];$day_time_submitted = $contacting['day_time_submitted'];				
		//Converting special characters for safe output as HTML attributes
		$PersEmail = htmlspecialchars($PersEmail); $name = htmlspecialchars($name);$usersubject = htmlspecialchars($usersubject);$userquery = htmlspecialchars($userquery);$day_time_submitted = htmlspecialchars($day_time_submitted);	
		?>		
	<form class="form-vertical" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" >		
		<p style="font-weight:bold;font-size:16pt;text-align:center;color:#006400">MESSAGE/QUERY DETAILS</p>
		<div class="form-group">
		<label class="control-label" for="login_input_username">Name:</label>
			<input type="text" class="form-control" id="login_input_username" name="name" readonly value="<?php echo $name; ?>">
		</div>
		<div class="form-group">
		<label class="control-label" for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="PersEmail" readonly value="<?php echo $PersEmail; ?>">
		</div>
		<div class="form-group">
		<label class="control-label" for="login_input_subject">Subject:</label>
			<input type="text" class="form-control" id="login_input_subject" name="usersubject" readonly value="<?php echo $usersubject; ?>">
		</div>
		<div class="form-group">
		<label class="control-label" for="comment">Message/Query:</label>
			<textarea class="form-control" rows="8" id="comment" name="userquery" readonly><?php echo $userquery; ?></textarea>
		</div>
		<div class="form-group">
		<label class="control-label" for="day_time_submitted">Date Message/Query Submitted:</label>
			<input type="text" class="form-control" id="day_time_submitted" name="day_time_submitted" readonly value="<?php echo $day_time_submitted; ?>">
		</div>					      				   
		<input type = "hidden" name = "sn" value="<?php echo $sn; ?>" ><br><br>
		<ul class="text-center">
			<a href="messagequerytable.php">Return to Message/Query Table</a><br><br>
			<a href="index_adminuser.php">Return to Administrative Menu</a>
		</ul>
	</form>
  </div>
</body>
</html>	