<!DOCTYPE html>
<html lang="en">
<head>
	<title>training booking form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="calendar_eu.js"></script>
	<link rel="stylesheet"  media="all" href="ahds_style.css" >
	<link rel="stylesheet" href="olumide.css">
</head>			
<body>
   <div class="container-fluid folasade">
    <?php if (isset($_POST['PersEmail'])): //A training booking has been added using the form below		
	include 'ahds.inc.php';				
	$RefNo = $_POST['RefNo'];$Title = $_POST['Title'];$FirstName = $_POST['FirstName'];$Surname = $_POST['Surname'];$School = $_POST['School'];$Address1 = $_POST['Address1'];$Address2 = $_POST['Address2'];$City = $_POST['City'];$Postcode = $_POST['Postcode'];$Telephone = $_POST['Telephone'];$PersEmail = $_POST['PersEmail'];$LA = $_POST['LA'];$Notes1 = $_POST['Notes1'];
	$Dietary_requirements = $_POST['Dietary_requirements'];$Marketing = $_POST['Marketing'];$CrsName = $_POST['CrsName'];$CrsDate = $_POST['CrsDate'];$SessionAM = $_POST['SessionAM'];$SessionPM = $_POST['SessionPM'];$Venue = $_POST['Venue'];$Season = $_POST['Season'];$NetCost = $_POST['NetCost'];$PaymentDate = $_POST['PaymentDate'];$PaymentType = $_POST['PaymentType'];
	$sql = "INSERT INTO training_booking SET RefNo='$RefNo',Title ='$Title',FirstName='$FirstName',Surname='$Surname',School='$School',Address1='$Address1',Address2='$Address2',
				City='$City',Postcode='$Postcode',Telephone='$Telephone',PersEmail='$PersEmail',LA='$LA',Dietary_requirements='$Dietary_requirements',Marketing='$Marketing',
				Notes1='$Notes1',CrsName='$CrsName',CrsDate='$CrsDate',SessionAM='$SessionAM',SessionPM='$SessionPM',Venue='$Venue',Season='$Season',
				NetCost='$NetCost',PaymentDate='$PaymentDate',PaymentType='$PaymentType'";
	if (@mysql_query($sql))
		{
		echo '<h4 style="color:#4B0082;text-align:center">Thank You<br><br>Your online booking application form has been submitted successfully!</h4>';
		} else
		{
		echo '<h4 style="color:#FF0000;text-align:center">Error submitting your online booking application form, Please try again!</h4>';
		}		
	?><br><br>	
	<p style="text-align:center"><a href="index.php">Return to Home page </a></p>		
	<?php else: // allow the user to enter training booking details ?>		
	<form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" name = "ahds">	
	<div class="olu"><p>Training Booking Form</p></div> <!--course training booking form -->
	<div class="ola"><p>*Denotes mandatory fields</p></div>
	<div class="ayo"><p>Personal Details</p></div><br>
	<div class="form-group">
		<label class="control-label col-sm-2" for="RefNo">Membership Number:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="RefNo" name="RefNo" maxlength="8" placeholder="N/A if non-member">
		</div>	
		<label class="control-label col-sm-2" for="Title">Title:</label>
		<div class="col-sm-2">
		<select class="form-control" name="Title" id="Title">
			<option></option>
			<option>Mr</option>
			<option>Mrs</option>
			<option>Ms</option>
			<option>Miss</option>
		</select>
		</div>	
		<label class="control-label col-sm-2" for="FirstName">First Name*:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="FirstName" name="FirstName" maxlength="40" required>
		</div>
	</div>	
	<div class="form-group">
		<label class="control-label col-sm-2" for="Surname">Surname*:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="Surname" name="Surname" maxlength="40" required>
		</div>	
		<label class="control-label col-sm-2" for="PersEmail">Email*:</label>
		<div class="col-sm-2">
			<input type="email" class="form-control" id="PersEmail" name="PersEmail" maxlength="50" required>
		</div>	
		<label class="control-label col-sm-2" for="School">School Name*:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="School" name="School" maxlength="40" required>
		</div>
	</div>	
	<div class="form-group">
		<label class="control-label col-sm-2" for="Address1">School Address1*:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="Address1" name="Address1" maxlength="30" required>
		</div>	
		<label class="control-label col-sm-2" for="Address2">School Address2:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="Address2" name="Address2" maxlength="30">
		</div>	
		<label class="control-label col-sm-2" for="City">School City*:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="City" name="City" maxlength="30" required>
		</div>
	</div>	
	<div class="form-group">
		<label class="control-label col-sm-2" for="Postcode">School Postcode*:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="Postcode" name="Postcode" maxlength="8" required>
		</div>	
		<label class="control-label col-sm-2" for="Telephone">School Telephone:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="Telephone" name="Telephone" maxlength="13">
		</div>	
		<label class="control-label col-sm-2" for="LA">School Local Authority*:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="LA" name="LA" maxlength="40" required>
		</div>
	</div>	
	<div class="form-group">
		<label class="control-label col-sm-2" for="Dietary_requirements">Dietary Requirements:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="Dietary_requirements" name="Dietary_requirements" maxlength="50">
		</div>	
		<label class="control-label col-sm-2" for="Marketing">Marketing:</label>
		<div class="col-sm-2">
		  <select class="form-control" name="Marketing" id="Marketing">
			<option></option>
			<option>Email</option>
			<option>H2H</option>
			<option>Website</option>
			<option>Word of mouth</option>
			<option>Event</option>
			<option>Other</option>
		  </select>
		</div>	
		<label class="control-label col-sm-2" for="Notes1">Notes:</label>
		<div class="col-sm-2">
			<textarea class="form-control" rows="3" id="Notes1" name="Notes1" wrap = "soft" maxlength="1000" placeholder="maximum of 1000 characters..."></textarea>
		</div>
	</div><br><br> 
	<div class="ayo"><p>Course Training Details</p></div><br>	
	<div class="form-group">
		<label class="control-label col-sm-2" for="CrsName">Course Name*:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="CrsName" name="CrsName" maxlength="100" required>
		</div>	
		<label class="control-label col-sm-2" for="CrsDate">Course Date*:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="CrsDate" name="CrsDate" maxlength="12" required><!-- calendar is attached here --><script> new JsDatePick ({useMode:2,target:"CrsDate",dateFormat:"%d/%M/%Y"}); </script>
		</div>	
		<label class="control-label col-sm-2" for="SessionAM">Session AM:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="SessionAM" name="SessionAM" maxlength="30">
		</div>
	</div>	
	<div class="form-group">
		<label class="control-label col-sm-2" for="SessionPM">Session PM:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="SessionPM" name="SessionPM" maxlength="30">
		</div>	
		<label class="control-label col-sm-2" for="Venue">Course Venue*:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="Venue" name="Venue" maxlength="40" required>
		</div>	
		<label class="control-label col-sm-2" for="Season">Season:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="Season" name="Season" maxlength="10">
		</div>
	</div><br><br><br>
	<div class="ayo"><p>Course Payment Details</p></div><br>	
	<div class="form-group">
		<label class="control-label col-sm-2" for="NetCost">Cost of Course &pound:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="NetCost" name="NetCost" maxlength="6">
		</div>	
		<label class="control-label col-sm-2" for="PaymentDate">Payment Date:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="PaymentDate" name="PaymentDate" maxlength="12"><!-- calendar is attached here --><script> new JsDatePick ({useMode:2,target:"PaymentDate",dateFormat:"%d/%M/%Y"}); </script>
		</div>	
		<label class="control-label col-sm-2" for="PaymentType">Payment Method:</label>
		<div class="col-sm-2">
		  <select class="form-control" name="PaymentType" id="PaymentType">
			<option></option>
			<option>Cheque</option>
			<option>Bank Transfer</option>
			<option>LA Purchase System</option>
		  </select>
		</div>	
	</div><br><br>
	<div class="sam"><p>
	This booking form constitutes a binding agreement. Where possible, payment must be
	made in full prior to the event. We are not responsible for non-arrival of confirmation
	documents. If you have not received your booking confirmation 7 days before your course,
	please call 01224 875 223. Cancellations must be made by post or through email to
	jessunesho@eshybyte.net. Cancellations made less than 4 weeks before the course are
	liable for the full amount. Substitutions will be accepted if notified by writing/email prior to the
	event and any appropriate additional fee due will be invoiced. Non arrivals are liable for the full fee.</p></div>
	<div class="checkbox sam">
		<label><input type="checkbox" name="terms" value="" required>I agree to the terms and conditions above*</label>
	</div><br><br>	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-2">
			<button type="reset" id="reset" class="btn" name="">CLEAR</button>
		</div>
		<div class="col-sm-offset-1 col-sm-5">
			<button type="submit" id="Submit" class="btn" name="">SUBMIT</button>
		</div>
	</div>	      			          
	</form>
	<?php endif; ?>
   </div>
</body>
</html>