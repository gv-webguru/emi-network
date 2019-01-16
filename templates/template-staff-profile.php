<?php

/**
 * Template Name: Staff Profile Template
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


.thumbnail1{
    position:relative;

}


img.alignleft {
  margin: 5px 20px 5px 0;
}

.profileimage {
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

.alignleft {
  float: left;
}

img {
  height: auto;
  max-width: 100%;
  width: auto\9;
  -ms-interpolation-mode: bicubic;
  border: 0;
  vertical-align: bottom;
}


.post-content1 {
    background-color: #c4bfbb;
    background-position: center;
    width: 50px;
    height: auto;
    /* line-height: 24px; */
    top:50;
    right:50;
    position: absolute;
    font-size: 11px;
    color: #FFFFFF;
    text-transform: uppercase;
    padding-right: 3px;
    font-family: GothamM;
    text-align: center;
    padding-top: 20px;
    padding-left: 4px;
}

.thumbnail1{
    position: relative;

}

.thumbnail1 img {
    padding-bottom: 20px;
}

.profile-social {
  width: 62px;
  height: 300px;
  position: absolute;
  z-index: 0;
}

.sidebar-bar {
    height: 200px;
    float: left;
    margin-right: 20px;
    /* padding-top: 3px; */
    margin-top: 0px;
    position: absolute;
}


</style>

<?php

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

if ( has_post_thumbnail() ) {
    //the_post_thumbnail();
    ?>

<div class="jumbotron">
<div style="margin-top: 41px; margin-bottom: -45px;">
</div>
</div>


<?php } 
?>


<div class="container">
<div class="row">
<div class="col-lg-8">

<?php while ( have_posts() ) : the_post(); ?>
 <img src="<?php echo $feat_image; ?>" class="alignleft profileimage" alt="<?php the_title(); ?>" />

<h1 style="color: #6c5e55; text-transform: uppercase; word-break: normal; font-size: 25px; margin-bottom: 5px; font-family: GothamBold;"><?php the_title(); ?></h1>

<h2 style="color: #f57f20; font-size: 12pt; font-family: GothamBold; padding-bottom: 10px; "><?php echo get_post_meta($post->ID, 'staff_position', true); ?></h2>
<?php the_content(); ?>

<?php endwhile; // end of the loop. ?>

</div>


<div class="col-lg-4">

<?php $key = 'profile_email'; 
    $themeta = get_post_meta($post->ID, $key, TRUE); 
    if($themeta != '') { ?>

<div class="profile-social" style="float: right; margin-right: 20px;" class="hide-on-mobile hide-on-tablet">
    <li style="list-style: none;">
        <span style="text-transform: uppercase; text-align: center; font-size: 12px;">Connect:</span>
        <div class="thumbnail1">
            <div class="caption post-content1">
                <?php $key = 'profile_email'; $themeta = get_post_meta($post->ID, $key, TRUE); if($themeta != '') { ?>
                    <a href="mailto:<?php echo get_post_meta($post->ID, 'profile_email', true); ?>"><img class="social1" src="<?php echourl(); ?>/images/envelope.png" class="hide-on-mobile hide-on-tablet"/></a>
                <?php } ?>
                <?php $key = 'profile_linkedin'; $themeta = get_post_meta($post->ID, $key, TRUE); if($themeta != '') { ?>
                    <a href="<?php echo get_post_meta($post->ID, 'profile_linkedin', true); ?>" target="_blank"><img src="<?php echourl(); ?>/images/linkedin1.png" class="hide-on-mobile hide-on-tablet"/></a>
                <?php } ?>
                <?php $key = 'profile_twitter'; $themeta = get_post_meta($post->ID, $key, TRUE); if($themeta != '') { ?>
                    <a href="<?php echo get_post_meta($post->ID, 'profile_twitter', true); ?>" target="_blank"><img src="<?php echourl(); ?>/images/twitter1.png" class="hide-on-mobile hide-on-tablet"/></a>
                <?php } ?>
                <?php $key = 'profile_google'; $themeta = get_post_meta($post->ID, $key, TRUE); if($themeta != '') { ?>
                    <a href="<?php echo get_post_meta($post->ID, 'profile_linkedin', true); ?>" target="_blank"><img src="<?php echourl(); ?>/images/linkedin1.png" class="hide-on-mobile hide-on-tablet"/></a>
                <?php } ?>
            </div>
        </div>
    </li>
<div class="sidebar-bar hide-on-mobile hide-on-tablet"><img src="http://www.eminetwork.com/wp-content/themes/emi/images/vertical-rule.png" alt=""></div>
</div>

<?php } ?>
</div>

</div>

<div class="row">
  <div class="col-lg-12">
    <div style="margin-bottom: 75px;"></div>
  </div>
</div>
</div>


<?php get_footer(); ?>

