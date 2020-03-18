  @extends('backLayouts.adminlayout')

    @section('title')
        New Branch | Admin Dashboard
    @endsection

    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">Moseva Branches</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">New Branch</li>
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
										<a class="nav-link btn btn-light" href="{{route('admin.branches.index')}}">All Lists</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.pins.index')}}">ADD Pin Code</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-primary" href="{{route('admin.branches.create')}}">Add Branch</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								Edit Catagory
							</div>
							<div class="card-body">

					<form method="post" action="{{url('/')}}/admin/catagorylist/store">
										{{csrf_field()}}

											@include('flash')

											<div class="card-body">
												<div class="container">
													<div class="p-5 border">
														<div class="form-horizontal">
															<div class="form-group ">	
																<div class="row">
																	<div class="col-md-4">
																		<label class="form-label center" for="name">Department</label>
																		<select class="form-control" name="department_name">
																			<option>Select</option>
																			@if(count($Department) > 0)
																				@foreach($Department as $Departments)
																					<option value="{{$Departments->id}}">
																						{{$Departments->department_name}}
																					</option>
																				@endforeach
																			@endif
																		</select>
																	</div>

																	<div class="col-md-4">
																		<label class="form-label center" for="name">Catagory</label>
																		<select class="form-control" name="catagory_name">
																			<option>Select</option>
																			@if(count($Category) > 0)
																				@foreach($Category as $Categorys)
																					<option value="{{$Categorys->id}}">
																						{{$Categorys->catagory_name}}
																					</option>
																				@endforeach
																			@endif
																		</select>
																	</div>

																	<div class="col-md-4">
																		<label class="form-label center" for="name">SubCatagory</label>
																		<select class="form-control" name="subcatagory_name">
																			<option>Select</option>
																			@if(count($Subcatagory) > 0)
																				@foreach($Subcatagory as $Subcatagorys)
																					<option value="{{$Subcatagorys->id}}">
																						{{$Subcatagorys->subcatagory_name}}
																					</option>
																				@endforeach
																			@endif
																		</select>
																	</div>
																</div>
															</div> <!-- ./form-group -->

															<div class="row mt-5">
																<div class="col-lg-4"></div>
																<div class="col-lg-4">
																	<button type="submit" class="btn btn-primary waves-effect waves-light btn-block">Create</button>
																</div>
																<div class="col-lg-4"></div>
															</div>	
														</div>							
													</div>

												</div> <!-- ./container -->
											</div> <!-- ./card-body -->
									</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection
