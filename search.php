<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package eminetwork
 */


?>

<?php get_header(); ?>


<?php

$feat_image = wp_get_attachment_url( get_post_thumbnail_id(3021) ); ?>



<div class="jumbotron">
<h1 class="page-title"><span style="font-family: GothamMedium; color: #FFF; font-size: 50px;"><?php the_title(); ?></span></h1>
<div style="background:#000000;
background:url('<?php echo $feat_image; ?>') no-repeat center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
height: 280px;
margin-top: 50px;
margin-bottom: -45px;">
</div>
</div>



<div class="container">
<div class="row">

<div class="col-lg-12">
                             
	<?php if ( have_posts() ) : ?>
        
 
    <header class="page-header <?php echo $header_style;?>">
        <h1 class="search_page_title" style="font-size: 45px; font-family: GothamBook; margin-top: -45px; margin-bottom: 20px; position: relative; color: #6c5e55; text-transform: uppercase; padding-right: "><span><?php printf( __( 'Search Results for: %s', 'eminetwork' ), '' . get_search_query() . '' ); ?></span></h1>                  
    </header>

        
    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
    
        <?php//get_template_part( 'partials/content', get_post_format() ); ?>
        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Read more....</a> </p>
     	<hr>
    <?php endwhile; ?>
    
    <?php else : ?>
    
    <?php get_template_part( 'no-results', 'search' ); ?>
    
    <?php endif; ?>


<?php if( $wp_query->max_num_pages > 1 ) : ?>
<?php endif; ?>                                


</div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div style="margin-bottom: 75px;"></div>
  </div>
</div>
</div>

<?php get_footer(); ?>