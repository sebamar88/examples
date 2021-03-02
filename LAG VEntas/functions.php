<?php 


if ( !defined( 'ABSPATH' ) ) exit;


function seothemelebianch_productos_post_type() {


	$labels = array(
		'name'                  => _x( 'Productos', 'Post Type General Name', 'seothemelebianch' ),
		'singular_name'         => _x( 'Productos', 'Post Type Singular Name', 'seothemelebianch' ),
		'menu_name'             => __( 'Productos', 'seothemelebianch' ),
		'name_admin_bar'        => __( 'Producto', 'seothemelebianch' ),
		'archives'              => __( 'Archivo', 'seothemelebianch' ),
		'attributes'            => __( 'Atributos', 'seothemelebianch' ),
		'parent_item_colon'     => __( 'Producto Padre', 'seothemelebianch' ),
		'all_items'             => __( 'Todos los Productos', 'seothemelebianch' ),
		'add_new_item'          => __( 'Agregar Producto', 'seothemelebianch' ),
		'add_new'               => __( 'Agregar Producto', 'seothemelebianch' ),
		'new_item'              => __( 'Nuevo Producto', 'seothemelebianch' ),
		'edit_item'             => __( 'Editar Producto', 'seothemelebianch' ),
		'update_item'           => __( 'Actualizar Producto', 'seothemelebianch' ),
		'view_item'             => __( 'Ver Producto', 'seothemelebianch' ),
		'view_items'            => __( 'Ver Productos', 'seothemelebianch' ),
		'search_items'          => __( 'Buscar Producto', 'seothemelebianch' ),
		'not_found'             => __( 'No Encontrado', 'seothemelebianch' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'seothemelebianch' ),
		'featured_image'        => __( 'Imagen Destacada', 'seothemelebianch' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'seothemelebianch' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'seothemelebianch' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'seothemelebianch' ),
		'insert_into_item'      => __( 'Insertar en Producto', 'seothemelebianch' ),
		'uploaded_to_this_item' => __( 'Agregado en Producto', 'seothemelebianch' ),
		'items_list'            => __( 'Lista de Productos', 'seothemelebianch' ),
		'items_list_navigation' => __( 'Navegación de Productos', 'seothemelebianch' ),
		'filter_items_list'     => __( 'Filtrar Productos', 'seothemelebianch' ),
	);
	$args = array(
		'label'                 => __( 'Producto', 'seothemelebianch' ),
		'description'           => __( 'Productos para el Sitio Web', 'seothemelebianch' ),
		'rewrite' => array('slug' => 'productos','with_front' => false),
		'labels'                => $labels,
		'hierarchical'          => true, //true = posts, false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest' => true , 
		 'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'post-formats',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)

	);
	register_post_type( 'productos', $args );

}
add_action( 'init', 'seothemelebianch_productos_post_type', 0 );

/** Registrar una Taxonomia */

function seothemelebianch_blog_taxonomia() {

	$labels = array(
		'name'              => _x( 'Categoria Productos', 'taxonomy general name', 'seothemelebianch' ),
		'singular_name'     => _x( 'Categoria Productos', 'taxonomy singular name', 'seothemelebianch' ),
		'search_items'      => __( 'Buscar Categoria Productos', 'seothemelebianch' ),
		'all_items'         => __( 'Todas Categorias Productos', 'seothemelebianch' ),
		'parent_item'       => __( 'Categoria Productos Padre', 'seothemelebianch' ),
		'parent_item_colon' => __( 'Categoria Productos:', 'seothemelebianch' ),
		'edit_item'         => __( 'Editar Categoria Productos', 'seothemelebianch' ),
		'update_item'       => __( 'Actualizar Categoria Productos', 'seothemelebianch' ),
		'add_new_item'      => __( 'Agregar Categoria Productos', 'seothemelebianch' ),
		'new_item_name'     => __( 'Nueva Categoria Productos ', 'seothemelebianch' ),
		'menu_name'         => __( 'Categoria Productos', 'seothemelebianch' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'with_front'=>false, 'slug' => 'productos' ),
		'show_in_rest'	    => true,
		'rest-base'	    => 'productos'
	);
	

	register_taxonomy( 'productos', array( 'productos' ), $args );
}

add_action( 'init', 'seothemelebianch_blog_taxonomia', 0 );




function lebianch_seo_setup(){
	
	//Titulos SEO
	add_theme_support('title-tag');
	
	//woocommerce
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	//Soporte estilos por default de gutenberg en tu tema
    add_theme_support('wp-block-styles');

    //habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    //agregar tamanios personalizados
    add_image_size('square', 1080, 1080, true);
    add_image_size('vertical', 540, 1080, true);
    add_image_size('horizontal', 1080, 540, true);
	

	/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 200,
				 'width'       => 150,
				 'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' )
			)
		);
}
add_action('after_setup_theme', 'lebianch_seo_setup');
	

