<?php
get_header();
?>
<div class="container py-5 single-release">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="row align-items-start">
            <div class="col-12 col-lg-5 mb-4 mb-lg-0">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="release-cover-img mt-4">
                        <?php the_post_thumbnail('large', ['class' => 'img-fluid w-100']); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-7">
                <div class="release-content w-100" style="color:#fff;">
                    <div class="mt-4 w-100">
						<div class="release-meta w-100" style="color:#fff;">
							<?php
							the_content();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
</div>
<?php
get_footer();
