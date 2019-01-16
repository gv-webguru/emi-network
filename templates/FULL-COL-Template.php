<?php
/**
 * Template Name: FULL Col Template
 * by www.eminetwork.com
 */
?>

<?php get_header(); ?>



<?php

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

if ( has_post_thumbnail() ) {
    //the_post_thumbnail();
    ?>

<div class="jumbotron">
<?php
if( $post->post_parent ) { ?>
  <h1 class="page-title page-title-parent"><span style="font-family: GothamMedium; color: #FFF; font-size: 50px;"><?php echo get_the_title( $post->post_parent ); ?></span></h1>
<?php } else {?>
  <h1 class="page-title"><span style="font-family: GothamMedium; color: #FFF; font-size: 50px;"> <?php the_title();?></span></h1>
<?php } ?>
<?php
if( $post->post_parent ) { ?>
<div style="background:#000000;
background:url('<?php echo $feat_image; ?>') no-repeat center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
height: 208px;
margin-top: 41px;
margin-bottom: 0px;"
>
<?php } else { ?>
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
<?php } ?>

</div>
</div>


<?php } 
?>


<div class="container">

<div class="row">

<div class="col-lg-12">

<?php the_content(); ?>

</div>



</div>

<div class="row">
  <div class="col-lg-12">
    <div style="margin-bottom: 75px;"></div>
  </div>
</div>
</div>

<?php get_footer(); ?>
