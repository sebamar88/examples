<?php get_header('home'); ?>
	<section class="py-5" id="casa">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6"><img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/CasaMadryn/assets/img/casa%20madrin%20imagen%202.png"></div>
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center"><span class="text-uppercase" style="color: #c69145;">Descripcion general de Casa Azul Madryn</span>
                    <h2 style="margin: 1rem 0 0;font-weight: 600;">Sobre Casa Madryn</h2><span style="color: rgba(198, 145, 69, 0.8);font-style: italic;margin: 1rem 0;">Alojamiento en zona céntrica de Puerto Madryn, lugar tranquilo y cerca de todo</span>
                    <p>Amplia propiedad luminosa con capacidad de hasta 8 personas en alquiler por día, semana ó mes en Puerto Madryn. Atendemos todo el año. Turistas, viajes de negocios, eventos, fiestas familiares. Cuente con un espacio de calidad y tranquilidad
                        para su viaje o reunión. Consulte fecha y precio ahora en nuestro Whatsapp o formulario de contacto.</p>
						<a class="btn btn-warning text-uppercase" href="#contactar">Contactar</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4" id="detalles">
        <div class="container py-5" style="background-color: #C69145;z-index: 1;position: relative;">
            <div class="row" id="caract">
                <div class="col-6 col-md-3 py-3 py-md-0">
                    <h2 class="text-center" style="color: rgb(255,255,255);font-weight: 600;">8<br><span><strong>Huespedes</strong><br></span></h2>
                </div>
                <div class="col-6 col-md-3 py-3 py-md-0 border-l-lb">
                    <h2 class="text-center" style="color: rgb(255,255,255);font-weight: 600;">2<br><span><strong>Habitaciones</strong><br></span></h2>
                </div>
                <div class="col-6 col-md-3 py-3 py-md-0 border-l-lb">
                    <h2 class="text-center" style="color: rgb(255,255,255);font-weight: 600;">8<br><span><strong>Camas</strong><br></span></h2>
                </div>
                <div class="col-6 col-md-3 py-3 py-md-0 border-l-lb">
                    <h2 class="text-center" style="color: rgb(249,249,249);font-weight: 600;">1<br><span><strong>Baño</strong><br></span></h2>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: -80px;background-color: #F9F6F1;padding: 115px 0px 150px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center py-4"><span class="text-uppercase" style="color: #c69145;">Nuestros Beneficios</span>
                    <h2 style="font-weight: bold;">Caracteristicas de la Propiedad</h2>
                </div>
            </div>
        </div>
    </section>
    <section style="position: relative;margin-top: -125px;z-index: 1;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-4 text-center d-flex flex-column justify-content-center align-items-center py-5" style="background: white;"><i class="fa fa-thermometer-empty" style="font-size: 78px;"></i>
                            <h2 style="font-size: 32px;">Aire Acondicionado</h2>
                            <p>Contamos con climatización <br>en todos los ambientes</p>
                        </div>
                        <div class="col-12 col-md-4 text-center d-flex flex-column justify-content-center align-items-center py-5 bg-cl"><i class="fa fa-spoon" style="font-size: 78px;"></i>
                            <h2>Cocina completa</h2>
                            <p>Contamos con todo lo que necesites<br>para disfrutar de una rica comida</p>
                        </div>
                        <div class="col-12 col-md-4 text-center d-flex flex-column justify-content-center align-items-center py-5" style="background: white;"><i class="fa fa-wifi" style="font-size: 78px;"></i>
                            <h2>Zona Wi-Fi</h2>
                            <p>Contamos con servicio de Wi-Fi<br>para que siempre estes conectado</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/CasaMadryn/assets/img/20191230_174530.jpg);background-position: center;background-size: cover;background-repeat: no-repeat;position: relative;margin: 3rem 0 0;">
        <div class="bg-op"></div>
        <div class="container">
            <div class="row" style="padding: 4rem 0;">
                <div class="col text-center d-flex flex-column justify-content-center align-items-center" style="padding: 4rem 0;"><div style="border:1px solid white;margin-bottom:1rem; padding:1rem 0;">
    <a style="cursor:pointer; padding:2rem;" data-toggle="modal" data-target="#exampleModal">
        <i style="color: #C69145; font-size:5rem" class="fa fa-play"></i>
    </a>
