<?php
define('SITENAME', 'Inside Studio Web');

// Variables para metaetiquetas
$title = 'Soluciones a la medida |' . SITENAME;
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
  <meta name="description" content="<?php print($description); ?>">
  <meta name="og:site_name" content="<?php print(SITENAME); ?>">
  <meta name="og:type" content="website">
  <meta name="og:title" content="<?php print($title); ?>">
  <meta name="og:url" content="https://www.insidestudioweb.com/">
  <meta name="og:description" content="<?php print($description); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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