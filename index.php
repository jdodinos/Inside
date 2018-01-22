<!DOCTYPE html>
<html>
<head>
<!-- Inside Studio Web -->
  <meta charset="utf-8">
  <title>Inside Studio Web</title>
  <link rel="stylesheet" type="text/css" href="./public/style/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="container">
    <?php
      include('./views/header.php');
      include('./views/navbar.php');
      include('./views/services.php');
      include('./views/works.php');
      include('./views/contact.php');
      include('./views/footer.php');
    ?>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="./public/js/functions.js"></script>
</body>
</html>