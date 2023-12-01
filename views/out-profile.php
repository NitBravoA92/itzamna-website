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
          <li class="drop-down active"><a href="#">Perfiles</a>
            <ul>
              <li class=""><a href="perfil-ingreso">Ingreso</a></li>
              <li class="active"><a href="perfil-egreso">Egreso</a></li>
            </ul>
          </li>
        <li class=""><a href="programas">Programas</a></li>
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
            <h2>PERFIL DE EGRESO</h2>
            <p></p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="inicio">Inicio</a></li>
          <li>Perfil de Egreso</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="row mt-4">
          <div class="col-lg-6 col-md-6">
            <div class="box featured" data-aos="fade-right">
              <h3>En lo humanista</h3>
              
              <img src=<?= ASSETS . "img/humanismo-ingreso.jpg" ?> class="img-fluid" alt="">

              <ul class="mt-4">
                <li><i class="icofont-check"></i> Se reconoce como persona respetando y valorando las diversas características de los otros.</li>

                <li><i class="icofont-check"></i> Es coherente con su pensar y actuar incorporando valores en el diario vivir.</li>

                <li><i class="icofont-check"></i> Expresa con claridad sus sentimientos, ideas y emociones.</li>

                <li></li>
                <li></li>

              </ul>
             
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
            <div class="box" data-aos="fade-left" data-aos-delay="100">
              <h3>En lo intercultural</h3>
              
              <img src=<?= ASSETS . "img/perfiles-05.jpg" ?> class="img-fluid" alt="">

              <ul class="mt-4">
                <li><i class="icofont-check"></i> Favorece el diálogo y contribuye a una convivencia pacífica y sin discriminación.</li>

                <li><i class="icofont-check"></i> Conoce y respeta las diferencias culturales y diversidad de las personas.</li>

                <li><i class="icofont-check"></i> Conoce y valora su propia cultura, así como la de los demás.</li>

                <li><i class="icofont-check"></i> Reconoce la importancia de los conocimientos y saberes ancestrales.</li>

              </ul>
              
            </div>
          </div>
      </div>

      <div class="row mt-4">
          <div class="col-lg-6 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="fade-right" data-aos-delay="200">
              <h3>En lo académico</h3>

              <img src=<?= ASSETS . "img/perfiles-03.jpeg" ?> class="img-fluid" alt="">

              <ul class="mt-4">
                <li><i class="icofont-check"></i> Desarrolla habilidades y destrezas con asertividad y creatividad.</li>

                <li><i class="icofont-check"></i> Responde positivamente a situaciones problemáticas y las resuelve con autonomía y responsabilidad, ideando diversas soluciones.</li>

                <li><i class="icofont-check"></i> Aprovecha eficientemente los recursos tecnológicos y actividades productivas en su formación.</li>

                <li><i class="icofont-check"></i> Asume el aprendizaje como un agente transformador de su realidad y su entorno.</li>

                <li></li>
                <li></li>
                <li></li>

              </ul>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-left" data-aos-delay="300">

              <h3>En lo socioemocional</h3>

              <img src=<?= ASSETS . "img/perfiles-04.jpg" ?> class="img-fluid" alt="">

              <ul class="mt-4">
                <li><i class="icofont-check"></i> Aprecia y valora su persona adoptando buenos hábitos para conservar su salud.</li>

                <li><i class="icofont-check"></i> Es capaz de trabajar positivamente en equipo.</li>

                <li><i class="icofont-check"></i> Expresa sus puntos de vista y escucha las intervenciones de los demás, manteniendo una actitud respetuosa y tolerante.</li>

                <li><i class="icofont-check"></i> Se identifica con su realidad local, regional y nacional siendo consciente y responsable de su rol como buen ciudadano para el desarrollo de una sociedad justa.</li>

                <li><i class="icofont-check"></i> Cuida y respeta a su medio ambiente siendo un ciudadano comprometido con la preservación de la naturaleza.</li>
              </ul>

            </div>
          </div>
      </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

  <?php include_once("includes/footer.php") ?>