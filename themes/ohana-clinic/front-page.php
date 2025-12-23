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

<section class="">
    
</section>

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