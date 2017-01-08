<?php require_once('includes/header.php'); ?>


		<div class="container">
			<div id="page-wrapper" style="margin:50px 0px 0px 0px;">
				<div class="row">	
					<div class="col-lg-12">
						<h1 class="page-header">Events</h1>
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
											<div class="col-lg-4">
												<img class="img" src="images/birthday-party.jpg" alt="Generic placeholder image" style="width: 300px; height: 160px;">
												<h2>Birthday Party</h2>
												<p><a class="btn btn-default" role="button" href="reservation.php">Reserve</a></p>
											</div><!-- /.col-lg-4 -->
										</div><!-- /.row -->
									</div>
								</div>
							</div>

							
							<div role="tabpanel" class="tab-pane" id="searchProd">
								<h2>Event Details</h2>
								<div class="row">
									<!-- Tab panel -->
									<div class="col-lg-12">

										<!-- Details Modal -->
										<div class="modal fade" id="dm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">CMSC 127 S-1L Sem Ender Performers</h4>
													</div>
													<div class="modal-body">
														<table class="table table-hover">
															<thead>
																<tr>
																	<th>No.</th>
																	<th>Performer</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td>Avril Lavigne</td>
																</tr>
																<tr>
																	<td>2</td>
																	<td>Jason Mraz</td>
																</tr>
																<tr>
																	<td>3</td>
																	<td>All Time Low</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
										
										
										<!-- Details Modal -->
										<div class="panel-body col-lg-12">
											<div class="table-responsive col-lg-12">
												<table class="table table-striped table-bordered table-hover" id="dataTables-example">
													<thead>
														<tr>
															<th>ID</th>
															<th>Name</th>
															<th>Venue</th>
															<th>Type</th>
															<th>Description</th>
															<th>Event Date</th>
															<th>Start Time</th>
															<th>End Time</th>
															<th>Price</th>
															<th>Performers</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>CMSC 127 S-1L Sem Ender</td>
															<td>Outing</td>
															<td>A fun class celebration for passing CMSC 127 S-1L</td>
															<td>December 6, 2014</td>
															<td>9:00 AM</td>
															<td>4:00 PM</td>
															<td> </td>
															<td>Php15000.00</td>
															<td>
																<button type="button" class="btn btn-xs btn-info" data-toggle="modal" data-target="#dm1">View List</button>
															</td>
														</tr>
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
                </div>
				<hr>

		<?php require_once('includes/footer.php'); ?>
