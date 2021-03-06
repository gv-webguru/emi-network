<?php
/*
Template Name: Expertise_2 Template
*/

?>
<?php 
session_start();
?>
<?php get_header(); ?>
<style>
    
.col-lg-8 p {
    font-size: 17px;
}


.col-lg-4 {
    margin-top: 20px;
}
.col-lg-4 p {
    font-size: 14px;
    font-family: Gothambook;

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

.sidebar-bar {
    height: 500px;
    float: left; 
    margin-right: 20px; 
    /*padding-top: 3px;*/
    margin-top: 20px;
}

.sidebar-bar img {
     height: 500px; 
}

.bar {
  padding-right: 30px;
  padding-left: 0px;
  border-right: 1px solid #b5aeaa;
  height: 375px;
}

.bar-last {
    padding-right: 30px;
}

@media (max-width: 1200px) {
    .bar {
        padding-right: 0px;
        padding-left: 0px;
        border: none;
        height: auto;
    }

    .bar-last {
        padding-right: 0px;
    }
}

ul.arrow li {
    list-style-image: url('../images/arrow.png');
    margin-top: 10px;
}

ul.dot li {
    list-style: disc;
    margin-top: 5px;
}

ul.dot li a {
    color: orange;
    text-decoration: underline;
}

ul.dot li a:hover {
    color: #6c5e54;
}

img {
    max-width: 90%;
    /*margin-bottom: 20px;*/
}

li a {
    color: #6c5e54;
    cursor: pointer;
}

li a:hover {
    color: #f57e20;
}

.button-orange a {
    color: #fff;
}

.button-orange a:hover {
    /*text-shadow: 2px 2px #000*/
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

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

if ( has_post_thumbnail() ) {
    //the_post_thumbnail();
    ?>

<div class="jumbotron">
<h1 class="page-title"><span style="font-family: GothamMedium; color: #FFF; font-size: 50px;"><?php the_title(); ?></span></h1>
<div style="background:#000000; background:url('<?php echo $feat_image; ?>') no-repeat center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
height: 280px;
margin-top: 41px;
margin-bottom: -45px;"
>
</div>
</div>


<?php } 
?>



<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="bar">
<a href="<?php echositeurl(); ?>/content-marketing/"><h4 class="button-orange">Content Marketing <br>and Custom Publishing</h4></a>
    <ul class="arrow">
        <li><a href="<?php echositeurl(); ?>/content-marketing/?ID=5925">Forbes, Forbes.com and the Forbes Custom Business Marketplace</a></li>
        <!--<li><a href="<?php echositeurl(); ?>/content-marketing/?ID=5936">USA Today special sections</a></li>-->
        <li><a href="<?php echositeurl(); ?>/content-marketing/?ID=5939">The Chicago Cubs and Vine Line magazine</a></li>
<li><a href="<?php echositeurl(); ?>/content-marketing/?ID=6518">Hemispheres magazine</a></li>
    </ul>
</div>
</div>
<div class="col-lg-4">
<div class="bar">
    <a href="<?php echositeurl(); ?>/advertising/"><h4 class="button-orange">Advertising</h4></a>
    <ul class="arrow">
        <li><a href="<?php echositeurl(); ?>/advertising/">Comprehensive solutions for colleges, universities and graduate schools</a></li>
            <ul class="dot">
                <li><a href="<?php echositeurl(); ?>/advertising/?ID=5943">USA Today College Guide</a></li>
                <li><a href="<?php echositeurl(); ?>/advertising/?ID=5947">Forbes Education Innovators</a></li>
                <li><a href="<?php echositeurl(); ?>/advertising/?ID=5951">Home Team Marketing</a></li>
            
            </ul>
        <li><a href="<?php echositeurl(); ?>/advertising/?ID=5955">Savory magazine</a></li>
    </ul>
    </div>
</div>
<div class="col-lg-4">
<div class="bar-last">
    <a href="<?php echositeurl(); ?>/our-work/"><h4 class="button-orange">Digital & Marketing Services</h4></a>
    <ul class="arrow">
        <li><a href="<?php echositeurl(); ?>/our-work/">Website design and content</a></li>
<li><a href="<?php echositeurl(); ?>/our-work/">Social media management</a></li>
<li><a href="<?php echositeurl(); ?>/our-work/">Email and inbound marketing</a></li>
    </ul>
</div>
</div>

</div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div style="margin-bottom: 75px;"></div>
  </div>
</div>
</div>
      
<?php get_footer(); ?>