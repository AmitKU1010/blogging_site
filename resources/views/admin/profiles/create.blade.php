@extends('backLayouts.adminlayout')

    @section('title')
        New User | Admin Dashboard
    @endsection

    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">Users</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">New User</li>
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
										<a class="nav-link btn btn-light" href="{{route('admin.profiles.index')}}">All Lists</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-primary" href="{{route('admin.profiles.create')}}">ADD User</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								Add New User
							</div>
							<div class="card-body">
								<div class="container">
									<div class="p-5 border">
										<form class="form-horizontal">
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="name">User Name</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="name" class="form-control" id="managerNmae"  placeholder="Enter Name">
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="gender">Gender</label>
													</div>
													<div class="col-md-9">
														<select class="form-control">
															<option selected>Select Gender</option>
															<option value="male">Male</option>
															<option value="female">Female</option>
															<option value="others">Others</option>
														</select>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Address</label>
													</div>
													<div class="col-md-9">
														<textarea class="form-control" name="example-textarea-input" rows="4" placeholder="Address.."></textarea>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="name">Pin Code</label>
													</div>
													<div class="col-md-9">
														<input type="number" name="name" class="form-control" id="managerNmae"  placeholder="Enter Pin">
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Phone Number</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'" placeholder="Enter Phone Number">
														<span class=" form-control-feedback right" aria-hidden="true"></span>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Email Address</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control"  placeholder="info@Claylist.in">
													</div>
												</div>
											</div>

											<div class="row mt-5">
												<div class="col-lg-4"></div>
												<div class="col-lg-4">
													<button type="submit" class="btn btn-primary waves-effect waves-light btn-block">Add User</button>
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
