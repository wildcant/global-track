<?php
$server_name="m001.civuexhbxgux.us-east-1.rds.amazonaws.com:3306";
$dbname="M001";
$username = "Will";
$password = "CB27d277";
// Create connection
$conn = mysqli_connect($server_name, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$get_data="SELECT * FROM POSDATEP where ID=(SELECT MAX(ID) FROM POSDATEP)";
$request= mysqli_query($conn, $get_data);

$registro = mysqli_fetch_array($request);
echo "<script type='text/javascript'> var lat=".$registro[2].";var lng=".$registro[1]."</script>";
mysqli_close($conn);    
?>