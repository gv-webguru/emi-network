<?php

/*

 * The header for our theme

 * by dev.deliveredoncloud.com/emi

 */

?>
<?php

$aboutus = "/about-us.php";

$contactus = "/contact-us.php";

$digitorial = "/digitorial.php";

$creativemarketingservices = "/creative-marketing-services.php";

$ourclients = "/our-clients.php";

$marketingpublicationservices = "/marketing-publication-services.php";

$jobs = "/account_executive.php";

$webinars = "/category/webinars/";

//$test = "/wp-content/themes/emi/test.php";

$array = array($aboutus, $contactus, $digitorial, $creativemarketingservices, $ourclients, $marketingpublicationservices, $jobs, $test, $webinars);

$array1 = array($aboutus => 'http://www.eminetwork.com/approach/',

    $contactus => 'http://www.eminetwork.com/connect/',

    $digitorial => 'http://www.eminetwork.com/',

    $creativemarketingservices => 'http://www.eminetwork.com/',

    $ourclients => 'http://www.eminetwork.com/',

    $marketingpublicationservices => 'http://www.eminetwork.com/',

    $jobs => 'http://www.eminetwork.com/join-the-network/',

    $webinars => 'http://www.eminetwork.com/webinars/'

    //$test => './'

    );

$redirect = $array1[$_SERVER['REQUEST_URI']];

if (in_array($_SERVER['REQUEST_URI'], $array)) {

    header("Location:". $redirect);

    die();

    //echo $array1[$_SERVER['REQUEST_URI']];

}

else {

    //echo "else";

}

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php wp_title(); ?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echourl(); ?>/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echourl(); ?>/favicon.ico" type="image/x-icon">

<!-- Latest compiled and minified CSS-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional Theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >



<!-- Custom CSS -->

<link href="<?php echourl(); ?>/css/full-slider.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>

          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <![endif]-->

<link href="<?php echourl(); ?>/fonts.css" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="<?php echourl(); ?>/style.css" rel="stylesheet">

<!-- <link href="<?php echourl(); ?>/secondstyle.css" rel="stylesheet"> -->

