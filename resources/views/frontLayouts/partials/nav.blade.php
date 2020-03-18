	<!--Loader-->
	<div id="global-loader">
		<img src="{{ asset('assets/images/products/products/moseva-loader.png') }}" class="loader-img floating" alt="">
	</div>

	@if (Route::has('login'))
		@auth
			<!--Topbar-->
			<div class="header-main">
				<div class="top-bar">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-8 col-sm-4 col-7">
								<div class="top-bar-left d-flex">
									<!-- Authentication Links -->
									@if (Route::has('login'))
										@auth
											<div class="clearfix">
												<ul class="contact border-right">
													<li class="mr-5">
														<a href="#!" class="callnumber text-dark">
															<span class="text-muted">
																	<i class="fa fa-map-marker mr-1" aria-hidden="true"></i> India
															</span>
														</a>
													</li>
												</ul>
											</div>

											<div class="clearfix">
												<ul class="contact border-right">
													<li class="mr-5">
														<a href="help.html" class="callnumber text-dark">
															<span class="text-muted">
																	<i class="fa fa-info mr-1" aria-hidden="true"></i> Help center
															</span>
														</a>
													</li>
												</ul>
											</div>

											<div class="clearfix">
												<ul class="contact border-right">
													<li class="mr-5">
														<a href="#!" class="callnumber text-dark">
															<span class="text-muted">
																	<i class="fa fa-history mr-1" aria-hidden="true"></i> Re-booking
															</span>
														</a>
													</li>
												</ul>
											</div>

											<div class="clearfix">
												<ul class="contact border-right">
													<li class="mr-5">
														<a href="#!" class="callnumber text-dark">
															<span class="text-muted">
																	<i class="fa fa-history mr-1" aria-hidden="true"></i> My Booking
															</span>
														</a>
													</li>
												</ul>
											</div>
										@else
											<div class="clearfix">
												<ul class="contact border-right">
													<li class="mr-5">
														<a href="#!" class="callnumber text-dark">
															<span class="text-muted">
																	<i class="fa fa-map-marker mr-1" aria-hidden="true"></i> India
															</span>
														</a>
													</li>
												</ul>
											</div>
										@endauth
									@endif									
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-sm-8 col-5">
								<div class="top-bar-right">
									<ul class="custom">
										<!-- Authentication Links -->
										@if (Route::has('login'))
											@auth
												<li class="dropdown">
													<a href="#" class="text-dark" data-toggle="dropdown">
														<i class="fa fa-home mr-1"></i>
														<span>My Account</span>
														<i class="fa fa-caret-down mr-1"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
														<a href="{{ url('/home') }}" class="dropdown-item" >
															<i class="dropdown-icon icon icon-settings"></i> Dashboard
														</a>

														<a class="dropdown-item" href="#">
															<i class="dropdown-icon icon icon-bell"></i> Notifications
														</a>

														<a href="#" class="dropdown-item" >
															<i class="dropdown-icon  icon icon-settings"></i> My Booking
														</a>

														<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
																document.getElementById('logout-form').submit();">
															<i class="dropdown-icon icon icon-power"></i> Log out
														</a>

														<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
															{{ csrf_field() }}
														</form>
													</div>
												</li>
											@else
												<li>
													<a href="#" class="text-dark">
														<i class="fa fa-user-plus mr-1" aria-hidden="true"></i>
														<span>Become A Partner</span>
													</a>
												</li>

												<li>
													<a href="{{ route('login') }}" class="text-dark">
														<i class="fa fa-sign-in mr-1"></i> 
														<span>Login</span>
													</a>
												</li>

												<li>
													<a href="{{ route('register') }}" class="text-dark">
														<i class="fa fa-user mr-1"></i> 
														<span>Register</span>
													</a>
												</li>
											@endauth
										@endif
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Mobile Header -->
				<div class="horizontal-header clearfix ">
					<div class="container">
						<a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>

						<span class="smllogo">
							<a href="/">
								<img src="{{ asset('assets/images/brand/moseva-mobile-logo.png') }}" width="38" alt="Moseva"/>
							</a>
						</span>
					</div>
				</div>
				<!-- /Mobile Header -->

				<div class="horizontal-main bg-dark-transparent clearfix">
					<div class="horizontal-mainwrapper container clearfix">
						<div class="desktoplogo">
							<a href="/"><img src="{{ asset('assets/images/brand/moseva-mobile-logo.png') }}" alt="Moseva"></a>
						</div>

						<div class="desktoplogo-1">
							<a href="/"><img src="{{ asset('assets/images/brand/moseva-mobile-logo.png') }}" width="50" alt="Moseva"></a>
						</div>

						<!--Nav-->
						<nav class="horizontalMenu clearfix d-md-flex">
							<ul class="horizontalMenu-list">
								<li aria-haspopup="true"><a href="/">Home</a></li>
								<li aria-haspopup="true"><a href="#">Categories <span class="fa fa-caret-down m-0"></span></a>
									<div class="horizontal-megamenu clearfix">
										<div class="container">
											<div class="megamenu-content">
												<div class="row">
													<ul class="col link-list">
														<li class="title">Categorie 1</li>
														<li>
															<a href="#!">Electrician</a>
														</li>
														<li>
															<a href="#!">Solar</a>
														</li>
														<li>
															<a href="#!">Web Design & Development</a>
														</li>
														<li>
															<a href="#!">Interior Design</a>
														</li>
													</ul>
													<ul class="col link-list">
														<li class="title">Categorie 2</li>
														<li>
															<a href="#!">Painter</a>
														</li>
														<li>
															<a href="#!">Photo Shooting</a>
														</li>
														<li>
															<a href="#!">Plumber</a>
														</li>
														<li>
															<a href="#!">Event Management</a>
														</li>
													</ul>
													<ul class="col link-list">
														<li class="title">Categorie 3</li>
														<li>
															<a href="#!">House Cleaning</a>
														</li>
														<li>
															<a href="#!">Civil Work</a>
														</li>
														<li>
															<a href="#!">Mover & Packer</a>
														</li>
														<li>
															<a href="#!">Carpenter</a>
														</li>
													</ul>
													<ul class="col link-list">
														<li class="title">Categorie 4</li>
														<li>
															<a href="#!">Beauty & SPA</a>
														</li>
														<li>
															<a href="#!">Tour and Travel</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</nav>
						<!--Nav-->
					</div>
				</div>
			</div>
		@else
			<!-- Popup Login-->
			<div id="myModal" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Login</h5>

							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>

						<div class="modal-body">
							<div class="single-page customerpage " >
								<div class="wrapper wrapper2 box-shadow-0">
									<form id="login" method="POST" action="{{ route('login') }}" class="card-body" tabindex="500">
										@csrf
										<div class="mail">
											<input id="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" type="email" name="email" required autofocus>
											
											@if ($errors->has('email'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
											@endif
											
											<label>{{ __('Email Address') }}</label>
										</div>

										<div class="passwd">
											<input id="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required>
											
											@if ($errors->has('password'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('password') }}</strong>
												</span>
											@endif
											
											<label>{{ __('Password') }}</label>
										</div>

										<div class="form-group">
											<label class="custom-control custom-checkbox">
												<input class="custom-control-input" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
												<span class="custom-control-label ml-4 text-dark">{{ __('Remember Me') }}</span>
											</label> 
										</div> 
									

										<br>

										<div class="submit">
											<button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
										</div>

										@if (Route::has('password.request'))
											<a class="mb-2" href="{{ route('password.request') }}" >
												{{ __('Forgot Your Password?') }}
											</a>
										@endif

										<p class="text-dark mb-0">
											Don't have account?
											<a href="{{ route('register') }}" class="text-primary ml-1">Sign UP</a>
										</p>
									</form>

									<hr class="divider">

									<div class="card-body">
										<div class="text-center">
											<div class="btn-group hover-facebook">
												<a href="https://www.facebook.com/" class="btn btn-icon mr-2">
													<span class="fa fa-facebook"></span>
													Connect with Facebook
												</a>
											</div>
											<div class="btn-group hover-google">
												<a href="https://www.google.com/gmail/" class="btn mr-2 btn-icon">
													<span class="fa fa-google"></span>
													Connect with Google
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Popup Login-->

			<!--Topbar-->
			<div class="header-main">
				<div class="top-bar">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-8 col-sm-4 col-7">
								<div class="top-bar-left d-flex">
									<!-- Authentication Links -->
									@if (Route::has('login'))
										@auth
											<div class="clearfix">
												<ul class="contact border-right">
													<li class="mr-5">
														<a href="#!" class="callnumber text-dark">
															<span class="text-muted">
																	<i class="fa fa-map-marker mr-1" aria-hidden="true"></i> India
															</span>
														</a>
													</li>
												</ul>
											</div>

											<div class="clearfix">
												<ul class="contact border-right">
													<li class="mr-5">
														<a href="help.html" class="callnumber text-dark">
															<span class="text-muted">
																	<i class="fa fa-info mr-1" aria-hidden="true"></i> Help center
															</span>
														</a>
													</li>
												</ul>
											</div>

											<div class="clearfix">
												<ul class="contact border-right">
													<li class="mr-5">
														<a href="#!" class="callnumber text-dark">
															<span class="text-muted">
																	<i class="fa fa-history mr-1" aria-hidden="true"></i> Re-booking
															</span>
														</a>
													</li>
												</ul>
											</div>

											<div class="clearfix">
												<ul class="contact border-right">
													<li class="mr-5">
														<a href="#!" class="callnumber text-dark">
															<span class="text-muted">
																	<i class="fa fa-history mr-1" aria-hidden="true"></i> My Booking
															</span>
														</a>
													</li>
												</ul>
											</div>
										@else
											<div class="clearfix">
												<ul class="contact border-right">
													<li class="mr-5">
														<a href="#!" class="callnumber text-dark">
															<span class="text-muted">
																	<i class="fa fa-map-marker mr-1" aria-hidden="true"></i> India
															</span>
														</a>
													</li>
												</ul>
											</div>
										@endauth
									@endif									
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-sm-8 col-5">
								<div class="top-bar-right">
									<ul class="custom">
										<!-- Authentication Links -->
										@if (Route::has('login'))
											@auth
												<li class="dropdown">
													<a href="#" class="text-dark" data-toggle="dropdown">
														<i class="fa fa-home mr-1"></i>
														<span>My Account</span>
														<i class="fa fa-caret-down mr-1"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
														<a href="{{ url('/home') }}" class="dropdown-item" >
															<i class="dropdown-icon icon icon-settings"></i> Dashboard
														</a>

														<a class="dropdown-item" href="#">
															<i class="dropdown-icon icon icon-bell"></i> Notifications
														</a>

														<a href="#" class="dropdown-item" >
															<i class="dropdown-icon  icon icon-settings"></i> My Booking
														</a>

														<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
																document.getElementById('logout-form').submit();">
															<i class="dropdown-icon icon icon-power"></i> Log out
														</a>

														<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
															{{ csrf_field() }}
														</form>
													</div>
												</li>
											@else
												<li>
													<a href="#" class="text-dark">
														<i class="fa fa-user-plus mr-1" aria-hidden="true"></i>
														<span>Become A Partner</span>
													</a>
												</li>

												<li>
													<a href="{{ route('login') }}" class="text-dark">
														<i class="fa fa-sign-in mr-1"></i> 
														<span>Login</span>
													</a>
												</li>

												<li>
													<a href="{{ route('register') }}" class="text-dark">
														<i class="fa fa-user mr-1"></i> 
														<span>Register</span>
													</a>
												</li>
											@endauth
										@endif
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Mobile Header -->
				<div class="horizontal-header clearfix ">
					<div class="container">
						<a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>

						<span class="smllogo">
							<a href="/">
								<img src="{{ asset('assets/images/brand/moseva-mobile-logo.png') }}" width="38" alt="Moseva"/>
							</a>
						</span>
					</div>
				</div>
				<!-- /Mobile Header -->

				<div class="horizontal-main bg-dark-transparent clearfix">
					<div class="horizontal-mainwrapper container clearfix">
						<div class="desktoplogo">
							<a href="/"><img src="{{ asset('assets/images/brand/moseva-mobile-logo.png') }}" alt="Moseva"></a>
						</div>

						<div class="desktoplogo-1">
							<a href="/"><img src="{{ asset('assets/images/brand/moseva-mobile-logo.png') }}" width="50" alt="Moseva"></a>
						</div>

						<!--Nav-->
						<nav class="horizontalMenu clearfix d-md-flex">
							<ul class="horizontalMenu-list">
								<li aria-haspopup="true"><a href="/">Home</a></li>
								<li aria-haspopup="true"><a href="#">Categories <span class="fa fa-caret-down m-0"></span></a>
									<div class="horizontal-megamenu clearfix">
										<div class="container">
											<div class="megamenu-content">
												<div class="row">
													<ul class="col link-list">
														<li class="title">Categorie 1</li>
														<li>
															<a href="#!">Electrician</a>
														</li>
														<li>
															<a href="#!">Solar</a>
														</li>
														<li>
															<a href="#!">Web Design & Development</a>
														</li>
														<li>
															<a href="#!">Interior Design</a>
														</li>
													</ul>
													<ul class="col link-list">
														<li class="title">Categorie 2</li>
														<li>
															<a href="#!">Painter</a>
														</li>
														<li>
															<a href="#!">Photo Shooting</a>
														</li>
														<li>
															<a href="#!">Plumber</a>
														</li>
														<li>
															<a href="#!">Event Management</a>
														</li>
													</ul>
													<ul class="col link-list">
														<li class="title">Categorie 3</li>
														<li>
															<a href="#!">House Cleaning</a>
														</li>
														<li>
															<a href="#!">Civil Work</a>
														</li>
														<li>
															<a href="#!">Mover & Packer</a>
														</li>
														<li>
															<a href="#!">Carpenter</a>
														</li>
													</ul>
													<ul class="col link-list">
														<li class="title">Categorie 4</li>
														<li>
															<a href="#!">Beauty & SPA</a>
														</li>
														<li>
															<a href="#!">Tour and Travel</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</nav>
						<!--Nav-->
					</div>
				</div>
			</div>
		@endauth
	@endif

	

	