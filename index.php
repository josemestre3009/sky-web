<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo htmlspecialchars($NombreEmpresa, ENT_QUOTES, 'UTF-8');?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css?v=20250910-1" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css?v=20250910-1" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css?v=20250910-1" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css?v=20250910-1" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css?v=20250910-1" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css?v=20250910-1" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?v=20250910-1" rel="stylesheet">
  <!-- Custom Colors CSS -->
  <link href="assets/css/custom-colors.css?v=20250910-1" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php include_once ('header.php'); ?>
  

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <div class="pt-5 mt-5"></div>
          <h1 data-aos="fade-up">!Conéctate sin límites, navega sin fronteras¡</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">La mejor conexión para tu hogar, tu trabajo y tu diversión</h2>
          <h2 data-aos="fade-up" data-aos-delay="400">Disfruta streaming, clases, trabajo y juegos sin cortes</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#pricing" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Nuestros Planes</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <div class="pt-5 mt-5 d-none d-lg-block"></div>
          <img src="assets/img/oficina.JPG" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="services">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
        <header class="section-header">
      <p>Sobre Nosotros</p>
    </header>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <h3>Somos:</h3>
                <p class="text-justify">
                  Una empresa comprometida en ofrecer conectividad a nuestros clientes en <?php echo htmlspecialchars($Ciudades, ENT_QUOTES, 'UTF-8');?>, y sus alrededores. Nos caracterizamos por nuestra dedicación a proporcionar servicios de internet confiables, veloces y accesibles, adaptados a las necesidades específicas tanto de comunidades rurales como urbanas. Nuestra fortaleza radica en la calidad de nuestro servicio al cliente, nuestra infraestructura tecnológica robusta y nuestro enfoque en el desarrollo continuo para estar a la vanguardia del sector de las telecomunicaciones.
                </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <h3>Misión:</h3>
              <p class="text-justify">
                Nuestra misión es conectar hogares y empresas a través de un internet de calidad, brindando a nuestros usuarios una atención cálida y personalizada. Creemos que detrás de cada conexión hay personas, y por eso nos dedicamos a crear experiencias digitales confiables que mejoran la vida de nuestra comunidad.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <h3>Visión:</h3>
              <p class="text-justify">
                Aspiramos a convertirnos en el aliado digital preferido en Arauca y la región del Sarare, impulsando su transformación mediante soluciones tecnológicas innovadoras y accesibles. Queremos acercar el futuro digital a cada hogar y empresa, contribuyendo juntos al desarrollo social y económico de nuestra región.
              </p>
            </div>
          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              
              
            </div>
          </div>


        </div>
      </div>

    </section><!-- End About Section -->

    
