<?php
$id = $_GET['id'];

include('conexion.php');
$sql = "SELECT * FROM aula WHERE id=$id";
$resultado = $con->query($sql);
$aula = $resultado->fetch_assoc();
$ruta = 'img/'.$aula['ubicacion'];
#echo $ruta;
?>

<img src="<?php echo $ruta; ?>" width="450px" high="450px">