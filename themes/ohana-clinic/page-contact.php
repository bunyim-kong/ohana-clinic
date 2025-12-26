<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/contact.css">

<?php get_header();?>
  
 
<section class="container">
  <div class="titlle-contact">
    <div class="li">
      <h1 class="ta">Contact Us</h1>
    <div class="bar"></div>
  </div>
   <p class="box">
    Inquiries are accepted by phone or the following inquiry form.<br>
    If you are in a hurry, please call us.
    </p>

    <div class="phone">
    <span class="phone-icon"><i class="fa-solid fa-phone"></i></span>
    <span class="phone-number">03-3987-3090</span>
   </div>
   </div>
 </section>


   <section class="container min">
  <h2>Contact form</h2>
  <hr class="title-line">

  <form method="post" action="">
    <!-- Type of inquiry -->
    <div class="form-row">
      <div class="label-section">
        <label>Type of inquiry</label>
        <span class="badge">Mandatory</span>
      </div>
      <div class="input-section">
        <select name="inquiry" required>
          <option value="">Select</option>
          <option value="medical">Lita</option>
          <option value="reservation">nik ke Ot</option>
           <option value="medical">Ot nik pg</option>
        </select>
      </div>
    </div>

    <!-- Your name -->
    <div class="form-row">
      <div class="label-section">
        <label>Your name</label>
        <span class="badge">Mandatory</span>
      </div>
      <div class="input-section">
       <input type="text">

      </div>
    </div>

    <!-- Furigana -->
    <div class="form-row">
      <div class="label-section">
        <label>Furigana</label>
        <span class="badge">Mandatory</span>
      </div>
      <div class="input-section">
     <textarea name="message" rows="2" required></textarea>

      </div>
    </div>

    <!-- Email -->
    <div class="form-row">
      <div class="label-section">
        <label>E-mail address</label>
        <span class="badge">Mandatory</span>
      </div>
      <div class="input-section">
       <textarea name="message" rows="2" required></textarea>

      </div>
    </div>

  <!-- --Phone number-- -->
     <div class="form-row">
      <div class="label-section">
        <label>Phone number</label>
        <span class="badge">Mandatory</span>
      </div>
      <div class="input-section">
      <textarea name="message" rows="2" required></textarea>

      </div>
    </div>
       
          <!-- Your inquiry -->
   <div class="form-row">
  <div class="label-section">
    <label>Your name</label>
    <span class="badge">Mandatory</span>
  </div>
  <div class="input-section">
    <input type="text" name="your_name" required> </div>
</div>
  </form>
</section>
