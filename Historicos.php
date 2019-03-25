<html lang="en">
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/leaflet.css"/>
    <link rel="stylesheet" href="css/main.css"/>

    <script type='text/javascript'> var lat=11.017557340610484;var lng=-74.85172033309937</script>    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/moment.js"></script>
  
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/leaflet.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
    

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
                <li><a href="tiempoReal.php">Tiempo real</a></li>
                <li class="active"><a href="Historicos.php">Historicos</a></li>
            </ul>
        </div>
    </div>
</nav>
</header>

<div class="container">
<h3>Ingresar intervalo</h3>
Fecha inicial: <input type="text"  id="text1" value="2019-03-18 18:39:45">
<br>
Fecha final: <input type="text" id="text2" value="2019-03-19 00:00:00" >
<br>
<button id="button"> Enviar  </button>
</div>
<br>

<div class="embed-responsive-16by9">
<div id="mapid" class=" map embed-resposive-item p-4 justify-content-center " ></div>
<script src="js/getPath.js" ></script>
</div>
<footer class="container">
<p>
<b> Proyecto 1</b><br>  
Diseño Electronico <br>
2019
</p> 
</footer>
</body>
</html>