</div>    


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/s3rb7sC-eLQ" id="iframeVideo"></iframe>
                    </div>
            </div>
            
          </div>
        </div>
      </div>

    <script type="text/javascript">
      //Url del video a reproducir
      var videoSrc='https://www.youtube.com/embed/j_Zy4MxrtMQ';

      //Al abrir la ventana modal, le agregué autoplay igual a 1, para que se reproduzca
      //automáticamente, en caso de que no se requiera la autoreproducción, se quita 
      //esa parte "?autoplay=1".
      $('#exampleModal').on('show.bs.modal', function () {  
        var iframe=$('#iframeVideo');
        iframe.attr("src", videoSrc+"?autoplay=1");
      });

      //Al cerrar la ventana modal, solamente reasignamos el video al atributo del iframe
      //y eso ocasiona que se detenga la reproducción del archivo,
      //aunque también podríamos haber dejado el valor src en null. :)
      $('#exampleModal').on('hidden.bs.modal', function (e) {
        
        var iframe=$('#iframeVideo');
        iframe.attr("src", videoSrc);

      });
    </script>
                    <h2 class="titulo-grande">Realice un video-recorrido<br>por Casa Azul Madryn</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background-color: #F9F6F1;">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-12 text-center pb-3"><span class="text-uppercase" style="color: #c69145;">Nuestros testimonios</span>
                    <h2>Lo que ellos dicen</h2>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-3 text-center mx-auto p-3" style="background-color: #ffffff;">
                            <div class="row">
                                <div class="col-12">
                                    <p style="border-bottom: 1px solid rgb(235,194,119);">Todo genial! Emanuel respondió a todas mis dudas y la casa super cómoda y fuimos seis<br></p>
                                </div>
                                <div class="col-12">
                                    <div class="row no-gutters">
                                        <div class="col-3 d-flex justify-content-xl-center align-items-center"><img class="testi-img" src="<?php echo site_url(); ?>/wp-content/themes/CasaMadryn/assets/img/0bd687fc-0d89-45ea-90b9-36ff0ab5b875.jpg" style="width: 56px;height: 56px;object-fit: cover;"></div>
                                        <div class="col-9 text-left">
                                            <h3 class="text-left" style="font-size: 24px;">Florencia</h3><span style="color: rgb(101,104,108);">Enero 2020</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 text-center mx-auto p-3" style="background-color: #ffffff;">
                            <div class="row">
                                <div class="col-12">
                                    <p style="border-bottom: 1px solid rgb(235,194,119);">Casa amplia, excelente la limpieza y todos los adicionales que los anfitriones incluyen.<br></p>
                                </div>
                                <div class="col-12">
                                    <div class="row no-gutters">
                                        <div class="col-3 d-flex justify-content-xl-center align-items-center"><img class="testi-img" src="<?php echo site_url(); ?>/wp-content/themes/CasaMadryn/assets/img/70cd4547-c550-4318-ae62-693393832a52.jpg" style="width: 56px;object-fit: cover;height: 56px;"></div>
                                        <div class="col-9 text-left">
                                            <h3 class="text-left" style="font-size: 24px;">Carla</h3><span style="color: rgb(101,104,108);">Febrero 2020</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 text-center mx-auto p-3" style="background-color: #ffffff;">
                            <div class="row">
                                <div class="col-12">
                                    <p style="border-bottom: 1px solid rgb(235,194,119);">Buena ubicación, excelente atencion. Casa muy bien equipada.<br></p>
                                </div>
                                <div class="col-12">
                                    <div class="row no-gutters">
                                        <div class="col-3 d-flex justify-content-xl-center align-items-center"><img class="testi-img" src="<?php echo site_url(); ?>/wp-content/themes/CasaMadryn/assets/img/6268ca08-e154-484e-a65a-a4b93296dcdd.jpg" style="width: 56px;height: 56px;object-fit: cover;"></div>
                                        <div class="col-9 text-left">
                                            <h3 class="text-left" style="font-size: 24px;">Daniel Alejandro</h3><span style="color: rgb(101,104,108);">Enero 2020</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row no-gutters fondo1 py-5">
                <div class="col-12 col-md-6"></div>
                <div class="col-12 col-md-6 d-inline-flex flex-column justify-content-center align-items-center align-items-md-start px-3"><span class="text-uppercase" style="color: #c69145;">características impresionantes</span>
                    <h2 style="margin-top: 1rem;margin-bottom: 1rem;">Explore las comodidades de Casa Madryn</h2>
                    <p style="max-width:500px">El corazón de la casa ¡su living comedor! es un espacio con TV Led 42” Internet Wi-Fi Netflix Youtube perfecto para pasar tiempo en familia. Siéntate en el sofá y deja que el sol entre por el ventanal mientras lees un libro o navegas
                        por internet y los niños juegan a los divertidos juegos con el TV Android especial para instalar juegos. Si el tiempo no acompaña, podrán estar en casa viendo una película en la tele de la sala o habitación ¡lo tienes todo! El
                        salón se encuentra en la planta principal, separado de la cocina por un desayunador. A la hora de dormir, podrás descansar de ensueño, cómodos sommiers doble pillow para que tus noches sean de las más confortables</p><a class="btn btn-warning text-uppercase"
                        role="button" href="#contactar">SOLICITE UNA RESERVA</a></div>
            </div>
            <div class="row no-gutters fondo2 py-5">
                <div class="col-12 col-md-6 d-inline-flex flex-column justify-content-center align-items-center align-items-md-end px-3"><span class="text-uppercase" style="color: #c69145;">Calidad interior</span>
                    <h2 style="margin-top: 1rem;margin-bottom: 1rem;">Lujoso diseño de Interiores</h2>
                    <p style="max-width:500px">Capacidad para 8 personas, con sommiers de plaza y media (110x190cm) doble pillow súper confortables y en habitación principal cama King Size (200x200cm). Mobiliario completo de muebles en algarrobo laqueado, sillas tapizadas en chenille.
                        Luces Led. 2 TV Led 43” ambos con TV Box Android con Netflix e internet de 20Mb con 2 routers en la propiedad cobertura total de Wi-Fi. Entrada vehicular resguardada por cámara de vigilancia y portón con cierre a control remoto.
                        Lavarropas, Microondas, Cocina con extractor, Heladera con Freezer, Vajilla completa y equipamiento. Alarma monitoreada. Circuito cerrado de cámaras con grabación en zona exterior. Disponibilidad del anfitrión 24/7 por msje de
                        Whatsapp. Aproveche y consulte ahora disponibilidad y precio a nuestro Whatsapp haciendo click en el botón verde.</p><a class="btn btn-warning text-uppercase" role="button" href="#contactar">SOLICITA UNA RESERVA</a></div>
                <div class="col-6"></div>
            </div>
        </div>
    </section>
    <section class="py-5" id="galery">
        <div class="container-fluid">
            <div class="text-center"><span class="text-uppercase text-center" style="color: #c69145;">Galeria de imagenes</span>
                <h2 class="text-center" style="font-weight: 600;">Conoce Casa Azul Madryn</h2>
            </div>
            
			<!-- Gallery -->

  <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6" data-toggle="modal" data-target="#modal">
      <a href="#lightbox" data-slide-to="0"><img src="<?php echo site_url(); ?>/wp-content/themes/CasaMadryn/assets/img/galeria/1.png" class="img-thumbnail my-3 img-fluid"></a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6" data-toggle="modal" data-target="#modal">
      <a href="#lightbox" data-slide-to="1"><img src="<?php echo site_url(); ?>/wp-content/themes/CasaMadryn/assets/img/galeria/2.png" class="img-thumbnail my-3 img-fluid"></a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6" data-toggle="modal" data-target="#modal">
      <a href="#lightbox" data-slide-to="2"><img src="<?php echo site_url(); ?>/wp-content/themes/CasaMadryn/assets/img/galeria/3.png" class="img-thumbnail my-3 img-fluid"></a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6" data-toggle="modal" data-target="#modal">
      <a href="#lightbox" data-slide-to="3"><img src="<?php echo site_url(); ?>/wp-content/themes/CasaMadryn/assets/img/galeria/4.png" class="img-thumbnail my-3 img-fluid"></a>
    </div>
      
  </div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="5000" data-keyboard="true">
					<ol class="carousel-indicators">
						<li data-target="#lightbox" data-slide-to="0"></li>
						<li data-target="#lightbox" data-slide-to="1"></li>
						<li data-target="#lightbox" data-slide-to="2"></li>
						<li data-target="#lightbox" data-slide-to="3"></li>
						
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active"><img src="<?php echo site_url(); ?>/wp-content/themes/CasaMadryn/assets/img/galeria/1.png" class="w-100"
							 alt=""></div>
						<div class="carousel-item"><img src="<?php echo site_url(); ?>/wp-content/themes/CasaMadryn/assets/img/galeria/2.png" class="w-100"
							 alt=""></div>
						<div class="carousel-item"><img src="<?php echo site_url(); ?>/wp-content/themes/CasaMadryn/assets/img/galeria/3.png" class="w-100"
							 alt=""></div>
						<div class="carousel-item"><img src="<?php echo site_url(); ?>/wp-content/themes/CasaMadryn/assets/img/galeria/4.png" class="w-100"
							 alt=""></div>
						
					</div>
					<a class="carousel-control-prev" href="#lightbox" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
					<a class="carousel-control-next" href="#lightbox" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
			
			
            
        </div>
    </section>
	<style>
	.contact-clean{
		padding: 20px 0 0 0 
	}
	</style>
	<section style="background-color: #F9F6F1;" id="contactar">
		<div class="container contact-clean" style="background-color: #F9F6F1;" >
        <div class="row" style="max-width:100%">
            <div class="col-12 text-center py-4"><span class="text-uppercase" style="color: #c69145;">Contacto</span>
                <h2 style="font-weight: 600;">Reserva con Nosotros</h2>
            </div>
            
        </div>
    </div>
	<?php echo do_shortcode('[contact-form-7 id="4" title="Formulario de contacto 1"]'); ?>
	</section>
<?php get_footer(); ?>