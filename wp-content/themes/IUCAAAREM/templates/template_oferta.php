<?php
/*
Template name: TEMPLATE Oferta educativa
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div id="section" class="container-fluid" style="margin-bottom: 30px;">
	<div class="row">
		<div class="col-lg-4 eduCon titleAll titleFour">
			<h3><?php the_title(); ?></h3>
			<img class="imagenCursoInterna" src="<?php the_field('imagen_curso'); ?>">
			<p class="cursoDesc cursoDescFix"><?php echo get_post_meta( get_the_ID(), 'inicio_clases', true ) ?></p>
			<a href="#inscribirse" class="verMas verMasFour">Inscribirse al curso</a>
		</div>
		
		<div class="col-lg-7 col-lg-offset-1">
			<?php the_content(); ?>
			
			<br />
			
			<div id="inscribirse">
			<?php echo do_shortcode('[contact-form-7 id="197" title="Oferta educativa"]'); ?>
			</div>
			
		</div>
	</div>
	
	<script>
		// Select all links with hashes
		$('a[href*="#"]')
		  // Remove links that don't actually link to anything
		  .not('[href="#"]')
		  .not('[href="#0"]')
		  .click(function(event) {
		    // On-page links
		    if (
		      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
		      && 
		      location.hostname == this.hostname
		    ) {
		      // Figure out element to scroll to
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		      // Does a scroll target exist?
		      if (target.length) {
		        // Only prevent default if animation is actually gonna happen
		        event.preventDefault();
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 1000, function() {
		          // Callback after animation
		          // Must change focus!
		          var $target = $(target);
		          $target.focus();
		          if ($target.is(":focus")) { // Checking if the target was focused
		            return false;
		          } else {
		            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		            $target.focus(); // Set focus again
		          };
		        });
		      }
		    }
		  });
	</script>
	
</div><!-- section -->

<?php endwhile;?>

<?php get_footer(); ?>