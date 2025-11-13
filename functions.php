<?php

/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

if (!function_exists('wp_bootstrap_starter_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function wp_bootstrap_starter_setup()
    {
        /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
	 */
        load_theme_textdomain('wp-bootstrap-starter', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
        add_theme_support('title-tag');

        /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'wp-bootstrap-starter'),
        ));

        /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
        add_theme_support('html5', array(
            'comment-form',
            'comment-list',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('wp_bootstrap_starter_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        function wp_boostrap_starter_add_editor_styles()
        {
            add_editor_style('custom-editor-style.css');
        }
        add_action('admin_init', 'wp_boostrap_starter_add_editor_styles');
    }
endif;
add_action('after_setup_theme', 'wp_bootstrap_starter_setup');


/**
 * Add Welcome message to dashboard
 */
function wp_bootstrap_starter_reminder()
{
    $theme_page_url = 'https://afterimagedesigns.com/wp-bootstrap-starter/?dashboard=1';

    if (!get_option('triggered_welcomet')) {
        $message = sprintf(
            __('Welcome to WP Bootstrap Starter Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'wp-bootstrap-starter'),
            esc_url($theme_page_url)
        );

        printf(
            '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
            $message
        );
        add_option('triggered_welcomet', '1', '', 'yes');
    }
}
add_action('admin_notices', 'wp_bootstrap_starter_reminder');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width()
{
    $GLOBALS['content_width'] = apply_filters('wp_bootstrap_starter_content_width', 1170);
}
add_action('after_setup_theme', 'wp_bootstrap_starter_content_width', 0);


/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts()
{
    // load bootstrap css
    wp_enqueue_style('wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css');

    // fontawesome cdn
    wp_enqueue_style('wp-bootstrap-pro-fontawesome-cdn', get_template_directory_uri() . '/inc/assets/css/font-awsome.css');
    // load bootstrap css

    // load WP Bootstrap Starter styles
    wp_enqueue_style('wp-bootstrap-starter-style', get_stylesheet_uri());

    // ============= Load Custom stylesheets =============

    wp_enqueue_style('swiper', get_template_directory_uri() . '/inc/assets/css/swiper.min.css');

    if (is_front_page()) {
        // wp_enqueue_style( 'animate_headlines', get_template_directory_uri() . '/inc/assets/css/animate_headlines.css' );
    }
    $version_custom_style = filemtime(get_template_directory() . '/inc/assets/css/custom_style.css');
    $version_responsive_style = filemtime(get_template_directory() . '/inc/assets/css/responsive.css');
    $version_font_awesome_icons = filemtime(get_template_directory() . '/inc/assets/css/all.min.css');
    wp_enqueue_style('custom_style', get_template_directory_uri() . '/inc/assets/css/custom_style.css', array(), $version_custom_style);
    wp_enqueue_style('responsive_style', get_template_directory_uri() . '/inc/assets/css/responsive.css', array(), $version_responsive_style);
    wp_enqueue_style('font-awesome-icons', get_template_directory_uri() . '/inc/assets/css/all.min.css', array(), $version_font_awesome_icons);
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));

    wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script('html5hiv', get_template_directory_uri() . '/inc/assets/js/html5.js', array(), '3.7.0', false);
    wp_script_add_data('html5hiv', 'conditional', 'lt IE 9');

    // load bootstrap js
    wp_enqueue_script('wp-bootstrap-starter-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true);
    wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true);

    // ========================================================================
    // Add all custom js libraries here
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/inc/assets/js/swiper.min.js', array(), '1', true);

    // query loader
    // wp_enqueue_script('queryloader2-js', get_template_directory_uri() . '/inc/assets/js/queryloader2.min.js', array(), '1', true);
    // jquery visibale
    // wp_enqueue_script('queryvisible-js', get_template_directory_uri() . '/inc/assets/js/jquery.visible.js', array(), '1', true);
    // wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.js', array(), '', true );
    wp_enqueue_script('wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true);

    // WooCommerce checkout nonce fix
    wp_enqueue_script('wc-checkout-fix', get_template_directory_uri() . '/inc/assets/js/wc-checkout-fix.js', array('jquery'), '1.0', true);

    // Localize script with nonce for WooCommerce REST API
    // Use wp_rest nonce which is the standard for REST API requests
    wp_localize_script('wc-checkout-fix', 'wc_store_api_nonce', array(
        'nonce' => wp_create_nonce('wp_rest'),
        'url' => rest_url(),
        'wc_nonce' => wp_create_nonce('wc_store_api')
    ));
}
add_action('wp_enqueue_scripts', 'wp_bootstrap_starter_scripts');


function wp_bootstrap_starter_password_form()
{
    global $post;
    $label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
    $o = '<form action="' . esc_url(site_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">
    <div class="d-block mb-3">' . __("To view this protected post, enter the password below:", "wp-bootstrap-starter") . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __("Password:", "wp-bootstrap-starter") . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__("Submit", "wp-bootstrap-starter") . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter('the_password_form', 'wp_bootstrap_starter_password_form');

function my_myme_types($mime_types)
{
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);



// PHP Check if time is between two times regardless of date
function TimeIsBetweenTwoTimes($from, $till, $input)
{
    $f = DateTime::createFromFormat('H:i', $from);
    $t = DateTime::createFromFormat('H:i', $till);
    $i = DateTime::createFromFormat('H:i', $input);
    if ($f > $t) $t->modify('+1 day');
    return ($f <= $i && $i <= $t) || ($f <= $i->modify('+1 day') && $i <= $t);
}
function wpb_custom_new_menu()
{
    register_nav_menus(array(
        'main-menu' => __('Main-Menu'),
    ));
}
add_action('init', 'wpb_custom_new_menu');
function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
function overrideSubmenuClasses($classes)
{
    $classes[] = 'dropdown-menu';
    $classes[] = '';

    return $classes;
}
add_action('nav_menu_submenu_css_class', 'overrideSubmenuClasses');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'page_title' => 'Website Settings',
            'menu_title' => 'Website Settings',
            'menu_slug' => 'website-settings',
            'capabality' => 'edit_posts'
        )
    );
}

add_image_size('main_homepage_img', 1903, 690, true);
add_image_size('main_img_company_services', 1903, 300, true);
add_image_size('services_img', 656, 580, true);
add_image_size('footer_img', 1903, 340, true);


// Add backend styles for Gutenberg.
add_action('enqueue_block_editor_assets', 'gutenberg_editor_assets');

function gutenberg_editor_assets()
{
    // Load the theme styles within Gutenberg.
    wp_enqueue_style('my-gutenberg-editor-styles', get_theme_file_uri('/assets/gutenberg-editor-styles.css'), FALSE);
}
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // register a testimonial block.
        // acf_register_block_type(
        //     array(
        //         'name'              => 'Block1',
        //         'title'             => __('Block1'),
        //         'description'       => __('This is the first Block of Homepage'),
        //         'render_template'   => 'blocks/Homepage_Blocks/block1.php',
        //         'category'          => 'formatting',
        //         'icon'              => 'admin-comments',
        //         'keywords'          => array('testimonial', 'quote'),
        //     )
        // );
    }
}

