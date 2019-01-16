<?php
/*
Template Name: Connect Template
*/
?>


<?php include('header.php'); ?>
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
margin-bottom: -45px;"
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
<div class="sidebar-bar hide-on-mobile hide-on-tablet"><img src="http://www.eminetwork.com/wp-content/themes/emi/images/vertical-rule.png" alt=""></div>
    <?php echo get_post_meta($post->ID, 'sidebarcontent', true); ?>
</div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div style="margin-bottom: 75px;"></div>
  </div>
</div>
</div>

<?php include('footer.php'); ?>
