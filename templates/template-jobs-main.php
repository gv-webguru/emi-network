


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
    height: 700px;
    float: left; 
    margin-right: 20px; 
    /*padding-top: 3px;*/
    margin-top: 20px;
    -webkit-mask-image:-webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)))
}


.sidebar-bar img {
     height: auto;
}

li {
    list-style-type: none;
}

h4 {
    color: #6c5e55;
    font-size: 14px;
    font-family: GothamMedium;
    text-transform: uppercase;
    padding-bottom: -10px;
}

.col-lg-3 h4 {
    margin: 20px 0px 10px;
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
<script>

      function replaceContentInContainer(target,source) {
        document.getElementById(target).innerHTML  = document.getElementById(source).innerHTML;
      }
</script>

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


    <div class="col-lg-3">
    <h4 style="font-family: GothamBold;">EMPLOYMENT OPPORTUNITIES</h4>
    <?php 
    // args
    $args = array(
    'numberposts' => -1,
    'post_type' => 'page',
    'post_status'    => 'publish',
    'orderby'=> 'menu_order', 
    'order' => 'ASC',
    'meta_key' => 'location',
    'meta_value' => 'jobs'
    );
    // get results
    $the_query = new WP_Query( $args );
    // The Loop
    ?>
    <?php if( $the_query->have_posts() ): ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <li>
    <h3><a style="color: #f57f20; font-size: 16px; font-family: GothamBook;" onClick="replaceContentInContainer('job_description', '<?php the_id(); ?>')"><?php echo get_the_title( $ID ); ?></a></h3>
    </li>

    <?php endwhile; ?>

    <?php endif; ?>

    <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
<img src="http://www.eminetwork.com/wp-content/uploads/2016/02/best-places-to-work_logo.jpg" /> 
    </div>

<div class="col-lg-6">
<?php if( $the_query->have_posts() ): ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div id="replacements" style="display:none">
<span id="<?php the_id(); ?>">
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<a href="mailto:creative@eminetwork.com?subject=<?php the_title(); ?>"><img src="<?php echourl(); ?>/images/apply-now.png"></a>  
</span>
</div>
<?php endwhile; ?>


<div id="job_description">
<?php 
$id = 6777; 
$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content); ?> 
<h1><?php the_title(); ?></h1>
<?php echo $content; ?>
<?php
if ($id != 6777){?>
<a href="mailto:creative@eminetwork.com?subject=<?php the_title(); ?>"><img src="<?php echourl(); ?>/images/apply-now.png"></a>
<?php }?>        
</div>

<?php endif; ?>
<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

</div>

    <div class="col-lg-3">
    <div class="sidebar-bar hide-on-mobile hide-on-tablet"><img src="http://www.eminetwork.com/wp-content/themes/emi/images/vertical-rule.png" alt=""></div>
    <?php 
$id = 6784; 
$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content); ?> 
<h4><?php the_title(); ?></h4>
<?php echo $content; ?>
 
    </div>


    <div class="row">
      <div class="col-lg-12">
        <div style="margin-bottom: 75px;"></div>
      </div>
    </div>

</div>
</div>
      
<?php get_footer(); ?>
