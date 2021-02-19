<!DOCTYPE html>
<html style="font-family: 'Roboto Slab', serif;" lang="es">
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
</head>
<body id="page-top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7V6WD5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <nav <?php if ( is_user_logged_in() ) { echo 'style="top:32px"';} ?> class="navbar navbar-light navbar-expand-lg fixed-top bg-white" id="mainNav">
        <div class="container">
		<?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

if ( has_custom_logo() ) {
		echo '<a style="max-width:181px" href="'.site_url().'" aria-label="'.get_bloginfo( 'name' ).'" >';
        echo '<img style="max-height:75px; padding:10px 0; width:100%" load="lazy" class="img-fluid" src="' . esc_url( $logo['0'] ) . '" aria-label="'. get_bloginfo( 'name' )  .'" alt="' . get_bloginfo( 'description' ) . '">';

} else {
	echo '<a href="'.site_url().'" aria-label="'.get_bloginfo( 'name' ).'" >';
	echo '<img style="border-radius:10px" load="lazy" class="img-fluid" src="' .get_theme_file_uri() . '/assets/img/logo-250x100.jpg" aria-label="'. get_bloginfo( 'name' )  .'" alt="' . get_bloginfo( 'description' ) . '">';

}
             ?>
		</a>
		
                <?php get_template_part('template-parts/menu/menu') ?>
            
        </div>
		<style>
		.btn_whatsapp {
    position: fixed;
    top: 70%;
    z-index: 9999;
    padding: .5rem;
    background: white;
    right: 0;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
			.btn_app {
    position: fixed;
    top: 6%;
    z-index: 9999;
    padding: .5rem;
    background: #072146;
    right: 0;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.btn_face{
	    position: fixed;
    top: 70%;
    padding: .5rem;
    background: white;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
    z-index: 9999;
}
.navbar-light .navbar-toggler-icon{
	background-image:url('https://manutepresta.com/wp-content/themes/Lebianch_Manutepresta/assets/img/menu.svg') !important;
}
		</style>
	
	<div class="btn_app shadow d-inline-flex align-items-center">
	
<?php 
//<a href="https://app.manutepresta.com/" aria-label="app" rel="noreferrer" target="_blank" style="color:white; font-weight:600; text-decoration:none">
echo 	'<a href="https://app.manutepresta.com/login/" aria-label="app" rel="noreferrer" target="_blank" style="color:white; font-weight:600; text-decoration:none">
			Ingresar!
		</a>'; ?>
  </div>
	
		<div class="btn_whatsapp shadow">
	<a href="https://api.whatsapp.com/send?phone=5492804350467&text=Hola,%20estoy%20interesado%20en%20los%20servicios%20de%20Manutepresta." aria-label="whatsapp" rel="noreferrer" target="_blank">
	     <svg alt="whatsapp" xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
		 <path fill="#00E676" d="M10.7 32.8l.6.3c2.5 1.5 5.3 2.2 8.1 2.2 8.8 0 16-7.2 16-16 0-4.2-1.7-8.3-4.7-11.3s-7-4.7-11.3-4.7c-8.8 0-16 7.2-15.9 16.1 0 3 .9 5.9 2.4 8.4l.4.6-1.6 5.9 6-1.5z"></path>
		 <path fill="#FFF" d="M32.4 6.4C29 2.9 24.3 1 19.5 1 9.3 1 1.1 9.3 1.2 19.4c0 3.2.9 6.3 2.4 9.1L1 38l9.7-2.5c2.7 1.5 5.7 2.2 8.7 2.2 10.1 0 18.3-8.3 18.3-18.4 0-4.9-1.9-9.5-5.3-12.9zM19.5 34.6c-2.7 0-5.4-.7-7.7-2.1l-.6-.3-5.8 1.5L6.9 28l-.4-.6c-4.4-7.1-2.3-16.5 4.9-20.9s16.5-2.3 20.9 4.9 2.3 16.5-4.9 20.9c-2.3 1.5-5.1 2.3-7.9 2.3zm8.8-11.1l-1.1-.5s-1.6-.7-2.6-1.2c-.1 0-.2-.1-.3-.1-.3 0-.5.1-.7.2 0 0-.1.1-1.5 1.7-.1.2-.3.3-.5.3h-.1c-.1 0-.3-.1-.4-.2l-.5-.2c-1.1-.5-2.1-1.1-2.9-1.9-.2-.2-.5-.4-.7-.6-.7-.7-1.4-1.5-1.9-2.4l-.1-.2c-.1-.1-.1-.2-.2-.4 0-.2 0-.4.1-.5 0 0 .4-.5.7-.8.2-.2.3-.5.5-.7.2-.3.3-.7.2-1-.1-.5-1.3-3.2-1.6-3.8-.2-.3-.4-.4-.7-.5h-1.1c-.2 0-.4.1-.6.1l-.1.1c-.2.1-.4.3-.6.4-.2.2-.3.4-.5.6-.7.9-1.1 2-1.1 3.1 0 .8.2 1.6.5 2.3l.1.3c.9 1.9 2.1 3.6 3.7 5.1l.4.4c.3.3.6.5.8.8 2.1 1.8 4.5 3.1 7.2 3.8.3.1.7.1 1 .2h1c.5 0 1.1-.2 1.5-.4.3-.2.5-.2.7-.4l.2-.2c.2-.2.4-.3.6-.5s.4-.4.5-.6c.2-.4.3-.9.4-1.4v-.7s-.1-.1-.3-.2z"></path>
		 </svg>

    </a>
  </div>
  <div class="btn_face shadow">
	

<a href="https://m.me/manutepresta" aria-label="messenger" rel="noreferrer" target="_blank">
<img src="https://manutepresta.com/wp-content/themes/Lebianch_Manutepresta/assets/img/face.svg" width="39" height="39" /></a>
  </div>
  
    </nav>
    