<?php
/*
Template name: IUCAAAREM inicio
 */
?>

<?php include (TEMPLATEPATH . '/child/header_site_home.php'); ?>

<div class="container searchMediumBar">
	<div class="row">
		<div class="col-xs-12">
			hola
		</div>
	</div><!-- row -->
</div><!-- container -->

<div id="section" class="container aboutHome">
	<div class="row">
		<div class="col-xs-6">
			<h2 class="sectionName">Acerca de IMEFI</h2>
			<p class="sectionDescription"><b>El Instituto Mexicano de Expansión Fiscal y de Negocios (IMEFI)</b> fue creada en el año 2000 por profesionistas y empresarios con el objetivo de formar líderes en las áreas de: Fiscal, Auditoria, Mercadotecnia, Dirección,Recursos Humanos, Ventas, entre otras.  Mediante una propuesta académica innovadora, con un enfoque práctico y en apego a la realidad empresarial, con el ánimo de transformar positivamente a las organizaciones de todos los sectores, y a la sociedad en general.</p>
		</div>
	</div>
</div><!-- section -->



<div id="cursosOnlineRecientes" class="container recientesCursosFront">
	<div class="row">
		<div class="col-xs-12">
			<?php
			$params = array('orderby' => 'rand', 'posts_per_page' => 3, 'post_type' => 'product');
			$wc_query = new WP_Query($params);
			?>
			
			<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<h2>Diplomados onLine recientes</h2>
						<p>Nuestros diplomados son impartidos con los más altos estándares de calidad con profesores calificados.</p>
						<hr />
						<a href="#">Ver todos los diplomados</a>
					</div>
				<?php if ($wc_query->have_posts()) : ?>
				     <?php while ($wc_query->have_posts()) :
				                $wc_query->the_post(); ?>
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 cursoIndividualFront">
					
					<div class="thumbnailCourse">
						<?php if ( has_post_thumbnail() ) {
						  	the_post_thumbnail();
						  } else {
						  	the_content();
						}; ?>
					</div>
					
					<h3>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h3>

					<!-- <?php echo wc_price($product->get_price_including_tax(1, $product->get_sale_price())); ?> -->
					
					<div class="homePrice">
						<?php echo $product->get_price_html(); ?>
					</div>
					
					<?php ?>

						<?php if($product->has_child()) : ?>
						<a href="<?php the_permalink(); ?>">
							<?php _e('<div class="sendBtn">Ver opciones</div>', 'my-theme'); ?>
						</a>
						
						<?php elseif($product->is_in_stock()) : ?>
						<form class="cart" action="<?php the_permalink() ?>" method="post" enctype="multipart/form-data">
						     <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->id); ?>">
						     <button type="submit" class="sendBtn"><?php echo $product->single_add_to_cart_text(); ?></button>
						</form>

					<?php endif; ?>

				</div><!-- col -->

					<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else:  ?>
					  
					<div class="noNew"><?php _e( 'No hay nuevos cursos' ); ?></div>
					   
				<?php endif; ?>
					
			</div><!-- row -->
			
		</div>
	</div><!-- row -->
</div><!-- container -->

<div id="cursosPresencialesRecientes" class="container recientesCursosFront">
	<div class="row">
		<div class="col-xs-12">
			<?php
			$params = array('orderby' => 'rand', 'posts_per_page' => 3, 'post_type' => 'product');
			$wc_query = new WP_Query($params);
			?>
			
			<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<h2>Diplomados presenciales recientes</h2>
						<p>Nuestros diplomados son impartidos con los más altos estándares de calidad con profesores calificados.</p>
						<hr />
						<a href="#">Ver todos los diplomados</a>
					</div>
				<?php if ($wc_query->have_posts()) : ?>
				     <?php while ($wc_query->have_posts()) :
				                $wc_query->the_post(); ?>
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 cursoIndividualFront">
					
					<div class="thumbnailCourse">
						<?php if ( has_post_thumbnail() ) {
						  	the_post_thumbnail();
						  } else {
						  	the_content();
						}; ?>
					</div>
					
					<h3>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h3>

					<!-- <?php echo wc_price($product->get_price_including_tax(1, $product->get_sale_price())); ?> -->
					
					<div class="homePrice">
						<?php echo $product->get_price_html(); ?>
					</div>
					
					<?php ?>

						<?php if($product->has_child()) : ?>
						<a href="<?php the_permalink(); ?>">
							<?php _e('<div class="sendBtn">Ver opciones</div>', 'my-theme'); ?>
						</a>
						
						<?php elseif($product->is_in_stock()) : ?>
						<form class="cart" action="<?php the_permalink() ?>" method="post" enctype="multipart/form-data">
						     <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->id); ?>">
						     <button type="submit" class="sendBtn"><?php echo $product->single_add_to_cart_text(); ?></button>
						</form>

					<?php endif; ?>

				</div><!-- col -->

					<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else:  ?>
					  
					<div class="noNew"><?php _e( 'No hay nuevos cursos' ); ?></div>
					   
				<?php endif; ?>
					
			</div><!-- row -->
			
		</div>
	</div><!-- row -->
