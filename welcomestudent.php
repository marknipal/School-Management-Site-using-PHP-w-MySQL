<?php
include('lock.php');
?>
<html>
<title>Student Center</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/w3.css">
<link rel="stylesheet" href="assets/css/w3-theme-red.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<body>
<!--header-->
<header class="w3-container w3-blue">
<h1>Student Center</h1>
</header>
<!--header-->
<div class="w3-padding w3-white">
	<h2>Welcome,  <?php echo $login_session; ?> !</h2>
	<p>What do you want to do?</p>
</div>
<!--actions-->
<div class="w3-row-padding">
<div class="w3-half">
<div class="w3-card white">
	<div class="w3-container w3-indigo">
		<h3>&#9776; Appointments</h3>
	</div>
		<a class="w3-btn w3-white w3-border" onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;block&#39;" style="width:548.5px">
			<h3 align="left">Set an Appointment</h3>
			<p align="left">List the time and meeting place of the appointment</p>
			</a>
		<a class="w3-btn w3-white w3-border" style="width:548.5px">
			<h3 align="left">View my Appointments</h3>
			<p align="left">View or delete current appointments</p>
		</a>
</div>
</div>

<div class="w3-half">
<div class="w3-card white">
	<div class="w3-container w3-red">
	
		<h3>&#9776; Messaging</h3>
	</div>
	
		
			<a class="w3-btn w3-white w3-border" onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;block&#39;" style="width:548.5px">
			<h3 align="left">Send a Message</h3>
			<p align="left">Type and send a message to the Dean</p>
			</a>
		
			<a class="w3-btn w3-white w3-border" onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;block&#39;" style="width:548.5px">
			<h3 align="left">View my Inbox</h3>
			<p align="left">View or delete my messages</p>
			</a>
	
</div>
</div>
</div>
<br>
<div class="w3-row-padding">
<div class="w3-half">
<div class="w3-card white">
	<div class="w3-container w3-yellow">
		<h3>&#9776; Call Log</h3>
	</div>
	
			<a class="w3-btn w3-white w3-border" onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;block&#39;" style="width:548.5px">
			<h3>Start a Voice Call</h3>
			<p>Start the call option with voice enabled</p>
			</a>
			
			<a class="w3-btn w3-white w3-border" onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;block&#39;" style="width:548.5px">
			<h3>Start a Video Call</h3>
			<p>Start the call option with voice and video enabled</p>
			</a>
</div>
</div>

<div class="w3-half">
<div class="w3-card white">
	<div class="w3-container w3-orange">
		<h3>&#9776; Account Management</h3>
	</div>

		<a class="w3-btn w3-white w3-border" onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;block&#39;" style="width:548.5px">
			<h3 align="left">View my Account</h3>
			<p align="left">View or edit current account credentials</p>
			</a>
		
		<a href="logout.php" class="w3-btn w3-white w3-border"  style="width:548.5px">
			<h3 align="left">Logout</h3>
			<p align="left">Logout account and return to main page</p>
			</a>
	
</div>
</div>

<!--modal-->
<div id="id02" class="w3-modal" style="display: none;">
    <div class="w3-modal-content w3-card-8 w3-animate-top">
      <header class="w3-container w3-theme w3-red"> 
        <span onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;none&#39;" class="w3-closebtn">x</span>
        <h3>Set an Appointment</h3>
      </header>
      <form class="w3-container w3-card-4">
    <div class="w3-group">
		<div class="w3-dropdown-hover">
			<button class="w3-btn w3-large" >Time</button>
			<div class="w3-dropdown-content w3-light-grey w3-grey w3-left-align">
				<a>8:00 AM</a>
				<a>9:00 AM</a>
				<a>10:00 AM</a>
				<a>11:00 AM</a>
			</div>
	</div>
	<div class="w3-group">
		<div class="w3-dropdown-hover">
			<button class="w3-btn w3-large" style="width:500px">Location</button>
			<div class="w3-dropdown-content w3-light-grey w3-grey w3-left-align">
				<a>Hallway</a>
				<a>Library</a>
				<a>Dean's Office</a>
				<a>Faculty Room</a>
		</div>
	</div>
	<div class="w3-group">
		<input class="w3-input" type="text">
		<label class="w3-label w3-validate">Appointment Subject</label>
	</div>
     
	<div class="w3-group">
		<button class="w3-btn w3-yellow" style="width:200px">Set Appointment</button>
	</div>
      </form>
    </div>
</div>

<!--footer-->
<br><br><br><br><br>
<footer class="w3-container w3-red">
	<p>Thesis B System 2015-2016. All rights reserved.</p>
</footer>

</body>
</html>