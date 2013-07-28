<?php
include "./lib/session.inc.php";
include "config.php";
$session = new sessions();
if(isset($_SESSION['username']))
{
  header('Location:'. website . 'Dashboard.php'); //redirect to application url eg : http://localhost/
}

?>
<html>
<head>
<title>Selogics Management System :: Login</title>
<link rel="stylesheet" type="text/css" href="css/login.css"/>
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/core.js"></script>
<script type="text/javascript" src="./js/watermark.js"></script>
</head>	
<body>
	<center>
	<div id="logo" style="position:absolute;margin-left:530px;margin-top:35px;"></div></center>
<div id="login">

	<div id="lgnform">
	<table cellpadding="10" align="center">
<tr>
<td><h3 class="tag">Username</h3></td><td><input type="text" name="username" class="txt" maxlength="10" id="username"></td>
</tr>
<tr>
<td><h3 class= "tag">Password</h3></td><td><input type="password" name="password" class="txt" maxlength="10" id="password"></td>
</tr>
<tr>
	<td colspan="2"><center><a href=""><img src="./images/btn.png" alt="signin" id="img"></img></a></center></td>
	
</tr>
</table>

</div>
</div> 


<div id="infoarea">
	<center><h3>Incorrect username or password</h3></center>
	
	
</div>


</body>
</html>
