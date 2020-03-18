@extends('backLayouts.adminlayout')
 
    @section('title')
        New Manager | Admin Dashboard
    @endsection
    @section('content')
		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">Services</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">New Manager</li>
					</ol>
				</div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

				<div class="row ">
					<div class="col-lg-12">
						<div class="panel panel-primary">
							<div class=" ">
								<ul class="nav nav-pills">
									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.managers.index')}}">All Lists</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-primary" href="{{route('admin.managers.create')}}">ADD Manager</a>
									</li>
								</ul>
		 					</div>
						</div>

						<div class="card">
							<div class="card-header">
								Add New Manager
							</div>
							<div class="card-body">
								<div class="container">
									<div class="p-5 border">
										<h4 class="mb-4 font-weight-bold">Personal Information</h4>
										 <form method="post" action="{{url('/')}}/admin/managers/store">
                                                {{csrf_field()}}
                                                @include('flash')
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="name">Manager Name</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="name" class="form-control" id="name"  placeholder="Enter Name">

														<input type="hidden" name="role_id" value="4">
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="gender">Gender</label>
													</div>
													<div class="col-md-9">
														<select class="form-control" name="gender">
															<option selected>Select Gender</option>
															<option value="male">Male</option>
															<option value="female">Female</option>
															<option value="others">Others</option>
														</select>
													</div>
												</div>
											</div>

										<!-- 	<div class="form-group">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Date Of Birth</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" placeholder="Enter DOB">
														<span class="form-control-feedback right" aria-hidden="true"></span>
													</div>
												</div>
											</div>
 -->

 	                                  <div class="form-group">
	 											<div class="row">
													<div class="col-md-3">
														<label class="form-label">Date Of Birth</label>
													</div>
													<div class="col-md-9">
														<input type="date" class="form-control" name="dob" id="dob">
														<span class="form-control-feedback right" aria-hidden="true"></span>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Profile Image</label>
													</div>
													<div class="col-md-9">
														<input type="file" class="form-control" name="profile_image">
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="name">Qualification</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="qualification" class="form-control" id="qualification"  placeholder="Enter Qualification">
													</div>
												</div>
											</div>

											<h4 class="mb-4 font-weight-bold">Official Information</h4>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Department</label>
													</div>
													<div class="col-md-9">
														<select class="form-control" name="department_name_user">
															<option selected>Select Department</option>
															<option value="account">Account</option>
															<option value="manager">Manager</option>
														</select>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Branch</label>
													</div>
													<div class="col-md-9">
														<select class="form-control select2" name="branch[]" multiple>
															<option>Choose</option>

																 @if(count($Branch) > 0)
                                                    @foreach($Branch as $Branchs)
																<option>{{$Branchs->name}}</option>
											      	@endforeach
                                                    @endif
														</select>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Id Proof</label>
													</div>
													<div class="col-md-9">
														<input type="file"class="form-control" name="id_proof">
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Working Days</label>
													</div>
													<div class="col-md-9">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="fa fa-calendar tx-16 lh-0 op-6"></i>
																</div>
															</div><input class="form-control fc-datepicker" name="working_days" placeholder="MM/DD/YYYY" type="text">
														</div>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Working Time-In</label>
													</div>
													<div class="col-md-9">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
																</div>
															</div><!-- input-group-prepend -->
															<input class="form-control"  name="working_time_in" placeholder="Set time" type="time">
														</div>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Working Time-Out</label>
													</div>
													<div class="col-md-9">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
																</div>
															</div><!-- input-group-prepend -->
															<input class="form-control"  name="working_time_out" placeholder="Set time" type="time">
														</div>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Account Number</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="account_number" class="form-control" data-inputmask="'mask' : '9999-9999-9999-9999'" placeholder="Enter Account Number">
														<span class=" form-control-feedback right" aria-hidden="true"></span>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="name">IFSC Code</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="ifsc_code" class="form-control" id="ifsc_code"  placeholder="Enter IFSC Code">
													</div>
												</div>
											</div>

											<h4 class="mb-4 font-weight-bold">Contact Information</h4>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Email Address</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="email" class="form-control"  placeholder="info@Claylist.in">
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Phone Number</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="phone_number" class="form-control" data-inputmask="'mask' : '(999) 999-9999'" placeholder="Enter Phone Number">
														<span class=" form-control-feedback right" aria-hidden="true"></span>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Address</label>
													</div>
													<div class="col-md-9">
														<textarea class="form-control" name="address" rows="4" placeholder="Address.."></textarea>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Password</label>
													</div>
													<div class="col-md-9">
														<input  type="password" class="form-control" name="password" id="inputEmail5" placeholder="Enter Password">
													</div>
												</div>
											</div>

											<div class="row mt-5">
												<div class="col-lg-4"></div>
												<div class="col-lg-4">
													<button type="submit" class="btn btn-primary waves-effect waves-light btn-block">Add Manager</button>
												</div>
												<div class="col-lg-4"></div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection
