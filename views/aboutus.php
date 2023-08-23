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
          <li><a class="nav-link scrollto active" href="aboutus.php">Nosotros</a></li>
          <li><a class="nav-link scrollto" href="associates.php">Asociados</a></li>
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
          <li>Nosotros</li>
        </ol>
        <h2>Nosotros</h2>

      </div>
    </section>

    <!-- SECCION NOSOTROS -->
    <section id="aboutus" class="aboutus">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-6 entries">

            <article class="entry">
              <div class="entry-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title">
                ¿Quienes somos?
              </h2>
              <div class="entry-content">
                <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                  Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title">
                Misión 
              </h2>
              <div class="entry-content">
                <p>
                  Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
                  Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias odio quos distinctio.
                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title">
                Visión 
              </h2>
              <div class="entry-content">
                <p>
                  Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
                  Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias odio quos distinctio.
                </p>
              </div>
            </article>

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