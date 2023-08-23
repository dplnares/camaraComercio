<?php
  require "../views/header.php";
?>

<body>
  <!-- HEADER -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="#">Logo Camara</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="../index.php">Inicio</a></li>
          <li><a class="nav-link scrollto" href="aboutus.php">Nosotros</a></li>
          <li><a class="nav-link scrollto active" href="associates.php">Asociados</a></li>
          <li><a class="nav-link scrollto " href="services.php">Servicios</a></li>
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
          <li><a href="../index.php">Inicio</a></li>
          <li>Asociados</li>
        </ol>
        <h2>Asociados</h2>

      </div>
    </section>

    <!-- SECCION ASOCIADOS -->
    <section id="associates" class="associates">
      <div class="container" data-aos="fade-up">

        <div class="row row-cols-1 row-cols-md-5 g-4 cards-associates">
          <div class="col card-logo-asociado">
            <div class="card h-100">
              <div class="img-logo-asociado">
                <img src="../assets/img/clients/client-1.png" class="card-img-top" alt="asociado">
              </div>
              <div class="card-body-asociado">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>

          <div class="col card-logo-asociado">
            <div class="card h-100">
              <img src="../assets/img/clients/client-2.png" class="card-img-top" alt="asociado">
              <div class="card-body-asociado">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </div>

          <div class="col card-logo-asociado">
            <div class="card h-100">
              <img src="../assets/img/clients/client-3.png" class="card-img-top" alt="asociado">
              <div class="card-body-asociado">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
            </div>
          </div>

          <div class="col card-logo-asociado">
            <div class="card h-100">
              <img src="../assets/img/clients/client-4.png" class="card-img-top" alt="asociado">
              <div class="card-body-asociado">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>

          <div class="col card-logo-asociado">
            <div class="card h-100">
              <img src="../assets/img/clients/client-5.png" class="card-img-top" alt="asociado">
              <div class="card-body-asociado">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </div>


        </div>

        <div class="row row-cols-1 row-cols-md-5 g-4 cards-associates">
          

          <div class="col card-logo-asociado">
            <div class="card h-100">
              <img src="../assets/img/clients/client-6.png" class="card-img-top" alt="asociado">
              <div class="card-body-asociado">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
            </div>
          </div>

          <div class="col card-logo-asociado">
            <div class="card h-100">
              <img src="../assets/img/clients/client-7.png" class="card-img-top" alt="asociado">
              <div class="card-body-asociado">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>

          <div class="col card-logo-asociado">
            <div class="card h-100">
              <img src="../assets/img/clients/client-8.png" class="card-img-top" alt="asociado">
              <div class="card-body-asociado">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
  </main>

  <?php
    include "../views/footer.php";
  ?>

</body>

</html>