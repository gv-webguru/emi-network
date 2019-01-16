<?php
/**
 * Template Name: Default EMI Template
 * by www.eminetwork.com
 */
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
<div style="background:#000000;
background:url('<?php echo $feat_image; ?>') no-repeat center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
height: 280px;
margin-top: 41px;
margin-bottom: 0px;"
>
</div>
</div>


<?php } 
?>


<div class="container">

<div class="row">

<div class="col-lg-9">

<?php the_content(); ?>

</div>

<div class="col-lg-3">
<?php echo get_post_meta($post->ID, 'sidebarcontent', true); ?>
</div>


</div>

<div class="row">
  <div class="col-lg-12">
    <div style="margin-bottom: 75px;"></div>
  </div>
</div>
</div>

<?php get_footer(); ?>
