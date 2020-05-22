<!-- Original -->

@include('blogging_ui.header')
<body>
    <header id="header" >
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
            <!-- <a class="navbar-brand" href="#" ><img src="../../blog_assets/images/Logo 3.jpg" style="backgound-color:black;height:68px;width:130px;" alt="logo" /></a> -->
            <h3 style="color:  #007fff;"><i>𝔹𝕃𝕆𝔾𝔾𝕀ℕ𝔾 𝕊𝕀𝕋𝔼</i></h3>
          </div>
 
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">

            
              <li class="dropdown"><a href="{{url('/')}}/user/newsfeed" style="color:  #007fff;">HOME</a></li>

            </ul>
            <form action="{{url('/')}}/user/newsfeed/after_search" method="post" enctype="multipart/form-data" class="navbar-form navbar-right hidden-sm">
               @csrf
 
              <div class="form-group">
                <input type="text" name="search_post_name" required class="form-control" placeholder="Search Posts">
              </div>
              <button class="icon ion-android-search" type="submit"> </button>

            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->



   
  
    <div id="page-contents">
      <div class="container">
        <div class="row">
  
          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
          <div class="col-md-3 static">
            <div class="profile-card">
         
              <img  alt="{{Auth::user()->name}}" src="{{URL::asset('/images/profile_image/'.Auth::user()->profile_image)}}" class="profile-photo" />
              <h5><a href="#" class="text-white">{{Auth::user()->name}}</a></h5>
              <a href="" class="text-white"><i class="ion ion-android-person-add"></i> {{$cc}} followers</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="{{url('/')}}/user/newsfeed">My Newsfeed</a></div></li>
               
              <!-- <li><i class="icon ion-settings"></i><div><a href="{{url('/')}}/user/edit_profile">Publish Post</a></div></li> -->
              <li><i class="icon ion-ios-people-outline"></i><div> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                <i class="dropdown-icon icon icon-power"></i> Log out
              </a></div></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
              </form>
             <!--  <li><i class="icon ion-ios-videocam"></i><div><a href="newsfeed-videos.html">Videos</a></div></li> -->
            </ul><!--news-feed links ends-->
               <div id="chat-block" >
              <div class="title"><a href="{{url('/')}}/user/edit_profile" style="color:white;">My Profile</a></div>

            </div><!--chat block ends-->
          </div>
          <div class="col-md-7">
            <!-- Post Create Box 
             ================================================= -->
          <!--   <div class="create-post">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="../../blog_assets/images/users/user-6.jpg" alt="" class="profile-photo-md" />
                    <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                </div>
                <div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <li><a href="#"><i class="ion-compose"></i></a></li>
                      <li><a href="#"><i class="ion-images"></i></a></li>
                      <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                      <li><a href="#"><i class="ion-map"></i></a></li>
                    </ul>
                    <button class="btn btn-primary pull-right">Publish</button>
                  </div>
                </div>
              </div>
            </div> --><!-- Post Create Box End-->
 
