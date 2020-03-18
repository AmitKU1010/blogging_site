@extends('backLayouts.adminlayout')

    @section('title')
        All Category | MoSeva Admin
    @endsection

    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">Categories</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Category Lists</li>
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
										<a class="nav-link btn btn-primary" href="{{route('admin.categories.index')}}">All Lists</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.categories.create')}}">ADD Category</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								Category Lists
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example2" class="hover table-bordered border-top-0 border-bottom-0" >
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Description</th>
												<th>Slug</th>
												<th>Sub Categories</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											@if( $categories->count() > 0 )
												@foreach ( $categories as $category )
													<tr>
														<td>{{ $category->id }}</td>
														<td>{{ $category->title }}</td>
														<td>{!! $category->description !!}</td>
														<td>{{ $category->slug }}</td>
														<td>
															@if( $category->childrens()->count() > 0 )
																@foreach ( $category->childrens as $children )
																	{{$children->title}},
																@endforeach
															@endif
														</td>

														@if( $category->trashed() )
															<td>
																<a class="btn btn-info btn-sm" href="{{route('admin.categories.recover',$category->id)}}">
																	Restore
																</a>
																 | 
																<a class="btn btn-danger btn-sm" href="javascript:;" onclick="confirmDelete('{{$category->id}}')">
																	Delete
																</a>
															<form id="delete-category-{{$category->id}}" action="{{ route('admin.categories.destroy', $category->slug) }}" method="POST" style="display: none;">
															
																@method('DELETE')
																@csrf
															</form>
															</td>
														@else
															<td>
																<a class="btn btn-info btn-sm" href="{{route('admin.categories.edit',$category->slug)}}" data-toggle="tooltip" data-original-title="Edit">
																	<i class="fa fa-pencil"></i>
																</a> | 
																
																<a id="trash-category-{{$category->id}}" class="btn btn-warning btn-sm" href="{{route('admin.categories.remove',$category->slug)}}" data-toggle="tooltip" data-original-title="Trash">
																	<i class="fa fa-trash-o"></i>
																</a> | 
																
																<a class="btn btn-danger btn-sm" href="javascript:;" onclick="confirmDelete('{{$category->id}}')" data-toggle="tooltip" data-original-title="Delete">
																	<i class="fa fa-times-circle"></i>
																</a>
																
																<form id="delete-category-{{$category->id}}" action="{{ route('admin.categories.destroy', $category->slug) }}" method="POST" style="display: none;">
																	
																	@method('DELETE')
																	@csrf
																</form>
															</td>
														@endif
													</tr>
												@endforeach
											@endif
										</tbody>
										<tfoot>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Description</th>
												<th>Slug</th>
												<th>Sub Categories</th>
												<th>Actions</th>
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

	@section('script')
		<script>
			function confirmDelete(id){
				let choice = confirm("Are You sure, You want to Delete this record ?");
				if(choice){
					document.getElementById('delete-category-'+id).submit();
				}
			}
		</script>
	@endsection