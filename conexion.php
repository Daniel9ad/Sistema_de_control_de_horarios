<?php
$con = new mysqli("localhost", "root", "","db_horarios");
if ($con->connect_error)
    die ("conexion fallada".$con->connect_error);
?>