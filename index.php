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
        <h2 style="color:#ff2b59; font-family:'Albert Extrabold',sans-serif;">Latest Single</h2>
        <img src="https://nuwera.band/wp-content/uploads/2024/09/Groundless-Square-375x375.jpg" alt="Groundless" style="max-width:375px; width:100%; height:auto; margin:30px 0;">
        <h3 style="color:#ebe2d0;">Groundless</h3>
        <p style="color:#ebe2d0;">Released June 2023</p>
        <div style="margin-top:20px;">
            <iframe src="https://open.spotify.com/embed/track/7KYwVEnjw2kFVA97e4M2Rc" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
        <div style="margin-top:20px;">
            <a href="https://open.spotify.com/track/7KYwVEnjw2kFVA97e4M2Rc?si=23d08345f54c4c37" target="_blank" style="color:#ff2b59; margin:0 10px;">Spotify</a>
            <a href="https://www.youtube.com/watch?v=7PBihNdhBX0" target="_blank" style="color:#ff2b59; margin:0 10px;">YouTube</a>
            <a href="https://music.apple.com/us/album/groundless-single/1691621115" target="_blank" style="color:#ff2b59; margin:0 10px;">Apple Music</a>
        </div>
    </section>

    <section id="about" style="text-align:center; padding:60px 0; background:#121925;">
        <h2 style="color:#ff2b59; font-family:'Albert Extrabold',sans-serif;">About Us</h2>
        <p style="color:#ebe2d0; max-width:700px; margin:30px auto;">
            Founded in 2016 by Denyo, Nuwera is a Heavy Metal band based in Lebanon. The current lineup comprises Denyo on vocals, lead, and rhythm, Angelo Zeidan on lead and rhythm guitars, Serge Achkarian on bass and backup vocals, Rick Garabedian on keyboards and synth, and Antoine Bayram on drums.
        </p>
    </section>
    <section id="contact" style="text-align:center; padding:60px 0; background:#1b1b1b;">
        <h2 style="color:#ff2b59; font-family:'Albert Extrabold',sans-serif;">Contact</h2>
        <p style="color:#ebe2d0;">info@nuwera.band</p>
        <div style="margin-top:20px;">
            <a href="https://www.facebook.com/nuweraofficial" target="_blank" style="color:#ff2b59; margin:0 10px;">Facebook</a>
            <a href="https://www.instagram.com/nnuwera/" target="_blank" style="color:#ff2b59; margin:0 10px;">Instagram</a>
        </div>
    </section>
</main>

<?php
get_footer();
?>