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
                   <img src="{{URL::asset('/images/profile_image/'.Auth::user()->profile_image) }}" alt="" class="img-responsive profile-photo" />
                 

              <h4 style="color:  #007fff;">{{Auth::user()->name}}</h4>
              <p class="text-muted"></p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <!-- <li><a href="#">Timeline</a></li> -->
                  <li><a href="#" class="active" style="color:  #007fff;"><!-- About --></a></li>
                  <li><a href="#"><!-- Album --></a></li>
                  <li><a href="#"><!-- Friends --></a></li>
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
              	<li class="active"><i class="icon ion-ios-information-outline"></i><a href="{{url('/')}}/user/edit_profile" style="color:  #007fff;">Basic Information</a></li>
                <!-- <li><i class="icon ion-ios-settings"></i><a href="#">Account Settings</a></li> -->

                <!-- <li><i class="icon ion-ios-albums"></i><a href="#" id="blog_post">Blog Post</a></li> -->
                
              	<li><i class="icon ion-ios-locked-outline"></i><a href="#" id="change_password">Change Password</a></li>


                  

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
                        <input id="name" class="form-control input-group-lg" type="text" name="name" title="Full Name" placeholder="Full Name" value="{{Auth::user()->name}}" />
                         @if ($errors->count() > 0)
                        <span class='help-block' style="color: red;">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                      </div> 
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="">Mobile Number</label>
                        <input id="lastname" class="form-control input-group-lg" type="text" name="email" title="Enter last name" placeholder="Last name" value="{{Auth::user()->email}}" />
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
                        <input id="email_new" class="form-control input-group-lg" type="text" name="email_new" title="" placeholder="My Email" value="{{Auth::user()->email_new}}"/>
                            @if ($errors->count() > 0)
                        <span class='help-block' style="color: red;">
                        <strong>{{ $errors->first('email_new') }}</strong>
                        </span>
                        @endif
                      </div>
                       <div class="form-group col-xs-6">
                        <label for="dob">Date Of Birth</label>
                        <input id="dob" class="form-control input-group-lg" type="date" name="dob" value="{{Auth::user()->dob}}" title=""/>
                        
                      </div>
                    </div>

                 
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="city"> Gender</label>
                        <select class="form-control" name="gender">
                          <!-- <option>Select</option> -->
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Other</option>
                        </select>
                      </div>

                        <div class="form-group col-xs-6">
                        <label for="city"> Profile Image</label>
                        <input id="profile_image" class="form-control input-group-lg" type="file" name="profile_image" title="Enter city" placeholder="Your city" value="Bhubaneswar"/>
                      </div>
                    </div>


                    <div class="row">
                     
                      <div class="form-group col-xs-6">
                        <label for="country">My country</label>
                        <select class="form-control" id="country" name="country">
                          <option value="country">Country</option>
                          <option value="AFG">Afghanistan</option>
                          <option value="ALA">Ƭand Islands</option>
                          <option value="ALB">Albania</option>
                          <option value="DZA">Algeria</option>
                          <option value="ASM">American Samoa</option>
                          <option value="AND">Andorra</option>
                          <option value="AGO">Angola</option>
                          <option value="AIA">Anguilla</option>
                          <option value="ATA">Antarctica</option>
                          <option value="ATG">Antigua and Barbuda</option>
                          <option value="ARG">Argentina</option>
                          <option value="ARM">Armenia</option>
                          <option value="ABW">Aruba</option>
                          <option value="AUS">Australia</option>
                          <option value="AUT">Austria</option>
                          <option value="AZE">Azerbaijan</option>
                          <option value="BHS">Bahamas</option>
                          <option value="BHR">Bahrain</option>
                          <option value="BGD">Bangladesh</option>
                          <option value="BRB">Barbados</option>
                          <option value="BLR">Belarus</option>
                          <option value="BEL">Belgium</option>
                          <option value="BLZ">Belize</option>
                          <option value="BEN">Benin</option>
                          <option value="BMU">Bermuda</option>
                          <option value="BTN">Bhutan</option>
                          <option value="BOL">Bolivia, Plurinational State of</option>
                          <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                          <option value="BIH">Bosnia and Herzegovina</option>
                          <option value="BWA">Botswana</option>
                          <option value="BVT">Bouvet Island</option>
                          <option value="BRA">Brazil</option>
                          <option value="IOT">British Indian Ocean Territory</option>
                          <option value="BRN">Brunei Darussalam</option>
                          <option value="BGR">Bulgaria</option>
                          <option value="BFA">Burkina Faso</option>
                          <option value="BDI">Burundi</option>
                          <option value="KHM">Cambodia</option>
                          <option value="CMR">Cameroon</option>
                          <option value="CAN">Canada</option>
                          <option value="CPV">Cape Verde</option>
                          <option value="CYM">Cayman Islands</option>
                          <option value="CAF">Central African Republic</option>
                          <option value="TCD">Chad</option>
                          <option value="CHL">Chile</option>
                          <option value="CHN">China</option>
                          <option value="CXR">Christmas Island</option>
                          <option value="CCK">Cocos (Keeling) Islands</option>
                          <option value="COL">Colombia</option>
                          <option value="COM">Comoros</option>
                          <option value="COG">Congo</option>
                          <option value="COD">Congo, the Democratic Republic of the</option>
                          <option value="COK">Cook Islands</option>
                          <option value="CRI">Costa Rica</option>
                          <option value="CIV">C𴥠d'Ivoire</option>
                          <option value="HRV">Croatia</option>
                          <option value="CUB">Cuba</option>
                          <option value="CUW">Cura袯</option>
                          <option value="CYP">Cyprus</option>
                          <option value="CZE">Czech Republic</option>
                          <option value="DNK">Denmark</option>
                          <option value="DJI">Djibouti</option>
                          <option value="DMA">Dominica</option>
                          <option value="DOM">Dominican Republic</option>
                          <option value="ECU">Ecuador</option>
                          <option value="EGY">Egypt</option>
                          <option value="SLV">El Salvador</option>
                          <option value="GNQ">Equatorial Guinea</option>
                          <option value="ERI">Eritrea</option>
                          <option value="EST">Estonia</option>
                          <option value="ETH">Ethiopia</option>
                          <option value="FLK">Falkland Islands (Malvinas)</option>
                          <option value="FRO">Faroe Islands</option>
                          <option value="FJI">Fiji</option>
                          <option value="FIN">Finland</option>
                          <option value="FRA">France</option>
                          <option value="GUF">French Guiana</option>
                          <option value="PYF">French Polynesia</option>
                          <option value="ATF">French Southern Territories</option>
                          <option value="GAB">Gabon</option>
                          <option value="GMB">Gambia</option>
                          <option value="GEO">Georgia</option>
                          <option value="DEU">Germany</option>
                          <option value="GHA">Ghana</option>
                          <option value="GIB">Gibraltar</option>
                          <option value="GRC">Greece</option>
                          <option value="GRL">Greenland</option>
                          <option value="GRD">Grenada</option>
                          <option value="GLP">Guadeloupe</option>
                          <option value="GUM">Guam</option>
                          <option value="GTM">Guatemala</option>
                          <option value="GGY">Guernsey</option>
                          <option value="GIN">Guinea</option>
                          <option value="GNB">Guinea-Bissau</option>
                          <option value="GUY">Guyana</option>
                          <option value="HTI">Haiti</option>
                          <option value="HMD">Heard Island and McDonald Islands</option>
                          <option value="VAT">Holy See (Vatican City State)</option>
                          <option value="HND">Honduras</option>
                          <option value="HKG">Hong Kong</option>
                          <option value="HUN">Hungary</option>
                          <option value="ISL">Iceland</option>
                          <option value="IND">India</option>
                          <option value="IDN">Indonesia</option>
                          <option value="IRN">Iran, Islamic Republic of</option>
                          <option value="IRQ">Iraq</option>
                          <option value="IRL">Ireland</option>
                          <option value="IMN">India</option>
                          <option value="ISR">Israel</option>
                          <option value="ITA">Italy</option>
                          <option value="JAM">Jamaica</option>
                          <option value="JPN">Japan</option>
                          <option value="JEY">Jersey</option>
                          <option value="JOR">Jordan</option>
                          <option value="KAZ">Kazakhstan</option>
                          <option value="KEN">Kenya</option>
                          <option value="KIR">Kiribati</option>
                          <option value="PRK">Korea, Democratic People's Republic of</option>
                          <option value="KOR">Korea, Republic of</option>
                          <option value="KWT">Kuwait</option>
                          <option value="KGZ">Kyrgyzstan</option>
                          <option value="LAO">Lao People's Democratic Republic</option>
                          <option value="LVA">Latvia</option>
                          <option value="LBN">Lebanon</option>
                          <option value="LSO">Lesotho</option>
                          <option value="LBR">Liberia</option>
                          <option value="LBY">Libya</option>
                          <option value="LIE">Liechtenstein</option>
                          <option value="LTU">Lithuania</option>
                          <option value="LUX">Luxembourg</option>
                          <option value="MAC">Macao</option>
                          <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                          <option value="MDG">Madagascar</option>
                          <option value="MWI">Malawi</option>
                          <option value="MYS">Malaysia</option>
                          <option value="MDV">Maldives</option>
                          <option value="MLI">Mali</option>
                          <option value="MLT">Malta</option>
                          <option value="MHL">Marshall Islands</option>
                          <option value="MTQ">Martinique</option>
                          <option value="MRT">Mauritania</option>
                          <option value="MUS">Mauritius</option>
                          <option value="MYT">Mayotte</option>
                          <option value="MEX">Mexico</option>
                          <option value="FSM">Micronesia, Federated States of</option>
                          <option value="MDA">Moldova, Republic of</option>
                          <option value="MCO">Monaco</option>
                          <option value="MNG">Mongolia</option>
                          <option value="MNE">Montenegro</option>
                          <option value="MSR">Montserrat</option>
                          <option value="MAR">Morocco</option>
                          <option value="MOZ">Mozambique</option>
                          <option value="MMR">Myanmar</option>
                          <option value="NAM">Namibia</option>
                          <option value="NRU">Nauru</option>
                          <option value="NPL">Nepal</option>
                          <option value="NLD">Netherlands</option>
                          <option value="NCL">New Caledonia</option>
                          <option value="NZL">New Zealand</option>
                          <option value="NIC">Nicaragua</option>
                          <option value="NER">Niger</option>
                          <option value="NGA">Nigeria</option>
                          <option value="NIU">Niue</option>
                          <option value="NFK">Norfolk Island</option>
                          <option value="MNP">Northern Mariana Islands</option>
                          <option value="NOR">Norway</option>
                          <option value="OMN">Oman</option>
                          <option value="PAK">Pakistan</option>
                          <option value="PLW">Palau</option>
                          <option value="PSE">Palestinian Territory, Occupied</option>
                          <option value="PAN">Panama</option>
                          <option value="PNG">Papua New Guinea</option>
                          <option value="PRY">Paraguay</option>
                          <option value="PER">Peru</option>
                          <option value="PHL">Philippines</option>
                          <option value="PCN">Pitcairn</option>
                          <option value="POL">Poland</option>
                          <option value="PRT">Portugal</option>
                          <option value="PRI">Puerto Rico</option>
                          <option value="QAT">Qatar</option>
                          <option value="REU">R궮ion</option>
                          <option value="ROU">Romania</option>
                          <option value="RUS">Russian Federation</option>
                          <option value="RWA">Rwanda</option>
                          <option value="BLM">Saint Barthꭥmy</option>
                          <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                          <option value="KNA">Saint Kitts and Nevis</option>
                          <option value="LCA">Saint Lucia</option>
                          <option value="MAF">Saint Martin (French part)</option>
                          <option value="SPM">Saint Pierre and Miquelon</option>
                          <option value="VCT">Saint Vincent and the Grenadines</option>
                          <option value="WSM">Samoa</option>
                          <option value="SMR">San Marino</option>
                          <option value="STP">Sao Tome and Principe</option>
                          <option value="SAU">Saudi Arabia</option>
                          <option value="SEN">Senegal</option>
                          <option value="SRB">Serbia</option>
                          <option value="SYC">Seychelles</option>
                          <option value="SLE">Sierra Leone</option>
                          <option value="SGP">Singapore</option>
                          <option value="SXM">Sint Maarten (Dutch part)</option>
                          <option value="SVK">Slovakia</option>
                          <option value="SVN">Slovenia</option>
                          <option value="SLB">Solomon Islands</option>
                          <option value="SOM">Somalia</option>
                          <option value="ZAF">South Africa</option>
                          <option value="SGS">South Georgia and the South Sandwich Islands</option>
                          <option value="SSD">South Sudan</option>
                          <option value="ESP">Spain</option>
                          <option value="LKA">Sri Lanka</option>
                          <option value="SDN">Sudan</option>
                          <option value="SUR">Suriname</option>
                          <option value="SJM">Svalbard and Jan Mayen</option>
                          <option value="SWZ">Swaziland</option>
                          <option value="SWE">Sweden</option>
                          <option value="CHE">Switzerland</option>
                          <option value="SYR">Syrian Arab Republic</option>
                          <option value="TWN">Taiwan, Province of China</option>
                          <option value="TJK">Tajikistan</option>
                          <option value="TZA">Tanzania, United Republic of</option>
                          <option value="THA">Thailand</option>
                          <option value="TLS">Timor-Leste</option>
                          <option value="TGO">Togo</option>
                          <option value="TKL">Tokelau</option>
                          <option value="TON">Tonga</option>
                          <option value="TTO">Trinidad and Tobago</option>
                          <option value="TUN">Tunisia</option>
                          <option value="TUR">Turkey</option>
                          <option value="TKM">Turkmenistan</option>
                          <option value="TCA">Turks and Caicos Islands</option>
                          <option value="TUV">Tuvalu</option>
                          <option value="UGA">Uganda</option>
                          <option value="UKR">Ukraine</option>
                          <option value="ARE">United Arab Emirates</option>
                          <option value="GBR">United Kingdom</option>
                          <option value="USA" selected>India</option>
                          <option value="UMI">United States Minor Outlying Islands</option>
                          <option value="URY">Uruguay</option>
                          <option value="UZB">Uzbekistan</option>
                          <option value="VUT">Vanuatu</option>
                          <option value="VEN">Venezuela, Bolivarian Republic of</option>
                          <option value="VNM">Viet Nam</option>
                          <option value="VGB">Virgin Islands, British</option>
                          <option value="VIR">Virgin Islands, U.S.</option>
                          <option value="WLF">Wallis and Futuna</option>
                          <option value="ESH">Western Sahara</option>
                          <option value="YEM">Yemen</option>
                          <option value="ZMB">Zambia</option>
                          <option value="ZWE">Zimbabwe</option>
                        </select>
                      </div>
                       <div class="form-group col-xs-6">
                        <label for="city"> My city</label>
                        <input id="city" class="form-control input-group-lg" type="text" name="city" title="Enter city" value="{{Auth::user()->city}}" placeholder="Your city" value="Bhubaneswar"/>
                      </div>
                    </div>


                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-info">About me</label>
                        <textarea id="my-info" name="about_me" class="form-control" placeholder="Some texts about me" rows="4" cols="400">{{Auth::user()->about_me}}</textarea>
                      </div>
                    </div>
                    <button class="btn btn-primary"  style="background-color:  #007fff;">Save Changes</button>
                  </form>
                </div>
              </div>


 


              <!-- For blog post -->
                        <!-- Basic Information
              ================================================= -->
              <div class="edit-profile-container" id="blog_post_view" style="display: none;">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Blog Post</h4>
                  <div class="line"></div>
                  <p></p>
                  <div class="line"></div>
                </div> 
                <div class="edit-block">
                  <form method="post" action="{{url('/')}}/user/update_blog"  name="basic-info" id="basic-info" class="form-inline" enctype="multipart/form-data">    
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
                        <div class="form-group col-xs-6">
                        <label for="city"> Post Image</label>
                        <input id="post_image" class="form-control input-group-lg" type="file" name="post_image" title="Enter city" placeholder="Your city" value="Bhubaneswar"/>
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



              <!-- Change Password
              ================================================= -->

              <div class="col-md-12" style="display: none;" id="change_password_view">

           
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-locked-outline"></i>Change Password</h4>
                  <div class="line"></div>
                  <p></p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="update-pass" id="education" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password">Old password</label>
                        <input id="my-password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Old password"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>New password</label>
                        <input class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="New password"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Confirm password</label>
                        <input class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Confirm password"/>
                      </div>
                    </div>
                    <!-- <p><a href="#">Forgot Password?</a></p> -->
                    <button class="btn btn-primary">Update Password</button>
                  </form>
                </div>
              </div>
            </div>

              <!-- Change Password
              ================================================= -->




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