// function nuwera_register_release_cpt() {
//     $labels = array(
//         'name'               => 'Releases',
//         'singular_name'      => 'Release',
//         'menu_name'          => 'Releases',
//         'name_admin_bar'     => 'Release',
//         'add_new'            => 'Add New',
//         'add_new_item'       => 'Add New Release',
//         'new_item'           => 'New Release',
//         'edit_item'          => 'Edit Release',
//         'view_item'          => 'View Release',
//         'all_items'          => 'All Releases',
//         'search_items'       => 'Search Releases',
//         'not_found'          => 'No releases found.',
//         'not_found_in_trash' => 'No releases found in Trash.',
//     );

//     $args = array(
//         'labels'             => $labels,
//         'public'             => true,
//         'has_archive'        => true,
//         'rewrite'            => array('slug' => 'releases'),
//         'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
//         'show_in_rest'       => true, // Enable Gutenberg
//         'menu_icon'          => 'dashicons-album',
//     );

//     register_post_type('release', $args);

//      $labels = array(
//         'name'               => 'Members',
//         'singular_name'      => 'Member',
//         'menu_name'          => 'Members',
//         'name_admin_bar'     => 'Member',
//         'add_new'            => 'Add New',
//         'add_new_item'       => 'Add New Member',
//         'new_item'           => 'New Member',
//         'edit_item'          => 'Edit Member',
//         'view_item'          => 'View Member',
//         'all_items'          => 'All Members',
//         'search_items'       => 'Search Members',
//         'not_found'          => 'No members found.',
//         'not_found_in_trash' => 'No members found in Trash.',
//     );

