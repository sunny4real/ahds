<!DOCTYPE html>
<html lang="en">
<head>
	<title>Message/Query Table</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- external JC and CSS will be attached by the following -->
		<link type = "text/css" rel="stylesheet"  media="all" href="ahds_style.css">
		<script type = "text/javascript" src = "ahdsformvalidation.js"></script>
	<style>
		body {font-family:"Verdana",Geneva,sans-serif;text-align:center}
	</style>
</head>
<body>
	<div class="container-fluid"><br>
		<table id="customers">		
    	<?php
		echo"<caption>MESSAGE/QUERY TABLE</caption>";
		echo "<em style ='float:right'><a href='index_adminuser.php?logout'>Logout</a></em>";
		echo"<tr><th>Serial Number</th><th>Name</th><th>Email</th><th>View</th><th>Delete</th><tr>";		
		include 'ahds.inc.php';		
		$contactings = @mysql_query('SELECT sn, PersEmail, name FROM contactform ORDER BY name');
		if (!$contactings)
		{
		exit('<p style="color:#FF0000">Error retrieving Message/Query Details from the database!<br />'. 'Error: ' . mysql_error() . '</p>');
		}		
		while ($contacting = mysql_fetch_array($contactings))
		{
		$sn = $contacting['sn'];$PersEmail = $contacting['PersEmail'];$name = $contacting['name'];
		//Converting special characters for safe output as HTML attributes
		$PersEmail = htmlspecialchars($contacting['PersEmail']);$name = htmlspecialchars($contacting['name']);
		echo"<tr><td>$sn</td><td>$name</td><td>$PersEmail</td><td>".
			"<a href='Message_Query.php?sn=$sn'>View</a></td><td>".
			"<a href='deletemessage_query.php?sn=$sn' onclick='return deleteConfirm()'>Delete</a></td></tr>"; 
		}		
		?>		
		</table>
		<br><br>
		<a href="index_adminuser.php">Return to Administrative Menu</a>	
	 </div>
</body>
</html>