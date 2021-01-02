@extends('Backend.master')
@section('main')

<main class="app-content">

<div class="row">
						<div class="col-sm-12">
						
							<div class="card">
								<div class="card-body">
									<form method="post" action="{{route('student.formsubmit')}}">
                                        @csrf
										<div class="row">
											<div class="col-12">
												<h2 class="form-title"><span>Registration Form</span></h2>
                                            </div>
                                            <div class="col-12">
												<h5 class="form-title"><span>Student Information</span></h5>
                                            </div>
                                            
											<div class="col-12 col-sm-6">  
												<div class="form-group">
													<label>Student Id</label>
													<input type="string" name="student_id"class="form-control">
												</div>
                                            </div>
                                            <div class="col-12 col-sm-6">  
												<div class="form-group">
													<label>Student Name</label>
													<input type="text" name="student_name" class="form-control">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Phone Number</label>
													<input type="string" name="contact" class="form-control">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Gender</label>
													<select name="gender" class="form-control">
														<option>Select Gender</option>
														<option value="female">Female</option>
														<option value="male">Male</option>
														<option value="others">Others</option>
													  </select>
												</div>
                                            </div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Email Address</label>
													<input type="string" name="email" class="form-control">
												</div>
                                            </div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Date of Birth</label>
													<div>
														<input type="date" name="dob" value="" class="form-control">
													</div>
												</div>
											</div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Present Address</label>
													<textarea name="present_address" class="form-control"></textarea>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Permanent Address</label>
													<textarea name="permanent_address" class="form-control"></textarea>
												</div>
											</div>
                                            
                                            <div class="col-12">
												<h5 class="form-title"><span>Course Information</span></h5>
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
														<option value="none">None</option>
														<option value="Level 1">Level 1</option>
														<option value="Level 2">Level 2</option>
													  </select>
												</div>
                                            </div>

											
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Date of Admission</label>
													<div>
														<input type="date" name="doa" value="" class="form-control">
													</div>
												</div>
                                            </div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Course Type</label>
													<select name="ctype" class="form-control">
														<option>Select Type</option>
														<option value="Online">Online</option>
														<option value="Offline">Offline</option>
													  </select>
												</div>
                                            </div>
											<div class="col-12">
												<h5 class="form-title"><span>Payment Information</span></h5>
											</div>
                                            
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Course Fee</label>
													<input type="string" name="course_fee" class="form-control">
												</div>
                                            </div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Payment Type</label>
													<select name="ptype" class="form-control">
														<option>Select Type</option>
														<option value="mobile_banking">Mobile Banking</option>
														<option value="cash_payment">Cash Payment</option>
													  </select>
												</div>
                                            </div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Receive Payment</label>
													<input type="string" name="receive_payment" class="form-control">
												</div>
                                            </div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Due Payment</label>
													<input type="string" name="due_payment" class="form-control">
												</div>
                                            </div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Transaction Id</label>
													<input type="string" name="trx_id" class="form-control">
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