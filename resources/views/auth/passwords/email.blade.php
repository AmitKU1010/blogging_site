@extends('frontLayouts.themelayout')

    @section('title')
        Forgot Password | Moseva
    @endsection

    @section('content')

		<!--Sliders Section-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="{{ asset('assets/images/banners/banner2.jpg') }}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Forgot Password</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="/">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Forgot Password</li>
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
						<div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto m9">
							<div class="wrapper wrapper2 box-shadow-0">
								<form method="POST" action="{{ route('password.email') }}" class="card-body" tabindex="500">
                                    @csrf

                                    <h3>{{ __('Forgot Password') }}</h3>

									<div class="mail">
										<input id="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" type="email" name="email" required autofocus>
                                        
                                        @if ($errors->has('email'))
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
										
                                        <label>{{ __('Email Address') }}</label>
									</div>

									<div class="submit">
										<button type="submit" class="btn btn-primary btn-block">{{ __('Send') }}</button>
									</div>

									<p class="text-dark mb-0">
                                        Remember Password?
										<a href="{{ route('login') }}" class="text-primary ml-1">Log In</a>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Login-Section-->

	@endsection
