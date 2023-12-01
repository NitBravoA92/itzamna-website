/**
* Template Name: Serenity - v2.2.1
* Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
!(function($) {
  "use strict";

  // Smooth scroll for the navigation menu and links with .scrollto classes
  var scrolltoOffset = $('#header').outerHeight() - 1;
  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      e.preventDefault();
      var target = $(this.hash);
      if (target.length) {

        var scrollto = target.offset().top - scrolltoOffset;

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function() {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top - scrolltoOffset;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  // Mobile Navigation
  if ($('.nav-menu').length) {
    var $mobile_nav = $('.nav-menu').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
    $('body').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      $('.mobile-nav-overly').toggle();
    });

    $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    });

    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }

  // Toggle .header-scrolled class to #header when page is scrolled
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // jQuery counterUp
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Skills section
  $('.skills-content').waypoint(function() {
    $('.progress .progress-bar').each(function() {
      $(this).css("width", $(this).attr("aria-valuenow") + '%');
    });
  }, {
    offset: '80%'
  });

  // Clients carousel (uses the Owl Carousel library)
  $(".clients-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 2
      },
      768: {
        items: 4
      },
      900: {
        items: 6
      }
    }
  });

  // Porfolio isotope and filter
  $(window).on('load', function() {
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item',
      layoutMode: 'fitRows'
    });

    $('#portfolio-flters li').on('click', function() {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');

      portfolioIsotope.isotope({
        filter: $(this).data('filter')
      });
      aos_init();
    });

    // Initiate venobox (lightbox feature used in portofilo)
    $(document).ready(function() {
      $('.venobox').venobox();
    });
  });

  // Portfolio details carousel
  $(".portfolio-details-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

$('.portfolio-details-carousel').on('changed.owl.carousel', function (e) {
    // Obtener posición del elemento activo
    let index = e.item.index;
    // Solo si hay un elemento válido
    
    if(index >= 0) {

      if (index == 3) 
      {
        $('#titulo-asignatura').text('Bellas Artes');
        $('#descripcion-asigntura').html('La presencia del arte en la educación contribuye al desarrollo integral y pleno de los niños. Esta se caracteriza por enriquecer y realizar un gran aporte cognitivo en el desarrollo de las habilidades y destrezas de los estudiantes, como el emprendimiento, la diversidad cultural, la innovación, la creatividad o la curiosidad.<br>Las artes estimulan la imaginación y ayudan al desarrollo de la creatividad, aumentando la capacidad de percibir y el deseo de investigar y explorar nuestro entorno. Solamente a través de los sentidos puede tener lugar el aprendizaje.<br>Se busca que el alumno desarrolle sus habilidades utilizando los conocimientos adquiridos en esta área para contribuir en su sociedad.');      
      }
      else if (index == 4){
        $('#titulo-asignatura').text('Deportes');
        $('#descripcion-asigntura').html('La práctica deportiva desde edades tempranas ayuda en muchos aspectos del desarrollo de los niños. Las actividades grupales mejoran la interacción y la integración social, además de que mejoran el nivel mental y hacen más probable una vida saludable en la edad adulta ya que los hábitos que adquirimos de pequeños, suelen permanecer.<br>El deporte y el ejercicio físico contribuyen en la formación integral de los estudiantes, fomentando también el cuidado de su cuerpo, adoptando acciones que favorezcan su salud tanto física como mental.<br>Dentro de esta área también se incluirán los juegos tradicionales de la región para el rescate de la cultura en las nuevas generaciones.<br>Por ello se diseñaron diversas actividades deportivas para que los niños desarrollen sus distintas capacidades al mismo tiempo que aprenden de manera transversal con las otras áreas.');
      }
      else if (index == 5){
        $('#titulo-asignatura').text('Inteligencia Emocional');
        $('#descripcion-asigntura').html('La inteligencia emocional se refiere a la capacidad de los individuos para reconocer sus propias emociones y las de los demás, discriminar entre diferentes sentimientos y etiquetarlos apropiadamente, utilizar información emocional para guiar el pensamiento y la conducta, y administrar o ajustar las emociones para adaptarse al ambiente o conseguir objetivos.<br>Siempre ha resultado difícil hacer este reconocimiento de emociones, lo cual siempre van acompañados de malas decisiones, de la falta de discernimiento en la información, de los malos hábitos de vida y la falta de estos en la vida cotidiana. Es por ello que el desarrollo de la inteligencia emocional resulta determinante en todo el proceso de formación del ser humano.<br>No se trata de formar a un individuo frío en emociones y en sus actos, ni de promover la erradicación de emociones que son tan naturales en el ser humano. Se trata más bien, de saber superar cada etapa, cada emoción y que estos no se adueñen de nuestras decisiones. Es decir, se trata de humanizar al alumno. De promover una educación más humana y humanizadora.');
      }
      else if (index == 6){
        $('#titulo-asignatura').text('Ecotecnias');
        $('#descripcion-asigntura').html('Hoy la educacion en Ecotecnias adquiere una mayor relevancia pues constituye un ángulo a través de cual es posible fomentar y promover la adquisición de conocimientos, generar actitudes, desarrollar habitos, cultivar valores para el medio ambiente.<br>Para esto se pretende promover una conciencia basada en el desarrollo sustentable, a través de desarrollos productivos comunitarios sustentados en una economia solidaria estableciendo una relación entre el medio ambiente y el desarrollo económico; a través del consumo conciente y responsable como parte de las actividades satisfactorias para la naturaleza y las personas en concordancia con el bienestar social restableciendo un mundo sano, limpio y justo.');
      }
      else{
        $('#titulo-asignatura').text('Educación Tecnológica');
        $('#descripcion-asigntura').html('La Tecnología es un tema de actualidad, porque influye cada vez más en nuestras vidas. Es importante conocer la Tecnología y saber utilizarla, para aprovechar los beneficios que supone tenerla en muchos ámbitos de nuestra vida.<br>si vivimos en un mundo signado por la tecnología, la escuela no puede permitir que quienes salgan de sus aulas no conozcan y comprendan ese mundo artificial hecho por el hombre, en otras palabras, que sean analfabetos tecnológicos, de allí la inclusión, en los nuevos esquemas educativos, de la tecnología como disciplina de formación general.');
      }    
    }
});


  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });
  
  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 800,
      easing: "ease-in-out",
      once: true
    });
  }
  $(window).on('load', function() {
    aos_init();
  });

})(jQuery);