</div><!-- container -->

<div id="diplomadosOnlineRecientes" class="container recientesCursosFront">
	<div class="row">
		<div class="col-xs-12">
			<?php
			$params = array('orderby' => 'rand', 'posts_per_page' => 3, 'post_type' => 'product');
			$wc_query = new WP_Query($params);
			?>
			
			<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<h2>Diplomados onLine recientes</h2>
						<p>Nuestros diplomados son impartidos con los más altos estándares de calidad con profesores calificados.</p>
						<hr />
						<a href="#">Ver todos los diplomados</a>
					</div>
				<?php if ($wc_query->have_posts()) : ?>
				     <?php while ($wc_query->have_posts()) :
				                $wc_query->the_post(); ?>
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 cursoIndividualFront">
					
					<div class="thumbnailCourse">
						<?php if ( has_post_thumbnail() ) {
						  	the_post_thumbnail();
						  } else {
						  	the_content();
						}; ?>
					</div>
					
					<h3>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h3>

					<!-- <?php echo wc_price($product->get_price_including_tax(1, $product->get_sale_price())); ?> -->
					
					<div class="homePrice">
						<?php echo $product->get_price_html(); ?>
					</div>
					
					<?php ?>

						<?php if($product->has_child()) : ?>
						<a href="<?php the_permalink(); ?>">
							<?php _e('<div class="sendBtn">Ver opciones</div>', 'my-theme'); ?>
						</a>
						
						<?php elseif($product->is_in_stock()) : ?>
						<form class="cart" action="<?php the_permalink() ?>" method="post" enctype="multipart/form-data">
						     <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->id); ?>">
						     <button type="submit" class="sendBtn"><?php echo $product->single_add_to_cart_text(); ?></button>
						</form>

					<?php endif; ?>

				</div><!-- col -->

					<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else:  ?>
					  
					<div class="noNew"><?php _e( 'No hay nuevos cursos' ); ?></div>
					   
				<?php endif; ?>
					
			</div><!-- row -->
			
		</div>
	</div><!-- row -->
</div><!-- container -->

<div id="diplomadosPresencialesRecientes" class="container recientesCursosFront">
	<div class="row">
		<div class="col-xs-12">
			<?php
			$params = array('orderby' => 'rand', 'posts_per_page' => 3, 'post_type' => 'product');
			$wc_query = new WP_Query($params);
			?>
			
			<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<h2>Diplomados presenciales recientes</h2>
						<p>Nuestros diplomados son impartidos con los más altos estándares de calidad con profesores calificados.</p>
						<hr />
						<a href="#">Ver todos los diplomados</a>
					</div>
				<?php if ($wc_query->have_posts()) : ?>
				     <?php while ($wc_query->have_posts()) :
				                $wc_query->the_post(); ?>
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 cursoIndividualFront">
					
					<div class="thumbnailCourse">
						<?php if ( has_post_thumbnail() ) {
						  	the_post_thumbnail();
						  } else {
						  	the_content();
						}; ?>
					</div>
					
					<h3>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h3>

					<!-- <?php echo wc_price($product->get_price_including_tax(1, $product->get_sale_price())); ?> -->
					
					<div class="homePrice">
						<?php echo $product->get_price_html(); ?>
					</div>
					
					<?php ?>

						<?php if($product->has_child()) : ?>
						<a href="<?php the_permalink(); ?>">
							<?php _e('<div class="sendBtn">Ver opciones</div>', 'my-theme'); ?>
						</a>
						
						<?php elseif($product->is_in_stock()) : ?>
						<form class="cart" action="<?php the_permalink() ?>" method="post" enctype="multipart/form-data">
						     <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->id); ?>">
						     <button type="submit" class="sendBtn"><?php echo $product->single_add_to_cart_text(); ?></button>
						</form>

					<?php endif; ?>

				</div><!-- col -->

					<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else:  ?>
					  
					<div class="noNew"><?php _e( 'No hay nuevos cursos' ); ?></div>
					   
				<?php endif; ?>
					
			</div><!-- row -->
			
		</div>
	</div><!-- row -->
