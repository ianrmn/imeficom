<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="fluid-content">
		
		<div class="row">
			<div class="col-xs-12">
				<center>
				<h2><?php the_title() ?></h2>
					<div class="">
						<?php the_content(); ?>
					</div>
				</center>
			</div><!-- col -->	
		</div><!-- row -->
		
		<div class="row">
			<div class="col-xs-12 videoLanding">
				<?php
					/**
					 * woocommerce_before_single_product_summary hook.
					 *
					 * @hooked woocommerce_show_product_sale_flash - 10
					 * @hooked woocommerce_show_product_images - 20
					 */
					do_action( 'woocommerce_before_single_product_summary' );
				?>
			
				<div class="detailsVideoLanding">
			
					<?php
						/**
						 * woocommerce_single_product_summary hook.
						 *
						 * @hooked woocommerce_template_single_title - 5
						 * @hooked woocommerce_template_single_rating - 10
						 * @hooked woocommerce_template_single_price - 10
						 * @hooked woocommerce_template_single_excerpt - 20
						 * @hooked woocommerce_template_single_add_to_cart - 30
						 * @hooked woocommerce_template_single_meta - 40
						 * @hooked woocommerce_template_single_sharing - 50
						 * @hooked WC_Structured_Data::generate_product_data() - 60
						 */
						do_action( 'woocommerce_single_product_summary' );
					?>
			
				</div><!-- .summary -->
			
				<?php
					/**
					 * woocommerce_after_single_product_summary hook.
					 *
					 * @hooked woocommerce_output_product_data_tabs - 10
					 * @hooked woocommerce_upsell_display - 15
					 * @hooked woocommerce_output_related_products - 20
					 */
					//do_action( 'woocommerce_after_single_product_summary' );
				?>
			</div>
		</div>
		
		<div class="row cursoBorder">
			<div class="col-xs-7 cursoDesc">
				<h3>Descripción del curso</h3>
				
				<?php echo get_post_meta( get_the_ID(), 'descripcion', true ) ?>
			</div><!-- col -->
			
			<div class="col-xs-4 col-xs-offset-1 cursoMateriales">
				<h3>Temario</h3>
				
				<p>Descarga el temario en PDF de este curso</p>
				<a href="<?php echo get_post_meta( get_the_ID(), 'temario', true ) ?>" download=""><i class="zmdi zmdi-cloud-download"></i> Descargar</a>
			</div><!-- col -->
		</div><!-- row -->
		
	</div>
	

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
