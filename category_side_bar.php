	<div class="sidebar-widget bg-white rounded tags p-4 mb-3">
		<h5 class="mb-4">Tags</h5>
		<?php 
	   $args=array(
            'orderby'=>'slug',
            'parent'=>0
	      );
	   $cata=get_categories($args);
	   foreach ($cata as  $cat) {
	   	echo '<a href="'.get_category_link($cat->term_id).'">'.$cat->name.'</a>';
	   }?>
	</div>