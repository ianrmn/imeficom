<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!-- bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">

<!-- material design font -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php
	do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="margin-bottom: 0;">
		
		<div class="container-fluid topBlack">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 topBlackMenu">
						<p><i class="zmdi twitter zmdi-whatsapp"></i> Whatsapp</p>
					</div>
					<div class="col-xs-6 topBlackMenu">
						<ul class="submenu">
							<li><a href="#" target="_blank"><i class="zmdi facebook zmdi-facebook-box"></i></a></li>
							<li><a href="#"><i class="zmdi twitter zmdi-twitter-box"></i></a></li>
							<li><a href="#"><i class="zmdi instagram zmdi-instagram"></i></a></li>
							<li><a href="#"><i class="zmdi youtube zmdi-youtube-play"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container fixMenuHeader">
			<div class="row">
				<div class="col-xs-12 col-md-4 col-lg-4 left">
					<a href="/" class="logo"></a>
				</div><!-- col -->
				
				<div class="col-xs-12 col-md-8 col-lg-8 right">
					<ul class="submenu">
						<li>
							<?php if ( is_user_logged_in() ) { ?> 
							   <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Mi cuenta','woothemes'); ?>"><i class="zmdi zmdi-account"></i> &nbsp; <?php _e('Mi cuenta','woothemes'); ?></a><div class="gravatar" style="display: none;"><?php wpbeginner_display_gravatar(); ?></div>
							<?php }
							else { ?>
							   <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>"><?php _e('Ingresar / Registrarse','woothemes'); ?></a>
							<?php } ?>
						</li>
						<li>
							<div class="total">
								<i class="zmdi zmdi-shopping-cart"></i> &nbsp;
								<a class="" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
								<?php echo sprintf (_n( '%d item', '%d items', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?> -
								<?php echo WC()->cart->get_cart_total(); ?></a>
							</div>
						</li>
					</ul>
					<?php
					if ( is_user_logged_in() ) {
					   wp_nav_menu( array('menu' => 'logged', 'container_class' => 'new_menu_class' ));
					  } else {
					   wp_nav_menu( array('menu' => 'header', 'container_class' => 'new_menu_class' ));
					  }
					?>
				</div><!-- col -->
			</div>
		</div><!-- container -->
		
	</header><!-- #masthead -->

	<?php masterslider(1); ?>

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
