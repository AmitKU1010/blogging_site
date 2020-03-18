@extends('frontLayouts.themelayout')

    @section('title')
        User Login | Moseva
    @endsection

    @section('content')

		<!--Sliders Section-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="{{ asset('assets/images/banners/banner2.jpg') }}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Vendor Login</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="/">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Login</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Sliders Section-->

		<!--Login-Section-->
		<section class="sptb">
			<div class="container customerpage">
				<div class="row">
					<div class="single-page" >
						<div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
							<div class="wrapper wrapper2">
                                
								<form  method="POST" action="{{ route('login') }}" class="card-body" tabindex="500">
                                    @csrf

                                    <h3>{{ __('Login') }}</h3>

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
										
                                        <label for="password">{{ __('Password') }}</label>
									</div>

                                    <div class="form-group form-check">
                                        <input id="remember" type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>

									    <label class="form-check-label text-dark" for="remember">{{ __('Remember Me') }}</label>
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

									<!-- <p class="text-dark mb-0">
										Don't have account?
										<a href="{{ route('register') }}" class="text-primary ml-1">Sign UP</a>
									</p> -->
								</form>
								<!-- <hr class="divider">
								<div class="card-body">
									<div class="text-center">
										<div class="btn-group">
											<a href="https://www.facebook.com/" class="btn btn-icon mr-2 brround">
												<span class="fa fa-facebook"></span>
											</a>
										</div>
										<div class="btn-group">
											<a href="https://www.google.com/gmail/" class="btn  mr-2 btn-icon brround">
												<span class="fa fa-google"></span>
											</a>
										</div>
										<div class="btn-group">
											<a href="https://twitter.com/" class="btn  btn-icon brround">
												<span class="fa fa-twitter"></span>
											</a>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Login-Section-->

	@endsection