<?php
/*
Template name: IUCAAAREM programas
 */
?>

<?php get_header(); ?>

<div id="section" class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<h2 class="sectionName">Nuestra experiencia habla por si misma</h2>
			<p class="sectionDescription">El Instituto Universitario CAAAREM surge de la necesidad que tiene el Comercio Exterior en México de profesionistas con experiencia teórica y práctica.</p>
		</div>
	</div>
</div><!-- section -->

<div id="section" class="container ofertaFix">
	<div class="row">
		<div class="col-lg-4 eduCon titleAll titleOne">
			<?php $my_query = new WP_Query('page_id=187'); while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID;?>
				<h3>TÉCNICO SUPERIOR UNIVERSITARIO<br/><b>EN COMERCIO EXTERIOR<br /> Y ADUANAS</b></h3>
				<img class="imagenCursoInterna" src="<?php the_field('imagen_curso'); ?>">
				<p class="cursoDesc cursoDescFix"><?php echo get_post_meta( get_the_ID(), 'inicio_clases', true ) ?></p>
				<a href="/oferta-educativa/tecnico-superior-universitario/" class="verMas verMasOne">Ver más detalles</a>
			<?php endwhile; ?>
		</div>
		<div class="col-lg-4 eduCon titleAll titleTwo">
			<?php $my_query = new WP_Query('page_id=189'); while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID;?>
				<h3>LICENCIATURA EN<br/><b>EN COMERCIO EXTERIOR, LOGÍSTICA Y ADUANAS</b></h3>
				<img class="imagenCursoInterna" src="<?php the_field('imagen_curso'); ?>">
				<p class="cursoDesc cursoDescFix"><?php echo get_post_meta( get_the_ID(), 'inicio_clases', true ) ?></p>
				<a href="/oferta-educativa/licenciatura-en-comercio-exterior/" class="verMas verMasTwo">Ver más detalles</a>
			<?php endwhile; ?>
		</div>
		<div class="col-lg-4 eduCon titleAll titleThree">
			<?php $my_query = new WP_Query('page_id=191'); while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID;?>
				<h3>MAESTRÍA EN<br/><b>ALTA DIRECCIÓN Y OPERACIÓN LOGÍSTICA</b></h3>
				<img class="imagenCursoInterna" src="<?php the_field('imagen_curso'); ?>">
				<p class="cursoDesc cursoDescFix"><?php echo get_post_meta( get_the_ID(), 'inicio_clases', true ) ?></p>
				<a href="/oferta-educativa/maestria-en-alta-direccion/" class="verMas verMasThree">Ver más detalles</a>
			<?php endwhile; ?>
		</div>
	</div>
</div><!-- section -->

<div id="section" class="container-fluid pageContent">
	<div class="row">
		<div class="col-xs-12">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile;?>
		</div>
	</div>
</div><!-- section -->

<?php get_footer(); ?>