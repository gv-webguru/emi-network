<?php

/*
|--------------------------------------------------------------------------
| The template for displaying posts in the standard post format
|--------------------------------------------------------------------------
*/

?>

<?php 

/* featured image */ 
//$fullsize   = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); 
//$fullsizeID = ut_get_attachment_id_from_url( $fullsize );

?>



<style>

strong, b {
color: #6c5e55;
font-size: 14px;
  font-family: GothamMedium;
}

img.alignleft {
    display: inline-block;
    padding: 10px; 
    margin: 0 10px 0px 0; 
    background: #fff; 
    border: 1px solid #ddd; 
    font-size: 16px; 
    font-size: 1rem; 
    vertical-align: top; 
    box-shadow: 0 0 5px #ddd; 
    box-sizing: border-box; 
    -moz-box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    float: left;
}

img.alignright {
    display: inline-block; 
    padding: 10px; 
    margin: 0 10px 10px 0; 
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

img.aligncenter {
    display: inline-block; 
    padding: 10px; 
    margin: 0 10px 10px 0; 
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

h3 {
    font-family: GothamBold;
    color: #6c5e55;
    font-size: 19px;

}

.post-content1 {
    background-color: #c4bfbb;
    background-position: center;
    width: 250px;
    height: auto;
    /* line-height: 24px; */
    top: 0px;
    left: 0;
    position: relative;
    font-size: 11px;
    color: #FFFFFF;
    text-transform: uppercase;
    padding-right: 3px;
      font-family: GothamMedium;
    text-align: center;
}

.thumbnail1{
    position:relative;
    padding-bottom: 15px;

}

.thumbnail1 img {
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    
}


p, pre, ul, ol, dl, dd, blockquote, address, table, fieldset, form {
  margin-bottom: 20px;
  font-family: GothamBook;
}

blockquote {
  color: #222222;
  position: relative;
  -webkit-hyphens: none;
  -moz-hyphens: none;
  -ms-hyphens: none;
  hyphens: none;
  quotes: none;
  font-size: 20px;
  line-height: 150%;
  padding-left: 10px;
  border-left: 2px solid;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  border-color: #FF6E00;
}

blockquote, q {
  quotes: "" "";
}

.entry-title {
    font-size: 24px; 
    color: #6c5e55; 
    font-family: GothamBold; 
    text-transform: uppercase;
}

span.entry-date {
    font-size: 14px; 
    font-family: GothamBook;
}

span.entry-time {
    font-size: 14px; 
    text-transform: lowercase; 
    font-family: GothamBook;
}

.entry-date, .entry-time {
      color: #FF6E00;
}

    
li {
    list-style: none;
}

</style>



                    
<?php /* start output for classic blog , search , category tag or archive page */ ?> 
    <!-- post -->    
    

    <!-- entry-header -->


    <header class="entry-header">
    
        <?php if ( is_single() ) : ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <!-- <span style="color: black; font-size: 14px; vertical-align: 1.5px; font-family: GothamBook;" class="hide-on-tablet hide-on-mobile"></span>  -->
        <span class="entry-date"><?php the_time('F j, Y'); ?></span>
        <span class="entry-time"> at <?php the_time('g:i a'); ?></span>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<div>
    <li style="list-style: none;">
        <span style="text-transform: uppercase; text-align: center; font-size: 12px;">Share:</span>
        <div class="thumbnail1">
            <div class="caption post-content1">
                <a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&title=<?php the_title_attribute(); ?>" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/themes/emi/images/facebook1.png"></a>
                <a href="http://twitter.com/intent/tweet?status=<?php the_title_attribute(); ?>+<?php the_permalink(); ?>+@eminetwork1" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/themes/emi/images/twitter1.png"></a>
                <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/themes/emi/images/google.png"></a>
                <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title_attribute(); ?>&source=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/themes/emi/images/linkedin1.png"></a>
                <a href="http://pinterest.com/pin/create/bookmarklet/?media=<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>&url=<?php the_permalink(); ?>&is_video=false&description=<?php the_title_attribute(); ?>" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/themes/emi/images/pinterest.png"></a>
            </div>
        </div>
    </li>
</div>




<?php else : ?>
<h2 class="entry-title"><a style="font-size: 20px; color: #6c5e55; font-family: GothamBook;" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'eminetwork'), get_the_title()); ?>"> <?php the_title(); ?></a></h2>
<?php endif; // is_single() ?>
                            
</header><!-- close entry-header -->   



<?php if ( is_search() ) : ?>



<?php else : ?>

<!-- entry-content -->
<div class="entry-content clearfix" style="color: #6c5e55; font-family: GothamBook;">

<?php the_content(); ?>


</div><!-- close entry-content -->

<?php endif; ?>
              
    





