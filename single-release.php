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
                <?php the_post_thumbnail('large', ['class' => 'img-fluid w-100']); ?>
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
            <div class="release-content w-100" style="color:#fff;">
                <div class="mt-4 w-100">
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
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-column align-items-center single-release-product">
                <h3 class="p-5 text-white text-center">Learn how to play <?php the_title(); ?> Here:</h3>
                <div class="mt-4">
                    <?php the_post_thumbnail('large', ['class' => 'img-fluid w-100']); ?>
                </div>
            </div>
        </div>
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