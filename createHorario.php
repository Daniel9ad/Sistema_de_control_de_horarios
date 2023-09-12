<?php
$dia = $_GET['dia'];
$hi = $_GET['hi'];
$hf = $_GET['hf'];
$ida = $_GET['ida'];
$idm = $_GET['idm'];

include('conexion.php');
$sql = "INSERT INTO horarios(dia, hora_inicio, hora_fin, ida, idm)
VALUES ('$dia','$hi','$hf',$ida,$idm)";
$con->query($sql);
$con->close();
echo 'Insertado';
?>