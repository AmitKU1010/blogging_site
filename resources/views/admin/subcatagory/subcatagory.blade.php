@extends('backLayouts.adminlayout')

    @section('title')
        Add Sub-category |  Blogging-Site
    @endsection
    
    @section('content')

        <div class="app-content  my-3 my-md-5">
            <div class="side-app">
                <div class="page-header">
					<h4 class="page-title">Master Setup</h4>

					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Sub-category</li>
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
									<!-- <li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.catagorylist.index')}}">Merge All</a>
									</li>

									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.departments.index')}}">Add Department</a>
									</li> -->

									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.categories.create')}}">Add Category</a>
									</li>

									<li class="nav-item m-2">
										<a class="nav-link btn btn-primary" href="{{route('admin.subcategories.index')}}">Add Sub-category</a>
									</li>

                                    <li class="nav-item m-2">
                                        <a class="nav-link btn btn-light" href="{{route('admin.trackuserlist')}}">All Users</a>
                                    </li>


								</ul>
							</div>
						</div> <!-- ./panel -->
 
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Create New Subcatagory</div>
                                    </div> <!-- ./card-header -->
                                     
                                    <form method="post" action="{{url('/')}}/admin/subcategories/store">
                                        {{csrf_field()}}

                                            @include('flash')
 
                                            <div class="card-body">
                                                    <div class="form-group mt-1">
                                                        <div class="row">
                                                              
                                                               
                                                            <div class="col-lg-4">
                                                                   <label class="form-label">
                                                                   Select Catagory</label>
                                                                <div class="form-group {{ $errors->has('catagory_name') ? 'has-error' : '' }}">
                                                                    <div class="row gutters-sm">
                                                                        <div class="col">
                                                                        <select name="catagory_name" id="catagory_name" class="form-control">
                                                                       <option>Select</option>
                                                                          @if(count($catagory)>0)
                                                                        @foreach($catagory as $catagorys)
                                                                   <option value="{{$catagorys->id}}">{{$catagorys->catagory_name}}</option>
                                                                   @endforeach
                                                                   @endif
                                                                   </select>

                                                                            <span class="text-danger">{{ $errors->first('catagory_name') }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- ./col-lg-8 -->
                                                             <div class="col-lg-4">
                                                            <label >Subcatagory Name</label>
                                                         

                                                        
                                                            <div class="form-group {{ $errors->has('subcatagory_name') ? 'has-error' : '' }}">
                                                                <div class="row gutters-sm">
                                                                    <div class="col">
                                                                        <input type="text" name="subcatagory_name" class="form-control" id="subcatagory_name"  placeholder="Web Design">

                                                                        <span class="text-danger">{{ $errors->first('subcatagory_name') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div> <!-- ./form-group -->
                                                </div> <!-- ./card-body -->


                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col-lg-3"></div>

                                                    <div class="col-lg-2">
                                                        <button type="submit" class="btn btn-primary btn-block">Add Subcatagory</button>
                                                    </div>

                                                    <div class="col-lg-3"></div>
                                                </div>
                                            </div> <!-- ./card-footer -->
                                    </form>

                                </div> <!-- ./card-->
                            </div> <!-- ./col-lg-5 -->

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Subcatagory Lists</div>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example" class="hover table-bordered border-top-0 border-bottom-0 text-center" >
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Catagory Name</th>
                                                        <th>Sub-Catagory Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @php 
                                                        $i=1; 
                                                    @endphp

                                                    @if(count($Subcatagory) > 0)
                                                        @foreach($Subcatagory as $Subcatagorys)
                                                            <tr>
                                                                <td>{{$i++}}</td>
                                                                <td>{{$Subcatagorys->cat_name}}</td>
                                                                <td>{{$Subcatagorys->subcatagory_name}}</td>
                                                                <td>
                                                                    <a href="{{ url('/')}}/admin/subcategories/edit/{{ $Subcatagorys->id }}" class="btn btn-indigo btn-sm">
                                                                        <i class="fa fa-pencil mr-1"></i>
                                                                        
                                                                    </a>
                
                                                                    <a href="{{ url('/')}}/admin/subcategories/destroy/{{ $Subcatagorys->id}} " class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">
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
                                                        <th>Catagory Name</th>
                                                        <th>Sub-Catagory Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div> <!-- ./table-responsive -->
                                    </div> <!-- ./card-body -->
                                </div> <!-- ./card -->

                            </div> <!-- ./col-lg-8 -->
                        </div> <!-- ./row -->

                    </div> <!-- ./col-lg-12 -->
                </div> <!-- ./row -->

            </div> <!-- ./side-app -->
        </div> <!-- ./app-content -->
        
    @endsection