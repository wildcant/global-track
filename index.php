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
    <?php include("load.php")?>
    
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
<div class="container">
<h3>Posicion Geografica</h3>
    <table style="width:50%">
        <tr>
            <th>Latitud</th>
            <th>Longitud</th>
            <th>Fecha</th>
        </tr>
        <tr>
            <td id=latitud></td>
            <td id=longitud></th>
            <td id=fecha></th>
        </tr>
    </table>
</div>
<br>
<div id="mapid" class="map"></div>
<script src="js/tableMapUpdate.js" ></script>
<footer class="container">
<p>
<b> Proyecto 1</b><br>
Diseño Electronico <br>
2019
</p> 
</footer>
</body>
</html>