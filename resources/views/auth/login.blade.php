@include('blogging_ui.header')
<body>
     <!-- Header
    ================================================= -->
    <header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="index-register.html"><img src="images/logo.png" alt="logo" /></a> -->
            <h3 style="color: white;"><i>BLOGGING SITE</i></h3>
          </div>
 
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
            
              <li class="dropdown"><a href="newsfeed.html">HOME</a></li>
              <li class="dropdown"><a href="#">CONTACT</a></li>
              <li class="dropdown"><a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">LOGIN</a></li>
                <li class="dropdown"><a class="btn big-register" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">SIGNUP</a></li>

                <!-- <li class="dropdown"><a class="btn big-register" data-toggle="modal" href="#myModal">Choose Topics !</a></li> -->
                
                      

            <!--     <li class="dropdown"><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary py-2 px-4">Click Here !</button><li class="dropdown"> -->

            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->
 

 
    <!-- Top Banner
    ================================================= -->
    <section id="banner">
      <div class="container">

        <!-- Sign in Form
        ================================================= -->
 


        <!-- Sign in Ends
        ================================================= -->

                <!-- Sign Up Forms Starts
        ================================================= -->


           <div class="row">
          <div class="col-sm-5">
            <div class="intro-texts">
              
              <button class="btn btn-primary">Learn More</button>
            </div>
          </div>
         
        </div>




<!-- 
        <svg class="arrows hidden-xs hidden-sm">
          <path class="a1" d="M0 0 L30 32 L60 0"></path>
          <path class="a2" d="M0 20 L30 52 L60 20"></path>
          <path class="a3" d="M0 40 L30 72 L60 40"></path>
        </svg> -->
      </div>

              <!-- Sign Up Forms Starts
        ================================================= -->
    </section>
    <!-- Footer
    ================================================= -->


    <!-- login Signup -->

     <div class="container">
     <div class="modal fade login" id="loginModal">
          <div class="modal-dialog login animated">
              <div class="modal-content">
                 <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" align="center">Login with</h4>
                    </div>
                     
                    <div class="modal-body">
                        <div class="box"> 
                             <div class="contentt">
                                <div class="social">
                                    <a class="circle github" href="/login/twitter">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="{{ url('/login/google') }}">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="{{ url('/login/facebook') }}">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form  method="POST" action="{{ route('login') }}" class="card-body" tabindex="500">
                                    @csrf
 
                                    <input id="email" class="form-control" type="text" placeholder="Mobile Number" name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                   <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                                    </form>
                                </div>
                             </div>
                        </div>   

                           
                        <div class="box">
                            <div class="contentt registerBox" style="display:none;">
                             <div class="form">
                            
                             <form method="POST" action="{{ route('register') }}">
                                 @csrf
                                   <input id="name" class="form-control" type="text" placeholder="Full Name" name="name">

                                <input id="email2" class="form-control" type="text" placeholder="Mobile Number" name="email2">
                                <input id="password2" class="form-control" type="password" placeholder="Password" name="password2">
                               <!--  <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation"> -->
                                 <button type="submit" id="register-submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>
              </div>
          </div>
      </div>
    </div>
    <!-- login Signup -->
    <!-- choose catagories -->
    <!-- Select catagories -->
@include('blogging_ui.footer')


 
  



