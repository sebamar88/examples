<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-12 text-center">
			<h1>
				<?php echo post_type_archive_title( '', false ); ?>
			</h1>
		</div>
<?php
$loop = new WP_Query( array(
    'post_type' => 'productos',
    'posts_per_page' => -1,
	'order' => 'ASC'
  )
);
?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="col-12 col-md-4 cust_blogteaser p-3" style="padding-bottom:20px;margin-bottom:32px;">
		<div class="shadow rounded p-3">
		<a href="<?php the_permalink(); ?>"><img class="img-fluid" style="height:auto;" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
						<h3 style="text-align:left;margin-top:20px;font-family:'Open Sans', sans-serif;font-size:18px;margin-right:0;margin-left:24px;line-height:34px;letter-spacing:0px;font-style:normal;font-weight:bold;"><?php the_title(); ?><br></h3>
		<p class="text-secondary" style="text-align:left;font-size:14px;font-family:'Open Sans', sans-serif;line-height:22px;color:rgb(9,9,10);margin-left:24px;">
		<?php the_excerpt(); ?>
		</p>
		</div>
		</div>
		<?php
		endwhile;
?>
		
		
	</div>
</div>


<?php get_footer(); ?>