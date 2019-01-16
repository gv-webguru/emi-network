





<?php get_header(); ?>







<style>

    

div.blog {

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



div.blog img {

  max-width: 100%;

  height: auto;

  margin: 0 0 0;

}



/*a {

  text-decoration: none;

  outline: 0;

  -webkit-transition: 0.2s color linear;

  -moz-transition: 0.2s color linear;

  transition: 0.2s color linear;

  cursor: pointer;

}*/

/*

.container {

    padding: 0px;

}*/



.row {

    overflow: hidden;

}





    

li {

    list-style: none;

}



.well {

  min-height: 20px;

  padding: 10px;

  margin-bottom: 20px;

  background-color: #f5f5f5;

  border: 1px solid #e3e3e3;

  border-radius: 4px;

  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);

  box-shadow: inset 0 1px 1px rgba(0,0,0,.05);

}



.well {

  background-image: -webkit-linear-gradient(top,#e8e8e8 0,#f5f5f5 100%);

  background-image: -o-linear-gradient(top,#e8e8e8 0,#f5f5f5 100%);

  background-image: -webkit-gradient(linear,left top,left bottom,from(#e8e8e8),to(#f5f5f5));

  background-image: linear-gradient(to bottom,#e8e8e8 0,#f5f5f5 100%);

  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffe8e8e8', endColorstr='#fff5f5f5', GradientType=0);

  background-repeat: repeat-x;

  /*border-color: #dcdcdc;*/

  border: 1px solid #ddd;

  -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,.05),0 1px 0 rgba(255,255,255,.1);

  box-shadow: inset 0 1px 3px rgba(0,0,0,.05),0 1px 0 rgba(255,255,255,.1);

}



/*  Bootstrap Clearfix */



/*  Tablet  */

@media (min-width:767px){



  /* Column clear fix */

  .col-lg-1:nth-child(12n+1),

  .col-lg-2:nth-child(6n+1),

  .col-lg-3:nth-child(4n+1),

  .col-lg-4:nth-child(3n+1),

  .col-lg-6:nth-child(2n+1),

  .col-md-1:nth-child(12n+1),

  .col-md-2:nth-child(6n+1),

  .col-md-3:nth-child(4n+1),

  .col-md-4:nth-child(3n+1),

  .col-md-6:nth-child(2n+1){

    clear: none;

  }

  .col-sm-1:nth-child(12n+1),

  .col-sm-2:nth-child(6n+1),

  .col-sm-3:nth-child(4n+1),

  .col-sm-4:nth-child(3n+1),

  .col-sm-6:nth-child(2n+1){

    clear: left;

  }

}





/*  Medium Desktop  */

@media (min-width:992px){



  /* Column clear fix */

  .col-lg-1:nth-child(12n+1),

  .col-lg-2:nth-child(6n+1),

  .col-lg-3:nth-child(4n+1),

  .col-lg-4:nth-child(3n+1),

  .col-lg-6:nth-child(2n+1),

  .col-sm-1:nth-child(12n+1),

  .col-sm-2:nth-child(6n+1),

  .col-sm-3:nth-child(4n+1),

  .col-sm-4:nth-child(3n+1),

  .col-sm-6:nth-child(2n+1){

    clear: none;

  }

  .col-md-1:nth-child(12n+1),

  .col-md-2:nth-child(6n+1),

  .col-md-3:nth-child(4n+1),

  .col-md-4:nth-child(3n+1),

  .col-md-6:nth-child(2n+1){

    clear: left;

  }

}





/*  Large Desktop  */

@media (min-width:1200px){



  /* Column clear fix */

  .col-md-1:nth-child(12n+1),

  .col-md-2:nth-child(6n+1),

  .col-md-3:nth-child(4n+1),

  .col-md-4:nth-child(3n+1),

  .col-md-6:nth-child(2n+1),

  .col-sm-1:nth-child(12n+1),

  .col-sm-2:nth-child(6n+1),

  .col-sm-3:nth-child(4n+1),

  .col-sm-4:nth-child(3n+1),

  .col-sm-6:nth-child(2n+1){

    clear: none;

  }

  .col-lg-1:nth-child(12n+1),

  .col-lg-2:nth-child(6n+1),

  .col-lg-3:nth-child(4n+1),

  .col-lg-4:nth-child(3n+1),

  .col-lg-6:nth-child(2n+1){

    clear: left;

  }

}



.profileimg {

    padding: 5px;

}



img.profileimg {

  padding: 9px;

  /*background: #fff url(../images/innerShadowBottom.png) left bottom repeat-x;*/

  background: #fff url(http://www.eminetwork.com/wp-content/themes/emi/images/innerShadowBottom.png) left bottom repeat-x;  

  border: 1px solid #ddd;

  -webkit-border-radius: 0px;

  -moz-border-radius: 0px;

  border-radius: 0px;

  -webkit-box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);

  -moz-box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);

  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);

  -webkit-transition: 200ms;

  -moz-transition: 200ms;

  max-width: 100%;

  z-index: -5;

}



img.profileimg:hover {

  padding: 0px;

  /*cursor: pointer;*/

  text-align: center;

  /*z-index: 9;*/

}



/*.caption {

    background: none repeat scroll 0 0 #000;

    width: 90%;

    line-height: 27px;

    bottom: 0;

    position: absolute;

    font-size: 74%;

    color: #FFFFFF;

    text-transform: uppercase;

    padding-left: 15px;

    font-family: GothamMedium;

    border-bottom-right-radius: 10px;

    border-bottom-left-radius: 10px;

}

*/

.post-content1 {

    line-height: 24px;

    font-size: 60%;

    color: #FF6E00;

    text-transform: uppercase;

    padding-left: 3px;

    font-family: GothamMedium;

}

.team a {

    display: block;

    margin-top: 10px;

}

.team h4{

color:#6c5e56;

 margin-top: 20px;

}

.page-titl{

text-transform: uppercase;

font-family: GothamMedium;

font-size: 30px;

color:#6c5e56;

}

h3.caption {

  font-size: 16px;

}



@media (max-width: 420px) {

  .post-content1 {

    width: 73%;

  }

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

margin-bottom: -45px;"

>

</div>

</div>





<?php } 

?>





<div class="container">



<div class="row">



  <div class="col-lg-9">

<h2 class="page-titl">Leadership team</h2>

  <!-- cont. other post -->

<div class="row">

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">

        <div class="thumbnail1">

            <a href="http://www.eminetwork.com/lisa-lickert/"><img class="profileimg" src="http://www.eminetwork.com/wp-content/uploads/2015/01/lisa-lickert-profile1.jpg" alt="Lisa Lickert"></a>

            <h3 class="caption post-content1">Lisa Lickert</h3>

President/Chief Energy Officer

        </div>

    </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">

        <div class="thumbnail1">

            <a href="http://www.eminetwork.com/tina-battock-2/"><img class="profileimg" src="http://www.eminetwork.com/wp-content/uploads/2015/09/tina-battock.jpg" alt="Tina Battock"></a>

            <h3 class="caption post-content1">Tina Battock</h3>

Business Development and Special Projects

        </div>

    </div>

</div>

    <!-- end cont. other post -->

<h2 class="page-titl">our team</h2>

<div class="row team"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<h4>ACCOUNT EXECUTIVES</h4> 

<a href="mailto:dvlouis@eminetwork.com">Dave Louis</a>

National Account Executive

<a href="mailto:mlessman@eminetwork.com">Lori Essman</a>

National Account Executive

<a href="mailto:labetemps@eminetwork.com">Liz Betemps</a>

National Account Executive

<a href="mailto:tlmcclure@eminetwork.com">Tara McClure</a>

National Account Executive

<a href="mailto:cgarrett@eminetwork.com">Celine Garrett</a>

National Account Executive

<a href="mailto:shojer@eminetwork.com">Susan Hojer</a>

National Account Executive

<a href="mailto:rgerhart@eminetwork.com">Robert Gerhart</a>

Account Executive

</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<h4>PROJECT MANAGERS</h4> 

<a href="mailto:radammert@eminetwork.com">Rick Dammert</a>

Director of Production

<a href="mailto:jeads@eminetwork.com">Jeff Eads</a>

Project Manager

<a href="mailto:tjackson@eminetwork.com">Tara Jackson</a>

Project Manager, Creative Services

<a href="mailto:rroberts@eminetwork.com">Beckie Roberts</a>

Office Manager

<h4>CREATIVE & MARKETING</h4>

<a href="mailto:dgrome@eminetwork.com">David Grome</a>

Creative Director

<a href="mailto:rartz@eminetwork.com">Rick Artz</a>

Art Director

<a href="mailto:bnistler@eminetwork.com">Bethany Nistler</a>

Graphic Designer

<a href="mailto:hlippert@eminetwork.com">Haley Lippert</a>

Marketing Coordinator

<h4>CONTENT</h4>

<a href="mailto:jwweldon@eminetwork.com">Jane Weldon</a>

Director of Copywriting Services

<a href="mailto:gcohen@eminetwork.com">Gary Cohen</a>

Editor-in-Chief, Vine Line Magazine

<a href="mailto:pbarnes@eminetwork.com">Phil Barnes</a>

Associate Editor, Vine Line Magazine

</div></div>

  </div><!-- end col-lg-9 -->



  <div class="col-lg-3">

  <div style="float: left; margin-left: 35px; height: 475px; padding-top: 0px; padding-right: 10px; -webkit-mask-image:-webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)))" class="hide-on-mobile hide-on-tablet"> <img src="http://www.eminetwork.com/wp-content/themes/emi/images/vertical-rule.png"></div>



  <h3 style="color: #6c5e55; font-size: 16px; font-family: GothamBold; text-transform: uppercase;">Join the Network</h3>

  <p>

  EMI Network is such a special place to work because of the relationships we’ve built with one another, with our clients and with our partners. (The candy on Rick's desk doesn’t hurt, either.) 

  </p>

  <a href="./join-the-network/" style="color: #f57f20; font-size: 14px; font-family: GothamBold; text-transform: uppercase;">&gt; View Job Postings</a>



  <!-- <?php echo get_post_meta($post->ID, 'sidebarcontent', true); ?> -->

  </div>

</div>



  <div class="row">

    <div class="col-lg-12">

      <div style="margin-bottom: 75px;"></div>

    </div>

  </div>

</div><!-- end container -->















<?php get_footer(); ?>