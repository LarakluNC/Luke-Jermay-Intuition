<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Luke_Jermay
 */

?>

<div class="entry-content wrapper">
	<section id="trailer">
			<div class="full">
				<p id="trail_one"><span>Watch the trailer</span></p>
				<p id="trail_two"><a href="" class="play-trailer">Play</a></p>
			</div>
			<div class="background-image-layer trailer_bg" id="trail_bg"></div>
		</section>

		<section id="show">
			<div class="full show-centre" id="show_one">
				<h3>The Show</h3>
				<p>Join Luke for an evening of mystery and wonder. Sed cursus ante dapibus diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
			</div>
			<div class="background-image-layer show_bg_l" id="show_bg_one"></div>
			<div class="background-image-layer show_bg_r" id="show_bg_two"></div>
		</section>

		<section id="split-img">
			<div class="half one">
				<div class="background-image-layer split_img_bg_l" id="split_img_bg_one"></div>
			</div>				
			<div class="half two">
				<div class="background-image-layer split_img_bg_r" id="split_img_bg_two"></div>
			</div>
		</section>

		<section id="experience">
			<div class="half one">
				<div class="exp_slider" id="experience_one" data-aos="hide" data-aos-offset="1400" data-aos-duration="8000" data-aos-anchor="#experience">
					<h3>The Experience</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
					<a class="btn-default">Book Tickets</a>
				</div>
				<div class="background-image-layer experience_bg_l" id="experience_bg_one"></div>
			</div>				
			<div class="half two">				
				<div class="background-image-layer experience_bg_r" id="experience_bg_two"></div>
			</div>
		</section>

		<section id="venue">
			<div class="half one"></div>				
			<div class="half two">
				<div class="venue_wrap" id="venue_one" data-aos="hide" data-aos-offset="1400" data-aos-duration="5000" data-aos-anchor="#venue">
					<img src="<?php echo get_home_url(); ?>/wp-content/themes/lukejermay/images/ImpossibleManchester-Brand.png" alt="The Impossible Gin Bar, Manchester" />
					<h3>The Venue</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
				</div>
			</div>
			<div class="background-image-layer venue_bg" id="venue_bg"></div>
		</section>

		<section id="testimonial">
			<div class="half one" id="testimonial_one">
				<div class="test-slider" data-aos="hide" data-aos-offset="1400" data-aos-duration="5000" data-aos-anchor="#testimonial">
					<h3>Three Simple Rules</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
				</div>
				<div class="background-image-layer testimonial_bg_l" id="testimonial_bg_one"></div>	
			</div>				
			<div class="half two">				
				<div class="rules">
					<div class="rule r_one" id="testimonial_two" data-aos="hide" data-aos-offset="1400" data-aos-duration="5000" data-aos-anchor="#testimonial">
						<span>No. 1</span>
						<p>Dress for an evening out, not an evening in.</p>
					</div>		<?php /*				
					<div class="rule r_two">
						<span>No. 2</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="rule r_three">
						<span>No. 3</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>	*/ ?>
				</div>
				<div class="background-image-layer testimonial_bg_r" id="testimonial_bg_two"></div>	
			</div>
		</section>

		<section id="booking">
			<div class="full">
				<h3>Book Tickets</h3>
				<p>Tickets are sold as pairs. Making this an ideal date night gift.</p>
				<div class="eventbrite">
					<a class="btn-default">Book Tickets</a>
				</div>
			</div>
		</section>
	<?php
	the_content();

	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lukejermay' ),
		'after'  => '</div>',
	) );
	?>
</div><!-- .entry-content -->
