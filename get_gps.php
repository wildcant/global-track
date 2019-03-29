<?php
$fecha1= add($_POST['text1']);
$fecha2 = add($_POST['text2']);
function add($data){
    $data = "'" . $data . "'";
    return $data;
}
$enlace = mysqli_connect("m001.civuexhbxgux.us-east-1.rds.amazonaws.com:3306", "Will", "CB27d277", "M001");
if ($sentencia = mysqli_prepare($enlace, "SELECT * FROM POSDATEP WHERE Fecha BETWEEN $fecha1 and $fecha2")) {
    mysqli_stmt_execute($sentencia);
    /* vincular variables a la sentencia preparada */
    mysqli_stmt_bind_result($sentencia, $col1, $col2, $col3,$col4);
    /* obtener valores */
    while (mysqli_stmt_fetch($sentencia)) {
        echo $col2.",".$col3.",".$col4.",";
    }
    mysqli_stmt_close($sentencia);
}
?>