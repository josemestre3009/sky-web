<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Seguridad en la Red</title>
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
    <!-- ======= Hero Section ======= -->
<section class="entry-content">
    <div class="container" data-aos="fade-up">

    <header class="section-header">
      <br><br>
      <p>Seguridad en la Red</p>
    </header>
    

    <p style="font-weight: 400;"><strong>PHISHING:</strong></p><p style="font-weight: 400;">Definición:</p><p style="font-weight: 400;">El “phishing” es una modalidad de estafa diseñada con la finalidad de robarle al usuario su identidad. El delito consiste en obtener información tal como números de tarjetas de crédito, contraseñas, información de cuentas u otros datos personales por medio de engaños. Este tipo de fraude se recibe habitualmente a través de mensajes de correo electrónico o de ventanas emergentes.</p><p style="font-weight: 400;">Como funciona:</p><p style="font-weight: 400;">En esta modalidad de fraude, el usuario malintencionado envía millones de mensajes falsos que parecen provenir de sitios Web reconocidos o de su confianza, como un banco o la empresa de su tarjeta de crédito. Dado que los mensajes y los sitios Web que envían estos usuarios parecen oficiales, logran engañar a muchas personas haciéndoles creer que son legítimos. La gente confiada normalmente responde a estas solicitudes de correo electrónico con sus números de tarjeta de crédito, contraseñas, información de cuentas u otros datos personales.</p><p style="font-weight: 400;">Para que estos mensajes parezcan aún más reales, el estafador suele incluir un vínculo (link) falso que parece dirigir al sitio Web legítimo, pero en realidad lleva a un sitio falso o incluso a una ventana emergente que tiene exactamente el mismo aspecto que el sitio Web oficial. Estas copias se denominan “sitios Web piratas”. Una vez que el usuario está en uno de estos sitios Web, introduce información personal sin saber que se transmitirá directamente al delincuente, que la utilizará para realizar compras, solicitar una nueva tarjeta de crédito o robar su identidad.</p><p style="font-weight: 400;">Como Protegerse:</p><p style="font-weight: 400;">Este tipo de fraude debe contenerse a través del ISP y vía usuario.</p><p style="font-weight: 400;"> El usuario debe seguir estas recomendaciones para evitar que sea víctima de robo de su identidad:</p><p style="font-weight: 400;">Nunca responda a solicitudes de información personal a través de correo electrónico. Si tiene alguna duda, póngase en contacto con la entidad que supuestamente le ha enviado el mensaje. Tener especial cuidado en correos que supuestamente han sido enviados por entidades financieras y compras por Internet, como eBay, PayPal, bancos, etc. Solicitando actualizar datos de cuentas y/o accesos, ya que ninguna de estas entidades solicita este tipo de información por este medio.</p><p style="font-weight: 400;">Asegúrese que su PC cuente con las últimas actualizaciones a nivel de seguridad dadas por los fabricantes (Microsoft, Mac, etc…)</p><p style="font-weight: 400;">Para visitar sitios Web, introduzca directamente la dirección URL en la barra de direcciones.</p><p style="font-weight: 400;">Asegúrese de que el sitio Web utiliza cifrado.</p><p style="font-weight: 400;"> Si tiene instalado servidores Web, asegúrese que tanto el aplicativo como el sistema operativo cuenten con las últimas actualizaciones a nivel de seguridad dadas por los fabricantes correspondientes. Muchas veces los phishers buscan en la red servidores Web vulnerables que puedan ser utilizados para montar páginas que intentan suplantar la identidad de una entidad financiera, sin que el usuario se dé cuenta. Para el cliente, esto tiene como repercusión la afectación directa en su servicio de Internet, ya que la IP donde se encuentra alojada la página fraude es reportada por entidades internacionales pidiendo al ISP el bloqueo de la misma.</p><p style="font-weight: 400;"> Comunique los posibles delitos relacionados con su información personal a las autoridades competentes.</p><p style="font-weight: 400;">A nivel del ISP, actualmente <?php echo $NombreEmpresa;?> implementa filtros anti-spam que ayudan a proteger a los usuarios de los phishers, ya que reducen el número de correos electrónicos relacionados con el phishing recibidos por el usuario.</p><p style="font-weight: 400;"><strong><u>SPAM</u></strong></p><p style="font-weight: 400;">Definición:</p><p style="font-weight: 400;">Se llama spam, correo basura a los mensajes no solicitados, habitualmente de tipo publicitario, enviados en cantidades masivas que perjudican de una u otra manera a los usuarios que reciben este correo. Aunque su difusión se puede hacerse por distintas vías, lo más común es hacerlo vía correo electrónico.</p><p style="font-weight: 400;">Actualmente <?php echo $NombreEmpresa;?> cuenta con una plataforma que protege a los usuarios de este tipo de correos.</p><p style="font-weight: 400;">Normas básicas para evitar y reducir al mínimo el spam.</p><p style="font-weight: 400;">El spam es un problema que debe ser controlado desde diferentes frentes, tanto a nivel de usuarios como a nivel de los proveedores de Internet.</p><p style="font-weight: 400;">A nivel de usuario, se pueden seguir estas recomendaciones para evitar ser inundado por correo spam:</p><p style="font-weight: 400;">Si no se reconoce un remitente de un correo, no abrir los archivos adjuntos del mensaje, incluso si usted tiene un software bloqueador de spam y/o filtro de aplicación ejecutándose en su PC. Los archivos adjuntos a menudo incluyen software o aplicaciones malintencionadas que pueden tener efectos muy negativos sobre su PC, desde borrar su información más valiosa hasta capturar contraseñas, números de tarjetas de crédito, etc… sin que el usuario ni siquiera se entere. Estas aplicaciones no se pueden incluir en un mensaje de correo electrónico en texto plano, la cual es la razón por la que se empaquetan en los archivos adjuntos.</p><p style="font-weight: 400;"> Si recibe un correo spam, nunca haga clic en el vínculo “Quitar spam”, ya que lo que buscan los spammers es que el cliente verifique que esta dirección de correo está activa, añadiendo posiblemente su cuenta de correo a más y más listas de spam, lo cual ocasionará que usted reciba mayor cantidad de correo no deseado.</p><p style="font-weight: 400;">Algunos programas que utilizan los spammers tratan de adivinar las cuentas de correo a las cuales enviar correo no deseado, por lo cual es recomendable utilizar cuentas que contengas números y letras para que no sean fácilmente ubicadas.</p><p style="font-weight: 400;">Nunca dar click sobre enlaces (links) que se encuentren dentro de un mensaje de correo electrónico de un remitente desconocido. Probablemente pueda ser un caso de phishing para tratar de robar la identidad del usuario o puede activar un programa que silenciosamente descargue aplicaciones en su PC.</p><p style="font-weight: 400;">En caso de que usted conozca al remitente, igual la recomendación es no dar click sobre enlaces (links) que se encuentren dentro del mensaje. Uno nunca puede estar seguro de que quien envía el mensaje es realmente quien dice ser, ya que los spammers pueden cambiar la cuenta remitente, suplantando la identidad de otra persona.</p><p style="font-weight: 400;"> Para acceder a un enlace (link) dentro del mensaje, se recomienda cerrar el mensaje, y visitar el sitio en cuestión, introduciendo manualmente la URL (por ejemplo, www.google.com) en su navegador de Internet. Es la única manera de estar seguro que la página a la cual se está accediendo es la real.</p><p style="font-weight: 400;"> Para tratar de evitar que su cuenta sea ingresada en listas de correo utilizadas por los spammers, se recomienda que el usuario preste cuidado a los sitios donde ingresa y que le solicita registrarse (mediante una cuenta de correo), ya que existen muchos sitios Web inescrupulosos que venden estas cuentas registradas a redes de spammers.</p><p style="font-weight: 400;">Si tiene instalado servidores de correo, asegúrese que tanto el aplicativo como el sistema operativo cuenten con las últimas actualizaciones a nivel de seguridad dadas por los fabricantes correspondientes. En muchos casos, los servidores de correo, debido a configuraciones deficientes, permiten que cualquier persona, desde Internet, utilice estos servidores para enviar correos (conocido como Open Relay), afectando el servicio de correo del cliente y muy posiblemente será bloqueado en listas negras de Spam mantenidas a nivel mundial.</p><p style="font-weight: 400;"> En caso que ud como cliente tenga problemas en el envío de correos, para verificar que su IP no se encuentra reportada en listas negras de spam, puede revisar los siguientes enlaces para realizar la consulta:http://www.dnsstuff.com/</p><p style="font-weight: 400;"> En caso que su IP se encuentre reportada acceder al siguiente enlace para tramitar el desbloqueo: http://200.118.2.73/varios/bloqueoIPs.asp</p><p style="font-weight: 400;">Para que pueda ser efectivo este desbloqueo, el cliente deberá tomar las medidas correspondientes para evitar que se continúe enviando correo spam.</p><p style="font-weight: 400;">Hay que tener en cuenta que el tiempo de desbloqueo depende del sitio en el cual ha sido reportado una IP. Entre los sitios más frecuentes, están:</p><p style="font-weight: 400;"> www.aol.com: Tiempo de desbloqueo aprox. 48 horas</p><p style="font-weight: 400;">www.lashback.com: Tiempo de desbloqueo aprox. 1 hora</p><p style="font-weight: 400;">www.uceprotect.net: Tiempo de desbloqueo aprox. 7 días</p><p style="font-weight: 400;"> www.spamcop.net: Tiempo de desbloqueo aprox. 24 horas</p><p style="font-weight: 400;">www.dsbl.org: Tiempo de desbloqueo aprox. 7 días</p><p style="font-weight: 400;">WWW.WPBL.INFO: Tiempo de desbloqueo aprox. 1 hora</p><p style="font-weight: 400;"> WWW.MOENSTED.DK: Tiempo de desbloqueo aprox. 1 hora</p><p style="font-weight: 400;">www.comcast.com: Tiempo de desbloqueo aprox. 48 horas</p><p style="font-weight: 400;">www.abuso.cantv.net: Tiempo de desbloqueo aprox.48 horas</p><p style="font-weight: 400;"> www.spamhaus.org: Tiempo de desbloqueo aprox. 24 horas</p><p style="font-weight: 400;"><strong><u>VIRUS</u></strong></p><p style="font-weight: 400;">Definición:</p><p style="font-weight: 400;">Un virus informático es un programa que se copia automáticamente y que tiene por objeto alterar el normal funcionamiento del PC, sin el permiso o el conocimiento del usuario. Los virus pueden destruir, de manera intencionada, los datos almacenados en un PC, aunque también existen otros más “benignos”, que solo se caracterizan por ser molestos.</p><p style="font-weight: 400;">Los virus informáticos tienen, básicamente, la función de propagarse, replicándose, pero algunos contienen además una carga dañina (payload) con distintos objetivos, desde una simple broma hasta realizar daños importantes en los sistemas, o bloquear las redes informáticas generando tráfico inútil.</p><p style="font-weight: 400;">Como Protegerse: Similar al spam, los virus son un problema que debe ser controlado desde diferentes frentes, tanto a nivel de usuarios como a nivel de los proveedores de Internet.</p><p style="font-weight: 400;">A nivel de usuario, se pueden seguir estas recomendaciones para evitar ser víctima de los efectos de un virus informático:</p><p style="font-weight: 400;">Si no se reconoce un remitente de un correo, no abrir los archivos adjuntos del mensaje, incluso si usted tiene un software antivirus y/o filtro de aplicación ejecutándose en su PC. Los archivos adjuntos a menudo incluyen software o aplicaciones malintencionadas que pueden tener efectos muy negativos sobre su PC. Evite caer en técnicas conocidas como de Ingeniería social en la cual llega un correo electrónico con un mensaje del estilo “ejecute este programa y gane un premio”.</p><p style="font-weight: 400;">Evitar la instalación de software pirata o de baja calidad, mediante la utilización de redes P2P, ya que muchas veces, existen ciertos sitios que “prometen” la descarga de un aplicativo en particular, pero en realidad lo que el usuario descarga es un virus.</p><p style="font-weight: 400;">Asegurarse que su equipo PC cuente con las últimas actualizaciones a nivel de seguridad tanto a nivel de sistema operativo como de los aplicativos instalados, dadas por el fabricante. Existen algunos tipos de virus que se propagan sin la intervención de los clientes y que aprovechan debilidades de seguridad de los diferentes sistemas y aplicaciones, como por ejemplo los virus Blaster y Sasser.</p><p style="font-weight: 400;"> Instalar software antivirus en el PC, el cual esté actualizado con las últimas firmas dadas por el fabricante respectivo.</p><p style="font-weight: 400;">La empresa <?php echo $NombreEmpresa;?> cuenta actualmente con equipos especializados en la detección y filtrado de correos con virus, mediante filtros de tipo heurístico, firmas de virus reconocidos y adicional cuenta con filtros de tipo preventivo, que aunque a nivel público no se halla liberado una firma para contener una nueva amenaza, el sistema coloca en cuarentena este tipo de tráfico, hasta determinar si el tráfico es legal o hasta que se tenga la firma correspondiente a la propagación del nuevo virus o gusano. Todos los correos que los usuarios reciben y envían son filtrados por esta herramienta.</p>						
    <!-- TEXTOS AQUI-->
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

</body>

</html>