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
    <?php endwhile; ?>
</div>
<style>
</style>
<?php
get_footer();