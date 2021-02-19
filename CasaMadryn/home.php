<?php get_header(); ?>
	<header id="home" class="masthead" style="background-image:url('https://images.pexels.com/photos/853151/pexels-photo-853151.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');">
        <div style="position:relative; z-index:1" class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span><?php the_field('landing_sub_title');?></span></div>
                <div class="intro-heading text-uppercase"><span><?php the_field('landing_title');?></span></div><a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" role="button" href="<?php $boton=get_field('landing_boton'); echo $boton['url']; ?>"><?php echo $boton['title']; ?></a></div>
        </div>
    </header>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center my-4">
                    <h2 class="text-uppercase section-heading">OBTENÉ TODOS ESTOS BENEFICIOS:</h2>
                </div>
            </div>
            <div class="row text-center">
			<?php 
			while ( have_rows('beneficios_group') ) : the_row(); ?>
				
				<div class="col-md-5"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-group fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading"><?php the_sub_field('titulo_servicio_1'); ?></h4>
                    <p class="text-muted text-left"><?php the_sub_field('texto_servicio_1'); ?></p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-black-tie fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading"><?php the_sub_field('titulo_servicio_2'); ?></h4>
                    <p class="text-muted text-left"><?php the_sub_field('texto_servicio_2'); ?></p>
                </div>
                <div class="col-md-3"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-refresh fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading"><?php the_sub_field('titulo_servicio_3'); ?></h4>
                    <p class="text-muted text-left"><?php the_sub_field('texto_servicio_3'); ?></p>
                </div>
				<div class="col-md-5"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-address-card-o fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading"><?php the_sub_field('titulo_servicio_6'); ?></h4>
                    <p class="text-muted text-left"><?php the_sub_field('texto_servicio_6'); ?></p>
                </div>
				<div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-hand-peace-o fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading"><?php the_sub_field('titulo_servicio_5'); ?></h4>
                    <p class="text-muted text-left"><?php the_sub_field('texto_servicio_5'); ?></p>
                </div>
				<div class="col-md-3"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading"><?php the_sub_field('titulo_servicio_4'); ?></h4>
                    <p class="text-muted text-left"><?php the_sub_field('texto_servicio_4'); ?></p>
                </div>
                
                
				
			<?php endwhile;
			?>
                
            </div>
        </div>
    </section>
    <section id="portfolio" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading"><?php the_field('titulo_invertir'); ?></h2>
                    <h3 class="section-subheading text-muted"><?php the_field('subtitulo_invertir'); ?></h3>
                </div>
            </div>
            <div class="row">
				<div class="col-lg-12 text-center">
                    <h5 class="rounded-top p-3 my-0 border text-capitalize text-left">¿Siente que le pagan poco en su Banco a plazo fijo?</h5>
                    <h5 class="p-3 my-0 border text-capitalize text-left">¿La inflación se está consumiendo sus ahorros en pesos?</h5>
					<h5 class="p-3 my-0 border text-capitalize text-left">¿Tiene dólares... pero todo aumenta e inclusive sube en “moneda fuerte”?</h5>
					<h5 class="rounded-bottom p-3 my-0 border text-capitalize text-left">¿Desea obtener una renta fija mensual asegurada?</h5>
					<h3 class="mt-4"><u>Aquí tenemos la solución.</u></h3>
					<h3 class="my-0">De ser <u>SI</u> su respuesta a esas preguntas, contáctese ahora.<span style="color:red">(1)</span></h3>
					<a class="btn btn-success btn-xl text-uppercase js-scroll-trigger my-4" role="button" href="<?php $boton2=get_field('boton_invertir'); echo $boton2['url']; ?>"><?php echo $boton2['title']; ?></a>
					<p style="font-size:.7rem"><span style="color:red">1-</span>En la comunicación le brindaremos objetivos claros de rendimientos mensuales. Una decisión que le puede cambiar la vida para bien, disfrutando de un rendimiento mensual por encima de cualquier pronóstico. Sea parte de la evolución digital.
					</p>
				</div>  
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">About</h2>
                    <h3 class="text-muted section-subheading">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-group timeline">
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRt7Y9XfVRHCzd0dSYo2By7pnW0bERgEGxcp5Zc84RgeG0z98aa&usqp=CAU"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRt7Y9XfVRHCzd0dSYo2By7pnW0bERgEGxcp5Zc84RgeG0z98aa&usqp=CAU"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRt7Y9XfVRHCzd0dSYo2By7pnW0bERgEGxcp5Zc84RgeG0z98aa&usqp=CAU"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRt7Y9XfVRHCzd0dSYo2By7pnW0bERgEGxcp5Zc84RgeG0z98aa&usqp=CAU"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part<br>&nbsp;Of Our<br>&nbsp;Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="https://www.hodgkison.com/wordpress/wp-content/uploads/2016/02/Portrait-square.jpg">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="https://www.nlgja.org/wp-content/uploads/2015/01/TJ-Thomson-Square.jpg">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="https://images.squarespace-cdn.com/content/v1/5864075746c3c414e5f54b7f/1565075081121-QNVV1BGCT0RMWX2VZ4S3/ke17ZwdGBToddI8pDm48kLPswmMOqQZ9-Q6KHLjvbpZ7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UTcpTqfU-ZEsztPyQLxhSSK-PhJjRDDFQG0l3_ZnmWi1QjT9byXZM3ISxo3y1NRptg/Renee+Melides_portrait_headshotsquare.jpg">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/creative-market.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/designmodo.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/envato.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/themeforest.jpg"></a></div>
            </div>
        </div>
    </section> -->
    <section id="contact" style="background-image:url('https://images.pexels.com/photos/225232/pexels-photo-225232.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');">
        <div style="position:relative; z-index:1" class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Contacto</h2>
                    <h3 class="section-subheading ">Ponte en contacto con Nosotros, y así sal de tus dudas.</h3>
                </div>
            </div>
			<?php echo do_shortcode('[contact-form-7 id="35" title="Contact form 1"]');?>
        </div>
    </section>
<?php get_footer(); ?>