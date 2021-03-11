<?php
$server_name="";
$dbname="";
$username = "";
$password = "";
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