<?php
/**
* Cursos
 */
?>

<?php get_header(); ?>


<div class="fluid-container">
	
	<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
	
	<div class="row">
		<div class="col-xs-12 videoFeatured">
			<center>
			<h2><?php the_title() ?></h2>
					<div class="">
						<?php the_content(); ?>
					</div>
			</center>
		</div><!-- col -->	
	</div><!-- row -->
	
	<div class="row cursoBorder">
		<div class="col-xs-7 cursoDesc">
			<h3>Descripción del curso</h3>
			
			<?php echo get_post_meta( get_the_ID(), 'descripcion', true ) ?>
		</div><!-- col -->
		
		<div class="col-xs-4 col-xs-offset-1 cursoMateriales">
			<h3>Temario</h3>
			
			<p>Descarga el temario en PDF de este curso</p>
			<a href="<?php the_field('temario'); ?>" download=""><i class="zmdi zmdi-cloud-download"></i> Descargar</a>

			<hr style="color: #eee; background: #eee; display: block; margin-top: 16px;" />
			
			<h3>Materiales</h3>
			
			<p>Descarga los materiales de este curso</p>
			<a href="<?php the_field('zip'); ?>" download=""><i class="zmdi zmdi-cloud-download"></i> Descargar</a>
		</div><!-- col -->
	</div><!-- row -->
	
	
	<?php endwhile; ?>
		<?php endif; ?>
	
</div><!-- fluid-container -->


<?php get_footer(); ?>