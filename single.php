<?php
/**
 * The Template for displaying all single posts.
 *
 * @package eminetwork
 */

get_header(); ?>


<?php

$feat_image = wp_get_attachment_url( get_post_thumbnail_id('3021') );

if ( has_post_thumbnail() ) {
    //the_post_thumbnail();
    ?>

<div class="jumbotron">
<h1 class="page-title"><span style="font-family: GothamMedium; color: #FFF; font-size: 50px;">Blog</span></h1>
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
    
            <?php while ( have_posts() ) : the_post(); ?>

                <?php //the_content(); ?>
                <?php get_template_part( 'partials/content', get_post_format() ); ?>
    
            <?php endwhile; // end of the loop. ?>
            
</div>
            

            <?php get_sidebar(); ?>
            
</div>


<div class="row">
  <div class="col-lg-12">
    <div style="margin-bottom: 75px;"></div>
  </div>
</div>

</div>
        
<?php get_footer(); ?>



