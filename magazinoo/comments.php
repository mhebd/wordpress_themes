<?php
/**
 * The template file for displaying the comments and comment form for the
 * Clean Cut theme.
 */

/*
  //Use this code in functions.php file for rearenge your commnet field  

  function move_comment_field( $fields ) {
      $comment_field = $fields['comment'];
      unset( $fields['comment'] );
      $fields['comment'] = $comment_field;
      return $fields;
  }
  add_filter( 'comment_form_fields', 'move_comment_field' );

*/ 


/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
*/
if ( post_password_required() ) {
	return;
}

if ( $comments ) {
	?>

	<div class="comments" id="comments">

		<?php
		$comments_number = absint( get_comments_number() );
		?>

		<div class="comments-header section-inner small max-percentage">

			<h2 class="comment-reply-title">
			<?php
			if ( ! have_comments() ) {
				_e( 'Be first in comment', 'magazinoo' );
			} elseif ( 1 === $comments_number ) {
				/* translators: %s: Post title. */
      printf( _x( 'One Comment', 'comments title', 'magazinoo' ), '' /*get_the_title()*/ );
			} else {
				printf(
					/* translators: 1: Number of comments, 2: Post title. */
					_nx(
						'%1$s Comments',
						'%1$s Comments',
						$comments_number,
						'comments title',
						'magazinoo'
					),
					number_format_i18n( $comments_number ),
					'' /*get_the_title()*/ 
				);
			}

			?>
			</h2><!-- .comments-title -->

		</div><!-- .comments-header -->

		<ul class="comments-inner section-inner thin max-percentage">

			<?php
			wp_list_comments(
				array(
					'walker'            => null,
          'max_depth'         => '',
          'style'             => 'ul',
          'callback'          => null,
          'end-callback'      => null,
          'type'              => 'all',
          'page'              => '',
          'per_page'          => '',
          'avatar_size'       => 64,
          'reverse_top_level' => null,
          'reverse_children'  => '',
          'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
          'short_ping'        => false,   
          'echo'              => true
				)
			);

			$comment_pagination = paginate_comments_links(
				array(
					'echo'      => false,
					'end_size'  => 0,
					'mid_size'  => 0,
					'next_text' => __( 'Newer Comments', 'magazinoo' ) . ' <span aria-hidden="true">&rarr;</span>',
					'prev_text' => '<span aria-hidden="true">&larr;</span> ' . __( 'Older Comments', 'magazinoo' ),
				)
			);

			if ( $comment_pagination ) {
				$pagination_classes = '';

				// If we're only showing the "Next" link, add a class indicating so.
				if ( false === strpos( $comment_pagination, 'prev page-numbers' ) ) {
					$pagination_classes = ' only-next';
				}
				?>

				<nav class="comments-pagination pagination<?php echo $pagination_classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>" aria-label="<?php esc_attr_e( 'Comments', 'magazinoo' ); ?>">
					<?php echo wp_kses_post( $comment_pagination ); ?>
				</nav>

				<?php
			}
			?>

		</ul><!-- .comments-inner -->

	</div><!-- comments -->

	<?php
}

if ( comments_open() || pings_open() ) {

	if ( $comments ) {
		echo '<hr class="styled-separator is-style-wide" aria-hidden="true" />';
	}

	// comment_form(
	// 	array(
	// 		'class_form'         => 'section-inner thin max-percentage',
	// 		'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
	// 		'title_reply_after'  => '</h2>',
	// 	)
  // );


  //Comment Form
      
      
      //Array
      $comments_args = array(
          //Define Fields
          'fields' => array(
              //Author field
              'author' => '<p class="comment-form-author"><input id="author" class="form-control" name="author" aria-required="true" placeholder="Your Name"></input></p>',
              //Email Field
              'email' => '<p class="comment-form-email"><input class="form-control"  id="email" name="email" placeholder="Your E-mail"></input></p>',
              //URL Field
              'url' => '<p class="comment-form-url"><input class="form-control"  id="url" name="url" placeholder="Your Website"></input></p>',
              //Cookies
              'cookies' => ''//'<input type="checkbox" required>By commenting you accept the<a href="' . get_privacy_policy_url() . '"> Privacy & Policy</a>',
          ),
          // Change the title of send button
          'label_submit' => __( 'Comment' ),
          // Change the title of the reply section
          'title_reply' => __( 'Leave A Comment' ),
          // Change the title of the reply section
          'title_reply_to' => __( 'Reply' ),
          //Cancel Reply Text
          'cancel_reply_link' => __( 'Cancel Reply' ),
          // Redefine your own textarea (the comment body).
          'comment_field' => '<p class="comment-form-comment"><textarea class="form-control"  id="comment" name="comment" aria-required="true" placeholder="Your Opinion"></textarea></p>',
          //Message Before Comment
        'comment_notes_before' => __( '' /*'Registration isn\'t required.'*/ ),
          // Remove "Text or HTML to be displayed after the set of comment fields".
          'comment_notes_after' => '',
          //Submit Button ID
          'id_submit' => __( 'comment-submit' ),
      );
      comment_form( $comments_args );

} elseif ( is_single() ) {

	if ( $comments ) {
		echo '<hr class="styled-separator is-style-wide" aria-hidden="true" />';
	}

	?>

	<div class="comment-respond" id="respond">

		<p class="comments-closed"><?php _e( 'Comments are closed.', 'magazinoo' ); ?></p>

	</div><!-- #respond -->

	<?php
}

