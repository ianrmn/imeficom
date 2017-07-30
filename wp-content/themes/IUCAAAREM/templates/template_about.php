<?php
/*
Template name: IUCAAAREM about
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div id="section" class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<h2 class="sectionName">Info</h2>
			<p class="sectionDescription"></p>
		</div>
	</div>
</div><!-- section -->

<div id="section" class="container-fluid pageContent">
	<div class="row">
		<div class="col-xs-12 col-md-12 col-md-8 col-lg-8">
				<?php the_content(); ?>
		</div>
		
		<div class="col-xs-12 col-md-12 col-md-3 col-lg-3 col-md-offset-1 col-lg-offset-1">
				<?php echo get_post_meta( get_the_ID(), 'directorio', true ) ?>
		</div>
	</div>
</div><!-- section -->

<div id="section" class="container-fluid pageContent">
	<div class="row">
		<div class="col-xs-12 col-md-12 col-md-8 col-lg-8 center">
			<!-- <h3 style="text-align: center;">¿Tienes una duda o comentario?<br /> Déjanos tus datos</h3>
			 <?php echo do_shortcode('[contact-form-7 id="54" title="Contacto"]'); ?> -->
		</div>
	</div>
<?php endwhile;?>


<?php get_footer(); ?>