<div id="exTab2" class="container"> 
<ul class="nav nav-tabs">
      <li class="active">
        <a  href="#1" id="trending_link" data-toggle="tab">Trending</a>
      </li>
      <li><a href="#2" id="own_post_link" data-toggle="tab">Own Posts</a>
      </li>
      <li><a href="#javascript:void(0)" data-toggle="tab" id="notification_link">Notification</a>
      </li>
    </ul>

     <!--  <div class="tab-content ">
        <div class="tab-pane active" id="1">
          <h3>Trending Post Will Show Here</h3>
        </div>
        <div class="tab-pane" id="2">
          <h3>Own Posts Will Show Here</h3>
        </div>
        <div class="tab-pane" id="3">
          <h3>Notification Will Show Here</h3>
        </div>
      </div> -->
  </div>
  


            <div class="container"><h2></h2></div>
 
            <!--Trending Post Content 
            ================================================= -->
 
          @if(count($Trending_Blogs) > 0)
           @foreach($Trending_Blogs as $Trending_Blog)

                  @php
                  date_default_timezone_set('Asia/Kolkata');
                  $fdate = $Trending_Blog->created_at;
                  $tdate = date("Y-m-d h:i:sa");
                  $datetime1 = new DateTime($fdate);
                  $datetime2 = new DateTime($tdate);
                  $interval = $datetime1->diff($datetime2);
                  $days = $interval->format('%a');
                  $hour = $interval->format('%h');
                  $minute = $interval->format('%i');
                  $second = $interval->format('%s');
                  @endphp

            <div class="post-content trending">
            <img src="{{URL::asset('/images/profile_image/'.$Trending_Blog->profile_image)}}" alt="user" class="profile-photo-md pull-left" />
 
                 <div class="user-info" style="padding-left: 65px;">
                    <h5><a href="{{url('/')}}/user/other_user_details/{{$Trending_Blog->real_user_id}}" class="profile-link">{{$Trending_Blog->name}}</a></h5>

                    @php if($days<1 && $hour>0 && $minute>=0)
                    {  
                    @endphp
                    <p class="text-muted">Published {{$hour}} hr {{$minute}} minute ago</p>
                    @php 
                    }
                    else if($days>0 && $hour>=0 && $minute>=0 && $second>=0 )
                    {  
                    @endphp
                    <p class="text-muted">Published {{$days}} Days ago</p>
                    @php
                    }
                    else if($days<1 && $hour<1 && $minute>0)
                    {  
                    @endphp
                    <p class="text-muted">Published {{$minute}} minute {{$second}} Second ago</p>
                    @php 
                    }
                    else if($days<1 && $hour<1 && $minute<1)
                    { 
                    @endphp
                     <p class="text-muted">Published {{$second}} Second ago</p>
                    @php 
                    }
                    @endphp

                  </div>

                  <div class="line-divider"></div>
                  <div class="post-text">
                    <strong><b> <u> {{$Trending_Blog->post_caption}} </u></b></strong>
                    <p>{{strip_tags($Trending_Blog->post_description)}} <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                  </div>


               <!-- Image Layout End for Trending -->

           @php
           $count_image1=$Trending_Blog->post_image;
           $count_image2=$Trending_Blog->post_image_two;
           $count_image3=$Trending_Blog->post_image_three;
           $count_image4=$Trending_Blog->post_image_four;

        if($count_image1 !='' && $count_image2 =='' && $count_image3 =='' && $count_image4 =='')
        {
          @endphp
          <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-12">
                         
              <img src="{{URL::asset('/images/post_img/'.$Trending_Blog->post_image)}}" alt="post-image" id="{{$Trending_Blog->real_blog_id}}" style="width: 847px;height: 400px;cursor: pointer;" class="img-responsive post-image" />
               
                      </div>
                    </div>
                  </div>
        @php
        }
    else if($count_image1 !='' && $count_image2 !='' && $count_image3 =='' && $count_image4 =='')
           {
           @endphp

           <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-6">
                        
              <img src="{{URL::asset('/images/post_img/'.$Trending_Blog->post_image)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Trending_Blog->real_blog_id}}" class="img-responsive post-image" />
               
                      </div>

                      <div class="col-md-6">
                        
              <img src="{{URL::asset('/images/post_img/'.$Trending_Blog->post_image_two)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Trending_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>
                    </div>
                  </div>


           @php
         }
    else if($count_image1 !='' && $count_image2 !='' && $count_image3 !='' && $count_image4 =='')
         {

           @endphp
           <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-06">

                      <div class="col-md-6">
              <img src="{{URL::asset('/images/post_img/'.$Trending_Blog->post_image)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Trending_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>



                      <div class="col-md-6">     
              <img src="{{URL::asset('/images/post_img/'.$Trending_Blog->post_image_two)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Trending_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>
                  </div>
               </div>
               </div>


               <br>

                <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-06">

                      <div class="col-md-6">
              <img src="{{URL::asset('/images/post_img/'.$Trending_Blog->post_image_three)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Trending_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>

                  </div>
               </div>
               </div>
             @php

            }
     else if($count_image1 !='' && $count_image2 !='' && $count_image3 !='' && $count_image4 !='')
            {
             @endphp

             <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-06">

                      <div class="col-md-6">
              <img src="{{URL::asset('/images/post_img/'.$Trending_Blog->post_image)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Trending_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>



                      <div class="col-md-6">     
              <img src="{{URL::asset('/images/post_img/'.$Trending_Blog->post_image_two)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Trending_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>
                  </div>
               </div>
               </div>


               <br>

                <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-06">

                      <div class="col-md-6">
              <img src="{{URL::asset('/images/post_img/'.$Trending_Blog->post_image_three)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Trending_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>



                      <div class="col-md-6">     
              <img src="{{URL::asset('/images/post_img/'.$Trending_Blog->post_image_four)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Trending_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>
                  </div>
               </div>
               </div>



             @php
             }
            @endphp

                 
                


               <!-- Image Layout End for Trending -->


              <!-- Post Container Starts -->
              <div class="post-container">
                <img src="{{URL::asset('/images/profile_image/'.$Trending_Blog->profile_image)}}" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="#" class="profile-link">{{$Trending_Blog->name}}</a> <span class="following"></span></h5>
                    <!-- <p class="text-muted">Caption Of the Post</p> -->
                  <br>
                  </div> 
                  <div class="reaction">
                    <a class="btn text-green like-but"><i class="icon ion-thumbsup"></i> 0</a>
                    <a class="btn text-red dislike-but" id="dislike-but"><i class="fa fa-thumbs-down"></i> 0</a>
                  </div>
                  <div class="line-divider"></div>

                    <div class="post-comment">
                    <img src="{{URL::asset('/images/profile_image/'.Auth::user()->profile_image)}}" style="height: 36px;
                    width: 36px;" alt="" class="profile-photo-sm" />

                  <!-- Comment Input -->



                    <input type="hidden" class="blog_id_trending" name="blog_id_trending" id="blog_id_trending" value="{{$Trending_Blog->real_blog_id}}">

                    <input type="text" id="comment_input_trending-{{$Trending_Blog->real_blog_id}}" class="form-control"  style="height: 41px;" placeholder="Post a comment">

                  <input type="button" id="comment_btn_trending-{{$Trending_Blog->real_blog_id}}" style="background-color: #007fff;color: white;" class="comment_btn_trending" value="Comment" onclick="submit_comment_trending(this.id)" placeholder="Post a comment">
                 &nbsp;
                   <input type="button" style="background-color: #007fff;color: white;"  data-id="{{$Trending_Blog->id}}" class="modalOpencl" data-toggle="modal" data-target="#myModall" value="Read Comment..">
                  </div>
                  <!-- Comment Input -->
                

                </div>
                <br>
              </div>
            </div>
            @endforeach
            @endif

             <!--Trending Post Content 
            ================================================= -->



              <!-- Own Post Content
            ================================================= -->
          
           @if(count($Own_Blogs) > 0)
           @foreach($Own_Blogs as $Own_Blog)

                  @php
                  date_default_timezone_set('Asia/Kolkata');
                  $fdate = $Own_Blog->created_at;
                  $tdate = date("Y-m-d h:i:sa");
                  $datetime1 = new DateTime($fdate);
                  $datetime2 = new DateTime($tdate);
                  $interval  = $datetime1->diff($datetime2);
                  $days   = $interval->format('%a');
                  $hour   = $interval->format('%h');
                  $minute = $interval->format('%i');
                  $second = $interval->format('%s');
                  @endphp


            <div class="post-content own_post"  style="display: none;" >
            <img src="{{URL::asset('/images/profile_image/'.Auth::user()->profile_image)}}" alt="user" class="profile-photo-md pull-left" />

                 <div class="user-info" style="padding-left: 65px;">
                    <h5><a href="{{url('/')}}/user/other_user_details/{{$Own_Blog->real_user_id}}" class="profile-link">{{Auth::user()->name}}</a></h5>
                    
                   @php if($days<1 && $hour>0 && $minute>=0)
                    {  
                    @endphp
                    <p class="text-muted">Published {{$hour}} hr {{$minute}} minute ago</p>
                    @php 
                    }
                    else if($days>0 && $hour>=0 && $minute>=0 && $second>=0 )
                    {  
                    @endphp
                    <p class="text-muted">Published {{$days}} Days ago</p>
                    @php
                    }
                    else if($days<1 && $hour<1 && $minute>0)
                    {  
                    @endphp
                    <p class="text-muted">Published {{$minute}} minute {{$second}} Second ago</p>
                    @php 
                    }
                    else if($days<1 && $hour<1 && $minute<1)
                    { 
                    @endphp
                     <p class="text-muted">Published {{$second}} Second ago</p>
                    @php 
                    }
                    @endphp
                  </div>

                  <div class="line-divider"></div>
                  <div class="post-text">
                    <strong><b> <u> {{$Own_Blog->post_caption}} </u></b></strong>
                    <p>{{strip_tags($Own_Blog->post_description)}} <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                  </div>


                <!--Image Layout Starts  for Own blog -->
                  @php
           $count_image1=$Own_Blog->post_image;
           $count_image2=$Own_Blog->post_image_two;
           $count_image3=$Own_Blog->post_image_three;
           $count_image4=$Own_Blog->post_image_four;

         if($count_image1 !='' && $count_image2 =='' && $count_image3 =='' && $count_image4 =='')
        {
          @endphp
          <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-12">
                        
              <img src="{{URL::asset('/images/post_img/'.$Own_Blog->post_image)}}" alt="post-image" style="width: 847px;height: 400px;" id="{{$Own_Blog->real_blog_id}}" class="img-responsive post-image" />
               
                      </div>
                    </div>
                  </div>
        @php
        }
    else if($count_image1 !='' && $count_image2 !='' && $count_image3 =='' && $count_image4 =='')
           {
           @endphp

           <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-6">
                        
              <img src="{{URL::asset('/images/post_img/'.$Own_Blog->post_image)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Own_Blog->real_blog_id}}" class="img-responsive post-image" />
               
                      </div>

                      <div class="col-md-6">
                        
              <img src="{{URL::asset('/images/post_img/'.$Own_Blog->post_image_two)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Own_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>
                    </div>
                  </div>


           @php
         }
    else if($count_image1 !='' && $count_image2 !='' && $count_image3 !='' && $count_image4 =='')
         {

           @endphp
           <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-06">

                      <div class="col-md-6">
              <img src="{{URL::asset('/images/post_img/'.$Own_Blog->post_image)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Own_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>



                      <div class="col-md-6">     
              <img src="{{URL::asset('/images/post_img/'.$Own_Blog->post_image_two)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Own_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>
                  </div>
               </div>
               </div>


               <br>

                <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-06">

                      <div class="col-md-6">
              <img src="{{URL::asset('/images/post_img/'.$Own_Blog->post_image_three)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Own_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>

                  </div>
               </div>
               </div>
             @php

            }
     else if($count_image1 !='' && $count_image2 !='' && $count_image3 !='' && $count_image4 !='')
            {
             @endphp

             <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-06">

                      <div class="col-md-6">
              <img src="{{URL::asset('/images/post_img/'.$Own_Blog->post_image)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Own_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>



                      <div class="col-md-6">     
              <img src="{{URL::asset('/images/post_img/'.$Own_Blog->post_image_two)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Own_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>
                  </div>
               </div>
               </div>


               <br>

                <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-06">

                      <div class="col-md-6">
              <img src="{{URL::asset('/images/post_img/'.$Own_Blog->post_image_three)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Own_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>



                      <div class="col-md-6">     
              <img src="{{URL::asset('/images/post_img/'.$Own_Blog->post_image_four)}}" alt="post-image" style="width: 847px;height: 200px;" id="{{$Own_Blog->real_blog_id}}" class="img-responsive post-image" />
                      </div>
                  </div>
               </div>
               </div>

             @php
             }
            @endphp

                <!--Image Layout Ends  for Own blog -->



              <!-- Post Container Starts -->
              <div class="post-container">
                <img src="{{URL::asset('/images/profile_image/'.Auth::user()->profile_image)}}" alt="Img" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="{{url('/')}}/user/other_user_details/{{$Own_Blog->real_user_id}}" class="profile-link">{{Auth::user()->name}}</a> <span class="following"></span></h5>
                    <!-- <p class="text-muted">Caption Of the Post</p> -->
                  <br>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green like-but-own"><i class="icon ion-thumbsup"></i> 0</a>
                    <a class="btn text-red dislike-but-own"><i class="fa fa-thumbs-down"></i> 0</a>
                  </div>

                  <div class="line-divider"></div>
                    <div class="post-comment">
                    <img src="{{URL::asset('/images/profile_image/'.Auth::user()->profile_image)}}" style="height: 36px;
                    width: 50p36" alt="Img" class="profile-photo-sm" />


                  <!-- Comment Input -->
                    <input type="hidden" class="blog_id" name="blog_id" id="blog_id" value="{{$Own_Blog->real_blog_id}}">

                    <input type="text" id="comment_input-{{$Own_Blog->real_blog_id}}" class="form-control"  style="height: 41px;" placeholder="Post a comment">

                  <input type="button" style="background-color: #007fff;color: white;" id="comment_btn-{{$Own_Blog->real_blog_id}}"  class="comment_btn" value="Comment" onclick="submit_comment(this.id)" placeholder="Post a comment">

                   <input type="button" style="background-color: #007fff;color: white;"  data-id="{{$Own_Blog->real_blog_id}}" class="modalOpencl" data-toggle="modal" data-target="#myModall" value="Read Comment..">
                  </div>
                  <!-- Comment Input -->

                  

 


                  <div id="ppp-{{$Own_Blog->real_blog_id}}">

                  </div>

                </div>
                <br>
              </div>
            </div>
            @endforeach
            @endif
              <!-- Own Post Content
            ================================================= -->




              <!-- Notification
            ================================================= -->


            <div class="post-content notification" id="notification" style="display: none;">

              <div id="notification_id">
              <!-- Go to Jquery Append Method -->
              </div>

              
            </div>
            </div>


              <!-- Notification
            ================================================= -->

             <!-- Modal starts -->
             <!-- Modal -->
  <div class="modal fade" id="myModall" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">All Comments</h4>
        </div>
        <div class="modal-body">
                    


