<?php 

if ( !defined( 'ABSPATH' ) ) exit;

//////////////////////////////////////////////////////////////////////////////////////////////////////
// Crear pagina politica de privacidad
if (isset($_GET['activated']) && is_admin()){
  
    $new_page_title = 'Políticas de Privacidad';
    $new_page_content = 'Políticas de Privacidad

El presente Política de Privacidad establece los términos en que '.site_url().' usa y protege la información que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo, esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.

Información que es recogida

Nuestro sitio web podrá recoger información personal, por ejemplo: Nombre, información de contacto como su dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para enviar alguna oferta o promoción en caso de que se haya solicitado.

Uso de la información recogida

Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios. Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento.

'.site_url().' está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.

Cookies

Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener información respecto al tráfico web, y también facilita las futuras visitas a una web recurrente. Otra función que tienen las cookies es que con ellas las webs pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.

Nuestro sitio web emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia. Esta información es empleada únicamente para análisis estadístico y después la información se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo, las cookies ayudan a proporcionar un mejor servicio de los sitios web, estás no dan acceso a información de su ordenador ni de usted, a menos de que usted así lo quiera y la proporcione directamente, visitas a una web. Usted puede aceptar o negar el uso de cookies, sin embargo, la mayoría de navegadores aceptan cookies automáticamente pues sirve para tener un mejor servicio web. También usted puede cambiar la configuración de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.

Enlaces a Terceros

Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.

Control de su información personal

En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web. Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información por correo electrónico. En caso de que haya marcado la opción de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento.

Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.

'.site_url().' Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.';
	
	
	

	

    $new_page_template = 'politicas.php'; //ex. template-custom.php. Leave blank if you don't want a custom page template.
  
    //don't change the code bellow, unless you know what you're doing
  
    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
        'post_type' => 'page',
        'post_title' => $new_page_title,
        'post_content' => $new_page_content,
        'post_status' => 'publish',
        'post_author' => 1,
    );
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
  
}
// Crear pagina politica de cookie
if (isset($_GET['activated']) && is_admin()){
  
    $new_page_title2 = 'Política de cookies';
    $new_page_content2 = 'Política de cookies

Si quieres saber más sobre el uso de cookies que realiza este sitio web '.site_url().', estás en el lugar indicado. A continuación, vamos a explicarte qué son exactamente las cookies; qué tipo de cookies utilizamos y para qué; y cómo puedes ejercer tu derecho para configurar tu navegador y desestimar el uso de cualquiera de ellas.

Eso sí, debes saber, que si decides no utilizar algunas cookies, este sitio web puede no funcionar perfectamente, afectando a tu experiencia de usuario.

QUÉ ES UNA COOKIE

Una cookie es un fichero que se descarga en tu ordenador al acceder a determinadas páginas web o blogs.

Las cookies permiten a esa página, entre otras cosas, almacenar y recuperar información sobre tus hábitos de navegación o de tu equipo, y dependiendo de la información que contengan y de la forma en que utilices tu equipo, pueden utilizarse para reconocerte.

El navegador del usuario memoriza cookies en el disco duro solamente durante la sesión actual ocupando un espacio de memoria mínimo y no perjudicando al ordenador. Las cookies no contienen ninguna clase de información personal específica, y la mayoría de las mismas se borran del disco duro al finalizar la sesión de navegador (las denominadas cookies de sesión).

La mayoría de los navegadores aceptan como estándar a las cookies y, con independencia de las mismas, permiten o impiden en los ajustes de seguridad las cookies temporales o memorizadas.

Las cookies se asocian al navegador, no a la persona, por lo que no suelen almacenar información sensible sobre ti como tarjetas de crédito o datos bancarios, fotografías o información personal, etc. Los datos que guardan son de carácter técnico, estadísticos, preferencias personales, personalización de contenidos, etc.

ACEPTACIÓN DE LAS COOKIES: NORMATIVA VIGENTE

Al acceder a este sitio web, y de acuerdo a la normativa vigente en materia de protección de datos, te informamos del uso de cookies, dándote la opción de aceptarlas expresamente y de acceder a más información a través de esta Política de Cookies.

Debes saber que, en el caso de continuar navegando, estarás prestando tu consentimiento para el empleo de estas cookies. Pero, en cualquier momento, podrás cambiar de opinión y bloquear su utilización a través de tu navegador.

Para tu total tranquilidad, este sitio web cumple con lo estipulado en la normativa vigente en relación con el uso de las cookies y tus datos personales:

El reglamento LSSI-CE (Ley de la sociedad de la información y del comercio electrónico)

El RGPD (Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo de 27 de abril de 2016 relativo a la protección de las personas físicas), que unifica la regulación del tratamiento de los datos personales en los países de la UE.

Esta Política de Cookies podría modificarse en cualquier momento para adaptarse a novedades normativas o cambios en nuestras actividades, siendo vigente la que en cada momento se encuentre publicada en la web.

TIPOS DE COOKIES

Para poder ofrecerte una mejor experiencia de usuario, obtener datos analíticos, almacenar y recuperar información sobre tus hábitos de navegación o de tu equipo y desarrollar su actividad, este sitio web '.site_url().', utiliza cookies propias y de terceros.

¿Qué tipos de cookies utiliza este sitio web?

Cookies técnicas: Son aquellas que permiten al usuario la navegación a través de una página web, plataforma o aplicación y la utilización de las diferentes opciones o servicios que en ella existan como, por ejemplo, controlar el tráfico y la comunicación de datos, identificar la sesión, acceder a partes de acceso restringido, recordar los elementos que integran un pedido, realizar el proceso de compra de un pedido, realizar la solicitud de inscripción o participación en un evento, utilizar elementos de seguridad durante la navegación, almacenar contenidos para la difusión de videos o sonido o compartir contenidos a través de redes sociales.
Cookies de personalización: Son aquellas que permiten al usuario acceder al servicio con algunas características de carácter general predefinidas en función de una serie de criterios en el terminal del usuario como por ejemplo serian el idioma, el tipo de navegador a través del cual accede al servicio, la configuración regional desde donde accede al servicio, etc.
Cookies de análisis: Son aquellas que bien tratadas por nosotros o por terceros, nos permiten cuantificar el número de usuarios y así realizar la medición y análisis estadístico de la utilización que hacen los usuarios del servicio ofertado. Para ello se analiza tu navegación en nuestra página web con el fin de mejorar la oferta de productos o servicios que le ofrecemos.
Cookies publicitarias: Son aquellas que, bien tratadas por nosotros o por terceros, nos permiten gestionar de la forma más eficaz posible la oferta de los espacios publicitarios que hay en la página web, adecuando el contenido del anuncio al contenido del servicio solicitado o al uso que realice de nuestra página web. Para ello podemos analizar tus hábitos de navegación en Internet y podemos mostrarte publicidad relacionada con tu perfil de navegación.
Cookies de publicidad comportamental: Son aquellas que permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios que, en su caso, el editor haya incluido en una página web, aplicación o plataforma desde la que presta el servicio solicitado. Estas cookies almacenan información del comportamiento de los usuarios obtenida a través de la observación continuada de sus hábitos de navegación, lo que permite desarrollar un perfil específico para mostrar publicidad en función del mismo.
Cookies de terceros: Esta web '.site_url().' puede utilizar servicios de terceros que, por cuenta de Google, recopilarán información con fines estadísticos, de uso del sitio por parte del usuario y para la prestación de otros servicios relacionados con la actividad del sitio web y otros servicios de Internet.

En particular, este sitio web utiliza Google Analytics, un servicio analítico de web prestado por Google, Inc. con domicilio en los Estados Unidos con sede central en 1600 Amphitheatre Parkway, Mountain View, California 94043. Para la prestación de estos servicios, Google utiliza cookies que recopilan la información, incluida la dirección IP del usuario, que será transmitida, tratada y almacenada por Google en los términos fijados en la web Google.com. Esto incluye la posible transmisión de dicha información a terceros por razones de exigencia legal o cuando dichos terceros procesen la información por cuenta de Google.

GESTIONAR Y RECHAZAR EL USO DE COOKIES

En cualquier momento, puedes adaptar la configuración del navegador para gestionar, desestimar el uso de cookies y ser notificado antes de que se descarguen.

También puedes adaptar la configuración de forma que el navegador rechace todas las cookies, o únicamente las cookies de terceros. Y también puedes eliminar cualquiera de las cookies que ya se encuentren en tu equipo.

Para esto, debes tener en cuenta que tendrás que adaptar por separado la configuración de cada navegador y equipo que utilices ya que, como te hemos comentado anteriormente las cookies se asocian al navegador, no a la persona.

Google Chrome https://support.google.com/chrome/answer/95647?hl=es-419

Internet Explorer https://support.microsoft.com/es-es/help/17442/windows-internet-explorer-delete-manage-cookies#ie=ie-10

Mozilla Firefox https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias?redirectlocale=es&redirectslug=habilitar-y-deshabilitar-cookies-que-los-sitios-we

Apple Safari https://support.apple.com/es-es/HT201265

Si tienes cualquier duda sobre esta Política de Cookies, puedes contactar con nosotros enviándonos un mail desde nuestra seccion de: <a href="'.site_url('/contacto').'">Contacto</a>';
    $new_page_template2 = 'politicas.php'; //ex. template-custom.php. Leave blank if you don't want a custom page template.
  
    //don't change the code bellow, unless you know what you're doing
  
    $page_check2 = get_page_by_title($new_page_title2);
    $new_page2 = array(
        'post_type' => 'page',
        'post_title' => $new_page_title2,
        'post_content' => $new_page_content2,
        'post_status' => 'publish',
        'post_author' => 1,
    );
    if(!isset($page_check2->ID)){
        $new_page_id2 = wp_insert_post($new_page2);
        if(!empty($new_page_template2)){
            update_post_meta($new_page_id2, '_wp_page_template', $new_page_template2);
        }
    }
  
}
// Crear pagina Contacto
if (isset($_GET['activated']) && is_admin()){
  
    $new_page_title = 'Contacto';

	 //$url = get_site_url();
	 $url = get_site_url();
	 $fuera = array("https", "http", ":", "/");
	 $onlyconsonants = str_replace($fuera, "", $url);
	 $espacio = array("-");
	 $joda = str_replace($espacio, " ", $onlyconsonants);
	 $joni = ucfirst($joda);	
	



    $new_page_content = 	'<img class="img-fluid" style="padding:5px; border-radius:10px" src="' .get_theme_file_uri() . '/assets/img/contacto.png" aria-label="Contacto" alt="Contacto"><br>'.

	'Esta es la sección de contacto de: <br>'.site_url().'<br> Si desea contactar con nosotros puede hacer enviando un email a la siguiente casilla de correo electrónico.:<br> <strong>'.get_option('admin_email').'</strong>';
    $new_page_template = 'contacto.php'; //ex. template-custom.php. Leave blank if you don't want a custom page template.
  
    //don't change the code bellow, unless you know what you're doing
  
    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
        'post_type' => 'page',
        'post_title' => $new_page_title,
        'post_content' => $new_page_content,
        'post_status' => 'publish',
        'post_author' => 1,
    );
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
  
}
// Crear pagina home
if (isset($_GET['activated']) && is_admin()){
  
    $new_page_title = 'Home';
    $new_page_content = '';
    $new_page_template = ''; //ex. template-custom.php. Leave blank if you don't want a custom page template.
  
    //don't change the code bellow, unless you know what you're doing
  
    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
        'post_type' => 'page',
        'post_title' => $new_page_title,
        'post_content' => $new_page_content,
        'post_status' => 'publish',
        'post_author' => 1,
    );
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
		update_field( 'S-si-no', 'Si', $new_page_id );
		update_field( 'S-si-no-2', 'Si', $new_page_id );
		update_field( 'S-si-no-3', 'Si', $new_page_id );
		update_field( 'S-si-no-4', 'Si', $new_page_id );

        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
  
}
// Crear pagina blog
if (isset($_GET['activated']) && is_admin()){
  
    $new_page_title = 'Blog';
    $new_page_content = '';
    $new_page_template = ''; //ex. template-custom.php. Leave blank if you don't want a custom page template.
  
    //don't change the code bellow, unless you know what you're doing
  
    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
        'post_type' => 'page',
        'post_title' => $new_page_title,
        'post_content' => $new_page_content,
        'post_status' => 'publish',
        'post_author' => 1,
    );
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
  
}
//////////////////////////////////////////////////////////////////////////////////////////////////////


