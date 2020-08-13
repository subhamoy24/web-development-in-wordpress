

<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function new_theme_default(){
     add_theme_support("post-thumbnails");
     //menu register
     register_nav_menus(array('top-menu' =>'Top Menu' , 'main-menu'=>'Main Menu'));
}
add_action('after_setup_theme','new_theme_default');

function carnews_remove_customize_page(){
        global $submenu;
        unset($submenu['themes.php'][6]);
}
add_action('admin_menu','carnews_remove_customize_page');

function carnews_register_menu_item_for_customizer(){
    add_menu_page('Customizer tittle','company','manage_options','customize.php','','',100);
}

add_action('admin_menu','carnews_register_menu_item_for_customizer');

function fhk(){
    $socials=array('facebook','google+','instagram','youtube','linkedin','twitter','pinterest');
    return $socials;
}
$socials=array('Facebook','Google+','Instagram','Youtube','linkedin','Twitter','Printerest');
function company_customizer($wp_customize){
	$wp_customize->remove_section('title_tagline');
	$wp_customize->add_panel('panel_1',array(
     'priority'=>8,
     'capabilty'=>'edit_theme_options',
     'theme-supports'=>'',
     'title'=>__('Header','company'),
     'description'=>'dddd',
    ));
    $wp_customize->add_section('section_1',array(
      'title'=>'logos',
      'priority'=>5,
      'panel'=>'panel_1'
    ));
    $wp_customize->add_setting('logo',array(
      'default'=>'',
      'transport'=>'refresh'
    ));
    $wp_customize->add_control(
     new WP_Customize_Image_control($wp_customize,'logo',array(
        'section'=>'section_1',
         'label'=>'upload your image'
    ))
    );
     $wp_customize->add_section('section_2',array(
      'title'=>'favicon',
      'priority'=>6,
      'panel'=>'panel_1'
    ));
    $wp_customize->add_setting('favicon',array(
      'default'=>'',
      'transport'=>'refresh'
    ));
    $wp_customize->add_control(
     new WP_Customize_Image_control($wp_customize,'favicon',array(
        'section'=>'section_2',
         'label'=>'upload your favicon'
    )));
     $wp_customize->add_section('section_3',array(
      'title'=>'header text',
      'priority'=>7,
      'panel'=>'panel_1'
    ));
    $wp_customize->add_setting('header_email',array(
      'default'=>'',
      'transport'=>'postMessage'
    ));
    $wp_customize->add_control('header_email',array(
        'section'=>'section_3',
         'label'=>'Header email address',
         'type'=>'text'
    ));
     $wp_customize->add_setting('header_phone',array(
      'default'=>'',
      'transport'=>'postMessage'
    ));
    $wp_customize->add_control('header_phone',array(
        'section'=>'section_3',
         'label'=>'Header phone number',
         'type'=>'text'
    ));
   $wp_customize->add_section('section_4',array(
      'title'=>' color',
      'priority'=>8,
      'panel'=>'panel_1'
    ));

   $wp_customize->add_setting('navbar_bg_color',array(
      'default'=>'white',
      'transport'=>'postMessage'
    ));
    $wp_customize->add_control(

        new WP_Customize_color_Control($wp_customize,'navbar_bg_color',array(
        'section'=>'section_4',
         'label'=>'navbar color'
    )));
 $wp_customize->add_panel('panel_2',array(
     'priority'=>8,
     'capabity'=>'edit_theme_options',
     'theme-supports'=>'',
     'title'=>__('footer','company'),
     'description'=>'dddd',
    ));
  $wp_customize->add_section('section_10',array(
      'title'=>'social icons',
      'priority'=>5,
      'panel'=>'panel_2'
    ));
  $socials=fhk();
  $p=5;
  foreach ($socials as $social) {
  	$wp_customize->add_setting("$social",array(
      'type'=>'theme_mod',
      'capability'=>'edit_theme_options',
      'sanatize_callback'=>'esc_url_raw'
  	));
  	$wp_customize->add_control($social,array(
      'label'=>__("$social url:",'company'),
      'section'=>'section_10',
      'type'=>'text',
      'priority'=>$p
  	));

  $p=$p+5;
  }
}
 add_action('customize_register','company_customizer');
 function socialio(){
 	$socials=fhk();
 	foreach ($socials as $social) {
 		if (strlen(get_theme_mod($social))>0){
 			$a[]=$social;
 		}
 	}
 		if (!empty($a)){
 			echo "<ul class='st-inline footer-social'>";
 			foreach ($a as $b){
 		$class='ti-'.$b.' mr-2';

 		   ?>
 		   <li class="list-inline-item"><a href="<?php echo esc_url(get_theme_mod($b));?>">
 		   <i class="<?php echo esc_attr($class);?>"></i></a></li>

 		    <?php
 		}
 		echo "</ul>";
 	}
 	}
  function setup_thumbnail(){
     set_post_thumbnail_size(1600,1088,true);
     add_image_size('sidebar',87,72,true);
     add_image_size('blogimg',350,350,true);

  }
  add_action('after_setup_theme','setup_thumbnail');
 set_post_thumbnail_size(1600,1088,true);