<!-- Container, Row, and Column used for illustration purposes -->
<div class="container" style="margin-left: -300px;">
    <div class="row" >
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2" style="width: 500px;overflow:scroll;height: 350px;">
        
            <!-- Fluid width widget -->        
          <div class="panel panel-default" id="before_result">

           
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-comment"></span> 
                        Recent Comments
                    </h3>
                </div>
               <div class="panel-body" id="result">
                <!-- Go to the jquery Section TO see The Append Content -->
                </div>
            </div>
            <!-- End fluid width widget --> 
            
    </div>
  </div>
</div>
 </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>
<!-- Modal Ends -->


       <!-- Modal starts -->
             <!-- Modal -->
  <div class="modal fade" id="image-modal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Image Gallery</h4>
        </div>
        <div class="modal-body" style="background-color:  #595959;">
                    


<!-- Container, Row, and Column used for illustration purposes -->
<div class="container">
    <div class="row" >
    
        
            <!-- Fluid width widget -->        

           
                <!-- <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-comment"></span> 
                        Recent Comments
                    </h3>
                </div> -->
               <div class="panel-body" id="img_gallery">

                </div>
            <!-- End fluid width widget --> 
            
  </div>
</div>
 </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>
<!-- Modal Ends -->


  

 

 
            

           
           
        
          

          <!-- Newsfeed Common Side Bar Right
          ================================================= -->
          
          <div class="col-md-2 static">
       
            <div class="suggestions" id="sticky-sidebar">
            <a href="{{url('/')}}/user/blog_post_special" style="background-color:#007fff;color:white;font-size:17px;borde-radius:40px;border: 2px solid black;width: 200px;"> Post Your Blog</a>
              <!-- <h4 class="grey">Who to Follow</h4> -->
              <div class="search-container">
    <span>
      <input type="text" placeholder="Search People....." required name="requested_name" id="requested_name" style="border:1px solid black;">
     <input type="button"  value="Search" style="margin-top:8px;" style="background-color: #007fff;color: #007fff;"  id="search_people_btn">
      </span>
  </div> 
  <br> 
      <div class="follow-unfollow">
      <h4 class="grey"><u> Who to Follow</u></h4>
                @if($users->count())
                @foreach($users as $user)

               <div class="follow-user">
               @php
               $post_img_val=$user->profile_image;

               $gender=$user->gender;
               if($post_img_val=='' && $user->gender=='' )
               {
                @endphp
                <img src="{{URL::asset('/images/gender_img/male.png')}}" alt="" class="profile-photo-sm pull-left" />
                @php
                }
               else if($post_img_val=='' && $user->gender=='male' )
               {
                @endphp
                <img src="{{URL::asset('/images/gender_img/male.png')}}" alt="" class="profile-photo-sm pull-left" />
                @php
                }
                else if($post_img_val=='' && $user->gender=='female')
                {
                @endphp
                <img src="{{URL::asset('/images/gender_img/female.png')}}" alt="" class="profile-photo-sm pull-left" />
                  @php
                }
                else
                {
                @endphp
                <img src="{{URL::asset('/images/profile_image/'.$user->profile_image)}}" alt="" class="profile-photo-sm pull-left" />
                @php
                }
                @endphp
                <div>



                  <h5><a href="{{url('/')}}/user/other_user_details/{{$user->id}}">{{ $user->name }}</a></h5> <button  style="background-color: #007fff;color: white;" class="action-follow" data-id="{{ $user->id }}"><strong>
            @if(auth()->user()->isFollowing($user))
                UnFollow
            @else
                Follow
            @endif
            </strong></button>
                 
                </div>
              </div>
               @endforeach
               @endif
          </div>

        


            </div>
          </div>
        </div>
      </div>
    </div>

