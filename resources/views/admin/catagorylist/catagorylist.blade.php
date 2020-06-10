@extends('backLayouts.adminlayout')

    @section('title')
         YReview Admin
        
    @endsection
    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">Master Setup</h4>

					<ol class="breadcrumb">
 						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Merge All</li>
					</ol>
				</div> <!-- ./page-header -->

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-primary">
							<div class=" ">
								<ul class="nav nav-pills">
									<li class="nav-item m-2">
										<a class="nav-link btn btn-primary" href="{{route('admin.catagorylist.index')}}">Merge All</a>
									</li>

									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.departments.index')}}">Add Department</a>
									</li>

									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.categories.create')}}">Add Category</a>
									</li>

									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.subcategories.index')}}">Add Sub-category</a>
									</li>
								</ul>
							</div>
						</div> <!-- ./panel -->

						<div class="row mt-4">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
									 	<div class="card-title">Select Department | Category | Sub-category</div>
									</div>

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
							</div> <!-- ./col-lg-12 -->

							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
									 	<div class="card-title">All Lists</div>
									</div>

									<div class="card-body">
										<div class="table-responsive">
											<table id="example2" class="hover table-bordered border-top-0 border-bottom-0" >
												<thead>
													<tr>
														<th>#</th>
														<th>Departments</th>
														<th>Catagories</th>
														<th>Sub-Catagories</th>
														<th>Action</th>
													</tr>
												</thead>

												<tbody>
													@php 
														$i=1;
													@endphp

													@if(count($allList) > 0)
														@foreach($allList as $allLists)
															<tr>
																<td>{{$i++}}</td>
																<td>{{$allLists->department_name}}</td>
																<td>{{$allLists->catagory_name}}</td>
				 												<td>{{$allLists->subcatagory_name}}</td>
															<td>
                                                                    <a href="{{ url('/')}}/admin/catagorylist/edit/{{ $allLists->catagory_list_id }}" class="btn btn-indigo btn-sm">
                                                                        <i class="fa fa-pencil mr-1"></i>
                                                                        Edit
                                                                    </a>
   
                                                                    <a href="{{ url('/')}}/admin/catagorylist/destroy/{{ $allLists->catagory_list_id }} " class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">
                                                                        <i class="fa fa-trash-o mr-1"></i>
                                                                        Delete
                                                                    </a>
                                                                </td>
																	
															</tr>
														@endforeach
													@endif
												</tbody>

												<tfoot>
													<tr>
														<th>#</th>
														<th>Departments</th>
														<th>Catagories</th>
														<th>Sub-Catagories</th>
														<th>Action</th>
													</tr>
												</tfoot>
											</table>
										</div> <!-- ./table-responsive -->
									</div> <!-- ./card-body -->
								</div> <!-- ./card -->
							</div> <!-- ./col-lg-12 -->
						</div> <!-- ./row -->

					</div> <!-- ./col-lg-12 -->				
				</div> </div> <!-- ./row -->

			</div> <!-- ./ side-app -->
		</div> <!-- ./ app-content -->

	@endsection
