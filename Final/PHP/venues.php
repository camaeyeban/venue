<?php require_once('includes/header.php'); ?>

		

		<div class="container">
			<div id="page-wrapper" style="margin:50px 0px 0px 0px;">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Venues</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#viewProd" aria-controls="viewProd" role="tab" data-toggle="tab">VIEW</a></li>
							<li role="presentation"><a href="#searchProd" aria-controls="searchProd" role="tab" data-toggle="tab">SEARCH</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							
							
							<div role="tabpanel" class="tab-pane active" id="viewProd">
								<div class="row">
									<div class="container marketing venue-list col-lg-12">
										<!-- Three columns of text below the carousel -->
										<div class="row">

     

									<?php 
    									$stid = oci_parse($conn, 'SELECT * FROM venue');
										oci_execute($stid);
    					
    
      	while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
      			
										echo'	<div class="modal fade" id="detailsModal'.oci_result($stid, 'VENUEID').'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
															<span class="modal-title" id="myModalLabel">'.oci_result($stid, 'NAME').'</span>
														</div>
														<div class="modal-body">
															<table>
																<tr>
																	<img src="'.oci_result($stid, 'PIC').'" class="pop-up-venue-image" alt="Generic placeholder thumbnail"><br>
																</tr><br>
																<tr><td><span class="bold-title">Venue ID: </span></td><td> '.oci_result($stid, 'VENUEID').' </td></tr>
																<tr><td><span class="bold-title">Location: </span></td>'.oci_result($stid, 'LOCATION').'
																<tr><td><span class="bold-title">Type: </span></td><td> '.oci_result($stid, 'TYPE').'</td></tr>
																<tr><td><span class="bold-title">Maximum Capacity: </span> </td><td> '.oci_result($stid, 'MAX_CAPACITY').'</td></tr>
																<tr><td><span class="bold-title">Rate: </span></td><td> '.oci_result($stid, 'VENUEID').' EACH PERSON MINIMUM </td></tr>
															</table>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															<a href="reservation.php"><button type="submit" class="btn btn-primary">Reserve</button></a>
														</div>
													</div>
												</div>
											</div>';
										}
								?>
						

										<?php		
										$stid = oci_parse($conn, 'SELECT * FROM venue');
										oci_execute($stid);
    					
      									while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
											echo '<div class="col-lg-4">

												<img class="img" src="'.oci_result($stid, 'PIC').'" alt="Generic placeholder image" style="width: 300px; height: 160px;">
												<h2>'.oci_result($stid, 'NAME').'</h2>
												<p>'.oci_result($stid, 'DETAILS').'</p>
												<p><a class="btn btn-default" role="button" data-toggle="modal" data-target="#detailsModal'.oci_result($stid, 'VENUEID').'">View Details</a></p>
											</div><!-- /.col-lg-4 --> ';
										}
										?>
										
										</div><!-- /.row -->
									</div>
								</div>
							</div>


							
							<div role="tabpanel" class="tab-pane" id="searchProd">
								<h2>Venue Details</h2>
								<div class="row">
									<!-- Tab panel -->
									<div class="col-lg-12">

										<!-- Details Modal -->
										<?php		
										$stid = oci_parse($conn, 'SELECT * FROM venue');
										oci_execute($stid);
    									
      									while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
      									$venue = oci_result($stid, 'VENUEID');
											echo '<div class="modal fade" id="dm'.oci_result($stid, 'VENUEID').'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">'.oci_result($stid, 'NAME').'</h4>
													</div>
													<div class="modal-body">
														<table class="table table-hover">
															<thead>
																<tr>
																	<th>No.</th>
																	<th>Reservation ID</th>
																	<th>Reservation Name</th>
																	<th>Reservation Date</th>
																</tr>
															</thead>';
															$reserv = oci_parse($conn, "SELECT * from venue v, event e, event_details de,  client_reservation cr where cr.approval= 'Y' AND v.venueid = cr.venueid AND e.eventid = cr.eventid AND e.eventid = de.eventid  AND '$venue' = v.venueid");
															if(oci_execute($reserv)){
															$counter = 0;
															while ($row = oci_fetch_array($reserv, OCI_ASSOC+OCI_RETURN_NULLS)) {
      													
															echo '<tbody>
																<tr>
																	<td>'.++$counter.'</td>
																	<td>'.$row['RESERVATIONID'].'</td>
																	<td>'.$row['NAME'].'</td>
																	<td>'.$row['EVENTDATE'].'</td>
																</tr>
															</tbody>
														';
														}
													}
														
														echo '	</table>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>';
										}
										?>
									
										
										
										<!-- Details Modal -->
										<div class="panel-body col-lg-12">
											<div class="table-responsive col-lg-12">
												<table class="table table-striped table-bordered table-hover" id="dataTables-example">
													<thead>
														<tr>
															<th>ID</th>
															<th>Name</th>
															<th>Type</th>
															<th>Location</th>
															<th>Maximum Capacity</th>
															<th>Rate</th>
															
															<th>Availability</th>
														</tr>
													</thead>

													<tbody>
														<?php		
	$stid = oci_parse($conn, 'SELECT * FROM venue');
										oci_execute($stid);
    					
      	while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
														echo '<tr>
															<td>'.oci_result($stid, 'VENUEID').'</td>
															<td>'.oci_result($stid, 'NAME').'</td>
															<td>'.oci_result($stid, 'TYPE').'</td>
															<td>'.oci_result($stid, 'LOCATION').'</td>
															<td>'.oci_result($stid, 'MAX_CAPACITY').'</td>
															<td>'.oci_result($stid, 'RATE').'</td>
															<td>
																<button type="button" class="btn btn-xs btn-info" data-toggle="modal" data-target="#dm'.oci_result($stid, 'VENUEID').'">View Reservations</button>
															</td>
														</tr> ';
													}
													?>
														
													</tbody>
												</table>
											</div>
										</div>
									</div> 
									<!-- Row -->      
								</div> 
							</div>
						
						
					
					
						</div>
					</div>
                </div>
				<hr>
<?php require_once('includes/footer.php'); ?>