function lebianchseo_css() {



		wp_enqueue_style('font-awesome', trailingslashit( get_template_directory_uri() ) . 'assets/fonts/font-awesome.min.css', array());
		wp_enqueue_style('custom-css', trailingslashit( get_template_directory_uri() ) . 'assets/css/styles.min.css', array());
		wp_enqueue_style('bootstrapCSS', trailingslashit( get_template_directory_uri() ) . 'assets/bootstrap/css/bootstrap.min.css', array());
		//google fonts
		wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans', array());
		wp_enqueue_style( 'styles', trailingslashit( get_template_directory_uri() ) . 'style.css', array() );
		//JS
		wp_enqueue_script('jqueryNew', trailingslashit( get_template_directory_uri() ) . '/assets/js/jquery.min.js', array(), true);
		wp_enqueue_script('popperJS', trailingslashit( get_template_directory_uri() ) . '/assets/bootstrap/js/bootstrap.min.js', array(),true);
		wp_enqueue_script('scripts', trailingslashit( get_template_directory_uri() ) . '/assets/js/scripts.js', array('jqueryNew'), true);

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





function dcms_agregar_nueva_zona_widgets() {

	register_sidebar( array(
		'name'          => 'Widgets Area 1',
		'id'            => 'id-nueva-zona',
		'description'   => 'Descripción de la nueva Zona de Widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Widgets Area 2',
		'id'            => 'id-nueva-zona2',
		'description'   => 'Descripción de la nueva Zona de Widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}

add_action( 'widgets_init', 'dcms_agregar_nueva_zona_widgets' );

function wpdocs_custom_excerpt_length( $length ) {
    return $length;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '...<br><a class="btn btn-primary mt-3" href="'.get_the_permalink().'" rel="nofollow"> Más Información</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
	
	
	
function get_hansel_and_gretel_breadcrumbs()
{
    // Set variables for later use
    
    $home_link        = home_url('/');
    $home_text        = __( 'Home' );
    $link_before      = '<span typeof="v:Breadcrumb">';
    $link_after       = '</span>';
    $link_attr        = ' rel="v:url" property="v:title"';
    $link             = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
    $delimiter        = ' -> ';              // Delimiter between crumbs
    $before           = '<span class="current">'; // Tag before the current crumb
    $after            = '</span>';                // Tag after the current crumb
    $page_addon       = '';                       // Adds the page number if the query is paged
    $breadcrumb_trail = '';
    $category_links   = '';

    /** 
     * Set our own $wp_the_query variable. Do not use the global variable version due to 
     * reliability
     */
    $wp_the_query   = $GLOBALS['wp_the_query'];
    $queried_object = $wp_the_query->get_queried_object();

    // Handle single post requests which includes single pages, posts and attatchments
    if ( is_singular() ) 
    {
        /** 
         * Set our own $post variable. Do not use the global variable version due to 
         * reliability. We will set $post_object variable to $GLOBALS['wp_the_query']
         */
        $post_object = sanitize_post( $queried_object );

        // Set variables 
        $title          = apply_filters( 'the_title', $post_object->post_title );
        $parent         = $post_object->post_parent;
        $post_type      = $post_object->post_type;
        $post_id        = $post_object->ID;
        $post_link      = $before . $title . $after;
        $parent_string  = '';
        $post_type_link = '';

        if ( 'post' === $post_type ) 
        {
            // Get the post categories
            $categories = get_the_category( $post_id );
            if ( $categories ) {
                // Lets grab the first category
                $category  = $categories[0];

                $category_links = get_category_parents( $category, true, $delimiter );
                $category_links = str_replace( '<a',   $link_before . '<a' . $link_attr, $category_links );
                $category_links = str_replace( '</a>', '</a>' . $link_after,             $category_links );
            }
        }

        if ( !in_array( $post_type, ['post', 'page', 'attachment'] ) )
        {
            $post_type_object = get_post_type_object( $post_type );
            $archive_link     = esc_url( get_post_type_archive_link( $post_type ) );

            $post_type_link   = sprintf( $link, $archive_link, $post_type_object->labels->singular_name );
        }

        // Get post parents if $parent !== 0
        if ( 0 !== $parent ) 
        {
            $parent_links = [];
            while ( $parent ) {
                $post_parent = get_post( $parent );

                $parent_links[] = sprintf( $link, esc_url( get_permalink( $post_parent->ID ) ), get_the_title( $post_parent->ID ) );

                $parent = $post_parent->post_parent;
            }

            $parent_links = array_reverse( $parent_links );

            $parent_string = implode( $delimiter, $parent_links );
        }

        // Lets build the breadcrumb trail
        if ( $parent_string ) {
            $breadcrumb_trail = $parent_string . $delimiter . $post_link;
        } else {
            $breadcrumb_trail = $post_link;
        }

        if ( $post_type_link )
            $breadcrumb_trail = $post_type_link . $delimiter . $breadcrumb_trail;

        if ( $category_links )
            $breadcrumb_trail = $category_links . $breadcrumb_trail;
    }

    // Handle archives which includes category-, tag-, taxonomy-, date-, custom post type archives and author archives
    if( is_archive() )
    {
        if (    is_category()
             || is_tag()
             || is_tax()
        ) {
            // Set the variables for this section
            $term_object        = get_term( $queried_object );
            $taxonomy           = $term_object->taxonomy;
            $term_id            = $term_object->term_id;
            $term_name          = $term_object->name;
            $term_parent        = $term_object->parent;
            $taxonomy_object    = get_taxonomy( $taxonomy );
            $current_term_link  = $before . $taxonomy_object->labels->singular_name . ': ' . $term_name . $after;
            $parent_term_string = '';

            if ( 0 !== $term_parent )
            {
                // Get all the current term ancestors
                $parent_term_links = [];
                while ( $term_parent ) {
                    $term = get_term( $term_parent, $taxonomy );

                    $parent_term_links[] = sprintf( $link, esc_url( get_term_link( $term ) ), $term->name );

                    $term_parent = $term->parent;
                }

                $parent_term_links  = array_reverse( $parent_term_links );
                $parent_term_string = implode( $delimiter, $parent_term_links );
            }

            if ( $parent_term_string ) {
                $breadcrumb_trail = $parent_term_string . $delimiter . $current_term_link;
            } else {
                $breadcrumb_trail = $current_term_link;
            }

        } elseif ( is_author() ) {

            $breadcrumb_trail = __( 'Author archive for ') .  $before . $queried_object->data->display_name . $after;

        } elseif ( is_date() ) {
            // Set default variables
            $year     = $wp_the_query->query_vars['year'];
            $monthnum = $wp_the_query->query_vars['monthnum'];
            $day      = $wp_the_query->query_vars['day'];

            // Get the month name if $monthnum has a value
            if ( $monthnum ) {
                $date_time  = DateTime::createFromFormat( '!m', $monthnum );
                $month_name = $date_time->format( 'F' );
            }

            if ( is_year() ) {

                $breadcrumb_trail = $before . $year . $after;

            } elseif( is_month() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ), $year );

                $breadcrumb_trail = $year_link . $delimiter . $before . $month_name . $after;

            } elseif( is_day() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ),             $year       );
                $month_link       = sprintf( $link, esc_url( get_month_link( $year, $monthnum ) ), $month_name );

                $breadcrumb_trail = $year_link . $delimiter . $month_link . $delimiter . $before . $day . $after;
            }

        } elseif ( is_post_type_archive() ) {

            $post_type        = $wp_the_query->query_vars['post_type'];
            $post_type_object = get_post_type_object( $post_type );

            $breadcrumb_trail = $before . $post_type_object->labels->singular_name . $after;

        }
    }   

    // Handle the search page
    if ( is_search() ) {
        $breadcrumb_trail = __( 'Search query for: ' ) . $before . get_search_query() . $after;
    }

    // Handle 404's
    if ( is_404() ) {
        $breadcrumb_trail = $before . __( 'Error 404' ) . $after;
    }

    // Handle paged pages
    if ( is_paged() ) {
        $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' );
        $page_addon   = $before . sprintf( __( ' ( Page %s )' ), number_format_i18n( $current_page ) ) . $after;
    }

    $breadcrumb_output_link  = '';
    $breadcrumb_output_link .= '<div class="breadcrumb">';
    if (    is_home()
         || is_front_page()
    ) {
        // Do not show breadcrumbs on page one of home and frontpage
        if ( is_paged() ) {
            
            $breadcrumb_output_link .= '<a href="' . $home_link . '">' . $home_text . '</a>';
            $breadcrumb_output_link .= $page_addon;
        }
    } else {
        
        $breadcrumb_output_link .= '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $home_text . '</a>';
        $breadcrumb_output_link .= $delimiter;
        $breadcrumb_output_link .= $breadcrumb_trail;
        $breadcrumb_output_link .= $page_addon;
    }
    $breadcrumb_output_link .= '</div><!-- .breadcrumbs -->';

    return $breadcrumb_output_link;
}

	