<style>
body {
/*background: url(http://www.eminetwork.com/wp-content/uploads/2015/02/01_emi_web_home_1.jpg) no-repeat center center fixed; 

  -webkit-background-size: cover;

  -moz-background-size: cover;

  -o-background-size: cover;

  background-size: cover;*/

}
body {
	color: #6c5e54;
	font-family: GothamBook;
}
.navbar-brand {
	position: absolute;
	width: 100%;
	left: 0;
	text-align: center;
	margin: auto;
}
.navbar-default {
	background-color: #fff;
	background-image: #fff;
	border-color: #e7e7e7;
	box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
}
.navbar-default {
	background-image: -webkit-linear-gradient(top, #fff 0, #fff 100%);
	background-image: -o-linear-gradient(top, #fff 0, #fff 100%);
	background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#fff));
	background-image: linear-gradient(to bottom, #fff 0, #fff 100%);
 filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#fff8f8f8', GradientType=0);
 filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
	background-repeat: repeat-x;
}
.site-logo {
}
.site-logo img {
	/*position: absolute;

  top: 0px;

  right: 0;

  left: 0;*/

	max-height: 60px;
	/*vertical-align: middle;*/

	margin-left: auto;
	margin-right: auto;
}
.site-logo img:hover {
/*max-height: 65px;*/

}

@media (min-width: 767px) {
.nav-center {
	margin: 0;
	float: none;/*display: none;*/

}
.navbar-inner {
	text-align: center;
	padding-top: 15px;/*display: none;*/

}
.site-logo-mobile img {
	max-height: 60px;
}
}
.navbar {
	min-height: 90px;
}
footer {
	position: fixed;
	height: 50px;
	bottom: 0px;
	width: 100%;
	background: #6c5e55;
	width: 100%;
	background: -webkit-linear-gradient(left, black, #6c5e55 30%, #6c5e55 30%, #6c5e55);
	background: -moz-linear-gradient(left, black, #6c5e55 30%, #6c5e55 30%, #6c5e55);
	background: linear-gradient(left, black, #6c5e55 30%, #6c5e55 30%, #6c5e55);
 background: -ms-filter: "progid:DXImageTransform.Microsoft.Gradient(left, black, #6c5e55 30%, #6c5e55 30%, #6c5e55)";
	line-height: 50px;
	border-top-style: solid;
	border-color: #fff;
}
.footer .container p {
	color: #fff;
	/*text-transform: uppercase;*/

	font-size: 12px;
}
.footer .container p.left {
	float: left;
}
.footer .container p.left img {
	max-width: 20px;
	vertical-align: middle;
	margin-right: 15px;
}
.footer .container p.right {
	float: right;
}
.navbar-brand {
	margin-left: auto;
	margin-right: auto;
	right: 0;
	left: 0;
	top: 10px;
	z-index: -2;
}
.navbar .navbar-nav {
	display: inline-block;
	float: none;
	padding-top: 15px;
}
.navbar .navbar-collapse {
	text-align: center;
}
.navbar-default .navbar-nav>li>a {
	color: #6d6e71;
	white-space: nowrap;
	/*padding-left: 35px;*/

	text-transform: uppercase;
	letter-spacing: 1px;
	font-size: 13px;
	position: relative;
	text-decoration: none;
	display: inline-block;
	margin-right: 15px;
}
.navbar-default .navbar-nav>li>a:hover {
	color: #FF6E00;
}
.page-title, .parallax-title, .section-title {
	font-size: 45px;
	margin-top: 160px;
	margin-bottom: 0;
	position: absolute;
	color: #FFFFFF;
	text-transform: uppercase;
	text-shadow: 3px 2px 60px rgba(0, 0, 0, 1);
	text-align: center;
	margin-left: auto;
	margin-right: auto;
	right: 0;
	left: 0;
}
h3 {
	word-break: normal;
	font-size: 25px;
	margin-bottom: 5px;
	font-family: GothamBold;
}
h4 {
	word-break: normal;
	margin-bottom: 5px;
	font-family: GothamMedium;
	color: #6c5e55;
}
.nav li {
	font-family: GothamMedium;
}
.navbar.navbar-default {
	padding: 0 0;
	border-radius: 0;
	-webkit-transition: all 0.5s ease-in-out 0s;
	-moz-transition: all 0.5s ease-in-out 0s;
	-o-transition: all 0.5s ease-in-out 0s;
	transition: all 0.5s ease-in-out 0s;
	position: relative;
}
.navbar .navbar-brand {
	color: #000;
	font-size: 36px;
	height: auto;
	left: 0;
	margin: 0 auto !important;
	position: absolute;
	right: 0;
	text-transform: uppercase;
	top: -5px;
	width: 218px;
	-webkit-transition: all 0.5s ease-in-out 0s;
	-moz-transition: all 0.5s ease-in-out 0s;
	-o-transition: all 0.5s ease-in-out 0s;
	transition: all 0.5s ease-in-out 0s;
	z-index: 99999;
}
.navbar .navbar-brand:hover {
	width: 240px;
	top: -10px;
}
.navbar-default .navbar-nav>li>a {
	font-family: GothamMedium;
}
.navbar-default .navbar-nav>li:after {
	content: "|";
	height: 10px;
	left: 5%;
	right: 0%;
	position: relative;/*  padding-right: 1%;

  padding-left: 1%;*/

  /*display: inline-block;*/

}
.navbar-default .navbar-nav>li.bar_clearing:after {
	display: none;
}

@media (max-width: 992px) {
.navbar-default .navbar-nav>li:after {
	display: none;
}
}
.search {
	position: relative;
	top: 20px;
	left: 20px;
}
#search_box {
	display: none;
	position: fixed;
	top: 63px;
	right: 258px;
	/*width: 200px;

  height: 50px;

  padding: 5px;

  background: #fff;*/

	z-index: 9999;/*border: gray solid 1px;*/

}
#search_box input {
/*height: 30px;*/

  /*position: relative;*/

  /*left: 0px;*/

}
#search_box input[type="image"] {
	position: absolute;
	top: 6px;
	right: 6px;
	height: 40px;
}

@media (max-width: 1200px) {
#search {
/*display: none;*/

}
}
/*.carousel-caption {

  position: absolute;

  right: 15%;

  bottom: 20px;

  left: 15%;

  z-index: 10;

  right: 20%;

  left: 20%;

  padding-bottom: 0px;

  color: #fff;

  text-align: center;

  text-shadow: 0 1px 2px rgba(0,0,0,.6);

}*/



.carousel-caption h2 {
	color: #fff;
	font-size: 60px;
	font-family: GothamMedium;
}
.carousel-caption {
	position: absolute !important;
	/*width: 100%;*/

	z-index: 10;
	background: none;
	border: none;
	top: 45%;
	padding-top: 0;
}

@media (max-width: 768px) {
.carousel-caption h2 {
	color: #fff;
	font-size: 45px;
}
}
.col-lg-8 p {
	font-size: 14px;
	line-height: 24px;
}
.col-lg-4 {
	margin-top: 20px;
}
.col-lg-4 p.quote {
	font-size: 14px;
	text-transform: uppercase;
	font-family: GothamMedium;
	line-height: 24px;
}
.col-lg-4 p {
	font-size: 14px;
	font-family: GothamBook;
	line-height: 24px;
}
a, .ha-transparent #navigation ul li a:hover {
	color: #FF6E00;
}

@media (max-width: 768px) {
.hide-on-mobile {
	display: none;
}
}

@media (max-width: 1200px) {
.hide-on-tablet {
	display: none;
}
}
.border-img {
	padding: 10px;
	margin: 0 0 2.5% 2.5%;
	background: #fff;
	border: 1px solid #ddd;
	vertical-align: top;
	box-shadow: 0 0 5px #ddd;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
}
#profileimghover {
	max-width: 100%;
}
#ourworkimghover:hover {
	background-color: #000000;
	border: 2px solid #f57e20;
}
#profileimghover:hover {
	-moz-box-shadow: 0 0 10px #ccc;
	-webkit-box-shadow: 0 0 10px #ccc;
	box-shadow: 0 0 10px #ccc;/* border: 1px solid #f57e20; */

  

}
.emi_video_load_bg {
	background: rgba(0, 0, 0, .5);
	display: none;
	position: fixed;
	width: 100%;
	height: 100%;
	z-index: 99999;
}
.emi_video_load {
	display: none;
	position: fixed;
	left: 50%;
	top: 50%;
	-ms-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	-webkit-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	z-index: 99999;
}
.emi_video_load img {
	max-width: 100%;
}
</style>

