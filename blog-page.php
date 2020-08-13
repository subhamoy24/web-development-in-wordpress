<?php
/*
  Template Name:Custom blog page
*/
 get_header();?>
<div class="main-wrapper ">
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Our blog</span>
          <h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section blog-wrap bg-gray">
    <div class="container">
      <div class="row">
      	<?php $paged=(get_query_var('paged'))? get_query_var('paged'):1;
      	$wp_query=new Wp_Query(array('post_type'=>'post',
		 'post_status'=>'publish','paged'=>$paged));?>
	<?php if ($wp_query->have_posts()):?>
	<?php while ($wp_query->have_posts()): $wp_query->the_post();?>
	<div class="col-lg-4 col-md-6 col-sm-6">
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
		<?php wp_reset_postdata();?>
	<?php endwhile;?>
		<?php else:?>
		<p>bdjjvj</p>
	<?php endif;?>
	<?php next_posts_link();?>
	<?php previous_posts_link();?>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-6 text-center">
            	<nav class="navigation pagination d-inline-block">
	                <div class="nav-links">
	                    <a class="prev page-numbers" href="#">Prev</a>
	                    <span aria-current="page" class="page-numbers current">1</span>
	                    <a class="page-numbers" href="#">2</a>
	                    <a class="next page-numbers" href="#">Next</a>
	                </div>
	            </nav>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>