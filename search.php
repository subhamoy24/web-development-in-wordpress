<?php get_header();?>
<?php get_header();?>
<?php
    if ($_GET['s'] && !empty($_GET['s'])) {
    	$text=$_GET['s'];

    }
?>
<section class="section blog-wrap bg-gray">
    <div class="container">

    	<?php $args=array(
           'post_type'=>'post',
           'posts_per_page'=>-1,
           's'=>$text
    	);
     $query=new Wp_Query($args);
	 if ($query->have_posts()): while ($query->have_posts()): $query->the_post();?>
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="blog-item">
			<img src="images/blog/1.jpg" alt="" class="img-fluid rounded">

			<div class="blog-item-content bg-white p-5">
				<div class="blog-item-meta bg-gray py-1 px-2">
					<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
					<span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
					<span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
				</div> 

				<h3 class="mt-3 mb-3"><a href="blog-single.html"><?php the_title()?></a></h3>
				<p class="mb-4"><?php the_excerpt();?></p>

				<a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a>
			</div>
		</div>
    	</div>
    	<?php endwhile;?>
		<?php else:?>
		<p>bdjjvj</p>
	<?php endif;?>
	<?php next_posts_link();?>
	<?php previous_posts_link();?>
    </div>

    </section>

<?php get_footer();?>
