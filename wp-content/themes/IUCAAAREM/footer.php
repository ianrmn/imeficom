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

	<div class="container-fluid" style="display: none;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6"><img src="<?php bloginfo('template_url'); ?>/images/logo_footer_1.jpg" class="left footerLogo"></div>
				<div class="col-lg-6"><img src="<?php bloginfo('template_url'); ?>/images/logo_footer_2.jpg" class="right footerLogo"></div>
			</div>
		</div>
	</div>

	<div class="container-fluid foot">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 left" style="display: none;">
					<ul class="footerLeft">
						<li><i class="zmdi zmdi-mail-send"></i> <b>Ventas</b> <br /> +52 (55) 3300 7500 ext. 1802 ó 1810</li>
						<li><i class="zmdi zmdi-whatsapp"></i> <b>Whatsapp</b> <br /> +52 (55) 2664 7930</li>
						<!-- <li><i class="zmdi zmdi-phone"></i> <b>Pagos y Facturación</b> <br /> +52 (55) 3300 7500 ext. 1807</li> -->
						<li><b>Certificación y constancia</b> <br /> +52 (55) 3300 7500 ext. 1807</li>
					</ul>
				</div><!-- col -->
				
				<div class="col-lg-8 right footerRight">
					<?php wp_nav_menu( array('menu' => 'header', 'container_class' => 'new_menu_class' )); ?>
					
					<ul class="terms">
						<li><a href="/politica-de-privacidad/">Política de Privacidad</a></li>
						<li><a href="/terminos-y-condiciones-de-uso/">Términos y condiciones</a></li>
					</ul>
				</div><!-- col -->
			</div>
		</div>
	</div>

</div><!-- #page -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99082789-1', 'auto');
  ga('send', 'pageview');

</script>

<script>
	jQuery('.add_to_cart_button').click( function(){
		jQuery('.added').addClass('noVisible');
	});
</script>

<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>

<?php wp_footer(); ?>

</body>
</html>
