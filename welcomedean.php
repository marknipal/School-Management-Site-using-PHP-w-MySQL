<?php
include('lock.php');
/* require_once("conf.php");   */ 
?>
<html>
<title>Admin Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
<link rel="stylesheet" href="assets/css/w3.css">
<link rel="stylesheet" href="assets/css/w3-theme-red.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">


		
<!-- Stylesheets -->

		<link href="assets/css/responsive-tabs.css" rel="stylesheet" type="text/css"  />
<body>
<!-- JavaScript -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="assets/js/smoothscroll.min.js" type="text/javascript"></script>
		<script src="assets/js/backbone.js" type="text/javascript"></script>
		<script src="assets/js/responsive-tabs.min.js" type="text/javascript"></script>
<!--header-->
<header class="w3-container w3-blue">
<h1 align="center">Admin Portal</h1>
</header>
<body>
	<!-- Header -->
		<div class="container">
			<h2 align="center">Welcome,  <?php echo $login_session; ?> !</h2>
		</div>
	<!-- No JavaScript -->
		<noscript>
			<div class="container text-center">
				<div id="no-script">
					<p class="bm-smaller"><strong>JavaScript Disabled</strong></p>
					<p class="bm-smaller">Certain features of this site may not function correctly without JavaScript enabled</p>
					<p class="bm-remove"><a href="http://enable-javascript.com/" target="_blank">Find out how to enable JavaScript in your browser</a></p>
				</div>
			</div>
		</noscript>
	<!-- Content -->
						
		<div class="w3-container responsive-tabs-default">
			<ul class="responsive-tabs ">
				<li><a href="#example-1-tab-1" target="_self" class="">Appointment</a></li>
				<li><a href="#example-1-tab-2" target="_self">Messaging</a></li>
				<li><a href="#example-1-tab-3" target="_self">Call Log</a></li>
					<li><a href="#example-1-tab-4" target="_self">Accounts</a></li>
				<br><br>
			</ul>

			<div class="responsive-tabs-content bm-larger">
				<div id="example-1-tab-1" class="responsive-tabs-panel">
				
							<h3>Appointment</h3>
							<a class="w3-btn w3-white w3-border" onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;block&#39;" style="width:548.5px">
								<h3 align="left">Set an Appointment</h3>
								<p align="left">List the time and meeting place of the appointment</p>
								</a>
								<a class="w3-btn w3-white w3-border" style="width:548.5px">
								<h3 align="left">View my Appointments</h3>
								<p align="left">View or delete current appointments</p>
							</a>
				</div>
				<div id="example-1-tab-2" class="responsive-tabs-panel">
					<h3>Messaging</h3>
					<a class="w3-btn w3-white w3-border" onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;block&#39;" style="width:548.5px">
					<h3 align="left">Send a Message</h3>
					<p align="left">Type and send a message to the Dean</p>
					</a>
				
					<a class="w3-btn w3-white w3-border" onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;block&#39;" style="width:548.5px">
					<h3 align="left">View my Inbox</h3>
					<p align="left">View or delete my messages</p>
					</a>
				</div>
				<div id="example-1-tab-3" class="responsive-tabs-panel">
					<h3>Call Log</h3>
					<a class="w3-btn w3-white w3-border" onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;block&#39;" style="width:548.5px">
					<h3 align="left">Start a Voice Call</h3>
					<p align="left">Start the call option with voice enabled</p>
					</a>
					
					<a class="w3-btn w3-white w3-border" onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;block&#39;" style="width:548.5px">
					<h3 align="left">Start a Video Call</h3>
					<p align="left">Start the call option with voice and video enabled</p>
					</a>
				</div>
				<div id="example-1-tab-4" class="responsive-tabs-panel">
				<h3>Account Management</h3>
				<a class="w3-btn w3-white w3-border" onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;block&#39;" style="width:548.5px">
					<h3 align="left">Manage Accounts</h3>
					<p align="left">View or edit current account credentials</p>
					</a>
					<a class="w3-btn w3-white w3-border" onclick="document.getElementById(&#39;id02&#39;).style.display=&#39;block&#39;" style="width:548.5px">
					<h3 align="left">View my Account</h3>
					<p align="left">View or edit current account credentials</p>
					</a>
					<a href="logout.php" class="w3-btn w3-white w3-border"  style="width:548.5px">
					<h3 align="left">Logout</h3>
					<p align="left">Logout account and return to main page</p>
					</a>
					<?php
							$dg = new C_DataGrid("SELECT * FROM users");
							//searchbar
							$dg->enable_advanced_search(true);
							$dg->enable_export('EXCEL');
							//auto fit to screen
							$dg->enable_autowidth(true)->enable_autoheight(true);
							$dg->set_pagesize(100); // need to be a large number
							$dg->set_scroll(true);
							$dg->enable_kb_nav(true);
							$dg -> display();  
							?>
				</div>
			</div>
			</div>
		</div>
<!--footer-->
<footer class="w3-container w3-red">
	<p>Thesis B System 2015-2016. All rights reserved.</p>
</footer>
  </body>
</html>