<?php
/**
 * Template Name: Our Work Detail Template
 * by www.eminetwork.com
 */
?>

<?php get_header(); ?>
<style>
    
.col-lg-8 p {
    font-size: 17px;
}
.chk{
padding-top:21px;
}
.chk .col-lg-3{
padding-top:20px;
}


.col-lg-4 {
    margin-top: 20px;
}
.col-lg-4 p {
    font-size: 14px;
    font-family: GothamMedium;

}

.connect {
    margin: 10px 0 10px 0;
}

.jumbotron {
    padding: 48px 0 48px 0;
    margin-bottom: 0px;
    color: inherit;
    background-color: #FFF;
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

.border-img img {
  height: auto;
  max-width: 100%;
  width: auto;
  -ms-interpolation-mode: bicubic;
  border: 0;
  vertical-align: bottom;
}

.col-lg-9 img {
    width: 100%;
    height: 100%;
}

.col-lg-9 iframe {
    width: 100%;
    height: 100%;
}

.sidebar-bar {
    height: 500px;
    float: left; 
    margin-right: 20px; 
    /*padding-top: 3px;*/
    margin-top: 0px;
}

.sidebar-bar img {
     height: 500px; 
}


#image-container1 { 
  min-width:10px; /* width of 3 images (746px) plus images' padding and border (36px) */ 
  padding:10px; 
 } 
#image-container1 img { 
  padding:5px; 
 } 
#image-right-left { 
  float:right; 
  width:15px;
  margin-top: -34.5px;
  margin-right: 33px;
  display: none;
 } 
 


#image-right-center { 
  float:right; 
  width:3px;
  height: 40px;
  margin-top: -43px;
  margin-right: 22px;
display: none;
 } 



#image-right-right { 
  float:right; 
  width:15px;
  margin-top: -34.5px;
  margin-left: 0px;
  display: none;
 } 


#image-left { 
  float:left; 
  width:20px;
  padding-top: 9px;
 } 
#image-center { 
  display:block; 
  width:350px;
  margin:auto;
  margin-top: 20px;
  font-family: GothamMedium; font-size: 200%; text-transform: uppercase;
 } 

div#abc1 {
width:100%;
height:100%;
top:80px;
left:0;
position:absolute;
background-color:#FFFFFF;
}


.ourwork_header_bar {
  height: 75px;
  
  background: #6c5e55;
  /* background: -webkit-linear-gradient(right, black, #6c5e55 30%, #6c5e55 30%, #6c5e55);
  background: -moz-linear-gradient(left, black, #6c5e55 30%, #6c5e55 30%, #6c5e55);
  background: linear-gradient(left, black, #6c5e55 30%, #6c5e55 30%, #6c5e55);
  background: -ms-filter: "progid:DXImageTransform.Microsoft.Gradient(left, black, #6c5e55 30%, #6c5e55 30%, #6c5e55)";
  */
  
  padding: 30px 0;
  text-align:center;
  position:relative;
  border-top-style: solid;
    border-top-width: 3px;
    border-top-color: #FFFFFF;
    vertical-align:middle;
  color:#FFFFFF;
  line-height: 40px;
}


.ha-ourwork_header_bar {
  position: absolute;
  top: 10;
  left: 0;
  width:100%;
  padding: 0;
}


.ourwork-x-left {
  position: absolute;
  left: 15px;
  vertical-align: middle;
  width: 75px;
}


.ourwork-x-right {
  position: absolute;
  right: 100px;
  top: 10px;

}

.ourwork-x-right img {
  max-width: 1px;
  vertical-align: middle;
}

</style>
<!-- <div class="container">

      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
        </p>
      </div>

    </div>  -->

<?php

$feat_image = wp_get_attachment_url( get_post_thumbnail_id( 3015 ) );

if ( has_post_thumbnail() ) {
    //the_post_thumbnail();
    ?>

<div class="jumbotron">
<div style="background:#000000;
height: 50px;
margin-top: 41px;
margin-bottom: 0px;"
>
</div>
</div>


<?php } 
?>

<div id="abc1">
    <div class="ourwork_header_bar ha-ourwork_header_bar">

<div id="image-container"> 
<a href="./our-work/"><img id="image-left" src="<?php echourl(); ?>/images/x.png" alt=""></a>

<div id="image-center" style="">Creative Services</div>


<a href="./tom-schaefer/"><img id="image-right-right" src="<?php echourl(); ?>/images/arrow-right-ourwork.png" alt=""></a>
<img id="image-right-center" src="<?php echourl(); ?>/images/vertical-rule-ourwork.png" alt=""> 
<a href="./jane-weldon/"><img id="image-right-left" src="<?php echourl(); ?>/images/arrow-left-ourwork.png" alt=""></a>

</div>

</div> 
           </div><!-- close container -->
    </div><!-- close div -->
</div>


<div class="container chk">

<div class="row">

<?php the_content(); ?>

</div>

<div class="row">
  <div class="col-lg-12">
    <div style="margin-bottom: 75px;"></div>
  </div>
</div>
</div>

<?php get_footer(); ?>