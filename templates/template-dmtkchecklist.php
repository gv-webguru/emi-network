

<?php get_header(); ?>

<style>

h3 {
    font-family: GothamMedium;
    color: #000;
    text-transform: uppercase;
}

h4 {
    font-family: GothamBook;
    color: #6c5e55;
}

.post-content1 {
    background: none repeat scroll 0 0 #000;
    width: 100%;
    height: 23px;
    line-height: 24px;
    bottom:0;
    left:5;
    position: absolute;
    font-size: 60%;
    color: #FFFFFF;
    text-transform: uppercase;
    padding-left: 3px;
    font-family: GothamMedium;
}

.thumbnail1{
    position: relative;

}

.row-1 {
    width: 90%;
    /*margin: 20px auto; */
    margin-bottom: 100px;
    /*margin-bottom: 40px;*/
    /*margin: 10px;*/
    /*display: block;*/
    /*height: 180px;*/
    /*    position: relative;
    bottom: 10px;*/
    height: 70px;
}


@media (max-width: 420px) {
    .row-1 {
        width: 100%;
        /*margin: 20px auto; */
        margin-bottom: 70px;
        /*margin-bottom: 40px;*/
        /*margin: 10px;*/
        /*display: block;*/
        /*height: 180px;*/
        /*    position: relative;
        bottom: 10px;*/
    }
}

.row-1-last {
    max-width: 600px;
    padding-bottom: 0px;
    margin-top: -17px;
}

.row-1-last a {
    color: #f57f20; 
    font-size: 14px; 
    font-family: GothamBold; 
    text-transform: uppercase; 
    margin-left: 140px;
}


.imgleft {
    /*padding-top: 10px;*/
    /*padding-bottom: 10px;*/
    float: left;
    margin-right: 15px;
    /*max-width: 100%;*/
}

.imgright {
    /*margin-top: 20px;*/
    /*padding-bottom: 10px;*/
    float: right;
    margin-left: 20px;
    /*max-height: 116px;
    max-width: 139px;*/
}

.post-content {
    /*float: left;*/
}

.post-content h4 {
    font-family: GothamMedium;
    margin-bottom: 5px;
    padding-top: 0px;
    line-height: 15px;
}

.post-content p {
    font-size: 13px;
    font-family: GothamBook;
    margin-bottom: 0;
    line-height: 18px;
}

.post-content p.orange {
    color: #f57f20;
    font-family: GothamMedium;
}

.header-content {
    max-width: 580px;
}

.post-content .logo {
    max-width: 220px;
    margin-right: 25px;
}

.sidebar-checklist {
    margin-bottom: 10px;
}

.sidebar-checklist h4 {
    font-family: GothamBold;
    margin-bottom: 5px;
    padding-top: 8px;
    line-height: 15px;
    text-transform: uppercase;
}

.sidebar-checklist p {
    font-size: 13px;
    font-family: GothamBook;
    margin-bottom: 0;
}

.sidebar-checklist u {
    color: #f57f20;
}

.sidebar-checklist li {
    font-size: 13px;
    font-family: GothamBook;
    margin-bottom: 0;
    list-style: none;
    counter-increment: foo;
    display: table-row;
}

.sidebar-checklist li::before {
    content: "•";
    display: table-cell;
    text-align: right;
    padding-right: .3em;
}

img.arrow {
    position: relative;
    top: -6px;
    padding-right: 5px;

}

hr {
    /*margin: 25px 0;*/
    height: 1px;
    background: black;
    background: -webkit-gradient(linear, 0 0, 100% 0, from(white), to(white), color-stop(0%, black));
    margin-bottom: 15px;
}

.hr-vertical {
  float: left;
  margin-left: 0px;
  margin-top: 9px;
  margin-right: 30px;
  height: 500px;
  -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)));
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
margin-bottom: 0px;"
>
</div>
</div>

<?php } 
?>


