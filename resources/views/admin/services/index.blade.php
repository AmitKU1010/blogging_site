@extends('backLayouts.adminlayout')

    @section('title')
        All Services | MoSeva Admin
    @endsection

    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">MoSeva Services</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">All Services</li>
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
										<a class="nav-link btn btn-primary" href="{{route('admin.services.index')}}">All Services</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.services.create')}}">Add Service</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="card mt-4">
							<div class="card-header">
								<div class="card-title">All Services</div>
							</div>

							<div class="card-body">
								<div class="table-responsive">
									<table id="example2" class="hover table-bordered border-top-0 border-bottom-0" >
										<thead>
											<tr>
												<th>#</th>
												<th>Images</th>
												<th>Name</th>
												<th>Slug</th>
												<th>Description</th>
												<th>Department</th>
												<th>Category</th>
												<th>Sub Category</th>
												<th>Service Type</th>
												<th>Price</th>
												<th>Offer Price</th>
												<th>Tax</th>
							 					<th>Available</th>
							 					<th>Product Synonyms</th>
							 					<th>Video Link</th>
												<th>Time</th>
												<th>FAQ</th>
												<th>Related Service</th>
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
														<td><img width="100%" class="img-circle" src="{{ URL::asset('/images/'.$allLists->images) }}"></td></td>
														<td>{{$allLists->service_name}}</td>
														<td>{{$allLists->slug}}</td>
														<td>{{$allLists->description}}</td>
														<td>{{$allLists->department_name}}</td>
														<td>{{$allLists->catagory_name}}</td>
														<td>{{$allLists->subcatagory_name}}</td>
														<td>{{$allLists->service_type}}</td>
														<td>{{$allLists->price}}</td>
														<td>{{$allLists->offer_price}}</td>
														<td>{{$allLists->tax}}</td>
														<td>{{$allLists->availbale}}</td>
														<td>{{$allLists->product_synonyms}}</td>
														<td>{{$allLists->video_link}}</td>
														<td>{{$allLists->booking_time}}</td>
														<td>{{$allLists->faq}}</td>
														<td>{{$allLists->related_service}}</td>
 

                                                		<td>
							 								<a href="{{ url('/')}}/admin/services/edit/{{$allLists->service_name}}" class="btn btn-indigo btn-sm">
																<i class="fa fa-pencil mr-1"></i>
															</a>
 
                                                 			<a href="{{ url('/')}}/admin/services/destroy/{{$allLists->service_name}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">
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
												<th>Images</th>
												<th>Name</th>
												<th>Slug</th>
												<th>Description</th>
												<th>Department</th>
												<th>Category</th>
												<th>Sub Category</th>
												<th>Service Type</th>
												<th>Price</th>
												<th>Offer Price</th>
												<th>Tax</th>
							 					<th>Available</th>
							 					<th>Product Synonyms</th>
							 					<th>Video Link</th>
												<th>Time</th>
												<th>FAQ</th>
												<th>Related Service</th>
												<th>Action</th>
											</tr>
										</tfoot>
									</table>
								</div> <!-- ./table-responsive -->
							</div> <!-- ./card-body -->

						</div> <!-- ./card -->

					</div> <!-- ./col-lg-12 -->
				</div> <!-- ./row -->

			</div> <!-- ./side-app -->
		</div> <!-- ./app-content -->

	@endsection