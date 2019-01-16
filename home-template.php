<?php

/**
 * Template Name: Home Template
 * by www.eminetwork.com
 */

?>


<?php get_header(); ?>

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

<style>
/* Hero Slider */
.ut-hero-slider {
    border:none !important;
    height:100%;
    position:relative;

}
.hero.slider {
    background:#FFFFFF;
}
.hero.slider .parallax-overlay {
    z-index:3;
    display:none;
}
.ut-hero-slider .flex-viewport {
    width:100%;
    height:100%;
}
.ut-hero-slider .slides {
    height: 100%;
    position: relative;
    width: 100%;
}
.ut-hero-slider .slides li {
    background-position: center center !important;
    -webkit-background-size:cover !important;
    -moz-background-size:cover !important;
    background-size: cover !important;
    height: 100%;
    position: relative;
}
.ut-hero-captions {
    position:absolute !important;
    width: 100%;
    z-index:10;
    background: none;
    border: none;
    top: 0;
}
a.ut-flex-control  { 
    display: block; 
    width: 60px; 
    height: 60px; 
    margin: 0; 
    position: absolute;
    top:50%; 
    z-index: 11;
    margin-top:-30px;
    overflow: hidden; 
    opacity: 1; 
    cursor: pointer; 
    color:#ffffff; 
    -webkit-transition: all .3s ease; 
    -moz-transition: all .3s ease; 
    transition: all .3s ease; 
    text-align:center;
}
a.ut-flex-control:before  { font-family: 'FontAwesome'; font-size: 40px; line-height:60px; display: inline-block; content: "\f104"; }
a.ut-flex-control.next:before  { content: "\f105"; }

a.ut-flex-control.prev { left:0; -webkit-border-radius:0 3px 3px 0; -moz-border-radius:0 3px 3px 0; border-radius:0 3px 3px 0; }
a.ut-flex-control.next { right:0; -webkit-border-radius:3px 0 0 3px; -moz-border-radius:3px 0 0 3px; border-radius:3px 0 0 3px; }

