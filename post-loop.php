	<div class="sidebar-widget latest-post card border-0 p-4 mb-3">
	  <?php $wp_query=new Wp_Query(array('post_type'=>'post',
		 'post_status'=>'publish','post_per_page'=>-1));?>
		 <?php if ($wp_query->have_posts()):?>
		 		<h5>Latest Posts</h5>
		 	<?php while ($wp_query->have_posts()): $wp_query->the_post();?>

        <div class="media border-bottom py-3">
            <a href="#"><img class="mr-4" src="<?php echo get_template_directory_uri();?>/images/blog/bt-3.jpg" alt=""></a>
            <div class="media-body">
                <h6 class="my-2"><a href="#"><?php the_title();?></a></h6>
                <span class="text-sm text-muted"><?php echo get_the_date();?></span>
            </div>
        </div>
       <?php endwhile;?>
		<?php else:?>
		<p>bdjjvj</p>
	   <?php endif;?>
	</div>