//     $args = array(
//         'labels'             => $labels,
//         'public'             => true,
//         'has_archive'        => true,
//         'rewrite'            => array('slug' => 'member'),
//         'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
//         'show_in_rest'       => true, // Enable Gutenberg
//         'menu_icon'          => 'dashicons-businessperson',
//     );

//     register_post_type('member', $args);
// }
// add_action('init', 'nuwera_register_release_cpt');

// post-type for band members

// function nuwera_register_member_cpt() {
//     $labels = array(
//         'name'               => 'Members',
//         'singular_name'      => 'Member',
//         'menu_name'          => 'Members',
//         'name_admin_bar'     => 'Member',
//         'add_new'            => 'Add New',
//         'add_new_item'       => 'Add New Member',
//         'new_item'           => 'New Member',
//         'edit_item'          => 'Edit Member',
//         'view_item'          => 'View Member',
//         'all_items'          => 'All Members',
//         'search_items'       => 'Search Members',
//         'not_found'          => 'No members found.',
//         'not_found_in_trash' => 'No members found in Trash.',
//     );

//     $args = array(
//         'labels'             => $labels,
//         'public'             => true,
//         'has_archive'        => true,
//         'rewrite'            => array('slug' => 'members'),
//         'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
//         'show_in_rest'       => true, // Enable Gutenberg
//         'menu_icon'          => 'dashicons-businessperson',
//     );

//     register_post_type('member', $args);
// }
// add_action('init', 'nuwera_register_member_cpt');


function nuwera_register_cpts() {

    // Define all CPTs in one array
    $cpts = array(
        'release' => array(
            'singular' => 'Release',
            'plural'   => 'Releases',
            'slug'     => 'releases',
            'icon'     => 'dashicons-album',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        ),
        'member' => array(
            'singular' => 'Member',
            'plural'   => 'Members',
            'slug'     => 'members',
            'icon'     => 'dashicons-businessperson',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        ),
        // Add more CPTs here easily
    );

    // Loop through each CPT and register it
    foreach ($cpts as $key => $cpt) {
        $labels = array(
            'name'               => $cpt['plural'],
            'singular_name'      => $cpt['singular'],
            'menu_name'          => $cpt['plural'],
            'name_admin_bar'     => $cpt['singular'],
            'add_new'            => 'Add New',
            'add_new_item'       => 'Add New ' . $cpt['singular'],
            'new_item'           => 'New ' . $cpt['singular'],
            'edit_item'          => 'Edit ' . $cpt['singular'],
            'view_item'          => 'View ' . $cpt['singular'],
            'all_items'          => 'All ' . $cpt['plural'],
            'search_items'       => 'Search ' . $cpt['plural'],
            'not_found'          => 'No ' . strtolower($cpt['plural']) . ' found.',
            'not_found_in_trash' => 'No ' . strtolower($cpt['plural']) . ' found in Trash.',
        );

        $args = array(
            'labels'       => $labels,
            'public'       => true,
            'has_archive'  => true,
            'rewrite'      => array('slug' => $cpt['slug']),
            'supports'     => $cpt['supports'],
            'show_in_rest' => true,
            'menu_icon'    => $cpt['icon'],
        );

        register_post_type($key, $args);
    }
}

