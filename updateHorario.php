<?php
$idm = $_GET['idm'];
$idh = $_GET['idh'];
include('conexion.php');
$sql = "UPDATE horarios SET idm=$idm WHERE id=$idh";
$con->query($sql);
$con->close();
echo 'Actualizado';
?>