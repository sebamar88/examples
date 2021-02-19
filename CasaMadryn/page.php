<?php get_header(); ?>

<section id="single-contenido" class="my-5" >
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-0 offset-md-2 text-center">
                <h1 style="text-transform:capitalize " class="text-center title-single"><?php the_title() ?></h1>
			</div>	
			<div class="col-12 col-md-8 offset-0 offset-md-2 mt-4 text-left">
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
		
    </div>
</section>
    <?php get_footer(); ?>