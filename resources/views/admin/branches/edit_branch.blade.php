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
								Add New Branch
							</div>
							<div class="card-body">

					<form method="post" action="{{url('/')}}/admin/branches/update/{{$Branch->id}}">
												{{csrf_field()}}
												@include('flash')
							 	<div class="container">
				 				<div class="p-4 border">
								<div class="row p-3">
								<div class="col-lg-12">
								<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12 form-group">
								<label class="form-label text-center">Branch Name</label>
								</div>
								<div class="col-md-8 col-sm-12 col-xs-12 form-group">

								<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
							    <div class="row gutters-sm">
                                                            <div class="col">
																<input type="text" name="name" placeholder="Enter Branch Name.." class="form-control" value="{{$Branch->name}}">
															</div>
                                                            <span class="col-auto align-self-center">
                                                                <span class="form-help" data-toggle="popover" data-placement="top"
                                                                data-content="
                                                                    <p> Branch name must be min 5 characters and unique</p>
                                                                ">?</span>
                                                            </span>
                                                        </div>
													</div>
													</div>

												</div>
											</div>
											<div class="col-lg-12">
												<div class="row">
													<div class="col-md-4 col-sm-12 col-xs-12 form-group">
														<label class="form-label text-center">Branch Address</label>
													</div>
                                                     
													<div class="col-md-8 col-sm-12 col-xs-12 form-group">
															<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
														<div class="row gutters-sm">
                                                            <div class="col">
																<!-- <textarea class="form-control" name="address" value="{{$Branch->address}}" placeholder="Enter Address" class="form-control"></textarea> -->
																<input type="text" class="form-control" name="address" value="{{$Branch->address}}" >
															</div>
                                                            <span class="col-auto align-self-center">
                                                                <span class="form-help" data-toggle="popover" data-placement="top"
                                                                data-content="
                                                                    <p>Branch address identify physical location of the moseva office</p>
                                                                ">?</span>
                                                            </span>
                                                        </div>
													</div>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="row">
													<div class="col-md-4 col-sm-12 col-xs-12 form-group">
														<label class="form-label text-center">Select Pin Codes</label>
													</div>
													<div class="col-md-8 col-sm-12 col-xs-12 form-group">
														<div class="row gutters-sm">
                                                            <div class="col">
												 				<select name="pin[]" id="pin" class="form-control select2" value="{{$Branch->pin}}" data-placeholder="Choose Browser" multiple>
																	  @if(count($PinList)>0)
												 				@foreach($PinList as $PinLists)
																	<option value="{{$PinLists->pin_codes}}">
		 															{{$PinLists->pin_codes}}
																	</option>
																	@endforeach
																	@endif
  
                                                                </select>
				 											</div>
                                                            <span class="col-auto align-self-center">
                                                                <span class="form-help" data-toggle="popover" data-placement="top"
                                                                data-content="
                                                                    <p>selected pin code area are working area for this branch</p>
                                                                ">?</span>
                                                            </span>
                                                        </div>
													</div>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="row">
													<div class="col-md-4 col-sm-12 col-xs-12 form-group">
													</div>
													<div class="col-md-4 col-sm-12 col-xs-12 form-group mt-4">
														<button type="submit" name="submit" class="btn btn-primary btn-block">Add Branch</button>
													</div>
													<div class="col-md-4 col-sm-12 col-xs-12 form-group">
													</div>
												</div>
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
		</div>
	@endsection
