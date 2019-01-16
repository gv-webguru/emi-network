<?php
/*
Template Name: Approach Template
*/
?>

<?php get_header(); ?>
<style>


.connect {
    margin: 10px 0 10px 0;
}

.jumbotron {
    padding: 48px 0 48px 0;
    margin-bottom: 0px;
    color: inherit;
    background-color: #FFF;
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


    <div class="col-lg-8">
        <h3>AMPLIFY YOUR MESSAGE. SIMPLIFY THE PROCESS.</h3>
        <p>
        At EMI Network, we believe passionately that everything you do matters, so we work to make every initiative—every interaction—truly meaningful.<br>
        <br>
        We capture the attention of your target audience by crafting remarkable content, including thought leadership opportunities in prestigious publications such as Forbes and USA Today.<br>
        <br>
        And our 360-degree creative solutions make us your one-stop marketing hub, powered by our experienced client care team that centralizes project management from start to finish.<br>
        <br>
        EMI Network cares for your brand so you can grow your business.
        <div class="connect">
        <a href="./connect/"><img src="//www.eminetwork.com/wp-content/themes/emi/images/lets-talk.png"></a>
        </div>
        </p>
    </div>

    <div class="col-lg-4">
        <p class="quote">
        “I believe in the Butterfly Effect—that everything we say and do has a lasting impact, in business and in life.
        <br><br>
        “That’s why we’re good stewards of the trust clients and publishers place in us to care for their brands. Every project is an opportunity to help our partners grow their businesses or elevate their brands.”<br>
        — LISA LICKERT
        </p>
    </div>


</div>

<div class="row">
  <div class="col-lg-12">
    <div style="margin-bottom: 75px;"></div>
  </div>
</div>
</div>

<?php get_footer(); ?>
