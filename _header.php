<nav class="navbar" id="header" role="navigation">
	<div class="container-fluid">
			<div class="navbar-header">	
				<img alt="logo" src="img/logo.png" width="236" height="130">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="sr-only">Toggle menu navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>			
			</div>
			<div  class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav" id="myHeader">
					<li <?=echoActiveClassIfRequestMatches("index")?>><a href="index.php">Home</a></li>
					<li <?=echoActiveClassIfRequestMatches("about")?>><a href="about.php">About</a></li>
					<li <?=echoActiveClassIfRequestMatches("news")?>><a href="news.php">News</a></li>
					<li <?=echoActiveClassIfRequestMatches("supports")?>><a href="supports.php">Support</a></li>					
					 <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Event Booking<b class="caret"></b></a> 
						 <ul class="dropdown-menu">					
							<li><a href="trainingbooking=0094838682hgkhshirORORAfijwhgcnxn.php">Training Booking</a></li>
							<li><a href="conferencebooking=79979098793jjejHFBVIniu3iORORA12.php">Conference Booking</a></li>
						</ul>
					</li>
					<li <?=echoActiveClassIfRequestMatches("contacts")?>><a href="contacts.php">Contact</a></li>
				</ul>
			</div>
	</div>
</nav>    