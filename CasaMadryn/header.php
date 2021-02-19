<!DOCTYPE html>
<html>

<head>
<!-- Este sitio está Ultilizando Lebianch SEO theme https://lebianch.com/ -->
	

    <meta charset="UTF-8">
    <meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
    <meta name="theme-color" content="#ffffff">
	<meta name="robots" content="noindex">

	    <?php 
	$header=get_theme_mod('campo_header'); 
	echo $header;
	?>
    <?php wp_head(); ?>
</head>

<body style="font-family: 'Old Standard TT', serif;color: #716e6b;">
	<section>

		<nav class="navbar navbar-light navbar-expand-md navigation-clean-search py-4" style="border-bottom: 1px solid rgb(143,143,143);">
            <div class="container">
                <h4 class="heading">
					<a href="<?php echo home_url(''); ?>" style="font-size: 14px;">
						<img style="max-width:260px; max-height:30px" class="img-fluid" src="<?php echo site_url(); ?>/wp-content/themes/CasaMadryn/assets/img/CasaMadryn.png" />
					</a>
				</h4>
				<button class="navbar-toggler" data-target="#navcol-1" data-toggle="collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="navbar-toggler-icon"></span>
				</button>
                <div class="collapse navbar-collapse d-md-flex justify-content-md-between justify-content-md-center text-center" id="navcol-1">
                    <ul class="nav navbar-nav d-flex d-xl-flex align-items-center align-items-xl-center" style="text-transform: uppercase;">
                        <li class="nav-item" role="presentation"><a style="color:black !important;" class="nav-link" href="<?php echo home_url(''); ?>">Home</a></li>
						<li class="nav-item" role="presentation"><a style="color:black !important;" class="nav-link" href="<?php echo home_url(''); ?>/#casa">Casa Azul</a></li>
                        <!-- <li class="nav-item" role="presentation">
                            <div class="nav-item dropdown nav-link"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">La casa</a>
                                <div class="dropdown-menu" role="menu">
									<a class="dropdown-item" role="presentation" href="#">First Item</a>
									<a class="dropdown-item" role="presentation" href="#">Second Item</a>
									<a class="dropdown-item" role="presentation" href="#">Third Item</a>
								</div>
                            </div>
                        </li> -->
                        <li class="nav-item" role="presentation"><a style="color:black !important;" class="nav-link" href="<?php echo home_url(''); ?>/#galery">Fotos</a></li>
                        <li class="nav-item" role="presentation"><a style="color:black !important;" class="nav-link" href="<?php echo home_url(''); ?>/#detalles">detalles</a></li>
                        <li class="nav-item" role="presentation"><a style="color:black !important;" class="nav-link" href="<?php echo home_url(''); ?>/#contactar">contacto</a></li>
                    </ul><a class="btn btn-warning" role="button" href="tel:+5493794615461">Tel:&nbsp;+5493794615461</a> <!-- tel:+546457467 -->
					<div><?php echo do_shortcode('[gtranslate]'); ?></div></div>
            </div>
			
			<style>
		.btn_whatsapp {
    position: fixed;
    top: 70%;
	right:0;
    z-index: 9999;
    padding: .5rem;
    background: white;
    right: 0;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.btn_face{
	    position: fixed;
    top: 70%;
	left:0;
    padding: .5rem;
    background: white;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
    z-index: 9999;
}
		</style>
			<!-- https://api.whatsapp.com/send?phone=5492804350467&text=Hola,%20estoy%20interesado%20en%20los%20servicios%20de%20Manutepresta. -->
					<div class="btn_whatsapp shadow">
	<a href="https://api.whatsapp.com/send?phone=5493794615461&text=Hola,%20estoy%20interesado%20en%20hospedarme%20en%20Casa%20Madryn." aria-label="whatsapp" rel="noreferrer" target="_blank">
	     <svg alt="whatsapp" xmlns="https://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
		 <path fill="#00E676" d="M10.7 32.8l.6.3c2.5 1.5 5.3 2.2 8.1 2.2 8.8 0 16-7.2 16-16 0-4.2-1.7-8.3-4.7-11.3s-7-4.7-11.3-4.7c-8.8 0-16 7.2-15.9 16.1 0 3 .9 5.9 2.4 8.4l.4.6-1.6 5.9 6-1.5z"></path>
		 <path fill="#FFF" d="M32.4 6.4C29 2.9 24.3 1 19.5 1 9.3 1 1.1 9.3 1.2 19.4c0 3.2.9 6.3 2.4 9.1L1 38l9.7-2.5c2.7 1.5 5.7 2.2 8.7 2.2 10.1 0 18.3-8.3 18.3-18.4 0-4.9-1.9-9.5-5.3-12.9zM19.5 34.6c-2.7 0-5.4-.7-7.7-2.1l-.6-.3-5.8 1.5L6.9 28l-.4-.6c-4.4-7.1-2.3-16.5 4.9-20.9s16.5-2.3 20.9 4.9 2.3 16.5-4.9 20.9c-2.3 1.5-5.1 2.3-7.9 2.3zm8.8-11.1l-1.1-.5s-1.6-.7-2.6-1.2c-.1 0-.2-.1-.3-.1-.3 0-.5.1-.7.2 0 0-.1.1-1.5 1.7-.1.2-.3.3-.5.3h-.1c-.1 0-.3-.1-.4-.2l-.5-.2c-1.1-.5-2.1-1.1-2.9-1.9-.2-.2-.5-.4-.7-.6-.7-.7-1.4-1.5-1.9-2.4l-.1-.2c-.1-.1-.1-.2-.2-.4 0-.2 0-.4.1-.5 0 0 .4-.5.7-.8.2-.2.3-.5.5-.7.2-.3.3-.7.2-1-.1-.5-1.3-3.2-1.6-3.8-.2-.3-.4-.4-.7-.5h-1.1c-.2 0-.4.1-.6.1l-.1.1c-.2.1-.4.3-.6.4-.2.2-.3.4-.5.6-.7.9-1.1 2-1.1 3.1 0 .8.2 1.6.5 2.3l.1.3c.9 1.9 2.1 3.6 3.7 5.1l.4.4c.3.3.6.5.8.8 2.1 1.8 4.5 3.1 7.2 3.8.3.1.7.1 1 .2h1c.5 0 1.1-.2 1.5-.4.3-.2.5-.2.7-.4l.2-.2c.2-.2.4-.3.6-.5s.4-.4.5-.6c.2-.4.3-.9.4-1.4v-.7s-.1-.1-.3-.2z"></path>
		 </svg>

    </a>
  </div>
  <div class="btn_face shadow">
	

<a href="https://m.me/casaazulpuertomadryn" aria-label="messenger" rel="noreferrer" target="_blank">
<img src="https://casamadryn.com/wp-content/themes/CasaMadryn/assets/img/face.svg" width="39" height="39" /></a>
  </div>
        </nav>
        
    </section>    