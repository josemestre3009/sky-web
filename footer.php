<?php
include "config.php";
?>
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    

<div class="footer-top">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.php" class=" d-flex align-items-center">
          <img src="assets/img/logo.png" alt="SKY" style="height:170px; width:auto;">


        </a>
        
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4></h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php#about">Nosotros</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php#pricing">Planes</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="Velocidad.php">Test de Velocidad</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="tratamiento.php">Politica de Tratamiento de Datos</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contáctenos</h4>
        <p>
        <?php echo $Direccion;?> <br>
          <?php echo $Ciudades;?><br>
          <br>
          <strong>Telefono:</strong> <?php echo $Telefono;?><br>
          <strong>Email:</strong> <?php echo $Correo;?><br>
        </p>

      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    <strong><span><?php echo $NombreEmpresa;?> 2024™</span></strong>
  </div>
  
</div>
</footer><!-- End Footer -->