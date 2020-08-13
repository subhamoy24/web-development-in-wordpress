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
  
	<?php if (have_posts()):?>
	<?php while (have_posts()): the_post();?>
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
	<?php endwhile;?>
</div>
	<div class="row justify-content-center mt-5">
            <?php custom_pagination(); ?>
     </div>
    <?php else:?>
    <p>bdjjvj</p>
	<?php endif;?>
</section>

<?php get_footer();?>