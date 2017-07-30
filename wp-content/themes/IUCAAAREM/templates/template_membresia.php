<?php
/*
Template name: IMEFI Membresia
http://callmenick.com/post/custom-wordpress-loop-with-pagination
*/
?>

<?php get_header(); ?>

<div class="container recientesCursosFront">
	<div class="row">
		<div class="col-xs-12">
			
<?php
  // set up or arguments for our custom query
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $query_args = array(
    'post_type' => 'product',
    'posts_per_page' => 36,
    'product_cat' => 'membresia',
    'paged' => $paged,
	'order' => 'ASC',
	'orderby' => 'title'
  );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
  
  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 cursoIndividualFront">
					
	<?php the_post_thumbnail(); ?>
	
	<h3>
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h3>
	<!-- <?php echo wc_price($product->get_price_including_tax(1, $product->get_sale_price())); ?> -->
	
	<div class="homePrice">
		<?php echo $product->get_price_html(); ?>
	</div>

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

<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
  <nav class="prev-next-posts">
    <div class="prev-posts-link">
      <?php echo get_next_posts_link( 'Cursos anteriores', $the_query->max_num_pages ); // display older posts link ?>
    </div>
    <div class="next-posts-link">
      <?php echo get_previous_posts_link( 'Cursos recientes' ); // display newer posts link ?>
    </div>
  </nav>
<?php } ?>

<?php else: ?>
  <article>
    <h1>Sorry...</h1>
    <p><?php _e('No hay cursos que mostrar'); ?></p>
  </article>
<?php endif; ?>
			
		</div>
	</div><!-- row -->
</div><!-- container -->

<?php get_footer(); ?>