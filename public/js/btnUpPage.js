(function ($) {

  $(document).ready(function() {
      // Boton de subir scroll
    // Limite para mostrar el boton
    var limitBtnUp = window.innerHeight + (window.innerHeight / 2);

    if ($(document).height() >= limitBtnUp) {
      // Verificamos que exista el boton de subir la pagina
      if (!$('span.btn-top-page').length) {
        // Si no existe lo agregamos
        $('body').append('<span class="btn btn-default btn-top-page"></span>');
        // Añadimos la funcinalidad del widget al boton
        $('.btn-top-page').css({
          'background-color': 'white',
          'background-image': 'url(./public/js/up-arrow.svg)',
          'background-position': 'center',
          'background-repeat': 'no-repeat',
          'background-size': '35px',
          'border-radius': '50%',
          'display': 'none',
          'opacity': '0.5',
          'padding': '17px',
          'position': 'fixed',
          'right': '10px',
          'top': '90%',
          'zIndex': '1000'
        });
      }
      var $btnUp = $('span.btn-top-page');

      // Scroll superior e inferior del documento en relacion a la ventana
      var windowTop = $(document).scrollTop();
      var windowBottom = windowTop + window.innerHeight;

      if (windowBottom >= limitBtnUp && !$btnUp.hasClass('btn-up-exists')) {
        // Muestra el boton de subir pagina cuando el scroll pasa el limite
        $btnUp.css({
          opacity: '0.5',
          zIndex: '1000',
          display: 'block'
        });
        $btnUp.addClass('btn-up-exists').removeClass('btn-up-not-exists');
      }

      $(document).scroll(function() {
        // Nueva posicion del scroll en top y en bottom
        windowTop = $(document).scrollTop();
        windowBottom = windowTop + window.innerHeight;

        if (windowBottom > limitBtnUp && !$btnUp.hasClass('btn-up-exists')) {
          // Muestra el boton de subir pagina cuando el scroll pasa el limite
          $btnUp.css({
            opacity: '0.5',
            zIndex: '1000',
            display: 'block'
          });
          $btnUp.addClass('btn-up-exists').removeClass('btn-up-not-exists');

        } else if (windowBottom < limitBtnUp && !$btnUp.hasClass('btn-up-not-exists')) {
          // Oculta el boton de subir pagina cuando el scroll es menor que el limite
          $btnUp.fadeOut(function() {
            // Estilos
            $(this).css({
              zIndex: '0'
            });
          });
          $btnUp.addClass('btn-up-not-exists').removeClass('btn-up-exists');
        }
      });

      $btnUp.mouseover(function() {
        if ($(this).hasClass('btn-up-exists')) {
          // Al hacer hover sobre el boton
          $(this).css('opacity', 0.8);
        }
      })
      .mouseout(function() {
        if ($(this).hasClass('btn-up-exists')) {
          // Al quitar hover sobre el boton
          $(this).css({
            opacity: '0.5',
          });
        }
      })
      .click(function() {
        // Al dar click en el boton
        $('html, body').animate({
          scrollTop : 0
        }, 800);
      });
    }
  });
})(jQuery);


