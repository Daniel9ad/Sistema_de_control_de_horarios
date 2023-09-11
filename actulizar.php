<?php
include('sesion.php');
include('conexion.php');

$dia = $_GET['c'];

$sql = "SELECT * FROM aula";
$resultado = $con->query($sql);
?>

<?php while ($row = $resultado->fetch_assoc()) {?>
	<tr>
        <td class="text-center"><?php echo $row['nombre'] ?></td>
        <?php
            $idaula = $row['id'];
            $sql2 = "SELECT * FROM horarios
            WHERE dia='$dia' and ida=$idaula";
            $resultado2 = $con->query($sql2);
            $horas = [];
            while ($r = $resultado2->fetch_assoc()){
                if ($r['hora_inicio']=='07:00:00' & $r['hora_fin']=='09:00:00'){
                    array_push($horas, 1);
                }else if (($r['hora_inicio']=='09:00:00' & $r['hora_fin']=='11:00:00')){
                    array_push($horas, 2);
                }else if (($r['hora_inicio']=='11:00:00' & $r['hora_fin']=='13:00:00')){
                    array_push($horas, 3);
                }else if (($r['hora_inicio']=='14:00:00' & $r['hora_fin']=='16:00:00')){
                    array_push($horas, 4);
                }else if (($r['hora_inicio']=='16:00:00' & $r['hora_fin']=='18:00:00')){
                    array_push($horas, 5);
                }else if (($r['hora_inicio']=='18:00:00' & $r['hora_fin']=='20:00:00')){
                    array_push($horas, 6);
                }else if (($r['hora_inicio']=='20:00:00' & $r['hora_fin']=='22:00:00')){
                    array_push($horas, 7);
                }
            }
            for ($i=1; $i<=7; $i++) {
                if (in_array($i ,$horas)){
                    echo '<td class="text-center"><svg width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                    </td>';
                }else{
                    echo '<td class="text-center">-</td>';
                }
            }
            if (count($horas)==0){
                echo '<td class="text-center">No Asignado</td>';
            }else{
                echo '<td class="text-center">Asignado</td>';
            }
        ?>
        <td class="text-center">
            <button class="btn btn-outline-secondary d-inline-flex align-items-center"
            onclick="editar('<?php echo $dia; ?>',<?php echo $idaula; ?>)"
            style="padding: 0.5px 4px 0.5px 4px; font-size: 0.8rem;">
            <b>Editar</b>
            </button>
        </td>
	</tr>
<?php } ?>