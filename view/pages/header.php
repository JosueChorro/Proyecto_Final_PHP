<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Proyecto PHP-MVC-MYSQL</title>

  <!-- CSS  -->
  <link href="view/img/logo.png" type="image/png" rel="icon" />
  <link href="view/css/icon.css" rel="stylesheet">
  <link href="view/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="view/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="view/css/jquery.dataTables.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
  <nav class="" role="navigation" id="nav" style="background: rgb(52,24,97);
background: linear-gradient(90deg, rgba(52,24,97,1) 0%, rgba(52,24,97,1) 70%, rgba(98,0,255,1) 100%);">
    <style>
      .responsive-img {
        border-radius: 50%;
        border: 2px solid black;
      }
    </style>

    <div class="nav-wrapper container"><a id="logo-container" href="?c=<?php echo base64_encode('Home'); ?>" class="brand-logo"><img src="view/img/logo.png" width="95px" class="responsive-img"></a>
      <!-- menú dispositivos grandes -->
      <ul class="right hide-on-med-and-down">
        <li><a href="?c=<?php echo base64_encode('Talla'); ?>">Talla</a></li>
        <li><a href="?c=<?php echo base64_encode('Color'); ?>">Color</a></li>
        <li><a href="?c=<?php echo base64_encode('Cliente'); ?>">Cliente</a></li>
        <li><a href="?c=<?php echo base64_encode('Usuario'); ?>">Usuario</a></li>

        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger btn  tooltipped" style="background-color: #F06292;" data-position="bottom" data-tooltip="<?php echo $_SESSION['nombre']. " ". $_SESSION['apellido']; ?>" href='#' data-target='dropdown1'><i class="material-icons">person_pin</i></a></li>

        <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
          <li><a href="#" style="background-color: #673AB7;" class=" white-text"><i class="material-icons white-text">menu</i>&nbsp;</a></li>
          <li><a href="?c=<?php echo base64_encode('Login'); ?>&a=<?php echo base64_encode('Salir'); ?>" style="color: #D50000;"><i class="material-icons">exit_to_app</i>Salir</li></a>

          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaClave'); ?>" style="color: black;"><i class="material-icons">vpn_key</i>Nueva clave</a></li>

          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaPregunta'); ?>" style="color: black;"><i class="material-icons">live_help</i>Nueva pregunta</a></li>

          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('EditarUsuario'); ?>&idusuario=<?php echo base64_encode($_SESSION["id"]); ?>" style="color: black;"><i class="material-icons">assignment</i>Mis datos</a></li>
        </ul>
      </ul>

      <!-- menú dispositivos móbiles -->
      <ul id="nav-mobile" class="sidenav azul-ast">
        <li><a class="white-text" href="?c=<?php echo base64_encode('Home'); ?>"><i class="material-icons white-text">home</i>inicio</a></li>
        <li><a class=" white-text" href="?c=<?php echo base64_encode('Talla'); ?>"><i class="material-icons white-text">style</i>Talla</a></li>
        <li><a class=" white-text" href="?c=<?php echo base64_encode('Color'); ?>"><i class="material-icons white-text">color_lens</i>Color</a></li>
        <li><a class=" white-text" href="?c=<?php echo base64_encode('Cliente'); ?>"><i class="material-icons white-text">supervisor_account</i>Cliente</a></li>
        <li><a class=" white-text" href="?c=<?php echo base64_encode('Usuario'); ?>"><i class="material-icons white-text">account_circle</i>Usuario</a></li>

        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger btn" style="background-color: #F06292;" href='#' data-target='dropdown2'><i class="material-icons white-text">person_pin</i> Usuario activo</a></li>

        <!-- Dropdown Structure -->
        <ul id='dropdown2' class='dropdown-content'>
          <li><a href="#" style="background-color: #F06292;" class=" white-text"><i class="material-icons white-text">menu</i>MENÚ</a></li>

          <li><a href="?c=<?php echo base64_encode('Login'); ?>&a=<?php echo base64_encode('Salir'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">exit_to_app</i>Salir</a></li>

          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaClave'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">vpn_key</i>Nueva clave</a></li>

          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaPregunta'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">live_help</i>Nueva pregunta</a></li>
          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('EditarUsuario'); ?>&idusuario=<?php echo base64_encode($_SESSION["id"]); ?>" style="color: black;"><i class="material-icons">assignment</i>Mis datos</a></li>
        </ul>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <!-- fin de la cabecera -->