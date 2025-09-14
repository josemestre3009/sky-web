<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>PQRS</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
  <link href="assets/img/logo1.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
<!-- Custom Colors CSS -->
<link href="assets/css/custom-colors.css" rel="stylesheet">

<!-- =======================================================
* Template Name: FlexStart
* Updated: Sep 18 2023 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>
<!-- ======= Header ======= -->
<?php include_once ('header.php'); ?>
<!-- End Header -->
<main id="main">    
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <br>
    <br>
    <br>
    <br>
    <p>PQRS</p>
  </header>

  <div class="row gy-4">

    <div class="col-lg-6">

      <div class="row gy-4">
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-whatsapp"></i>
            <h3>WhatsApp</h3>
            <strong><?php echo $Whatsapp;?></strong>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-telephone"></i>
            <h3>Teléfono</h3>
            <strong><?php echo $Whatsapp;?></strong>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-envelope"></i>
            <h3>Correo</h3>
            <strong><?php echo $Correo;?></strong>
          </div>
        </div>
        <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Dirección</h3>
                  <p><?php echo $Direccion;?>, <br> <strong><?php echo $Ciudades;?></strong></p>
                </div>
              </div>
      </div>

    </div>

    <div class="col-lg-6">
      <form action="forms/contact.php" method="post" class="php-email-form">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Nombre" required>
          </div>

          <div class="col-md-6 ">
            <input type="email" class="form-control" name="email" placeholder="Correo" required>
          </div>

          <div class="col-md-12">
            <select name="subject"  class="form-control" required>
                <option value="">Seleccione..........</option>
                <option value="PETICION">PETICION</option>
                <option value="QUEJA">QUEJA</option>
                <option value="RECLAMO">RECLAMO</option>
                <option value="SUGERENCIA">SUGERENCIA</option>
                <option value="FELICITACION">FELICITACION</option>
            </select>
            
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Mensaje" required></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Enviando</div>
            <div class="error-message"></div>
            <div class="sent-message">Le confirmamos que hemos recibido su mensaje. Este será tratado por nuestro equipo. Gracias!</div>

            <button type="submit">Enviar Mensaje</button>
          </div>

        </div>
      </form>

    </div>

  </div>

</div>

</section><!-- End Contact Section -->
</main><!-- End #main -->

<!-- ======= Footer ======= -->
  <?php include_once ('footer.php'); ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- End Footer -->



<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/navigation-fix.js"></script>

</body>

</html>