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
				<div class="release-info mt-4" style="color:#fff;">
					<h1 class="release-title" style="color:#fff;"><?php the_title(); ?></h1>
					<p class="release-date" style="color:#fff;"><strong>Release Date: 3 March 2022</strong></p>
					<p class="release-artist" style="color:#fff;"><strong>Artist: Nuwera</strong></p>
					<p class="release-artist" style="color:#fff;"><strong>Genres:</strong> Hard Rock, Heavy Metal, Metal, Nu Metal, Rock</p>
					<p class="release-label" style="color:#fff;"><strong>Label:</strong> Digital download</p>
				</div>
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
				<div class="social-share mt-4">
					<ul class="d-flex justify-content-start align-items-center flex-wrap">
						<li>
							<a class="fab fa-spotify" href="#">
								<span class="sr-only">Share on Spotify</span>
							</a>
						</li>
						<li>
							<a class="fab fa-apple" href="#">
								<span class="sr-only">Share on Apple Music</span>
							</a>
						</li>
						<li>
							<a class="fab fa-amazon" href="#">
								<span class="sr-only">Share on Amazon Music</span>
							</a>
						</li>
						<li>
							<a class="fab fa-bandcamp" href="#">
								<span class="sr-only">Share on Bandcamp</span>
							</a>
						</li>
						<li>
							<a class="fab fa-youtube" href="#">
								<span class="sr-only">Share on YouTube</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
</div>
<?php
get_footer();
