<?php
date_default_timezone_set('America/New_York');
//session_start();
include('connection.php');
include('functions.php');

// SANITIE AND INITIALIZE VARIABLES FOR PERSON DB INSERT //

$ContactName	=	mysql_real_escape_string(trim($_POST['Name']));
$Address1		=	mysql_real_escape_string(trim($_POST['Address1']));
$Address2		=	mysql_real_escape_string(trim($_POST['Address2']));
$ContactPhone	=	strtolower(mysql_real_escape_string(trim($_POST['Phone'])));
$ContactPhone	=	preg_replace("/[^0-9,.]/", "", $ContactPhone);
$ContactEmail	=	strtolower(mysql_real_escape_string(trim($_POST['Email'])));

	
// EXECUTE QUERY //

$AddContactQuery = "UPDATE Person SET ContactName='$ContactName', ContactPhone='$ContactPhone', ContactEmail='$ContactEmail' WHERE ID='$UserID'";
$AddContactResult = mysql_query($AddContactQuery);

$AddAddressQuery = "UPDATE Person WHERE SET (ContactName, Address1, Email, Phone) VALUES ('$FirstName', '$LastName', '$Email', '$Phone')";
$AddAddressResult = mysql_query($AddAddressQuery);

if (!$CreateUserResult) {
	print "User creation failed. DB Error: " . mysql_error();
} else {
	
	// INITIALIZE VARIABLES FOR LOG_ACTIVITY DB INSERT //

	$UserID			=	mysql_insert_id();
	$IP				=	get_ip();
	$Description	= 	"New user. Name: " . $FirstName . " " . $LastName . ". Email: " . $Email;
	$DateTime		=	date('Y-m-d H:i:s');
	
	$LogJoinQuery	= "INSERT INTO LogActivity (UserID, IP, Description, DateAndTime) VALUES ('$UserID','$IP','$Description','$DateTime')";
	$LogJoinResult	= mysql_query($LogJoinQuery);
	
	//print "LogQuery: " . $LogJoinQuery . "<br />";
	
	if (!$LogJoinResult) {
		print "LogActivity Error. DB Error: " . mysql_error();
	}

	header("location: contactcard.php");
}
}

?>