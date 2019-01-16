

<?php 
if(isset($_GET['ID'])) {
    $loadID = $_GET['ID'];
}
else {
    $loadID = '5916';
}
//session_start();

?>

<?php get_header(); ?>
<style>

.page-title {
    margin-top: 110px;
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

.submenu {
    display: none;
}

.submenu li {
    list-style: none;
    margin-top: 10px;
    margin-left: -30px;
}


ul li h2 {
    cursor: pointer;
}

.button-orange a {
    color: #fff;
}

.button-orange a:hover {
    /*text-shadow: 2px 2px #000*/
}

.submenu a {
    color: #6c5e55;
    font-size: 14px; 
    font-family: GothamBook;
}

.submenu a:hover {
    color: #f57e20;
}

li.usat a {
    color: #6c5e55;
    font-size: 14px;
    font-family: GothamMedium;
}

li.cubs a {
    color: #6c5e55;
    font-size: 14px;
    font-family: GothamMedium;
}

h2 {
    color: #6c5e55;
    font-size: 16px;
    font-family: GothamMedium;
}

h3 {
    margin-top: 10px;
}

/*.arrow {
    list-style-image: url('<?php echourl(); ?>/images/arrowright.png');
    line-height: 0px;
}*/

.arrowright {
    list-style-image: url('<?php echourl(); ?>/images/arrowright.png');
}

.arrowdown {
    list-style-image: url('<?php echourl(); ?>/images/arrowdown.png');
}

.content {
    margin-top: 20px;
}

.arrow img {
    float: left;
    margin-left: 14px;
    margin-right: 9px;
}
/*ul {
    list-style-image: url('<?php echourl(); ?>/images/arrowdown.png');
}*/

/*img {
    max-width: 100%;
    max-height: 100%;
}*/


/*.content img {
    max-width: 100%;
    max-height: 100%;
}*/

.submenu a:active {
    color: #f57e20;
}

.submenu a.active {
    color: #f57e20;
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
<h1 class="page-title"><span style="font-family: GothamMedium; color: #FFF; font-size: 50px;">Expertise</span></h1>
<div style="background:#000000;
background:url('<?php echo $feat_image; ?>') no-repeat center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
height: 208px;
margin-top: 41px;
margin-bottom: -45px;">
</div>
</div>


<?php } 
?>


<?php 
$forbesargs = array(
'numberposts' => -1,
'post_type' => 'page',
'post_status'    => 'publish',
'orderby'=> 'orderby', 
'order' => 'ASC',
'meta_key' => 'submenu',
'meta_value' => 'forbes'
);
$the_query = new WP_Query( $forbesargs );


$content_marketing = array(
'numberposts' => -1,
'post_type' => 'page',
'post_status'    => 'publish',
'meta_key' => 'content_marketing_content',
'meta_value' => 'true'
);
$the_querycontent = new WP_Query( $content_marketing );
?>

<div class="container">
<div class="row">

    <div class="col-lg-4 col-md-5 col-sm-6">
    <div class="sidebar-bar_expertise hide-on-mobile"><!-- <img src="http://www.eminetwork.com/wp-content/themes/emi/images/vertical-rule.png" alt=""> --></div>
        <a onClick="replaceContentInContainer('job_description', '5916')"><h4 class="button-orange"><?php echo get_post_meta($post->ID, 'sidebar-title', true); ?></h4></a>

        <ul>
            <li class="forbes arrowright"><h2>Forbes</h2></li>
                <ul class="submenu">
                    <?php if( $the_query->have_posts() ): ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li><a onClick="replaceContentInContainer('job_description', '<?php the_id(); ?>')" class="<?php if ($_GET['ID'] == $id) {echo "active"; } ?>"><?php echo get_the_title( $ID ); ?></a></li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
                </ul>
        </ul>        
            <!--<div class="arrow"><a onClick="replaceContentInContainer('job_description', '5936')" class="<?php echo $id; //if ($_GET['ID'] == $id) {echo "active"; } ?>"><img src="<?php echourl(); ?>/images/arrowright.png"><h2>USA Today special sections</h2></a></div>-->
            <div class="arrow"><a onClick="replaceContentInContainer('job_description', '5939')" class="<?php echo $id; //if ($_GET['ID'] == $id) {echo "active"; } ?>"><img src="<?php echourl(); ?>/images/arrowright.png"><h2>The Chicago Cubs and Vine Line magazine</h2></a></div>
<div class="arrow"><a onClick="replaceContentInContainer('job_description', '6518')" class="<?php echo $id; //if ($_GET['ID'] == $id) {echo "active"; } ?>"><img src="<?php echourl(); ?>/images/arrowright.png"><h2>Hemispheres magazine</h2></a></div>
    </div>
<!-- <div class="sidebar-bar hide-on-mobile hide-on-tablet"><img src="http://www.eminetwork.com/wp-content/themes/emi/images/vertical-rule.png" alt=""></div> -->
    <div class="content col-lg-8 col-md-7 col-sm-6">
        <?php if( $the_querycontent->have_posts() ): ?>
        <?php while ( $the_querycontent->have_posts() ) : $the_querycontent->the_post(); ?>
        <div id="replacements" style="display:none">
        <span id="<?php the_id(); ?>">
        <h3>
        <?php
            if( get_post_meta($post->ID, 'title', true ) ) {
                echo get_post_meta($post->ID, 'title', true );
        } 
        else {
            the_title();
        }
        ?>
        </h3>
        <?php the_content(); ?>
        </span>
        </div>
        <?php endwhile; ?>
        <div id="job_description">
        <?php 
        $id = $loadID;
        $post = get_post($id); 
        $content = apply_filters('the_content', $post->post_content); ?> 
        <h3>
        <?php
            if( get_post_meta($post->ID, 'title', true ) ) {
                echo get_post_meta($post->ID, 'title', true );
        } 
        else {
            the_title();
        }
        ?>
        </h3>
        <?php echo $content; ?>     
        </div>
        <?php endif; ?>
        <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
    </div>



</div>

<div class="row">
  <div class="col-lg-12">
    <div style="margin-bottom: 75px;"></div>
  </div>
</div>
</div>

<script>
$(document).ready(function(){
    $(".forbes").click(function(){
        $(".submenu").toggle();
        // $(".forbessub").toggle();
    });

    $(".forbes").on("click", function () {
    $(".arrowright").toggleClass("arrowdown");
    // $("img.arrow").toggleClass("rotate").css({ "-moz-transform" : "rotate(-90deg)", "-webkit-transform" : "rotate(-90deg)", "-ms-transform" : "rotate(-90deg)", "-o-transform" : "rotate(-90deg)" });
});

});
</script>
<script>
  function replaceContentInContainer(target,source) {
    document.getElementById(target).innerHTML  = document.getElementById(source).innerHTML;
  }
</script>

<?php get_footer(); ?>