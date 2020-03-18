@include('blogging_ui.header')
 
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
              <li class="dropdown"><a href="{{url('/')}}/user/newsfeed">HOME</a></li>
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
    <div class="row justify-content-center">  <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
            <div role="document" class="modal-dialog">
                <div class="modal-content" style="width: 800px;">
                    <div class="modal-header" style="width: 800px;">
                     <div class="main" style="padding-left: 0px;">


<h3><b><u>Choose Your Intrested Topics</u></b></h3>

<div id="myBtnContainer">
  <!-- <button class="btn active" onclick="filterSelection('all')"> Show all Topics</button> -->
 <!--  <button class="btn" onclick="filterSelection('nature')"> Topics</button>
  <button class="btn" onclick="filterSelection('cars')"> Tries</button>
  <button class="btn" onclick="filterSelection('people')"> Pins</button> -->
</div>
      
<!-- Portfolio Gallery Grid -->
<div class="row">
    <form method="post" action="{{url('/')}}/user/choosen_topic_store">
                                        {{csrf_field()}}
   @if(count($Category)>0)
     @foreach($Category as $Categorys)

  <div class="column nature">
    <div class="content">
      <img src="{{ URL::asset('/images/catagory_img/'.$Categorys->catagory_img) }}" style="width:100%;height: 194px;">
      <h4 style="text-align:center;">{{$Categorys->catagory_name}}</h4>

      <!-- hidden catagory -->
    <input type="hidden" name="catagory_name[]" value="{{$Categorys->id}}">
      <!-- hidden catagory -->


      <input type="text" readonly style="width:180px;margin-left: 30px;color: white;background-color: grey;text-align: center;" id="btn" class="btn-class" name="catagory_btn[]" value="Follow">
    </div>
  </div>


 
     @endforeach
     @endif
   
<!-- END GRID -->

 
<!-- END MAIN -->
</div>
                    </div>
                    <div class="modal-footer d-flex flex-column justify-content-center border-0">
                        <p class="text-muted">Please Follow Atleast Five Topics</p> <button type="submit" class="btn btn-primary">Next</button>
                    </div>
       </form>

                </div>
            </div>
        </div>
    </div>
</div>
 
@include('blogging_ui.footer')

