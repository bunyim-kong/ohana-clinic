<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/calendar.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">

<?php get_header(); ?>
<main class="clinic-calendar-page">
    <br><br><br><br>
    <h1>Doctor Schedule</h1>
    <?php echo do_shortcode('[doctor_calendar id="all"]'); ?>
</main>
<?php get_footer(); ?>
