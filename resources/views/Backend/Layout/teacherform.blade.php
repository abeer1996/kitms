@extends('Backend.master')
@section('main')

<main class="app-content">

<div class="row">
						<div class="col-sm-12">
						
							<div class="card">
								<div class="card-body">
									<form method="post" action="{{route('teacher.formsubmit')}}">
                                        @csrf
										<div class="row">
											<div class="col-12">
												<h2 class="form-title"><span>Teacher Registration Form</span></h2>
                                            </div>
                                            <div class="col-12">
												<h5 class="form-title"><span>Personal Information</span></h5>
                                            </div>
                                            
											<div class="col-12 col-sm-6">  
												<div class="form-group">
													<label>Teacher Id</label>
													<input type="string" name="teacher_id"class="form-control">
												</div>
                                            </div>
                                            <div class="col-12 col-sm-6">  
												<div class="form-group">
													<label>Teacher Name</label>
													<input type="text" name="teacher_name" class="form-control">
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
													<label>NID Number</label>
													<input type="string" name="nid" class="form-control">
												</div>
											</div>
                                            <div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Date of Joining</label>
													<div>
														<input type="date" name="doj" value="" class="form-control">
													</div>
												</div>
											</div>
                                            <div class="col-12 col-sm-6">  
												<div class="form-group">
													<label>Designation</label>
													<input type="text" name="designation" class="form-control">
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