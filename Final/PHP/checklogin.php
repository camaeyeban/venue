<?php
require('includes/connection.php');

session_start();
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$user = htmlspecialchars($_POST['user']);
$table_users = "";
$table_password = "";
if($user == 'client'){
$stid = oci_parse($conn, "SELECT * FROM client where email_add = '$email'");
}
else if($user == 'admin'){
$stid = oci_parse($conn, "SELECT * FROM admin where email_add = '$email'");
}

if(oci_execute($stid)){
	while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
		$table_users = oci_result($stid, 'EMAIL_ADD');
		$table_password = oci_result($stid, 'PASSWORD');
	}
	if(($email == $table_users) && ($password == $table_password)) // checks if there are any matching fields
		{
				if($password == $table_password)
				{
					$_SESSION['user'] = $email; //set the username in a session. This serves as a global variable
					Print '<script>alert("Log-in Successful!");</script>';
					header("location: index.php"); // redirects the user to the authenticated home page
				}
				

		}
		else
		{
			Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("index.php");</script>'; // redirects to login.php
		}

	}
	else
	{
		Print '<script>alert("Incorrect Username!");</script>'; //Prompts the user
		Print '<script>window.location.assign("index.php");</script>'; // redirects to login.php
	}


?>