

  <?php

  if (isset($_POST)) {

    $nombre = $_POST['nombre'] ?? false;
    $apellidos = $_POST['apellidos']  ??  false;
    $email = $_POST['email'] ?? false;
    $password = $_POST['password']  ?? false;

    $errores = [];

    // validar campos
    // validar nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
      $nombre_valido = true;
    } else {
      $nombre_valido = false;
      $errores['nombre'] = 'El nombre no es válido';
    }

    // validar nombre
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
      $apellidos_valido = true;
    } else {
      $apellidos_valido = false;
      $errores['apellidos'] = 'Los apellidos no son válidos';
    }

    // validar email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_valido = true;
    } else {
      $email_valido = false;
      $errores['email'] = 'El email no es válido';
    }

    // validar password
    if (!empty($password) && strlen($password) >= 6) {
      $password_valido = true;
    } else {
      $password_valido = false;
      $errores['password'] = 'La contraseña debe tener al menos 6 caracteres';
    }

    $guardar_usuario = false;
    if (count($errores) == 0) {

      $guardar_usuario = true;
      //insertar usuario en la base de datos en la tabla uusarios

    } else {
      
    }
  }




  ?>
