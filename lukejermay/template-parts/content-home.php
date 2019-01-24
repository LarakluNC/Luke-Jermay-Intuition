<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Luke_Jermay
 */

?>


<div class="full" data-aos="zoom-in">
	<img class="mobile-imag-2" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/lukejermay/images/header/3_lukes.jpg">
	<h2 class="first-intro"><?php the_field('head_snippet', 5); ?></h2>
</div>
<div class="intuition-q1-left full show-centre" id="show_one" data-aos="zoom-in">
	<p><?php the_field('left_hand_info', 5); ?></p>
	<img class="mobile-imag-2" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/lukejermay/images/show/hands_mobile.jpg">
	<p class="mobile"><?php the_field('right_hand_info', 5); ?></p>
</div>
<div class="desktop intuition-q1-right full show-centre" id="show_one" data-aos="zoom-in">
	<p><?php the_field('right_hand_info', 5); ?></p>
</div>

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
	<div class="background-image-layer trailer_bg_bottom" id="trail_bg_bot">
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

<section id="booking" class="section">
    <div class="content-wrapper">
    	<div class="title-wrapper bottom-intu-logo">
			<?php /*<h2 class="middle-line" id="arc-title"><?php the_field('centre_banner_middle_line'); ?></h2>*/ ?>
			<img data-aos="fade-down" data-aos-duration="2000" data-aso-easing="ease-in" data-aos-once="true" data-aos-anchor-placement="top-center" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/lukejermay/images/Luke_LJ_Logomark.svg" alt="Luke Jermay" />
			<p data-aos="fade-left" data-aos-duration="2000" data-aso-easing="ease-in" data-aos-once="true" data-aos-anchor-placement="top-center" class="bottom-line"><span><svg id="left-line-title" width="13px" height="4px" viewBox="0 0 13 4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Home" transform="translate(-623.000000, -397.000000)" fill="#FEFEFE"><g id="Group" transform="translate(569.000000, 296.000000)"><path d="M66.5841535,104.318777 C66.5841535,103.763319 66.3026575,103.483843 65.7492618,103.483843 C65.6117126,103.483843 65.4709646,103.49083 65.3302165,103.504803 C65.1926673,103.515284 65.0423228,103.532751 64.8823819,103.557205 L55.3179134,104.280349 C54.9244587,104.332751 54.6813484,104.409607 54.5885827,104.510917 C54.4990157,104.608734 54.4382382,104.776419 54.4158465,105 L54,105 L54,101 L54.4158465,101 C54.4382382,101.230568 54.4990157,101.398253 54.5885827,101.49607 C54.6813484,101.59738 54.9244587,101.674236 55.3179134,101.723144 L64.8823819,102.446288 C65.0423228,102.470742 65.1926673,102.491703 65.3302165,102.502183 C65.4709646,102.516157 65.6117126,102.523144 65.7492618,102.523144 C66.3026575,102.523144 66.5841535,102.243668 66.5841535,101.68821 L67,101.68821 L67,104.318777 L66.5841535,104.318777 Z" id="Fill-28"></path></g></g></g></svg>INTUITION<svg id="right-line-title" width="13px" height="4px" viewBox="0 0 13 4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Home" transform="translate(-806.000000, -397.000000)" fill="#FEFEFE"><g id="Group" transform="translate(569.000000, 296.000000)"><path d="M237.415846,101.681223 C237.415846,102.236681 237.697343,102.516157 238.250738,102.516157 C238.388287,102.516157 238.529035,102.50917 238.669783,102.495197 C238.807333,102.484716 238.957677,102.467249 239.117618,102.442795 L248.682087,101.719651 C249.075541,101.667249 249.318652,101.590393 249.411417,101.489083 C249.500984,101.391266 249.561762,101.223581 249.584154,101 L250,101 L250,105 L249.584154,105 C249.561762,104.769432 249.500984,104.601747 249.411417,104.50393 C249.318652,104.40262 249.075541,104.325764 248.682087,104.276856 L239.117618,103.553712 C238.957677,103.529258 238.807333,103.508297 238.669783,103.497817 C238.529035,103.483843 238.388287,103.476856 238.250738,103.476856 C237.697343,103.476856 237.415846,103.756332 237.415846,104.31179 L237,104.31179 L237,101.681223 L237.415846,101.681223 Z" id="Fill-30"></path></g></g></g></svg></span></p>
		</div>
		<div class="full">
			<h3><?php the_field('book_tickets_title'); ?></h3>
			<p><?php the_field('book_tickets_strapline'); ?></p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>tour-dates" class="btn-default nav-header-button book-now-bottom">Book Now</a>
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