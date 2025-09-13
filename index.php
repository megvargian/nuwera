<?php
/**
 * Template Name: Homepage
 */
get_header();
?>
<main id="main" class="site-main">
    <section id="home" style="text-align:center;">
        <img id="nuwera-logo"src="<?php echo get_template_directory_uri();?>/inc/assets/images/Nuwera-Name-Only-White-500x132.webp" alt="Nuwera Logo">
        <img class="d-none d-md-block" id="nuwera-crowd-img" src="<?php echo get_template_directory_uri();?>/inc/assets/images/Nuwera-main-image.webp">
    </section>

    <section id="latest-single" class="align-content-center text-center py-5">
        <div class="container-xl">
            <div class="row">
                <div class="col-12 d-lg-none">
                    <h2>latest single</h2>
                    <h3 class="mb-4">groundless</h3>
                    <p style="color:#ebe2d0;">Nuwera's Latest Single “Groundless” released on June 2023.</p>
                </div>
                <div class="col-12 col-lg-6" >
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start h-100 w-100">
                        <div id="vinyl-wrapper">
                            <img id="latest-single-vinyl-large-pic" src="<?php echo get_template_directory_uri();?>/inc/assets/images/Groundless-Square-375x375.webp" alt="GROUNDLESS">
                            <img id="vinyl" src="<?php echo get_template_directory_uri();?>/inc/assets/images/vinyl.png">
                            <img id="latest-single-vinyl-pic" src="<?php echo get_template_directory_uri();?>/inc/assets/images/Groundless-Square-375x375.webp" alt="Groundless">
                        </div>
                    </div>
                </div>                
                <div class="col-12 d-lg-none">
                    <div class="mt-4">
                        <iframe src="https://open.spotify.com/embed/track/7KYwVEnjw2kFVA97e4M2Rc" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media" class="w-100"></iframe>
                    </div>
                    <div class="mt-4">
                        <ul>
                            <li class="my-2">
                                <a href="https://open.spotify.com/track/7KYwVEnjw2kFVA97e4M2Rc?si=23d08345f54c4c37" target="_blank" class="spotify">Spotify</a>
                            </li>
                            <li class="my-2">
                                <a href="https://www.youtube.com/watch?v=7PBihNdhBX0" target="_blank" class="youtube">YouTube</a>
                            </li>
                            <li class="my-2">
                                <a href="https://music.apple.com/us/album/groundless-single/1691621115" target="_blank" class="apple-music">Apple</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-6 text-left " id="latest-single-second-col-desktop">
                    <h2>latest single</h2>
                    <h3 class="mb-4">groundless</h3>
                    <p style="color:#ebe2d0;">Nuwera's Latest Single “Groundless” released on June 2023.</p>
                    <div class="mt-4">
                        <iframe src="https://open.spotify.com/embed/track/7KYwVEnjw2kFVA97e4M2Rc" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media" class="w-100"></iframe>
                    </div>
                    <div class="mt-4">
                        <ul>
                            <li class="me-3">
                                <a href="https://open.spotify.com/track/7KYwVEnjw2kFVA97e4M2Rc?si=23d08345f54c4c37" target="_blank" class="spotify">Spotify</a>
                            </li>
                            <li class="me-3">
                                <a href="https://www.youtube.com/watch?v=7PBihNdhBX0" target="_blank" class="youtube">YouTube</a>
                            </li>
                            <li class="me-3">
                                <a href="https://music.apple.com/us/album/groundless-single/1691621115" target="_blank" class="apple-music">Apple</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="albums py-5">
        <div class="container">
            <div class="row text-center pb-5">
                <h2>All Realeases</h2>
            </div>
            <div class="row gap-x-4">
                <div class="col-12 col-md-4 mb-md-0 mb-4">
                    <a href="<?php echo get_permalink(17214); ?>">
                        <img class="w-100" src="<?php echo get_template_directory_uri();?>/inc/assets/images/Groundless-Square-440x440.webp" alt="Groundless" style="max-width:100%; height:auto;">
                        <h3 class="my-3">Groundless</h3>
                        <ul class="social-icons">
                            <li>
                                <a class="fab fa-spotify" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-apple" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-deezer" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-itunes" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-amazon" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-bandcamp" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-youtube" href="#">
                                </a>
                            </li>
                        </ul>
                    </a>
                </div>
                <div class="col-12 col-md-4 mb-md-0 mb-4">
                    <a href="<?php echo get_permalink(17223); ?>">
                        <img class="w-100" src="<?php echo get_template_directory_uri();?>/inc/assets/images/Am-I-Alive-440x440.webp" alt="Am I Alive" style="max-width:100%; height:auto;">
                        <h3 class="my-3">Am I Alive</h3>
                        <ul class="social-icons">
                            <li>
                                <a class="fab fa-spotify" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-apple" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-itunes" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-amazon" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-bandcamp" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-youtube" href="#">
                                </a>
                            </li>
                        </ul>
                    </a>
                </div>
                <div class="col-12 col-md-4 mb-md-0 mb-4">
                    <a href="<?php echo get_permalink(17245); ?>">
                        <img class="w-100" src="<?php echo get_template_directory_uri();?>/inc/assets/images/Lord-Fear-Square-440x440.webp" alt="Lord Fear" style="max-width:100%; height:auto;">
                        <h3 class="my-3">Lord Fear</h3>
                        <ul class="social-icons">
                            <li>
                                <a class="fab fa-spotify" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-apple" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-itunes" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-amazon" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-bandcamp" href="#">
                                </a>
                            </li>
                            <li>
                                <a class="fab fa-youtube" href="#">
                                </a>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="about-us" class="align-content-center text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="w-100 h-100 align-content-center">
                        <h3>Our Story</h3>
                        <h2 class="pt-4">About Us</h2>
                        <p class="pb-5 pt-3">
                            Founded in 2016 by Denyo, Nuwera is a Heavy Metal band based in Lebanon. The current lineup comprises Denyo on vocals, lead, and rhythm, Angelo Zeidan on lead and rhythm guitars, Serge Achkarian on bass and backup vocals, Rick Garabedian on keyboards and synth, and Antoine Bayram on drums. Initially, the band consisted of entirely different members, most notably Raed Khairallah on drums and Garen Krikorian on bass. After some live events, Denyo shifted his musical focus to his newer project, 'Vahakn.' However, this dormant period served as the catalyst for Nuwera's revival in 2020, emerging with a renewed commitment and an entirely new lineup of dedicated musicians.
                        </p>
                        <h4 class="pt-5">Follow Us</h4>
                        <div class="row">
                            <ul class="px-0 pt-3">
                                <li>
                                    <a href="https://www.youtube.com/@nuwera" target="_blank">
                                        <svg class="e-font-icon-svg e-fab-youtube" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/nuweraofficial" target="_blank">
                                        <svg class="e-font-icon-svg e-fab-facebook" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://open.spotify.com/artist/3xnkIvYYVGsB934bfGTv9n" target="_blank">
                                        <svg class="e-font-icon-svg e-fab-spotify" viewBox="0 0 496 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.tiktok.com/@nuweraa" target="_blank">
                                        <svg class="e-font-icon-svg e-fab-tiktok" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/nnuwera/" target="_blank">
                                        <svg class="e-font-icon-svg e-fab-instagram" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-center align-items-center w-100 h-100">
                        <img src="<?php echo get_template_directory_uri();?>/inc/assets/images/MIKE3972-scaled.webp" alt="Nuwera" id="about-us-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="meet-the-band py-5">
        <div class="container">
            <div class="row text-center pb-5">
                <h2>Meet The Band</h2>
            </div>
            <div class="row justify-content-center gap-x-4 d-md-flex d-none">
                <div class="col mb-4 mb-md-0">
                    <a href="https://www.instagram.com/livewithdenyo/" class="band-member">
                        <img class="w-100 d-block" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/MIKE3758-1536x1024.webp" alt="Denyo">
                        <h3 class="my-3">Denyo</h3>
                        <p>Vocals/Thythm</p>
                    </a>
                </div>
                <div class="col mb-4 mb-md-0">
                    <a href="https://www.instagram.com/ach_bassist/" class="band-member">
                        <img class="w-100 d-block" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/MIKE3301-1536x1024.webp" alt="Serge Achkarian">
                        <h3 class="my-3">Serge Achkarian</h3>
                        <p>Bassist</p>
                    </a>
                </div>
                <div class="col mb-4 mb-md-0">
                    <a href="https://www.instagram.com/antouunnn/" class="band-member">
                        <img class="w-100 d-block" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/MIKE4611-1536x1024.webp" alt="Antoine Bayram">
                        <h3 class="my-3">Antoine Bayram</h3>
                        <p>Drummer</p>
                    </a>
                </div>
                <div class="col mb-4 mb-md-0">
                    <a href="https://www.instagram.com/angelozeidan/" class="band-member">
                        <img class="w-100 d-block" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/Angelo-Center-1536x1254.webp" alt="Angelo Zeidan">
                        <h3 class="my-3">Angelo Zeidan</h3>
                        <p>Lead Guitar</p>
                    </a>
                </div>
                <div class="col mb-4 mb-md-0">
                    <a href="https://www.instagram.com/rick.garabedian/" class="band-member">
                        <img class="w-100 d-block" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/MIKE4328-1536x1024.webp" alt="Rick Garabedian">
                        <h3 class="my-3">Rick Garabedian</h3>
                        <p>Synth/Keys</p>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center gap-x-4 d-md-none d-flex">
                <div class="col-12 mb-4 mb-md-0">
                    <a href="https://www.instagram.com/livewithdenyo/" class="band-member">
                        <img class="w-100 d-block" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/MIKE3758-1536x1024.webp" alt="Denyo">
                        <h3 class="my-3">Denyo</h3>
                        <p>Vocals/Thythm</p>
                    </a>
                </div>
                <div class="col-12 mb-4 mb-md-0">
                    <a href="https://www.instagram.com/ach_bassist/" class="band-member">
                        <img class="w-100 d-block" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/MIKE3301-1536x1024.webp" alt="Serge Achkarian">
                        <h3 class="my-3">Serge Achkarian</h3>
                        <p>Bassist</p>
                    </a>
                </div>
                <div class="col-12 mb-4 mb-md-0">
                    <a href="https://www.instagram.com/antouunnn/" class="band-member">
                        <img class="w-100 d-block" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/MIKE4611-1536x1024.webp" alt="Antoine Bayram">
                        <h3 class="my-3">Antoine Bayram</h3>
                        <p>Drummer</p>
                    </a>
                </div>
                <div class="col-12 mb-4 mb-md-0">
                    <a href="https://www.instagram.com/angelozeidan/" class="band-member">
                        <img class="w-100 d-block" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/Angelo-Center-1536x1254.webp" alt="Angelo Zeidan">
                        <h3 class="my-3">Angelo Zeidan</h3>
                        <p>Lead Guitar</p>
                    </a>
                </div>
                <div class="col-12 mb-4 mb-md-0">
                    <a href="https://www.instagram.com/rick.garabedian/" class="band-member">
                        <img class="w-100 d-block" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/MIKE4328-1536x1024.webp" alt="Rick Garabedian">
                        <h3 class="my-3">Rick Garabedian</h3>
                        <p>Synth/Keys</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="shop-now">
        <div class="container text-center py-5">
            <a href="#">
                <h2>Shop Now</h2>
            </a>
        </div>
    </section>
</main>
<script>
    window.addEventListener("scroll", () => {
      const maxScroll = document.body.scrollHeight - window.innerHeight;
      const scroll = window.scrollY / maxScroll; // 0 → 1
      document.documentElement.style.setProperty("--scroll", scroll);
    });

    // about us scroll
        const elem = document.querySelector("#about-us-img");

        window.addEventListener("scroll", () => {
            const rect = elem.getBoundingClientRect();
            const elemHeight = rect.height;
            const viewportHeight = window.innerHeight;

            // Calculate scroll relative to the element
            let aboutUsScroll = (viewportHeight - rect.top) / (viewportHeight + elemHeight);

            // Clamp between 0 and 1
            aboutUsScroll = Math.min(Math.max(aboutUsScroll, 0), 1);

            // Set the CSS variable
            document.documentElement.style.setProperty("--about-us-scroll", aboutUsScroll);
        });
  </script>

<?php
get_footer();
?>