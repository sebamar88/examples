<!DOCTYPE html>
<html lang="es">
<head>
<!-- Este sitio está Ultilizando Lebianch SEO theme https://lebianch.com/ -->
	

    <meta charset="UTF-8">
    <meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
    <meta name="theme-color" content="#ffffff">
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N7V6WD5');</script>
<!-- End Google Tag Manager -->
	    <?php 
	$header=get_theme_mod('campo_header'); 
	echo $header;
	?>
    <?php wp_head(); ?>
	<style>
	section{
		padding:0;
	}
	html{
		margin-top:0 !important;
	}
	</style>
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 offset-md-4">
                    <div class="row">
                        <div class="col-12 my-3 px-5">
							<a href="https://manutepresta.com">
								<img class="img-fluid" src="https://manutepresta.com/wp-content/uploads/2020/09/Logo-Manu.svg">
							</a>
						</div>
                        <div class="col-12 d-flex flex-column">
                            <h1 class="text-center my-3" style="font-weight: bold;font-family: Roboto, sans-serif;text-align: center;font-size: clamp(1rem, 7.5vw, 1.7rem);">
								Bienvenido!
							</h1>
							<h2 style="font-weight: bold;font-family: Roboto, sans-serif;text-align: center;font-size: clamp(.7rem, 7.5vw, 1.3rem);">
								Indique su estado:
							</h2>
                            <div class="d-flex flex-column" id="marco">
								<button id="enBlanco" class="btn btn-primary d-block mb-2" type="button" style="font-weight: bold;font-family: Roboto, sans-serif;">
									Empleado Registrado
								</button>
								<button id="enNegro" class="btn btn-primary d-block mb-2" type="button" style="font-weight: bold;font-family: Roboto, sans-serif;">
									Empleado en Negro
								</button>
								<button id="desempleado" class="btn btn-primary d-block mb-2" type="button" style="font-weight: bold;font-family: Roboto, sans-serif;">
									Desempleado
								</button>
								<button id="jubilado" class="btn btn-primary d-block mb-2" type="button" style="font-weight: bold;font-family: Roboto, sans-serif;">
									Jubilado/Pensionado
								</button>
								<button id="monotributo" class="btn btn-primary d-block mb-2" type="button" style="font-weight: bold;font-family: Roboto, sans-serif;">
									Monotributista
								</button>
								<button id="autonomo" class="btn btn-primary d-block mb-2" type="button" style="font-weight: bold;font-family: Roboto, sans-serif;">
									Autónomo
								</button>
								<button id="auh" class="btn btn-primary d-block mb-2" type="button" style="font-weight: bold;font-family: Roboto, sans-serif;">
									AUH
								</button>
								<button id="planSocial" class="btn btn-primary d-block mb-2" type="button" style="font-weight: bold;font-family: Roboto, sans-serif;">
									Plan Social
								</button>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
	<script>
	$( document ).ready(function() {
    	console.log( "ready!" );
		$("#enBlanco").bind("click", function () {
			$("#marco").html('<button class="btn btn-primary d-block mb-2 bancarizado" type="button" style="font-weight: bold;font-family: Roboto, sans-serif;">Cobro por Transferencia</button><button class="btn btn-primary d-block mb-2 efectivo" type="button" style="font-weight: bold;font-family: Roboto, sans-serif;">Cobro en Efectivo</button>');
			$(".bancarizado").on("click", function () {
				//location.replace("https://app.manutepresta.com");
				location.replace("https://manutepresta.com/solicitud/");
			})
			$(".efectivo").on("click", function () {
				$("#marco").html('<h3 class="my-3" style="font-weight: bold;font-family: Roboto, sans-serif;text-align: center;font-size: clamp(.7rem, 7.5vw, 1.3rem);">SOLICITUD RECHAZADA > Estimado/a, 📑❌ En Manutepresta otorgamos préstamos únicamente a Empleados Registrados y que cobren su sueldo por banco con CBU, ya que es un requisito enviar los comprobantes de acreditación de sueldo.</h3><a class="btn btn-primary d-block mb-2 efectivo" style="font-weight: bold;font-family: Roboto, sans-serif;" href="https://manutepresta.com/">Volver al Inicio</a>');	
			})
		})
		$("#enNegro").on("click", function () {
				$("#marco").html('<h3 class="my-3" style="font-weight: bold;font-family: Roboto, sans-serif;text-align: center;font-size: clamp(.7rem, 7.5vw, 1.3rem);">SOLICITUD RECHAZADA > Estimado/a, 📑❌ No tenemos planes diseñados para personas que trabajen sin recibo de sueldo y en negro. Únicamente aceptamos personas que trabajen en blanco y cobrando por Banco con mínimo 4 meses de antiguedad 📝.</h3><a class="btn btn-primary d-block mb-2 efectivo" style="font-weight: bold;font-family: Roboto, sans-serif;" href="https://manutepresta.com/">Volver al Inicio</a>');	
		})
		$("#desempleado").on("click", function () {
				$("#marco").html('<h3 class="my-3" style="font-weight: bold;font-family: Roboto, sans-serif;text-align: center;font-size: clamp(.7rem, 7.5vw, 1.3rem);">SOLICITUD RECHAZADA > Estimado/a, 📑❌ No tenemos planes diseñados para personas sin trabajo registrado o haciendo tareas temporales.  Únicamente aceptamos personas que trabajen en blanco y cobrando por Banco con mínimo 4 meses de antiguedad 📝.</h3><a class="btn btn-primary d-block mb-2 efectivo" style="font-weight: bold;font-family: Roboto, sans-serif;" href="https://manutepresta.com/">Volver al Inicio</a>');	
		})
		$("#jubilado").on("click", function () {
				$("#marco").html('<h3 class="my-3" style="font-weight: bold;font-family: Roboto, sans-serif;text-align: center;font-size: clamp(.7rem, 7.5vw, 1.3rem);">SOLICITUD RECHAZADA > Estimado/a, 📑❌ No tenemos planes diseñados para jubilados y/o pensionados. 👩‍🦳👨‍🦳📝. Únicamente aceptamos personas activas que trabajen en blanco y cobrando por Banco con mínimo 4 meses de antiguedad 📝.</h3><a class="btn btn-primary d-block mb-2 efectivo" style="font-weight: bold;font-family: Roboto, sans-serif;" href="https://manutepresta.com/">Volver al Inicio</a>');	
		})
		$("#monotributo").on("click", function () {
				$("#marco").html('<h3 class="my-3" style="font-weight: bold;font-family: Roboto, sans-serif;text-align: center;font-size: clamp(.7rem, 7.5vw, 1.3rem);">SOLICITUD RECHAZADA > Estimado/a, 📑❌ No tenemos planes diseñados para monotributistas. 📝. Únicamente aceptamos personas activas que trabajen en blanco y cobrando por Banco con mínimo 4 meses de antiguedad 📝.</h3><a class="btn btn-primary d-block mb-2 efectivo" style="font-weight: bold;font-family: Roboto, sans-serif;" href="https://manutepresta.com/">Volver al Inicio</a>');	
		})
		$("#autonomo").on("click", function () {
				$("#marco").html('<h3 class="my-3" style="font-weight: bold;font-family: Roboto, sans-serif;text-align: center;font-size: clamp(.7rem, 7.5vw, 1.3rem);">SOLICITUD RECHAZADA > Estimado/a, 📑❌ No tenemos planes diseñados para autónomos. 📝. Únicamente aceptamos personas activas que trabajen en blanco y cobrando por Banco con mínimo 4 meses de antiguedad 📝.</h3><a class="btn btn-primary d-block mb-2 efectivo" style="font-weight: bold;font-family: Roboto, sans-serif;" href="https://manutepresta.com/">Volver al Inicio</a>');	
		})
		$("#auh").on("click", function () {
				$("#marco").html('<h3 class="my-3" style="font-weight: bold;font-family: Roboto, sans-serif;text-align: center;font-size: clamp(.7rem, 7.5vw, 1.3rem);">SOLICITUD RECHAZADA > Estimado/a, 📑❌ No tenemos planes de crédito para AUH o cualquier otro plan social 📝. Únicamente aceptamos personas activas que trabajen en blanco y cobrando por Banco con mínimo 4 meses de antiguedad 📝.</h3><a class="btn btn-primary d-block mb-2 efectivo" style="font-weight: bold;font-family: Roboto, sans-serif;" href="https://manutepresta.com/">Volver al Inicio</a>');	
		})
		$("#planSocial").on("click", function () {
				$("#marco").html('<h3 class="my-3" style="font-weight: bold;font-family: Roboto, sans-serif;text-align: center;font-size: clamp(.7rem, 7.5vw, 1.3rem);">SOLICITUD RECHAZADA > Estimado/a, 📑❌ No tenemos planes de crédito para ningún plan social 📝. Únicamente aceptamos personas activas que trabajen en blanco y cobrando por Banco con mínimo 4 meses de antiguedad 📝.</h3><a class="btn btn-primary d-block mb-2 efectivo" style="font-weight: bold;font-family: Roboto, sans-serif;" href="https://manutepresta.com/">Volver al Inicio</a>');	
		})
		
		
	});
	</script>
</body>

</html>