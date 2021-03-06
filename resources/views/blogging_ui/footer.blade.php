 
<!-- Footer -->
  <section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>About US</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><!-- <i class="fa fa-angle-double-right"> --></i>Home</a></li>
            <li><a href="javascript:void();"><!-- <i class="fa fa-angle-double-right"> --></i>About</a></li>
            <li><a href="javascript:void();"><!-- <i class="fa fa-angle-double-right"> --></i>FAQ</a></li>
            <li><a href="javascript:void();"><!-- <i class="fa fa-angle-double-right"> --></i>Get Started</a></li>
            <li><a href="javascript:void();"><!-- <i class="fa fa-angle-double-right"> --></i>Videos</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Our Services</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><!-- <i class="fa fa-angle-double-right"> --></i>Home</a></li>
            <li><a href="javascript:void();"><!-- <i class="fa fa-angle-double-right"> --></i>About</a></li>
            <li><a href="javascript:void();"><!-- <i class="fa fa-angle-double-right"> --></i>FAQ</a></li>
            <li><a href="javascript:void();"><!-- <i class="fa fa-angle-double-right"> --></i>Get Started</a></li>
            <li><a href="javascript:void();"><!-- <i class="fa fa-angle-double-right"> --></i>Videos</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Contact Us</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><!-- <i class="fa fa-angle-double-right"> --></i>Home</a></li>
            <li><a href="javascript:void();"><!-- <i class="fa fa-angle-double-right"> --></i>About</a></li>
            <li><a href="javascript:void();"><!-- <i class="fa fa-angle-double-right"> --></i>FAQ</a></li>
            <li><a href="javascript:void();"><!-- <i class="fa fa-angle-double-right"> --></i>Get Started</a></li>
            <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><!-- <i class="fa fa-angle-double-right"> --></i>Imprint</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  

      <div class="row" >
       <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p><u><a href="">Y Review</a></u> Opinion Perspective And Decision</p>
          <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="" target="_blank"> Y Review</a></p>
        </div>
        </hr>
      </div>  
    </div>
  </section>
  <!-- ./Footer -->
  <!-- ./Footer -->
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
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>



  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

  <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

   
  <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    
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
  <script src="{{ asset('assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>
  <script src="{{ asset('assets/js/formeditor.js') }}"></script>



    
	</body>

</html>
