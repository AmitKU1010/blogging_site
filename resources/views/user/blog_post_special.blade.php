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
           <!--  <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends,posts,catagories">
              </div>
            </form> -->
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
                   <img src="{{URL::asset('/images/profile_image/'.Auth::user()->profile_image) }}" alt="" class="img-responsive profile-photo" />
                 

              <h4 style="color:  #007fff;">{{Auth::user()->name}}</h4>
              <!-- <p class="text-muted">({{Auth::user()->email}})</p> -->
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="#"><!-- Timeline --></a></li>
                  <li><a href="#" class="active" style="color:  #007fff;"><!-- About --></a></li>
                  <li><a href="#"><!-- Album --></a></li>
                  <li><a href="#"><!-- Friends --></a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>{{$cc}}  people following</li>
                  <li><button class="btn-primary" style="background-color:  #007fff;" >Following Topics</button></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->
   
          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
 
               <img src="{{URL::asset('/images/profile_image/'.Auth::user()->profile_image) }}" alt="" class="img-responsive profile-photo" />
              <h4>{{Auth::user()->name}}</h4>
              <p class="text-muted">({{Auth::user()->email}})</p>
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
                <li><i class="icon ion-ios-albums"></i><a href="#" id="blog_post">Blog Post</a></li>
                <!-- 
              	<li class="active"><i class="icon ion-ios-information-outline"></i><a href="{{url('/')}}/user/edit_profile" style="color:  #007fff;">Basic Information</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="#">Account Settings</a></li> -->

                


                  
 
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
 
              <div class="edit-profile-container" id="blog_post_view">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Blog Post</h4>
                  <div class="line"></div>
                  <p></p>
                  <div class="line"></div>
                </div> 
                <div class="edit-block">
                  <form method="post" action="{{url('/')}}/user/update_blog"  name="basic-info" id="basic-info" class="form-inline" enctype="multipart/form-data" >    
                    {{csrf_field()}}
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname">Choose Catagory</label> 
                       <select name="catagory_name" id="catagory_name" class="form-control">
                        <option>Select</option>
                          @foreach($Category as $Categorys)
                         <option value="{{$Categorys->id}}">{{$Categorys->catagory_name}}</option>
                         @endforeach
                       </select>
                         @if ($errors->count() > 0)
                        <span class='help-block' style="color: red;">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                      </div> 
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="">Choose Subcatagory</label>
                        <select name="subcatagory_name" id="subcatagory_name" class="form-control">
                         <option>Select</option>
                        
                        
                       </select>
                          @if ($errors->count() > 0)
                        <span class='help-block' style="color: red;">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
  
                     <div class="row">
                        <div class="form-group col-xs-12">
                        <label for="city"> Post Image One</label>
                        <input  class="form-control input-group-lg" multiple="true" type="file" name="post_image[]" id="pst_img">
                      </div> 
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email">Post Caption</label>
                        <textarea cols="3" rows="3" name="post_caption">
                        </textarea>
                            @if ($errors->count() > 0)
                        <span class='help-block' style="color: red;">
                        <strong>{{ $errors->first('email_new') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group mt-5" style="background-color: #383535;">
                      <label class="form-label" style="color: white;">Description</label>
                      <textarea class="content" name="post_description" placeholder="Enter Description" placeholder="Here you can write your blog post description"></textarea>
                    </div> 

                    <button class="btn btn-primary">Save Changes</button>
                  </form>
                </div>
              </div>
              <!-- For blog post -->






            </div>
            <div class="col-md-2 static">
              
              <!--Sticky Timeline Activity Sidebar-->
              <div id="sticky-sidebar">
                <h4 class="grey">{{Auth::user()->name}}'s activity</h4>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">{{Auth::user()->name}}</a> Commended on a Photo</p>
                    <p class="text-muted">5 mins ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">{{Auth::user()->name}}</a> Has posted a photo</p>
                    <p class="text-muted">an hour ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">{{Auth::user()->name}}</a> Liked her friend's post</p>
                    <p class="text-muted">4 hours ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">{{Auth::user()->name}}</a> has shared an album</p>
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


 $("input[type='file']").change(function()
 {
        var $fileUpload = $("input[type='file']");
        if (parseInt($fileUpload.get(0).files.length)>4)
        {
         alert("You can only upload a maximum of 4 files");
         // $("#pst_img").reset();
         location.reload();

        }
 });
    </script>
