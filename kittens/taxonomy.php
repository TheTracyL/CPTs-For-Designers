<?php
/**
 * The default template for displaying Custom Taxonomies.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

		<section id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<header>
					<h1 class="page-title">
						<!-- this code shows the taxonomy name -->
						<?php $the_tax = get_taxonomy( get_query_var( 'taxonomy' ) ); echo $the_tax->labels->name; ?>: 
						<!-- this code shows the term name -->
						<?php single_cat_title(); ?>
					</h1>
				</header><!-- .page-header -->
				
					<ul id="kittens-list" class="thumbnails clearfix">

					<!-- Here is the loop that displays kittens matching the taxonomy's term -->
					<?php while ( have_posts() ) : the_post(); ?>

						<li class="span3">
							<div class="thumbnail">
								<!-- Displays the custom thumbnail size "kittens-thumb" -->
								<a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail($page->ID, 'kittens-thumb'); ?></a>
								<!-- Displays the kitten name -->
								<h3><?php the_title(); ?></h3>
								<div class="text-left kittens-excerpt">									
									<!-- Displays The Excerpt -->
									<?php the_excerpt(); ?>
								</div>
								<!-- "View Kitten" button that links to the single Kitten post -->
								<a href="<?php the_permalink() ?>" rel="bookmark" class="btn btn-block btn-info" title="<?php the_title_attribute(); ?>">View Kitten</a>
							</div>
						</li>	

					<?php endwhile; ?>
					
					</ul>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'archive' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
		</section><!-- #primary .content-area -->
		
<?php get_footer(); ?>