<!-- Advanced Custom Fields -->
<?php 
	$service_list_title = get_field('service_list_title', 22);  
?>

<section class="services-section">

		<div class="container">

			<h1 class="title"><?php echo $service_list_title; ?></h1>
		
		</div> <!-- container -->
		
		<div class="services-wrapper">

			<ul>
			
			<?php 
			// Loop through custom fields for service list
			$args = array( 'post_type' => 'services' );
			$the_query = new WP_Query( $args ); 

				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();

						$icon 					= get_field('icon');
						$service_title 			= get_field('service_title'); 
						$service_description 	= get_field('service_description'); 
						$service_link			= get_field('service_link');
			?>
			
				<li class="services-item">
					<div class="service shadow">

					<?php if( !empty($icon) ) : ?>
                      
					<div class="icon">
						<i class="fa <?php echo $icon; ?>" aria-hidden="true"></i>
					</div>
                      
					<?php endif; ?>
					
					<p><h3 class="service-h3"><?php echo $service_title; ?></h3></p>
					<p><?php echo $service_description;  ?></p>
					<div class="btn">
							<a href="<?php echo $service_link; ?>">
							<button>More...</button>
							</a>
						</div><!-- btn -->
					</div><!-- service -->
				</li>	
  
			<?php
					} 
				wp_reset_postdata();
				} else {
					_e( 'Whoops! No services? Hmm...' );
				}
			?>

			</ul>	
		</div> <!-- services-wrapper -->

	</section> <!-- services-section -->