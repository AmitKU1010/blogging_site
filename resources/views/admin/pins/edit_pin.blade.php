@extends('backLayouts.adminlayout')

    @section('title')
        Branch Pin Codes | Admin Dashboard
    @endsection
    
    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">Moseva Branches</h4>
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

				<div class="row ">
					<div class="col-lg-12">
						<div class="panel panel-primary">
							<div class=" ">
								<ul class="nav nav-pills">
									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.branches.index')}}">All Lists</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-primary" href="{{route('admin.pins.index')}}">EDIT Pin Code</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.branches.create')}}">ADD Branch</a>
									</li>
								</ul>
							</div>
						</div>
 
						<div class="row row-deck">
							<div class="col-lg-5">
								<div class="card">
									<div class="card-header">
										<div class="card-title">EDIT Pin Code</div>
									</div>
									
									<div class="card-body">

										<div class="form-group mt-4">
											
											<div class="row">
												<div class="col-lg-3">
													<label class="form-label">Pin Code</label>
									 			</div>
												<form method="post" action="{{url('/')}}/admin/pins/update/{{$Pins->id}}">
												{{csrf_field()}}
												@include('flash')

												<div class="col-lg-9">
													<div class="form-group {{ $errors->has('pin_codes') ? 'has-error' : '' }}">
													<div class="row gutters-sm">
                                                        <div class="col">

                                                       
															<input type="text" name="pin_codes" class="form-control" id="pinCode" value="{{$Pins->pin_codes}}">


															<span class="text-danger">{{ $errors->first('pin_codes') }}</span>
                                                        </div>
														<span class="col-auto align-self-center">
															<span class="form-help" data-toggle="popover" data-placement="top"
															data-content="
																<p>Pin Code must be IN or CDN format. You can use an extended ZIP+4 code to determine address more accurately</p>
															">?</span>
														</span>
													</div>
												</div>
												</div>
											</div>
										</div>
										<div class="form-footer">
											<div class="row">
												<div class="col-lg-3"></div>
												<div class="col-lg-6">
													<button type="submit" class="btn btn-primary btn-block">Update Pin Code</button>
												</div>
												<div class="col-lg-3"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
									</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection