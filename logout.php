<?php
include "./lib/session.inc.php";
$session = new sessions();
$session->destroy();
echo "<table border=\"0\"><tr><td><img src=\"images/info.png\" id=\"info\"></td><td><h3>Please wait ...</h3></td></tr></table>";

?>  

<style>
#info
{
	width:30px;
	height:30px;
	margin-top:-17px;
}
h3
{
	
}
</style>

