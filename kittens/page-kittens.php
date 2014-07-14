<?php
/*
Template Name: The Kittens Page
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>
				
			<div id="kittens-container">
				<!-- start the Kittens CPT Query and loop -->
				
				<!-- The kittens Wp_Query and array  -->
				<?php $kittensloop = new WP_Query(array ( 'post_type' => 'wcp_kittens', 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
				
					<!-- Stuff before the loop  -->
					<ul id="kittens-list" class="clearfix">
 
					<!-- Loop starts! -->
					<?php while ($kittensloop->have_posts()) : $kittensloop->the_post(); ?>
					
						<li>
							<div class="kitten-thumbnail">
								<!-- Displays the custom thumbnail size "kittens-thumb" -->
								<a href="<?php the_permalink() ?>">
									<?php echo get_the_post_thumbnail($page->ID, 'kittens-thumb'); ?>
								</a>

								<!-- Displays the kitten name -->
								<h3><?php the_title(); ?></h3>

								<div class="kittens-excerpt">									
									<!-- Displays The Excerpt -->
									<?php the_excerpt(); ?>
								</div>

								<!-- "View Kitten" link that links to the single Kitten post -->
								<a href="<?php the_permalink() ?>" rel="bookmark" class="kitten-link" title="<?php the_title_attribute(); ?>">View Kitten</a>
							</div>
						</li>	
						
					<?php endwhile;  ?>	
					<!-- Loop ends -->
					
					<!-- Stuff after the loop  -->
					</ul>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>