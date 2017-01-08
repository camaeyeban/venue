<?php require_once('includes/header.php'); ?>


			


		<div class="container">
			<div id="page-wrapper" style="margin:50px 0px 0px 0px;">
				<div class="row">	
					<div class="col-lg-12">
						<h1 class="page-header">Registration Form</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
			<form class="form-horizontal" method = "post" action= "sign-up.php">
			
				<fieldset>
					<legend>Account Details</legend>
					<div class="form-group col-lg-12">
						<label for="inputUserID" class="col-lg-4 control-label" required>User ID</label>
						<div class="col-lg-8">
							<input type="text" name="id" class="form-control" id="inputUserID" placeholder="User ID">
						</div>
					</div>
					<div class="form-group col-lg-12">
						<label for="inputPassword1" class="col-lg-4 control-label" required>Password</label>
						<div class="col-lg-8">
							<input type="password" name="password" class="form-control" id="inputPassword1" placeholder="Password">
						</div>
					</div>
					<div class="form-group col-lg-12">
						<label for="inputPassword2" class="col-lg-4 control-label" required>Confirm Password</label>
						<div class="col-lg-8">
							<input type="password" name="password"  class="form-control" id="inputPassword2" placeholder="Password">
						</div>
					</div>
					<div class="form-group col-lg-12">
						<label for="inputUserGender" class="col-lg-4 control-label">User Type</label>
						<div class="col-lg-8 radio">
							<label>
								<input type="radio" name="inputUserType" id="inputUserType_1" value="client" required>Client
							</label>
							<label>
								<input type="radio" name="inputUserType" id="inputUserType_2" value="admin">Administrator
							</label>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<legend>Personal Information</legend>
					<div class="form-group col-lg-12">
						<label for="inputUserFName" class="col-lg-4 control-label">First Name</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="FName"  id="inputUserFName" placeholder="First Name" required>
						</div>
					</div>
					<div class="form-group col-lg-12">
						<label for="inputUserMName" class="col-lg-4 control-label">Middle Name</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="MName" id="MName" placeholder="Middle Name" required>
						</div>
					</div>
					<div class="form-group col-lg-12">
						<label for="inputUserLName" class="col-lg-4 control-label">Last Name</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="LName" id="inputUserLName" placeholder="Last Name" required>
						</div>
					</div>
					<div class="form-group col-lg-12">
						<label for="inputUsermail" class="col-lg-4 control-label">E-mail Address</label>
						<div class="col-lg-8">
							<input type="text"  name="email" class="form-control" id="inputUserEmail" placeholder="E-mail Address" required>
						</div>
					</div>
					<div class="form-group col-lg-12">
						<label for="inputUserContact" class="col-lg-4 control-label">Contact Number</label>
						<div class="col-lg-8">
							<input type="text" name="contact_number" id="contact_number" class="form-control" id="inputUserContact" pattern="[0][0-9]{10}" placeholder="Cellphone Number (09XXXXXXXXX)" required>
						</div>
					</div>
					<div class="form-group col-lg-12">
						<label for="inputUserAddress" class="col-lg-4 control-label">Address</label>
						<div class="col-lg-8">
							<textarea name="address" class="form-control" rows="3" id="inputUserAddress" required></textarea>
						</div>
					</div>
					<div class="form-group col-lg-12">
						<div class="col-lg-8 col-lg-offset-4">
						<div class="checkbox">
							<label>
							<input type="checkbox" required> I have agreed and understood the terms and conditions of this Venue Reservation System.
							</label>
						</div><br>
						<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</fieldset>
			</form>

	<?php require_once('includes/footer.php'); ?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$EMAIL_ADD = htmlspecialchars($_POST['email']); 
$CONTACT_NUMBER = htmlspecialchars($_POST['contact_number']);
$ADDRESS = htmlspecialchars($_POST['address']);
$Password = htmlspecialchars($_POST['password']);
$FNAME = htmlspecialchars($_POST['FName']);
$LNAME = htmlspecialchars($_POST['LName']);
$MNAME = htmlspecialchars($_POST['MName']);

$conn = oci_connect('cmsc127proj', 'cmsc127', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
$bool = true;

if($_POST['inputUserType'] == 'client'){
	$CLIENT_ID = htmlspecialchars($_POST['id']); 
	$stid = oci_parse($conn, 'SELECT * FROM client');

	if(oci_execute($stid)){
	while($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) //display all rows from query
  	{
    	$table_users = oci_result($stid, 'EMAIL_ADD');
		$table_users2 = oci_result($stid, 'CLIENT_ID');

    	if($EMAIL_ADD == $table_users || $CLIENT_ID == $table_users2) // checks if there are any matching fields
    	{
      	$bool = false; // sets bool to false
      	Print '<script>alert("taken!");</script>'; //Prompts the user
      	Print '<script>window.location.assign("sign-up.php");</script>'; // redirects to register.php
    	}
  }
  if($bool) {
  	$query = oci_parse($conn, "INSERT into client VALUES($CLIENT_ID,'EMAIL_ADD', '$CONTACT_NUMBER','$ADDRESS','$Password','$FNAME','$LNAME','$MNAME')");
  	if(oci_execute($query)){
  		Print '<script>alert("USER ADDED SUCCESFUL!");</script>'; //Prompts the user
      	Print '<script>window.location.assign("index.php");</script>';
  	}
  }
}

}else{
	$ADMIN_ID = htmlspecialchars($_POST['id']);
	$stid = oci_parse($conn, 'SELECT * FROM admin');
	if(oci_execute($stid)){
	while($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) //display all rows from query
  	{
    	$table_users = oci_result($stid, 'EMAIL_ADD');
		$table_users2 = oci_result($stid, 'ADMIN_ID');

    	if($EMAIL_ADD == $table_users || $ADMIN_ID == $table_users2) // checks if there are any matching fields
    	{
      	$bool = false; // sets bool to false
      	Print '<script>alert("taken!");</script>'; //Prompts the user
      	Print '<script>window.location.assign("sign-up.php");</script>'; // redirects to register.php
    	}
  }
  if($bool) {
  	$query = oci_parse($conn, "INSERT into admin VALUES($ADMIN_ID,'EMAIL_ADD', '$CONTACT_NUMBER','$ADDRESS','$Password','$FNAME','$LNAME','$MNAME')");
  	if(oci_execute($query)){
  		Print '<script>alert("USER ADDED SUCCESFUL!");</script>'; //Prompts the user
    	Print '<script>window.location.assign("index.php");</script>';
  	}
  }
}
}

}
?>