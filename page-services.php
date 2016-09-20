<?php
/*
	Template Name: Services Page
*/

	$service_menu_title = get_field('service_menu_title', 78);

get_header();
?>

<section class="services-section-page">

	<div class="container-small">

		<div class="sidebar">

				<div class="sidebar-title">
				<h2><?php echo $service_menu_title; ?></h2>
				</div><!-- sidebar-title -->

			<div class="services-sidebar">
				<?php 
				$args = array(
					'theme_location' => 'service_menu'
				);
				?>

				<?php wp_nav_menu($args); ?>
				
			</div><!-- services-sidebar -->
		</div><!-- sidebar -->

		<div class="post-title">
			<h1><?php the_title(); ?></h1>	
		</div><!-- post-title -->	

		<div class="service-content">

			<?php 
				if (have_posts()) : while (have_posts()) : the_post();
					if (has_post_thumbnail()) : the_post_thumbnail();
					endif;
					the_content();
				endwhile; else: ?>
				<p><?php _e( "Sorry, it's not here!" ); ?></p>
			<?php endif; ?>	
			
		</div><!-- service-content -->

	</div> <!-- container -->

</section> <!-- services-section -->

<?php get_template_part('template-parts/content', 'contact'); ?>

<?php get_footer(); ?>