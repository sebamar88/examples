<?php get_header(); ?>
    <section style="height: 60vh;background-image: url(<?php the_field('fondo'); ?>);position: relative;background-repeat: no-repeat;background-size: cover;background-position: center;">
        <div style="background-color: rgba(0,0,0,0.56);height: 100%;/*position: absolute;*/">
            <div class="container-fluid" style="height: 60vh;">
                <div class="row" style="height: 60vh;">
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                        <h1 style="color: rgb(253,254,255);"><?php the_field('titulo_h1'); ?><br></h1>
                        <div class="btn-group btn-group-lg" role="group"><a href="<?php $wp1=get_field('boton_1'); echo $wp1['url'] ?>" class="btn btn-warning" type="button"><?php $wp1=get_field('boton_1'); echo $wp1['title'] ?></a><a href="<?php $wp=get_field('boton_2'); echo $wp['url'] ?>" class="btn btn-success" type="button"><?php $wp=get_field('boton_2'); echo $wp['title'] ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="conocenos">
        <div class="container">
            <div class="row py-3">
                <div class="col-12 col-md-6 linea">
                    <h2 class="text-right titulo-h2"><?php the_field('columna_izquierda'); ?><br></h2>
                </div>
                <div class="col-12 col-md-6">
                    <p><?php the_field('columna_derecha'); ?><br></p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 linea">
                    <div class="row">
					<?php while( have_rows('bloques') ): the_row();?>
                        <div class="col-12 col-md-3 p-4">
                            <div class="row shadow rounded h-100">
                                <div class="col-8 d-xl-flex justify-content-xl-center align-items-xl-center">
                                    <h3 style="padding: 10px; font-size:20px"><?php the_sub_field('titulo_bloque_1'); ?> <br></h3>
                                </div>
                                <div class="col-4 d-xl-flex justify-content-xl-center align-items-xl-center"><i class="fa fa-user-circle-o" style="font-size: 50px;"></i></div>
                                <div class="col-12">
                                    <p><?php the_sub_field('texto_bloque_1'); ?><br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 p-4">
                            <div class="row shadow rounded h-100" id="card-two">
                                <div class="col-8 d-xl-flex justify-content-xl-center align-items-xl-center">
                                    <h3 style="padding: 10px; font-size:20px"><?php the_sub_field('titulo_bloque_2'); ?> <br></h3>
                                </div>
                                <div class="col-4 d-xl-flex justify-content-xl-center align-items-xl-center"><i class="fa fa-check-circle-o" style="font-size: 50px;"></i></div>
                                <div class="col-12">
                                    <p><?php the_sub_field('texto_bloque_2'); ?><br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-12 col-md-12 p-4">
                                    <div class="row shadow rounded">
                                        <div class="col-8 d-xl-flex justify-content-xl-center align-items-xl-center">
                                            <h3 style="padding: 10px; font-size:20px"><?php the_sub_field('titulo_bloque_3'); ?> <br></h3>
                                        </div>
                                        <div class="col-4 d-xl-flex justify-content-xl-center align-items-xl-center"><i class="fa fa-th-large " style="font-size: 50px;"></i></div>
                                        <div class="col-12">
                                    <p><?php the_sub_field('texto_bloque_3'); ?><br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 p-4">
                                    <div class="row shadow rounded">
                                        <div class="col-8 d-xl-flex justify-content-xl-center align-items-xl-center">
                                            <h3 style="padding: 10px; font-size:20px"><?php the_sub_field('titulo_bloque_4'); ?> <br></h3>
                                        </div>
                                        <div class="col-4 d-xl-flex justify-content-xl-center align-items-xl-center"><i class="fa fa-phone" style="font-size: 50px;"></i></div>
                                        <div class="col-12">
                                    <p><?php the_sub_field('texto_bloque_4'); ?><br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					<?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="productos" class="my-5 py-3" style="background-color: #fbf8f8;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <h2 class="text-center"><?php the_field('titulo_productos'); ?></h2>
                    <p class="text-center"><?php the_field('descripcion_productos'); ?><br></p>
                </div>
            </div>
            <div class="row py-3">
				
				<?php
