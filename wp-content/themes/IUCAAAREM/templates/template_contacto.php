<?php
/*
Template name: IUCAAAREM contacto
 */
?>

<?php get_header(); ?>

<div id="section" class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<h2 class="sectionName">Contáctanos</h2>
			<p class="sectionDescription">¿Tienes alguna duda? Déjanos tus datos.</p>
		</div>
	</div>
</div><!-- section -->

<?php while ( have_posts() ) : the_post(); ?>
<div id="section" class="container-fluid pageContent">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			<?php echo do_shortcode('[contact-form-7 id="54" title="Contacto"]'); ?>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-offset-1 col-lg-offset-1 otrosMedios">
			<?php the_content(); ?>
		</div>
	</div>
</div><!-- section -->
<?php endwhile;?>

<div id="section" class="container-fluid pageContent" style="display: none;">
	<div class="row">
		<div class="col-xs-12 center gMap">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6932170622317!2d-99.16313378498661!3d19.42565678688831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff315dbf2b45%3A0xab1db8eb1b22796d!2sCalle+Liverpool+88%2C+Ju%C3%A1rez%2C+06600+Ju%C3%A1rez%2C+CDMX!5e0!3m2!1sen!2smx!4v1493571716528" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>

	<script>
		$('.gMap').click(function () {
		    $('.gMap iframe').css("pointer-events", "auto");
		});
		
		$( ".gMap" ).mouseleave(function() {
		  $('.gMap iframe').css("pointer-events", "none"); 
		});
	</script>

<?php get_footer(); ?>