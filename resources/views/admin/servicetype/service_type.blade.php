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
                                        <a class="nav-link btn btn-primary" href="{{route('admin.pins.index')}}">ADD Departmennt</a>
                                    </li>
                                    <li class="nav-item m-2">
                                        <a class="nav-link btn btn-light" href="{{route('admin.branches.create')}}">ADD Catgory</a>
                                    </li>
                                      <li class="nav-item m-2">
                                        <a class="nav-link btn btn-light" href="{{route('admin.branches.create')}}">ADD Sub-Catgory</a>
                                    </li>

                                     <li class="nav-item m-2">
                                        <a class="nav-link btn btn-light" href="{{route('admin.branches.create')}}">ADD Service Type</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
 
                        <div class="row row-deck">
                            <div class="col-lg-5">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">New Service Type</div>
                                    </div>
                                    
                                    <div class="card-body">

                                        <div class="form-group mt-4">
                                            
                                            <div class="row">
                                                <div class="col-lg-3">
                                            <label >Service Type Name</label>
                                                </div>
                                                <form method="post" action="{{url('/')}}/admin/servicetype/store">
                                                {{csrf_field()}}
                                                @include('flash')

                                                <div class="col-lg-9">
                                                    <div class="form-group {{ $errors->has('service_type') ? 'has-error' : '' }}">
                                                    <div class="row gutters-sm">
                                                        <div class="col">
                                                         
                                                            <input type="text" name="service_type" class="form-control" id="service_type"  placeholder="Sevice Type Name">

                                                            <span class="text-danger">{{ $errors->first('service_type') }}</span>
                                                        </div>
                                                      <!--   <span class="col-auto align-self-center">
                                                            <span class="form-help" data-toggle="popover" data-placement="top"
                                                            data-content="
                                                                <p>Pin Code must be IN or CDN format. You can use an extended ZIP+4 code to determine address more accurately</p>
                                                            ">?</span>
                                                        </span> -->
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            <div class="row">
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-6">
                                                    <button type="submit" class="btn btn-primary btn-block">Add Service Type</button>
                                                </div>
                                                <div class="col-lg-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <!-- hhh -->
                            <div class="col-lg-7">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Service Type Lists</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example2" class="hover table-bordered border-top-0 border-bottom-0 text-center" >
                                                <thead>

                                                    <tr>
                                                        <th>#</th>
                                                        <th>Service Type Name</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $i=1; @endphp
                                                    @if(count($ServiceType) > 0)
                                                    @foreach($ServiceType as $ServiceTypes)
                                                       <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$ServiceTypes->service_type}}</td>

                                                <td><a href="{{ url('/')}}/admin/pins/edit/{{ $ServiceTypes['id'] }}" class="btn btn-success btn-sm">Edit</a>
 
                                                 <a href="{{ url('/')}}/admin/pins/destroy/{{ $ServiceTypes['id']}} " class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');"><i class="fa fa-remove"></i>Delete</a>
                                                </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Service Type Name</th>
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
            </div>
        </div>
    @endsection