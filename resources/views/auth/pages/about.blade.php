@extends('frontLayouts.themelayout')

    @section('title')
        About Our Family | Moseva
    @endsection

    @section('content')

		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="{{ asset('assets/images/banners/banner2.jpg') }}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">About MoSeva</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="/">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">About Our Family</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Breadcrumb-->

        <!--section-->
		<section class="sptb">
			<div class="container">
				<div class="text-justify">
					<h2 class="mb-4">Why MoSeva?</h2>
					<h4 class="leading-normal">Majority have suffered alteration in some form, by injected humor</h4>
					<p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority have suffered  by injected humour, or randomised words which don't look even slightly believable.
					If you are going to use a passage of Lorem Ipsum, you need to as necessary All the Lorem Ipsum generators on the Internet tend to repeat</p>
					<p class="leading-normal">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					<p class="leading-normal mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</section>
		<!--/section-->

		<!--How to work-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>How It Works?</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="">
							<div class="mb-lg-0 mb-4">
								<div class="service-card text-center">
									<div class="bg-purple-transparent icon-bg box-shadow icon-service text-purple about">
										<img src="../assets/images/products/about/employees.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Register</h4>
										<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="">
							<div class="mb-lg-0 mb-4">
								<div class="service-card text-center">
									<div class="bg-purple-transparent icon-bg box-shadow icon-service text-purple about">
										<img src="../assets/images/products/about/megaphone.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Create Account</h4>
										<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="">
							<div class="mb-sm-0 mb-4">
								<div class="service-card text-center">
									<div class="bg-purple-transparent icon-bg box-shadow icon-service text-purple about">
										<img src="../assets/images/products/about/pencil.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Add Posts</h4>
										<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="">
							<div class="">
								<div class="service-card text-center">
									<div class="bg-purple-transparent icon-bg box-shadow icon-service text-purple about">
										<img src="../assets/images/products/about/coins.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Get Earnings</h4>
										<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/How to work-->

		<!--section-->
		<section class="sptb">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Why Choose Us?</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div class="row ">
					<div class="col-md-6 col-lg-4 features">
						<div class="card">
							<div class="card-body text-center">
								<div class="feature">
									<div class="fa-stack fa-lg  fea-icon bg-success mb-3">
										<i class="fa fa-bullhorn  text-white"></i>
									</div>
									<h3>Provide Free Ads</h3>
									<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 features">
						<div class="card">
							<div class="card-body text-center">
								<div class="feature">
									<div class="fa-stack fa-lg  fea-icon bg-primary mb-3">
										<i class="fa fa-heart  text-white"></i>
									</div>
									<h3>Best Ad Ratings</h3>
									<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 features">
						<div class="card">
							<div class="card-body text-center">
								<div class="feature">
									<div class="fa-stack fa-lg  fea-icon bg-secondary mb-3">
										<i class="fa fa-bookmark  text-white"></i>
									</div>
									<h3>Provide Post Features</h3>
									<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 features">
						<div class="card mb-lg-0">
							<div class="card-body text-center">
								<div class="feature">
									<div class="fa-stack fa-lg  fea-icon bg-warning mb-3">
										<i class="fa fa-line-chart   text-white"></i>
									</div>
									<h3>See  your Ad Progress</h3>
									<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 features">
						<div class="card mb-lg-0 mb-md-0">
							<div class="card-body text-center">
								<div class="feature">
									<div class="fa-stack fa-lg  fea-icon bg-danger mb-3">
										<i class="fa fa-handshake-o   text-white"></i>
									</div>
									<h3>User Friendly</h3>
									<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 features">
						<div class="card mb-0">
							<div class="card-body text-center">
								<div class="feature">
									<div class="fa-stack fa-lg  fea-icon bg-info mb-3">
										<i class="fa fa-phone  text-white"></i>
									</div>
									<h3>24/7 Support</h3>
									<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/section-->

		<!--section-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Our Team</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div class="row">
					<div class="col-xl-4 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="team-section text-center">
									<div class="team-img">
										<img src="../assets/images/faces/male/1.jpg" class="img-thumbnail rounded-circle alt=" alt="">
									</div>
									<h4 class="font-weight-bold dark-grey-text mt-4">Narayan Shaw</h4>
									<h6 class="font-weight-bold blue-text ">Web Designer</h6>
									<p class="font-weight-normal dark-grey-text">
									<i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
									<div class="text-warning">
										<i class="fa fa-star"> </i>
										<i class="fa fa-star"> </i>
										<i class="fa fa-star"> </i>
										<i class="fa fa-star"> </i>
										<i class="fa fa-star-half-full"> </i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="team-section text-center">
									<div class="team-img">
										<img src="../assets/images/faces/female/1.jpg" class="img-thumbnail rounded-circle alt=" alt="">
									</div>
									<h4 class="font-weight-bold dark-grey-text mt-4">Shiba Bhai</h4>
									<h6 class="font-weight-bold blue-text ">Web Developer</h6>
									<p class="font-weight-normal dark-grey-text">
									<i class="fa fa-quote-left pr-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem ullam quis nostrum  corporis suscipit laboriosam, nisi ut aliquid commodi.</p>
									<div class="text-warning">
										<i class="fa fa-star"> </i>
										<i class="fa fa-star"> </i>
										<i class="fa fa-star"> </i>
										<i class="fa fa-star"> </i>
										<i class="fa fa-star"> </i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="team-section text-center">
									<div class="team-img">
										<img src="../assets/images/faces/male/2.jpg" class="img-thumbnail rounded-circle alt=" alt="">
									</div>
									<h4 class="font-weight-bold dark-grey-text mt-4">Rassel</h4>
									<h6 class="font-weight-bold blue-text ">Photographer</h6>
									<p class="font-weight-normal dark-grey-text">
									<i class="fa fa-quote-left pr-2"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
									<div class="text-warning">
										<i class="fa fa-star"> </i>
										<i class="fa fa-star"> </i>
										<i class="fa fa-star"> </i>
										<i class="fa fa-star"> </i>
										<i class="fa fa-star-o"> </i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/section-->

	@endsection