//Menu Header 'Header-menu'

function header_menu() {

	$html = '<div class="collapse navbar-collapse justify-content-center">';
	$html .= '<ul id="menu-menu-principal-1" class="nav navbar-nav">';
		
		$html .= '<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active nav-item">';
			// url Home
			$html .= '<a class="nav-link" href="' . esc_url( home_url() ) . '" aria-label="' . __( 'Home', 'lebianch' ) . '">';
				$html .= __( 'Home', 'lebianch' );
			$html .= '</a>';
					$html .= '</li>';
		// Irl : blog
				$html .= '<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active nav-item">';
			$html .= '<a class="nav-link" href="' . esc_url( site_url('/blog') ) . '" aria-label="' . __( 'Blog', 'lebianch' ) . '">';
				$html .= __( 'Blog', 'lebianch' );
			$html .= '</a>';
					$html .= '</li>';
		// Irl : Contacto
		$html .= '<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active nav-item">';
		
		$html .= '<a class="nav-link" href="' . esc_url( site_url('/contacto') ) . '" aria-label="Contacto">';
				$html .= 'Contacto' ;
			$html .= '</a>';
		// Irl : +

		$html .= '</li>';

	$html .= '</ul>';
	$html .= '</div>';
	echo $html;
} 
// end header_menu