function twentynineteen_widgets_init() {

	register_sidebar(
		array(
			'name'=> __( 'sidebar', 'company' ),
			'id'=> 'sidebar-1',
		)
	);

}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );

function newsletter_widgets_init() {

	register_sidebar(
		array(
			'name'=> __( 'footer subscription', 'company' ),
			'id'=> 'footer-news'
		)
	);
  register_sidebar(
    array(
      'name'=> __( 'contct form field', 'company' ),
      'id'=> 'contact-form'
    )
  );

}
add_action( 'widgets_init', 'newsletter_widgets_init' );

function advert_widgets_init() {
    include_once get_template_directory(). '/class/class-post-widgets.php';
    
    register_widget( "WP_Widget_Custom_Posts" );
}
add_action( 'widgets_init', 'advert_widgets_init' );

 function format_comment($comment, $args, $depth) {
    
      $GLOBALS['comment'] = $comment; ?>
  
				<li class="mb-5" id="li-comment-<?php comment_ID()?>">
					<div class="comment-area-box">              
                    <h5 class="mb-1"><?php printf(__('%s'), get_comment_author_link()) ?></h5>

				    <div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
							<a href="#"><i class="icofont-reply mr-2 text-muted"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a>
							<span class="date-comm">Posted <?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?></span>
				    </div>
				     <?php if ($comment->comment_approved == '0') : ?>
                       <em><php _e('Your comment is awaiting moderation.') ?></em><br />
                     <?php endif; ?>

					<div class="comment-content mt-3">
							<p> <?php comment_text(); ?></p>
					</div>
				</div>
		        </li>
		        <?php
}
function limit_category_posts($query){
	if ($query->is_category) {
		$query->set('posts_per_page',2);
	}
	return $query;
}
add_filter('pre_get_posts','limit_category_posts');
function custom_pagination() {

  global $wp_query;
  if ($wp_query->max_num_pages<=1) {
  	return;
  }
  $big=99999999;
  $pagination_args = array(
    'base'            => str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
    'format'          => '?paged=/%#%',
    'total'           => $wp_query->max_num_pages,
    'current'         => max(1,get_query_var('paged')),
    'prev_next'       => True,
    'prev_text'       => __('« Previous'),
    'next_text'       => __('Next »'),
    'type'            => 'array',
  );

 $paginate_links = paginate_links($pagination_args);

 if (is_array($paginate_links)) {
   echo " <div class='col-lg-6 text-center'>"."<nav class='navigation pagination d-inline-block'>"
	                ."<div class='nav-links'>";
   echo '<ul class="pagination">';
   foreach ( $paginate_links as $page ) {
     echo "<li>$page</li>";
   }
   echo '</ul>';
   echo "</div>"."</nav>"."</div>";
 }
}

add_filter('wp_mail_smtp_custom_options', function( $phpmailer ) {
    return $phpmailer->SMTPAutoTLS = false;
} );



?>
               
 
	

