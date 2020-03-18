@extends('backLayouts.adminlayout')

    @section('title')
        Add Pin Code | MoSeva Admin
    @endsection
    
    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">MoSeva Branches</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Pin Code</li>
					</ol>
				</div>

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
										<a class="nav-link btn btn-light" href="{{route('admin.branches.index')}}">All Branches</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-primary" href="{{route('admin.pins.index')}}">Add Pin Code</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.branches.create')}}">Add Branch</a>
									</li>
								</ul>
							</div>
						</div> <!-- ./panel -->
 
						<div class="row mt-4">
							<div class="col-lg-5">
								<div class="card">
									<div class="card-header">
										<div class="card-title">New Pin Code</div>
									</div>
									
									<form method="post" action="{{url('/')}}/admin/pins/create">
										{{csrf_field()}}
											
											@include('flash')

											<div class="card-body">
												<div class="form-group mt-1">
													<div class="row">
														<div class="col-lg-4">
															<label class="form-label">Pin Code</label>
														</div>

														<div class="col-lg-8">
															<div class="form-group {{ $errors->has('pin_codes') ? 'has-error' : '' }}">
																<div class="row gutters-sm">
																	<div class="col">
																		<input type="text" name="pin_codes" class="form-control" id="pinCode"  placeholder="700051">

																		<span class="text-danger">{{ $errors->first('pin_codes') }}</span>
																	</div>
																</div>
															</div>
														</div> <!-- ./col-lg-8 -->
													</div>
												</div> <!-- ./form-group -->
											</div> <!-- ./card-body -->

											<div class="card-footer">
												<div class="row">
													<div class="col-lg-3"></div>

													<div class="col-lg-6">
														<button type="submit" class="btn btn-primary btn-block">Add Pin Code</button>
													</div>

													<div class="col-lg-3"></div>
												</div>
											</div> <!-- ./card-footer -->
									</form>

								</div> <!-- ./card -->
							</div> <!-- ././col-lg-5 -->

							<div class="col-lg-7">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Pin Code Lists</div>
									</div>

									<div class="card-body">
										<div class="table-responsive">
											<table id="example2" class="hover table-bordered border-top-0 border-bottom-0 text-center" >
												<thead>
													<tr>
														<th>#</th>
														<th>Pin Codes</th>
														<th>Action</th>
													</tr>
												</thead>

												<tbody>
													@php 
														$i=1; 
													@endphp

													@if(count($pins) > 0)
														@foreach($pins as $pin)
															<tr>
																<td>{{$i++}}</td>
																<td>{{$pin->pin_codes}}</td>
																<td>
																	<a href="{{ url('/')}}/admin/pins/edit/{{ $pin['id'] }}" class="btn btn-indigo btn-sm">
																		<i class="fa fa-pencil mr-1"></i>
                                                                        Edit
																	</a>

																	<a href="{{ url('/')}}/admin/pins/destroy/{{ $pin['id']}} " class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">
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
														<th>Pin Codes</th>
														<th>Action</th>
													</tr>
												</tfoot>
											</table>
										</div> <!-- ./table-responsive -->
									</div> <!-- ./card-body -->

								</div> <!-- ./card -->
							</div> <!-- ././col-lg-7 -->
						</div> <!-- ./row -->

					</div> <!-- ./col-lg-12 -->
				</div> <!-- ./row -->

			</div> <!-- ./side-app -->
		</div> <!-- ./app-content -->

	@endsection