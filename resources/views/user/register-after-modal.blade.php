<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="description" content="Phoenix Software Solutions" />
    <meta name="keywords" content="index" />
    <meta name="robots" content="index, follow" />
<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blogging Site</title>
  
    <!-- Stylesheets
    ================================================= -->
      <link href="{{ asset('blog_assets/css/bootstrap.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('blog_assets/css/style.css') }}" rel="stylesheet" />
      <link href="{{ asset('blog_assets/css/ionicons.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('blog_assets/css/font-awesome.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('blog_assets/font-awesome/4.0.3/css/font-awesome.css') }}" rel="stylesheet" />

 
 
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>

    <!-- WYSIWYG Editor css -->
<!--   <link href="{{ asset('assets/plugins/wysiwyag/richtext.css') }}" rel="stylesheet" /> -->



  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
  <!-- End Google Tag Manager -->
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  

<style type="text/css">
    .panel {
  position: relative;
  overflow: hidden; 
  display: block; 
  border-radius: 0 !important;  
}
.panel-body {
  width: 100%;
  height: 100%;
  padding: 15px 8px;    
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}
.panel-body .overlay {
  position: absolute;
  overflow: hidden;
  width: 80%;
  height: 80%;
  left: 10%;
  top: 10%;
  border-bottom: 1px solid #FFF;
  border-top: 1px solid #FFF;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0,1);
  -ms-transform: scale(0,1);
  transform: scale(0,1);
}
.panel-body .overlay i{
  opacity: 0;
}
.panel-body a:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}
.panel-body a:hover img {
  filter: brightness(0.6);
  -webkit-filter: brightness(0.6);
}
.like-btn{
  background: #3399ff none repeat scroll 0 0;
  border-radius: 3px;
  color: white;
  padding: 7px 3px 3px 7px;
  margin-right: 5px;
  margin-top: -5px;
}
.like-btn i,.dislike-btn i{
  color: white;
}
.dislike-btn{
  background: #FA4E69 none repeat scroll 0 0;
  border-radius: 3px;
  color: white;
  padding: 7px 5px 3px 3px; 
  margin-top: -5px;
}
h2 {
  padding: 15px;
  font-family: calibri;
  display: inline-block;
}
.panel .panel-body a { 
  overflow: hidden; 
}
.panel .panel-body a img { 
  display: block; 
  margin: 0; 
  width: 100%; 
  height: auto; 
}     
.panel .panel-body a:hover span.overlay { 
  display: block; 
  visibility: visible; 
  opacity: 0.55; 
  -moz-opacity: 0.55; 
  -webkit-opacity: 0.55; 
}  
.panel .panel-body a:hover span.overlay i { 
  position: absolute; 
  top: 45%; 
  left: 0%; 
  width: 100%; 
  font-size: 2.25em; 
  color: #fff !important; 
  text-align: center;
  opacity: 1;
  -moz-opacity: 1;
  -webkit-opacity: 1;
}
.panel .panel-footer { 
  padding: 8px !important; 
  background-color: #f9f9f9 !important;
  border:0px;
}  
.panel .panel-footer h4 { 
  display: inline; 
  font: 400 normal 1.125em "Roboto",Arial,Verdana,sans-serif; 
  color: #34495e margin: 0 !important; 
  padding: 0 !important; 
  font-size: 12px;
}
.panel .panel-footer h4 a{
  padding: 4px 7px;
  text-decoration: none;
}
.panel .panel-footer h4 a:hover{
  background-color: #69a8d4;
  color: white;
  border-radius: 2px;
  transition: all 0.4s;
}
.panel .panel-footer i.glyphicon { 
  display: inline; 
  font-size: 1.125em; 
  cursor: pointer; 
  padding-right: 7px;
}
.panel .panel-footer i.glyphicon-thumbs-down { 
  color: #e74c3c; 
  padding-left: 5px; 
  padding-right: 5px;
}
.panel .panel-footer div { 
  width: 15px; 
  display: inline; 
  font: 300 normal 1.125em "Roboto",Arial,Verdana,sans-serif; 
  color: white !important; 
  text-align: center; 
  background-color: transparent !important; 
  border: none !important; 
} 
.like-post{
  color: #e21309 !important;
}
</style>
  </head>


   
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
 

    <footer id="footer" >
      <div class="container">
    </footer>
    <div class="copyright" >
        <p>copyright @Phoenix Software Solution. All rights reserved</p>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
  <script src="{{ asset('assets/js/vendors/jquery-3.2.1.min.js') }}"></script>
   

    <!-- Scripts
    ================================================= -->
</script>
  <script src="{{ asset('blog_assets/js/jquery-3.1.1.min.js') }}"></script>
  <script src="{{ asset('blog_assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('blog_assets/js/jquery.appear.min.js') }}"></script>
  <script src="{{ asset('blog_assets/js/script.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        openLoginModal();
        $('#myModal').modal('show');    


    });


    
    function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('WELCOME TO BLOG SITE');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
} 
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('WELCOME TO BLOG SITE');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}

function loginAjax(){
    /*   Remove this comments when moving to server
    $.post( "/login", function( data ) {
            if(data == 1){
                window.location.replace("/home");            
            } else {
                 shakeModal(); 
            }
        });
    */

/*   Simulate error message from the server   */
     shakeModal();
}

function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

   
</script>
<script type="text/javascript">
   clicked = true;
$(".btn-class").click(function(){
    if(clicked){
        $(this).css('background-color', 'red');
        clicked  = false;
        $(this).val("Following..");
        $(".btnclass2").val("Following..");
          // alert($(this).val());
          // $(this).html("Follwoing..");
    } else {
        $(this).css('background-color', 'grey');
        clicked  = true;
        $(this).val("Follow");
        $(".btnclass2").val("Follow");

          // alert($(this).val());
          // $(this).html("Follow");
    }   
});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46172202-1', 'auto');
  ga('send', 'pageview'); 
</script>

<script type="text/javascript">
  $(document).ready(function(){

$(".tabs").click(function(){

$(".tabs").removeClass("active");
$(".tabs h6").removeClass("font-weight-bold");
$(".tabs h6").addClass("text-muted");
$(this).children("h6").removeClass("text-muted");
$(this).children("h6").addClass("font-weight-bold");
$(this).addClass("active");

current_fs = $(".active");

next_fs = $(this).attr('id');
next_fs = "#" + next_fs + "1";

$("fieldset").removeClass("show");
$(next_fs).addClass("show");

current_fs.animate({}, {
step: function() {
current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({
'display': 'block'
});
}
});
});
});
</script>




<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
  <!-- WYSIWYG Editor js -->
