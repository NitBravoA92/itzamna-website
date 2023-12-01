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
        <li class=""><a href="programas">Programas</a></li>
        <li class=""><a href="cursos-horarios">Horarios y Cursos</a></li>
        <li class="active"><a href="contacto">Contacto</a></li>
        
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
            <h2>CONTACTO</h2>
            <p></p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="inicio">Inicio</a></li>
          <li>Contacto</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div>
        <iframe style="border:0; width: 100%; height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3830.5724311721838!2d-93.27773588513925!3d16.242406488774105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85933b7bb45deb37%3A0x1031f34e38ac3761!2sCentro%20Educativo%20Itzamn%C3%A1!5e0!3m2!1ses-419!2sve!4v1625266411060!5m2!1ses-419!2sve" frameborder="0" allowfullscreen="" loading="lazy"></iframe>
        </div>
        
        <div class="row mt-5">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Ubicación:</h4>
                <p>Libramiento norte, Col. Nambiyugua,<br>
              30471, Villaflores, Chis. Estados Unidos Mexicanos.</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Correo Electronico:</h4>
                <p>info@ceitzama.com.mx</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Llamanos:</h4>
                <p>965 110 9941</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre y Apellido" data-rule="minlen:4" data-msg="Por favor, ingrese al menos 4 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo electronico" data-rule="email" data-msg="Por favor, ingrese una dirección de Correo Electronico valida" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor, ingrese al menos 8 caracteres" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor, escriba algo para nosotros" placeholder="Mensaje"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Su mensaje ha sido enviado. Muchas Gracias por comunicarse con nosotros!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include_once("includes/footer.php") ?>