<?php get_header(); ?>
<header id="home" class="masthead" style="background-image:url('<?php the_field('imagen_fondo_hero'); ?>');">
	<div style="position:relative; z-index:1" class="container">
		<div class="intro-text">
			<div class="intro-lead-in d-none d-md-block"><span><?php the_field('landing_sub_title');?></span></div>
			<div class="intro-heading d-none d-md-block text-uppercase"><span><?php the_field('landing_title');?></span></div>
			<div class="intro-lead-in d-block d-md-none"><span><?php the_field('landing_sub_title_mobile');?></span></div>

<a id="btnprestamo"class="btn btn-success btn-xl text-uppercase js-scroll-trigger" role="button" href="<?php $boton=get_field('landing_boton'); echo $boton['url']; ?>"><?php echo $boton['title']; ?></a>

<a id="btninvertir"class="btn btn-primary btn-xl text-uppercase js-scroll-trigger my-3 my-md-0" role="button" href="<?php $boton3=get_field('invertir_boton'); echo $boton3['url']; ?>"><?php echo $boton3['title']; ?></a>

</div>
	</div>
</header>
<section id="prestamos">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center my-4">
				<h2 class="text-uppercase section-heading">OBTENÉ TODOS ESTOS BENEFICIOS:</h2>
			</div>
		</div>
		<div class="row text-center">
			<?php 
			while ( have_rows('beneficios_group') ) : the_row(); ?>
			<div class="col-md-4"><span><img alt="<?php the_sub_field('titulo_servicio_1'); ?>" class="img-fluid" src="https://manutepresta.com/wp-content/uploads/2020/07/PromoAmigo.png" style="max-width: 50px;" /></span>
				<h4 style="font-size:1rem" class="service-heading"><?php the_sub_field('titulo_servicio_1'); ?></h4>
				<p class="text-muted"><?php the_sub_field('texto_servicio_1'); ?> </p>
			</div>
			<div class="col-md-4"><span><img alt="<?php the_sub_field('titulo_servicio_2'); ?>" class="img-fluid" src="https://manutepresta.com/wp-content/uploads/2020/07/CuotaComodin.png" style="max-width: 50px;" /></span>
				<h4 style="font-size:1rem" class="service-heading"><?php the_sub_field('titulo_servicio_2'); ?></h4>
				<p class="text-muted"><?php the_sub_field('texto_servicio_2'); ?> </p>
			</div>
			<div class="col-md-4"><span><img alt="<?php the_sub_field('titulo_servicio_3'); ?>" class="img-fluid" src="https://manutepresta.com/wp-content/uploads/2020/07/Renovacion.png" style="max-width: 50px;" /></span>
				<h4 style="font-size:1rem" class="service-heading"><?php the_sub_field('titulo_servicio_3'); ?></h4>
				<p class="text-muted"><?php the_sub_field('texto_servicio_3'); ?> </p>
			</div>
			<div class="col-md-4"><span><img alt="<?php the_sub_field('titulo_servicio_4'); ?>" class="img-fluid" src="https://manutepresta.com/wp-content/uploads/2020/07/Cancelacion.png" style="max-width: 50px;" /></span>
				<h4 style="font-size:1rem" class="service-heading"><?php the_sub_field('titulo_servicio_4'); ?></h4>
				<p class="text-muted"><?php the_sub_field('texto_servicio_4'); ?> </p>
			</div>
			<div class="col-md-4"><span><img alt="<?php the_sub_field('titulo_servicio_5'); ?>" class="img-fluid" src="https://manutepresta.com/wp-content/uploads/2020/07/DosVencimientos.png" style="max-width: 50px;" /></span>
				<h4 style="font-size:1rem" class="service-heading"><?php the_sub_field('titulo_servicio_5'); ?></h4>
				<p class="text-muted"><?php the_sub_field('texto_servicio_5'); ?> </p>
			</div>
			<div class="col-md-4"><span><img alt="<?php the_sub_field('titulo_servicio_6'); ?>" class="img-fluid" src="https://manutepresta.com/wp-content/uploads/2020/07/Requisitos.png" style="max-width: 50px;" /></span>
				<h4 style="font-size:1rem" class="service-heading"><?php the_sub_field('titulo_servicio_6'); ?></h4>
				<p class="text-muted"><?php the_sub_field('texto_servicio_6'); ?> </p>
			</div>


			<?php endwhile;
			?>
		</div>	







	</div>

