<?php get_header();?>
  
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/header.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="?>/Access.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla:ital@0;1&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Banner -->
<section class="container banner">
  <h1>Access and Clinic Hours</h1>
  <p class="breadcrumb">Home &gt; Access and Clinic Hours</p>
</section>

<!-- Content -->
<section class="content">
  <h2>Access</h2>
  <div class="line"></div>

  <table class="info-table">
    <tr>
      <th>Name</th>
      <td><?php echo $clinic_name; ?></td>
    </tr>
    <tr>
      <th>Address</th>
      <td>
        <?php echo $postal; ?><br>
        <?php echo $address; ?><br>
        <a href="#">Google Maps</a>
      </td>
    </tr>
  </table>
</section>


    
 
