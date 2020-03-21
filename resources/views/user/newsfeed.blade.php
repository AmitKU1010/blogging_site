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
            <!-- <a class="navbar-brand" href="index-register.html"><img src="../../blog_assets/images/logo.png" alt="logo" /></a> -->
            <h3 style="color: white;"><i>𝔹𝕃𝕆𝔾𝔾𝕀ℕ𝔾 𝕊𝕀𝕋𝔼</i></h3>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
            
              <li class="dropdown"><a href="{{url('/')}}/user/newsfeed">HOME</a></li>
               
 
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
   
 
    <div id="page-contents">
      <div class="container">
        <div class="row">
  
          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
          <div class="col-md-3 static">
            <div class="profile-card">
         
              <img  alt="{{Auth::user()->name}}" src="{{URL::asset('/images/profile_image/'.Auth::user()->profile_image)}}" class="profile-photo" />
              <h5><a href="#" class="text-white">{{Auth::user()->name}}({{Auth::user()->email}})</a></h5>
              <a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="{{url('/')}}/user/newsfeed">My Newsfeed</a></div></li>
               
              <li><i class="icon ion-settings"></i><div><a href="{{url('/')}}/user/edit_profile">Publish Post</a></div></li>
              <li><i class="icon ion-ios-people-outline"></i><div> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                <i class="dropdown-icon icon icon-power"></i> Log out
              </a></div></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
              </form>
             <!--  <li><i class="icon ion-ios-videocam"></i><div><a href="newsfeed-videos.html">Videos</a></div></li> -->
            </ul><!--news-feed links ends-->
               <div id="chat-block">
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
      <li><a href="#3" data-toggle="tab" id="notification_link">Notification</a>
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

 
            <!-- Post Content
            ================================================= -->


            <div class="post-content trending">
               <img src="../../blog_assets/images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />

                 <div class="user-info" style="padding-left: 65px;">
                    <h5><a href="#" class="profile-link">Debasmita Sahoo</a> <span class="following">following</span></h5>
                    <p class="text-muted">Published a photo about 10 sec ago</p>
                  </div>

              <img src="../../blog_assets/images/post-images/8.jpg" alt="post-image" class="img-responsive post-image" />
              <div class="post-container">
                <img src="../../blog_assets/images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="#" class="profile-link">Debasmita Sahoo</a> <span class="following"></span></h5>
                    <p class="text-muted">Caption Of the Post</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 1330</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 100</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>Can alternatives be found to Huawei? After we decided not to rule Huawei out of our 5G network, Boris asked: “If people oppose one brand or another then they have to tell us what is the alternative, right?” Answering that question the day before yesterday in Munich, was US defence secretary Mark Esper who said: “We are encouraging allied and U.S. tech companies to develop alternative 5G solutions and we are working alongside them to test these technologies at our military bases as we speak.”<i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="../../blog_assets/images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                    <p><a href="#" class="profile-link">Monalisa Rath </a><i class="em em-laughing"></i> Intel is reported to be in talks to sell its home connectivity unit to MaxLinear. In November, Bloomberg reported that Intel had appointed a financial adviser.</p>
                  </div>
                  <div class="post-comment">
                    <img src="../../blog_assets/images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                    <p><a href="#" class="profile-link">Ashish Debata</a> After we decided not to rule Huawei out of our 5G network, Boris asked: “If people oppose one brand or another then they have to tell us what is the alternative .</p>
                  </div>  
                  <div class="post-comment">
                    <img src="../../blog_assets/images/users/user-19.jpg" alt="" class="profile-photo-sm" />
                    <input type="text" class="form-control" placeholder="Post a comment">
                    <input type="button" class="btn btn-primary" value="Comment Here" placeholder="Post a comment">
                  </div>
                </div>
              </div>
            </div>



              <!-- Post Conten t
            ================================================= -->

           @if(count($Own_Blogs) > 0)
           @foreach($Own_Blogs as $Own_Blog)


            <div class="post-content own_post"  style="display: none;" >
               <img src="{{URL::asset('/images/profile_image/'.Auth::user()->profile_image)}}" alt="user" class="profile-photo-md pull-left" />

                 <div class="user-info" style="padding-left: 65px;">
                    <h5><a href="#" class="profile-link">{{Auth::user()->name}}</a> <span class="following">Follow</span></h5>
                    <p class="text-muted">You Published a photo about 10 sec ago</p>
                  </div>

                      <div class="line-divider"></div>
                  <div class="post-text">
                    <strong><b> <u> {{$Own_Blog->post_caption}} </u></b></strong>
                    <p>{{strip_tags($Own_Blog->post_description)}} <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                  </div>
 
              <img src="{{URL::asset('/images/post_img/'.$Own_Blog->post_image)}}" alt="post-image" style="width: 847px;height: 430px;" class="img-responsive post-image" />
              <div class="post-container">
                <img src="{{URL::asset('/images/profile_image/'.Auth::user()->profile_image)}}" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                

  

                    <div class="reaction">
                  <!--   <a class="btn text-green"><i class="icon ion-thumbsup"></i> 1330</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 100</a> -->


                                
 

                            
                        

                    <!-- Modal starts -->
                  <input type="button"  data-id="{{$Own_Blog->id}}" class="btn btn-info modalOpencl" data-toggle="modal" data-target="#myModall" value="comment">

 

  <!-- Modal -->
  <div class="modal fade" id="myModall" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Comment Here</h4>
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

          <form action="{{url('/')}}/user/comments" method="POST">
              @csrf
            <input type="hidden" name="blog_id" id="blog_id" value="{{$Own_Blog->id}}">
             <input type="text" required style="border-radius: 3rem;border-color: black;" class="form-control" name="comment"  placeholder="Post a comment Here">
             <br>
                    <input type="submit" class="btn btn-primary" value="Comment Here" placeholder="Post a comment">

          </form>
        </div>
      </div>
    </div>
  </div>

                    <!-- Modal starts -->



                  </div> 
                 <!--  <div class="user-info">
                    <h5><a href="#" class="profile-link">{{Auth::user()->name}}</a> <span class="following"></span></h5>
                    <p class="text-muted">Follow</p>
                  </div>
                  <br> -->
             <!--   
                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="../../blog_assets/images/users/user-19.jpg" alt="" class="profile-photo-sm" />
                    <input type="text" class="form-control" placeholder="Post a comment">
                    <input type="button" class="btn btn-primary" value="Comment Here" placeholder="Post a comment">
                  </div> -->

                    <div class="panel panel-info" data-id="{{ $Own_Blog->id }}">  
                                    <div class="panel-footer">
                                        <span class="pull-rigt">
                                            <span class="like-btn">
                                                <i id="like{{$Own_Blog->id}}" class="glyphicon glyphicon-thumbs-up {{ auth()->user()->hasLiked($Own_Blog) ? 'like-post' : '' }}"></i> <div id="like{{$Own_Blog->id}}-bs3">{{ $Own_Blog->likers()->get()->count() }}</div>
                                            </span>
                                        </span>
                                        
                                         <!--  <span class="pull-rigt">
                                            <span class="like-btn">
                                                <i id="like{{$Own_Blog->id}}" class="glyphicon glyphicon-thumbs-up {{ auth()->user()->hasLiked($Own_Blog) ? 'like-post' : '' }}"></i> <div id="like{{$Own_Blog->id}}-bs3">{{ $Own_Blog->likers()->get()->count() }}</div>
                                            </span>
                                        </span>
 -->                                    </div>
                                </div>
                </div>


              </div>
            </div>

            @endforeach
            @endif




              <!-- Post Content
            ================================================= -->


            <div class="post-content notification" id="notification" style="display: none;">
               <img src="../../blog_assets/images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />

                 <div class="user-info" style="padding-left: 65px;">
                    <h5><a href="#" class="profile-link">Debasmita Sahoo</a> <span class="following">following</span></h5>
                    <p class="text-muted">Published a photo about 10 sec ago</p>
                  </div>

              <img src="../../blog_assets/images/post-images/3.jpg" alt="post-image" class="img-responsive post-image" />
              <div class="post-container">
                <img src="../../blog_assets/images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="#" class="profile-link">Debasmita Sahoo</a> <span class="following"></span></h5>
                    <p class="text-muted">Caption Of the Post</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 1330</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 100</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>Can alternatives be found to Huawei? After we decided not to rule Huawei out of our 5G network, Boris asked: “If people oppose one brand or another then they have to tell us what is the alternative, right?” Answering that question the day before yesterday in Munich, was US defence secretary Mark Esper who said: “We are encouraging allied and U.S. tech companies to develop alternative 5G solutions and we are working alongside them to test these technologies at our military bases as we speak.”<i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="../../blog_assets/images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                    <p><a href="#" class="profile-link">Monalisa Rath </a><i class="em em-laughing"></i> Intel is reported to be in talks to sell its home connectivity unit to MaxLinear. In November, Bloomberg reported that Intel had appointed a financial adviser.</p>
                  </div>
                  <div class="post-comment">
                    <img src="../../blog_assets/images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                    <p><a href="#" class="profile-link">Ashish Debata</a> After we decided not to rule Huawei out of our 5G network, Boris asked: “If people oppose one brand or another then they have to tell us what is the alternative .</p>
                  </div>  
                  <div class="post-comment">
                    <img src="../../blog_assets/images/users/user-19.jpg" alt="" class="profile-photo-sm" />
                    <input type="text" class="form-control" placeholder="Post a comment">
                    <input type="button" class="btn btn-primary" value="Comment Here" placeholder="Post a comment">
                  </div>
                </div>
              </div>
            </div>
            </div>

  

 

 
            

           
          
        
          

          <!-- Newsfeed Common Side Bar Right
          ================================================= -->
          <div class="col-md-2 static">
            <div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Who to Follow</h4>

  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search Freinds,posts,etc.." name="search" style="border:1px solid black;">
      <i class="fa fa-search"></i>
    </form>
  </div>
              <div class="follow-user">
                <img src="../../blog_assets/images/users/user-11.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="#">Sumitra Nayak</a></h5>
                  <a href="#" class="text-green">Follow</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="../../blog_assets/images/users/user-12.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="#">Biki Rath</a></h5>
                  <a href="#" class="text-green">Follow</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="../../blog_assets/images/users/user-13.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="#">Debasis Sahoo</a></h5>
                  <a href="#" class="text-green">Follow</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="../../blog_assets/images/users/user-14.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="#">Sonali Nayak</a></h5>
                  <a href="#" class="text-green">Follow</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="../../blog_assets/images/users/user-15.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="#">Rasmita Agasty</a></h5>
                  <a href="#" class="text-green">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@include('blogging_ui.footer')
 <script type="text/javascript">
      $(document).on("click","#trending_link",function()
      {
        $('.trending').show();
        $('.own_post').hide();
        $('.notification').hide();

      });

       $(document).on("click","#own_post_link",function()
      {
        $('.trending').hide();
        $('.own_post').show();
        $('.notification').hide();

      });

        $(document).on("click","#notification_link",function()
      {
        $('.trending').hide();
        $('.own_post').hide();
        $('.notification').show();
      });
    </script>


