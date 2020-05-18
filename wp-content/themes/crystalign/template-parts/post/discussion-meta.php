<?php
/**
 * The template for displaying Current Discussion on posts
 *
 * @package WordPress
 * @subpackage crystalign
 * @since crystalign 1.0
 */

/* Get data from current discussion on post. */
$discussion    = crystalign_get_discussion_data();
$has_responses = $discussion->responses > 0;

if ( $has_responses ) {
	/* translators: %d: Number of comments. */
	$meta_label = sprintf( _n( '%d Comment', '%d Comments', $discussion->responses, 'crystalign' ), $discussion->responses );
} else {
	$meta_label = __( 'No comments', 'crystalign' );
}
?>

<div class="discussion-meta">
	<?php
	if ( $has_responses ) {
		crystalign_discussion_avatars_list( $discussion->authors );
	}
	?>
	<p class="discussion-meta-info">
		<?php echo crystalign_get_icon_svg( 'comment', 24 ); ?>
		<span><?php echo esc_html( $meta_label ); ?></span>
	</p>
</div><!-- .discussion-meta -->