add_action('init', 'nuwera_register_cpts');

// Enable direct bank transfer and check payments as fallback
add_filter('woocommerce_payment_gateways', function($gateways) {
    // This ensures basic payment methods are available
    return $gateways;
});

// Ensure WooCommerce session is initialized for checkout
add_action('woocommerce_init', function() {
    if (is_null(WC()->session)) {
        WC()->session = new WC_Session_Handler();
        WC()->session->init();
    }
});

// Handle Store API checkout payment processing
add_action('woocommerce_store_api_checkout_update_order_from_request', function($order, $request) {
    error_log('Store API checkout order: ' . $order->get_id());
    error_log('Payment method from request: ' . $request['payment_method']);
}, 10, 2);

// Debug payment gateway responses
add_action('woocommerce_checkout_process', function() {
    if (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('WooCommerce checkout process started');
        error_log('Selected payment method: ' . (isset($_POST['payment_method']) ? $_POST['payment_method'] : 'none'));
    }
});

// Log payment gateway errors
add_action('woocommerce_after_checkout_validation', function($data, $errors) {
    if ($errors->has_errors() && defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Checkout validation errors: ' . print_r($errors->get_error_messages(), true));
    }
}, 10, 2);

// for digital downlaods
add_action('woocommerce_email_after_order_table', function($order, $sent_to_admin, $plain_text, $email){
    if ( $email->id === 'customer_processing_order' ) {
        $downloads = $order->get_downloadable_items();
        if ($downloads) {
            echo '<h2>Your Downloads</h2><ul>';
            foreach ($downloads as $download) {
                echo '<li><a href="'.esc_url($download['download_url']).'">'.esc_html($download['name']).'</a></li>';
            }
            echo '</ul>';
        }
    }
}, 10, 4);


add_action('woocommerce_thankyou', function($order_id){
    $order = wc_get_order($order_id);
    if ($order && $order->has_downloadable_item()) {
        echo '<div class="woocommerce-info" style="margin-top:20px;">';
        echo '<strong>Your downloads are ready!</strong><br>';
        echo 'You can access them anytime from your <a href="'.esc_url(get_permalink( get_option('woocommerce_myaccount_page_id') ).'downloads/').'">Downloads page</a>.';
        echo '</div>';
    }
});


add_action('woocommerce_thankyou', function($order_id){
    $order = wc_get_order($order_id);
    if ($order && !is_user_logged_in() && $order->has_downloadable_item()) {
        echo '<p>Please check your email for your secure download link.</p>';
    }
});


// // auto login after checkout
// add_action('woocommerce_thankyou', function($order_id){
//     $order = wc_get_order($order_id);
//     if ($order && !$order->get_user_id()) {
//         $user = get_user_by('email', $order->get_billing_email());
//         if ($user && !is_user_logged_in()) {
//             wp_set_current_user($user->ID);
//             wp_set_auth_cookie($user->ID);
//         }
//     }
// });

