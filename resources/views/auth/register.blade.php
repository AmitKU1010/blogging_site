@extends('frontLayouts.themelayout')

@section('title')
    New Registration | Moseva
@endsection

@section('content')

    <!--Sliders Section-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="{{ asset('assets/images/banners/banner2.jpg') }}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">New Registration</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Sliders Section-->

    <!--Register-Section-->
    <section class="sptb">
        <div class="container customerpage">
            <div class="row">

                <div class="single-page" >
                    <div class="col-lg-6 col-xl-5 col-md-6 d-block mx-auto m9">
                        <div class="wrapper wrapper2">

                            <form  method="POST" action="{{ route('register') }}" class="card-body signup_form" tabindex="500">
                                @csrf
                                <h3>{{ __('Register') }}</h3>
                                <div class="phone_number first_step">
                                    <input id="phone_number" type="text" name="phone_number" required>
                                    <label for="phone_number">{{ __('Email address or Phone Number') }}</label>
                                </div>
                                <div class="otp second_step">
                                    <input id="otp" type="number" name="otp" required>
                                    <label for="otp">{{ __('Otp') }}</label>
                                </div>
                                <h4 class="error_otp"></h4>

                                {{--<div class="mail second_step">
                                    <input id="email" value="{{ old('email') }}" type="email" name="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
                                    @endif

                                    <label for="email">{{ __('Email Address') }} *</label>
                                </div>--}}
                                   
                                <div class="passwd second_step">
                                    <input id="password" type="password" name="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
                                    @endif

                                    <label for="password">{{ __('Password') }}</label>
                                </div>



                                <div class="passwd second_step">
                                    <input id="password-confirm" type="password" name="password_confirmation" required>
                                    <label for="password-confirm">{{ __('Re-enter Password') }}</label>
                                </div>
                                <div class="button">
                                    <button type="button" class="btn btn-primary btn-block first_step_submit_button first_step">{{ __('Register') }}</button>
                                </div>
                                <div class="submit">
                                    <button type="submit" class=" otp btn btn-primary btn-block second_step second_step_submit">{{ __('Register') }}</button>
                                </div>

                                <p class="mb-2"><a href="#" >Term and Conditions</a></p>

                                <p class="text-dark mb-0">Already have an account?<a href="{{route('login')}}" class="text-primary ml-1"> Log In</a></p>
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
    </section>
    <!--/Login-Section-->

@endsection
@section('script')
    <script>
        $('.second_step').hide();
        $(".first_step_submit_button").click(function() {
            var mobile = $("#phone_number").val()
            $.ajax({
                type:'get',
                url:'getotp',
                data: { phone_number: mobile} ,
                success:function(data) {
                    if(data.response =="True"){
                        localStorage.setItem("otp", data.otp);

                        $('.first_step').hide();
                        $('.otp').show();

                        //$('.second_step').show();
                    }
                    else {
                        alert('Mobile Number is already registered')
                    }
                }
            });
       /*     $('.signup_form').submit(function (e) {
                e.preventDefault()
                //var otp_verify = $.trim(get_otp);

                var user_otp = $('#otp').val()
                var otp = localStorage.getItem('otp');
                //alert(user_otp)
                //alert(otp)
                if(user_otp == otp){
                    $('.signup_form').submit();
                    localStorage.removeItem('otp');
                }
            })*/
        });


        $(".second_step_submit").click(function() {
            var user_otp = $('#otp').val()
            var otp = localStorage.getItem('otp');
            //alert(user_otp)
            //alert(otp)
            if(user_otp == otp){
                $('.second_step').show();
                $(".second_step_submit").removeClass('second_step_submit');
                //$('.signup_form').submit();
                localStorage.removeItem('otp');
                $(".error_otp").html('')

            }
            else {
                //alert('invalid Otp')
                //$(".error_otp").html('Invalid Otp')
            }

        });
            /*     $('.signup_form').submit(function (e) {
                     e.preventDefault()
                     //var otp_verify = $.trim(get_otp);

                     var user_otp = $('#otp').val()
                     var otp = localStorage.getItem('otp');
                     //alert(user_otp)
                     //alert(otp)
                     if(user_otp == otp){
                         $('.signup_form').submit();
                         localStorage.removeItem('otp');
                     }
                 })*/
 


    </script>
@endsection
