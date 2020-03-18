@extends('frontLayouts.themelayout')
 
    @section('title')
    User Dashboard | Moseva
    @endsection
    @section('content')
		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="{{ asset('assets/images/banners/banner2.jpg') }}">
				<div class="header-text mb-0">
					<div class="container">
		 				<div class="text-center text-white">
							<h1 class="">My Dashboard</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="/">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">My Dashboard</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Breadcrumb-->
 
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

		<!--User Profile-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<div class="card">
							<div class="card-header">
								<div class="wideget-user-tab">
									<div class="tab-menu-heading">
										<div class="tabs-menu1">
											<ul class="nav">
												<li class=""><a href="#tab-1" class="active" data-toggle="tab">Profile</a></li>
												<li><a href="#tab-2" data-toggle="tab" class="">My Order <span class="badge badge-primary badge-pill">01</span></a></li>
												<li><a href="#tab-3" data-toggle="tab" class="">Transection History <span class="badge badge-primary badge-pill">03</span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card mb-0">
							<div class="card-body">
								<div class="border-0">
									<div class="tab-content">
										<div class="tab-pane active" id="tab-1">
											<div class="card-header">
												<h3 class="card-title">User Details</h3>
												<div class="card-options">
													<button type="button" class="btn btn-sm btn-secondary mr-2" data-toggle="modal" data-target="#update">
														<i class="icon icon-pencil mr-1"></i>
														Update
													</button>
													<button type="button" class="btn btn-sm btn-secondary mr-2" data-toggle="modal" data-target="#password">
														<i class="icon icon-pencil mr-1"></i>
														Change Password
													</button>
												</div>
											</div>
											<div class="card-body">
												<ul class="list-unstyled widget-spec mb-0">
													<li class="">
														<i class="fa fa-caret-right text-success" aria-hidden="true"></i> 
														Name:{{Auth::user()->name }} 
													</li>
													<li class="">
														<i class="fa fa-caret-right text-success" aria-hidden="true"></i> Gender: {{Auth::user()->gender }} 
													</li>
													<li class="">
														<i class="fa fa-caret-right text-success" aria-hidden="true"></i> Phone Number: {{Auth::user()->phone_number }} 
															@php
														$var=Auth::user()->status;
														if($var=='0')
														{
														@endphp 
													 	<a href="{{url('df')}}" class="btn btn-indigo btn-sm">(Verify Here)</a>
														@php
													    }
													    else
													    {
														@endphp
														<h4>(Verified)</h4>
														@php
													    }
														@endphp 
													</li> 
													<li class="">
														<i class="fa fa-caret-right text-success" aria-hidden="true"></i> Email: {{Auth::user()->email }} 
													</li>
													<li class="">
														<i class="fa fa-caret-right text-success" aria-hidden="true"></i> Address: {{Auth::user()->address }} 
													</li>
													<li class="">
														<i class="fa fa-caret-right text-success" aria-hidden="true"></i> PIN Code: {{Auth::user()->pincode }} 
													</li>
												</ul>
											</div>
										</div>
										<div class="tab-pane userprof-tab" id="tab-2">
											<div class="card-header">
												<h3 class="card-title">Orders List</h3>
											</div>
											<div class="card-body">
												<div class="table-responsive border-top">
													<table class="table table-bordered table-hover text-nowrap">
														<thead>
															<tr>
																<th>Tracking ID</th>
																<th>Service</th>
																<th>Category</th>
																<th>Date</th>
																<th>Price</th>
																<th>Status</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="text-primary">#89345</td>
																<td>Service One</td>
																<td>Plumber</td>
																<td>07-6-2019</td>
																<td class="font-weight-semibold fs-16">₹ 893</td>
																<td>
																	<a href="#" class="badge badge-danger">Pending</a>
																</td>
																<td>
																	<a class="btn btn-primary btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="Track"><i class="fa fa-thumb-tack "></i></a>
																	<a class="btn btn-secondary btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="Cancel"><i class="fa fa-ban"></i></a><br>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
												<ul class="pagination">
													<li class="page-item page-prev disabled">
														<a class="page-link" href="#" tabindex="-1">Prev</a>
													</li>
													<li class="page-item active"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item page-next">
														<a class="page-link" href="#">Next</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="tab-pane userprof-tab" id="tab-3">
											<div class="card-header">
												<h3 class="card-title">Transections</h3>
											</div>
											
											<div class="card-body">
												<div class="table-responsive border-top">
													<table class="table table-bordered table-hover text-nowrap">
														<thead>
															<tr>
																<th>Invoice ID</th>
																<th>Service</th>
																<th>Category</th>
																<th>Order Date</th>
																<th>Price</th>
																<th>Complete Date</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>#INV-348</td>
																<td>Service One</td>
																<td>Plumber</td>
																<td>07-09-2019</td>
																<td class="font-weight-semibold fs-16">₹ 889</td>
																<td>17-10-2019</td>
																<td>
																	<a class="btn btn-primary btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
																	<a class="btn btn-secondary btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
																</td>
															</tr>
															<tr>
																<td>#INV-348</td>
																<td>Service One</td>
																<td>Plumber</td>
																<td>07-09-2019</td>
																<td class="font-weight-semibold fs-16">₹ 889</td>
																<td>17-10-2019</td>
																<td>
																	<a class="btn btn-primary btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
																	<a class="btn btn-secondary btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
																</td>
															</tr>
															<tr>
																<td>#INV-348</td>
																<td>Service One</td>
																<td>Plumber</td>
																<td>07-09-2019</td>
																<td class="font-weight-semibold fs-16">₹ 889</td>
																<td>17-10-2019</td>
																<td>
																	<a class="btn btn-primary btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
																	<a class="btn btn-secondary btn-sm text-white mb-1" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
												<ul class="pagination">
													<li class="page-item page-prev disabled">
														<a class="page-link" href="#" tabindex="-1">Prev</a>
													</li>
													<li class="page-item active"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item page-next">
														<a class="page-link" href="#">Next</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Popup Update Profile-->
		<div id="update" class="modal fade">
			<div class="modal-dialog" role="document">
				<div class="modal-content ">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="single-page customerpage " >
							<div class="wrapper wrapper2 box-shadow-0">
								<form id="login" method="post" action="{{url('/')}}/updatecustomer/{{Auth::user()->id}}" class="card-body" tabindex="500">

									{{ csrf_field() }}
									<div class="form-group">
										<label for="name" class="col-form-label">Name</label>
										<input  type="text" name="name" class="form-control" id="staticEmail" value="{{Auth::user()->name }}">
									</div>

									<div class="form-group">
										<label for="gender"  class="col-form-label">Gender</label>
										<select name="gender" class="form-control">
											<option value="male">Male</option>
											<option value="female">Female</option>

										</select>
									</div>

									<div class="form-group">
										<label for="email" class="col-form-label">Email</label>
										<input type="email" name="email" class="form-control" id="staticEmail" value="{{Auth::user()->email }}">
									</div>

									<div class="form-group">
										<label for="phone" class="col-form-label">Phone Number</label>
										<input type="text" name="phone_number" class="form-control" id="staticEmail" value="{{Auth::user()->phone_number }}">
									</div>

									<div class="form-group">
										<label for="address" class="col-form-label">Address</label>
										<input type="text" name="address" class="form-control" id="staticEmail" value="{{Auth::user()->address }}">
									</div>

									<div class="form-group">
										<label for="pin" class="col-form-label">PIN Code</label>
										<input type="text" class="form-control" name="pincode" id="staticEmail" value="{{Auth::user()->pincode }}">
									</div>	

									<br>							

									<div class="card-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Popup Profile-->

		<!-- Popup Update Password-->
		<div id="password" class="modal fade">
			<div class="modal-dialog" role="document">
				<div class="modal-content ">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Update Password</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="single-page customerpage " >
							<div class="wrapper wrapper2 box-shadow-0">
								<form id="login" class="card-body" tabindex="500">
									<div class="form-group">
										<label for="password" class="col-form-label">Current Password</label>
										<input type="password" class="form-control" id="staticEmail">
									</div>

									<div class="form-group">
										<label for="password" class="col-form-label">New Password</label>
										<input type="password" class="form-control" id="staticEmail">
									</div>

									<div class="form-group">
										<label for="password" class="col-form-label">Re-enter Password</label>
										<input type="password" class="form-control" id="staticEmail">
									</div>

									<br>							

									<div class="card-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Popup Password-->


	@endsection