@extends('backLayouts.adminlayout')
 
    @section('title')
        New Service | Admin Dashboard
    @endsection
 
    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">Services</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">New Service</li>
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
										<a class="nav-link btn btn-light" href="{{route('admin.services.index')}}">All Lists</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-primary" href="{{route('admin.services.create')}}">ADD Service</a>
									</li>
								</ul>
							</div>
						</div>
 
						<div class="card">
							<div class="card-header">
								Add New Service
							</div>
							<div class="card-body"> 
								<div class="container">
									<div class="p-5 border">
										 <form method="post" action="{{url('/')}}/admin/services/store" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                @include('flash')
						 				<div class="form-group">
											<label class="form-label">Service Name</label>
											<div class="row gutters-sm">
                                                <div class="col">
													<input type="text" class="form-control w-100" name="service_name" placeholder="Enter Service Name">
												</div>
												<span class="col-auto align-self-center">
													<span class="form-help" data-toggle="popover" data-placement="top"
													data-content="
														<p>Service name must be unique and min 5 characters</p>
													">?</span>
							 					</span>
											</div>
										</div>

											<div class="form-group">
											<label class="form-label">Slug</label>
											<div class="row gutters-sm">
                                                <div class="col">
													<input type="text" class="form-control w-100" name="slug" placeholder="slug">
												</div>
												<span class="col-auto align-self-center">
													<span class="form-help" data-toggle="popover" data-placement="top"
													data-content="
														<p>Service name must be unique and min 5 characters</p>
													">?</span>
							 					</span>
											</div>
										</div>

					 					<div class="form-group mt-5">
											<label class="form-label">Description</label>
											<textarea class="content" name="description" placeholder="Enter Description"></textarea>
										</div>
                                                   
									<div class="row mt-5">
											<div class="col-lg-4">
												<div class="form-group">
													<label class="form-label">Department Name</label>
													<div class="row gutters-sm">
														<div class="col">
															<select class="form-control" name="department_name" id="department_name">
																<option>Choose</option>
						 							@if(count($Department) > 0)
                                                    @foreach($Department as $Departments)
																<option value="{{$Departments->id}}">{{$Departments->department_name}}</option>
											      	@endforeach
                                                    @endif
															</select>
														</div>
														<span class="col-auto align-self-center">
															<span class="form-help" data-toggle="popover" data-placement="top"
															data-content="
																<p>price for solve customer problem</p>
															">?</span>
														</span>
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													<label class="form-label">Catagory Name</label>
													<div class="row gutters-sm">
														<div class="col">
															  <select class="form-control" style="color: black;" id="catagory_name" name="catagory_name">
                                                            <option></option>
                                                           </select>
														</div>
														<span class="col-auto align-self-center">
															<span class="form-help" data-toggle="popover" data-placement="top"
															data-content="
																<p>Offer Price is temperory price to market there service</p>
															">?</span>
														</span>
													</div>
												</div>
											</div>

											    <div class="col-lg-4">
												<div class="form-group">
													<label class="form-label">Sub-Catagory Name</label>
													<div class="row gutters-sm">
														<div class="col">
														<select class="form-control" name="subcatagory_name" id="subcatagory_name">
																<option></option>
															</select>
														</div>
														<span class="col-auto align-self-center">
															<span class="form-help" data-toggle="popover" data-placement="top"
															data-content="
																<p>Offer Price is temperory price to market there service</p>
															">?</span>
														</span>
													</div>
												</div>
											</div>
										</div>

						 				<div class="row mt-5">
											   <div class="col-lg-4">
												<div class="form-group">
													<label class="form-label">Service Type</label>
													<div class="row gutters-sm">
														<select class="form-control" name="service_type">
												<option>Choose</option>
						 							@if(count($ServiceType) > 0)
                                                    @foreach($ServiceType as $ServiceTypes)
																<option value="{{$ServiceTypes->id}}">{{$ServiceTypes->service_type}}</option>
											      	@endforeach
                                                    @endif
											</select>
														
													</div>
												</div>
											</div>

											<div class="col-lg-4">
												<div class="form-group">
													<label class="form-label">Price</label>
													<div class="row gutters-sm">
													<div class="col">
		                <input type="text" name="price" class="form-control w-100"  placeholder="Price">
													</div>
														<span class="col-auto align-self-center">
															<span class="form-help" data-toggle="popover" data-placement="top"
															data-content="
																<p>price for solve customer problem</p>
															">?</span>
														</span>
													</div>
												</div>
											</div>


											<div class="col-lg-4">
												<div class="form-group">
													<label class="form-label">Offer Price</label>
													<div class="row gutters-sm">
														<div class="col">
															<input type="text" name="offer_price" class="form-control w-100"  placeholder="Offer Price">
														</div>
														<span class="col-auto align-self-center">
															<span class="form-help" data-toggle="popover" data-placement="top"
															data-content="
																<p>Offer Price is temperory price to market there service</p>
															">?</span>
														</span>
													</div>
												</div>
											</div>

											 
										</div>

										<div class="row mt-5">
											<div class="col-lg-4">
												<div class="form-group">
													<label class="form-label">Tax(In %)</label>
													<div class="row gutters-sm">
														<div class="col">
															<input type="text" name="tax" class="form-control w-100"  placeholder="Tax">
														</div>
														<span class="col-auto align-self-center">
															<span class="form-help" data-toggle="popover" data-placement="top"
															data-content="
																<p>price for solve customer problem</p>
															">?</span>
														</span>
													</div>
												</div>
											</div>
										

												<div class="col-lg-4">
												<div class="form-group">
													<label class="form-label">Availbale</label>
													<div class="row gutters-sm">
															<select class="form-control select2" name="availbale[]" data-placeholder="Choose Browser" multiple>
													<option>Choose</option>

																 @if(count($Branch) > 0)
                                                    @foreach($Branch as $Branchs)
																<option>{{$Branchs->name}}</option>
											      	@endforeach
                                                    @endif
											          </select>
													
													</div>
												</div>
											</div>
												<div class="col-lg-4">
												<div class="form-group">
													<label class="form-label">Product Synonyms</label>
													<div class="row gutters-sm">
														<div class="col">
															<input type="text" class="form-control w-100" name="product_synonyms"  placeholder="Enter Sub title">
														</div>
														<span class="col-auto align-self-center">
															<span class="form-help" data-toggle="popover" data-placement="top"
															data-content="
																<p>Offer Price is temperory price to market there service</p>
															">?</span>
														</span>
													</div>
												</div>
											</div>
										</div>

										<!-- <div class="form-group mt-5">
											<label class="form-label">Available</label>
											<select class="form-control select2" data-placeholder="Choose Browser" multiple>
												<option value="1" selected>Branch 1</option>
												<option value="2">Branch 2</option>
											</select>
										</div>
 -->

		 								
										<div class="form-group mt-5">
											<label class="form-label">Upload Images</label>
				 							<div>
												<input type="file" name="images"  class="form-control">
											</div>
										</div>


										

										<div class="form-group mt-5">
											<label class="form-label">Upload Video Link</label>
											<div>
												<input type="text" name="video_link" class="form-control" name="">
											</div>
										</div>

										<div class="form-group mt-5">
											<label >Time</label>
											<div class="wd-150 mg-b-30">
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
														</div>
													</div><!-- input-group-prepend -->
													<select class="form-control" name="booking_time" id="booking_time">
																	<option selected>Select</option>
																	<option value="below 1 Hours">below 1 Hours</option>
																	<option value="1 Hours">1 Hours</option>
																	<option value="2 Hours">2 Hours</option>
																	<option value="3 Hours">3 Hours</option>
																	<option value="More than 3 Hours">More than 3 Hours</option>
																</select>
												</div>
											</div><!-- wd-150 -->
										</div>

									<!-- 	<div class="form-group mt-5">
											<label>Optional</label>
			 							</div> -->

										<div class="form-group mt-5">
											<label class="form-label">Related Services</label>
				 							<div>
												<input type="text" class="form-control"  name="related_service">
											</div>
										</div>


										<!-- <div class="form-group mt-5">
											<label class="form-label">FAQ?</label>
				 							<div>
												<input type="text" class="form-control"  name="faq">
											</div>
										</div> -->

										<div class="form-group mt-5">
											<label class="form-label">FAQ?</label>
											<textarea name="faq" id="editor"></textarea>
										</div>
										
										<button type="submit" class="btn btn-primary waves-effect waves-light mt-5">Add Service</button>
									</div>
								</div>
							</div>
							 </form>
						</div>
					</div>
				</div>
			</div>
		</div>