</div><!-- container -->

<div id="cursosGratuitos" class="container recientesCursosFront">
	<div class="row">
		<div class="col-xs-12">
			<?php
			$params = array('orderby' => 'rand', 'posts_per_page' => 3, 'post_type' => 'product');
			$wc_query = new WP_Query($params);
			?>
			
			<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<h2>Cursos gratuitos recientes</h2>
						<p>Nuestros diplomados son impartidos con los más altos estándares de calidad con profesores calificados.</p>
						<hr />
						<a href="#">Ver todos los diplomados</a>
					</div>
				<?php if ($wc_query->have_posts()) : ?>
				     <?php while ($wc_query->have_posts()) :
				                $wc_query->the_post(); ?>
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 cursoIndividualFront">
					
					<div class="thumbnailCourse">
						<?php if ( has_post_thumbnail() ) {
						  	the_post_thumbnail();
						  } else {
						  	the_content();
						}; ?>
					</div>
					
					<h3>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h3>

					<!-- <?php echo wc_price($product->get_price_including_tax(1, $product->get_sale_price())); ?> -->
					
					<div class="homePrice">
						<?php echo $product->get_price_html(); ?>
					</div>
					
					<?php ?>

						<?php if($product->has_child()) : ?>
						<a href="<?php the_permalink(); ?>">
							<?php _e('<div class="sendBtn">Ver opciones</div>', 'my-theme'); ?>
						</a>
						
						<?php elseif($product->is_in_stock()) : ?>
						<form class="cart" action="<?php the_permalink() ?>" method="post" enctype="multipart/form-data">
						     <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->id); ?>">
						     <button type="submit" class="sendBtn"><?php echo $product->single_add_to_cart_text(); ?></button>
						</form>

					<?php endif; ?>

				</div><!-- col -->

					<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else:  ?>
					  
					<div class="noNew"><?php _e( 'No hay nuevos cursos' ); ?></div>
					   
				<?php endif; ?>
					
			</div><!-- row -->
			
		</div>
	</div><!-- row -->
</div><!-- container -->

<div id="libreríaHome" class="container recientesCursosFront">
	<div class="row">
		<div class="col-xs-12">
			<?php
			$params = array('orderby' => 'rand', 'posts_per_page' => 3, 'post_type' => 'product');
			$wc_query = new WP_Query($params);
			?>
			
			<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<h2>Librería</h2>
						<p>Nuestros diplomados son impartidos con los más altos estándares de calidad con profesores calificados.</p>
						<hr />
						<a href="#">Ver todos los diplomados</a>
					</div>
				<?php if ($wc_query->have_posts()) : ?>
				     <?php while ($wc_query->have_posts()) :
				                $wc_query->the_post(); ?>
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 cursoIndividualFront">
					
					<div class="thumbnailCourse">
						<?php if ( has_post_thumbnail() ) {
						  	the_post_thumbnail();
						  } else {
						  	the_content();
						}; ?>
					</div>
					
					<h3>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h3>

					<!-- <?php echo wc_price($product->get_price_including_tax(1, $product->get_sale_price())); ?> -->
					
					<div class="homePrice">
						<?php echo $product->get_price_html(); ?>
					</div>
					
					<?php ?>

						<?php if($product->has_child()) : ?>
						<a href="<?php the_permalink(); ?>">
							<?php _e('<div class="sendBtn">Ver opciones</div>', 'my-theme'); ?>
						</a>
						
						<?php elseif($product->is_in_stock()) : ?>
						<form class="cart" action="<?php the_permalink() ?>" method="post" enctype="multipart/form-data">
						     <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->id); ?>">
						     <button type="submit" class="sendBtn"><?php echo $product->single_add_to_cart_text(); ?></button>
						</form>

					<?php endif; ?>

				</div><!-- col -->

					<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else:  ?>
					  
					<div class="noNew"><?php _e( 'No hay nuevos cursos' ); ?></div>
					   
				<?php endif; ?>
					
			</div><!-- row -->
			
		</div>
	</div><!-- row -->
</div><!-- container -->

<div id="wp_33528">	
	<div id="content" class="">
		<div class="wrap">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile;?>
		</div>
	</div>
</div>

<?php get_footer(); ?>