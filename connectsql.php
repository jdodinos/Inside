<?php
// Variables de conexion
$host = '35.197.44.63'; 
$user = 'root';
$password = 'vLmS4kxomhND';
$database = 'inside';

// Inicializacion de variables
$message = $classMessage = NULL;

$mysqli = mysqli_connect($host, $user, $password, $database) or die (
  'No es posible conectarse'
);
// Verificar si la conexion es exitosa
if (mysqli_connect_errno() == FALSE) {
  $connection = TRUE;

  // Guarda la informacion recibida
  if (!empty($_POST)) {
    // Valida que la informacion sea recibida
    if (isset($_POST['user_name']) && isset($_POST['user_email']) && isset($_POST['user_message'])) {
      // Formatear valores de variables
      $name = strip_tags($_POST['user_name']);
      $email = strip_tags($_POST['user_email']);
      $message = strip_tags($_POST['user_message']);

      // Query insercion
      $query = "INSERT INTO messages
        (name, email, message)
        VALUES('$name', '$email', '$message');";
      $result = mysqli_query($mysqli, $query);

      // Mensaje a mostrar al guardar
      if ($result) {
        $message = "Hemos recibido tu mensaje, Muchas gracias por contáctarnos. Pronto nos comunicaremos con usted.";
        $classMessage = 'success';
      }
      else {
        $linkMail = '<a class="text-white" href="mailto=' . SITEEMAIL . '">' . SITEEMAIL . '</a>';
        $message = "Hubo un error al enviar el mensaje. Intenta un mensaje directo a " . $linkMail;
        $classMessage = 'error';
      }
    }
  }

  $mysqli->close();
}
elseif (mysqli_connect_errno()) {
  $connection = FALSE;
  $validateConection = "La conexion con la base de datos a fallado" . mysqli_connect_error();
  exit();
}
?>