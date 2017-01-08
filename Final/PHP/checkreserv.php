

<?php 
require_once('includes/connection.php'); 
session_start();
 if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: login.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user'];
  
if($_SERVER["REQUEST_METHOD"] == "POST"){
print_r($_POST);
	$event_name = htmlspecialchars($_POST['name']);
	$description = htmlspecialchars($_POST['description']);
	$VENUE_NAME = htmlspecialchars($_POST['venue']);
	$date = htmlspecialchars($_POST['date']);
	$type = htmlspecialchars($_POST['type']);
	$startdate = htmlspecialchars($_POST['startdate']);
	$enddate = htmlspecialchars($_POST['enddate']);
	
	$bool = true;

	$startdate =  $date.' '.$startdate;
	$enddate =  $date.' '.$enddate;
	echo $user;
	echo $startdate;
	$stid = oci_parse($conn, 'SELECT * FROM event_details');
	if(oci_execute($stid)){
	while($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) //display all rows from query
  	{
  		$table_users = oci_result($stid, 'EVENTDATE');
    	$table_users2 = oci_result($stid, 'TIME_STARTED');
    	$table_users3 = oci_result($stid, 'TIME_ENDED');
    	if($date == $table_users || $startdate == $table_users2 || $enddate == $table_users3 || ($startdate > $table_users2 && $startdate < $table_users3) ||  ($enddate > $table_users2 && $enddate < $table_users3)) // checks if there are any matching fields
    	{
      	$bool = false; // sets bool to false
      	Print '<script>alert("taken!");</script>'; //Prompts the user
      	Print '<script>window.location.assign("sign-up.php");</script>'; // redirects to register.php
    	}

  }
}
	$CLIENT=  oci_parse($conn,"SELECT CLIENT_ID FROM CLIENT WHERE '$user' = email_add");
	oci_execute($CLIENT);
	$row = oci_fetch_array($CLIENT, OCI_ASSOC+OCI_RETURN_NULLS);
	$CLIENT_ID = $row['CLIENT_ID'];

	$VENUE=  oci_parse($conn,"SELECT VENUEID FROM VENUE WHERE '$VENUE_NAME' = NAME");
	oci_execute($VENUE);
	$row = oci_fetch_array($VENUE, OCI_ASSOC+OCI_RETURN_NULLS);
	$VENUEID = $row['VENUEID'];


	$countR = oci_parse($conn, "SELECT COUNT(*)AS COUNTERR from client_reservation");
	oci_execute($countR);
	$row = oci_fetch_array($countR, OCI_ASSOC+OCI_RETURN_NULLS);
	$counterR = $row['COUNTERR'];

	$countE = oci_parse($conn, "SELECT COUNT(*)AS COUNTERE from EVENT");
	oci_execute($countE);
	$row = oci_fetch_array($countE, OCI_ASSOC+OCI_RETURN_NULLS);
	$counterE = $row['COUNTERE'];

	$countP = oci_parse($conn, "SELECT COUNT(*)AS COUNTERP from EVENT_PERFORMER");
	oci_execute($countP);
	$row = oci_fetch_array($countP, OCI_ASSOC+OCI_RETURN_NULLS);
	$counterP = $row['COUNTERP'];

	$counterR++;
	$counterE++;
	$counterP++;
	$CLIENT_ID++;
    $VENUEID++;


    if($bool){
	$query = oci_parse($conn, "INSERT into EVENT VALUES($counterE,'event_name', '$type','$description','images/banner.jpg')");
  	oci_execute($query);
  	echo '$query = oci_parse($conn, "INSERT into event_details VALUES($counterE,'.$date.','.$startdate.','.$enddate.')");';
  	oci_execute($query);
  }
}
	?>