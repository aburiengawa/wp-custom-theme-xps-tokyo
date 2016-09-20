<!-- Advanced Custom Fields -->
<?php 
	$hero_long_tagline 	= get_field('hero_long_tagline', 22);  
	$hero_background 	= get_field('hero_background', 22);
?>

<!-- Style in div to make Hero Background Image changeable via Advanced Custom Fields -->
<div class="hero" 
	<?php if( !empty($hero_background) ): ?>
	
	style="background-image: linear-gradient(rgba(230, 230, 230, 0.8), rgba(230, 230, 230, 0.8)), url(<?php echo $hero_background['url']; ?>)"

	<?php endif; ?>			
 	>

		<div class="container-small">

			<div class="hero-title">
				<h1><?php bloginfo('name'); ?></h1>
			</div><!-- hero-title -->

			<div class="hero-text">
				<h2><?php bloginfo('description'); ?></h2>
			</div><!-- hero-text -->
			
			<?php if( !empty($hero_long_tagline) ) : ?>
          
			<div class="hero-p">
				<p><?php echo $hero_long_tagline; ?></p>
			</div><!-- hero-p -->
          
			<?php endif; ?>

		</div><!-- container-small -->

	</div><!-- hero -->