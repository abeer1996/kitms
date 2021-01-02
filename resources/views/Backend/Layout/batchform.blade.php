@extends('Backend.master')
@section('main')

<main class="app-content">


<div class="row">
						<div class="col-sm-12">
						
							<div class="card">
								<div class="card-body">
									<form method="post" action="{{route('batch.formsubmit')}}">
                                        @csrf
										<div class="row">
											<div class="col-12">
												<h2 class="form-title"><span>Add New Batch</span></h2>
                                            </div>
                                            <div class="col-12">
												<h5 class="form-title"><span>Batch Information</span></h5>
                                            </div>
                                            
											<div class="col-12 col-sm-6">  
												<div class="form-group">
													<label>Batch Id</label>
													<input type="string" name="batch_id"class="form-control">
												</div>
                                            </div>
                                            <div class="col-12 col-sm-6">  
												<div class="form-group">
													<label>Batch Name</label>
													<input type="string" name="batch_name" class="form-control">
												</div>
											</div>
                                            <div class="col-12 col-sm-6">  
												<div class="form-group">
													<label>Course Name</label>
													<input type="string" name="course_name" class="form-control">
												</div>
											</div>

                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Course Level</label>
													<select name="level" class="form-control">
														<option>Select Level</option>
														<option value="None">None</option>
														<option value="Level 1">Level 1</option>
														<option value="Level 2">Level 2</option>
													  </select>
												</div>
                                            </div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Batch Start</label>
													<div>
														<input type="date" name="batch_start" value="" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Batch Day 1</label>
													<select name="day1" class="form-control">
														<option>Select Batch Day 1</option>
														<option value="Saturday">Saturday</option>
														<option value="Sunday">Sunday</option>
														<option value="Monday">Monday</option>
                                                        <option value="Tuesday">Tuesday</option>
														<option value="Wednesday">Wednesday</option>
                                                        <option value="Thursday">Thursday</option>
														<option value="Friday">Friday</option>
													  </select>
												</div>
                                            </div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Batch Day 2</label>
													<select name="day2" class="form-control">
														<option>Select Batch Day 2</option>
														<option value="Saturday">Saturday</option>
														<option value="Sunday">Sunday</option>
														<option value="Monday">Monday</option>
                                                        <option value="Tuesday">Tuesday</option>
														<option value="Wednesday">Wednesday</option>
                                                        <option value="Thursday">Thursday</option>
														<option value="Friday">Friday</option>
													  </select>
												</div>
                                            </div>

                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label for="appt">Start Time</label>
                                                    <input type="time" id="appt" name="appt1" class="form-control">
												</div>
                                            </div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label for="appt">End Time</label>
                                                    <input type="time" id="appt" name="appt2" class="form-control">
												</div>
                                            </div>
											<div class="col-12">
												<button type="submit" class="btn btn-primary">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>							
						</div>					
					</div>					
				</div>				
			</div>
        </div>

</main>

@stop