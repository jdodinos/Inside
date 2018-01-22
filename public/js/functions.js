$(document).ready(function() {
  // Añadir clase a header para ser fixed por css segun scroll
  // Solo cuando la documento es lo suficientemente alto para colocar fixed
  if ($('nav.navbar').length && $(document).height() > $(window).height()) {
    var posNavbar = $('nav.navbar').position();

    $(window).scroll(function() {
      // Si el scroll de la ventana llega a la posicion del header colocamos la clase
      if ($(this).scrollTop() >= posNavbar.top) {
        $('nav.navbar').addClass('navbar-fixed');
      } else if ($(this).scrollTop() < posNavbar.top) {
        // Quitamos clase al subir el scroll
        $('nav.navbar').removeClass('navbar-fixed');
      }
    });
  }

  // Mover al menu nav en click a imagen de ir abajo
  $('.move-to-nav').click(function() {
    var posNavbar = $('nav.navbar').position();

    $("html, body").animate({scrollTop: posNavbar.top}, 500);
  });

  // Scroll del menu de opciones de la landing page
  if ($('.nav-link').hasClass('auto-scroll')) {
    $('a.nav-link').click(function(event) {
      event.preventDefault();
      var wrapper = 'row-' + $(this).attr('wrapper');

      if ($('.' + wrapper).length) {
        var topWrapper = $('.' + wrapper).offset().top;
        var navHeight = $('nav.navbar').height();

        $('html, body').animate({
          'scrollTop': topWrapper
        }, 500);
      }
    });
  }
});