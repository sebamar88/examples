<?php 
 get_header();
?>
               <section style="margin-top:2.5rem;">
                <div class="container">
                    <div class="row">
                        
						<div class="col-12 col-md-8">
                            <h1 class="title-sigle-h1"><?php the_title(); ?></h1>
                            <div 
                            id="img-single">
                                <a href="<?php the_permalink($post->ID) ?>">
                                    <?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail('lebianch', [ 'class' => 'img-fluid' , 'alt' => esc_html ( get_the_title() ) ]);
}
 ?>
                                </a>
                            </div>
                            <div id="single-content" class="single_contenido">
                                <?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
                    <?php the_content(); ?>
                        <?php 
}
}
?> 
                            </div>
                        </div> 
                        <div class="col-12 col-md-4 mt-5 my-md-0">

                            <h2><?php the_field('entradas_recientes'); ?></h2>
                            <hr>
                            <div style ="margin-top:2rem; margin-bottom:5rem;" class="row text-left d-flex justify-content-xl-start align-items-xl-center">
		
                                <?php
$cantidad=get_field('cantidad_de_post_a_mostrar');								
$post_typer=get_field('tipo_de_most_a_mostar');
$id = get_the_ID();									
global $post;
$args = array( 'posts_per_page' => $cantidad, 'order'=> 'DEC', 'post_type' =>$post_typer, 'orderby' => '' , 'post__not_in' => array($id) );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?>

                                    <div class="col-12">
<div class="sidebar-single"><a href="<?php the_permalink($post->ID) ?>"> <?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail('lebianch', [ 'class' => 'img-fluid' ,'alt' => esc_html ( get_the_title() ) ]);
}
 ?><h3 class="title_blog_grande" href="<?php the_permalink($post->ID) ?>" ><?php the_title(); ?></h3></a></div></div>
                                    <?php
endforeach; 
wp_reset_postdata();
?>

                            </div>
                        </div>
                    </div>
				
                </div>
            </section>
            <div class="clearfix"></div>

    <?php get_footer(); ?>