<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

?>
<section class="page_404">
    <div class="container">
        <div class="text-center">
            <div class="title_404">
                <?php echo __('LOOKS LIKE YOU\'RE LOST', '404')?>
            </div>
            <div class="text_404 kh_light">
                <?php echo __('The page you are looking for is not available!', '404')?>
            </div>
            <a href="<?php echo esc_url( home_url( '/' )); ?>">
                <div class="main_btn btn_404">
                    <?php echo __('Go Back to Homepage', '404')?>
                </div>
            </a>
        </div>
    </div>
</section>
<style>
    body, html {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
    .page_404 {
        min-height: 100vh;
        width: 100vw;
        background: url('<?php echo get_template_directory_uri(); ?>/inc/assets/images/Nuwera-main-image.webp') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<?php
