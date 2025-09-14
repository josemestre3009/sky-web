<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Politica de Tratamiendo de la Informacion</title>
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

</head>

<body>
<!-- ======= Header ======= -->
<?php include_once ('header.php'); ?>
<!-- End Header -->

<main id="main">
   <!-- ======= Hero Section ======= -->
<section class="entry-content">
    <div class="container" data-aos="fade-up">
    <br><br><br><br><br><br><br><br><br>

    <!-- Cuadro de Fecha y Hora -->
    <div class="fecha-hora-section">
        <h3 class="fecha-hora-titulo">Fecha y Hora Actual de Colombia</h3>
        <div id="fecha-hora" class="fecha-hora-container">
            Cargando fecha y hora...
        </div>
    </div>

    <iframe width="100%" height="650px" frameborder="0" src="https://sky-soluciones.speedtestcustom.com"></iframe>
    
    </div>
</section><!-- End Hero -->
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

<!-- Script Fecha y Hora -->
<script>
function actualizarFechaHora() {
    let ahora = new Date();
    let opciones = { 
        weekday: 'long', year: 'numeric', month: 'long', 
        day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' 
    };
    let fechaHora = ahora.toLocaleDateString('es-CO', opciones);
    document.getElementById("fecha-hora").innerHTML = fechaHora;
}
setInterval(actualizarFechaHora, 1000);
actualizarFechaHora();
</script>

</body>
</html>
