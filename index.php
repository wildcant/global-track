<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.css"/>
    <link rel="stylesheet" href="css/leaflet.css"/>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>

    <script src="js/import/leaflet.js"></script>
    <script src="js/import/jquery-3.3.1.min.js"></script>
    <script src="js/import/moment.min.js"></script>
    <script src="js/import/popper.min.js"></script>
    <script src="js/import/bootstrap.min.js"></script>
    <script src="js/import/tempusdominus-bootstrap-4.js"></script>
    <?php include "load.php"?>

</head>

<body>
<header>
  <nav class="navbar  navbar-dark bg-secondary navbar-expand-md fixed-top">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="css/images/marker-icon-2x.png" alt="Logo" width="20px" height="auto" />
        <span class="h4">GPS Track</span>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#menu-principal"
        aria-controls="menu-principal"
        aria-expanded="true"
        aria-label="Despegar menú de navegación"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu-principal" >
        <ul class="navbar-nav ml-auto ">
        <li class="nav-item"><a href="index.php" class="nav-link active">Inicio</a></li>
          <li class="nav-item"><a href="tiempoReal.php" class="nav-link">Tiempo Real</a></li>
          <li class="nav-item"><a href="Historicos.php" class="nav-link">Historicos</a></li>
        </ul>
      </div>
    </div>

  </nav>
</header>
<br>

<input class="d-none" type="text" id="latitud" value="-74.8514925">
<input class="d-none" type="text" id="longitud" value="11.0194053">

<div class="container justify-content-around">
<div class="row d-flex align-items-center">
  <div class="col-3 justify-content-center">
    <p class="card bg-dark text-white text-center h4">Ingresar area</p>
    <div class="text-center" >
    <input class="text-center" type="text" id="rad" value="0.0008">    
    </div>
  </div>
  <div class="col-2 ">
  <div class="p-2">
  <input class="btn btn-outline-dark" type="button" value="Enviar" id="button">
  </div>
  </div>
  <div class="col-6 ">
  <table class="table m-5 ">
    <thead class="thead-dark  ">
      <tr>
        <th class="text-center">Tiempo inicial</th>
        <th class="text-center">Tiempo final</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
         <input class="text-center" type="text" id="t1">

        </td>
        <td>
          <input class="text-center" type="text" id="t2">
        </td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
</div>

<div id="map" class="map"></div>

<script type="text/javascript" src="js/getTime.js"></script>
<footer class="container">
<p>
<b> Proyecto 1</b><br>
Diseño Electronico <br>
2019
</p>
</footer>
</body>
</html>