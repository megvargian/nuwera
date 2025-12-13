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
            <a href="<?php echo esc_url( home_url( '/' )); ?>" name="404-home-link">
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
		font-family: "Poppins-Regular";
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
	.page_404 .container {
		padding: 60px 40px;
		max-width: 500px;
		box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
		text-align: center;
	}
	.title_404 {
		font-size: 4rem;
		font-weight: bold;
		color: #fff;
		margin-bottom: 24px;
		letter-spacing: 2px;
		font-family: "AlbertSans-ExtraBold";
	}
	.text_404 {
		font-size: 1.3rem;
		color: #fff;
		margin-bottom: 32px;
    	font-family: "Poppins-Regular";
	}
	.btn_404 {
		background: #ff2b59;
		color: #fff;
		padding: 16px 32px;
		border-radius: 30px;
		font-size: 1.1rem;
		font-weight: bold;
		display: inline-block;
		transition: background 0.2s;
		box-shadow: 0 4px 16px rgba(255,43,89,0.2);
		text-align: center;
	}
	.btn_404:hover {
		background: #d81b4c;
		color: #fff;
		text-decoration: none;
	}
</style>
<?php
