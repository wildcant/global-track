<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <link rel="stylesheet" href="leaflet/leaflet.css"/>
    <script type="text/javascript" src="Js/jquery.min.js"></script>
    <script src="leaflet/leaflet.js"></script>
    <?php include("load.php")?>

    <title>GPS TRACK</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="bootstrap.min.css"/>

    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 50px;
        }
        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }
        #mapid{
            align = center;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Navigation -->

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
        <!--/.nav-collapse -->
    </div>
    <!-- /.container -->
</nav>
</header>


<!-- Page Content -->
<div class="container">
<h3>Ingresar intervalo</h3>
Fecha inicial: <input type="text"  id="text1" value="2019-03-18 18:39:45">
<br>
Fecha final: <input type="text" id="text2" value="2019-03-19 00:00:00" >
<br>
<button id="button"> Enviar  </button>

<!-- /.container -->
<br>
<div id="mapid" style="margin-left: auto;
  margin-right: auto; width: 600px; height: 400px;"></div>
<script src="Js/getPath.js" ></script>
<Footer class="container">
<p>
<b> Proyecto 1</b><br>
Diseño Electronico <br>
2019
</p> 
</Footer>
<!-- <script src="jquery-2.1.3.min.js"></script> -->
<script src="bootstrap.min.css"></script>
</body>
</html>