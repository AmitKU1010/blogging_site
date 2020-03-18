@extends('backLayouts.adminlayout')

    @section('title')
       MoSeva Branches | MoSeva Admin
    @endsection

    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">MoSeva Branches</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Branch Lists</li>
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
										<a class="nav-link btn btn-primary" href="{{route('admin.branches.index')}}">All Branches</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.pins.index')}}">Add Pin Code</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.branches.create')}}">Add Branch</a>
				 					</li>
								</ul>
							</div>
						</div> <!-- ./panel -->

						<div class="card mt-4">
							<div class="card-header">
								<div class="card-title">Branches</div>
							</div>

							<div class="card-body">
								<div class="table-responsive">
									<table id="example2" class="hover table-bordered border-top-0 border-bottom-0" >
										<thead>
											<tr>
												<th>#</th>
												<th>Branch Name</th>
												<th>Slug</th>
												<th>Address</th>
												<th>PIN Codes</th>
												<th>Action</th>
											</tr>
										</thead>

										<tbody>
													@php 
												$i=1; 
											@endphp

                                                 
											@if(count($branches)>0)
												@foreach($branches as $branche)
													<tr>
														<td>{{$i++}}</td>
														<td>{{$branche->name}}</td>
														<td>{{$branche->name}}</td>
														<td>{{$branche->address}}</td>
														<td>{{$branche->pin}}</td>
												<td> 
												 		   	<a href="{{ url('/')}}/admin/branches/edit/{{ $branche->name }}" class="btn btn-indigo btn-sm">
															   <i class="fa fa-pencil mr-1"></i>
                                                                Edit
															</a>

                                                 			<a href="{{ url('/')}}/admin/branches/destroy/{{ $branche->name}} " class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">
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
												<th>Branch Name</th>
												<th>Slug</th>
												<th>Address</th>
												<th>PIN Codes</th>
												<th>Action</th>
											</tr>
										</tfoot>
									</table>
								</div> <!-- ./table-responsive -->
							</div> <!-- ./card-body -->

						</div> <!-- ./card-->
					</div> <!-- ./col-lg-12 -->
				</div> <!-- ./row -->

			</div> <!-- ./side-app -->
		</div> <!-- ./app-content -->
		
	@endsection