@include('blogging_ui.footer')
<script src="{{ asset('js/custom.js') }}" defer></script>

 <script type="text/javascript">
      $(document).on("click","#trending_link",function()
      {
        $('.trending').show();
        $('.own_post').hide();
        $('.notification').hide();
        $('.trending').show();

        // var divClone2 = $(".own_post").clone();
        // $('.own_post').empty();
        // $(".trending").append(divClone);

      });

       $(document).on("click","#own_post_link",function()
      {
        $('.trending').hide();
        $('.own_post').show();
        $('.notification').hide();

        // var divClone = $(".trending").clone();
        // $('.trending').empty();

        // $(".own_post").append(divClone2);

      });

        $(document).on("click","#notification_link",function()
      {
        // window.location.href=window.location.href;

        $('#notification_id').empty();

        // $(this).prop('disabled',true);

        $('.trending').hide();
        $('.own_post').hide();
        $('.notification').show();
 
        $.ajax({
        type:"POST",
        url:"{{url('/')}}/ajax/getBlognotification",
         data:{
          "_token": "{{ csrf_token() }}",
        },
        dataType : 'html',
        cache: false,
        success: function(data){
          responseData=JSON.parse(data);
          //  console.log(responseData);
          console.log(data);
          // alert(data);


   $.each(responseData, function(index, value)
   {
    $("#notification_id").append('<img src="{{URL::asset('/images/profile_image')}}/'+responseData[index]['profile_image']+'"alt="user" class="profile-photo-md pull-left" />\
                 <div class="user-info" style="padding-left: 65px;">\
                    <h5><a href="{{URL::asset('/user/other_user_details')}}/'+responseData[index]['id']+'" class="profile-link">'+responseData[index]['name']+'</a> Commented On Your <span style="color:black;"> "'+responseData[index]['blogcaption']+'"</span> Post that</h5>\
                    <span style="color:black;">'+responseData[index]['noti_desc']+'</span><p class="text-muted">1 minute ago</p>\
                  </div>');
    });
    }
   });
 
  });











  $(document).on('click','.modalOpencl',function()
  {
   var blog_id = $(this).data('id');
   $('#blog_id').val(blog_id);

   var thisSelf=$(this);
   $('#result').empty();
 // alert(blog_id);
  $.ajax({
        type:"POST",
        url:"{{url('/')}}/ajax/getBlogComments",
         data:{
          "_token": "{{ csrf_token() }}",
          blog_id : blog_id,
        },
        dataType : 'html',
        cache: false,
        success: function(data){
          responseData=JSON.parse(data);
           // console.log(responseData);
           // console.log(data);
           // alert(data);

        $.each(responseData, function(index, value){

                  var start = responseData[index]['created_at'];

                  // var dt= new Date();
                  // var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();

                  // var date=dt.getFullYear() + "-" + dt.getMonth() + "-" + dt.getDay();

                  // alert(start);
                  // alert(date);


                // var db_created_dt=new Date(start);

                // var datetime_one = 
                // db_created_dt.getFullYear() + "-" 
                // + (db_created_dt.getMonth()+1)  + "-"+ 
                // db_created_dt.getDate() + " " 
                // + db_created_dt.getHours() + ":"  
                // + db_created_dt.getMinutes() + ":" 
                // + db_created_dt.getSeconds();




                // var currentdate = new Date();

                // var datetime = 
                // currentdate.getFullYear() + "-" 
                // + (currentdate.getMonth()+1)  + "-"+ 
                // currentdate.getDate() + " " 
                // + currentdate.getHours() + ":"  
                // + currentdate.getMinutes() + ":" 
                // + currentdate.getSeconds();

                // alert(datetime_one);
                // alert(datetime);

                // var hours = Math.abs(datetime_one - datetime) / 36e5;

                // alert(hours);



                  

                  // alert(fdate);

            $("#result").append('<ul class="media-list">\
                        <li class="media">\
                            <div class="media-left">\
        <img src="{{URL::asset('/images/profile_image')}}/'+responseData[index]['profile_img']+'" style="width: 49px;height:51px;" class="img-circle">\
                            </div>\
                            <div class="media-body">\
                                <h4 class="media-heading"> <a href="{{URL::asset('/user/other_user_details')}}/'+responseData[index]['id']+'">\
                                    '+responseData[index]['uname']+'</a>&nbsp;<span style="color:black;font-size:13px;">about a minute ago</span>\
                                    <br>\
                                    <small>\
                                        commented that \
                                    </small>\
                                </h4>\
                                <p style="font-size:13px;color:black;"> <strong>\
                                    '+responseData[index]['cds']+'\
                                    </strong></p>\
                            </div>\
                        </li>\
                    </ul>');
        });
        }
  });
 
  });






  function submit_comment_trending(str)
  {
        var id = str;
        // alert(id);
        var separate=id.split('-');

        var blog_id=separate[1];
        // alert(separate);
        var comment_input=$('#comment_input_trending'+'-'+separate[1]).val();

      // $('#ppp'+'-'+separate[1]).show();

      if(comment_input.length==0)
    {
     $('#comment_input_trending'+'-'+separate[1]).attr("placeholder","Please Type Something...");
     exit();
    }

      


        // alert(comment_input);
         // alert(blog_id);
  $.ajax({
        type:"POST",
        url:"{{url('/')}}/ajax/submit_comment",
         data:{
          "_token": "{{ csrf_token() }}",
          blog_id : blog_id,comment_input:comment_input,
        },
        dataType : 'html',
        cache: false,
        success: function(data){
          responseData=JSON.parse(data);
           console.log(responseData);
          console.log(data);
          // alert(data);
 
      $('#comment_input_trending'+'-'+separate[1]).val("");
        }
  });
  } 



  
  function submit_comment(str)
  {
        var id = str;
        // alert(id);
        var separate=id.split('-');

        var blog_id=separate[1];
        // alert(separate);
        var comment_input=$('#comment_input'+'-'+separate[1]).val();

       if(comment_input.length==0)
    {
     $('#comment_input'+'-'+separate[1]).attr("placeholder","Please Type Something...");
     exit();
    }

      // $('#ppp'+'-'+separate[1]).show();
 

        // alert(comment_input);
        //  alert(blog_id);
  $.ajax({
        type:"POST",
        url:"{{url('/')}}/ajax/submit_comment",
         data:{
          "_token": "{{ csrf_token() }}",
          blog_id : blog_id,comment_input:comment_input,
        },
        dataType : 'html',
        cache: false,
        success: function(data){
          responseData=JSON.parse(data);
           console.log(responseData);
          console.log(data);
          // alert(data);
 
      $('#comment_input'+'-'+separate[1]).val("");
        }
  });
  } 

 $(document).on('click','#search_people_btn',function()
  {
  var req_name=$('#requested_name').val();

  if(req_name.length==0)
  {
     $('#requested_name').after('<div style="color:red;">People Name is Required</div>');
     exit();
  }
 
   $.ajax({
        type:"POST",
        url:"{{url('/')}}/ajax/search_people",
         data:{
          "_token": "{{ csrf_token() }}",
          req_name : req_name,
        },
        dataType : 'html',
        cache: false,
        success: function(data){
          responseData=JSON.parse(data);
          //  console.log(responseData);
          // console.log(data);
          // alert(responseData);
          // alert(data);

        $('.follow-unfollow').empty();

         if(responseData=='')
          {
            $(".follow-unfollow").append('<h4>Sorry!! Result Not Found.</h4>');
          }

          else
          {


          $.each(responseData, function(index, value){

          // var prof=responseData[index]['profile_image'];

          // alert(prof);

          if(responseData[index]['profile_image'] != null)
          {
          // alert(prof);
           
        $(".follow-unfollow").append('<div><img src="{{URL::asset('/images/profile_image')}}/'+responseData[index]['profile_image']+'" alt="Img" class="profile-photo-sm pull-left" />\
                <div>\
                  <h5><a href="{{URL::asset('/user/other_user_details')}}/'+responseData[index]['id']+'" class="profile-link"><h5 style="margin-left:50px;">'+responseData[index]['name']+'</h5></a></h5> \
\
                 <div style="margin-left:50px;"> <button  style="background-color: #007fff;color: white;" class="action-follow-two"  id="'+responseData[index]['id']+'" data-id="{{ $user->id }}" ><strong>\
            \
                 @if(auth()->user()->isFollowing($user))\
                UnFollow\
            @else\
                Follow\
            @endif\
                \
            </strong></button>\
                <div><div>\
                </div>\
                ');


      }
 
    else if(responseData[index]['profile_image'] == null && responseData[index]['gender'] =='female')
    {
      $(".follow-unfollow").append('<div><img src="{{URL::asset('/images/gender_img/female.png')}}" alt="Img" class="profile-photo-sm pull-left" /> </div>\
                <div>\
                  <h5><a href="{{URL::asset('/user/other_user_details')}}/'+responseData[index]['id']+'" class="profile-link"><h5 style="margin-left:50px;">'+responseData[index]['name']+'</h5></a></h5> \
                  <div style="margin-left:50px;">\
                  <button  style="background-color: #007fff;color: white;" class="action-follow-two"  id="'+responseData[index]['id']+'" data-id="{{ $user->id }}" ><strong>\
            \
                 @if(auth()->user()->isFollowing($user))\
                UnFollow\
            @else\
                Follow\
            @endif\
                \
            </strong></button>\
            </div>\
\
                </div>\
              </div>');
    }
      else
      {

        $(".follow-unfollow").append('<div><img src="{{URL::asset('/images/gender_img/male.png')}}" alt="Img" class="profile-photo-sm pull-left" /> </div>\
                <div>\
                  <h5><a href="{{URL::asset('/user/other_user_details')}}/'+responseData[index]['id']+'" class="profile-link"><h5 style="margin-left:50px;">'+responseData[index]['name']+'</h5></a></h5> \
                  <div style="margin-left:50px;">\
                  <button  style="background-color: #007fff;color: white;" class="action-follow-two"  id="'+responseData[index]['id']+'" data-id="{{ $user->id }}" ><strong>\
            \
                 @if(auth()->user()->isFollowing($user))\
                UnFollow\
            @else\
                Follow\
            @endif\
                \
            </strong></button>\
            </div>\
\
                </div>\
              </div>');
      }

        });

      }
     }
    });
  });


