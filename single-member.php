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
                            <span class="sr-only">Share on Instagram</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($get_all_fields['youtube']){?>
                    <li>
                        <a class="fab fa-youtube" href="<?php echo $get_all_fields['youtube']; ?>">
                            <span class="sr-only">Share on Youtube</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($get_all_fields['twitter']){?>
                    <li>
                        <a class="fab fa-twitter" href="<?php echo $get_all_fields['twitter']; ?>">
                            <span class="sr-only">Share on Twitter</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($get_all_fields['tiktok']){?>
                    <li>
                        <a class="fab fa-tiktok" href="<?php echo $get_all_fields['tiktok']; ?>">
                            <span class="sr-only">Share on Tiktok</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($get_all_fields['metalencyclopedia']){?>
                    <li>
                        <a class="fab" href="<?php echo $get_all_fields['metalencyclopedia']; ?>">
                            <span class="sr-only">Share on Metal Encyclopedia</span>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <defs>
                                        <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                            <path d="M0 512h512V0H0Z" fill="#ffffff" opacity="1"
                                                data-original="#000000"></path>
                                        </clipPath>
                                    </defs>
                                    <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                        <path d="M0 0v190c0 16.568-13.432 30-30 30-16.568 0-30-13.432-30-30V0"
                                            style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                            transform="translate(346 277)" fill="none" stroke="#ffffff"
                                            stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                            data-original="#000000" opacity="1" class=""></path>
                                        <path d="M0 0v70c0 16.568-13.432 30-30 30-16.568 0-30-13.432-30-30V0"
                                            style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                            transform="translate(286 277)" fill="none" stroke="#ffffff"
                                            stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                            data-original="#000000" opacity="1" class=""></path>
                                        <path
                                            d="M0 0v0c16.568 0 30 13.432 30 30v50c0 16.568-13.432 30-30 30-16.568 0-30-13.432-30-30V30C-30 13.432-16.568 0 0 0Z"
                                            style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                            transform="translate(196 247)" fill="none" stroke="#ffffff"
                                            stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                            data-original="#000000" opacity="1" class=""></path>
                                        <path d="M0 0v140c0 16.568-13.432 30-30 30-16.568 0-30-13.432-30-30V-30"
                                            style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                            transform="translate(166 297)" fill="none" stroke="#ffffff"
                                            stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                            data-original="#000000" opacity="1" class=""></path>
                                        <path
                                            d="M0 0v-160c0-22.091 17.908-40 40-40v-62h200v62c33.137 0 60 26.863 60 60v80c0 33.137-26.863 60-60 60h-90c-16.568 0-30-13.432-30-30 0-16.568 13.432-30 30-30h60"
                                            style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                            transform="translate(106 277)" fill="none" stroke="#ffffff"
                                            stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                            data-original="#000000" opacity="1" class=""></path>
                                        <path d="M0 0v-30c-33.137 0-60-26.863-60-60v-20"
                                            style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                            transform="translate(316 217)" fill="none" stroke="#ffffff"
                                            stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                            data-original="#000000" opacity="1" class=""></path>
                                    </g>
                                </g>
                            </svg>
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