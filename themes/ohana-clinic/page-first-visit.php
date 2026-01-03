<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/medical.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/about.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/access-to-clinic.css">


<?php get_header(); ?>

<section class="container medical-infor-section">
    <br><br><br><br><br><br>
    <div class="head-title">
        <h1>First Visit Information</h1>
    </div>

    <div class="medical-text">

        <h2>Notes on the First Visit Reservation</h2>
        <ul>
            <li>Only registered patients can make a reservation. Undocumented registration is not possible.</li>
            <li>
            The visit takes approximately two hours including consultation and accounting.
            Depending on congestion, waiting time may be longer.
            </li>
        </ul>

        <h2>About Your Belongings</h2>

        <h3>What You Need</h3>
        <ul>
            <li><strong>Your spouse’s health insurance card</strong> (Required)</li>
            <li><strong>Certificate of registration or family register</strong> (issued within 3 months)</li>
            <li><strong>Referral letter</strong> (if previously treated elsewhere)</li>
            <li><strong>Basal body temperature table</strong></li>
        </ul>

        <h2>Cost of Tests at the First Visit</h2>

        <p>
            To provide accurate treatment, the following tests are performed at your own expense
            during your first visit. Our clinic is a designated medical institution under the
            Tokyo Metropolitan Government fertility subsidy program.
        </p>

        <p>
            Please refer to the Tokyo Metropolitan Government website for subsidy details.
        </p>

        <!-- WOMEN TABLE -->
        <h2>Women</h2>

        <div class="table-wrapper">
            <table class="process-table">
            <tbody>
                <tr><th>Initial consultation</th><td>¥1,100</td></tr>
                <tr><th>Infection test (set)</th><td>¥7,700</td></tr>
                <tr><th>High prolactin test</th><td>¥1,320</td></tr>
                <tr><th>Peripheral blood test</th><td>¥330</td></tr>
                <tr><th>Thyroid hormone test (TSH)</th><td>¥1,760</td></tr>
                <tr><th>Rubella antibody test</th><td>¥880</td></tr>
                <tr><th>Rh blood type test</th><td>¥330</td></tr>
                <tr><th>AMH test</th><td>¥7,700</td></tr>
            </tbody>
            </table>
        </div>

        <p>
            * The AMH test measures ovarian reserve and estimates ovarian age.
        </p>

        <!-- MEN TABLE -->
        <h2>Men</h2>

        <div class="table-wrapper">
            <table class="process-table">
            <tbody>
                <tr><th>Initial consultation</th><td>¥1,100</td></tr>
                <tr><th>Semen analysis</th><td>¥3,300</td></tr>
                <tr><th>Infection test (set)</th><td>¥7,700</td></tr>
            </tbody>
            </table>
        </div>

        <h2>Additional Test Items</h2>

        <h3>Women</h3>
        <div class="table-wrapper">
            <table class="process-table">
            <tbody>
                <tr>
                <th>Sperm immobilization antibody test</th>
                <td>¥9,900</td>
                </tr>
            </tbody>
            </table>
        </div>

        <p>
            This test checks for antibodies that may prevent sperm movement or fertilization.
            A positive result may make natural pregnancy difficult.
        </p>

        <h3>Men</h3>
        <div class="table-wrapper">
            <table class="process-table">
            <tbody>
                <tr>
                <th>Sperm chromatin structure assay (SCSA)</th>
                <td>¥7,700</td>
                </tr>
                <tr>
                <th>Sperm antioxidant capacity test</th>
                <td>¥7,700</td>
                </tr>
            </tbody>
            </table>
        </div>

        <h2>Bridal Checkup Notes</h2>
        <ul>
            <li>Semen collection will be done in our clinic.</li>
            <li>Test results will be provided on the same day.</li>
            <li>This is a self-pay treatment, but insurance cards are required.</li>
            <li>Please bring the completed registration sheet.</li>
        </ul>

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