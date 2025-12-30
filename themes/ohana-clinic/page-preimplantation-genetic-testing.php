<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/medical.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">


<?php get_header(); ?>

<section class="container medical-infor-section">

    <div class="medical-cols">
        <div class="head-title">
            <h1>Preimplantation diagnosis (PGT-A/PGT-SR)</h1>
        </div>

        <div class="medical-specialist">

            <div class="medical-content">
                <div class="medical-text">
                    <h1>(PGT-A) / PGT-SR</h1>

                    <p>Pre-embrydermal chromosome heterogeneity test (PGT-A) is a test to examine the number of chromosomes in the embryo. PGT-SR is a test that examines the structure (shape and sequence) of chromosomes in the embryo. Cells are collected from blastocysts obtained by in vitro fertilization and performed. If the number of chromosomes is less or more than usual, or if there is a difference in structure, the embryo may not grow well and may not implant, or it may miscarry even if it is implanted. The aim is to reduce the risk of miscarriage by removing embryos from transplant candidates that are likely to miscarry due to excess or structural abnormalities in chromosomes and structural abnormalities by testing.</p>

                    <h2>The cost</h2>

                    <table class="price-table">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Unit</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PGT-A</td>
                                <td>per person</td>
                                <td>110,000 yen</td>
                            </tr>
                            <tr>
                                <td>PGT-SR</td>
                                <td>per person</td>
                                <td>154,000 yen</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                
            </div>
            
            <div class="medical-image">
                <h1>Results of pre-insideration diagnostic tests</h1>
                <div class="medical-image-content">
                    <div class="image-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/image/result-medical-1.png" alt="">
                    </div>

                    <div class="image-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/image/result-medical-2.png" alt="">
                    </div>
                </div>
            </div>

            <div class="medical-text">
                    <h1>PGT-A/PGT-SR</h1>

                    <ul>
                        <li>It is expected that the pregnancy rate per transplant will be improved.</li>
                        <li>It is expected to reduce the risk of miscarriage.</li>
                        <li>It is expected that the birth rate will improve and the period to the first pregnancy will be shortened.</li>
                    </ul>

                    <h1>PGT-A/PGT-SR Flow</h1>

                    <div class="medical-flow">
                        <table class="steps-table">
                            <thead>
                                <tr>
                                    <th>Step</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Please watch the explanation video of PGT-A / PGT-SR with your husband and wife, and fill in the video viewing confirmation sheet to be handed over from our hospital. Please make an appointment for counseling before the test.</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Your spouse will come to the clinic for counseling before the test. Please submit a video viewing confirmation sheet on the day. We will give you a consent form, so please submit it on the next visit to the hospital.</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td><strong>Egg-picking</strong></td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>A portion of the blastocyst is taken and the blastocyst is frozen. The collected cells are sent to the testing center.</td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>You will be visited by an explanation of the frozen embryo and a consultation after egg collection.</td>
                                </tr>
                                <tr>
                                    <th>6</th>
                                    <td>We will contact you as soon as the analysis result is received from the inspection center. Please make an appointment for counseling after the test with your spouse.</td>
                                </tr>
                                <tr>
                                    <th>7</th>
                                    <td>Your spouse will come to the hospital with counseling after the examination.</td>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <td><strong>Transplantation</strong></td>
                                </tr>
                            </tbody>
                        </table>
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