// Convert WooCommerce variation dropdowns to radio buttons
add_filter('woocommerce_dropdown_variation_attribute_options_html', 'convert_variations_to_radio_buttons', 10, 2);
function convert_variations_to_radio_buttons($html, $args) {
    $args = wp_parse_args($args, array(
        'options'          => false,
        'attribute'        => false,
        'product'          => false,
        'selected'         => false,
        'name'             => '',
        'id'               => '',
        'class'            => '',
    ));

    $options   = $args['options'];
    $product   = $args['product'];
    $attribute = $args['attribute'];
    $name      = $args['name'] ? $args['name'] : 'attribute_' . sanitize_title($attribute);
    $id        = $args['id'] ? $args['id'] : sanitize_title($attribute);
    $class     = $args['class'];

    if (empty($options) && !empty($product) && !empty($attribute)) {
        $attributes = $product->get_variation_attributes();
        $options    = $attributes[$attribute];
    }

    if (!empty($options)) {
        if ($product && taxonomy_exists($attribute)) {
            $terms = wc_get_product_terms($product->get_id(), $attribute, array('fields' => 'all'));

            $html = '<div class="variation-radio-buttons ' . esc_attr($class) . '">';

            foreach ($terms as $term) {
                if (in_array($term->slug, $options, true)) {
                    $checked = sanitize_title($args['selected']) === $term->slug ? 'checked' : '';
                    $html .= '<label class="variation-radio-label">';
                    $html .= '<input type="radio" name="' . esc_attr($name) . '" value="' . esc_attr($term->slug) . '" ' . $checked . ' data-attribute_name="attribute_' . esc_attr(sanitize_title($attribute)) . '">';
                    $html .= '<span class="variation-radio-text">' . esc_html(apply_filters('woocommerce_variation_option_name', $term->name)) . '</span>';
                    $html .= '</label>';
                }
            }

            $html .= '</div>';
        } else {
            $html = '<div class="variation-radio-buttons ' . esc_attr($class) . '">';

            foreach ($options as $option) {
                $checked = sanitize_title($args['selected']) === sanitize_title($option) ? 'checked' : '';
                $html .= '<label class="variation-radio-label">';
                $html .= '<input type="radio" name="' . esc_attr($name) . '" value="' . esc_attr($option) . '" ' . $checked . ' data-attribute_name="attribute_' . esc_attr(sanitize_title($attribute)) . '">';
                $html .= '<span class="variation-radio-text">' . esc_html(apply_filters('woocommerce_variation_option_name', $option)) . '</span>';
                $html .= '</label>';
            }

            $html .= '</div>';
        }
    }

    return $html;
}

// Add JavaScript to handle variation radio button selection
add_action('wp_footer', 'variation_radio_buttons_script');
function variation_radio_buttons_script() {
    if (!is_product()) {
        return;
    }
    ?>
    <script type="text/javascript">
        jQuery(function($) {
            var $form = $('form.variations_form');
            var $addToCartBtn = $('.single_add_to_cart_button');

            if ($form.length) {
                // Initial state - disable button
                $addToCartBtn.prop('disabled', true).addClass('disabled');

                // Handle variation radio button changes
                $(document).on('change', '.variation-radio-buttons input[type="radio"]', function() {
                    var $radio = $(this);
                    var $currentForm = $radio.closest('form.variations_form');
                    var attributeName = $radio.data('attribute_name');
                    var value = $radio.val();

                    // Find and update the hidden select element
                    var $select = $currentForm.find('select[name="' + attributeName + '"]');
                    if ($select.length === 0) {
                        // If select doesn't exist, find by id
                        $select = $currentForm.find('select[id*="' + attributeName.replace('attribute_', '') + '"]');
                    }

                    if ($select.length > 0) {
                        $select.val(value).trigger('change');
                    }

                    // Trigger WooCommerce variation check
                    $currentForm.trigger('check_variations');
                    $currentForm.trigger('woocommerce_variation_select_change');
                });

                // Enable button when variation is found
                $form.on('found_variation', function(event, variation) {
                    console.log('Variation found:', variation);
                    $addToCartBtn.prop('disabled', false).removeClass('disabled');
                });

                // Disable button when variation is not selected or cleared
                $form.on('reset_data', function() {
                    console.log('Reset data');
                    $addToCartBtn.prop('disabled', true).addClass('disabled');
                });

                // Handle hide_variation event
                $form.on('hide_variation', function() {
                    console.log('Hide variation');
                    $addToCartBtn.prop('disabled', true).addClass('disabled');
                });

                // Log when form is initialized
                console.log('Variations form initialized');
            }
        });
    </script>
    <?php
}

// Remove WooCommerce category from single product page
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

// Customize single product page layout
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

// Re-add elements in custom order: Title, Price, Description, Variations, Add to Cart
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 8);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10);