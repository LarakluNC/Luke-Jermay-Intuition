<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Luke_Jermay
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-bg">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/lukejermay/images/faqs/LJ_FAQ_bg.jpg" />
	</header><!-- .entry-header -->

	<?php lukejermay_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="page-cont-wrap">
			<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lukejermay' ),
				'after'  => '</div>',
			) );
			?>
			<?php 
				$count = 0;
				if( have_rows('faq') ): 
				while( have_rows('faq') ): the_row(); 

				$question = get_sub_field('question');
				$answer = get_sub_field('answer');
			?>
				<div class="question-wrapper">
					<div class="question">
						<a href="#faq-<?php echo $count; ?>"><?php echo $question; ?></a>
					</div>
					<div class="answer" id="faq-<?php echo $count; ?>">
						<?php echo $answer; ?>
					</div>
				</div>
			<?php
				$count++;
				endwhile; 
				endif;
			?>
			
		<?php if ( is_page( 91 ) ) : ?>
			<a class="btn-default" target="_blank" href="<?php the_field('book_tickets_url', 5); ?>">Book Tickets</a>
		<?php endif; ?>
		</div>
	</div><!-- .entry-content -->

	
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'lukejermay' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
