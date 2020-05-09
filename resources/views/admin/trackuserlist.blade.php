@extends('backLayouts.adminlayout')

    @section('title')
        All Managers | MoSeva Admin
    @endsection

    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">Managers</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">All Managers</li>
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
										<a class="nav-link btn btn-primary" href="{{route('admin.managers.index')}}">All Managers</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.managers.create')}}">Add Manager</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="card mt-4">
							<div class="card-header">
								All Managers
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example2" class="hover table-bordered border-top-0 border-bottom-0" >
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Gender</th>
												<th>DOB</th>
												<th>Qualification</th>
												<th>Department</th>
												<th>Branch</th>
												<th>Working Days</th>
												<th>Log Time</th>
						 						<th>Out Time</th>
												<th>ID Proof</th>
												<th>A/C Number</th>
												<th>IFSC Code</th>
												<th>Address</th>
												<th>Phone Number</th>
												<th>Email Id</th>
												<th>Password</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>

										<tbody>
											 @php 
                                                        $i=1; 
                                                    @endphp

                                                    @if(count($User) > 0)
                                                        @foreach($User as $Users)
											<tr>
											<td>{{$i++}}</td>
											<td>{{$Users->name}}</td>
											<td>{{$Users->gender}}</td>
											<td>{{$Users->dob}}</td>
											<td>{{$Users->qualification}}</td>
											<td>{{$Users->department_name_user}}</td>
											<td>{{$Users->branch}}</td>
											<td>{{$Users->working_days}}</td>
											<td>{{$Users->working_time_in}}</td>
											<td>{{$Users->working_time_out}}</td>
											<td>{{$Users->id_proof}}</td>
											<td>{{$Users->account_number}}</td>
											<td>{{$Users->ifsc_code}}</td>
											<td>{{$Users->address}}</td>
											<td>{{$Users->phone_number}}</td>
											<td>{{$Users->show_password}}</td>
					 						<td>{{$Users->email}}</td>
											<td>ACTIVE</td>
											<td>
												<a href="{{ url('/')}}/admin/managers/destroy/{{ $Users->id}}" class="btn btn-indigo btn-sm">
													<i class="fa fa-pencil mr-1"></i>
												</a>
 
									 			<a href="{{ url('/')}}/admin/managers/destroy/{{ $Users->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">
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
												<th>Profile</th>
												<th>Name</th>
												<th>Gender</th>
												<th>DOB</th>
												<th>Qualification</th>
												<th>Department</th>
												<th>Branch</th>
												<th>Working Days</th>
												<th>Log Time</th>
												<th>Out Time</th>
												<th>ID Proof</th>
												<th>A/C Number</th>
												<th>IFSC Code</th>
												<th>Address</th>
												<th>Phone Number</th>
												<th>Email Id</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div> <!-- ./card -->

					</div> <!-- ./col-lg-12 -->
				</div> <!-- ./row -->

			</div> <!-- ./side-app -->
		</div> <!-- ./app-content -->

	@endsection