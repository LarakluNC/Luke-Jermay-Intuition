<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Luke_Jermay
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lukejermay' ); ?></a>

	<header id="masthead" class="site-header">		
		<nav id="site-navigation" class="main-navigation">
			<div class="wrapper">
				<a href="#" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/lukejermay/images/logo.png" alt="Luke Jermay" /></a>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</div>
		</nav>
		
		<div class="site-branding wrapper">
			<div class="left-title" id="ban_one"><span><?php the_field('left_banner_text'); ?></span></div>
			<div class="centre-title" id="ban_two">
				<div class="title-wrapper">
					<p class="top-line"><span><?php the_field('centre_banner_top_line'); ?></span></p>
					<?php /*<h2 class="middle-line" id="arc-title"><?php the_field('centre_banner_middle_line'); ?></h2>*/ ?>
					<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/lukejermay/images/lj-full-logo.png" alt="Luke Jermay" />
					
					<p class="bottom-line"><span><svg id="left-line-title" width="13px" height="4px" viewBox="0 0 13 4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Home" transform="translate(-623.000000, -397.000000)" fill="#FEFEFE"><g id="Group" transform="translate(569.000000, 296.000000)"><path d="M66.5841535,104.318777 C66.5841535,103.763319 66.3026575,103.483843 65.7492618,103.483843 C65.6117126,103.483843 65.4709646,103.49083 65.3302165,103.504803 C65.1926673,103.515284 65.0423228,103.532751 64.8823819,103.557205 L55.3179134,104.280349 C54.9244587,104.332751 54.6813484,104.409607 54.5885827,104.510917 C54.4990157,104.608734 54.4382382,104.776419 54.4158465,105 L54,105 L54,101 L54.4158465,101 C54.4382382,101.230568 54.4990157,101.398253 54.5885827,101.49607 C54.6813484,101.59738 54.9244587,101.674236 55.3179134,101.723144 L64.8823819,102.446288 C65.0423228,102.470742 65.1926673,102.491703 65.3302165,102.502183 C65.4709646,102.516157 65.6117126,102.523144 65.7492618,102.523144 C66.3026575,102.523144 66.5841535,102.243668 66.5841535,101.68821 L67,101.68821 L67,104.318777 L66.5841535,104.318777 Z" id="Fill-28"></path></g></g></g></svg><?php the_field('centre_banner_bottom_line'); ?><svg id="right-line-title" width="13px" height="4px" viewBox="0 0 13 4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Home" transform="translate(-806.000000, -397.000000)" fill="#FEFEFE"><g id="Group" transform="translate(569.000000, 296.000000)"><path d="M237.415846,101.681223 C237.415846,102.236681 237.697343,102.516157 238.250738,102.516157 C238.388287,102.516157 238.529035,102.50917 238.669783,102.495197 C238.807333,102.484716 238.957677,102.467249 239.117618,102.442795 L248.682087,101.719651 C249.075541,101.667249 249.318652,101.590393 249.411417,101.489083 C249.500984,101.391266 249.561762,101.223581 249.584154,101 L250,101 L250,105 L249.584154,105 C249.561762,104.769432 249.500984,104.601747 249.411417,104.50393 C249.318652,104.40262 249.075541,104.325764 248.682087,104.276856 L239.117618,103.553712 C238.957677,103.529258 238.807333,103.508297 238.669783,103.497817 C238.529035,103.483843 238.388287,103.476856 238.250738,103.476856 C237.697343,103.476856 237.415846,103.756332 237.415846,104.31179 L237,104.31179 L237,101.681223 L237.415846,101.681223 Z" id="Fill-30"></path></g></g></g></svg></span></p>
				</div>
			</div>
			<div class="right-title" id="ban_three"><span><?php the_field('right_banner_text'); ?></span></div>
		</div>		
		<div class="background-image-layer header_masthead" id="ban_bg"></div>
	</header>

	<div id="content" class="site-content">
