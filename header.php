<!-- Advanced Custom Fields -->
<?php 
	$logo_tagline				= get_field('logo_tagline', 22);
	$email_address 				= get_field('email_address', 22); 
	$text_over_contact_details 	= get_field('text_over_contact_details', 22); 
	$phone_number 				= get_field('phone_number', 22);
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0D446C">

	<title><?php bloginfo('name'); ?></title>
	
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/queries.css">
    <link rel="icon" sizes="110x110" href="<?php bloginfo('template_url'); ?>/img/XPS-Tokyo-Logo-scaled.png">
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
  
	<?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="container">
			
			<div class="logo">
				<?php if(has_custom_logo()) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<h1><?php bloginfo('name'); ?></h1>
				<?php endif; ?>
			</div>

			<?php if( !empty($logo_tagline) ) : ?>
				<div id="logo-tagline">
					<small><?php echo $logo_tagline; ?></small>
				</div><!-- logo-tagline -->
			<?php endif; ?>

			<div class="contact-header">

				<?php if( !empty($text_over_contact_details) ) : ?>
					<div class="estimate">
						<?php echo $text_over_contact_details; ?>
					</div><!-- estimate -->
				<?php endif; ?>

				<div class="contact-info">

					<div class="header-contact-details">
						<i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;<a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a>
					</div><!-- header-contact-details -->
					
					<div class="header-contact-details">
						<i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;
						<a href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>
					</div><!-- header-contact-details -->

				</div> <!-- contact-info -->

			</div><!-- contact-header -->

		</div> <!-- container -->
		
	</header>
	
	<nav class="main-nav">

		<div class="container">

			<?php 
				$args = array(
					'theme_location' => 'primary',
					'menu_class' => 'nav-ul js--main-nav'
				);
			?>

			<?php wp_nav_menu($args); ?>

			<a class="js--nav-icon"><i class="fa fa-bars" aria-hidden="true"></i></a>
		
		</div> <!-- container -->

	</nav><!-- main-nav -->