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
          <li><a class="nav-link scrollto" href="services.php">Servicios</a></li>
          <li><a class="nav-link scrollto" href="news.php">Noticias</a></li>
          <li><a class="nav-link scrollto active" href="contactus.php">Contáctanos</a></li>
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
          <li>Contáctanos</li>
        </ol>
        <h2>Contáctanos</h2>

      </div>
    </section>

    <!-- Sección Contáctanos -->
    <section class="contactus">
      <div class="container" data-aos="fade-up">
        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contáctanos</h2>

        <p class="text-center w-responsive mx-auto mb-5">¿Tienes alguna consulta? No dudes en contactarnos directamente. Nuestro equipo te responderá lo en la brevedad</p>
        <div class="contactus-div">

          <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0 list-datos">
              <li>
                <i class="bi bi-geo-alt-fill contactus-div-icon"></i>
                <p>Dirección</p>
              </li>
              <li><i class="bi bi-telephone-fill contactus-div-icon"></i>
                <p>Celular</p>
              </li>
              <li><i class="bi bi-envelope-fill contactus-div-icon"></i>
                <p>Correo Electrónico</p>
              </li>
            </ul>
          </div>

          <div class="col-md-9">
            <div class="col-md-9 mb-md-0 mb-5">
              <form class="formContactUs" id="formContactUs" name="formContactUs" method="POST">
                <!--Grid row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="md-form mb-5">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Nombre de tu Empresa">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form mb-5">
                      <input type="number" id="ruc" name="ruc" class="form-control" placeholder="RUC">
                    </div>
                  </div>
                </div>
                <!--Grid row-->
                <div class="row">
                  <div class="col-md-12">
                    <div class="md-form mb-5">
                      <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo">
                    </div>
                  </div>
                </div>
                <!--Grid row-->
                <div class="row">
                  <div class="col-md-12">
                    <div class="md-form mb-5">
                      <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Mensaje"></textarea>
                    </div>
                  </div>
                </div>
              </form>

              <button type="submit" class="col-md-12 btn-send">Enviar</button>

            </div>
          </div>
        </div>
      </div>

    </section>

  </main><!-- End #main -->

  <?php
  include "../views/footer.php";
  ?>

</body>

</html>