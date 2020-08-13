<?php get_header(); ?>
<?php if(have_posts()):while(have_posts()):the_post();?>
<div class="main-wrapper ">
  <section class="page-title bg-1">
    <div class="container">
      <div class="row">
         <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">News details</span>
          <h1 class="text-capitalize mb-4 text-lg">Blog Single</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">News details</a></li>
          </ul>
         </div>
       </div>
     </div>
    </div>
 </section>



 <section class="section blog-wrap bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
	<div class="col-lg-12 mb-5">
		<div class="single-blog-item">
			<?php the_post_thumbnail('post-thumbnails',array('class'=>'img-fluid float-left mr-3 mt-2'))?>

			<div class="blog-item-content bg-white p-5">
				<div class="blog-item-meta bg-gray py-1 px-2">
					<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
					<span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
					<span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> <?php echo get_the_date();?></span>
				</div> 

				<h2 class="mt-3 mb-4"><a href="blog-single.html"><?php the_title();?></a></h2>
				<p class="lead mb-4"><?php the_content();?></p>
				<div class="tag-option mt-5 clearfix">
				    <ul class="float-left list-inline"> 
				    	<li>Tags:</li> 
				    	<li class="list-inline-item"><a href="#" rel="tag">Advancher</a></li>
				    	<li class="list-inline-item"><a href="#" rel="tag">Landscape</a></li>
				    	<li class="list-inline-item"><a href="#" rel="tag">Travel</a></li>
				   	</ul>        

				    <ul class="float-right list-inline">
				        <li class="list-inline-item"> Share: </li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
				    </ul>
			    </div>
			</div>
		</div>
	</div>


	<div class="col-lg-12 mb-5">
		<div class="posts-nav bg-white p-5 d-lg-flex d-md-flex justify-content-between ">
			<?php $pre=get_previous_post();
			if (!empty($pre)) :?>
			<a class="post-prev align-items-center" href="<?php echo esc_url(get_permalink($pre->ID))?>">
				<div class="posts-prev-item mb-4 mb-lg-0">
					<span class="nav-posts-desc text-color">- Previous Post</span>
					<h6 class="nav-posts-title mt-1">
						<?php echo $pre->post_title?>
					</h6>
				</div>
			</a>
			<?php endif;?>
			<div class="border"></div>
			<?php $next=get_next_post();
			if (!empty($next)) :?>
			<a class="posts-next" href="<?php echo esc_url(get_permalink($next->ID)) ?>">
				<div class="posts-next-item pt-4 pt-lg-0">
					<span class="nav-posts-desc text-lg-right text-md-right text-color d-block">- Next Post</span>
					<h6 class="nav-posts-title mt-1">
						<?php echo $next->post_title?>
					</h6>
				</div>
			</a>
		<?php endif?>
		</div>
	</div>

	<div class="col-lg-12 mb-5">
		<div class="comment-area card border-0 p-5">
			<?php comments_template();?>
			
		</div>
	</div>
</div>
</div>
<div class="col-lg-4">
   <div class="sidebar-wrap">
<?php get_template_part("sidebar");?>

	<?php dynamic_sidebar('sidebar-1')?>

   <?php get_template_part("category_side_bar");?>
</div>
            </div>   
        </div>
    </div>
</section>
<?php endwhile;?>
<?php endif;?>
<?php get_footer();?>

