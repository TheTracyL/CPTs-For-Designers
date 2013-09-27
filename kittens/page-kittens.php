<?php
/*
Template Name: The Kittens Page
*/

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
				<!-- start the regular page content -->

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
				
				<!-- end of regular page content -->
				
				<!-- start the Kittens CPT Query and loop -->
				
				<!-- The kittens Wp_Query and array  -->
				<?php $kittensloop = new WP_Query(array ( 'post_type' => 'wcp_kittens', 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
				
					<!-- Stuff before the loop  -->
					<ul id="kittens-list" class="thumbnails clearfix">
 
					<!-- Loop starts! -->
					<?php while ($kittensloop->have_posts()) : $kittensloop->the_post(); ?>
					
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
						
					<?php endwhile;  ?>	
					<!-- Loop ends -->
					
					<!-- Stuff after the loop  -->
					</ul>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
		
<?php get_footer(); ?>