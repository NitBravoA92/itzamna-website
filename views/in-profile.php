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
              <li class="active"><a href="perfil-ingreso">Ingreso</a></li>
              <li class=""><a href="perfil-egreso">Egreso</a></li>
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
            <h2>PERFIL DE INGRESO</h2>
            <p></p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="inicio">Inicio</a></li>
          <li>Perfil de Ingreso</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="row mt-4">
          <div class="col-lg-6 col-md-6">
            <div class="box" data-aos="fade-right">
              <h3>En lo humanista</h3>
              
              <img src=<?= ASSETS . "img/humanismo-ingreso.jpg" ?> class="img-fluid" alt="">

              <ul class="mt-4">
                <li><i class="icofont-check"></i> Mantenga una actitud de respeto a los que lo rodean.</li>

                <li><i class="icofont-check"></i> Sea capaz de expresarse, dialogar y conversar con los otros de acuerdo a su edad.</li>

                <li><i class="icofont-check"></i> Demuestre actitudes positivas en su entorno familiar, escolar y comunitario.</li>

                <li><i class="icofont-check"></i> Practique valores como parte de su formación integral.</li>
              </ul>
             
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="fade-left" data-aos-delay="100">
              <h3>En lo intercultural</h3>

              <img src=<?= ASSETS . "img/perfiles-05.jpg" ?> class="img-fluid" alt="">

              <ul class="mt-4">
                <li><i class="icofont-check"></i> Establezca relaciones de amistad con sus pares sin tener en cuenta las diferencias.</li>

                <li><i class="icofont-check"></i> Demuestre una actitud de respeto y tolerancia con sus pares, familia y medio ambiente.</li>

                <li><i class="icofont-check"></i> Se integre sin dificultad con los otros, en el grupo, juego y otras actividades.</li>

                <li></li>

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
                <li><i class="icofont-check"></i> Utilice y valore el lenguaje oral como instrumento de comunicación eficaz.</li>

                <li><i class="icofont-check"></i> Demuestre sus capacidades y destrezas en el razonamiento de problemas su vida diaria.</li>

                <li><i class="icofont-check"></i> Mantenga una actitud de búsqueda e indagación de los fenómenos que le rodean.</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-left" data-aos-delay="300">
              
              <h3>En lo socioemocional</h3>
              
              <img src=<?= ASSETS . "img/perfiles-04.jpg" ?> class="img-fluid" alt="">

              <ul class="mt-4">
                <li><i class="icofont-check"></i> Exprese sus sentimientos y emociones propios de su edad.</li>

                <li><i class="icofont-check"></i> Valore la importancia de mantener limpio el medio ambiente para una mejor calidad de vida en beneficio de la humanidad.</li>

                <li><i class="icofont-check"></i> Trabaja de forma responsable de manera individual y en equipo.</li>

                <li></li>
                <li></li>
              
              </ul>

            </div>
          </div>
      </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

  <?php include_once("includes/footer.php") ?>