<div role="tabpanel" class="tab-pane" id="addProd">
								<h2>Venue Reservation</h2>
								<div class="row"><br>   
									<form class="form-horizontal">
										<fieldset>
											<div class="form-group col-lg-12">
												<label for="inputVenue" class="col-lg-3 control-label">Venue</label>
												<div class="col-lg-8 radio">
													<label>
														<input type="radio" name="inputVenue" id="inputVenue_1" value="option1" required>The Pergola
													</label>
													<label>
														<input type="radio" name="inputVenue" id="inputVenue_2" value="option2">Grandview
													</label>
													<label>
														<input type="radio" name="inputVenue" id="inputVenue_3" value="option3">Jardin de Miramar
													</label>
												</div>
											</div>
											<div class="form-group col-lg-12">
												<label for="inputEventName" class="col-lg-3 control-label">Name</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="inputEventName" placeholder="Name of Event" required>
												</div>
											</div>
											<div class="form-group col-lg-12">
												<label for="inputEventType" class="col-lg-3 control-label">Type of Event</label>
												<div class="col-lg-8 radio">
													<label>
														<input type="radio" name="inputEventType" id="inputEventType_1" value="option1" required>Wedding
													</label>
													<label>
														<input type="radio" name="inputEventType" id="inputEventType_2" value="option2">Birthday Party
													</label>
													<label>
														<input type="radio" name="inputEventType" id="inputEventType_3" value="option3">Kid's Party
													</label>
													<label>
														<input type="radio" name="inputEventType" id="inputEventType_4" value="option4">Seminar
													</label>
													<label>
														<input type="radio" name="inputEventType" id="inputEventType_5" value="option5">Meeting
													</label>
													<label>
														<input type="radio" name="inputEventType" id="inputEventType_6" value="option6">Concert
													</label>
													<label>
														<input type="radio" name="inputEventType" id="inputEventType_6" value="option6">Outing
													</label>
													<label>
														<input type="radio" name="inputEventType" id="inputEventType_6" value="option6">Anniversary
													</label>
												</div>
											</div>
											<div class="form-group col-lg-12">
												<label for="dtp_input1" class="col-lg-3 control-label">Date of Event</label>
												<div class="col-lg-8">
													<div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input1" data-link-format="yyyy-mm-dd">
														<input class="form-control" size="16" id="inputDateOfEvent" type="text" value="" readonly required>
														<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
														<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
													</div>
												</div>
												<input type="hidden" id="dtp_input2" value="" /><br/>
											</div>
											<div class="form-group col-lg-12">
												<label for="dtp_input2" class="col-lg-3 control-label">Start Time of Event</label>
												<div class="col-lg-8">
													<div class="input-group date form_time" data-date="" data-date-format="hh:ii" data-link-field="dtp_input2" data-link-format="hh:ii">
														<input class="form-control" size="16" id="inputStartTimeOfEvent" type="text" value="" readonly required>
														<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
														<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
													</div>
												</div>
												<input type="hidden" id="dtp_input3" value="" /><br/>
											</div>
											<div class="form-group col-lg-12">
												<label for="dtp_input3" class="col-lg-3 control-label">End Time of Event</label>
												<div class="col-lg-8">
													<div class="input-group date form_time" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
														<input class="form-control" size="16" id="inputEndTimeOfEvent" type="text" value="" readonly required>
														<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
														<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
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
								</div>
							</div>