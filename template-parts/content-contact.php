<?php 
//Custom Fields
	$contact_section_title	= get_field('contact_section_title', 22); 
	$contact_section_text 	= get_field('contact_section_text', 22); 
	$email_label 			= get_field('email_label', 22); 
	$email_add 				= get_field('email_add', 22); 
	$phone_label 			= get_field('phone_label', 22); 
	$phone_num 				= get_field('phone_num', 22); 
	$phone_2_label 			= get_field('phone_2_label', 22); 
	$phone_2_num 			= get_field('phone_2_num', 22); 
	$fax_label 				= get_field('fax_label', 22); 
	$fax_num 				= get_field('fax_num', 22); 
?>

<section id="contact" class="contact-section">

	<h1 class="title"><?php echo $contact_section_title; ?></h1>

	<div class="container">
		<div class="form">

			<?php echo do_shortcode( '[contact-form-7 id="77" title="Contact form 1"]' ); ?>

		</div> <!-- form -->
						
		<div class="form-contact-info">
			
			<?php if( !empty($contact_section_text) ) : echo $contact_section_text; ?>
				<br>
			<?php endif; ?>
			
			<table>
              
				<tr>
					<td><?php echo $email_label; ?></td>
					<td><a href="mailto:<?php echo $email_add; ?>"><?php echo $email_add; ?></a></td>
				</tr>
              
				<tr>
					<td><?php echo $phone_label; ?></td>
					<td><a href="tel:<?php echo $phone_num; ?>"><?php echo $phone_num; ?></a></td>
				</tr>
              
				<?php if( !empty($phone_2_label) || !empty($phone_2_num) ) : ?>
				<tr>
					<td>
						<?php if( !empty($phone_2_label) ) : ?>
						<?php echo $phone_2_label; ?>
						<?php endif; ?>
					</td>
					<td>
						<?php if ( !empty($phone_2_num) ) : ?>
						<a href="tel:<?php echo $phone_2_num; ?>"><?php echo $phone_2_num; ?></a>
						<?php endif; ?>
					</td>
				</tr>
				<?php endif; ?>
              
				<?php if( !empty($fax_label) || !empty($fax_num) ) : ?>
				<tr>
					<td>
						<?php if( !empty($fax_label) ) : ?>
						<?php echo $fax_label; ?>
						<?php endif; ?>
					</td>
					<td>
						<?php if( !empty($fax_num) ) : ?>
						<?php echo $fax_num; ?>
						<?php endif; ?>
					</td>
				</tr>
				<?php endif; ?>
              
			</table>

		</div> <!-- form-contact-info -->
	</div> <!-- container -->

</section>