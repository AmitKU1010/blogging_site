@extends('frontLayouts.themelayout')

    @section('title')
        MoSeva | Service Provider Company in India
    @endsection

    @section('content')
        <?php
        //$orderId = 12;
        //$orderAmount = 100;

        //echo $orderId . "|" . $orderAmount;
        $host = "http://moseva.com";
        $notifyUrl = $host. "/payment-checkout";
        $returnUrl = $host. "/payment-checkout";

        $orderDetails = array();
        $orderDetails["notifyUrl"] = $notifyUrl;
        $orderDetails["returnUrl"] = $returnUrl;

        $orderDetails["customerName"] = auth()->user()->name;
        $orderDetails["customerEmail"] = auth()->user()->email;
        $orderDetails["customerPhone"] = 7008712917;
            $rand = rand(10000,99999);
        $orderDetails["orderId"] = $rand;
        $orderDetails["orderAmount"] = $single_service_data->offer_price;
        $orderDetails["orderNote"] = "hello";
        $orderDetails["orderCurrency"] = "INR";

        $orderDetails["appId"] = "31081f56c9c0b895ac8d5518d18013";

        $orderDetails["signature"] = generateSignature($orderDetails);

        //echo json_encode($orderDetails);

        function generateSignature($postData){
            $secretKey = "526e032313a429b52394d13dda033a8194d0bf7d";
            ksort($postData);
            $signatureData = "";
            foreach ($postData as $key => $value){
                $signatureData .= $key.$value;
            }
            $signature = hash_hmac('sha256', $signatureData, $secretKey,true);
            $signature = base64_encode($signature);
            return $signature;
        }
        ?>
      <!--Sliders Section-->
		<div>
			<div class=" cover-image sptb-1 bg-background" data-image-src="../assets/images/banners/banner1.jpg">
				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-9 col-lg-9 col-md-12 d-block mx-auto">
								<div class="search-background bg-transparent">
									<div class="form row no-gutters ">
										<div class="form-group col-xl-6 col-lg-6 col-md-12 mb-0 bg-white">
											<input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0" id="text4" placeholder="Search best services for you...">
										</div>
										<div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg  mb-0 bg-white">
											<select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category">
												<optgroup label="Categories">
													<option>Categorie</option>
													<option value="1">Private</option>
													<option value="2">Software</option>
													<option value="3">Banking</option>
													<option value="4">Finaces</option>
													<option value="5">Corporate</option>
													<option value="6">Driver</option>
													<option value="7">Sales</option>
												</optgroup>
											</select>
										</div>
										<div class="col-xl-3 col-lg-3 col-md-12 mb-0">
											<a href="#" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Search Here</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /header-text -->
			</div>
		</div>
		<!--/Sliders Section-->

		<!--Breadcrumb-->
		<div class="bg-white border-bottom">
			<div class="container">
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Service Name</li>
					</ol>
				</div>
			</div>
		</div>
		<!--/Breadcrumb-->


		<!--Single Service Content-->
		<section class="sptb">
			<div class="container">
				<div class="row">

                        @foreach($single_service as $single_services)
					<!--Service list-->
					<div class="col-xl-9 col-lg-8 col-md-12">
						<div class="tab-pane active" id="tab-11">
							<div class="card overflow-hidden">
								<div class="d-md-flex">
									<div class="item-card9-img">
										<!-- <div class="arrow-ribbon bg-primary">Rent</div> -->
										<div class="item-card9-imgs">
											<img src="{{ URL::asset('/images/'.$single_services->images) }}" alt="img" height="220px" class="cover-image">
				 						</div>
									</div>

									<div class="card border-0 mb-0">
						 				<div class="card-body ">
											<div class="item-card9">
												<a href="single_category.html" class="bg-cyan p-1 text-white">{{$single_services->service_name}}</a>

												<br><br>

												<a href="#!" class="text-dark">
													<h4 class="font-weight-semibold mt-1">
														{{$single_services->service_name}}
													</h4>
												</a>

												<p class="mb-0 leading-tight">{{$single_services->description}}</p>
											</div>
										</div>

										<div class="card-footer pt-4 pb-4">
											<div class="item-card9-footer d-flex">
												<div class="item-card9-cost">
													<h4 class="text-dark font-weight-semibold mb-0 mt-0">{{$single_services->offer_price}}</h4>
												</div>
                                                <form id="redirectForm" method="post" action="https://www.cashfree.com/checkout/post/submit">
                                                    <input type="submit">
                                                    <input type="hidden" name="appId" value="<?php echo $orderDetails["appId"] ?>"/>
                                                    <input type="hidden" name="orderId" value="<?php echo $orderDetails["orderId"] ?>"/>
                                                    <input type="hidden" name="orderAmount" value="<?php echo $orderDetails["orderAmount"] ?>"/>
                                                    <input type="hidden" name="orderCurrency" value="<?php echo $orderDetails["orderCurrency"] ?>"/>
                                                    <input type="hidden" name="orderNote" value="<?php echo $orderDetails["orderNote"] ?>"/>
                                                    <input type="hidden" name="customerName" value="<?php echo $orderDetails["customerName"] ?>"/>
                                                    <input type="hidden" name="customerEmail" value="<?php echo $orderDetails["customerEmail"] ?>"/>
                                                    <input type="hidden" name="customerPhone" value="<?php echo $orderDetails["customerPhone"] ?>"/>
                                                    <input type="hidden" name="returnUrl" value="<?php echo $orderDetails["returnUrl"] ?>"/>
                                                    <input type="hidden" name="notifyUrl" value="<?php echo $orderDetails["notifyUrl"] ?>"/>
                                                    <input type="hidden" name="signature" value="<?php echo $orderDetails["signature"] ?>"/>
                                                </form>

                                                <div class="ml-auto">
													<div class="rating-stars block">
														<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="expanel expanel-default mt-4">
									<div class="expanel-body">
										<div class="container">
											<hr>
											<!-- FAQ Section -->
											<h3>FAQ</h3>
											<!-- Accordion begin -->
											<ul class="demo-accordion accordionjs m-0" data-active-index="false">
												<!-- Section 1 -->
												<li>
													<div><h3></h3></div>
													<div>
														{{$single_services->faq}}
													</div>
												</li>


											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					@endforeach

					<!--Right Side Content-->
					<div class="col-xl-3 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Categories</h3>
							</div>
							<div class="card-body">
								<div class="" id="container">
									<div class="filter-product-checkboxs">
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Computer<span class="label label-secondary float-right">14</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Services<span class="label label-secondary float-right">22</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox3" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Jobs<span class="label label-secondary float-right">78</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox4" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">RealEstates<span class="label label-secondary float-right">35</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox5" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Clothing<span class="label label-secondary float-right">23</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox6" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Home & Garden<span class="label label-secondary float-right">14</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Beauty & Spa<span class="label label-secondary float-right">45</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Restaurant<span class="label label-secondary float-right">34</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Travel<span class="label label-secondary float-right">12</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Event<span class="label label-secondary float-right">18</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Health & fitness<span class="label label-secondary float-right">02</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Electronics<span class="label label-secondary float-right">15</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Mobile<span class="label label-secondary float-right">32</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Vehicle<span class="label label-secondary float-right">23</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Education<span class="label label-secondary float-right">19</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Constructions<span class="label label-secondary float-right">12</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Pets & Animals<span class="label label-secondary float-right">05</span></a>
											</span>
										</label>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!--Right Side Content-->
				</div>
			</div>
		</section>
		<!--Single Service Content -->


		<!--Related Services-->
