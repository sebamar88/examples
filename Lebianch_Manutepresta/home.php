<?php get_header(); ?>


<section style="margin-bottom: 1rem;margin-top: 2.5rem;">

    <div class="container">
<div class="text-center">
	                <h1 style="display: block; color: #072146;">Escuela de Finanzas</h1>
                <p>Libertad monetaria $ a tu alcance</p>
				</div>
        <div style="margin-top: 5rem; margin-bottom: 5rem;" class="row text-left d-flex justify-content-xl-start align-items-xl-center">
            <?php
global $post;
$args = array( 'posts_per_page' =>
            3, 'order'=> 'DEC', 'orderby' => '' ); $postslist = get_posts( $args ); foreach ( $postslist as $post ) : setup_postdata( $post ); ?>

            <div class="col-12 col-md-4">
                <div class="portada-blog">
                    <a aria-label="<?php the_title(); ?>" href="<?php the_permalink($post->ID) ?>">
                        <?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail('blogpost');
}
 ?>
                        <h3 class="title_blog_grande" href="<?php the_permalink($post->ID) ?>"><?php the_title(); ?></h3>
                    </a>
                </div>
            </div>
            <?php
endforeach; 
wp_reset_postdata();
?>
        </div>
    </div>
</section>
<section style="margin-bottom: 5rem;">
    <div class="container">
        <div style="margin-top: 2.5rem; margin-bottom: 5rem;" class="row text-left d-flex justify-content-xl-start align-items-xl-center">
            <?php
global $post;
$args = array( 'posts_per_page' =>
            9, 'offset'=> 3, 'order'=> 'DEC', 'orderby' => '' ); $postslist = get_posts( $args ); foreach ( $postslist as $post ) : setup_postdata( $post ); ?>

            <div class="col-12 col-md-4">
                <div class="posts-blog">
                    <a aria-label="<?php the_title(); ?>" href="<?php the_permalink($post->ID) ?>">
                        <?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail('blogpost');
}
 ?>
                        <h3 class="title_blog_chicos" href="<?php the_permalink($post->ID) ?>"><?php the_title(); ?></h3>
                    </a>
                </div>
            </div>
            <?php
endforeach; 
wp_reset_postdata();
?>
        </div>
    </div>
</section>
<footer>
    <?php get_footer(); ?>
</footer>