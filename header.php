<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nuwera - Heavy Metal Band</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://nuwera.band/wp-content/uploads/2024/09/cropped-Nuwera-Logo-White-192x192.png"
        sizes="192x192">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site main_page_wrapper position-relative">
        <a href="#" id="back-to-top-link" class="scroll-to back-to-top-visible">
            <svg width="63" height="46" viewBox="0 0 63 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clippath="url(#clip0_77_1481)">
                    <path d="M0.180725 23H62.1807" stroke="currentColor" stroke-width="2"></path>
                    <path d="M62.1807 23C49.3401 23 38.9307 12.7025 38.9307 0" stroke="currentColor" stroke-width="2"></path>
                    <path d="M38.9307 46C38.9307 33.2974 49.3401 23 62.1807 23" stroke="currentColor" stroke-width="2">
                    </path>
                </g>
                <defs>
                    <clipPath id="clip0_77_1481">
                        <rect width="62" height="46" fill="#272727" transform="translate(0.180725)"></rect>
                    </clipPath>
                </defs>
            </svg>
		</a>
        <div id="content" class="site-content">
            <header id="header">
                <nav>  
                    <div class="d-block d-md-none p-3">
                        <i class="fa fa-bars"></i>
                    </div>
                    <div id="mobile-menu" class="d-none justify-content-center align-items-center">
                         <ul> 
                            <li><a href="#home" class="menu-link">Home</a></li>
                            <li><a href="#latest-single" class="menu-link">Latest Single</a></li>
                            <li><a href="#all-releases" class="menu-link">All Releases</a></li>
                            <li><a href="#about-us" class="menu-link">About Us</a></li>
                            <li><a href="#meet-the-band" class="menu-link">Meet The Band</a></li>
                            <li><a href="#shop-now" class="menu-link">Shop Now</a></li>
                        </ul>
                    </div>
                    <div id="desktop-menu" class="d-none d-md-block">
                        <ul class="p-5">
                            <li><a href="#home" class="menu-link">Home</a></li>
                            <li><a href="#latest-single" class="menu-link">Latest Single</a></li>
                            <li><a href="#all-releases" class="menu-link">All Releases</a></li>
                            <li><a href="#about-us" class="menu-link">About Us</a></li>
                            <li><a href="#meet-the-band" class="menu-link">Meet The Band</a></li>
                            <li><a href="#shop-now" class="menu-link">Shop Now</a></li>
                        </ul>
                    </div>
                </nav>
            </header>

<script>
	jQuery(function($) {
		// Hide #back-to-top-link when near the top
		$(window).on('scroll', function() {
			if ($(window).scrollTop() < 100) {
				$('#back-to-top-link').fadeOut();
			} else {
				$('#back-to-top-link').fadeIn();
			}
		});
	});

</script>