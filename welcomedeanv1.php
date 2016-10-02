<?php
include('lock.php');
?>
<html>
<title>Admin Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="./Demo W3.CSS_files/w3-theme-red.css">
<link rel="stylesheet" href="./Demo W3.CSS_files/font-awesome.min.css">
<body>
<!--header-->
<header class="w3-container w3-blue">
<h1>Admin Portal</h1>
</header>
<!--header-->
<div class="w3-padding w3-white">
	<h2 align="center">Welcome,  <?php echo $login_session; ?> !</h2>
</div>
<head>
    <script type="text/javascript">

      function activateTab(pageId) {
          var tabCtrl = document.getElementById('tabCtrl');
          var pageToActivate = document.getElementById(pageId);
          for (var i = 0; i < tabCtrl.childNodes.length; i++) {
              var node = tabCtrl.childNodes[i];
              if (node.nodeType == 1) { /* Element */
                  node.style.display = (node == pageToActivate) ? 'block' : 'none';
              }
          }
      }

    </script>
  </head>
  <body align="center">
        <a href="javascript:activateTab('page1')" class="w3-btn w3-topnav a w3-light-green">Appointments</a>
        <a href="javascript:activateTab('page2')" class="w3-btn w3-light-green">Messaging</a>
         <a href="javascript:activateTab('page3')" class="w3-btn w3-light-green">Call Log</a>
		 <a href="javascript:activateTab('page4')" class="w3-btn w3-light-green">Account Management</a>
      <br>
    </ul>
    <div id="tabCtrl">
      <div id="page1" style="display: block;">
	  asdasdasdasdasdasd
	  <h1> Welcome </h1>
	  </div>
      <div id="page2" style="display: none;">Page 2</div>
      asdasdasdasdasdas23213
	  <div id="page3" style="display: none;">Page 3</div>
	  asdasd
    </div>
<!--footer-->
<br><br><br><br><br>
<footer class="w3-container w3-red">
	<p>Thesis B System 2015-2016. All rights reserved.</p>
</footer>
  </body>
</html>