<div class="container">
<div class="row">
<div class="col-lg-9">

    <div class="header-content">
    <h3>Maximize Your Return on Investment</h3>
    <hr>
    <p>Your <i>Forbes</i> content is a powerful digital marketing tool. Follow these seven steps to activate your Forbes Custom page as soon as your receive your url.</p>
    </div>

    <div class="row-1">
    <div class="post-content">
        <img class="imgleft" src="<?php echourl();?>/images/dmtkchecklist/1.png">
        <img class="imgright" src="<?php echourl();?>/images/dmtkchecklist/forbes_bug.png">
        <h4>Add the Forbes Custom graphic to your company's website</h4>
        <p>Add to your company's home page the Forbes Custom graphic created by EMI Network to direct users to your Forbes Custom content.</p>
        <p class="orange">TIMING: Within first 48 hours</p>
    </div>
    </div>

    <div class="row-1">
    <div class="post-content">
        <img class="imgleft" src="<?php echourl();?>/images/dmtkchecklist/2.png" >
        <img class="imgright" src="<?php echourl();?>/images/dmtkchecklist/email_bug.png">
        <h4>Add the Forbes Custom link to your email signature</h4>
        <p>Include wording such as: “We recently appeared in <i>Forbes</i> magazine. Learn more here.”</p>
        <p class="orange">TIMING: Within first 48 hours</p>
    </div>
    </div>

    <div class="row-1">
    <div class="post-content">
        <img class="imgleft" src="<?php echourl();?>/images/dmtkchecklist/3.png" >
        <img class="imgright" src="<?php echourl();?>/images/dmtkchecklist/social-media.png">
        <h4>Drive views to your content on social media</h4>
        <p>Your Forbes Custom link is a perfect tool for social media channels. Use the suggested text provided by your project manager to syndicate your link socially and drive views to your content.</p>
        <p class="orange">TIMING: Within first week; repeat at two and four months</p>
    </div>
    </div>

    <div class="row-1">
    <div class="post-content">
        <img class="imgleft" src="<?php echourl();?>/images/dmtkchecklist/4.png" >
        <img class="imgright" src="<?php echourl();?>/images/dmtkchecklist/press-release.png">
        <h4>Email a press release to your local media outlets</h4>
        <p>Email alumni publications and trade journals to make them aware of your appearance in <i>Forbes</i>. Again, be sure to link to Forbes Custom.</p>
        <p class="orange">TIMING: Within first week</p>
    </div>
    </div>

    <div class="row-1">
    <div class="post-content">
        <img class="imgleft" src="<?php echourl();?>/images/dmtkchecklist/5.png" >
        <img class="imgright" src="<?php echourl();?>/images/dmtkchecklist/blog.png">
        <h4>Write a blog post about your Forbes Custom content</h4>
        <p>A short introductory paragraph can be used to set up the link to Forbes Custom and send readers to your content.</p>
        <p class="orange">TIMING: Within first two weeks</p>
    </div>
    </div>

    <div class="row-1">
    <div class="post-content">
        <img class="imgleft" src="<?php echourl();?>/images/dmtkchecklist/6.png" >
        <img class="imgright" src="<?php echourl();?>/images/dmtkchecklist/e-news.png">
        <h4>Take advantage of your company’s e-newsletter</h4>
        <p>Share your <i>Forbes</i> appearance with clients and prospects. Include your Forbes Custom link and entice readers to download your content.</p>
        <p class="orange">TIMING: Within first month</p>
    </div>
    </div>

    <div class="row-1">
    <div class="post-content">
        <img class="imgleft" src="<?php echourl();?>/images/dmtkchecklist/7.png" >
        <img class="imgright" src="<?php echourl();?>/images/dmtkchecklist/video.png">
        <h4>Promote your <i>Forbes</i> placement with a video</h4>
        <p>Record a quick video in which you show off your <i>Forbes</i> content. Include your video on your website, blog and social channels.</p>
        <p class="orange">TIMING: Within first month</p>
    </div>
    </div>

    <div  class="row-1-last">
        <a href="<?php echo get_post_meta($post->ID, 'pdf', true); ?>"><img class="arrow" src="<?php echourl();?>/images/dmtkchecklist/arrow.png">Download PDF</a>
    </div>
    <hr style="margin-bottom: 35px; margin-top: 20px;">

    <div class="row-1" style="margin-top: -15px;">
    <div class="post-content">
        <img class="imgleft logo" src="http://www.eminetwork.com/wp-content/uploads/2015/02/EMI_Logo2.png">
        <h4 style="padding-top: 20px; font-family: GothamBook; line-height: 17px;">We will follow up with you in the next two weeks to review your marketing efforts, assess results and recommend next steps.</h4>
    </div>
    </div>
</div>

    <div class="col-lg-3">
    <div class="hr-vertical hide-on-mobile hide-on-tablet">
    <img src="http://www.eminetwork.com/wp-content/themes/emi/images/vertical-rule.png">
    </div>
    <!-- <div style="float: left; margin-left: 0px; height: 475px; padding-top: 0px; padding-right: 10px; -webkit-mask-image:-webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)))" class="hide-on-mobile hide-on-tablet"> <img src="http://www.eminetwork.com/wp-content/themes/emi/images/vertical-rule.png"></div> -->
        <div class="sidebar-checklist">
        <h4>More Resources</h4>
        <p>Have you scheduled your complimentary digital assessment?</p>
        <a href=" http://www.meetme.so/KendraRamirez" target="_blank" style="color: #f57f20; font-size: 14px; font-family: GothamBold; text-transform: uppercase; margin-bottom: 10px;"><img class="arrow" src="<?php echourl();?>/images/dmtkchecklist/arrow.png">Set Your Appointment Today!</a>
        <p style="margin-top: 24px; margin-bottom: 24px;">To stay on top of marketing trends and learn practical advice and insights, <u><a href="http://www.eminetwork.com/webinars/" target="_blank"> register for an upcoming webinar.</a></u></p>
        </div>

        <div class="sidebar-checklist">
        <h4>What's Next</h4>
        <p>EMI Network has the expertise to help you build your brand and grow your business. Our comprehensive marketing solutions include:<br>
        <li>Branding and logos</li>
        <li>Collateral design</li>
        <li>Video direction and production</li>
        <li>Website design and programming</li>
        <li>Content marketing</li>
        <li>Digital and social media strategy and implementation</li>
        </p>
        <a href="mailto:connect@eminetwork.com?subject=Learn More: Activation Checklist" style="color: #f57f20; font-size: 14px; font-family: GothamBold; text-transform: uppercase;"><img class="arrow" src="<?php echourl();?>/images/dmtkchecklist/arrow.png">Learn More</a>
        </div>

    </div>
</div>


<div class="row">
  <div class="col-lg-12">
    <div style="margin-bottom: 75px;"></div>
  </div>
</div>
</div>

  

        
<?php get_footer(); ?>
