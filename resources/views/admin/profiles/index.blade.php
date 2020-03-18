@extends('backLayouts.adminlayout')

    @section('title')
        All Customers | MoSeva Admin
    @endsection

    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">Customers</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">All Customers</li>
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
										<a class="nav-link btn btn-primary" href="{{route('admin.profiles.index')}}">All Customers</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="card mt-4">
							<div class="card-header">
								All Customers
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example2" class="hover table-bordered border-top-0 border-bottom-0" >
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Gender</th>
												<th>Phone</th>
												<th>Address</th>
												<th>PIN Code</th>
												<th>Email</th>
												<th>Action</th>
											</tr>
										</thead>

										<tbody>
											@php 
												$i=1; 
											@endphp
											
											@if(count($Users) > 0)
												@foreach($Users as $User)
												<tr>
													<td>{{$i++}}</td>
													<td>{{$User->name}}</td>
													<td>{{$User->gender}}</td>
													<td>{{$User->phone_number}}</td>
													<td>{{$User->address}}</td>
													<td>{{$User->pincode}}</td>
													<td>{{$User->email}}</td>
													<td>
														<a href="#"class="btn btn-indigo btn-sm">
															<i class="fa fa-pencil mr-1"></i>
														</a>

														<a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">
															<i class="fa fa-trash-o mr-1"></i>
														</a>
													</td>
												</tr>
												@endforeach
											@endif
										</tbody>

										<tfoot>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Gender</th>
												<th>Phone</th>
												<th>Address</th>
												<th>PIN Code</th>
												<th>Email</th>
												<th>Action</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection