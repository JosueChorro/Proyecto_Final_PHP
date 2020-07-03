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

    <div class="nav-wrapper container"><a id="logo-container" class="brand-logo"><img src="view/img/logo.png" width="95px" class="responsive-img"></a>

    </div>
  </nav>

  <!-- fin de la cabecera -->



  <!-- cuerpo de login -->
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s6 offset-s3">
          <h2 class="center  azul-ast-text"><i class="medium material-icons">account_circle</i>
            Iniciar Sesión
          </h2>

          <!-- formulario -->
          <div class="row">
            <form class="col s12" action="?c=<?php echo base64_encode('Login'); ?>&a=<?php echo base64_encode('Entrar'); ?>" method="post" enctype="multipart/form-data">
              <div class="row">

                <div class="input-field col s12">
                  <i class="material-icons prefix form-icon">mail</i>
                  <input id="email" name="email" type="email" class="validate" autofocus required autocomplete="off">
                  <label for="email">Email</label>
                </div>

                <div class="input-field col s12">
                  <i class="material-icons prefix form-icon">vpn_key</i>
                  <input id="clave" name="clave" type="password" class="validate" required>
                  <label for="clave">Clave</label>
                </div>


                <div class="input-field col s12 center">
                  <button type="submit" class="waves-effect waves-light btn azul-ast"><i class="material-icons right">send</i>Entrar</button>
                </div>

              </div>
            </form>
          </div>

        </div>

      </div>

    </div>
    <br><br>
  </div>

  <!-- inicio del pie -->
  <footer id="footer" class="page-footer" style="background-color: #341861;">
    <div class="container">
      <!-- floating button -->
      <div class="fixed-action-btn">
        <a class="btn-floating btn-large " style="background-color: #673AB7">
          <i class="large material-icons">airplay</i>
        </a>
        <ul>
          <li><a href="#footer" class="btn-floating gris-ast"><i class="material-icons">arrow_downward</i></a></li>
          <li><a href="#nav" class="btn-floating gris-ast"><i class="material-icons">arrow_upward</i></a></li>
        </ul>
      </div>
      <!-- foot -->
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Proyecto final</h5>
          <p class="grey-text text-lighten-4">
            Proyecto final desarrollado en PHP, con la metodología MVC (Model - View - Controller) y MySQL como gestor de bases de datos.
            Todas las vistas se crearon con el framework de diseño Materializecss basado en Material Design.
          </p>


          <img class="fo" src="view/img/logo.png" alt="">

        </div>
        <div class="col l6 s12">


          <table>
            <tr></tr>
          </table>

          <style>
            .min {
              width: 40px;
              border-radius: 50%;
            }

            .fo {
              width: 230px;
              border-radius: 50%;
              display: block;
              margin: auto;
              border: 2px solid black;
            }
          </style>
          <table class="table">
            <h5 class="white-text">Integrantes del grupo:</h5>

            <tbody>
              <tr>
                <td class="col-9">Josue Carlos Hernandez Chorro</td>
                <td>#187919</td>
                <td>&nbsp; <a class="white-text" href="https://github.com/JosueChorro"><img class="min" src="view/img/2.jpg"></a></td>
              </tr>
              <tr>
                <td>Irvin Alberto Cortez Guardado</td>
                <td>#184319</td>
                <td>&nbsp;<a class="white-text" href="https://github.com/Cortezhac"><img class="min" src="view/img/4.jpeg"></a></td>
              </tr>
              <tr>
                <td>Guillermo Mauricio Palacios Ortiz</td>
                <td>#192219</td>
                <td>&nbsp;<a class="white-text" href="https://github.com/palaciosky"><img class="min" src="view/img/5.jpeg"></a></td>
              </tr>
              <tr>
                <td>José Ernesto Acevedo Vasquez</td>
                <td>#185919</td>
                <td>&nbsp;<a class="white-text" href="https://github.com/Ernesto-Ac"><img class="min" src="view/img/1.jpg"></a></td>
              </tr>
              <tr>
                <td>Joel Isaac Reyes Galvez</td>
                <td>#185319</td>
                <td>&nbsp;<a class="white-text" href="https://github.com/isaacgalvez"><img class="min" src="view/img/3.jpg"></a></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col l3 s12 center">
        </div>

      </div>
    </div>
    <div class="footer-copyright black">
      <div class="container">
        by <a class="white-text" href="https://www.youtube.com/channel/UCdCd9f4XTh2sle8P3oT_xYg" target="_blank">2020 AVENGERS TM.</a>
      </div>
    </div>
  </footer>



  <!--  Scripts-->
  <script src="view/js/jquery-2.1.1.min.js"></script>
  <script src="view/js/materialize.js"></script>
  <script src="view/js/init.js"></script>

</body>

</html>