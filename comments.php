
  
   <?php /*?><ul class="comment-tree list-unstyled">
   <?php wp_list_comments(array('callback'=>'format_comment'));>?>
    </ul>
 <?php endif;?>
	
          
<?php
		$commenter=wp_get_current_commenter();
               $req=get_option('requirre_name_email');
              $aria_req=($req?"aria-required='true'":'');
         $comments_args=array(
         	'title_reply'=>'plese commmented:',
        'fields'=>apply_filters('comment_form_default_fields',array(
          'author'=>'<div class="row">'.
				'<div class="col-md-6">'.
					'<div class="form-group">'.
						'<input class="form-control" type="text" name="name" id="name" value="'.esc_attr($commenter['comment_author']).'"placeholder="Name:">'
					.'</div>'.
				'</div>',
		    'email'=>'<div class="col-md-6">'.
					'<div class="form-group">'.
						'<input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">'.
					'</div>'.
				'</div>'.
			'</div>')),
            'comment_field'=>'<textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>',
            'submit_button'=>'<input class="btn btn-main btn-round-full" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">'
		       );
          comment_form($comments_args);?>*/
/**
 * The template for displaying Comments
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to twentytwelve_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			if ( 1 === get_comments_number() ) {
				printf(
					/* translators: %s: The post title. */
					__( 'One thought on &ldquo;%s&rdquo;', 'company' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf(
					/* translators: %1$s: The number of comments. %2$s: The post title. */
					_n( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'twentytwelve' ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2>

		<ol class="commentlist">
			<?php
			wp_list_comments(
				array(
					
					'style'    => 'ol',
				)
			);
			?>
		</ol><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'twentytwelve' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentytwelve' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentytwelve' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) :
			?>
		<p class="nocomments"><?php _e( 'Comments are closed.', 'twentytwelve' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>
	<?php
	$commenter=wp_get_current_commenter();
               $req=get_option('requirre_name_email');
              $aria_req=($req?"aria-required='true'":'');
         $comments_args=array(
         	'title_reply'=>'plese commmented:',
        'fields'=>apply_filters('comment_form_default_fields',array(
          'author'=>'<div class="row">'.
				'<div class="col-md-6">'.
					'<div class="form-group">'.
						'<input class="form-control" type="text" name="name" id="name" value="'.esc_attr($commenter['comment_author']).'"placeholder="Name:">'
					.'</div>'.
				'</div>',
		    'email'=>'<div class="col-md-6">'.
					'<div class="form-group">'.
						'<input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">'.
					'</div>'.
				'</div>'.
			'</div>')),
            'comment_field'=>'<textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>',
            'submit_button'=>'<input class="btn btn-main btn-round-full" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">'
		       );
          ?>

	<?php comment_form( $comments_args); ?>

</div><!-- #comments .comments-area -->


	
	