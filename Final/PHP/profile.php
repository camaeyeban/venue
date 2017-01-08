<?php require_once('includes/header.php'); ?>
<?php//starts the session
  session_start();
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: login.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user'];
   ?>
<div class="container">
			<div id="page-wrapper" style="margin:50px 0px 30px 0px;">
				<br><br><br>
				<div class="container">
					<div class="col-lg-12">
						<?php 
						$user = $_SESSION['user'];
    						$stid = oci_parse($conn, "SELECT * FROM client c, admin a where c.email_add = '$user' OR a.email_add = '$user'");
							oci_execute($stid);
    					if(oci_execute($stid)){
						while($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) //display all rows from query
  							{
    
      						
						echo '<div class="col-lg-8">
							<h2>'.$row['FNAME'].' '.$row['MNAME'].' '.$row['LNAME'].'</h2><br>
							<table>
							<tr>
								<td><label>First Name: </label></td>
								<td>'.$row['FNAME'].'</td>
							</tr>
							<tr>
								<td><label>Middle Name: </label></td>
								<td>'.$row['MNAME'].'</td>
							</tr>
							<tr>
								<td><label>Last Name: </label></td>
								<td>'.$row['LNAME'].'<td>
							</tr>
							<tr>
								<td><label>Email Address: </label></td>
								<td>'.$row['EMAIL_ADD'].'</td>
							</tr>
							<tr>
								<td><label>Contact Number: </label></td>
								<td>'.$row['CONTACT_NUMBER'].'</td>
							</tr>
							<tr>
								<td><label>Address: </label></td>
								<td>'.$row['ADDRESS'].'<td>
							</tr>
							</table>
						</div>';
					}
				}

						?>
						<div class="col-lg-4">
							<img src="images/profile-picture.png" class="col-lg-12" style="padding-right: 100px;">
						</div>
					</div>
				</div>
			
		</div>
			<?php require_once('includes/footer.php'); ?>