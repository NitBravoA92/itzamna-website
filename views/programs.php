<?php include_once("includes/header.php") ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <a href="inicio"><img src=<?= ASSETS . "img/logo-web.png" ?> alt="Logo Itzamná" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          
          <li class=""><a href="inicio">Inicio</a></li>
          <li class="drop-down"><a href="#">Nosotros</a>
            <ul>
              <li class=""><a href="institucion">Institución</a></li>
              <li class=""><a href="equipo-educativo">Equipo educativo</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Perfiles</a>
            <ul>
              <li class=""><a href="perfil-ingreso">Ingreso</a></li>
              <li class=""><a href="perfil-egreso">Egreso</a></li>
            </ul>
          </li>
        <li class="active"><a href="programas">Programas</a></li>
        <li class=""><a href="cursos-horarios">Horarios y Cursos</a></li>
        <li class=""><a href="contacto">Contacto</a></li>
        
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>PROGRAMAS DE ESTUDIO</h2>
            <p></p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="inicio">Inicio</a></li>
          <li>Programas de Estudio</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services  section-bg ">
      <div class="container">

        <div class="section-title pt-5" data-aos="fade-down">
          <h2>MAPA CURRICULAR</h2>
        </div>

        <div class="row">
          <div class="col-lg-12" data-aos="fade-up">
            <img src=<?= ASSETS . "img/programas-img-00.jpg" ?> class="img-fluid" alt="Programa de Asignatura">
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

      <div class="section-title pt-5" data-aos="fade-down">
          <h2>PROGRAMAS</h2>
        </div>

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src=<?= ASSETS . "img/programas-img-01.jpg" ?> class="img-fluid" alt="Programa de Asignatura">
            <img src=<?= ASSETS . "img/programas-img-02.jpg" ?> class="img-fluid" alt="Programa de Asignatura">
            <img src=<?= ASSETS . "img/programas-img-03.jpg" ?> class="img-fluid" alt="Programa de Asignatura">
            <img src=<?= ASSETS . "img/programas-img-04.jpg" ?> class="img-fluid" alt="Programa de Asignatura">
            <img src=<?= ASSETS . "img/programas-img-05.jpg" ?> class="img-fluid" alt="Programa de Asignatura">
          </div>
        </div>

        <div class="portfolio-description">
          <h2 id="titulo-asignatura">Bellas Artes</h2>
          <p id="descripcion-asigntura">
            La presencia del arte en la educación contribuye al desarrollo integral y pleno de los niños. Esta se caracteriza por enriquecer y realizar un gran aporte cognitivo en el desarrollo de las habilidades y destrezas de los estudiantes, como el emprendimiento, la diversidad cultural, la innovación, la creatividad o la curiosidad.<br>Las artes estimulan la imaginación y ayudan al desarrollo de la creatividad, aumentando la capacidad de percibir y el deseo de investigar y explorar nuestro entorno. Solamente a través de los sentidos puede tener lugar el aprendizaje.<br>Se busca que el alumno desarrolle sus habilidades utilizando los conocimientos adquiridos en esta área para contribuir en su sociedad.<br>
          </p>
        </div>

      </div>

    </section><!-- End Portfolio Details Section -->
    
  </main><!-- End #main -->

  <?php include_once("includes/footer.php") ?>