</section>
<section id="invertir" class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="text-uppercase section-heading"><?php the_field('titulo_invertir'); ?></h2>
				<h3 class="section-subheading text-muted"><?php the_field('subtitulo_invertir'); ?></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<h5 style="font-weight:400" class="rounded-top p-3 my-0 border text-capitalize text-left"><span style="margin-right:10px"><img alt="cono" class="img-fluid" src="https://manutepresta.com/wp-content/uploads/2020/07/cono.png" style="max-width: 50px;" /></span>¿Sentís que te pagan poco en tu banco a plazo fijo?</h5>
				<h5 style="font-weight:400" class="p-3 my-0 border text-capitalize text-left"><span style="margin-right:10px"><img class="img-fluid" src="https://manutepresta.com/wp-content/uploads/2020/07/chanchito.png" style="max-width: 40px;" /></span>¿ La inflación se está consumiendo tus ahorros en pesos?</h5>
				<h5 style="font-weight:400" class="p-3 my-0 border text-capitalize text-left"><span style="margin-right:10px"><img class="img-fluid" src="https://manutepresta.com/wp-content/uploads/2020/07/devaluacion.png" style="max-width: 40px;" /></span>¿Tenés dólares... Pero todo aumenta e inclusive sube en "moneda fuerte"?</h5>
				<h5 style="font-weight:400" class="rounded-bottom p-3 my-0 border text-capitalize text-left"><span style="margin-right:10px"><img alt="creciento" class="img-fluid" src="https://manutepresta.com/wp-content/uploads/2020/07/Crecimiento.png" style="max-width: 40px;" /></span>¿Querés tener una renta fija mensual asegurada?</h5>
				<h3 class="mt-4"><u>Escribí ahora haciendo click en Quiero Invertir y consultá por las alternativas que tenemos para tu libertad financiera.</u></h3>
			
				<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger my-4" role="button" href="<?php $boton2=get_field('boton_invertir'); echo $boton2['url']; ?>"><?php echo $boton2['title']; ?></a>
				<p style="font-size:.7rem"><span style="color:red">1-</span>En la comunicación le brindaremos objetivos claros de rendimientos mensuales. Una decisión que le puede cambiar la vida para bien, disfrutando de un rendimiento mensual por encima de cualquier pronóstico. Sea parte de la evolución digital.
				</p>
			</div>  
		</div>
	</div>
</section>
<section id="faq" class="bg-white">
<div class="container my-4">
    

    <div class="panel-group" id="accordion">
        <div class="col-lg-12 text-center">
				<h2 class="text-uppercase section-heading">Preguntas Frecuentes</h2>
				<h3 class="section-subheading text-muted">Estas son algunas de las preguntas más frecuentes</h3>
		</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">¿Que es Manutepresta.com?</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse show in">
                <div class="panel-body">
                    Es una empresa especializada en el otorgamiento de créditos personales por Internet. Brinda soluciones rápidas, sencillas y al alcance de tu mano para mejorar tu calidad de vida. 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">¿En qué provincias están presentes?</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="panel-body">
                    Operamos 100% online en toda la Argentina. 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">¿Cómo solicito el préstamo?</a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="panel-body">
                    Solicitar el préstamo en ManuTePresta en el Acto es muy sencillo:<br>

					1) Completa el siguiente formulario <a href="https://manutepresta.com/#contact">www.manutepresta.com</a><br>
					2) Se verifican tus datos y te contactamos<br>
					3) Adjuntas la documentación que te solicitemos.<br>

					Una vez que realices estos tres pasos nos pondremos nuevamente en contacto con vos para completar la evaluación e informarte el monto aprobado!.<br>

                </div>
            </div>
        </div>
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsesix">¿Cuáles son los requisitos?</a>
                </h4>
            </div>
            <div id="collapsesix" class="panel-collapse collapse">
                <div class="panel-body">
                    Los requisitos para acceder al préstamo son:<br>

					✓ Estar empleado en relación de dependencia (con una antigüedad laboral mayor a 6 meses).<br>
					✓ Tener una cuenta bancaria "sueldo" donde se acredite el pago de tu empleador.<br>
					✓ Contar con recibo de sueldo.<br>
					✓ En caso de no tener recibo, podes elegir un garante para tu crédito que cumple el requisito.<br>


                </div>
            </div>
        </div>
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsseven">¿Hasta qué monto puedo solicitar el préstamo?</a>
                </h4>
            </div>
            <div id="collapsseven" class="panel-collapse collapse">
                <div class="panel-body">
                    Los montos máximos son de hasta $40.000 pesos o 2 veces tu recibo de sueldo.

                </div>
            </div>
        </div>
	</div>
	<div class="col-lg-12 text-center">
				<a class="btn btn-success btn-xl text-uppercase js-scroll-trigger my-4" role="button" href="<?php echo home_url('preguntas-frecuentes') ?>">Ver más</a>
		</div>
	

</div>

<style>
::selection {
    background: #28a7456e;
    text-shadow: none;
}
	a{
		color: #072146
	}
	a:hover{
		color: #59B200
	}
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'FontAwesome';
        content: "\f067"; 
        float: right;
        color: #59B200;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        
        color: #072146;
    }
</style>
</section>
<section class="bg-light" id="contacto">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center mb-4"><h3 class="text-uppercase section-heading">Nuestros medios de contacto</h3></div>
			<div class="col-12 col-md-4 text-center my-3 my-md-0">
				<a href="tel:+541153682223" aria-label="telefono fijo">
					<img src="https://manutepresta.com/wp-content/themes/Lebianch_Manutepresta/assets/img/fijo.svg" alt="mail-img" class="img-fluid">
				</a>
			</div>
			<div class="col-12 col-md-4 text-center my-3 my-md-0">
				<a href="https://api.whatsapp.com/send?phone=5492804350467&text=Hola,%20estoy%20interesado%20en%20los%20servicios%20de%20Manutepresta." aria-label="whatsapp" rel="noreferrer" target="_blank">
					<img src="https://manutepresta.com/wp-content/themes/Lebianch_Manutepresta/assets/img/whatsapp.svg" alt="mail-img" class="img-fluid">
				</a>
			</div>
			<div class="col-12 col-md-4 text-center my-3 my-md-0">
				<img src="https://manutepresta.com/wp-content/themes/Lebianch_Manutepresta/assets/img/mail.svg" alt="mail-img" class="img-fluid">
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>