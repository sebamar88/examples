<?php 
 get_header();
?>

  <section style="margin-top:2.5rem">
            <div class="container">
                <div class="row d-lg-flex d-xl-flex ">
                    <div class="col-12 text-center">
                        <h1 style="display:block;"><?php wp_title('');?></h1>
                        
                    </div>
                </div>
            </div>
        </section>
<section style="margin-bottom:2.5rem">
    <div class="container">
     <div style ="margin-top:5rem; margin-bottom:5rem;" class="row text-left d-flex justify-content-xl-start align-items-xl-center">
		
                                <?php
global $post;
$args = array( 'posts_per_page' => 3, 'order'=> 'DEC', 'orderby' => '' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?>

		 <div class="col-12 col-md-4 text-center">
			 <div class="shadow rounded p-3">
				 <a style="color:black; text-decoration:none" aria-label="<?php the_title(); ?>" href="<?php the_permalink($post->ID) ?>"> 
					 <img style="max-height:185px"  class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" />
					 <h3 class="title_blog_grande" href="<?php the_permalink($post->ID) ?>" ><?php the_title(); ?></h3>
				 </a>
			 </div>
 </div>
                                    <?php
endforeach; 
wp_reset_postdata();
?>

                            </div>	</div>			

</section>
<section style="margin-bottom:5rem">
    <div class="container">
     <div style ="margin-top:2.5rem; margin-bottom:5rem;" class="row text-left d-flex justify-content-xl-start align-items-xl-center">
		
                                <?php
global $post;
$args = array( 'posts_per_page' => 9, 'offset'=> 3, 'order'=> 'DEC', 'orderby' => '' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?>

                                    <div class="col-12 col-md-4">
<div class="posts-blog"><a aria-label="<?php the_title(); ?>" href="<?php the_permalink($post->ID) ?>"> <?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail('horizontal');
}
 ?><h3 class="title_blog_chicos" href="<?php the_permalink($post->ID) ?>" ><?php the_title(); ?></h3></a></div></div>
                                    <?php
endforeach; 
wp_reset_postdata();
?>
                            </div>	</div>			

</section>

    <?php get_footer(); ?>