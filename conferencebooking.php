<!DOCTYPE html>
<html lang="en">
<head>
	<title>conference booking form</title>
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
    <?php if (isset($_POST['PersEmail'])): //A conference booking has been added using the form below		
	include 'ahds.inc.php';					
	$RefNo = $_POST['RefNo'];$Title = $_POST['Title'];$FirstName = $_POST['FirstName'];$Surname = $_POST['Surname'];$School = $_POST['School'];$Address1 = $_POST['Address1'];$Address2 = $_POST['Address2'];$City = $_POST['City'];$Postcode = $_POST['Postcode'];
	$Telephone = $_POST['Telephone'];$PersEmail = $_POST['PersEmail'];$LA = $_POST['LA'];$Dietary_requirements = $_POST['Dietary_requirements'];$Marketing = $_POST['Marketing'];$Notes2 = $_POST['Notes2'];$ConfName = $_POST['ConfName'];$ConfDate = $_POST['ConfDate'];
	$ConfOption = $_POST['ConfOption'];$Status = $_POST['Status'];$Dinner = $_POST['Dinner'];$Accommodation = $_POST['Accommodation'];$Acc_special_requirements = $_POST['Acc_special_requirements'];$WrkshopThurs = $_POST['WrkshopThurs'];$WrkshopChoiceAM = $_POST['WrkshopChoiceAM'];
	$Hotel_name = $_POST['Hotel_name'];$WrkshopChoicePM = $_POST['WrkshopChoicePM'];$NetCost = $_POST['NetCost'];$PaymentDate1 = $_POST['PaymentDate1'];$PaymentType1 = $_POST['PaymentType1'];
	$sql = "INSERT INTO conference_booking SET RefNo='$RefNo',Title='$Title',FirstName='$FirstName',Surname='$Surname',School='$School',Address1='$Address1',Address2='$Address2',
				City='$City',Postcode='$Postcode',Telephone='$Telephone',PersEmail='$PersEmail',LA='$LA',Dietary_requirements='$Dietary_requirements',Marketing='$Marketing',Notes2='$Notes2',
				ConfName='$ConfName',ConfDate='$ConfDate',ConfOption='$ConfOption',WrkshopThurs='$WrkshopThurs',WrkshopChoiceAM='$WrkshopChoiceAM',
				Hotel_name='$Hotel_name',WrkshopChoicePM='$WrkshopChoicePM',NetCost='$NetCost',PaymentType1='$PaymentType1',Status='$Status',Accommodation='$Accommodation',
				Acc_special_requirements='$Acc_special_requirements',Dinner='$Dinner',PaymentDate1='$PaymentDate1'";
	if (@mysql_query($sql))
	{
	echo '<h4 style="color:#4B0082;text-align:center">Thank You<br><br>Your online booking application form has been submitted successfully!</h4>';
	} else
	{
	echo '<h4 style="color:#FF0000;text-align:center">Error submitting your online booking application form, Please try again!</h4>';
	}		
	?>	<br><br>	
	<p style="text-align:center"><a href="index.php">Return to Home page </a></p>		
	<?php else: // allow the user to enter a conference booking details ?>		
	<form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" name = "ahds">		
	<div class="olu"><p>Conference Booking Form</p></div><!--conference booking form -->	
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
		<label class="control-label col-sm-2" for="Status">Status:</label>
		<div class="col-sm-2">
		  <select class="form-control" name="Status" id="Status">
			<option></option>
			<option>Delegate</option>
			<option>Speaker</option>
			<option>Guest</option>
			<option>Executive Member</option>
			<option>Press</option>
			<option>Other</option>
		  </select>
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
	</div>
	<div class="form-group">	
		<label class="control-label col-sm-2" for="Notes2">Notes:</label>
		<div class="col-sm-4">
			<textarea class="form-control" rows="3" id="Notes2" name="Notes2" wrap = "soft" maxlength="1000" placeholder="maximum of 1000 characters..."></textarea>
		</div>
	</div><br><br><br>
	<div class="ayo"><p>Conference Booking Details</p></div><br>
	<div class="form-group">
		<label class="control-label col-sm-2" for="ConfName">Conference Name*:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="ConfName" name="ConfName" maxlength="100" required>
		</div>	
		<label class="control-label col-sm-2" for="ConfDate">Conference Date*:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="ConfDate" name="ConfDate" maxlength="12" required><!-- calendar is attached here --><script> new JsDatePick ({useMode:2,target:"ConfDate",dateFormat:"%d/%M/%Y"}); </script>
		</div>	
		<label class="control-label col-sm-2" for="ConfOption">Conference Option:</label>
		<div class="col-sm-2">
		  <select class="form-control" name="ConfOption" id="ConfOption">
			<option></option>
			<option>1 Full Conference</option>
			<option>2T Full Thu Acc</option>
			<option>2F Full Fri Acc</option>
		  </select>
		</div>	
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="WrkshopThurs">Thursday Workshop Choice:</label>
		<div class="col-sm-2">
		  <select class="form-control" name="WrkshopThurs" id="WrkshopThurs">
			<option></option>
			<option>Moderation</option>
			<option>Progression & Transition</option>
			<option>Reporting & Recording</option>
			<option>Tracking</option>
		  </select>
		</div>	
		<label class="control-label col-sm-2" for="WrkshopChoiceAM">Workshop Choice AM:</label>
		<div class="col-sm-2">
		  <select class="form-control" name="WrkshopChoiceAM" id="WrkshopChoiceAM">
			<option></option>
			<option>Moderation</option>
			<option>Progression & Transition</option>
			<option>Reporting & Recording</option>
			<option>Tracking</option>
		  </select>
		</div>	
		<label class="control-label col-sm-2" for="WrkshopChoicePM">Workshop Choice PM:</label>
		<div class="col-sm-2">
		  <select class="form-control" name="WrkshopChoicePM" id="WrkshopChoicePM">
			<option></option>
			<option>Moderation</option>
			<option>Progression & Transition</option>
			<option>Reporting & Recording</option>
			<option>Tracking</option>
		  </select>
		</div>	
	</div>	
	<div class="form-group">
		<label class="control-label col-sm-2" for="Hotel_name">Hotel Name:</label>
		<div class="col-sm-2">
		  <select class="form-control" name="Hotel_name" id="Hotel_name">
			<option></option>
			<option>MacDonald</option>
			<option>Westerwood</option>
			<option>Tree Top</option>
		  </select>
		</div>	
		<label class="control-label col-sm-2" for="Dinner">Dinner:</label>
		<div class="col-sm-2">
		  <select class="form-control" name="Dinner" id="Dinner">
			<option></option>
			<option>Wednesdays only</option>
			<option>Thursdays only</option>
			<option>Fridays only</option>
			<option>Wednesdays & Thursdays</option>
			<option>Thursdays & Fridays</option>
		  </select>
		</div>	
		<label class="control-label col-sm-2" for="Accommodation">Accommodation:</label>
		<div class="col-sm-2">
		  <select class="form-control" name="Accommodation" id="Accommodation">
			<option></option>
			<option>Wednesdays Eve only</option>
			<option>Thursdays Eve only</option>
			<option>Fridays Eve only</option>
			<option>Wednesdays & Thursdays Eve</option>
			<option>Thursdays & Fridays Eve</option>
			<option>Sharing Wednesdays Eve only</option>
			<option>Sharing Thursdays Eve only</option>
			<option>Sharing Fridays Eve only</option>
			<option>Sharing Wednesdays & Thursdays Eve</option>
			<option>Sharing Thursdays & Fridays Eve</option>
		  </select>
		</div>	
	</div>
	<div class="form-group">	
		<label class="control-label col-sm-2" for="Acc_special_requirements">Accommodation Special Rqm:</label>
		<div class="col-sm-4">
			<textarea class="form-control" rows="3" id="Acc_special_requirements" name="Acc_special_requirements" wrap = "soft" maxlength="200" placeholder="maximum of 200 characters..."></textarea>
		</div>
	</div><br><br><br>
	<div class="ayo"><p>Conference Payment Details</p></div><br>
	<div class="form-group">
		<label class="control-label col-sm-2" for="NetCost">Cost of Conference &pound:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="NetCost" name="NetCost" maxlength="6">
		</div>	
		<label class="control-label col-sm-2" for="PaymentDate1">Payment Date:</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="PaymentDate1" name="PaymentDate1" maxlength="12"><!-- calendar is attached here --><script> new JsDatePick ({useMode:2,target:"PaymentDate1",dateFormat:"%d/%M/%Y"}); </script>
		</div>	
		<label class="control-label col-sm-2" for="PaymentType1">Payment Method:</label>
		<div class="col-sm-2">
		  <select class="form-control" name="PaymentType1" id="PaymentType1">
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