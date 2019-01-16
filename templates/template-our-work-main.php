<?php

/**
 * Template Name: Our Work Main Template
 * by www.eminetwork.com
 */

?>


<?php get_header(); ?>

<style>

h4 {
    font-family: GothamM;
    color: #6c5e55;
}

h3 {
    font-family: GothamBook;
    color: #6c5e55;
}


</style>

<?php

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

if ( has_post_thumbnail() ) {
    //the_post_thumbnail();
    ?>

    <div style="background:#000000;
    background:url('<?php echo $feat_image; ?>') no-repeat center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 280px;
    margin-top: 80px;"
    >


<?php } 
?>

<!-- <div class="main-content-background-banner-approach"> -->
        
        <div class="grid-container">
            <div id="primary" class="grid-parent grid-100 tablet-grid-100 mobile-grid-100">
            
            <?php while ( have_posts() ) : the_post(); ?>

                <?php
/**
 * The template used for displaying page content in page.php
 *
 * @package eminetwork
 */
 
$pageslogan   = get_post_meta( get_the_ID() , 'ut_section_slogan' , true ); 
$header_style = get_post_meta( get_the_ID() , 'ut_section_header_style' , true ); 
$header_style = ( !empty($header_style) && $header_style != 'global' ) ? $header_style : ot_get_option('ut_global_headline_style'); 

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
        <header class="page-header <?php echo $header_style;?>">
            <h1 class="page-title"><span style="font-family: GothamM;"><?php the_title(); ?></span></h1> 
            <?php if( !empty($pageslogan) ) : ?>
                <p class="lead"><?php echo $pageslogan; ?></p>
            <?php endif; ?>
                
            <div class="entry-meta" style="padding-top: 50px;">
                
                <?php //edit_post_link( __( 'Edit', 'eminetwork' ), '<span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span>' ); ?>
            </div>                                  
        </header><!-- .page-header -->
    </div>

    
    <div class="grid-100 mobile-grid-100 tablet-grid-100">
    <div class="entry-content clearfix">    



<div id="four-columns" class="grid-container">
    <ul class="rig columns-4">

    <?php the_content(); ?>


<!-- start post -->    

<div class="col-xs-6 col-sm-5 col-md-4 col-lg-3">
<div class="border-img">
<img src="<?php echo $_SERVER['PHP_SELF']; ?>/wp-content/uploads/2015/01/work_thumbnail.jpg">   
</div>
</div>


<?php 

// args
$args = array(
    'posts_per_page' => 50,
        'meta_key' => 'ourworkorder',
        'post_type' => 'page',
        'post_status' => 'publish',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
);

// get results
$the_query = new WP_Query( $args );

// The Loop
?>
<?php if( $the_query->have_posts() ): ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


<?php    
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

if ( has_post_thumbnail() ) {
    //the_post_thumbnail();
    ?>

<div class="col-xs-6 col-sm-5 col-md-4 col-lg-3">
<div class="border-img">
<a href="<?php the_permalink(); ?>"><img id="ourworkimghover" src="<?php echo $feat_image; ?>"></a>
</div>
</div>  
<?php } ?>

<!--
<h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title( $ID ); ?></a></h3>
-->


<!--
<a style="float: right; padding-top: 10px;" href="<?php the_permalink(); ?>"> READ MORE</a>
-->


    <?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

<!-- end post -->

</ul>
</div>



    </div><!-- .entry-content -->
    </div>
</div><!-- #post -->
            
                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                        comments_template();
                ?>

            <?php endwhile; // end of the loop. ?>
            
            </div><!-- close #primary -->
            
        </div><!-- close grid-container -->

        
            
    
        <div class="ut-scroll-up-waypoint" data-section="section-<?php echo $post->post_name; ?>"></div>

        

        
<?php get_footer(); ?>
