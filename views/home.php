<?php include_once("includes/header.php") ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <a href="inicio"><img src=<?= ASSETS . "img/logo-web.png" ?> alt="Logo Itzamná" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="inicio">Inicio</a></li>

          <li class="drop-down"><a href="#">Nosotros</a>
            <ul>
              <li class=""><a href="institucion">Institución</a></li>
              <li><a href="equipo-educativo">Equipo educativo</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Perfiles</a>
            <ul>
              <li class=""><a href="perfil-ingreso">Ingreso</a></li>
              <li><a href="perfil-egreso">Egreso</a></li>
            </ul>
          </li>
          <li><a href="programas">Programas</a></li>
          <li><a href="cursos-horarios">Horarios y Cursos</a></li>
          <li><a href="contacto">Contacto</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up"></div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="icofont-users-social"></i>
                  <span data-toggle="counter-up">120</span>
                  <p>Alumnos</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="icofont-users-alt-4"></i>
                  <span data-toggle="counter-up">15</span>
                  <p>Docentes</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                  <i class="icofont-library"></i>
                  <span data-toggle="counter-up">10</span>
                  <p>Secciones</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                  <i class="icofont-award"></i>
                  <span data-toggle="counter-up">1</span>
                  <p>Premio "Escuela Innovadora"</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline">
            <img src=<?= ASSETS . "img/about.jpg" ?> class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LrhEFMANo6U" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3>Centro Educativo Itzamná</h3>
            <p class="font-italic">
              Pretende formar educandos con esenciales enfoques, empezando con el carácter humanista, donde el estudiante pueda generar todos los elementos necesarios que permitan que las experiencias de aprendizaje se conviertan en situaciones gratificantes y motivadoras que propicien un desarrollo socio-afectivo y generen procesos de sensibilización, reflexión, análisis, creatividad y potencie la capacidad de disfrutar del conocimiento, a formar su juicio y enriquecer su visión mental, enriquecidos por relaciones humanas de respeto y confianza en un ambiente escolar democrático. 
            </p>

            <a href="institucion" class="btn-get-started scrollto">Leer Más</a>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services  section-bg ">
      <div class="container">

        <div class="section-title pt-5" data-aos="fade-up">
          <h2>PROGRAMAS</h2>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="las la-palette" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Bellas Artes</a></h4>
              <p class="description">Las artes estimulan la imaginación y ayudan al desarrollo de la creatividad, aumentando la capacidad y el deseo de explorar nuestro entorno.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon">
              <i class="las la-volleyball-ball" style="color: #e9bf06;"></i>
              
              </div>
              <h4 class="title"><a href="">Deportes</a></h4>
              <p class="description">La práctica deportiva desde edades tempranas ayuda en muchos aspectos del desarrollo de los niños.</p>
            </div>
          </div>

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="las la-sad-cry" style="color: #3fcdc7;"></i></div>

              <h4 class="title"><a href="">Inteligencia Emocional</a></h4>
              <p class="description">La inteligencia emocional se refiere a la capacidad de los individuos para reconocer sus propias emociones y las de los demás.</p>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="las la-solar-panel" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Ecotecnias</a></h4>
              <p class="description">La educación en Ecotecnias constituye un ángulo a través del cual es posible fomentar y cultivar valores para el medio ambiente.</p>
            </div>
          </div>

          <div class="col-md-12" data-aos="fade-down" data-aos-delay="100">
          <div class="section-title pt-5" id="inicio-programas-read-more">
          <a href="programas" class="btn-get-started scrollto">Ver Más</a>
        </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title pt-5" data-aos="fade-up">
          <h2>OPINIONES DE LA COMUNIDAD</h2>
        </div>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src=<?= ASSETS . "img/users-men.webp" ?> class="testimonial-img" alt="">
            <h3>Saul Mendez</h3>
            <h4>Supervisor del Distrito Escolar N° 15, Villaflores - Chiapas</h4>
            <p>
              <img src=<?= ASSETS . "img/quote-sign-left.png" ?> class="quote-sign-left" alt="">
              Excelente Centro Educativo que promueve el amor a la naturaleza y el rescate de nuestras tradiciones.
              <img src=<?= ASSETS . "img/quote-sign-right.png" ?> class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src=<?= ASSETS . "img/users-women.png" ?> class="testimonial-img" alt="">
            <h3>Sara Marcano</h3>
            <h4>Directora de la Escuela Primaria Maria Auxiliadora, Villafores - Chiapas</h4>
            <p>
              <img src=<?= ASSETS . "img/quote-sign-left.png" ?> class="quote-sign-left" alt="">
               Una visión diferente de la escuela donde integran diferentes áreas para educar con conciencia social.
              <img src=<?= ASSETS . "img/quote-sign-right.png" ?> class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src=<?= ASSETS . "img/users-women.png" ?> class="testimonial-img" alt="">
            <h3>Carmen Rincón</h3>
            <h4>Integrante Comite de Padres de Familia - Centro Educativo Itzamná. Villaflores - Chiapas</h4>
            <p>
              <img src=<?= ASSETS . "img/quote-sign-left.png" ?> class="quote-sign-left" alt="">
              Itzamná es un centro educativo capaz de formar sujetos que puedan mejorar su contexto.
              <img src=<?= ASSETS . "img/quote-sign-right.png" ?> class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src=<?= ASSETS . "img/users-men.webp" ?> class="testimonial-img" alt="">
            <h3>Marcelo Ramirez</h3>
            <h4>Presidente Municipal de Villaflores, Chiapas</h4>
            <p>
              <img src=<?= ASSETS . "img/quote-sign-left.png" ?> class="quote-sign-left" alt="">
              Es un proyecto muy innovador y visionario, una verdadera revolución cultural, ambientalista y de rescate y fomento de nuestros valores. Es un paso más hacia la evolución de nuestro municipio, de su gente, de nuestra cultura y economia. 
              <img src=<?= ASSETS . "img/quote-sign-right.png" ?> class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->


  </main><!-- End #main -->

<?php include_once("includes/footer.php") ?>