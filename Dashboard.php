<?php
//coded by jijojohn @ singlelinelogics
include "./lib/session.inc.php"; //including the session class for instantiation
include "config.php";
$session = new sessions(); //instantiate the session object
$username = $_SESSION['username']; //get the username from the session
 if(!isset($_SESSION['username'])) //check the session  is not set
{
  
	header('Location:'. website); //redirect to application url eg : http://localhost/
}
else 
{
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/core.js"></script>
<script type="text/javascript" src="js/uploadcore.js"></script>
<script type="text/javascript" src="js/watermark.js"></script>
<title>Welcome <?php echo $_SESSION['username']; ?> :: Selogics management sytem</title>
</head>
<body>
<div id="headerbg">
	<div id="logo"></div>
	<div id="status"><a href="#" id="logout">Logout</a> &nbsp;&nbsp;&nbsp; <a href="#" id="setting">Settings</a>
	<p id="user">Welcome : <?php echo $username; ?> </p>
	
</div>
<noscript style="color:red;position:absolute;margin-top:100px;margin-left:-130px;background-color:#7AD4FD;">Oh !Please enable javascript in your web browser (Client software)!</noscript>
<center>
	
<div id="contentbar">
	
<div class="grid_7">
	
	
            	
            	<a href="" class="dashboard-module">
                	<img src="images/ui/Crystal_Clear_calendar.gif" /></br>
                	<span>Articles</span>
                </a>
                
                <a href="" class="dashboard-module">
                	<img src="images/ui/Crystal_Project_mail_open.gif" /></br>
                	<span>Upload file</span>
                </a>
                
                <a href="" class="dashboard-module">
                	<img src="images/ui/Crystal_Clear_stats.gif" /></br>
                	<span>Articles</span>
                </a>
                
                <a href="" class="dashboard-module">
                	<img src="images/ui/Crystal_Clear_user.gif" /></br>
                	<span>Calendar</span>
                </a>
                
                <a href="" class="dashboard-module">
                	<img src="images/ui/Crystal_Clear_write.gif"/></br>
                	<span>My profile</span>
                </a>
                
          
                <div style="clear: both"></div>
           
            </div>
	

	
	
	
	
	
</div>


</center>







<center>
<div id="dialogui">
</div>
</center>
</body>
</html>

<?php
}
?>