</head>
<div class="emi_video_load_bg"></div>
<div class="emi_video_load">
  <iframe src="https://player.vimeo.com/video/138343846" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>
<?php wp_head(); ?>

<body>

<!-- Header -->

<header class="header">
  <div class="header-nav"> 
    
    <!-- menu --> 
    
    <!-- <div id="search-icon">

      <i class=""></i>

        <form role="search" method="get" id="searchform" action="http://staging.dev.deliveredoncloud.com/emi/nssa" class="">

        <input type="text" value="" name="s" placeholder="Search" id="s">

        </form>

      </div> -->
    
    <nav role="navigation" class="navbar navbar-default solid-color white">
      <div class="container">
        <div class="navbar-header">
          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          
          <!-- logo --> 
          
          <a href="<?php echo echositeurl(); ?>" class="navbar-brand"> <img class="img-responsive" src="http://www.eminetwork.com/wp-content/themes/EMI Network/images/emi-logo.png" style="width:90%" alt=""></a></div>
        <div class="navbar-collapse collapse no-padding" id="navbar" aria-expanded="false" role="menu">
          <div class="row">
            <div class="col-md-5 col-md-offset-right-1">
              <ul class="nav navbar-nav pull-right">
                <li class="mobile"> <a href="<?php echo get_permalink( 3011 ); ?>" class="hvr-overline-from-center">Approach</a></li>
                <li class="mobile"><a href="<?php echo get_permalink( 5904 ); ?>">Expertise</a></li>
                <!--<li class="mobile bar_clearing"><a  href="<?php echo get_permalink( 3019 ); ?>">Our Team</a></li>-->
                
                <!--<li class="mobile"><a href="<?php echo get_permalink( 3015 ); ?>">Our Work</a></li>-->
                
              </ul>
            </div>
            <div class="col-md-5 col-md-offset-1">
              <ul class="nav navbar-nav pull-left">
                <li class="mobile"><a  href="http://www.eminetwork.com/join-the-network/">Join Us</a></li>
               <li class="mobile"><a  href="<?php echo get_permalink( 3021 ); ?>">Blog</a></li>
                <li class="mobile"><a  href="<?php echo get_permalink( 3023 ); ?>">Connect</a></li>
                <li class="mobile bar_clearing search" id="search"><img src="http://www.eminetwork.com/wp-content/themes/emi/images/searchicon.png" alt="Search"></li>
              </ul>
              <div class="col-sm-3 col-md-3 pull-right">
                <div id="search-icon">
                  <form role="search" method="get" id="searchform" action="<?php echo echositeurl(); ?>" class="">
                    <input type="text" value="" name="s" placeholder="Search" id="s" style="display: none;">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!--/.nav-collapse --> 
        
      </div>
    </nav>
    
    <!-- end nav --> 
    
  </div>
</header>