//Menu footer 'header_menu'

function footer_menu() {
	$html = '<div class="d-flex justify-content-center">';
	$html .= '<ul id="footer-menu">';
		
		$html .= '<li class="menu-item menu-item-type-post_type menu-item-object-page">';
			// url políticas de privacidad
			$html .= '<a href="' . esc_url( site_url('/politicas-de-privacidad') ) . '" aria-label="Políticas de Privacidad">';
				$html .= 'Políticas de Privacidad' ;
			$html .= '</a>';
		// Irl : políticas de cookie
		    $html .= '<a href="' . esc_url( site_url('/politica-de-cookies') ) . '" aria-label="Políticas de Cookies">';
				$html .= 'Políticas de Cookies' ;
			$html .= '</a>';
		// sitemap : +
				    $html .= '<a href="' . esc_url( site_url('/sitemap.xml') ) . '" aria-label="Mapa del sitio">';
				$html .= 'Mapa del sitio' ;
			$html .= '</a>';
		// Irl : +
		
		$html .= '</li>';

	$html .= '</ul>';
	$html .= '</div>';
	echo $html;
} 
// end footer_menu









function lebianch_seo_setup(){
	
	//Titulos SEO
	add_theme_support('title-tag');
	
	//Soporte estilos por default de gutenberg en tu tema
    add_theme_support('wp-block-styles');

    //habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    //agregar tamanios personalizados
    add_image_size('blog', 300, 250, true);
    add_image_size('single', 600, 500, true);
	add_image_size('nose', 555, 370, array( 'left', 'top' ));
    add_image_size('multiproposito', 1080, 1080, true);
    

	/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				 'width'       => 125,
				 'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' )
			)
		);
}
add_action('after_setup_theme', 'lebianch_seo_setup');
	

