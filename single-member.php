<?php
get_header();
$get_all_fields = get_fields();
?>
<div class="container py-5 single-release">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="row align-items-start">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <?php if ( has_post_thumbnail() ) : ?>
            <div class="release-cover-img">
                <?php the_post_thumbnail('large', ['class' => 'img-fluid w-100']); ?>
            </div>
            <?php endif; ?>
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="release-title" style="color:#fff;"><?php the_title(); ?></h1>
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
                    <?php if($get_all_fields['instagram']){?>
                    <li>
                        <a class="fab fa-instagram" href="<?php echo $get_all_fields['instagram']; ?>">
                            <span class="sr-only">Share on Spotify</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($get_all_fields['facebook']){?>
                    <li>
                        <a class="fab fa-apple" href="<?php echo $get_all_fields['apple']; ?>">
                            <span class="sr-only">Share on Apple Music</span>
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