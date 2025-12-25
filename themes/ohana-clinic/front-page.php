<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/header.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">


<?php get_header(); ?>

<section class="container hero-section">
    <div class="hero-content">

        <div class="hero-infor">
            <h1>Warm medical care that fully acknowledges the feelings of each patient</h1>

            <p>We will answer your questions thoroughly during your consultation, so
            you can approach your infertility treatment in a relaxed atmosphere.</p>

            <a href="">Discover More</a>
        </div>

        <div class="hero-image">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/image/hero-section-3.webp" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/image/hero-section-2.webp" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/image/hero-section.webp" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>    
</section>

<section class="container strength-section">
    <h1>Our strengths</h1>

    <div class="strength-content">

        <div class="strength-card">
            <i class="material-symbols-outlined">browse_gallery</i>

            <h1>Easy Access While You Work</h1>

            <p>Close to the station, open 8:00 AM–8:00 PM (Mon, Wed, Fri)</p>

            <a href="">See more <i class="fas fa-chevron-right"></i></a>
        </div>

        <div class="strength-card">
            <i class="material-symbols-outlined">add_notes</i>

            <h1>Proven Pregnancy Results Hahah</h1>

            <p>Pregnancy rate from 2022 to 2023: 63.2% (frozen blastocyst transfer)</p>

            <a href="">See more <i class="fas fa-chevron-right"></i></a>
        </div>

        <div class="strength-card">
            <i class="material-symbols-outlined">stethoscope</i>

            <h1>Consistent Care by One Doctor</h1>

            <p>There is no difference in the treatment plan or explanation given by the doctor.</p>

            <a href="">See more <i class="fas fa-chevron-right"></i></a>
        </div>

    </div>    
</section>
<!-- <section class="container strength-section">
    <h1>Our strengths</h1>

    <div class="stength-content">
        <div class="strength-items-card">
            <i class="material-symbols-outlined">browse_gallery</i>

            <h1>Easy Access While You Work</h1>

            <p>Close to the station, open 8:00 AM–8:00 PM (Mon, Wed, Fri)</p>

            <a href="">See more <i class="fas fa-chevron-right"></i></a>
        </div>

        <div class="strength-items-card">
            <i class="material-symbols-outlined">browse_gallery</i>

            <h1>Easy Access While You Work</h1>

            <p>Close to the station, open 8:00 AM–8:00 PM (Mon, Wed, Fri)</p>

            <a href="">See more <i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
</section> -->








<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        speed: 500,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>