a.ut-flex-control.prev:hover { background:rgba(255, 255, 255, 0.15); color:#FFFFFF; }
a.ut-flex-control.next:hover { background:rgba(255, 255, 255, 0.15); color:#FFFFFF; }

/* font style for hero slider */
.hero.slider .hero-title.extralight {
    font-family: 'ralewayextralight', "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
.hero.slider .hero-title.light {
    font-family: 'ralewaylight', "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
.hero.slider .hero-title.regular {
    font-family: 'ralewayregular', "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
.hero.slider .hero-title.medium {
    font-family: 'ralewaymedium', "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
.hero.slider .hero-title.semibold {
    font-family: GothamM;
}
.hero.slider .hero-title.bold {
    font-family: 'ralewaybold', "Helvetica Neue", Helvetica, Arial, sans-serif; 
}

.break {
    margin-top: 30px;
}

.carousel {
    /*height: 700px;*/
    margin-bottom: 10px;
    margin-top: 90px;
}

.carousel .item img {
    /*position: absolute;*/
    background: no-repeat center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    width: 100%;
    height: 700px;
}

@media (max-width: 768px) {
    .carousel {
        height: 300px;
        margin-bottom: 10px;
        margin-top: 90px;
    }

    .carousel .item img {
        /*position: absolute;*/
        background: no-repeat center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
        height: 300px;
    }
}


.bottom {
    padding-bottom: 50px;
}

span.blue {
    color: #8ecee5;
}




@media (max-width: 768px) {
    .bar {
        border: none;
    }
}

img.special-logo {
    max-width: 130px;
    margin-right: 25px;
}


input {
    background: #e6e6e6;
    border-radius: 5px;
    border: solid 1px #bbb;
}

.button-orange {
    color: #ffffff;
    display: inline-block;
    padding: 12px 24px;
    text-shadow: none;
    border-radius: 5px;
    background-color: #f57e20;
    text-transform: uppercase;
    font-family: GothamBook;
    font-size: 16px;
    padding-top: 10px;
}

.button-orange:hover {
    text-decoration: none;
}

/*.col-lg-4-content {
    width: 95%;
}*/

.bar {
  padding-right: 30px;
  padding-left: 0px;
  border-right: 1px solid #b5aeaa;
  height: 375px;
}

.bar-last {
    padding-right: 30px;
}

@media (max-width: 1200px) {
    .bar {
        padding-right: 0px;
        padding-left: 0px;
        border: none;
        height: auto;
    }

    .bar-last {
        padding-right: 0px;
    }
}

.banner img {
    position: absolute;
    z-index: 5;
    max-width: 100%;
    /*height: 150px;*/
}

</style>

<div class="banner"><!--<img src="<?php //echourl(); ?>/images/EMI_Angles.png" alt="Forbes EMI">--></div>

<header id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <!-- <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol> -->
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <!-- <div class="fill" style="background-image:url('<?php echourl(); ?>/images/1_Forbes_EMI.jpg');"></div> -->

                <img src="<?php echourl(); ?>/images/1_Forbes_EMI.jpg" alt="Forbes EMI">
                <!-- <div class="carousel-caption">
                    <h2>ENGAGE <span style="color: #f47e20;">YOUR AUDIENCE</span></h2>
                </div> -->
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <!-- <div class="fill" style="background-image:url('<?php echourl(); ?>/images/2_USAT_EMI.jpg');"></div> -->
                <img src="<?php echourl(); ?>/images/2_USAT_EMI.jpg" alt="USAT EMI">
               <!--  <div class="carousel-caption">
                    <h2>BUILD <span style="color: #f47e20;">YOUR BRAND</span></h2>
                </div> -->
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <!-- <div class="fill" style="background-image:url('<?php echourl(); ?>/images/3_Cubs_EMI.jpg');"></div> -->
                <img src="<?php echourl(); ?>/images/3_Cubs_EMI.jpg" alt="Cubs EMI">
                <!-- <div class="carousel-caption">
                    <h2>GROW <span style="color: #f47e20;">YOUR BUSINESS</span></h2>
                </div> -->
            </div>
        </div>
        <!-- Controls -->
        <a class="right ut-flex-control next" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
        <a class="left ut-flex-control prev" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>


        <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a> -->
        <!-- <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a> -->
</header>

<div class="container bottom">
<div class="row">
<div class="col-lg-4">
<div class="bar">
    <h4>What We Believe</h4>
    <p style="font-family: GothamMedium;">Right Audience. Right Message. Right Results.</p>
    <p>We are driven by the belief that everything you do matters, so we ensure that the right message is amplified through the right channels to the right audience at the right time to generate the right results.</p>
    <p>Because of our core belief, we manage all aspects of our clients' brands to develop a consistent, clear message that reaches top prospects and powers business growth.</p>
    <img class="special-logo" src="<?php echourl(); ?>/images/WBENC.png">
    <img class="special-logo" src="<?php echourl(); ?>/images/Goering_center.png">
    </div>
</div>
<div class="col-lg-4">
<div class="bar">
    <h4>Why We're Different</h4>
    <p style="font-family: GothamMedium;">Great content. Powerful distribution channels.</p>
    <!-- <p>Great content. Powerful distribution channels. View our video to learn how EMI Network cares for clients.</p> -->
    <p>EMI Network clients benefit from our strategic partnerships to align their reputations with world-renowned brands.</p>
    <p>After partnering with EMI Network to appear in Forbes magazine, <span style="font-family: GothamMedium;">“we’re seeing a higher level, a higher quality, of client,”</span> says Bruce Smith III of The Wealthkare Investment Center.</p>
    <a href="http://eminetwork.com/client-spotlight-the-wealthkare-investment-center/" target="_blank"><img class="special-buttons" src="<?php echourl(); ?>/images/learnmore.png"></a>
    </div>
</div>
<div class="col-lg-4">
<div class="bar-last">
    <h4>Partner With Us</h4>
    <p>Let EMI Network care for your brand and help you grow your business.</p>
    <a href="http://www.eminetwork.com/connect"><img class="special-buttons" src="<?php echourl(); ?>/images/connect.png"></a>
    </div>
    <div class="break">
    <h4>Stay in Touch</h4>
    <p>To stay on top of marketing best practices and industry trends, sign up for our free monthly <br>e-newsletter.</p>
    <a class="special-buttons" href="http://go.eminetwork.com/l/73252/2015-10-23/2lt3c6" target="_blank"><img src="<?php echourl(); ?>/images/subscribe.png"></a>
    </div>
</div>

</div>
</div>

<?php get_footer(); ?>
