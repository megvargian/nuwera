<?php
get_header();
$get_all_fields = get_fields();
?>
<div class="container py-5 single-release">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="row align-items-start">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <?php if ( has_post_thumbnail() ) : ?>
            <div class="release-cover-img mt-4">
                <?php the_post_thumbnail('large', ['class' => '']); ?>
            </div>
            <?php endif; ?>
            <div class="release-info mt-4" style="color:#fff;">
                <h1 class="release-title mb-3" style="color:#fff;"><?php the_title(); ?></h1>
                <p class="release-date" style="color:#fff;"><strong>Release Date:</strong>
                    <?php echo get_the_date('j F Y'); ?></p>
                <?php if ($get_all_fields['artist']){?>
                <p class="release-artist" style="color:#fff;"><strong>Artist:</strong>
                    <?php echo $get_all_fields['artist']; ?></p>
                <?php } ?>
                <?php if ($get_all_fields['genres']){?>
                <p class="release-artist" style="color:#fff;"><strong>Genres:</strong>
                    <?php echo $get_all_fields['genres']; ?></p>
                <?php } ?>
                <?php if ($get_all_fields['label']){?>
                <p class="release-label" style="color:#fff;"><strong>Label:</strong>
                    <?php echo $get_all_fields['label']; ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="release-content d-flex justify-content-center" style="color:#fff;">
                <div class="mt-4">
                    <div class="release-meta w-100" style="color:#fff;">
                        <?php
							the_content();
							?>
                    </div>
                </div>
            </div>
            <div class="social-share mt-4">
                <ul class="d-flex justify-content-start align-items-center flex-wrap">
                    <?php if($get_all_fields['shopify']){?>
                    <li>
                        <a class="fab fa-spotify" href="<?php echo $get_all_fields['shopify']; ?>">
                            <span class="sr-only">Share on Spotify</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($get_all_fields['apple']){?>
                    <li>
                        <a class="fab fa-apple" href="<?php echo $get_all_fields['apple']; ?>">
                            <span class="sr-only">Share on Apple Music</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($get_all_fields['amazon']){?>
                    <li>
                        <a class="fab fa-amazon" href="<?php echo $get_all_fields['amazon']; ?>">
                            <span class="sr-only">Share on Amazon Music</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($get_all_fields['bandcamp']){?>
                    <li>
                        <a class="fab fa-bandcamp" href="<?php echo $get_all_fields['bandcamp']; ?>">
                            <span class="sr-only">Share on Bandcamp</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($get_all_fields['youtube']){?>
                    <li>
                        <a class="fab fa-youtube" href="<?php echo $get_all_fields['youtube']; ?>">
                            <span class="sr-only">Share on YouTube</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($get_all_fields['deezer']){?>
                    <li>
                        <a class="fab fa-deezer" href="<?php echo $get_all_fields['deezer']; ?>">
                            <span class="sr-only">Share on Deezer</span>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-5 single-release-product ">
        <h3 class="p-5 text-white text-center">Learn how to play <?php the_title(); ?> Here:</h3>
        <?php
        $release_slug = get_post_field('post_name', get_the_ID());
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 1,
                    'name'           => $release_slug,
                );
                $products = new WP_Query($args);

                if ($products->have_posts()) :
                    while ($products->have_posts()) : $products->the_post();
                        global $product;
                        ?>
        <div class="col-12 col-md-6 mb-4 mb-md-0 d-flex justify-content-center">
            <a href="<?php echo get_permalink(); ?>" class="shop-product-card">
                <div class="product-image-wrapper">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium', array('class' => 'w-100')); ?>
                    <?php endif; ?>
                </div>
                <h3 class="my-3 text-center text-white"><?php the_title(); ?></h3>
                <div class="product-price text-center">
                    <span class="price"><?php echo $product->get_price_html(); ?></span>
                </div>
                <div class="w-100 d-flex justify-content-center">
                    <div class="shop-btn mt-3">
                        <span class="btn-text">Learn More</span>
                    </div>
                </div>
            </a>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
    <?php endwhile; ?>
</div>
<style>
body {
    background-color: #121925;
}
</style>
<?php
get_footer();