<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing position-relative">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <p>Nuestros Planes de Conexión a INTERNET Más Populares</p>
    </header>
    <?php $total = count($plans); $mid = ceil($total/2); $i = 0; ?>
    <div class="row gy-4 justify-content-center align-items-stretch" data-aos="fade-left">
      <?php foreach ($plans as $plan): $i++; ?>
        <?php 
          $is_recommended = ($i == $mid);
          $extra_class = $is_recommended ? 'plan-destacado order-lg-2' : ($i < $mid ? 'order-lg-1' : 'order-lg-3');
        ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch <?php echo $extra_class; ?>">
          <div class="plan-card flex-fill d-flex flex-column justify-content-between <?php echo $is_recommended ? 'plan-recommended' : ''; ?>" data-aos="zoom-in" data-aos-delay="<?php echo 100 * $i; ?>">
            <?php if($is_recommended): ?>
              <div class="plan-badge">Recomendado</div>
            <?php endif; ?>
            <div class="plan-icon mb-3">
              <i class="bi <?php echo ($i==1?'bi-lightning-charge-fill':($i==$mid?'bi-star-fill':'bi-rocket-takeoff-fill')); ?>"></i>
            </div>
            <h3 class="plan-nombre"><?php echo htmlspecialchars($plan['NOMBRE'], ENT_QUOTES, 'UTF-8'); ?></h3>
            <div class="plan-precio mb-3">
              <span class="precio-simbolo">$</span>
              <span class="precio-numero"><?php echo number_format($plan['PRECIO'], 0, ',', '.'); ?></span>
              <span class="precio-periodo">/mes</span>
            </div>
            <ul class="plan-lista">
              <li><i class="bi bi-check-circle-fill"></i> Navegación ilimitada</li>
              <li><i class="bi bi-check-circle-fill"></i> Sin límite de descargas ni consumo</li>
              <li><i class="bi bi-arrow-up-right-circle"></i> Fibra óptica velocidad simétrica de <b><?php echo htmlspecialchars($plan['MEGAS'], ENT_QUOTES, 'UTF-8'); ?> Mbps</b></li>
            </ul>
            <div class="mt-auto pt-3 d-flex justify-content-center align-items-end">
              <a href="https://wa.me/<?php echo htmlspecialchars($Whatsapp, ENT_QUOTES, 'UTF-8'); ?>?text=Hola,%20vengo%20de%20la%20PaginaWeb%20y%20me%20interesa%20adquirir%20el%20plan%20<?php echo urlencode($plan['NOMBRE']); ?>" class="btn btn-plan">¡Adquirir Este Plan!</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section><!-- End Pricing Section -->
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3>LUCHAMOS CONTRA LA EXPLOTACIÓN INFANTIL EN INTERNET</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1"></a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">

                <p class="text-justify"><?php echo htmlspecialchars($NombreEmpresa, ENT_QUOTES, 'UTF-8');?>. lucha contra el maltrato infantil. Por esto se une a la ley 679 expedida por el Congreso de la República el 3 de agosto de 2001, para prevenir y contrarrestar la explotación, la pornografía y el turismo sexual con menores de edad: Por mandato de la Ley 679 de 2001, todas las personas deben prevenir, bloquear, combatir y denunciar la explotación, alojamiento, uso, publicitación, difusión de imágenes, textos, documentos, archivos audiovisuales, uso indebido de redes globales de información, o el establecimiento de vínculos telemáticos de cualquier clase relacionados con material pornográfico o alusivo a actividades sexuales de menores de edad, por cuanto podría generar responsabilidad de tipo penal». Esta ley se expidió con base en el artículo 44 de la Constitución Política y su objetivo primordial es proteger a los niños de la explotación y el abuso sexual y velar por que tengan un desarrollo sano e integral. Las empresas vinculadas a la Cámara Colombiana de Informática y Telecomunicaciones CCIT y al NAP Colombia nos unimos a la campaña organizada por el Gobierno Nacional contra la pornografía infantil.</p>
                
              </div><!-- End Tab 1 Content -->

              

            </div>

          </div>

          <div class="col-lg-6">
            <img src="assets/img/lucha.png" class="img-fluid" alt="">
          </div>

        </div><!-- End Feature Tabs -->

        

      </div>

    </section><!-- End Features Section -->

    

    

    

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          
          <p>DENUNCIA</p>
        </header>
        
        <div class="clients-slider swiper">
          <p>En caso de detectar en la red algún tipo de amenaza que atente contra su integridad y la de los suyos, comuníquese por favor con las siguientes instituciones oficiales encargadas para tal fin, donde también podrá acceder a las Líneas de Atención en Prevención de la Pornografía Infantil.</p>
          <b></b>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a href="https://www.fiscalia.gov.co/colombia/" target="_blank"> <img src="assets/img/clients/fiscalia.png" class="img-fluid" alt=""> </a></div>
            <div class="swiper-slide"><a href="https://www.policia.gov.co/" target="_blank"> <img src="assets/img/clients/policia.jpeg" class="img-fluid" alt=""> </a></div>
            <div class="swiper-slide"><a href="https://www.mintic.gov.co/portal/inicio/" target="_blank"> <img src="assets/img/clients/mintic.png" class="img-fluid" alt=""> </a></div>
            <div class="swiper-slide"><a href="https://www.icbf.gov.co/" target="_blank"> <img src="assets/img/clients/bienestar.png" class="img-fluid" alt=""> </a></div>
            <div class="swiper-slide"><a href="https://teprotejo.org/" target="_blank"> <img src="assets/img/clients/teprotego.jpeg" class="img-fluid" alt=""> </a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact-index" class="contact contact-index">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Contacto</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-whatsapp"></i>
                  <h3>WhatsApp</h3>
                  <strong><?php echo htmlspecialchars($Whatsapp, ENT_QUOTES, 'UTF-8');?></strong>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Teléfono</h3>
                  <strong><?php echo htmlspecialchars($Telefono, ENT_QUOTES, 'UTF-8');?></strong>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Correo</h3>
                  <strong><?php echo htmlspecialchars($Correo, ENT_QUOTES, 'UTF-8');?></strong>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Dirección</h3>
                  <p><?php echo htmlspecialchars($Direccion, ENT_QUOTES, 'UTF-8');?></p>
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
                  <input type="text" class="form-control" name="subject" placeholder="Asunto" required>
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

  <?php include_once ('footer.php'); ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js?v=20250910-1"></script>
  <script src="assets/vendor/aos/aos.js?v=20250910-1"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js?v=20250910-1"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js?v=20250910-1"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js?v=20250910-1"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js?v=20250910-1"></script>
  <script src="assets/vendor/php-email-form/validate.js?v=20250910-1"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js?v=20250910-2"></script>
  <!-- Navigation Fix JS -->
  <script src="assets/js/navigation-fix.js?v=20250910-1"></script>

</body>

</html>