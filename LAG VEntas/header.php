<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LAG ventas</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
	<?php wp_head(); ?>
</head>

<body>
    <section id="topbar" style="background-color: #274287;">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-3 offset-md-2">
                    <a href="#contactar">
                        <p class="py-2" style="margin-bottom: 0px;"><i class="fa fa-map-marker"></i>Lavalle 415 - Oran(Salta)</p>
                    </a>
                </div>
                <div class="col-12 col-md-3">
                    <a href="mailto:info@lagventas.com.ar">
                        <p class="py-2" style="margin-bottom: 0px;"><i class="fa fa-envelope"></i>info@lagventas.com.ar</p>
                    </a>
                </div>
                <div class="col-12 col-md-2">
                    <a href="tel:5493878622461">
                        <p class="py-2" style="margin-bottom: 0px;"><i class="fa fa-phone"></i>+5493878622461</p>
                    </a>
                </div>
				<div class="col-12 col-md-2">
                    <a href="tel:5493878229178">
                        <p class="py-2" style="margin-bottom: 0px;"><i class="fa fa-phone"></i>+5493878229178</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean">
        <div class="container">
			<?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'login_head' );

if ( has_custom_logo() ) {
		echo '<a href="'.site_url().'" aria-label="'.get_bloginfo( 'name' ).'" >';
        echo '<img style="border-radius:10px; width:180px; height: 65px" class="img-fluid" src="' . esc_url( $logo['0'] ) . '" aria-label="'. get_bloginfo( 'name' )  .'" alt="' . get_bloginfo( 'name' ) . '">';

} else {
	echo '<a href="'.site_url().'" aria-label="'.get_bloginfo( 'name' ).'" >';
	echo '<img style="border-radius:10px" class="img-fluid" src="' .get_theme_file_uri() . '/assets/img/logo-250x100.jpg" aria-label="'. get_bloginfo( 'name' )  .'" alt="' . get_bloginfo( 'name' ) . '">';

}
             ?>
			</a>
			<button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="navbar-toggler-icon"></span>
			</button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo home_url(''); ?>">Inicio</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo home_url(''); ?>/#conocenos">¿Quienes somos?</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo home_url(''); ?>/#productos">Productos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo home_url('blog'); ?>">Blog</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo home_url(''); ?>/#contactar">Contacto</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo home_url(''); ?>/#contactar">Ubicación</a></li>
                </ul>
        </div>
        </div>
    </nav>