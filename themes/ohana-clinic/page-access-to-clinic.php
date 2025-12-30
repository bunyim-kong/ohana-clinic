<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/access-to-clinic.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

<?php get_header();?>

<section class="page-header">
  <h1>Access & Clinic Hours</h1>
  <span class="subtitle">Access and Clinic Hours</span>
</section>

<section class="access-section">
  <h2>Access</h2>

  <table class="clinic-table">
    <tr>
      <th>Name</th>
      <td>Keiai Clinic</td>
    </tr>
    <tr>
      <th>Address</th>
      <td>
        〒170-0013<br>
        Fujigi Building 4F, 1-12-8 Higashi-Ikebukuro, Toshima-ku, Tokyo<br>
        <a href="#" class="map-link">View on Google Maps</a>
      </td>
    </tr>
    <tr>
      <th>Phone</th>
      <td><a href="tel:03-3987-3090" class="phone-link">03-3987-3090</a></td>
    </tr>
    <tr>
      <th>Access</th>
      <td>1-minute walk from Ikebukuro Station Exit 35</td>
    </tr>
  </table>
</section>

<section class="directions">
  <h2>Directions</h2>
  <div class="line"></div>

  <div class="direction-list">
    <div class="direction-item">
      <img src="<?php echo get_template_directory_uri(); ?>/asset/image/68.jpg" alt="">
      <p>Exit Ikebukuro Station at Exit 35</p>
    </div>
    <div class="direction-item">
      <img src="<?php echo get_template_directory_uri(); ?>/asset/image/69.jpg" alt="">
      <p>Walk toward Sunshine 60 Street</p>
    </div>
    <div class="direction-item">
      <img src="<?php echo get_template_directory_uri(); ?>/asset/image/66.webp" alt="">
      <p>Continue straight ahead</p>
    </div>
    <div class="direction-item">
      <img src="<?php echo get_template_directory_uri(); ?>/asset/image/67.webp" alt="">
      <p>Clinic is located on the 4th floor</p>
    </div>
  </div>
</section>

<section class="clinic-hours">
  <h2>Clinic Hours</h2>
  <div class="line"></div>

  <p class="desc">
    Reservations are required whenever possible.<br>
    Thank you for your understanding.
  </p>

  <div class="table-wrap">
    <table class="schedule-table">
      <thead>
        <tr>
          <th>Time</th>
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
          <td>08:00–12:00</td>
          <td>Takehara<br>Tanaka*</td>
          <td>Takehara</td>
          <td>Takehara<br>Muraki</td>
          <td>Takehara</td>
          <td>Takehara<br>Muraki<br>Ohashi*</td>
          <td>/</td>
          <td>/</td>
        </tr>
        <tr>
          <td>09:00–12:00</td>
          <td>/</td>
          <td>/</td>
          <td>/</td>
          <td>/</td>
          <td>/</td>
          <td>Takehara</td>
          <td>Takehara</td>
        </tr>
        <tr>
          <td>18:00–20:00</td>
          <td>Takehara<br>Sasaki</td>
          <td>/</td>
          <td>Takehara<br>Muraki</td>
          <td>/</td>
          <td>Takehara<br>Tokuoka</td>
          <td>/</td>
          <td>/</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="note">
    <p>* Tanaka: 2nd & 4th Mondays</p>
    <p>* Ohashi: 2nd & 4th Fridays</p>
    <p class="small">Director Takehara may be absent on Monday afternoons.</p>
  </div>
</section>

<?php get_footer(); ?>