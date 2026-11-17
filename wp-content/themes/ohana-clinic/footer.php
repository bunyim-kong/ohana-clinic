<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/footer.css">

<footer class="site-footer">

  <div class="footer-content">

    <div class="infor-footer">
        <div class="footer-info">
          <a href="<?php echo home_url('home'); ?>" class="footer-logo">
            <img src="<?php echo get_template_directory_uri() . '/asset/image/logo.png'; ?>">
          </a>

          <table class="clinic-info">
            <tr>
              <th>Location</th>
              <td>
                〒170-0013<br>
                Fujigi Bldg. 4F, 1-12-8 Higashi-Ikebukuro,<br>
                Toshima-ku, Tokyo
              </td>
            </tr>
            <tr>
              <th>Medical Subjects</th>
              <td>Gynecology</td>
            </tr>
          </table>

          <div class="footer-actions">
            <a href="" class="btn call">
              <ion-icon name="call"></ion-icon>
              03-3987-3090
            </a>

            <a href="<?php echo home_url('clinic-calendar'); ?>" target="_blank" class="btn reserve">
              <ion-icon name="calendar-sharp"></ion-icon>
              Web Booking
            </a>
          </div>
      </div>

      <nav class="footer-nav">
        <a href="<?php echo home_url('home'); ?>">Home</a>
        <a href="<?php echo home_url('first-visit'); ?>">First Visit</a>
        <a href="<?php echo home_url(''); ?>">About Our Hospital</a>
        <a href="<?php echo home_url(''); ?>">Medical Information</a>
        <a href="<?php echo home_url('contact'); ?>">Access & Hours</a>
        <a href="<?php echo home_url('access-to-clinic'); ?>">Contact Us</a>
        <a href="<?php echo home_url('clinic-calendar'); ?>">Access & Clinic Hours</a>
      </nav>
    </div>


    <div class="clinic-hours">
      <table>
        <thead>
          <tr>
            <th></th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
            <th>Sun / Holidays</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>08:00–12:00</th>
            <td>Takehara</td>
            <td>Takehara</td>
            <td>Takehara</td>
            <td>Takehara</td>
            <td>Takehara</td>
            <td>—</td>
            <td>—</td>
          </tr>
          <tr>
            <th>09:00–12:00</th>
            <td>—</td>
            <td>—</td>
            <td>—</td>
            <td>—</td>
            <td>—</td>
            <td>Takehara</td>
            <td>Takehara</td>
          </tr>
          <tr>
            <th>18:00–20:00</th>
            <td>Takehara</td>
            <td>—</td>
            <td>Takehara</td>
            <td>—</td>
            <td>Takehara</td>
            <td>—</td>
            <td>—</td>
          </tr>
        </tbody>
      </table>

      <p class="clinic-note">
        Complete reservation system.<br>
        * Director Takehara may be absent on some days.
      </p>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="social-link">
      <a href="https://www.instagram.com/keiaiclinic/" target="_blank" class="social-link">
        <ion-icon name="logo-instagram"></ion-icon>
        Terms of Use
      </a>

      <a href="https://www.instagram.com/keiaiclinic/" target="_blank" class="social-link">
        <ion-icon name="logo-instagram"></ion-icon>
        Privacy Policy
      </a>
    </div>
    

    <p class="copyright">
      © 2025 Ohana Clinic
    </p>
  </div>

</footer>


