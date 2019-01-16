

<?php get_header(); ?>

<style>

h1, h2, h3, h4 {
    font-family: GothamM;
    color: #6c5e55;
}

p {
    font-family: GothamBook;
    color: #6c5e55;
}

li {
    font-family: GothamBook;
    color: #6c5e55;
}

b {
    font-family: GothamBold;
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
                
            </div>                                  
        </header><!-- .page-header -->
    </div>
    
    <div class="grid-100 mobile-grid-100 tablet-grid-100">
    <div class="entry-content clearfix">    
        <?php the_content(); ?>
<?php echo get_post_meta($post->ID,'butterfly',true) ?>
        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'eminetwork' ),
                'after'  => '</div>',
            ) );

            
        ?>                                        
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
