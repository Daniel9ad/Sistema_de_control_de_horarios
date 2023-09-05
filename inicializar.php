<?php

session_start();
$id = $_GET['id'];
$_SESSION['id'] = $id;

include('conexion.php');
$sql = "SELECT tipo FROM usuario WHERE id=$id";
$resultado = $con->query($sql);
$row = $resultado->fetch_assoc();
$_SESSION['tipo'] = $row['tipo'];

?>