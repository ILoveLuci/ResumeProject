<?php
date_default_timezone_set('America/New_York');
//session_start();
include('connection.php');
include('functions.php');

// SANITIE AND INITIALIZE VARIABLES FOR PERSON DB INSERT //

$FirstName	=	mysql_real_escape_string(trim($_POST['FirstName']));
$LastName	=	mysql_real_escape_string(trim($_POST['LastName']));
$Email		=	strtolower(mysql_real_escape_string(trim($_POST['Email'])));
$Phone		=	strtolower(mysql_real_escape_string(trim($_POST['Phone'])));
$Phone		=	preg_replace("/[^0-9,.]/", "", $Phone);

// CHECK TO SEE IF USER EXISTS //

$CheckUserQuery	= mysql_query("SELECT * FROM Person WHERE Email='$Email'");
$Rows = mysql_num_rows($CheckUserQuery);
if ($Rows>0) {
	print "DB Error: User already exists";
} else {
	
	// EXECUTE QUERY //

	$CreateUserQuery = "INSERT INTO Person (FirstName, LastName, Email, Phone) VALUES ('$FirstName', '$LastName', '$Email', '$Phone')";
	$CreateUserResult = mysql_query($CreateUserQuery);
	
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

		// LOGIN
		
		// GET USER ID
		$CheckUserResult = mysql_fetch_array($CheckUserQuery);
		$ID = $CheckUserResult['ID'];
		print "USER ID IS " . $ID . "<br>";
		
		$UserData = mysql_fetch_array($result, MYSQL_ASSOC);
		//$hash = hash('sha256', $UserData['salt'] . hash('sha256', $password) );
		$hash = substr(hash('sha256', $UserData['salt'] . hash('sha256', $password)), 0, 30); 
		 
		if($hash != $UserData['password']) // Incorrect password. So, redirect to login_form again.
		{
		    header('Location: login.php?error=905');
		} else { // Redirect to home page after successful login.
			session_regenerate_id();
			//$member = mysql_fetch_array($result);
			$USER_IP = $_SERVER['REMOTE_ADDR'];
			$USER_ID = $UserData['ID'];
			mysql_query("INSERT INTO LogActivity (mem_id,ip_addr,login_date_time) VALUES ('$user_id','$last_ip',NOW()) ");
			$_SESSION['SESS_MEMBER_ID'] = $UserData['mem_id'];
			$_SESSION['SESS_EMAIL'] = $UserData['emailaddress'];
			$_SESSION['SESS_PASS'] = $UserData['password'];
			session_write_close();
		}
		
		header("location: contactcard.php");
	}
}

?>