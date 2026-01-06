<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
</div><!-- #content -->
<footer class="pb-5">
    <?php if(!is_front_page()){?>
        <section class="py-5" style="background-color: #000;">
            <div class="container py-5">
                <div class="row pt-5 justify-content-center">
                    <div class="col-4">
                        <img class="w-100"
                            src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/Nuwera-Name-Only-White.webp"
                            alt="Nuwera">
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-12">
                        <ul class="d-flex justify-content-center align-items-center flex-wrap">
                            <li class="mx-4">
                                <a href="https://www.youtube.com/@nuwera" target="_blank" name="footer-youtube">
                                    <svg style="width: 24px; fill:#fff;" class="e-font-icon-svg e-fab-youtube"
                                        viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="mx-4">
                                <a href="https://www.facebook.com/nuweraofficial" target="_blank" name="footer-facebook">
                                    <svg style="width: 24px; fill:#fff;" class="e-font-icon-svg e-fab-facebook"
                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="mx-4">
                                <a href="https://open.spotify.com/artist/3xnkIvYYVGsB934bfGTv9n" target="_blank" name="footer-spotify">
                                    <svg style="width: 24px; fill:#fff;" class="e-font-icon-svg e-fab-spotify"
                                        viewBox="0 0 496 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="mx-4">
                                <a href="https://www.tiktok.com/@nuweraa" target="_blank" name="footer-tiktok">
                                    <svg style="width: 24px; fill:#fff;" class="e-font-icon-svg e-fab-tiktok"
                                        viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="mx-4">
                                <a href="https://www.instagram.com/nnuwera/" target="_blank" name="footer-instagram">
                                    <svg style="width: 24px; fill:#fff;" class="e-font-icon-svg e-fab-instagram"
                                        viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col d-flex justify-content-center justify-content-md-start align-items-center mb-md-0 mb-4">
                <a href="mailto:info@nuwera.band" style="color: #000 !important" name="contact-email">info@nuwera.band</a>
            </div>
            <div class="col">
                <ul class="d-flex justify-content-center justify-content-md-end align-items-center">
                    <li>
                        <a href="https://www.facebook.com/nuweraofficial" style="color: #000 !important"
                            target="_blank" name="bottom-facebook">Facebook</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/nnuwera/" style="color: #000 !important"
                            target="_blank" name="bottom-instagram">Instagram</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->
<script>
// arrow color change
const backToTop = document.getElementById("back-to-top-link");
const shopNowSection = document.getElementById("shop-now");

backToTop.style.color = "white";

if (shopNowSection) {
    window.addEventListener("scroll", () => {
        let shopTop = shopNowSection.offsetTop;
        let scrollPos = window.scrollY + window.innerHeight;
        if (scrollPos >= (shopTop + 100)) {
            backToTop.style.color = "#272727";
        } else {
            backToTop.style.color = "white";
        }
    });
}

// mobile menu hamburger button
const mobileMenu = document.getElementById("mobile-menu");
const openBtn = document.querySelector(".fa-bars");
const closeBtn = mobileMenu.querySelector(".fa-x");
const menuLinks = mobileMenu.querySelectorAll("a.menu-link");

openBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("slide-out");
    mobileMenu.classList.add("slide-in");
    document.body.classList.add("no-scroll");
});

function closeMobileMenu() {
    mobileMenu.classList.remove("slide-in");
    mobileMenu.classList.add("slide-out");
    document.body.classList.remove("no-scroll");
}

closeBtn.addEventListener("click", closeMobileMenu);

menuLinks.forEach(link => {
    link.addEventListener("click", closeMobileMenu);
});

// desktop menu color change
const desktopMenu = document.getElementById("desktop-menu");

if (shopNowSection) {
    window.addEventListener("scroll", () => {
        let shopTop = shopNowSection.offsetTop;
        let scrollPos = window.scrollY + window.innerHeight;

        if (scrollPos >= (shopTop + 550)) {
            desktopMenu.classList.add("menu-dark");
        } else {
            desktopMenu.classList.remove("menu-dark");
        }
    });
}
</script>
<?php
// Add Organization JSON-LD schema for SEO
$org = array(
    "@context" => "https://schema.org",
    "@type" => "MusicGroup",
    "name" => get_bloginfo('name'),
    "url" => home_url('/'),
    "logo" => get_site_icon_url() ? get_site_icon_url() : get_template_directory_uri() . '/inc/assets/images/Nuwera-Name-Only-White.webp',
    "sameAs" => array(
        "https://www.youtube.com/@nuwera",
        "https://www.facebook.com/nuweraofficial",
        "https://open.spotify.com/artist/3xnkIvYYVGsB934bfGTv9n",
        "https://www.tiktok.com/@nuweraa",
        "https://www.instagram.com/nnuwera/"
    )
);
echo '<script type="application/ld+json">' . wp_json_encode( $org ) . '</script>';
?>

<script>
// Spotify embed click-to-load (avoids third-party cookies until user consents and clicks)
(function(){
  function loadSpotify(container){
    var src = container.getAttribute('data-src');
    if(!src) return;
    var iframe = document.createElement('iframe');
    iframe.setAttribute('src', src);
    iframe.setAttribute('width', '100%');
    iframe.setAttribute('height', '80');
    iframe.setAttribute('frameborder', '0');
    iframe.setAttribute('allowtransparency', 'true');
    iframe.setAttribute('allow', 'encrypted-media');
    container.classList.add('iframe-loaded');
    container.innerHTML = '';
    container.appendChild(iframe);
  }

  document.addEventListener('click', function(e){
    var btn = e.target.closest('.spotify-load-btn');
    if(btn){
      var container = btn.closest('.spotify-embed-placeholder');
      loadSpotify(container);
      return;
    }
    var placeholder = e.target.closest('.spotify-embed-placeholder');
    if(placeholder && !placeholder.classList.contains('iframe-loaded')){
      loadSpotify(placeholder);
    }
  });

  // lazy load image background for placeholders
  document.querySelectorAll('.spotify-embed-placeholder').forEach(function(el){
    var img = el.getAttribute('data-img');
    if(img){
      var cover = el.querySelector('.spotify-cover');
      if(cover){
        cover.style.backgroundImage = 'url(' + img + ')';
      }
    }
  });
})();
</script>

<?php wp_footer(); ?>
</body>

</html>
</body>

</html>