<?php get_header(); ?>

<div class="error-404-section">

	<div class="container">

		<div class="error-404-message">

			<h1>Uh oh... looks like that page doesn't exist.</h1>
			<p>Perhaps you were looking for one of our services?</p>

		</div><!-- error-404 -->

	</div><!-- container -->

	<?php get_template_part('template-parts/content', 'services'); ?>
	<?php get_template_part('template-parts/content', 'contact'); ?>

</div><!-- error-404-section -->

<?php get_footer(); ?>