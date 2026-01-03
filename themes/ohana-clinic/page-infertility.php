<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/medical.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/about.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/access-to-clinic.css">


<?php get_header(); ?>

<section class="container medical-infor-section">

  <div class="medical-cols">

    <!-- PAGE TITLE -->
    <div class="head-title">
      <h1>Imaturity</h1>
    </div>

    <div class="medical-specialist">

      <div class="medical-content">
        <div class="medical-text">

          <h1>Concept of Malnutrition</h1>

          <ul>
            <li>If miscarriage (before the 22nd week of pregnancy) occurs more than twice</li>
            <li>Stillbirth (fetal death after the 22nd week of pregnancy)</li>
            <li>
              History of two or more perinatal losses, including death within one week after birth,
              is defined as a non-inferential disease
            </li>
          </ul>

          <p>
            Additionally, two consecutive miscarriages with or without a known cause are defined as
            <strong>recurrent miscarriage</strong>, while three consecutive miscarriages are defined as
            <strong>habitual miscarriage</strong>.
          </p>

          <h2>Frequency of Infertility</h2>

          <p>
            Miscarriage occurs in approximately 10–15% of all pregnancies.
            According to the Japanese Society of Obstetrics and Gynecology, miscarriage rates by age group are:
            20–24 years (14.5%), 25–29 years (15.8%), 30–34 years (17.8%),
            35–39 years (24.6%), and 40–44 years (39.6%).
          </p>

          <blockquote>
            <p>
              Proposals for Management of Impatient Disorders 2021<br>
              FY2020 Grant-in-Aid for Scientific Research on Health, Labor and Welfare
            </p>
            <cite>Ministry of Health, Labour and Welfare</cite>
          </blockquote>

          <h2>Risk Factors for Irregularities</h2>

          <p>The frequency of risk factors associated with malnutrition is shown below.</p>

          <div class="image-item-2">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/image/static.png" alt="">
          </div>

          <blockquote>
            <p>
              Proposals for Management of Impatient Disorders 2021 (P5)
            </p>
            <cite>Ministry of Health, Labour and Welfare</cite>
          </blockquote>

          <h2>Basic Examination of Dysbillosis</h2>

          <ul>
            <li>Uterine morphology examination</li>
            <li>Anti-phospholipid antibody test</li>
            <li>Chromosomal examination of both partners</li>
            <li>Endocrine testing</li>
          </ul>

          <p>
            Patients will be referred to a specialized medical institution,
            and treatment will be provided in cooperation with that facility.
          </p>

        </div>
      </div>

    </div>

  </div>

</section>



<section class="container reservation-section">
  <h1>Reservation</h1>
  <p>We accept reservations by phone and online.
    <br>
    If you are in a hurry, please call us.</p>

  <div class="reservation-content">
    <!-- the contact -->
    <div class="reservation-contact">
        <div class="reservation-items" style= "background-color: var(--nav-color);">
          <a href=""><i class="fas fa-phone"></i> 03-3987-3090</a>
        </div>

        <div class="reservation-items">
          <a href=""><i class="far fa-calendar-alt"></i>Online Reservation</a>
        </div>
    </div>

    <p class="content-txt">It may take some time for us to respond to inquiries made through the inquiry form.</p>

    <!-- inqury form -->
    <div class="reservation-form">
      <a href="<?php echo home_url('contact'); ?>">Inqury <i class="fas fa-chevron-right"></i></a>
    </div>

  </div>
</section>

<?php get_footer(); ?>
