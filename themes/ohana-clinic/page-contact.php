<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/contact.css">

<?php get_header();?>
  
 
<section class="contact-section">
  <div class="container">
    <div class="header-group">
      <h1 >Contact Us</h1>
    </div>

    <div class="opu">
      <p class="hau">
        Inquiries are accepted by phone or the following inquiry form.
        If you are in a hurry,please call us.
      </p>

      <a href="hanu" class="phone-button">
        <span class="phone-icon"><i class="fa-solid fa-phone"></i></span>
        <span class="phone-number">03-3987-3090</span>
      </a>
    </div>
  </div>
</section>


<section class="container min">
  <h2>Contact form</h2>
  
  <form method="post" action="">
    <div class="form-row">
      <div class="label-section">
        <label>Type of inquiry</label>
        <span class="badge">Mandatory</span>
      </div>
      <div class="input-section">
        <select name="inquiry" class="form-input" required>
          <option value="">About medical treatment </option>
          <option value="">About reservations </option>
          <option value="">Sales/Advertisement</option>
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="label-section">
        <label>Your name</label>
        <span class="badge">Mandatory</span>
      </div>
      <div class="input-section">
        <input type="text" class="form-input">
      </div>
    </div>

    <div class="form-row">
      <div class="label-section">
        <label>Furigana</label>
        <span class="badge">Mandatory</span>
      </div>
      <div class="input-section">
        <input type="text" class="form-input">
      </div>
    </div>

    <div class="form-row">
      <div class="label-section">
        <label>E-mail address</label>
        <span class="badge">Mandatory</span>
      </div>
      <div class="input-section">
        <input type="email" class="form-input">
      </div>
    </div>
    <div class="form-row">
      <div class="label-section">
        <label>Phone number</label>
        <span class="badge">Mandatory</span>
      </div>
      <div class="input-section">
        <input type="tel" class="form-input">
      </div>
    </div>

           <div class="form-row">
      <div class="label-section">
        <label>Your inquiry</label>
        <span class="badge">Mandatory</span>
      </div>
     <div class="input-section">
    <textarea name="user_contact_contact" class="form-input" rows="8"></textarea>
  </div>
    </div>

  <div class="button-container">
      <button type="submit" class="submit-btn">Go to confirmation screen</button>
  </div>
   
  </form>
</section>

<div class="nothing"></div>

<?php get_footer(); ?>
