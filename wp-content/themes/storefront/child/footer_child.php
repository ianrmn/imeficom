<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-lg-6"><img src="<?php bloginfo('template_url'); ?>/images/logo_footer_1.jpg" class="left footerLogo"></div>
				<div class="col-lg-6"><img src="<?php bloginfo('template_url'); ?>/images/logo_footer_2.jpg" class="right footerLogo"></div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 left">
					<ul class="footerLeft" style="display: none;">
						<li><i class="zmdi zmdi-mail-send"></i> <b>Ventas</b> <br /> +52 (55) 3300 7500 ext. 1807</li>
						<li><i class="zmdi zmdi-phone"></i> <b>Pagos y Facturación</b> <br /> +52 (55) 3300 7500 ext. 1807</li>
						<li><b>Certificación y constancia</b> <br /> +52 (55) 3300 7500 ext. 1807</li>
					</ul>
				</div><!-- col -->
				
				<div class="col-lg-8 right footerRight">
					<?php wp_nav_menu( array('menu' => 'header', 'container_class' => 'new_menu_class' )); ?>
				</div><!-- col -->
			</div>
		</div>
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
