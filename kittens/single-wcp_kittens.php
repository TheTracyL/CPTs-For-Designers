<?php
/**
 * The Template for displaying all single Kitten posts.
 * It's just a copy of single.php modified to show kittney stuff.
 */

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
					
						<!-- The kitten name -->
						<h1 class="entry-title"><?php the_title(); ?></h1>
					
						<!-- grabbing the custom thumbnail "kittens-single" for this kitten -->
						<?php echo get_the_post_thumbnail($page->ID, 'kittens-single'); ?>

						<!-- Output of all our kitten Custom Taxonomies -->
						<div class="entry-meta">
							<?php the_terms( $post->ID, 'custom_cat_breeds', '<strong>Breed:</strong> ', ', ', ' ' ); ?><br />
							<?php the_terms( $post->ID, 'custom_cat_color', '<strong>Color:</strong> ', ', ', ' ' ); ?><br />
							<?php the_terms( $post->ID, 'custom_tag_markings', '<strong>Markings:</strong> ', ', ', ' ' ); ?><br />
						</div><!-- .entry-meta -->
						
					</header><!-- .entry-header -->

					<div class="entry-content">
						
						<!-- The kitten description -->
						<?php the_content(); ?>
					
					</div><!-- .entry-content -->
					
				</article><!-- #post-<?php the_ID(); ?> -->
				
				<div id="backlink">
					&laquo; <a href="http://localhost/tracy/kittens/">Back to Kittens</a>
				</div>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>