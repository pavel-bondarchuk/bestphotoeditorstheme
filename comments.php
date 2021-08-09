<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$twenty_twenty_one_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) :
		;
		?>

		<div class="customer-reviews-list">
			<?php
			wp_list_comments(
				array(
					'callback' => 'bse_comments',
					'style'       => 'div',
                    'reverse_top_level' => false,
				)
			);
			?>
		</div><!-- .comment-list -->

		<?php
		$pages = paginate_comments_links(
			array(
				'echo' => false,
				'type' => 'array',
				'screen_reader_text' => '&nbsp;',
				'show_all'     => false,
				'end_size'     => 1,
				'mid_size'     => 1,
				'prev_next' => true,
				'prev_text' => '<div class="pagination__button button-prev" tabindex="-1" role="button" aria-label="Previous slide" aria-disabled="true"><svg class="arrow__icon pagination__arrow"><use xlink:href="/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow"></use></svg></div></span>',
				'next_text'          => '<div class="pagination__button button-next" tabindex="-1" role="button" aria-label="Next slide" aria-disabled="true"><svg class="arrow__icon pagination__arrow"><use xlink:href="/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow"></use></svg></div>',
			)
		);
		if( is_array( $pages ) ) {
			$output = '';
			foreach ($pages as $page) {
				$page = "\n<li>$page</li>\n";
				if (strpos($page, ' current') !== false)
					$page = str_replace([' current', '<li>'], ['', '<li class="active">'], $page);
				$output .= $page;
			}
			?>
			<nav aria-label="Comment navigation" class="pagination">
				<ul class="pagination__list">
					<?=$output?>
				</ul>
			</nav>
			<?php
		}
		?>

		<?php if ( ! comments_open() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'twentytwentyone' ); ?></p>
	<?php endif; ?>
	<?php endif; ?>

	<?php
	add_filter('comment_form_fields', 'bse_reorder_comment_fields' );
	function bse_reorder_comment_fields( $fields ){
		//print_r( $fields );
		$fields[ 'rating' ] = '<fieldset class="comments-rating">
		<span class="rating-container">';
		$fields[ 'rating' ] .= '<label for="rating-0"></label><input type="radio" id="rating-0" name="rating" value="0"/>';
		for ( $i = 5; $i >= 1; $i-- ) :
		$fields[ 'rating' ] .= '<input type="radio" id="rating-'.esc_attr( $i ).'" name="rating" value="'.esc_attr( $i ).'" /><label for="rating-'.esc_attr( $i ).'">'.esc_attr( $i ).'</label>';
		endfor;
        $fields[ 'rating' ] .= '</span>
	</fieldset>';
		$new_fields = array();

		$myorder = array('author','email','rating','comment'); // нужный порядок

		foreach( $myorder as $key ){
			$new_fields[ $key ] = $fields[ $key ];
			unset( $fields[ $key ] );
		}

		// если остались еще какие-то поля добавим их в конец
		if( $fields )
			foreach( $fields as $key => $val )
				$new_fields[ $key ] = $val;

		return $new_fields;
	}
	comment_form(
		array(
			'logged_in_as'       => null,
			'title_reply'        => esc_html__( 'Add Review', 'bse' ),
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
			'class_form'  => 'form__title',
			'comment_notes_before' => '',
			'comment_notes_after' => '',
			'label_submit' => esc_html__( 'Submit', 'bse' ),
			'class_submit' => 'btn btn--orange',
			'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s">
<span class="btn__text">SUBMIT</span>
<span class="btn__arrow">
<svg class="btn__icon icon-arrow">
<use xlink:href="/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow"></use>
</svg>
</span>
</button>',
			'comment_field' => '<div class="form-group comment-form-comment"><textarea id="comment" name="comment" aria-required="true" class="textarea" placeholder="Review Content*"></textarea></div>',
			'fields' => [
				'author' => '<div class="form-group comment-form-author"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' class="form-control" placeholder="Enter your Name*"/></div>',
				'email'  => '<div class="form-group comment-form-email"><input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' class="form-control" placeholder="Enter your Email*"/></div>',
				'url'    => '',
				'cookies' => '',
				'comment_field' =>  '',
			],
		)
	);
	?>

</div><!-- #comments -->
