
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Cobertura</title>
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

<?php
$zonas = [
  ['nombre' => 'Patillal, Cesar', 'descripcion' => '', 'mapa' => 'https://www.google.com/maps/d/u/0/embed?mid=1n-EzT52ampw3KQ7kiRGcRUobcGNN39I&usp=sharing'],
  ['nombre' => 'Rio Seco, Cesar', 'descripcion' => '', 'mapa' => 'https://www.google.com/maps/d/u/0/embed?mid=1WADR1kbgTAfggGmWEbgN5O3wVDnbsWI&usp=sharing'],
  ['nombre' => 'Alto de la Vuelta, Cesar', 'descripcion' => '', 'mapa' => 'https://www.google.com/maps/d/u/0/embed?mid=1TG6-NQN_HbZVhWLtzUOsUFarTdZXosE&usp=sharing'],
  ['nombre' => 'Badillo, Cesar', 'descripcion' => '', 'mapa' => 'https://www.google.com/maps/d/u/0/embed?mid=1xhcPS35S6PAEbqv0uZIBFg__mnQKy6k&usp=sharing'],
  ['nombre' => 'Conejo, Cesar', 'descripcion' => '', 'mapa' => 'https://www.google.com/maps/d/u/0/embed?mid=1MCyWqhAt4PUekHl_vii16_rmi27OwXw&usp=sharing'],
  ['nombre' => 'Los Haticos, La Guajira', 'descripcion' => '', 'mapa' => 'https://www.google.com/maps/d/u/0/embed?mid=19TrSHVx49RgRgqSFe8g7lhCDjl9_YE4&usp=sharing'],
  ['nombre' => 'La Junta, La Guajira', 'descripcion' => '', 'mapa' => 'https://www.google.com/maps/d/u/0/embed?mid=1zT_ej8cfc1ta8qaEpZI1CxKRLO74E7g&usp=sharing'],
  ['nombre' => 'La Peña, La Guajira', 'descripcion' => '', 'mapa' => 'https://www.google.com/maps/d/u/0/embed?mid=1_1H8kcp5aABsxKzUY-fyaEtD-c9v2fY&usp=sharing'],
  ['nombre' => 'La Mina, Cesar', 'descripcion' => '', 'mapa' => 'https://www.google.com/maps/d/u/0/embed?mid=1sKzaP49y41Um3RfybgJWh_oxOA0agTE&usp=sharing'],
  ['nombre' => 'Atanquez, Cesar', 'descripcion' => '', 'mapa' => 'https://www.google.com/maps/d/u/0/embed?mid=1FC-0nNPhbGKChBKQro4oNEudz1GG1uo&usp=sharing'],
  ['nombre' => 'Los Haticos I y II, Cesar', 'descripcion' => '', 'mapa' => 'https://www.google.com/maps/d/u/0/embed?mid=1llxJPiyWIp7WzMU3krB_hi-LW2qKDLA&usp=sharing'],
  ['nombre' => 'La Vega, Cesar', 'descripcion' => '', 'mapa' => 'https://www.google.com/maps/d/u/0/embed?mid=1XG8YuJF7723u25GUIiZHtwagewyZ29o&usp=sharing'],
  ['nombre' => '', 'descripcion' => '', 'mapa' => ''],

  
  // Agrega más zonas aquí
];
?>

<section id="zonas" class="zonas">
  <div class="container">
    <header class="section-header">
      <p>Zonas de cobertura</p>
    </header>
    <ul class="nav nav-tabs mb-3" id="zonasTab" role="tablist">
      <?php foreach ($zonas as $i => $zona): ?>
        <li class="nav-item" role="presentation">
          <button class="nav-link <?php echo $i === 0 ? 'active' : ''; ?>" id="zona<?php echo $i; ?>-tab" data-bs-toggle="tab" data-bs-target="#zona<?php echo $i; ?>" type="button" role="tab" aria-controls="zona<?php echo $i; ?>" aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>">
            <?php echo htmlspecialchars($zona['nombre']); ?>
          </button>
        </li>
      <?php endforeach; ?>
    </ul>
    <div class="tab-content" id="zonasTabContent">
      <?php foreach ($zonas as $i => $zona): ?>
        <div class="tab-pane fade <?php echo $i === 0 ? 'show active' : ''; ?>" id="zona<?php echo $i; ?>" role="tabpanel" aria-labelledby="zona<?php echo $i; ?>-tab">
          <h3><?php echo htmlspecialchars($zona['nombre']); ?></h3>
          <p><?php echo htmlspecialchars($zona['descripcion']); ?></p>
          <div class="zona-mapa mb-4">
            <iframe src="<?php echo htmlspecialchars($zona['mapa']); ?>" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
  

<main id="main">
    <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-blog-posts" class="recent-blog-posts">



</section><!-- End Recent Blog Posts Section -->
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

</body>

</html>