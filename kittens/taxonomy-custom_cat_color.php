<?php
/**
 * The template for displaying our Custom Taxonomy "Colors".
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

				<header>
					<h1 class="page-title">
						<!-- added a special image to the colors taxonomy page -->
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rainbow_kittens.jpg" class="rainbow-kittens" />
						<!-- Hardcoded taxonomy name followed by code that shows the term name -->
						Color: <?php single_cat_title(); ?>
					</h1>
				</header><!-- .page-header -->
			
				<ul id="kittens-list" class="clearfix">

				<!-- Here is the loop that displays kittens matching the taxonomy's term -->
				<?php while ( have_posts() ) : the_post(); ?>

					<li>
						<div class="kitten-thumbnail">
							<!-- Displays the custom thumbnail size "kittens-thumb" -->
							<a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail($page->ID, 'kittens-thumb'); ?></a>

							<!-- Displays the kitten name -->
							<h3><?php the_title(); ?></h3>

							<div class="kittens-excerpt">									
								<!-- Displays The Excerpt -->
								<?php the_excerpt(); ?>
							</div>

							<!-- "View Kitten" button that links to the single Kitten post -->
							<a href="<?php the_permalink() ?>" rel="bookmark" class="kitten-link" title="<?php the_title_attribute(); ?>">View Kitten</a>
						</div>
					</li>	

				<?php endwhile; ?>
				
				</ul>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>