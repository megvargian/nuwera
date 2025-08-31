<?php
/**
 * Template Name: Homepage
 */
get_header();
?>

<main id="main" class="site-main">

    <section id="home" style="text-align:center;">
        <img id="nuwera-logo"src="https://nuwera.band/wp-content/uploads/2024/09/Nuwera-Name-Only-White-500x132.png" alt="Nuwera Logo" style="max-width:500px; width:100%; height:auto;">
        <img id="nuwera-crowd-img" src="<?php echo get_template_directory_uri();?>/inc/assets/images/Nuwera-main-image.webp">
    </section>

    <section id="latest-single" style="text-align:center; background:#1b1b1b;">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="https://nuwera.band/wp-content/uploads/2024/09/Groundless-Square-375x375.jpg" alt="Groundless" style="max-width:375px; width:100%; height:auto; margin:30px 0;">
                </div>
                <div class="col-6">
                    <h2 style="color:#ff2b59; font-family:'Albert Extrabold',sans-serif;">LATEST SINGLE</h2>
                    <h3>GROUNDLESS</h3>
                    <p style="color:#ebe2d0;">Nuwera's Latest Single “Groundless” released on June 2023.</p>
                    <div style="margin-top:20px;">
                        <iframe src="https://open.spotify.com/embed/track/7KYwVEnjw2kFVA97e4M2Rc" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div style="margin-top:20px;">
                        <a href="https://open.spotify.com/track/7KYwVEnjw2kFVA97e4M2Rc?si=23d08345f54c4c37" target="_blank" class="spotify">Spotify</a>
                        <a href="https://www.youtube.com/watch?v=7PBihNdhBX0" target="_blank" class="youTube">YouTube</a>
                        <a href="https://music.apple.com/us/album/groundless-single/1691621115" target="_blank" class="apple-music">Apple Music</a>
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
                    <a href="#">
                        <img class="w-100" src="https://nuwera.band/wp-content/uploads/2024/09/Groundless-Square-440x440.jpg" alt="Album 1" style="max-width:100%; height:auto;">
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
                    <a href="#">
                        <img class="w-100" src="https://nuwera.band/wp-content/uploads/2024/09/Am-I-Alive-440x440.jpg" alt="Album 2" style="max-width:100%; height:auto;">
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
                    <a href="#">
                        <img class="w-100" src="https://nuwera.band/wp-content/uploads/2024/09/Lord-Fear-Square-440x440.webp" alt="Album 3" style="max-width:100%; height:auto;">
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
    <section class="meet-the-band py-5">
        <div class="container">
            <div class="row text-center pb-5">
                <h2>Meet The Band</h2>
            </div>
            <div class="row justify-content-center gap-x-4 d-md-flex d-none">
                <div class="col mb-4 mb-md-0">
                    <a href="#" class="band-member">
                        <img class="w-100 d-block" src="https://nuwera.band/wp-content/uploads/2024/10/MIKE3758-1536x1024.jpg" alt="Denyo">
                        <h3 class="my-3">Denyo</h3>
                        <p>Vocals/Thythm</p>
                    </a>
                </div>
                <div class="col mb-4 mb-md-0">
                    <a href="#" class="band-member">
                        <img class="w-100 d-block" src="https://nuwera.band/wp-content/uploads/2024/10/MIKE3301-1536x1024.jpg" alt="Serge Achkarian">
                        <h3 class="my-3">Serge Achkarian</h3>
                        <p>Bassist</p>
                    </a>
                </div>
                <div class="col mb-4 mb-md-0">
                    <a href="#" class="band-member">
                        <img class="w-100 d-block" src="https://nuwera.band/wp-content/uploads/2024/10/MIKE4611-1536x1024.jpg" alt="Antoine Bayram">
                        <h3 class="my-3">Antoine Bayram</h3>
                        <p>Drummer</p>
                    </a>
                </div>
                <div class="col mb-4 mb-md-0">
                    <a href="#" class="band-member">
                        <img class="w-100 d-block" src="https://nuwera.band/wp-content/uploads/2024/10/Angelo-Center-1536x1254.jpg" alt="Angelo Zeidan">
                        <h3 class="my-3">Angelo Zeidan</h3>
                        <p>Lead Guitar</p>
                    </a>
                </div>
                <div class="col mb-4 mb-md-0">
                    <a href="#" class="band-member">
                        <img class="w-100 d-block" src="https://nuwera.band/wp-content/uploads/2024/10/MIKE4328-1536x1024.jpg" alt="Member 5">
                        <h3 class="my-3">Rick Garabedian</h3>
                        <p>Synth/Keys</p>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center gap-x-4 d-md-none d-flex">
                <div class="col-12 mb-4 mb-md-0">
                    <a href="#" class="band-member">
                        <img class="w-100 d-block" src="https://nuwera.band/wp-content/uploads/2024/10/MIKE3758-1536x1024.jpg" alt="Denyo">
                        <h3 class="my-3">Denyo</h3>
                        <p>Vocals/Thythm</p>
                    </a>
                </div>
                <div class="col-12 mb-4 mb-md-0">
                    <a href="#" class="band-member">
                        <img class="w-100 d-block" src="https://nuwera.band/wp-content/uploads/2024/10/MIKE3301-1536x1024.jpg" alt="Serge Achkarian">
                        <h3 class="my-3">Serge Achkarian</h3>
                        <p>Bassist</p>
                    </a>
                </div>
                <div class="col-12 mb-4 mb-md-0">
                    <a href="#" class="band-member">
                        <img class="w-100 d-block" src="https://nuwera.band/wp-content/uploads/2024/10/MIKE4611-1536x1024.jpg" alt="Antoine Bayram">
                        <h3 class="my-3">Antoine Bayram</h3>
                        <p>Drummer</p>
                    </a>
                </div>
                <div class="col-12 mb-4 mb-md-0">
                    <a href="#" class="band-member">
                        <img class="w-100 d-block" src="https://nuwera.band/wp-content/uploads/2024/10/Angelo-Center-1536x1254.jpg" alt="Angelo Zeidan">
                        <h3 class="my-3">Angelo Zeidan</h3>
                        <p>Lead Guitar</p>
                    </a>
                </div>
                <div class="col-12 mb-4 mb-md-0">
                    <a href="#" class="band-member">
                        <img class="w-100 d-block" src="https://nuwera.band/wp-content/uploads/2024/10/MIKE4328-1536x1024.jpg" alt="Member 5">
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
  </script>

<?php
get_footer();
?>