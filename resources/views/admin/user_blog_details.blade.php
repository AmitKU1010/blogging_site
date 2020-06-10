@extends('backLayouts.adminlayout')

    @section('title')
         YReview Admin
    @endsection

    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">Blog Details</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">All Blog Details</li>
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
										<a class="nav-link btn btn-primary" href="{{route('admin.trackuserlist')}}">All Users</a>
									</li>

									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.categories.create')}}">Add Category</a>
									</li>

									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.subcategories.index')}}">Add Sub-category</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="card mt-4">
							<div class="card-header">
								All Blog Details
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="hover table-bordered border-top-0 border-bottom-0" >
										<thead>
											<tr>
												<th>#</th>
												<th>Post Images</th>
												<th>Post Caption</th>
												<th>Post Description</th>
												<th>Created Date</th>
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
											<td><img style="width: 90px;height: 90px;" class="img-circle" src="{{ URL::asset('/images/post_img/'.$Users->post_image) }}">
											</td>
											
											<td>{{$Users->post_caption}}</td>
											<td>{{strip_tags($Users->post_description)}}</td>
											<td>{{$Users->created_at}}</td>


											<!-- <td>ACTIVE</td>
											<td>
												<a href="{{ url('/')}}/admin/Blog Details/destroy/{{ $Users->id}}" class="btn btn-indigo btn-sm">
													<i class="fa fa-pencil mr-1"></i>
												</a>
 
									 			<a href="{{ url('/')}}/admin/Blog Details/destroy/{{ $Users->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">
													<i class="fa fa-trash-o mr-1"></i>
												</a>
											</td> -->
											</tr>
											    @endforeach
                                                    @endif
										</tbody>

										<tfoot>
											<tr>
												<th>#</th>
												<th>Post Images</th>
												<th>Post Caption</th>
												<th>Post Description</th>
												<th>Created Date</th>

												<!-- <th>Status</th>
												<th>Action</th> -->
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