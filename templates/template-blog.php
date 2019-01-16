<?php

/**

 * The Template for displaying all single posts.

 * Template Name: Blog Main Template

 * 

 * @package eminetwork

 */

?>





<?php get_header(); ?>







<style>

  ul.sidebar img {

    float: left;

    margin-left: 10px;

    padding-top: 0px;

    padding-right: 15px;

    margin-top:0px;

    -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)));

}

div.blog {

  display: inline-block;

  padding: 10px;

  margin: 0 0 2.5% 2.5%;

  background: #fff;

  border: 1px solid #ddd;

  font-size: 16px;

  font-size: 1rem;

  vertical-align: top;

  box-shadow: 0 0 5px #ddd;

  box-sizing: border-box;

  -moz-box-sizing: border-box;

  -webkit-box-sizing: border-box;

}



div.blog img {

  max-width: 100%;

  height: auto;

  margin: 0 0 0;

}



/*a {

  text-decoration: none;

  outline: 0;

  -webkit-transition: 0.2s color linear;

  -moz-transition: 0.2s color linear;

  transition: 0.2s color linear;

  cursor: pointer;

}*/

/*

.container {

    padding: 0px;

}*/







  

li {

  list-style: none;

}



.well {

  min-height: 20px;

  padding: 10px;

  margin-bottom: 20px;

  background-color: #f5f5f5;

  border: 1px solid #e3e3e3;

  border-radius: 4px;

  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);

  box-shadow: inset 0 1px 1px rgba(0,0,0,.05);

}



.well {

  background-image: -webkit-linear-gradient(top,#e8e8e8 0,#f5f5f5 100%);

  background-image: -o-linear-gradient(top,#e8e8e8 0,#f5f5f5 100%);

  background-image: -webkit-gradient(linear,left top,left bottom,from(#e8e8e8),to(#f5f5f5));

  background-image: linear-gradient(to bottom,#e8e8e8 0,#f5f5f5 100%);

  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffe8e8e8', endColorstr='#fff5f5f5', GradientType=0);

  background-repeat: repeat-x;

  /*border-color: #dcdcdc;*/

  border: 1px solid #ddd;

  -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,.05),0 1px 0 rgba(255,255,255,.1);

  box-shadow: inset 0 1px 3px rgba(0,0,0,.05),0 1px 0 rgba(255,255,255,.1);

}



/*  Bootstrap Clearfix */



/*  Tablet  */

@media (min-width:767px){



  /* Column clear fix */

  .col-lg-1:nth-child(12n+1),

  .col-lg-2:nth-child(6n+1),

  .col-lg-3:nth-child(4n+1),

  .col-lg-4:nth-child(3n+1),

  .col-lg-6:nth-child(2n+1),

  .col-md-1:nth-child(12n+1),

  .col-md-2:nth-child(6n+1),

  .col-md-3:nth-child(4n+1),

  .col-md-4:nth-child(3n+1),

  .col-md-6:nth-child(2n+1){

    clear: none;

  }

  .col-sm-1:nth-child(12n+1),

  .col-sm-2:nth-child(6n+1),

  .col-sm-3:nth-child(4n+1),

  .col-sm-4:nth-child(3n+1),

  .col-sm-6:nth-child(2n+1){

    clear: left;

  }

}





/*  Medium Desktop  */

@media (min-width:992px){



  /* Column clear fix */

  .col-lg-1:nth-child(12n+1),

  .col-lg-2:nth-child(6n+1),

  .col-lg-3:nth-child(4n+1),

  .col-lg-4:nth-child(3n+1),

  .col-lg-6:nth-child(2n+1),

  .col-sm-1:nth-child(12n+1),

  .col-sm-2:nth-child(6n+1),

  .col-sm-3:nth-child(4n+1),

  .col-sm-4:nth-child(3n+1),

  .col-sm-6:nth-child(2n+1){

    clear: none;

  }

  .col-md-1:nth-child(12n+1),

  .col-md-2:nth-child(6n+1),

  .col-md-3:nth-child(4n+1),

  .col-md-4:nth-child(3n+1),

  .col-md-6:nth-child(2n+1){

    clear: left;

  }

}





/*  Large Desktop  */

@media (min-width:1200px){



  /* Column clear fix */

  .col-md-1:nth-child(12n+1),

  .col-md-2:nth-child(6n+1),

  .col-md-3:nth-child(4n+1),

  .col-md-4:nth-child(3n+1),

  .col-md-6:nth-child(2n+1),

  .col-sm-1:nth-child(12n+1),

  .col-sm-2:nth-child(6n+1),

  .col-sm-3:nth-child(4n+1),

  .col-sm-4:nth-child(3n+1),

  .col-sm-6:nth-child(2n+1){

    clear: none;

  }

  .col-lg-1:nth-child(12n+1),

  .col-lg-2:nth-child(6n+1),

  .col-lg-3:nth-child(4n+1),

  .col-lg-4:nth-child(3n+1),

  .col-lg-6:nth-child(2n+1){

    clear: left;

  }

}

</style>



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

margin-bottom: 20px;"

>

</div>

</div>





<?php } 

?>





<div class="container">





<div class="col-lg-9">

<div class="row">

<!-- cont. other post -->

<?php

    //$args = array( 'posts_per_page' => 1 );

    $args = array(

    'numberposts' => -1,

    'post_type' => 'post',

    'meta_key'     => 'featuredpost',

    'meta_value'   => 'yes',

    'meta_compare' => '!='

);

$query = new WP_Query( $args );



    $lastposts = get_posts( $args );

    foreach ( $lastposts as $post ) :

    setup_postdata( $post ); ?>

<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

    <div class="well">

<?php    

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );



if ( has_post_thumbnail() ) {

    //the_post_thumbnail();

    ?>

    <a href="<?php the_permalink(); ?>"><img class="thumbnail img-responsive" src="<?php echo $feat_image; ?>"></a>

<?php } ?>

<h3 style="font-size: 100%;"><a href="<?php the_permalink(); ?>"><?php echo get_the_title( $ID ); ?></a></h3>



<p style="color: #6c5e55; font-family: GothamBook;">

<?php the_excerpt(); ?>

</p>





    </div>

</div>

<?php endforeach; ?>

<!-- end cont. other post -->

</div>

</div><!-- end col-lg-9 -->




<?php get_sidebar(); ?>



<div class="row">

  <div class="col-lg-12">

    <div style="margin-bottom: 75px;"></div>

  </div>

</div>

</div><!-- end container -->















<?php get_footer(); ?>