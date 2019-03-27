<?php
$lat= $_POST['lat'];
$lon = $_POST['lon'];
$rad = $_POST['rad'];
// function add($data){
//     $data = "'" . $data . "'";
//     return $data;
// }
// $lat= -74.8502969;
// $lon = 11.0177973;
// $latp = -74.8517296;
// $latm = -74.8517454  ;
// $lonp = 11.0193849;
// $lonm = 11.0193142 ;

$latp = $lat + $rad;
$latm = $lat - $rad;
$lonp = $lon + $rad;
$lonm = $lon - $rad;

$enlace = mysqli_connect("m001.civuexhbxgux.us-east-1.rds.amazonaws.com:3306", "Will", "CB27d277", "M001");
if ($sentencia = mysqli_prepare($enlace, "SELECT Fecha FROM POSDATEP WHERE (Latitud between $latm and  $latp) and(Longitud between $lonm and $lonp)
")) {
    mysqli_stmt_execute($sentencia);
    /* vincular variables a la sentencia preparada */
    mysqli_stmt_bind_result($sentencia, $col1);
    /* obtener valores */
    while (mysqli_stmt_fetch($sentencia)) {
        echo $col1.",";
    }
    mysqli_stmt_close($sentencia);
}
?>