function lebianchseo_css() {

		wp_enqueue_style('bootstrapCSS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', array());
		wp_enqueue_style('fuenteUno', 'https://fonts.googleapis.com/css?family=Old+Standard+TT', array());
		wp_enqueue_style('fuenteDos', 'https://fonts.googleapis.com/css?family=Oswald', array());
		wp_enqueue_style('ionicons', 'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css', array());
		wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array());
		wp_enqueue_style('custom-css', get_theme_file_uri() . '/assets/css/styles.min.css', array());
		
		wp_enqueue_style( 'styles', trailingslashit( get_template_directory_uri() ) . 'style.css', array() );


		wp_enqueue_script('jqueryNew', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), true, true);
		wp_enqueue_script('BootstrapJS', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js', array(),true, true);
		wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array('jqueryNew'), true, true);

    }

add_action( 'wp_enqueue_scripts', 'lebianchseo_css', 10 );

// END ENQUEUE PARENT ACTION


function lebianchseo_menus() {
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu'
    ));
}


add_action('init', 'lebianchseo_menus');
//
function lebianchseo_custom_menus() {
    $menu_name = 'header-menu'; // specify custom menu name
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = '<div class="collapse navbar-collapse" id="navcol-1">' ."\n";
        $menu_list .= "\t\t\t\t". '<ul class="nav navbar-nav mx-auto">' ."\n";
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;
			$menu_list .= "\t\t\t\t\t". '<li class="nav-item" role="presentation">
			<a aria-label="'. $title .'" class="nav-link" href="'. $url .'">'. $title .'</a>' ."\n";
        }
        $menu_list .= "\t\t\t\t". '</ul>' ."\n";
		$menu_list .= "\t\t\t". '<form class="form-inline ml-auto" target="_self" action="/" method="get">
		<div class="form-group">
		<label for="search-field mb-auto">
		<i class="fa fa-search" style="font-size: 40px;color: rgb(70,87,101);"></i>
		</label>
		<input class="form-control search-field buscar-input" type="text" placeholder="Buscar..." id="search" value="'. the_search_query() .'" name="s">
		</div>
	</form>' ."\n";
		$menu_list .= "\t\t\t". '</div>' ."\n";
    } else {
        // $menu_list = '<!-- no list defined -->';
    }
    echo $menu_list;
}
//
function lebianch_seo_default_menu() {
	$html = '<ul id="lebianch-seo-default-menu">';
		$html .= '<li class="menu-item menu-item-type-post_type menu-item-object-page">';
			$html .= '<a href="' . esc_url( home_url() ) . '" title="' . __( 'Home', 'acme' ) . '">';
				$html .= __( 'Home', 'acme' );
			$html .= '</a>';
		$html .= '</li>';
	$html .= '</ul>';
	echo $html;
} // end lebianch_seo_default_menu

