<?php
/*
Template name: IUCAAAREM blog
 */
?>

<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 topArticle">
			<?php $reciente = new WP_Query("cat=17&showposts=1"); while($reciente->have_posts()) : $reciente->the_post();?>
				<div class="col-sm-12 col-md-12 col-lg-6 left">
					<span class="topBlue">Artículo destacado</span>
					<a href="<?php the_permalink() ?>">
							<h1><?php echo substr ( the_title( '', '', false ), 0,25 ) . "..." ; ?></h1>
							<?php the_excerpt(); ?>
					</a>
				</div><!-- col -->
			<?php endwhile; ?>
		</div>
	</div>
</div><!-- section -->

<div id="section" class="container-fluid pageContent">
	<div class="row">
		<?php $reciente = new WP_Query("cat=17&offset=1"); while($reciente->have_posts()) : $reciente->the_post();?>
			<div class="col-sm-12 col-md-12 col-lg-3 article">			
				<a href="<?php the_permalink() ?>">
					<?php if(has_post_thumbnail()) :?>
						<div class="headerImg" style="background-image: url('<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>');">
					<?php else :?>
						<div class="headerImg" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/miscelaneos.jpg');">
					<?php endif;?>
					</div>
					<div class="blogBox">
						<h2><?php echo substr ( the_title( '', '', false ), 0,25 ) . "..." ; ?></h2>
						<?php the_excerpt(); ?>
					</div><!-- blogBox -->
				</a>
			</div><!-- col -->
		<?php endwhile; ?>
	</div><!-- row -->
</div><!-- section -->

<div id="section" class="container-fluid pageContent">
	<div class="row">
		<div class="col-xs-8 center">
			
		</div>
	</div>


<?php get_footer(); ?>