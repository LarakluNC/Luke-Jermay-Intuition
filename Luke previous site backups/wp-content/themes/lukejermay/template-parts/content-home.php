<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Luke_Jermay
 */

?>

<section id="trailer" class="section">
    <div class="content-wrapper">
		<div class="full" data-aos="zoom-in">
			<p id="trail_one"><span>Watch the trailer</span></p>
			<p id="trail_two"><a class="play-trailer" onclick="revealVideo('video','vimeo_v')">Play</a></p>
		</div>
		<div id="trailer_line_top"></div>
		<div id="trailer_line_bottom"></div>
	</div>	
	<div class="background-image-layer trailer_bg_l" id="trail_bg_one">
	</div>
	<div class="background-image-layer trailer_bg_r" id="trail_bg_two">
	</div>
</section>

<section id="show" class="section">
    <div class="content-wrapper">
		<div class="full show-centre" id="show_one" data-aos="zoom-in">
			<h3><?php the_field('show_title'); ?></h3>
			<p><?php the_field('show_content'); ?></p>
		</div>
		<div id="show_line_top"></div>
		<div id="show_line_bottom"></div>
	</div>
	<div class="background-image-layer show_bg_l" id="show_bg_one">
	</div>
	<div class="background-image-layer show_bg_r" id="show_bg_two">
	</div>
</section>

<section id="reviews" class="section">	
    <div class="content-wrapper">
		<div class="reviews" id="rev_slider" data-aos="zoom-in">		
			<?php
			if( have_rows('press_slides') ):
				$i=0;
					while ( have_rows('press_slides') ) : the_row();
				$i++;			
			?>		
			<div class="rev_<?php echo $i; ?> review">
				<p class="quote">”</p>
				<p class="rev-text"><?php the_sub_field('content'); ?></p>
				<p class="quote">”</p>
				<p class="author"><?php the_sub_field('author'); ?></p>
			</div>
			<?php endwhile; endif; ?>
		</div>
		<div id="reviews_line_top"></div>
		<div id="reviews_line_bottom"></div>
	</div>
	<!--<div class="background-image-layer review_bg" id="reviews_bg">
	</div>-->
</section>

<section id="split-img" class="section">
    <div class="content-wrapper">
		<div class="half one">
			<div class="background-image-layer split_img_bg_l" id="split_img_bg_one"></div>
		</div>				
		<div class="half two">
			<div class="background-image-layer split_img_bg_r" id="split_img_bg_two"></div>
		</div>
	</div>
</section>

<section id="experience" class="section">	
    <div class="content-wrapper">
		<div class="half one">
			<div class="exp_slider" id="experience_one">
				<div class="exp_slides">
					<h3><?php the_field('experience_title'); ?></h3>
					<p><?php the_field('experience_content'); ?></p>				
				</div>
				<a class="btn-default" href="<?php the_field('book_tickets_url', 5); ?>">Book Tickets</a>
			</div>
		</div>				
		<div class="half two">			
		</div>
	</div>
	<div class="background-image-layer experience_bg" id="experience_bg">
	</div>
</section>

<section id="venue" class="section">
    <div class="content-wrapper">
		<div class="half one"></div>				
		<div class="half two">
			<div class="venue_wrap" id="venue_one">
				<img src="<?php echo get_home_url(); ?>/wp-content/themes/lukejermay/images/ImpossibleManchester-Brand.png" alt="The Impossible Gin Bar, Manchester" />
				<h3><?php the_field('venue_title'); ?></h3>
				<p><?php the_field('venue_content'); ?></p>
			</div>
		</div>
	</div>	
	<div class="venue-half-overlay"></div>
	<div class="background-image-layer venue_bg" id="venue_bg">
	</div>
</section>

<section id="testimonial" class="section">	
    <div class="content-wrapper">
		<div class="half one">
			<div class="test-slider">
				<h3><?php the_field('rules_title'); ?></h3>
				<p><?php the_field('rules_content'); ?></p>
				<div class="line_slider">
					<div id="r_one" class="line-slide" data-page="1">
						<hr />
					</div>
					<div id="r_two" class="line-slide" data-page="2">
						<hr />
					</div>
					<div id="r_three" class="line-slide" data-page="3">
						<hr />
					</div>
				</div>
			</div>
		</div>				
		<div class="half two">				
			<div class="rules ln_slidr">
				<div class="rule r_one" id="testimonial_one">
					<span>No. 1</span>
					<p><?php the_field('rule_one'); ?></p>
				</div>			
				<div class="rule r_two" id="testimonial_two">
					<span>No. 2</span>
					<p><?php the_field('rule_two'); ?></p>
				</div>
				<div class="rule r_three" id="testimonial_three">
					<span>No. 3</span>
					<p><?php the_field('rule_three'); ?></p>
				</div>
			</div>
		</div>
		<div id="testimonial_line_top"></div>
	</div>
	<div class="background-image-layer testimonial_bg" id="testimonial_bg">
	</div>	
</section>

<section id="booking" class="section">
    <div class="content-wrapper">
		<div class="full">
			<h3><?php the_field('book_tickets_title'); ?></h3>
			<p><?php the_field('book_tickets_strapline'); ?></p>
			<div class="eventbrite">
				<?php
					$events = new Eventbrite_Query( apply_filters( 'eventbrite_query_args', array(
						'display_private' => true,
						'status' => 'live',
						'limit' => 6,
						'organizer_id' => 10586811533,
					) ) );
					if ( $events->have_posts() ) :
						while ( $events->have_posts() ) : $events->the_post(); 
						
						$date_format = get_option( 'date_format' );	
						$time_format = get_option( 'time_format' );
						$date = mysql2date( $date_format, eventbrite_event_start()->local );
						$time = mysql2date( $time_format, eventbrite_event_start()->local );
						$status = $events->query_vars['status'];
				
						$tickets = get_post()->tickets;

						// Check each ticket.
						foreach ( $tickets as $ticket ) {			
							$total = $ticket->quantity_total;
							$sold = $ticket->quantity_sold;							
						}
							$xcdn = $total - $sold;
							$privateevent = 'tickets-availabile';
							if ($xcdn == 0) {
								$privateevent = 'tickets-sold-out';
							}
				?>
					<p><span class="available <?php echo $status . ' ' . $privateevent; ?>"><?php echo $date; ?> <i><?php echo 'From ' . $time; ?></i></span> <a class="btn-default <?php if($xcdn == 0) : echo 'disabled-button'; endif; ?>" target="_blank" href="<?php if($xcdn == 0) : echo '#'; else: echo eventbrite_event_eb_url().'#tickets'; endif; ?>"><?php if($xcdn == 0) : echo 'Sold Out'; else : echo 'Book Tickets'; endif; ?></a></p>
				
				<?php 
					endwhile;
					endif;
					wp_reset_postdata();
				?>
			</div>
		</div>
		<div id="booking_line">
			<svg width="66px" height="66px" viewBox="0 0 66 66" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g id="Group" transform="translate(1.000000, 1.000000)" stroke="#FFFFFF" stroke-width="2">
						<circle id="Oval" cx="31.5" cy="31.5" r="10.5"></circle>
					</g>
				</g>
			</svg>
		</div>
	</div>
</section>