<script type="text/javascript">
    $(document).ready(function() {     

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){    
            var id = $(this).parents(".panel").data('id');
            var c = $('#'+this.id+'-bs3').html();
            var cObjId = this.id;
            var cObj = $(this);

            $.ajax({
               type:'POST',
               url:'/blogging-site/public/like',
               data:{id:id},
               success:function(data){
                  if(jQuery.isEmptyObject(data.success.attached)){
                    $('#'+cObjId+'-bs3').html(parseInt(c)-1);
                    $(cObj).removeClass("like-post");
                  }else{
                    $('#'+cObjId+'-bs3').html(parseInt(c)+1);
                    $(cObj).addClass("like-post");
                  }
               }
            });

        });      

        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });                                        
    }); 
</script>
<script type="text/javascript">
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
           console.log(responseData);
          console.log(data);
          // alert(data);


        $.each(responseData, function(index, value){
            $("#result").append('<ul class="media-list">\
                        <li class="media">\
                            <div class="media-left">\
        <img src="{{URL::asset('/images/profile_image')}}/'+responseData[index]['profile_img']+'" style="width: 49px;height:51px;" class="img-circle">\
                            </div>\
                            <div class="media-body">\
                                <h4 class="media-heading">\
                                    '+responseData[index]['uname']+'\
                                    <br>\
                                    <small>\
                                        commented on <a href="#">'+responseData[index]['uname']+'</a> Post\
                                    </small>\
                                </h4>\
                                <p>\
                                    '+responseData[index]['cds']+'\
                                </p>\
                            </div>\
                        </li>\
                    </ul>');
        });
        }
  });
 
  });
</script>
 
