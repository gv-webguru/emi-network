<?php

/**

 * The Template for displaying all single posts.

 * Template Name: Main Blog Feed Template

 * 

 * @package eminetwork

 */

get_header(); ?>







<style>

  ul.sidebar img {

    float: left;

    margin-left: 10px;

    padding-top: 0px;

    padding-right: 15px;

    margin-top:0px;

    -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)));

}

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

</style>


<div class="container">





<div class="col-lg-12">

<div class="row">

<!-- cont. other post -->

<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		$emi_query = new WP_Query();	
		if ( $emi_query->have_posts() ): ?>

			<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<p><?php the_excerpt();?></p>
			<?php endwhile; ?>
	<!-- end of the loop -->
		
		<?php else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	
			<?php endif; ?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->



</div>

</div><!-- end col-lg-12 -->


</div><!-- end container -->















<?php get_footer(); ?>