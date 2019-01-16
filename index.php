<?php get_header(); ?>

<style>
	.feed-container{
		margin-top:100px;
	}
</style>

<div class="container feed-container">

<!-- cont. other post -->

<section id="primary" class="content-area">
		<main id="main" class="site-main">
		
		
		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				
				//get_template_part( 'template-parts/content/content' );
				?>
			<div class="row">

		<div class="col-lg-12">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header"><a href="<?php the_permalink(); ?>">
					<?php
						the_title( '<h1 class="entry-title">', '</h1>' );
					?></a>
				</header><!-- .entry-header -->

	

					<div class="entry-content">
						<?php
						the_excerpt();

						?>
					</div><!-- .entry-content -->
				</article><!-- #post-${ID} -->
			</div>
			</div>
			<?php

			} 
		}	else {

			// If no content, include the "No posts found" template.
			?><h1>No entrie found.</h1><p>We applogize, but we appear to be all out of entries.</p> <?php

		}
		?>
			
		</main><!-- .site-main -->
	</section><!-- .content-area -->








</div><!-- end container -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>