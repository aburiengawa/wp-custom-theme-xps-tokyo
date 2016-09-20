<?php

/*
	This is the default template for Pages
*/

get_header(); ?>

	<section class="services-section-page">

		<div class="container-small">

			<div class="post-title no-menu">
				<h1><?php the_title(); ?></h1>	
			</div><!-- post-title -->	
			
			<div class="service-content no-menu">

				<?php if ( have_posts() ) : while( have_posts() ): the_post();
					if ( has_post_thumbnail() ) : the_post_thumbnail();
					endif;
					the_content();
					endwhile; else: ?>
					<p><?php _e("Sorry, there is nothing here!"); ?></p>
				<?php endif;  ?>

			</div><!-- service-content -->

		</div> <!-- container -->

	</section> <!-- services-section -->

<?php get_template_part('template-parts/content', 'contact'); ?>

<?php get_footer(); ?>