<?php get_header(); ?>
    <section class="margin-sections my-5">
        <div class="container">
            <div class="row">

  
				<div class="col-12 col-md-8 ">
				<div id="single" class="text-center" style="position:relative; margin-bottom:3rem">
					<div class="div-copado">
                        <h2><?php the_title(); ?></h2>
                    </div>
				<div id="img-single"><?php
if ( has_post_thumbnail() ) {
the_post_thumbnail('horizontal', [ 'class' => 'img-fluid rounded' ,'alt' => esc_html ( get_the_title() ) ]);} ?>
</div>
                    
                    </div>
					
					<div style="line-height:1.75;padding:0 2rem" class="single_contenido"><?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
                            <?php the_content(); ?>
                                <?php 
}
}

?></div>
                </div>
 
				
                    
                <div class="col-12 col-md-4">
				<h2 class="title-bg ts-title"><span class="title-text">Te puede interesar</span><span class="title-after"></span></h2>
                    <div class="row py-3">
					
                    <?php
global $post;
$id = get_the_ID();
$args = array( 'posts_per_page' => 6, 'order'=> 'DEC', 'orderby' => 'rand', 'post__not_in' => array($id) );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post );
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  ?> 
                        <div class="col-12 shadow rounded text-center mb-3 py-3">
						<a style="color:black; text-decoration:none" aria-label="<?php the_title(); ?>" href="<?php the_permalink($post->ID) ?>">
						<?php
if ( has_post_thumbnail() ) {
the_post_thumbnail('horizontal', [ 'class' => 'img-fluid d-inline-block float-left rounded' ,'style' => 'margin-right: 15px; max-height:240px' ,'alt' => esc_html ( get_the_title() ) ]);} ?>
						
                        <h3  class="h-05rem"><?php the_title(); ?></h3>
                        </div></a>
  <?php
endforeach; 
wp_reset_postdata();

?>	                     
                    </div>
					

                </div>
            </div>
		</div>
			
        </div>
    </section>
   
   
    
	    <?php get_footer(); ?>
    