$(document).on('click','.action-follow-two',function()
{
  var user_id=$(this).attr('id');

  // alert(user_id);
 
  $.ajax({
        type:"POST",
        url:"{{url('/')}}/ajaxRequest",
         data:{
          "_token": "{{ csrf_token() }}",
          user_id : user_id
        },
        dataType : 'html',
        cache: false,
        success: function(data){
          responseData=JSON.parse(data);

         // alert(data);
          var kk=responseData.success.attached;

          var dk=responseData.success.attached;


          // alert(kk);

          if(kk=='')
          {
          $('#'+user_id).text("Follow");
          }
          else
          {
          $('#'+user_id).text("Unfollow");
          }
        }
  });


});



$(document).on('click','.like-but',function()
{

// $('.like-but').text('2');
$('.like-but').html('&nbsp;&nbsp;<i class="icon ion-thumbsup">1');
$('.dislike-but').html('&nbsp;&nbsp;<i class="icon ion-thumbsup">0');


});


$(document).on('click','.dislike-but',function()
{

// $('.like-but').text('2');
$('.like-but').html('&nbsp;&nbsp;<i class="icon ion-thumbsup">0');

$('.dislike-but').html('&nbsp;&nbsp;<i class="icon ion-thumbsup">1');


});



$(document).on('click','.like-but-own',function()
{

// $('.like-but-own').text('2');
$('.like-but-own').html('&nbsp;&nbsp;<i class="icon ion-thumbsup">1');
$('.dislike-but-own').html('&nbsp;&nbsp;<i class="icon ion-thumbsup">0');


});


