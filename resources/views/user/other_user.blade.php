@include('blogging_ui.header')
  <body>
     <header id="header" >
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="index-register.html"><img src="../../blog_assets/images/logo.png" alt="logo" /></a> -->
            <h3 style="color:  #007fff;"><i>𝔹𝕃𝕆𝔾𝔾𝕀ℕ𝔾 𝕊𝕀𝕋𝔼</i></h3>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
            
              <li class="dropdown"><a href="{{url('/')}}/user/newsfeed"  style="color:  #007fff;">HOME</a></li>
               
 
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends,posts,catagories">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    
 

    <div class="container">


      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">
 
          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row"> 
              <div class="col-md-3">
                <div class="profile-info">
                   <img src="{{URL::asset('/images/profile_image/'.$user->profile_image) }}" alt="" class="img-responsive profile-photo" />
                 

              <h4 style="color:  #007fff;">{{$user->name}}</h4>
              <p class="text-muted">({{$user->email}})</p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="#">Timeline</a></li>
                  <li><a href="#" class="active" style="color:  #007fff;">About</a></li>
                  <li><a href="#">Album</a></li>
                  <li><a href="#">Friends</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 people following Him</li>
                  <li><button class="btn-primary" style="background-color:  #007fff;" >Following Topics</button></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->
  
          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
 
               <img src="{{URL::asset('/images/profile_image/'.$user->profile_image) }}" alt="" class="img-responsive profile-photo" />
              <h4>{{$user->name}}</h4>
              <p class="text-muted">({{$user->email}})</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.html">Timeline</a></li>
                <li><a href="timeline-about.html" class="active">About</a></li>
                <li><a href="timeline-album.html">Album</a></li>
                <li><a href="timeline-friends.html">Friends</a></li>
              </ul>
              <!-- <button class="btn-primary">Add Friend</button> -->
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">
              
              <!--Edit Profile Menu-->
              <ul class="edit-menu">
              	<li class="active"><i class="icon ion-ios-information-outline"></i><a href="#" style="color:  #007fff;">Basic Information</a></li>
                <!-- <li><i class="icon ion-ios-settings"></i><a href="#">Account Settings</a></li> -->

                <li><i class="icon ion-ios-locked-outline"></i><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">Logout</a></li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
              </form>
              </ul>
            </div>
            <div class="col-md-7">
              @if(session()->has('message'))
            <div class="alert alert-success" style="color: white;background-color: blue;">
            {{ session()->get('message') }}
            </div>
            @endif


 
              <!-- Basic Information
              ================================================= -->
              <div class="edit-profile-container" id="edit_info">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Edit basic information</h4>
                  <div class="line"></div>
                  <p></p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form method="post" action="{{url('/')}}/user/update_profile"  name="basic-info" id="basic-info" class="form-inline" enctype="multipart/form-data">  
                    {{csrf_field()}}
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname">Full name</label>
                        <input id="name" class="form-control input-group-lg" type="text" readonly name="name" title="Full Name" placeholder="Full Name" value="{{$user->name}}" />
                         @if ($errors->count() > 0)
                        <span class='help-block' style="color: red;">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                      </div> 
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="">Mobile Number</label>
                        <input id="lastname" class="form-control input-group-lg" type="text" readonly name="email" title="Enter last name" placeholder="Last name" value="{{$user->email}}" />
                          @if ($errors->count() > 0)
                        <span class='help-block' style="color: red;">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>


                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="email">My email</label>
                        <input id="email_new" class="form-control input-group-lg" type="text" readonly name="email_new" title="" placeholder="My Email" value="{{$user->email_new}}"/>
                            @if ($errors->count() > 0)
                        <span class='help-block' style="color: red;">
                        <strong>{{ $errors->first('email_new') }}</strong>
                        </span>
                        @endif
                      </div>
                       <div class="form-group col-xs-6">
                        <label for="dob">Date Of Birth</label>
                        <input id="dob" class="form-control input-group-lg" readonly type="date" name="dob" value="{{$user->dob}}" title=""/>
                      </div>
                    </div>

                 
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="city"> Gender</label>
                        <input type="text" value="{{$user->gender}}" readonly class="form-control input-group-lg">
                      </div>

                       
                      <div class="form-group col-xs-6">
                      <label for="city"> Country</label>
                        <input id="city" class="form-control input-group-lg" type="text" readonly value="{{$user->country}}"/>
                    </div>


                    <div class="row">
                    
                      </div>
                       <div class="form-group col-xs-6">
                        <label for="city">City</label>
                        <input id="city" class="form-control input-group-lg" type="text" readonly name="city" title="Enter city" value="{{$user->city}}" placeholder="Your city"/>
                      </div>
                    </div>


                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-info">About me</label>
                        <textarea id="my-info" name="about_me" class="form-control" readonly placeholder="Some texts about me" rows="4" cols="400">{{$user->about_me}}</textarea>
                      </div>
                    </div>
                  </form>
                </div>
              </div>





 


              <!-- For blog post -->
                        <!-- Basic Information
              ================================================= -->
           



            </div>
            <div class="col-md-2 static">
              
              <!--Sticky Timeline Activity Sidebar-->
              <div id="sticky-sidebar">
                <h4 class="grey">{{$user->name}}'s activity</h4>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">{{$user->name}}</a> Commended on a Photo</p>
                    <p class="text-muted">5 mins ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">{{$user->name}}</a> Has posted a photo</p>
                    <p class="text-muted">an hour ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">{{$user->name}}</a> Liked her friend's post</p>
                    <p class="text-muted">4 hours ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">{{$user->name}}</a> has shared an album</p>
                    <p class="text-muted">a day ago</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 


@include('blogging_ui.footer')
  <script>
   

         $(document).on("click","#blog_post",function() 
         {
        $('#edit_info').hide();
        $('#blog_post_view').show();
        $('#change_password_view').hide();

        });   

         $(document).on("click","#change_password",function() 
         {
        $('#edit_info').hide();
        $('#blog_post_view').hide();
        $('#change_password_view').show();

        });


 $(document).on('change','#catagory_name', function(){ 
  // alert('hmgj');
    var thisSelf=$(this);
 
      var catagory_name = $("#catagory_name").val();
 
           $.ajax({
        type:"POST",
        url: "{{url('/')}}/get/subcatagory",
        data:{
          "_token": "{{ csrf_token() }}",
          catagory_name : catagory_name,
        },
        dataType : 'html',
        cache: false,
        success: function(data){
          responseData=JSON.parse(data);
           // console.log(responseData);
           // console.log(data);
           // alert(data);
            thisSelf.parent().parent().find('[name^=subcatagory_name]')
               .empty()
               .append('<option selected="selected" value="">-Select -</option>');

           for (index = 0; index < responseData.length; ++index) {
               thisSelf.parent().parent().find('[name^=subcatagory_name]').append(
                '<option value="'+responseData[index]['sbid']+'">'+responseData[index]['subcatagory_name']+'</option>'
              );   
            }  
        }
      });
        
      }); 
    </script>