<script src="{{ asset('assets/js/vendors/jquery-3.2.1.min.js') }}"></script>



<script type="text/javascript">
	 $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

			$(document).on('change','#department_name', function()
                { 

     var thisSelf=$(this);
    // alert(thisSelf);
    var department_name=$('#department_name').val();
    // alert(pd_cat);

                  $.ajax({
        type:"POST",
        url: "{{url('/')}}/admin/get/catagory",
        data:{
          "_token": "{{ csrf_token() }}",
          department_name : department_name,
        },
        dataType : 'html',
        cache: false,
        success: function(data){
          responseData=JSON.parse(data);
           console.log(responseData);
           // console.log(data);

           // alert(data);


               $('[name^=catagory_name]')
               .empty()
               .append('<option selected="selected" value="">-Select -</option>');

           for (index = 0; index < responseData.length; ++index) {
               $('[name^=catagory_name]').append(
                '<option value="'+responseData[index]['cat_id']+'">'+responseData[index]['catagory_name']+'</option>'
              );   
            }  
        }
      });
     });
 

	$(document).on('change','#catagory_name', function()
                { 
     var thisSelf=$(this);
    // alert(thisSelf);
    var catagory_name=$('#catagory_name').val();
    // alert(catagory_name);

                  $.ajax({
        type:"POST",
        url: "{{url('/')}}/admin/get/subcatagory",
        data:{
          "_token": "{{ csrf_token() }}",
          catagory_name : catagory_name,
        },
        dataType : 'html',
        cache: false,
        success: function(data){
          responseData=JSON.parse(data);
           console.log(responseData);
           // console.log(data);

           // alert(data);


               $('[name^=subcatagory_name]')
               .empty()
               .append('<option selected="selected" value="">-Select -</option>');

           for (index = 0; index < responseData.length; ++index) {
               $('[name^=subcatagory_name]').append(
                '<option value="'+responseData[index]['subcat_id']+'">'+responseData[index]['subcatagory_name']+'</option>'
              );   
            }  
        }
      });
     });

	// $(document).on('change','#subcatagory_name', function()
 //                { 
 //    var subcatagory_name=$('#subcatagory_name').val();
 //    alert(subcatagory_name);
 //     });


			
		</script>
	
	@endsection
 