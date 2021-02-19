<?php get_header(); ?>

<section id="contact" style="background-image:url('<?php the_field('imagen_formulario'); ?>');">
	<div style="position:relative; z-index:1" class="container my-5">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="text-uppercase section-heading"><?php the_title(); ?></h2>
				<h3 class="section-subheading ">Invierte con nosotros.</h3>
			</div>
		</div>
		<?php echo do_shortcode('[contact-form-7 id="35" title="Home"]');?>
	</div>
</section>
    <?php get_footer(); ?>