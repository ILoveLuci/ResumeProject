<?php
$mysql_hostname = "localhost";
$mysql_user = "evansr_evan";
$mysql_password = "JDszGO1kMvMu";
$mysql_database = "evansr_resumedrafter";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
// Set Time Zone
date_default_timezone_set('America/New_York');
?>