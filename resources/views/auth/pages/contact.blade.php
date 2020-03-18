@extends('frontLayouts.themelayout')

    @section('title')
        FAQ | Moseva
    @endsection

    @section('content')

		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="{{ asset('assets/images/banners/banner2.jpg') }}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Contact Us</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="/">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Breadcrumb-->

        <!--Contact-->
		<div class="sptb bg-white mb-0 pb-0">
			<div class="container">
				<div class="row">
				    <div class="col-lg-5 col-xl-4  col-md-12  d-block mb-7 m10">
						<div class="row text-white">
							<div class="col-12 mb-5">
								<div class="support-service bg-primary br-2 mb-4 mb-xl-0">
									<i class="fa fa-phone"></i>
									<h6>+91 9583-255-155</h6>
									<P>Free Support!</P>
								</div>
							</div>
							<div class="col-12 mb-5">
								<div class="support-service bg-secondary br-2 mb-4 mb-xl-0">
									<i class="fa fa-clock-o"></i>
									<h6>Mon-Sat(10:00-19:00)</h6>
									<p>Working Hours!</p>
								</div>
							</div>
							<div class="col-12">
								<div class="support-service bg-warning br-2">
									<i class="fa fa-envelope-o"></i>
									<h6>info@moseva.com</h6>
									<p>Support us!</p>
								</div>
							</div>
						</div>
					</div>
				    <div class="col-lg-7 col-xl-8 col-md-12 d-block m10">
						<div class="single-page" >
							<div class="col-lg-12  col-md-12 mx-auto d-block">
								<div class="wrapper wrapper2">
									<div class="card mb-0">
										<div class="card-body">
											<div class="form-group">
												<input type="text" class="form-control" id="name1" placeholder="Your Name">
											</div>
											<div class="form-group">
												<input type="email" class="form-control" id="email" placeholder="Email Address">
											</div>
											<div class="form-group">
												<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
											</div>
											<a href="#" class="btn btn-primary">Send Message</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Contact-->

	@endsection