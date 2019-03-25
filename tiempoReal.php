<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/leaflet.css"/>
    <link rel="stylesheet" href="css/main.css"/>

    <?php include("load.php")?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/leaflet.js"></script>
    <title>GPS TRACK</title>

</head>

<body>

<header>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>  
            </button>
            <a class="navbar-brand" href="#">GPS Track</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <li><a href="index.php">Inicio</a></li>
                <li class="active"><a href="tiempoReal.php">Tiempo real</a></li>
                <li><a href="Historicos.php">Historicos</a></li>
            </ul>
        </div>
    </div>
</nav>
</header>


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
</div><br>


<div id="mapid" class="map"></div>
<script src="js/tableMapUpdate.js" ></script>
<Footer class="container">
<p>
    <b> Proyecto 1</b><br>
    Diseño Electronico <br>
    2019
</p> 
</Footer>
</body> 
</html>