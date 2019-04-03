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
    <link rel="stylesheet" href="css/jquery-ui.css">


    <script src="js/import/leaflet.js"></script>
    <script src="js/import/jquery-3.3.1.min.js"></script>
    <script src="js/import/moment.min.js"></script>
    <script src="js/import/popper.min.js"></script>
    <script src="js/import/bootstrap.min.js"></script>
    <script src="js/import/tempusdominus-bootstrap-4.js"></script>
    <script src="js/import/jquery-ui.js"></script>


    <?php include "load.php"?>
    <title>GLOBAL TRACK</title>
    <style>
    .navbar{
      background: #292731!important;
      color: #AFA38D!important;
    }
    </style>
</head>
<br>
<body>
<header>
  <nav class="navbar  navbar-dark bg-secondary navbar-expand-md fixed-top">
    <div class="container">
      <a href="#" class="navbar-brand">
      <img src="css/images/slogan.jpg" alt="Logo" width="210px" height="auto" />
        
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
          <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
          <li class="nav-item"><a href="tiempoReal.php" class="nav-link">Tiempo Real</a></li>
          <li class="nav-item"><a href="Historicos.php" class="nav-link active">Historicos</a></li>
        </ul>
      </div>
    </div>

  </nav>
</header>
<section id="mapa">
  <div id="espacio">
    <br>
  </div>
        <div id="mapa-texto">
            <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Global Track</h1>
                    <p>Seguimiento GPS y busqueda por historicos</p>
                    </div>
                </div>
            </div>
        </div>
</section>   

        <section id="contenido">
        <div class="contenido-seccion">
            <div class="row">
                <div class="col-md-4">
                <img src="css/images/circle.jpg" class="img-fluid" alt="Responsive image">
                    <div class="texto1">
                        <h3 id='rojo' class=text-center>En cualquier parte del mundo</h3>
                        <p id='blanco' class=text-justify>Global Track es un seguidor GPS diseñado para monitorear la posición de un vehículo en cualquier parte del mundo. También, se tiene informacion pasada de los vehículos para un mejor analisis</p>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="texto2">
                    <img src="css/images/circle2.jpg" class="img-fluid" alt="Responsive image">
                        <h3 id='rojo' class=text-center>Fácil de leer, Fácil de usar</h3>
                        <p id='blanco' class=text-justify>Usando una aplicación móvil se puede seguir la ubicacion en esta página usando el enlace Tiempo Real. </p>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="texto3">
                    <img src="css/images/circle3.jpg" class="img-fluid" alt="Responsive image">
                        <h3 id='rojo' class=text-center>Seguimiento GPS</h3>
                        <p id='blanco' class=text-justify>En el enlace Históricos, se tiene informacion de los lugares y momentos en los que estubo el vehículo. Solo hay que selccionar el intervalo de tiempo requerido, o usar la opción marker para averiguar por ubicación.</p>
                        </div>
                </div>
            </div>
        </div>
    </section>

<!-- Test values = id="d1" value="2019-3-20 8:0:0"
                   id="d2" value="2019-3-20 15:30:0"
                   class="d-none"-->
<section id='histo'>
<input type="text" class="d-none" id="d1" value="2019-3-20 8:0:0">
<input type="text" class="d-none" id="d2" value="2019-3-20 15:30:0">
<input type="text" class="d-none" id="array">
<input type="text" class="d-none" id="tarray">


<div class="container">
<div class="row">
  <!--  -->
  <div class="col">
    <h3 class="card-title">Ingresar intervalo</h3>
    <div class="col-md-12">
      <div class="form-group">
        <div
          class="input-group date"
          id="datetimepicker7"
          data-target-input="nearest">
          <input
            type="text"
            class="form-control datetimepicker-input"
            data-target="#datetimepicker7">
          <div
            class="input-group-append"
            data-target="#datetimepicker7"
            data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <div
          class="input-group date"
          id="datetimepicker8"
          data-target-input="nearest">
          <input
            type="text"
            class="form-control datetimepicker-input"
            data-target="#datetimepicker8"/>
          <div
            class="input-group-append"
            data-target="#datetimepicker8"
            data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
        </div>
      </div>
      <button class="btn btn-outline-dark" id="button">Enviar</button>
    </div>
  </div>
  <div class="col d-flex flex-wrap align-content-center justify-content-center">
    <button class="btn btn-outline-dark" id="button2">marker</button>
  </div>
  <div class="col d-flex flex-wrap align-content-center justify-content-center">
    <h3 class="card-title p-2 d-none" id="indice">Indice</h3>
    <input type="text" class="p-2 d-none" name="" id="spinner">
    <input class="text-center d-none" type="text" id="t1">
    <button class="btn btn-outline-dark d-none" id="button3">Salir</button>
  </div>
</div>
</div>
<br>

<div class="">
<div id="mapid" class=" map" ></div>
</div>
<script src="js/getPath.js" ></script>
  </section>
<section id='footer'>
  <Footer class="container">
  <div class="footertexto">
            <div class="row">
                <div class="col-md-4">
                <p>
                    <b> Proyecto 2</b><br>
                    Diseño Electronico <br>
                    Universidad del norte <br>
                    2019<br>
                </p> 
                </div>
                <div class="col-md-4">
                <p>
                    <b> Desarrolladores:</b><br>
                    Wilmer Cantillo<br>
                    Hermes Garcia<br>
                    Daniela Polo<br>
                </p> 
                </div>
                <div class="col-md-4">
                <p>
                    <b> Correos:</b><br>
                    cwilmer@uninorte.edu.co<br>
                    alvizh@uninorte.edu.co<br>
                    dapolo@uninorte.edu.co<br>
                </p> 
                </div>
            </div>
        </div>
  </Footer>
</section>  
</body> 
</html>