// Filter except 
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]>', $content);
  return $content;
}
/**
 * Add Mime TypesTypes
 */
function bodhi_svgs_upload_mimes( $mimes = array() ) {

	global $bodhi_svgs_options;

	if ( empty( $bodhi_svgs_options['restrict'] ) || current_user_can( 'administrator' ) ) {

		// allow SVG file upload
		$mimes['svg'] = 'image/svg+xml';
		$mimes['svgz'] = 'image/svg+xml';

		return $mimes;

	} else {

		return $mimes;

	}

}
add_filter( 'upload_mimes', 'bodhi_svgs_upload_mimes' );


/**
 * Mime Check fix for WP 4.7.1 / 4.7.2
 *
 * Fixes uploads for these 2 version of WordPress.
 * Issue was fixed in 4.7.3 core.
 */
global $wp_version;
if ( $wp_version == '4.7.1' || $wp_version == '4.7.2' ) {
	add_filter( 'wp_check_filetype_and_ext', 'bodhi_svgs_disable_real_mime_check', 10, 4 );
}
function bodhi_svgs_disable_real_mime_check( $data, $file, $filename, $mimes ) {

		$wp_filetype = wp_check_filetype( $filename, $mimes );

		$ext = $wp_filetype['ext'];
		$type = $wp_filetype['type'];
		$proper_filename = $data['proper_filename'];

		return compact( 'ext', 'type', 'proper_filename' );

}
function bodhi_svgs_response_for_svg( $response, $attachment, $meta ) {

	if ( $response['mime'] == 'image/svg+xml' && empty( $response['sizes'] ) ) {

		$svg_path = get_attached_file( $attachment->ID );

		if ( ! file_exists( $svg_path ) ) {
			// If SVG is external, use the URL instead of the path
			$svg_path = $response['url'];
		}

		$dimensions = bodhi_svgs_get_dimensions( $svg_path );

		$response['sizes'] = array(
			'full' => array(
				'url' => $response['url'],
				'width' => $dimensions->width,
				'height' => $dimensions->height,
				'orientation' => $dimensions->width > $dimensions->height ? 'landscape' : 'portrait'
				)
			);

	}

	return $response;

}
add_filter( 'wp_prepare_attachment_for_js', 'bodhi_svgs_response_for_svg', 10, 3 );

function bodhi_svgs_get_dimensions( $svg ) {

	$svg = simplexml_load_file( $svg );

	if ( $svg === FALSE ) {

		$width = '0';
		$height = '0';

	} else {

		$attributes = $svg->attributes();
		$width = (string) $attributes->width;
		$height = (string) $attributes->height;

	}

	return (object) array( 'width' => $width, 'height' => $height );

}
//Menu
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker-movil.php';

}
add_action( 'after_setup_theme', 'register_navwalker' );


add_action("login_head", "my_login_head");
function my_login_head() {
echo '
<style>
body.login #login h1 a {
width: 252px;
height: 84px;
background-size: 252px 84px;
padding-bottom: 5px;
background-image: url("'.site_url().'/wp-content/themes/lebianch-seo/inc/lebianch.png");

}
</style>
';
}
//Cambiar texto alt del logo de login
add_action("login_headertitle","my_custom_login_title");
function my_custom_login_title()
{
return 'Lebianch.com';
} 
// personalizar url logo acceso
add_action( 'login_headerurl', 'my_custom_login_url' );
function my_custom_login_url() {
return 'https://lebianch.com';
}

function mi_nuevo_mime_type( $existing_mimes ) {
 // añade webp a la lista de mime types
 $existing_mimes['webp'] = 'image/webp';
 // devuelve el array a la funcion con el nuevo mime type
 return $existing_mimes;
}
add_filter( 'mime_types', 'mi_nuevo_mime_type' );