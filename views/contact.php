<?php
include('connectsql.php');
if (isset($message) && isset($classMessage)):?>
  <div id="wrapper-messages" class="text-center text-white <?php print($classMessage); ?>">
    <div class="inner">
      <span class="close-message">x</span>
      <?php print($message); ?>
    </div>
  </div>
<?php
endif;
?>
<section class="row-page row-contact">
  <div class="inner-row inner-contact content-grid">
    <header>
      <h2 class="text-center block-title text-white"><span>Hey!!</span></h2>
    </header>
    <div class="content text-white">
      <div class="item-content content-text">
        <h2>¿Quieres saber de nosotros?</h2>
        <p>Soluciones de sofware a la medida de las necesidades individuales y personalizados de cada empresa.</p>
        <ul class="address">
          <li>
            <img class="text-center" src="public/images/location.svg" alt="Ubicación" title="Bogotá D.C., Colombia">
            <span>
              <!-- 1600 Pennsylvania Ave NW,<br> -->
              Bogotá D.C., Colombia
            </span>
          </li>
          <li>
            <img class="text-center" src="public/images/mail.svg" alt="Email" title="<?php print SITEEMAIL; ?>">
            <span><?php print SITEEMAIL; ?></span>
          </li>
          <!-- <li>
            <img class="text-center" src="public/images/phone.svg">
            <span>+1-202-555-0144</span>
          </li> -->
          <li>
            <img class="text-center" src="public/images/world.svg" alt="Página web" title="www.insidestudioweb.com">
            <span><a href="#" class="text-main" title="www.insidestudioweb.com">www.insidestudioweb.com</a></span>
          </li>
        </ul>
      </div>
      <div class="item-content content-form">
        <h2>Escribenos</h2>
        <form role="form" action="/" method="POST">
          <div class="form-group">
            <input class="form-control text-white" name="user_name" placeholder="Ingrese su nombre" type="text">
          </div>
          <div class="form-group">
            <input class="form-control text-white" name="user_email" placeholder="Ingrese su Email" type="email">
          </div>
          <div class="form-group">
            <textarea class="form-control  text-white" name="user_message" rows="5" required="" placeholder="Mensaje..."></textarea>
          </div>

          <button type="submit" class="btn medium text-white">Enviar mensaje</button>
        </form>
      </div>
    </div>
  </div>
</section>