$loop = new WP_Query( array(
    'post_type' => 'productos',
    'posts_per_page' => 3,
	'order' => 'ASC'
  )
);
?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="col-md-4 cust_blogteaser p-3" style="padding-bottom:20px;margin-bottom:32px;">
	<div class="shadow rounded p-3">
	<a href="<?php the_permalink(); ?>"><img class="img-fluid" style="height:auto;" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
                    <h3 style="text-align:left;margin-top:20px;font-family:'Open Sans', sans-serif;font-size:18px;margin-right:0;margin-left:24px;line-height:34px;letter-spacing:0px;font-style:normal;font-weight:bold;"><?php the_title(); ?><br></h3>
	<p class="text-secondary" style="text-align:left;font-size:14px;font-family:'Open Sans', sans-serif;line-height:22px;color:rgb(9,9,10);margin-left:24px;">
	<?php the_excerpt(); ?>
	</p>
	</div>
	</div>

<?php endwhile; wp_reset_query(); ?>
				
                
                
			<div class="col-12 text-center">
			<a href="http://lagventas.com.ar/productos/" class="btn btn-primary">
				Ver más productos
			</a>
			</div>
		</div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <h2 class="text-center"><strong>Somos distribuidores oficiales de:</strong><br></h2>
                </div>
                <div class="col-12 d-flex justify-content-center py-3">
                    <div class="row">
						<?php 
						if(empty(get_field('marca_2'))){ ?>
						<div class="col-12 text-center"><img style="max-width:200px" class="img-fluid" src="<?php the_field('marca_1'); ?>"></div>
						<?php }elseif(empty(get_field('marca_3'))){ ?>
						<div class="col-6 text-center"><img style="max-width:200px" class="img-fluid" src="<?php the_field('marca_1'); ?>"></div>
						<div class="col-6 text-center"><img style="max-width:200px" class="img-fluid" src="<?php the_field('marca_2'); ?>"></div>
						<?php }elseif(empty(get_field('marca_4'))){ ?>
						<div class="col-4 text-center"><img style="max-width:200px" class="img-fluid" src="<?php the_field('marca_1'); ?>"></div>
						<div class="col-4 text-center"><img style="max-width:200px" class="img-fluid" src="<?php the_field('marca_2'); ?>"></div>
						<div class="col-4 text-center"><img style="max-width:200px" class="img-fluid" src="<?php the_field('marca_3'); ?>"></div>
						<?php }else{ ?>
						<div class="col-6 col-md-3"><img style="max-width:200px" class="img-fluid" src="<?php the_field('marca_1'); ?>"></div>
						<div class="col-6 col-md-3"><img style="max-width:200px" class="img-fluid" src="<?php the_field('marca_2'); ?>"></div>
						<div class="col-6 col-md-3"><img style="max-width:200px" class="img-fluid" src="<?php the_field('marca_3'); ?>"></div>
						<div class="col-6 col-md-3"><img style="max-width:200px" class="img-fluid" src="<?php the_field('marca_4'); ?>"></div>
						<?php }
						?>
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background-color: #fbf8f8;" id="contactar">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <h2 class="text-center"><strong>Contacto</strong><br></h2>
                </div>
				<!-- contact form -->
				<div class="col-12 col-md-6 py-3">
				<?php echo do_shortcode('[contact-form-7 id="13" title="Contact form 1"]'); ?>
				                </div>
								
                <div class="col-12 col-md-6 py-3"><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7337.498828122658!2d-64.32527284725812!3d-23.142832988372977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x940ff5e38b187cef%3A0xfc87003a64a3f786!2sGral.%20Lavalle%20415%2C%20San%20Ramon%20de%20la%20Nueva%20Oran%2C%20Salta!5e0!3m2!1ses-419!2sar!4v1611925334224!5m2!1ses-419!2sar" width="100%" height="400" style="height: 100%;"></iframe></div>
				<!-- contact form -->
                </div>
        </div>
    </section>
<?php get_footer(); ?>