<section class="sptb bg-transparent mb-3">
			<div class="container">
				<div class="section-title center-block text-left">
					<h3>Related Services</h3>
				</div>

				<div id="myCarousel2" class="owl-carousel owl-carousel-icons2">
					<!-- Wrapper for carousel items -->

					 @if(count($Product) > 0)
                        @foreach($Product as $Products)

					<div class="item">
						<div class="card mb-0">
							<div class="item-card7-imgs">
								<a href="{{ url('catagorylist/single_service', $Products->id) }}"></a>
								<img  class="img-circle" width="617px" height="264px" src="{{ URL::asset('/images/'.$Products->images) }}">
							</div>

							<div class="item-card7-overlaytext">
									<a href="{{ url('catagorylist/single_service', $Products->id) }}" class="text-white"> {{$Products->service_name}}</a>
							</div>

							<div class="card-body">
								<div class="item-card7-desc">
									<div class="item-card7-text">
										<a href="{{ url('catagorylist/single_service', $Products->id) }}" class="text-dark">
											<h4 class="">{{$Products->service_name}}</h4>
										</a>
									</div>

									<h4 class="mb-0 mt-3 btn btn-cyan btn-block h4">
										<del class="h6 text-white ml-2">{{$Products->price}} </del>
										{{$Products->offer_price}}
									</h4>

									<div class="product-5-rating text-right mt-1">
										Rating:
										<a href="#" class=""><i class="fa fa-star text-warning"></i></a>
										<a href="#" class=""><i class="fa fa-star text-warning"></i></a>
										<a href="#" class=""><i class="fa fa-star text-warning"></i></a>
										<a href="#" class=""><i class="fa fa-star text-warning"></i></a>
										<a href="#" class=""><i class="fa fa-star text-warning"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					 @endforeach
                       @endif
				</div>
			</div>
		</section>
		<!--/Related Services-->

        <?php


        ?>
    @endsection
