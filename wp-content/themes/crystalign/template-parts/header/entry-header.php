<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage crystalign
 * @since crystalign 1.0
 */

$discussion = ! is_page() && crystalign_can_show_post_thumbnail() ? crystalign_get_discussion_data() : null; ?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<?php if ( ! is_page() ) : ?>
<div class="entry-meta">
	<?php crystalign_posted_by(); ?>
	<?php crystalign_posted_on(); ?>
	<span class="comment-count">
		<?php
		if ( ! empty( $discussion ) ) {
			crystalign_discussion_avatars_list( $discussion->authors );
		}
		?>
		<?php crystalign_comment_count(); ?>
	</span>
	<?php
		// Edit post link.
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Post title. Only visible to screen readers. */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'crystalign' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">' . crystalign_get_icon_svg( 'edit', 16 ),
			'</span>'
		);
	?>
</div><!-- .entry-meta -->
<?php endif; ?>
