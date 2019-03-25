<html lang="en">
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.css"/>
    <link rel="stylesheet" href="css/leaflet.css"/>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>


    <script src="js/import/leaflet.js"></script>
    <script src="js/import/jquery-3.3.1.min.js"></script>
    <script src="js/import/moment.min.js"></script>
    <script src="js/import/popper.min.js"></script>
    <script src="js/import/tempusdominus-bootstrap-4.js"></script>

    <?php include("load.php")?>
    <title>GPS TRACK</title>
</head>

<body>

<body>
<input class="d-none" type="text"  id="d1" value="2019-3-20 8:0:0">
<input class="d-none" type="text" id="d2" value="2019-3-20 15:30:0" >
    <div class="container">
    <h3>Ingresar intervalo</h3>
      <div class="col-md-5">
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
      <div class="col-md-5">
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
        <button id="button">Enviar</button>
      </div>
    </div>

</div>
<div class="">
<div id="mapid" class=" map" ></div>
</div>
<script src="js/getPath.js" ></script>
<footer class="container">
<p>
<b> Proyecto 1</b><br>  
Diseño Electronico <br>
2019
</p> 
</footer>
</body>
</html>