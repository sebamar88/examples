<?php get_header(); ?>

<div class="container">
        <?php echo get_hansel_and_gretel_breadcrumbs(); ?>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12">
						 <?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail('lebianch', [ 'class' => 'img-thumbnail img-fluid center-block' , 'alt' => esc_html ( get_the_title() ) ]);
}
 ?>
					</div>
                </div>
                <div class="row no-gutters mt-1">

                    <?php
                        //Get the images ids from the post_metadata
                        $images = acf_photo_gallery('galeria', $post->ID);
                        //Check if return array has anything in it
                        if( count($images) ):
                            //Cool, we got some data so now let's loop over it
                            
                            foreach($images as $image):
								
                                $id = $image['id']; // The attachment id of the media
                                $title = $image['title']; //The title
                                $caption= $image['caption']; //The caption
                                $full_image_url= $image['full_image_url']; //Full size image url
                                $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
                                $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                                $url= $image['full_image_url']; //Goto any link when clicked
                                $target= true; //Open normal or new tab
                                $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                                $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
                    ?>
                    <div class="col-6 col-md-4">
                        <div class="thumbnail">
                            <?php if( !empty($url) ){ ?><a href="#" data-toggle="modal" data-target="#modal<?php echo $id; ?>" ><?php } ?>
                                <img class="img-fluid img-thumbnail" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                            <?php if( !empty($url) ){ ?></a><?php } ?>
							<?php if( !empty($url) ){ ?>
							<div class="modal fade" id="modal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										
										<div class="modal-body">
											<img class="img-fluid" src="<?php echo $image['full_image_url']; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
											
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
                        </div>
                    </div>
                    <?php endforeach; endif; ?>
                    
                </div>
            </div>
            <div class="col-md-5">
                <h1><?php the_title(); ?></h1>
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
                <ul class="list-unstyled main-list">
						<?php
						$a=get_field('lista_productos');
						$t=explode(';',$a);
						foreach ($t as $list){
						echo '<li class="item-list"><i class="fa fa-check-circle-o mr-2"></i>'.$list.'</li>';
						}
						?>
				</ul>
				<a class="btn btn-primary" href="<?php the_field('ficha_tecnica'); ?>" target="_blank" rel="no-follow">Ver Ficha Técnica</a>
			<?php
				global $post;
				if($post->ID == 75){ ?>
	<a class="btn btn-success" href="https://tensolite.com/calculo" target="_blank" rel="no-follow">Realizar Calculo</a>
<?php }elseif($post->ID == 80){ ?>
				<a class="btn btn-success" href="https://tensolite.com/calculo?q=t180" target="_blank" rel="no-follow">Realizar Calculo</a>	
				<?php } ?>
                </div>
        </div>
    </div>

<?php get_footer(); ?>
