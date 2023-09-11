<?php
include('conexion.php');
$dia = $_GET['dia'];
$ida = $_GET['ida'];

$s2 = "SELECT * FROM aula WHERE id=$ida";
$res = $con->query($s2);
$aula = $res->fetch_assoc();
echo $dia.' aula: '.$aula['nombre'];

#$sql = "SELECT * FROM horarios h
#WHERE h.ida='$ida' and dia='$dia'";
#$resultado = $con->query($sql);
#print_r($resultado->fetch_assoc());
#while ($r = $resultado->fetch_assoc()){
    #print_r($r);
#}
$horai = ['07:00:00','09:00:00','11:00:00','14:00:00','16:00:00','18:00:00','20:00:00'];
$horaf = ['09:00:00','11:00:00','13:00:00','16:00:00','18:00:00','20:00:00','22:00:00'];
?>

<table>
    <thead>
        <tr>
            <td>Hora</td>
            <td>Materia</td>
        </tr>
    </thead>
    <tbody>
        <?php
        for($i=0; $i<7; $i++) {
            echo "<tr>";
            $hi = $horai[$i];
            $hf = $horaf[$i];
            echo "<td>$hi-$hf</td>";
            $sql = "SELECT * FROM horarios h
            WHERE h.ida='$ida' and dia='$dia' and hora_inicio='$hi' and hora_fin='$hf'";
            $resultado = $con->query($sql);
            $row = $resultado->fetch_assoc();
            $s = "SELECT * FROM materias";
            $materias = $con->query($s);
            if (isset($row)){
                echo "<td><select>";
                while ($m = $materias->fetch_assoc()) {
                    $idm = $m['id'];
                    $nombre = $m['materia'];
                    if ($idm==$row['idm']){
                        echo '<option selected value="'.$idm.'">'.$nombre.'</option>';
                    }else{
                        echo '<option value="'.$idm.'">'.$nombre.'</option>';
                    }
                }
                echo "</select></td>";
            }else{
                echo "<td><select>";
                echo "<option selected>Elegir</option>";
                while ($m = $materias->fetch_assoc()) {
                    $idm = $m['id'];
                    $nombre = $m['materia'];
                    echo '<option value="'.$idm.'">'.$nombre.'</option>';
                }
                echo "</select></td>";
            }
            echo "<tr>";
        } 
        ?>
    </tbody>
</table>