$(document).on('click','.dislike-but-own',function()
{

// $('.like-but').text('2');
$('.like-but-own').html('&nbsp;&nbsp;<i class="icon ion-thumbsup">0');

$('.dislike-but-own').html('&nbsp;&nbsp;<i class="icon ion-thumbsup">1');


});

$(document).ready(function(){
$(".post-image").hover(function(){
    // $(".post-image").after('<span><img src="{{URL::asset('/images/gender_img/female.png')}}" /></span>');

    var blog_id= $(this).attr('id');
    // alert(blog_id);

  });
  });

$(document).on('click','.post-image',function()
{
    var blog_id= $(this).attr('id');
    // alert(blog_id);
 
     $.ajax({
        type:"POST",
        url:"{{url('/')}}/ajax/get_blog_image",
         data:{
          "_token": "{{ csrf_token() }}",
          blog_id : blog_id
        },
        dataType : 'html',
        cache: false,
        success: function(data){
          responseData=JSON.parse(data);
          // alert(responseData);

        $('#img_gallery').empty();
       
        $.each(responseData, function(index, value){

    $('#image-modal').modal('show');

    if(responseData[index]['post_image'] !=null && responseData[index]['post_image_two'] ==null && responseData[index]['post_image_three'] ==null && responseData[index]['post_image_four'] ==null)
    {
      $('#img_gallery').append('<div class="container">\
  <div id="myCarousel" class="carousel slide" >\
    \
\
    <!-- Wrapper for slides -->\
    <div class="carousel-inner" >\
      <div class="item active">\
        \
        <img src="{{URL::asset('/images/post_img')}}/'+responseData[index]['post_image']+'" alt="Img"  style="width:52%;height:52%;" />\
      </div>\
\
      \
    </div>\
    <!-- Left and right controls -->\
    \
  </div>\
</div><a class="left carousel-control" href="#myCarousel" data-slide="prev">\
      <span class="glyphicon glyphicon-chevron-left"></span>\
      <span class="sr-only">Previous</span>\
    </a>\
    <a class="right carousel-control" href="#myCarousel" data-slide="next">\
      <span class="glyphicon glyphicon-chevron-right"></span>\
      <span class="sr-only">Next</span>\
    </a>');
    }

    else if(responseData[index]['post_image'] !=null && responseData[index]['post_image_two'] !=null && responseData[index]['post_image_three'] ==null && responseData[index]['post_image_four'] ==null)

    {
      $('#img_gallery').append('<div class="container">\
  <div id="myCarousel" class="carousel slide" >\
    \
\
    <!-- Wrapper for slides -->\
    <div class="carousel-inner" >\
      <div class="item active">\
        \
        <img src="{{URL::asset('/images/post_img')}}/'+responseData[index]['post_image']+'" alt="Img"  style="width:52%;height:52%;" />\
      </div>\
      \
      <div class="item">\
        <img src="{{URL::asset('/images/post_img')}}/'+responseData[index]['post_image_two']+'" alt="Img"  style="width:52%;height:52%;" />\
      </div>\
      \
    </div>\
    <!-- Left and right controls -->\
    \
  </div>\
</div><a class="left carousel-control" href="#myCarousel" data-slide="prev">\
      <span class="glyphicon glyphicon-chevron-left"></span>\
      <span class="sr-only">Previous</span>\
    </a>\
    <a class="right carousel-control" href="#myCarousel" data-slide="next">\
      <span class="glyphicon glyphicon-chevron-right"></span>\
      <span class="sr-only">Next</span>\
    </a>');

    }

     else if(responseData[index]['post_image'] !=null && responseData[index]['post_image_two'] !=null && responseData[index]['post_image_three'] !=null && responseData[index]['post_image_four'] ==null)

    {
      $('#img_gallery').append('<div class="container">\
  <div id="myCarousel" class="carousel slide" >\
    \
\
    <!-- Wrapper for slides -->\
    <div class="carousel-inner" >\
      <div class="item active">\
        \
        <img src="{{URL::asset('/images/post_img')}}/'+responseData[index]['post_image']+'" alt="Img"  style="width:52%;height:52%;" />\
      </div>\
      \
      <div class="item">\
        <img src="{{URL::asset('/images/post_img')}}/'+responseData[index]['post_image_two']+'" alt="Img"  style="width:52%;height:52%;" />\
      </div>\
      <div class="item">\
        <img src="{{URL::asset('/images/post_img')}}/'+responseData[index]['post_image_three']+'" alt="Img"  style="width:52%;height:52%;" />\
      </div>\
      \
    </div>\
    <!-- Left and right controls -->\
    \
  </div>\
</div><a class="left carousel-control" href="#myCarousel" data-slide="prev">\
      <span class="glyphicon glyphicon-chevron-left"></span>\
      <span class="sr-only">Previous</span>\
    </a>\
    <a class="right carousel-control" href="#myCarousel" data-slide="next">\
      <span class="glyphicon glyphicon-chevron-right"></span>\
      <span class="sr-only">Next</span>\
    </a>');

    }

     else if(responseData[index]['post_image'] !=null && responseData[index]['post_image_two'] !=null && responseData[index]['post_image_three'] !=null && responseData[index]['post_image_four'] !=null)

    {
      $('#img_gallery').append('<div class="container">\
  <div id="myCarousel" class="carousel slide" >\
    \
\
    <!-- Wrapper for slides -->\
    <div class="carousel-inner" >\
      <div class="item active">\
        \
        <img src="{{URL::asset('/images/post_img')}}/'+responseData[index]['post_image']+'" alt="Img"  style="width:52%;height:52%;" />\
      </div>\
      \
      <div class="item">\
        <img src="{{URL::asset('/images/post_img')}}/'+responseData[index]['post_image_two']+'" alt="Img"  style="width:52%;height:52%;" />\
      </div>\
\
      <div class="item">\
        <img src="{{URL::asset('/images/post_img')}}/'+responseData[index]['post_image_three']+'" alt="Img"  style="width:52%;height:52%;" />\
      </div>\
      <div class="item">\
        <img src="{{URL::asset('/images/post_img')}}/'+responseData[index]['post_image_four']+'" alt="Img"  style="width:52%;height:52%;" />\
      \
    </div>\
    <!-- Left and right controls -->\
    \
  </div>\
</div><a class="left carousel-control" href="#myCarousel" data-slide="prev">\
      <span class="glyphicon glyphicon-chevron-left"></span>\
      <span class="sr-only">Previous</span>\
    </a>\
    <a class="right carousel-control" href="#myCarousel" data-slide="next">\
      <span class="glyphicon glyphicon-chevron-right"></span>\
      <span class="sr-only">Next</span>\
    </a>');

    }

    

       });



        }
  });

});

</script>





 
