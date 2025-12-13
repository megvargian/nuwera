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
    <title><?php wp_title('-', true, 'right'); bloginfo('name'); ?></title>
    <link rel="icon" href="https://nuwera.band/wp-content/uploads/2024/09/cropped-Nuwera-Logo-White-192x192.png" sizes="192x192">

    <?php
    // Dynamic Meta Description + OG and canonical (skipped if an SEO plugin is active)
    function nuwera_meta_description() {
        global $post, $product;
        $meta_desc = '';

        if (is_singular('product') && function_exists('wc_get_product')) {
            $product_obj = wc_get_product($post->ID);
            if ($product_obj) {
                $meta_desc = $product_obj->get_short_description();
            }
        }

        if (empty($meta_desc) && is_singular()) {
            $meta_desc = get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true);
            if (empty($meta_desc)) {
                $meta_desc = get_the_excerpt();
            }
        }

        if (empty($meta_desc) && (is_home() || is_front_page())) {
            $meta_desc = get_bloginfo('description');
        }

        if (empty($meta_desc)) {
            $meta_desc = get_bloginfo('description');
        }

        // Clean and limit
        $meta_desc = wp_strip_all_tags($meta_desc);
        $meta_desc = trim(preg_replace('/\s+/', ' ', $meta_desc));
        if (strlen($meta_desc) > 160) {
            $meta_desc = mb_substr($meta_desc, 0, 157) . '...';
        }

        echo '<meta name="description" content="' . esc_attr($meta_desc) . '" />\n';

        // Open Graph
        if (is_front_page() || is_home()) {
            $og_title = get_bloginfo('name');
            $og_url = home_url('/');
        } else {
            $og_title = get_the_title();
            $og_url = get_permalink();
        }
        $og_description = $meta_desc;
        $og_image = '';
        if (has_post_thumbnail($post->ID)) {
            $img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
            $og_image = $img[0];
        } else {
            $og_image = get_site_icon_url() ? get_site_icon_url() : get_template_directory_uri() . '/inc/assets/images/Groundless-Square-440x440.webp';
        }

        echo '<meta property="og:title" content="' . esc_attr($og_title) . '" />\n';
        echo '<meta property="og:description" content="' . esc_attr($og_description) . '" />\n';
        echo '<meta property="og:url" content="' . esc_url($og_url) . '" />\n';
        echo '<meta property="og:image" content="' . esc_url($og_image) . '" />\n';
        echo '<meta name="twitter:card" content="summary_large_image" />\n';

        // Canonical
        echo '<link rel="canonical" href="' . esc_url($og_url) . '" />\n';
    }
    // Skip if Yoast/Ra nkMath/AIOSEO/SEOPress is present to avoid duplicates
    $seoPluginDetected = defined('WPSEO_VERSION') || class_exists('WPSEO_Frontend') || function_exists('rank_math_head') || class_exists('SEOPress') || class_exists('AIOSEO\Plugin');
    if ( ! $seoPluginDetected ) {
        nuwera_meta_description();
    }
    ?>
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
                    <path d="M62.1807 23C49.3401 23 38.9307 12.7025 38.9307 0" stroke="currentColor" stroke-width="2">
                    </path>
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
            <header id="header" class="<?php echo !is_front_page() ? 'w-100' : 'position-fixed'; ?> ">
                <?php
                    $menu_items = [
                        'Home' => '#home',
                        'Latest Single' => '#latest-single',
                        'All Releases' => '#all-releases',
                        'About Us' => '#about-us',
                        'Meet The Band' => '#meet-the-band',
                        'Shop Now' => '#shop-now'
                    ];

                    function render_menu($menu_items) {
                        foreach ($menu_items as $label => $hash) {
                            $href = is_front_page() ? $hash : home_url('/') . $hash;
                            echo '<li><a href="' . esc_url($href) . '" class="menu-link">' . esc_html($label) . '</a></li>';
                        }
                    }
                ?>
                <nav class="<?php echo !is_front_page() ? 'non-homepage' : ''; ?>">
                    <div id="hamburger-icon" class="d-block d-md-none">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <div id="mobile-menu" class="slide-out d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-x"></i>
                        <ul>
                            <?php render_menu($menu_items); ?>
                        </ul>
                    </div>
                    <div id="desktop-menu" class="d-none d-md-block">
                        <ul class="<?php echo !is_front_page() ? 'px-3 py-4' : 'p-5'; ?>">
                            <?php if(!is_front_page()){?>
                            <a href="<?php echo home_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/cropped-Nuwera_Logo-White.webp"
                                    alt="My Website Logo" style="width: 150px;">
                            </a>
                            <?php }
                             render_menu($menu_items); ?>
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