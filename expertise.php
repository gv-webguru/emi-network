<?php
/*
Template Name: Expertise Template
*/
?>


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
    height: 500px;
    float: left; 
    margin-right: 20px; 
    /*padding-top: 3px;*/
    margin-top: 20px;
}

.sidebar-bar img {
     height: 500px; 
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
        <h3>CONTENT MARKETING</h3>
        <p>
        We’ve been developing content to connect clients to their target audiences for more than three decades—before anyone else was using the term “content marketing.”<br>
        <br>
        Our editorial excellence led to partnerships with renowned publishers such as Forbes that enable us to create regionalized profile and thought leadership opportunities for clients. This geotargeted media exposure, combined with placement on Forbes.com and exclusive access to <a href="Forbescustom.com/Marketplace" target="_blank">Forbescustom.com/Marketplace</a>, provides clients with multichannel solutions and coveted brand alignment in verticals such as financial, legal and professional services, as well as healthcare, senior living, higher education and woman-owned businesses.<br>
        <br>
        We create custom, tailored content for clients of any size, ranging from small, family-owned firms to nationally known brands. We specialize in working with colleges and universities in partnership with USA Today, and our team also furnishes content for clients’ blogs, websites and custom publications—including the Chicago Cubs’ Vine Line magazine.<br>
        <br>
        When you collaborate with the nation’s No. 1 business magazine and one of America’s most popular sports franchises, you know you’re doing something right.
        </p>
    </div>

    <div class="col-lg-4">
    <div class="sidebar-bar hide-on-mobile hide-on-tablet"><img src="http://www.eminetwork.com/wp-content/themes/emi/images/vertical-rule.png" alt=""></div>
        <h4>CREATIVE SERVICES</h4>
        <p>
        Our in-house talent enables us to build deep, lasting relationships with our clients, who trust and value our energy. They know we understand their business and have the resources to get it done—whatever it might be.</p>

        <p>We’ve become our clients’ go-to problem solvers for:<br>
        • Brand design and execution<br>
        • Marketing collateral<br>
        • Video direction and production<br>
        • Website development and content<br>
        • Digital analysis and strategy<br>
        • Social media strategy and implementation</p>

        <p>The breadth of our services ensures consistent messaging and efficient management for our clients’ brands.</p>
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
