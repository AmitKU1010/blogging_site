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



 
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>

    <!-- WYSIWYG Editor css -->
  <link href="{{ asset('assets/plugins/wysiwyag/richtext.css') }}" rel="stylesheet" />

<!-- Add fancyBox -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />

<!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->



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

.panel .panel-footer { 
  padding: 8px !important; 
  background-color: #f9f9f9 !important;
  border:0px;
  border-style: none;
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

} 
.like-post{
  color: #e21309 !important;
}




/*style for footer*/
/* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #262626;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #262626 !important;
}
#footer h5{
  padding-left: 10px;
    /*border-left: 3px solid #eeeeee;*/
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
  padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
  font-size:25px;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.social li:hover a i {
  font-size:30px;
  margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
  color:#ffffff;
}
#footer ul.social li a:hover{
  color:#eeeeee;
}
#footer ul.quick-links li{
  padding: 3px 0;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.quick-links li:hover{
  padding: 3px 0;
  margin-left:5px;
  font-weight:700;
}
#footer ul.quick-links li a i{
  margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
    #footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}
/*style for footer*/






















</style>
	</head>

