<!-- Advanced Custom Fields -->
<?php 
	$testimonials_section_title = get_field('testimonials_section_title', 22);
?>

<section id="testimonials-section" class="testimonials">

	<div class="container">

			<h1 class="title"><?php echo $testimonials_section_title; ?></h1>

	<div class="cd-testimonials-wrapper cd-container">

		<ul class="cd-testimonials">

		<?php 
			// Loop through custom fields for testimonials
			$args = array( 'post_type' => 'testimonials' );
			$the_query = new WP_Query( $args ); 

				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();

						$testimonial 	= get_field('testimonial');
						$customer_name 	= get_field('customer_name'); 
						$customer_image = get_field('customer_image'); 
		?>
          
			<li>
				<p> <?php echo $testimonial; ?> </p>
				<div class="cd-author">
                  
					<?php if ( !empty($customer_image) ) : ?>
                  
						<img src="<?php echo $customer_image['url']; ?>" alt="Author image">
                  
					<?php endif; ?>
                  
					<ul class="cd-author-info">
						<li><?php echo $customer_name; ?></li>
					</ul>
				</div>
			</li>
          
			<?php
					} 
				wp_reset_postdata();
				} else {
					_e( 'Sorry, no testimonials!' );
				}
			?>
          
		</ul> <!-- cd-testimonials -->

		<a href="#0" class="cd-see-all">See all</a>

	</div> <!-- cd-testimonials-wrapper -->

	<div class="cd-testimonials-all">

		<div class="cd-testimonials-all-wrapper">

			<ul>

			<?php 
              $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 10 );
              $the_query = new WP_Query( $args ); 

                  if ( $the_query->have_posts() ) {
                      while ( $the_query->have_posts() ) {
                          $the_query->the_post();

                          $testimonial 	= get_field('testimonial');
                          $customer_name 	= get_field('customer_name'); 
                          $customer_image = get_field('customer_image'); 
			?>
              
				<li class="cd-testimonials-item">
					<p><?php echo $testimonial; ?></p>
				<div class="cd-author">
                  
					<?php if ( !empty($customer_image) ) : ?>
                  
						<img src="<?php echo $customer_image['url']; ?>" alt="Author image">
                  
					<?php endif; ?>
                  
					<ul class="cd-author-info">
						<li><?php echo $customer_name; ?></li>
					</ul>
				</div>
				</li>
              
				<?php
					} 
				wp_reset_postdata();
				} else {
					_e( 'Sorry, no posts matched your criteria.' );
				}
			    ?>
				
			</ul>
		</div>	<!-- cd-testimonials-all-wrapper -->

		<a href="#0" class="close-btn">Close</a>

	</div> <!-- cd-testimonials-all -->

</section>