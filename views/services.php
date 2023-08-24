<?php
require "../views/header.php";
?>

<body>
  <!-- HEADER -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="index.php" class="logo me-auto"><img src="../assets/img/logo-without.png" alt="camara de comercio, arequipa, peru" class="image-logo-without"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="../index.php">Inicio</a></li>
          <li><a class="nav-link scrollto" href="aboutus.php">Nosotros</a></li>
          <li><a class="nav-link scrollto" href="associates.php">Asociados</a></li>
          <li><a class="nav-link scrollto active" href="services.php">Servicios</a></li>
          <li><a class="nav-link scrollto" href="news.php">Noticias</a></li>
          <li><a class="nav-link scrollto" href="contactus.php">Contáctanos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <div class="d-flex align-items-end div-icons-header">
        <a href="#"><img class="icon-header" src="../assets/img/icons/gmail_icon.png" alt="gmail"></a>
        <a href="#"><img class="icon-header" src="../assets/img/icons/facebook_icon.png" alt="facebook"></a>
        <a href="#"><img class="icon-header" src="../assets/img/icons/instagram_icon.png" alt="insatagram"></a>
      </div>
    </div>
  </header>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../index.html">Inicio</a></li>
          <li>Servicios</li>
        </ol>
        <h2>Servicios</h2>

      </div>
    </section>

    <!-- SECCION NOSOTROS -->
    <section id="blog" class="blog">

    </section>
  </main><!-- End #main -->

  <?php
  include "../views/footer.php";
  ?>

</body>

</html>