<?php
include('sesion.php');
include('conexion.php');

$dia = $_GET['c'];

$sql = "SELECT * FROM aula";
$resultado = $con->query($sql);
?>

<?php while ($row = $resultado->fetch_assoc()) {?>
	<tr>
        <td><?php echo $row['nombre'] ?></td>
        <?php
            $idaula = $row['id'];
            $sql2 = "SELECT * FROM horarios
            WHERE dia='$dia' and ida=$idaula";
            $resultado2 = $con->query($sql2);
            $r = $resultado2->fetch_assoc();
            if (isset($r)){
                $hora = 0;
                if ($r['hora_inicio']=='07:00:00' & $r['hora_fin']=='09:00:00'){
                    $hora = 1;
                }else if (($r['hora_inicio']=='09:00:00' & $r['hora_fin']=='11:00:00')){
                    $hora = 2;
                }else if (($r['hora_inicio']=='11:00:00' & $r['hora_fin']=='13:00:00')){
                    $hora = 3;
                }else if (($r['hora_inicio']=='14:00:00' & $r['hora_fin']=='16:00:00')){
                    $hora = 4;
                }else if (($r['hora_inicio']=='16:00:00' & $r['hora_fin']=='18:00:00')){
                    $hora = 5;
                }else if (($r['hora_inicio']=='18:00:00' & $r['hora_fin']=='20:00:00')){
                    $hora = 6;
                }else if (($r['hora_inicio']=='20:00:00' & $r['hora_fin']=='22:00:00')){
                    $hora = 7;
                }
                for ($i=1; $i<=7; $i++) {
                    if ($i==$hora){
                        echo "<td>x</td>";
                    }else{
                        echo "<td>-</td>";
                    }
                }
                echo "<td>Asignado</td>";
            }else{
                echo "<td>-</td>";
                echo "<td>-</td>";
                echo "<td>-</td>";
                echo "<td>-</td>";
                echo "<td>-</td>";
                echo "<td>-</td>";
                echo "<td>-</td>";
                echo "<td>No Asignado</td>";
            }
        ?>
	</tr>
<?php } ?>