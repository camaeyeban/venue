<?php require_once('includes/header.php'); ?>
<?php//starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: login.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user'];
   ?>

	<div class="container">
			<div id="page-wrapper" style="margin:50px 0px 0px 0px;">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Reserve Venue</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
			<div class="container">
				<form class="form-horizontal" action = "checkreserv.php" method = "post">
					<fieldset>
						<div class="form-group col-lg-12">
							<label for="inputEventName" class="col-lg-3 control-label">Name</label>
							<div class="col-lg-8">
								<input name = "name" type="text" class="form-control" id="inputEventName" placeholder="Name of Event" required>
							</div>
						</div>
						<div class="form-group col-lg-12">
							<label class="control-label col-lg-3" for="inputVenue">Venue</label>
							<div class="col-lg-8">
								<select name = "venue" id="inputVenue" class="form-control">
									<?php 
    									$stid = oci_parse($conn, 'SELECT * FROM venue');
										oci_execute($stid);
      								while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
									echo '<option>'.$row['NAME'].'</option>';								};
									?>
								</select> 
							</div>
						</div>
						<div class="form-group col-lg-12">
							<label for="inputEventType" class="col-lg-3 control-label">Type of Event</label>
							<div class="col-lg-8">
								<select name = "type" id="inputEventTypt" class="form-control">
									<option value= "Anniversary">Anniversary</option>
									<option value= "Birthday Party">Birthday Party</option>
									<option value = "Concert">Concert</option>
									<option value = "Kids Party">Kids Party</option>
									<option value = "Meeting">Meeting</option>
									<option value = "Outing">Outing</option>
									<option value = "Seminar">Seminar</option>
									<option value = "Wedding">Wedding</option>
								</select> 
							</div>
						</div>
						<div class="form-group col-lg-12">
							<label for="dtp_input2" class="col-lg-3 control-label">Date of Event</label>
							<div class="col-lg-8">
								<div name = "eventdate" class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
									<input class="form-control" name = "date" size="16" id="inputDateOfEvent" type="date" value="" required>
									
								</div>
							</div>
							<input type="hidden" id="dtp_input2" value="" /><br/>
						</div>
						<div class="form-group col-lg-12">
							<label for="dtp_input3" class="col-lg-3 control-label">Start Time of Event</label>
							<div class="col-lg-8">
								<div class="input-group date form_time" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
									<input name = "startdate" class="form-control" size="16" id="inputStartTimeOfEvent" type="time" required>
								</div>
							</div>
							<input type="hidden" id="dtp_input3" value="" /><br/>
						</div>
						<div class="form-group col-lg-12">
							<label for="dtp_input3" class="col-lg-3 control-label">End Time of Event</label>
							<div class="col-lg-8">
								<div class="input-group date form_time" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
									<input name = "enddate" class="form-control" size="16" id="inputEndTimeOfEvent" type="time" value="" required>
									
								</div>
							</div>
							<input type="hidden" id="dtp_input3" value="" /><br/>
						</div>
						<div class="form-group col-lg-12">
							<label for="inputEventDescription" class="col-lg-3 control-label">Description</label>
							<div class="col-lg-8">
								<textarea name="description" class="form-control" rows="3" id="inputEventDescription" placeholder="What and/or how you want the event to be..." required></textarea>
							</div>
						</div>
						<div class="form-group col-lg-12">
							<label for="inputPerformerName" class="col-lg-3 control-label">Name</label>
							<div class="col-lg-8">
								<div class="content" id="wrapper">
									<span><input type="text" class="form-control" name = "performer[]" id="inputPerformerName" placeholder="Name of Performer"></span>
								</div>
								<br>
								<input type="button" class="btn btn btn-primary" id="more_fields" onclick="add_fields();" value="Add Performer" />
							</div>
						</div>
						<div class="form-group col-lg-12">
							<div class="col-lg-8 col-lg-offset-3">
							<div class="checkbox">
								<label>
									<input type="checkbox"> I have agreed and understood the terms and conditions of this Venue Reservation System.
								</label>
							</div><br>
							<button type="submit" class="btn btn-primary">Submit</button>
							<button class="btn btn-default">Cancel</button>
							</div>
						</div>
					</fieldset>
				</form>
		
		
		
				<hr>

				<footer>
					<p class="pull-right"><a href="#">Back to top</a></p>
					<p>&copy; 2014 Site maintained by UPLB's CMSC 127 Group A members.  <b>&middot;</b> <a href="terms-and-conditions.pdf">Terms and Conditions</a></p>
				</footer>
            </div>
            
        </div>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		
		<script src="js/jquery.js"></script>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/docs.min.js"></script>
		
		<!-- Metis Menu Plugin JavaScript -->
		<script src="js/plugins/metisMenu/metisMenu.min.js"></script>

		<!-- DataTables JavaScript -->
		<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
		<script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="js/sb-admin-2.js"></script>

		<script src="js/ie10-viewport-bug-workaround.js"></script>
		<script>
		$(document).ready(function() {
			$('#dataTables-example').dataTable();
		});
		</script>
		<script>
			function add_fields() {
				var newspan = document.createElement('span');
				newspan.innerHTML = "<br><input type='text' class='form-control' id='inputPerformerName' name = 'performer[]' placeholder='Name of Performer' />";
				document.getElementById('wrapper').appendChild(newspan);
			}
		</script>
		<script type="text/javascript" src="js/jquery-1.8.3.min.js" charset="UTF-8"></script>
		<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
		<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
		<script type="text/javascript">
		
	</body>
</html>
