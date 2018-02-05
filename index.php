<?php
define('SITENAME', 'Inside Studio Web');
define('SITEEMAIL', 'insidestudioweb@gmail.com');

// Variables para metaetiquetas
$title = 'Soluciones a la medida | ' . SITENAME;
$description = 'Crea tu página web con ' . strtoupper(SITENAME) . '. Una NUEVA forma de darle un nivel a tu negocio!. ¡Es fácil! No necesitas saber de tecnología, preocupate por tu negocio y nosotros nos encargamos de tu WEB';
?>
<!DOCTYPE html>
<html>
<head>
<!-- Inside Studio Web -->
  <meta charset="utf-8">
  <title><?php print($title); ?></title>
  <link rel="stylesheet" type="text/css" href="./public/style/css/style.css">
  <link rel="alternate" hreflang="es" href="https://www.insidestudioweb.com"/>
  <!-- Meta etiquetas -->
  <meta name="description" content="<?php print($description); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Open Graph data -->
  <meta property="og:title" content="<?php print($title); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.insidestudioweb.com/">
  <meta property="og:image" content="https://www.insidestudioweb.com/public/images/header-back.jpg"/>
  <meta property="og:description" content="<?php print($description); ?>">
  <meta property="og:site_name" content="<?php print(SITENAME); ?>">
</head>
<body>
  <div class="container">
    <?php
      include('./views/header.php');
      include('./views/navbar.php');
      include('./views/services.php');
      // include('./views/works.php');
      include('./views/contact.php');
      include('./views/footer.php');
    ?>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="./public/js/functions.js"></script>
  <script type="text/javascript" src="./public/js/btnUpPage.js"></script>
</body>
</html>