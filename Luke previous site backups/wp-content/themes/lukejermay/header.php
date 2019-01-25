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
	<link rel="stylesheet" href="https://use.typekit.net/vcc2qcx.css">
	<!-- Hotjar Tracking Code for http://www.jermay.com -->
	<script>
	   (function(h,o,t,j,a,r){
		   h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
		   h._hjSettings={hjid:949030,hjsv:6};
		   a=o.getElementsByTagName('head')[0];
		   r=o.createElement('script');r.async=1;
		   r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
		   a.appendChild(r);
	   })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122424950-1"></script>
	<script>
	 window.dataLayer = window.dataLayer || [];
	 function gtag(){dataLayer.push(arguments);}
	 gtag('js', new Date());

	 gtag('config', 'UA-122424950-1');
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lukejermay' ); ?></a>
<nav id="site-navigation" class="main-navigation">
	<div class="wrapper">
		<div class="mobile-only-menu">
			<div class="nav-top">
				<div class="menu-toggle">
					<a href="#" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<div class="open-eye">
						<svg width="35px" height="25px" viewBox="0 0 35 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<defs>
								<polygon id="path-1" points="0 0.843636364 34.223 0.843636364 34.223 25 0 25"></polygon>
							</defs>
							<g id="Menu_EYE" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g>
									<path d="M16.5,9 C16.9883721,9 17.4450904,9.09117551 17.870155,9.27352654 C18.2952196,9.45359818 18.6660207,9.70661022 18.9825581,10.0257245 C19.2990956,10.3448388 19.5478036,10.7186584 19.7286822,11.1449039 C19.9095607,11.5757082 20,12.0247476 20,12.5011397 C20,12.9752524 19.9095607,13.4242918 19.7286822,13.8550961 C19.5478036,14.2813416 19.2990956,14.6551612 18.9825581,14.9765549 C18.6660207,15.2956692 18.2952196,15.5464018 17.870155,15.7287528 C17.4450904,15.9088245 16.9883721,16 16.5,16 C16.0116279,16 15.5549096,15.9088245 15.1321059,15.7287528 C14.7047804,15.5464018 14.3339793,15.2956692 14.0174419,14.9765549 C13.7009044,14.6551612 13.4521964,14.2813416 13.2713178,13.8550961 C13.0904393,13.4242918 13,12.9752524 13,12.5011397 C13,12.0247476 13.0904393,11.5757082 13.2713178,11.1449039 C13.4521964,10.7186584 13.7009044,10.3448388 14.0174419,10.0257245 C14.3339793,9.70661022 14.7047804,9.45359818 15.1321059,9.27352654 C15.5549096,9.09117551 16.0116279,9 16.5,9 M16.5,10.3676327 C16.2286822,10.3676327 15.9573643,10.4177792 15.6860465,10.5180723 C15.4169897,10.6183654 15.1795866,10.7619668 14.9806202,10.9534354 C14.7816537,11.1449039 14.618863,11.3705633 14.4922481,11.6235754 C14.3656331,11.8811462 14.3023256,12.1729078 14.3023256,12.5011397 C14.3023256,12.8293715 14.3656331,13.1211332 14.4922481,13.3764246 C14.618863,13.6294367 14.7816537,13.8550961 14.9806202,14.0465646 C15.1795866,14.2380332 15.4169897,14.3816346 15.6860465,14.4819277 C15.9573643,14.5822208 16.2286822,14.6346467 16.5,14.6346467 C16.7713178,14.6346467 17.0426357,14.5822208 17.3139535,14.4819277 C17.5852713,14.3816346 17.8204134,14.2380332 18.0193798,14.0465646 C18.2183463,13.8550961 18.381137,13.6294367 18.5077519,13.3764246 C18.6343669,13.1211332 18.6976744,12.8293715 18.6976744,12.5011397 C18.6976744,12.1729078 18.6343669,11.8811462 18.5077519,11.6235754 C18.381137,11.3705633 18.2183463,11.1449039 18.0193798,10.9534354 C17.8204134,10.7619668 17.5852713,10.6183654 17.3139535,10.5180723 C17.0426357,10.4177792 16.7713178,10.3676327 16.5,10.3676327" id="Fill-1" fill="#FEFEFE"></path>
									<g id="Group-5">
										<mask id="mask-2" fill="white">
											<use xlink:href="#path-1"></use>
										</mask>
										<g id="Clip-4"></g>
										<path d="M17.1126667,25 C7.91,25 0.721,14.0350909 0.42,13.5670909 L0,12.9218182 L0.42,12.2741818 C0.721,11.8061818 7.91,0.843636364 17.1126667,0.843636364 C26.3153333,0.843636364 33.502,11.8085455 33.803,12.2741818 L34.223,12.9218182 L33.803,13.5670909 C33.502,14.0327273 26.3153333,25 17.1126667,25 M1.16666667,12.9218182 C2.807,15.1909091 10.3506667,22.6363636 17.1126667,22.6363636 C23.891,22.6363636 31.423,15.1909091 33.0563333,12.9218182 C31.4183333,10.6550909 23.877,3.20727273 17.1126667,3.20727273 C10.3506667,3.20727273 2.807,10.6527273 1.16666667,12.9218182" id="Fill-3" fill="#FEFEFE" mask="url(#mask-2)"></path>
									</g>
								</g>
							</g>
						</svg>
						</div>
						<div class="closed-eye">
							<svg width="35px" height="25px" viewBox="0 0 35 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<defs>
									<polygon id="path-1" points="0 0.843636364 34.223 0.843636364 34.223 25 0 25"></polygon>
								</defs>
								<g id="Menu_EYE_Close" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="Menu_EYE">
										<g id="Group-5">
											<mask id="mask-2" fill="white">
												<use xlink:href="#path-1"></use>
											</mask>
											<g id="Clip-4"></g>
											<path d="M17.1126667,25 C7.91,25 0.721,14.0350909 0.42,13.5670909 L0,12.9218182 L0.42,12.2741818 C0.721,11.8061818 7.91,0.843636364 17.1126667,0.843636364 C26.3153333,0.843636364 33.502,11.8085455 33.803,12.2741818 L34.223,12.9218182 L33.803,13.5670909 C33.502,14.0327273 26.3153333,25 17.1126667,25 M1.16666667,12.9218182 C2.807,15.1909091 10.3506667,22.6363636 17.1126667,22.6363636 C23.891,22.6363636 31.423,15.1909091 33.0563333,12.9218182 C31.4183333,10.6550909 23.877,3.20727273 17.1126667,3.20727273 C10.3506667,3.20727273 2.807,10.6527273 1.16666667,12.9218182" id="Fill-3" fill="#FEFEFE" mask="url(#mask-2)"></path>
										</g>
										<path d="M9,5 L25,21" id="Path-5" stroke="#FFFFFF"></path>
										<path d="M25,5 L9,21" id="Path-5" stroke="#FFFFFF"></path>
									</g>
								</g>
							</svg>
						</div>				
					</a>				
				</div>
				<div class="book-tix">
					<a class="btn-default nav-header-button" href="<?php if(!is_front_page() ){echo esc_url( home_url( '/' ) );} the_field('book_tickets_url', 5); ?>">Book Tickets</a>
				</div>				
			</div>
			<div id="primary-menu" class="nav-content">
				<div class="site-brand-wrap">
					<div class="title-wrapper">
						<p class="top-line"><span>An Audience With</span></p>
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/lukejermay/images/lj-full-logo.png" alt="Luke Jermay" />

						<p class="bottom-line"><span><svg id="left-line-title" width="13px" height="4px" viewBox="0 0 13 4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Home" transform="translate(-623.000000, -397.000000)" fill="#FEFEFE"><g id="Group" transform="translate(569.000000, 296.000000)"><path d="M66.5841535,104.318777 C66.5841535,103.763319 66.3026575,103.483843 65.7492618,103.483843 C65.6117126,103.483843 65.4709646,103.49083 65.3302165,103.504803 C65.1926673,103.515284 65.0423228,103.532751 64.8823819,103.557205 L55.3179134,104.280349 C54.9244587,104.332751 54.6813484,104.409607 54.5885827,104.510917 C54.4990157,104.608734 54.4382382,104.776419 54.4158465,105 L54,105 L54,101 L54.4158465,101 C54.4382382,101.230568 54.4990157,101.398253 54.5885827,101.49607 C54.6813484,101.59738 54.9244587,101.674236 55.3179134,101.723144 L64.8823819,102.446288 C65.0423228,102.470742 65.1926673,102.491703 65.3302165,102.502183 C65.4709646,102.516157 65.6117126,102.523144 65.7492618,102.523144 C66.3026575,102.523144 66.5841535,102.243668 66.5841535,101.68821 L67,101.68821 L67,104.318777 L66.5841535,104.318777 Z" id="Fill-28"></path></g></g></g></svg>The Mind Reader<svg id="right-line-title" width="13px" height="4px" viewBox="0 0 13 4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Home" transform="translate(-806.000000, -397.000000)" fill="#FEFEFE"><g id="Group" transform="translate(569.000000, 296.000000)"><path d="M237.415846,101.681223 C237.415846,102.236681 237.697343,102.516157 238.250738,102.516157 C238.388287,102.516157 238.529035,102.50917 238.669783,102.495197 C238.807333,102.484716 238.957677,102.467249 239.117618,102.442795 L248.682087,101.719651 C249.075541,101.667249 249.318652,101.590393 249.411417,101.489083 C249.500984,101.391266 249.561762,101.223581 249.584154,101 L250,101 L250,105 L249.584154,105 C249.561762,104.769432 249.500984,104.601747 249.411417,104.50393 C249.318652,104.40262 249.075541,104.325764 248.682087,104.276856 L239.117618,103.553712 C238.957677,103.529258 238.807333,103.508297 238.669783,103.497817 C238.529035,103.483843 238.388287,103.476856 238.250738,103.476856 C237.697343,103.476856 237.415846,103.756332 237.415846,104.31179 L237,104.31179 L237,101.681223 L237.415846,101.681223 Z" id="Fill-30"></path></g></g></g></svg></span></p>
					</div>
				</div>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
				) );
				?>
				<div class="navigation-footer">
					<div class="nf-contact">
						<p>To arrange to meet Luke or organise a marketing event please contact his marketing team at:</p>
						<p><a href="mailto:enquiries@lukejermay.com">enquiries@lukejermay.com</a></p>
					</div>
					<div class="site-info">
						<div class="social">
							<p>
								<a href="<?php the_field('facebook_url',5); ?>" target="_blank">
									<svg width="32px" height="32px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="Social" transform="translate(-1.000000, -2.000000)" fill="#FFFFFF">
												<g id="Group-2">
													<g id="Facebook" transform="translate(0.000000, 1.000000)">
														<path d="M1,1 L43,1 L43,43 L1,43 L1,1 Z M26.974375,15.511875 L23.8178125,15.511875 C23.44375,15.511875 23.028125,16.0040625 23.028125,16.658125 L23.028125,18.9375 L26.9765625,18.9375 L26.379375,22.188125 L23.028125,22.188125 L23.028125,31.9465625 L19.3028125,31.9465625 L19.3028125,22.188125 L15.923125,22.188125 L15.923125,18.9375 L19.3028125,18.9375 L19.3028125,17.025625 C19.3028125,14.2825 21.2059375,12.0534375 23.8178125,12.0534375 L26.974375,12.0534375 L26.974375,15.511875 L26.974375,15.511875 Z" id="Shape"></path>
													</g>
												</g>
											</g>
										</g>
									</svg>
								</a>
								<a href="<?php the_field('instagram_url',5); ?>" target="_blank">
									<svg width="32px" height="32px" viewBox="0 0 43 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="Social" transform="translate(-106.000000, -1.000000)" fill="#FFFFFF">
												<g id="Group-2">
													<g id="Instagram" transform="translate(105.000000, 0.000000)">
														<path d="M28.72,22.9972248 C28.72,26.6223913 25.7654,29.560592 22.12,29.560592 C18.4746,29.560592 15.52,26.6223913 15.52,22.9972248 C15.52,22.6231129 15.5596,22.2577521 15.6278,21.9033302 L13.32,21.9033302 L13.32,30.6479232 C13.32,31.2561286 13.815,31.7483811 14.4266,31.7483811 L29.8156,31.7483811 C30.425,31.7483811 30.92,31.2561286 30.92,30.6479232 L30.92,21.9033302 L28.6122,21.9033302 C28.6804,22.2577521 28.72,22.6231129 28.72,22.9972248 L28.72,22.9972248 Z M22.12,27.372803 C24.5488,27.372803 26.52,25.4125439 26.52,22.9972248 C26.52,20.5819056 24.5488,18.6216466 22.12,18.6216466 C19.6912,18.6216466 17.72,20.5819056 17.72,22.9972248 C17.72,25.4125439 19.6912,27.372803 22.12,27.372803 L22.12,27.372803 Z M27.4,18.4028677 L30.0378,18.4028677 C30.403,18.4028677 30.7,18.1075162 30.7,17.746531 L30.7,15.1233719 C30.7,14.7601989 30.403,14.4648474 30.0378,14.4648474 L27.4,14.4648474 C27.0348,14.4648474 26.7378,14.7601989 26.7378,15.1233719 L26.7378,17.746531 C26.74,18.1075162 27.037,18.4028677 27.4,18.4028677 L27.4,18.4028677 Z M1,1 L44,1 L44,44 L1,44 L1,1 Z M33.12,31.5055365 C33.12,32.8422757 32.02,33.9361702 30.6758,33.9361702 L13.5642,33.9361702 C12.22,33.9361702 11.12,32.8422757 11.12,31.5055365 L11.12,14.488913 C11.12,13.1521739 12.22,12.0582794 13.5642,12.0582794 L30.6758,12.0582794 C32.02,12.0582794 33.12,13.1521739 33.12,14.488913 L33.12,31.5055365 L33.12,31.5055365 Z" id="Shape"></path>
													</g>
												</g>
											</g>
										</g>
									</svg>
								</a>
								<a href="<?php the_field('twitter_url',5); ?>" target="_blank">
									<svg width="32px" height="32px" viewBox="0 0 44 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="Social" transform="translate(-52.000000, -1.000000)" fill="#FFFFFF">
												<g id="Group-2">
													<g id="Twitter" transform="translate(52.000000, 1.000000)">
														<path d="M24.2647412,1 L43,1 L43,19.7352588 C43.0793183,20.479306 43.12,21.2349015 43.12,22 C43.12,22.7650985 43.0793183,23.520694 43,24.2647412 L43,44 L1,44 L1,24.2647412 C0.920681695,23.520694 0.88,22.7650985 0.88,22 C0.88,21.2349015 0.920681695,20.479306 1,19.7352588 L1,1 L19.7352588,1 C20.479306,0.920681695 21.2349015,0.88 22,0.88 C22.7650985,0.88 23.520694,0.920681695 24.2647412,1 Z M30.591,18.1808 C30.5998,18.3612 30.602,18.5416 30.602,18.7176 C30.602,24.2176 26.4198,30.5558 18.7682,30.5558 C16.4186,30.5558 14.2318,29.8694 12.3926,28.6858 C12.716,28.7254 13.0482,28.7408 13.3848,28.7408 C15.334,28.7408 17.127,28.0786 18.5504,26.961 C16.731,26.9258 15.1954,25.7246 14.6652,24.0746 C14.9182,24.1208 15.1778,24.1472 15.4462,24.1472 C15.8246,24.1472 16.1942,24.0966 16.5418,24.002 C14.6388,23.6192 13.2044,21.9384 13.2044,19.9232 L13.2044,19.8726 C13.7654,20.1828 14.4078,20.372 15.0898,20.394 C13.9722,19.646 13.2396,18.3744 13.2396,16.929 C13.2396,16.1678 13.4442,15.4506 13.8028,14.8368 C15.8554,17.3536 18.9178,19.008 22.3762,19.1862 C22.3036,18.8804 22.2684,18.5636 22.2684,18.2358 C22.2684,15.9412 24.1296,14.0756 26.4286,14.0756 C27.6232,14.0756 28.7056,14.5816 29.4646,15.3912 C30.4128,15.202 31.3016,14.8588 32.1046,14.3814 C31.7944,15.3516 31.1366,16.1678 30.2764,16.6848 C31.119,16.5814 31.9198,16.3592 32.6656,16.027 C32.109,16.8608 31.4028,17.5956 30.591,18.1808 L30.591,18.1808 Z" id="Shape"></path>
													</g>
												</g>
											</g>
										</g>
									</svg>
								</a>
							</p>
						</div>
						<p>Design &amp; build by <a class="northern-comfort" href="http://northerncomfort.co.uk/">Northern Comfort</a></p>			
					</div>
				</div>
			</div>
		</div>
		<div class="all-devices-menu">
			<div id="ad-menu">
			<div class="nav-social-icons">
				<p>
					<a href="<?php the_field('facebook_url',5); ?>" target="_blank">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 29.1 29.1" style="enable-background:new 0 0 29.1 29.1;" xml:space="preserve">
							<style type="text/css">
								.st0{fill:#FFFFFF;}
								.st1{fill:none;}
							</style>
							<g id="Facebook" transform="translate(0.000000, 1.000000)">
								<path id="Shape_2_" class="st0" d="M20.1,6.8h-3.2c-0.4,0-0.8,0.5-0.8,1.1v2.3h3.9l-0.6,3.3h-3.4v9.8h-3.7v-9.8H9v-3.3h3.4V8.4
									c0-2.7,1.9-5,4.5-5h3.2V6.8L20.1,6.8z"/>
							</g>
							<rect class="st1" width="29.1" height="29.1"/>
						</svg>
					</a>
					<a href="<?php the_field('instagram_url',5); ?>" target="_blank">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 29.1 29.1" style="enable-background:new 0 0 29.1 29.1;" xml:space="preserve">
							<style type="text/css">
								.st0{fill:#FFFFFF;}
								.st1{fill:none;}
							</style>
							<g id="Instagram" transform="translate(105.000000, 0.000000)">
								<path id="Shape_1_" class="st0" d="M-83.9,14.3c0,3.6-3,6.6-6.6,6.6s-6.6-2.9-6.6-6.6c0-0.4,0-0.7,0.1-1.1h-2.3V22
									c0,0.6,0.5,1.1,1.1,1.1h15.4c0.6,0,1.1-0.5,1.1-1.1v-8.7H-84C-83.9,13.6-83.9,14-83.9,14.3L-83.9,14.3z M-90.5,18.7
									c2.4,0,4.4-2,4.4-4.4s-2-4.4-4.4-4.4s-4.4,2-4.4,4.4S-92.9,18.7-90.5,18.7L-90.5,18.7z M-85.2,9.7h2.6c0.4,0,0.7-0.3,0.7-0.7V6.5
									c0-0.4-0.3-0.7-0.7-0.7h-2.6c-0.4,0-0.7,0.3-0.7,0.7v2.6C-85.8,9.4-85.5,9.7-85.2,9.7L-85.2,9.7z M-79.5,22.8
									c0,1.3-1.1,2.4-2.4,2.4H-99c-1.3,0-2.4-1.1-2.4-2.4v-17c0-1.3,1.1-2.4,2.4-2.4h17.1c1.3,0,2.4,1.1,2.4,2.4V22.8L-79.5,22.8z"/>
							</g>
							<rect class="st1" width="29.1" height="29.1"/>
						</svg>
					</a>
					<a href="<?php the_field('twitter_url',5); ?>" target="_blank">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 29.1 29.1" style="enable-background:new 0 0 29.1 29.1;" xml:space="preserve">
							<style type="text/css">
								.st0{fill:#FFFFFF;}
								.st1{fill:none;}
							</style>
							<g id="Twitter" transform="translate(52.000000, 1.000000)">
								<path id="Shape" class="st0" d="M-29.4,9.5c0,0.2,0,0.4,0,0.5c0,5.5-4.2,11.8-11.8,11.8c-2.3,0-4.5-0.7-6.4-1.9
									c0.3,0,0.7,0.1,1,0.1c1.9,0,3.7-0.7,5.2-1.8c-1.8,0-3.4-1.2-3.9-2.9c0.3,0,0.5,0.1,0.8,0.1c0.4,0,0.7-0.1,1.1-0.1
									c-1.9-0.4-3.3-2.1-3.3-4.1v-0.1c0.6,0.3,1.2,0.5,1.9,0.5c-1.1-0.7-1.9-2-1.9-3.5c0-0.8,0.2-1.5,0.6-2.1c2.1,2.5,5.1,4.2,8.6,4.3
									c-0.1-0.3-0.1-0.6-0.1-1c0-2.3,1.9-4.2,4.2-4.2c1.2,0,2.3,0.5,3,1.3c0.9-0.2,1.8-0.5,2.6-1c-0.3,1-1,1.8-1.8,2.3
									c0.8-0.1,1.6-0.3,2.4-0.7C-27.9,8.2-28.6,8.9-29.4,9.5L-29.4,9.5z"/>
							</g>
							<rect class="st1" width="29.1" height="29.1"/>
						</svg>
					</a>
				</p>
			</div>
			<div class="main-nav">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
				) );
				?>
			</div>
			<div class="book-tix">
				<a class="btn-default nav-header-button" href="<?php if(!is_front_page() ){echo esc_url( home_url( '/' ) );} the_field('book_tickets_url', 5); ?>">Book Tickets</a>
			</div>
		</div>
	</div>
</nav>
<div id="page" class="site fullpage-wrapper parallax">	
	<?php if( is_front_page() ) { ?>
	<header id="masthead" class="site-header paroller_wrapper section up-scroll" data-anchor="page_1">				
    	<div class="content-wrapper">	
			<div class="site-brand-wrap">
				<div class="title-wrapper">
					<p data-aos="fade-right" data-aos-duration="2000" data-aso-easing="ease-in" data-aos-once="true" data-aos-anchor-placement="top-center" class="top-line"><span>An Audience With</span></p>
					<?php /*<h2 class="middle-line" id="arc-title"><?php the_field('centre_banner_middle_line'); ?></h2>*/ ?>
					<img data-aos="fade-down" data-aos-duration="2000" data-aso-easing="ease-in" data-aos-once="true" data-aos-anchor-placement="top-center" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/lukejermay/images/Luke_LJ_Logomark.svg" alt="Luke Jermay" />
					<p data-aos="fade-left" data-aos-duration="2000" data-aso-easing="ease-in" data-aos-once="true" data-aos-anchor-placement="top-center" class="bottom-line"><span><svg id="left-line-title" width="13px" height="4px" viewBox="0 0 13 4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Home" transform="translate(-623.000000, -397.000000)" fill="#FEFEFE"><g id="Group" transform="translate(569.000000, 296.000000)"><path d="M66.5841535,104.318777 C66.5841535,103.763319 66.3026575,103.483843 65.7492618,103.483843 C65.6117126,103.483843 65.4709646,103.49083 65.3302165,103.504803 C65.1926673,103.515284 65.0423228,103.532751 64.8823819,103.557205 L55.3179134,104.280349 C54.9244587,104.332751 54.6813484,104.409607 54.5885827,104.510917 C54.4990157,104.608734 54.4382382,104.776419 54.4158465,105 L54,105 L54,101 L54.4158465,101 C54.4382382,101.230568 54.4990157,101.398253 54.5885827,101.49607 C54.6813484,101.59738 54.9244587,101.674236 55.3179134,101.723144 L64.8823819,102.446288 C65.0423228,102.470742 65.1926673,102.491703 65.3302165,102.502183 C65.4709646,102.516157 65.6117126,102.523144 65.7492618,102.523144 C66.3026575,102.523144 66.5841535,102.243668 66.5841535,101.68821 L67,101.68821 L67,104.318777 L66.5841535,104.318777 Z" id="Fill-28"></path></g></g></g></svg>The Mind Reader<svg id="right-line-title" width="13px" height="4px" viewBox="0 0 13 4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Home" transform="translate(-806.000000, -397.000000)" fill="#FEFEFE"><g id="Group" transform="translate(569.000000, 296.000000)"><path d="M237.415846,101.681223 C237.415846,102.236681 237.697343,102.516157 238.250738,102.516157 C238.388287,102.516157 238.529035,102.50917 238.669783,102.495197 C238.807333,102.484716 238.957677,102.467249 239.117618,102.442795 L248.682087,101.719651 C249.075541,101.667249 249.318652,101.590393 249.411417,101.489083 C249.500984,101.391266 249.561762,101.223581 249.584154,101 L250,101 L250,105 L249.584154,105 C249.561762,104.769432 249.500984,104.601747 249.411417,104.50393 C249.318652,104.40262 249.075541,104.325764 248.682087,104.276856 L239.117618,103.553712 C238.957677,103.529258 238.807333,103.508297 238.669783,103.497817 C238.529035,103.483843 238.388287,103.476856 238.250738,103.476856 C237.697343,103.476856 237.415846,103.756332 237.415846,104.31179 L237,104.31179 L237,101.681223 L237.415846,101.681223 Z" id="Fill-30"></path></g></g></g></svg></span></p>
				</div>
			</div>
			<div class="site-branding wrapper">
				<div class="left-title" id="ban_one"><span><?php the_field('left_banner_text'); ?></span></div>
				<div class="centre-title" id="ban_two">
					<h3><?php the_field('centre_banner_top_line'); ?></h3>
					<span><?php the_field('centre_banner_bottom_line'); ?></span>		
					<a class="btn-default nav-header-button" href="<?php the_field('book_tickets_url', 5); ?>">Book Tickets</a>
				</div>
				<div class="right-title" id="ban_three"><span><?php the_field('right_banner_text',5); ?></span></div>
			</div>		
			
			<div id="header_line">
				<svg width="66px" height="66px" viewBox="0 0 66 66" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<g id="Group" transform="translate(1.000000, 1.000000)" stroke="#FFFFFF" stroke-width="2">
							<circle id="Oval" cx="32" cy="32" r="32"></circle>
							<circle id="Oval" cx="31.5" cy="31.5" r="10.5"></circle>
						</g>
					</g>
				</svg>
			</div>
		</div>
		<div class="background-image-layer header_masthead" id="ban_bg">
		</div>
	</header>
	<?php } ?>