<?php
include('sesion.php');
include('conexion.php');

$sql = "SELECT * FROM aula a
LEFT JOIN horarios h ON h.ida=a.id";
$resultado = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/Ajax.js"></script>
</head>

<body class="bg-body-tertiary">

    <header class="pt-2 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="Home.html" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    <svg width="46" height="46" fill="currentColor" class="bi bi-browser-firefox" viewBox="0 0 16 16">
                        <path d="M13.384 3.408c.535.276 1.22 1.152 1.556 1.963a7.98 7.98 0 0 1 .503 3.897l-.009.077a8.533 8.533 0 0 1-.026.224A7.758 7.758 0 0 1 .006 8.257v-.04c.016-.363.055-.724.114-1.082.01-.074.075-.42.09-.489l.01-.051a6.551 6.551 0 0 1 1.041-2.35c.217-.31.46-.6.725-.87.233-.238.487-.456.758-.65a1.5 1.5 0 0 1 .26-.137c-.018.268-.04 1.553.268 1.943h.003a5.744 5.744 0 0 1 1.868-1.443 3.597 3.597 0 0 0 .021 1.896c.07.047.137.098.2.152.107.09.226.207.454.433l.068.066.009.009a1.933 1.933 0 0 0 .213.18c.383.287.943.563 1.306.741.201.1.342.168.359.193l.004.008c-.012.193-.695.858-.933.858-2.206 0-2.564 1.335-2.564 1.335.087.997.714 1.839 1.517 2.357a3.72 3.72 0 0 0 .439.241c.076.034.152.065.228.094.325.115.665.18 1.01.194 3.043.143 4.155-2.804 3.129-4.745v-.001a3.005 3.005 0 0 0-.731-.9 2.945 2.945 0 0 0-.571-.37l-.003-.002a2.679 2.679 0 0 1 1.87.454 3.915 3.915 0 0 0-3.396-1.983c-.078 0-.153.005-.23.01l-.042.003V4.31h-.002a3.882 3.882 0 0 0-.8.14 6.454 6.454 0 0 0-.333-.314 2.321 2.321 0 0 0-.2-.152 3.594 3.594 0 0 1-.088-.383 4.88 4.88 0 0 1 1.352-.289l.05-.003c.052-.004.125-.01.205-.012C7.996 2.212 8.733.843 10.17.002l-.003.005.003-.001.002-.002h.002l.002-.002a.028.028 0 0 1 .015 0 .02.02 0 0 1 .012.007 2.408 2.408 0 0 0 .206.48c.06.103.122.2.183.297.49.774 1.023 1.379 1.543 1.968.771.874 1.512 1.715 2.036 3.02l-.001-.013a8.06 8.06 0 0 0-.786-2.353Z"/>
                    </svg>
                </a>
                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="Home.html" class="nav-link text-white btn btn-dark">
                            <svg class="bi d-block mx-auto mb-1" 
                                width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="horarios.php" class="nav-link text-secondary btn btn-dark">
                            <svg class="bi d-block mx-auto mb-1" 
                                width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 0 .5Zm0 2A.5.5 0 0 1 .5 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm9 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-9 2A.5.5 0 0 1 .5 4h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm5 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm-12 2A.5.5 0 0 1 .5 6h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5Zm8 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-8 2A.5.5 0 0 1 .5 8h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm-7 2a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z"/>
                            </svg>
                            Horarios
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="container pt-5">
		<div class="row g-5">
			<div class="table-responsive small">
				<h2>Horarios</h2>
                <div class="d-flex flex-shrink-0 bg-body-tertiary">
    				<ul class="nav nav-pills mb-auto">
    				    <li class="nav-item">
    				        <a href="javascript:actualizarC('1')" class="btn btn-dark active" id='c1'>
    				          Lunes
    				        </a>
    				    </li>
    				    <li>
    				        <a href="javascript:actualizarC('2')" class="nav-link link-body-emphasis" id='c2'>
    				          Martes
    				        </a>
    				    </li>
                        <li>
    				        <a href="javascript:actualizarC('2')" class="nav-link link-body-emphasis" id='c2'>
    				          Miercoles
    				        </a>
    				    </li>
                        <li>
    				        <a href="javascript:actualizarC('2')" class="nav-link link-body-emphasis" id='c2'>
    				          Jueves
    				        </a>
    				    </li>
                        <li>
    				        <a href="javascript:actualizarC('2')" class="nav-link link-body-emphasis" id='c2'>
    				          Viernes
    				        </a>
    				    </li>
                        <li>
    				        <a href="javascript:actualizarC('2')" class="nav-link link-body-emphasis" id='c2'>
    				          Sabado
    				        </a>
    				    </li>
    				</ul>
				</div>
				<table class="table table-striped table-sm table-hover mt-3">
					<thead>
						<tr>
							<th scope="col">#Aula</th>
							<th scope="0">07:00-09:00</th>
							<th scope="1">09:00-11:00</th>
							<th scope="1">11:00-13-00</th>
                            <th scope="1">14:00-16:00</th>
                            <th scope="1">16:00-18:00</th>
                            <th scope="1">18:00-20:00</th>
                            <th scope="1">20:00-22:00</th>
                            <th scope="estado">Estado</th>
						</tr>
					</thead>
					<tbody id='h'>
                        <?php while ($row = $resultado->fetch_assoc()) {?>
					    	<tr>
                                <?php  
                                    $hora = 0;
                                    if ($row['hora_inicio']=='07:00:00' & $row['hora_fin']=='09:00:00'){
                                        $hora = 1;
                                    }else if (($row['hora_inicio']=='09:00:00' & $row['hora_fin']=='11:00:00')){
                                        $hora = 2;
                                    }else if (($row['hora_inicio']=='11:00:00' & $row['hora_fin']=='13:00:00')){
                                        $hora = 3;
                                    }else if (($row['hora_inicio']=='14:00:00' & $row['hora_fin']=='16:00:00')){
                                        $hora = 4;
                                    }
                                ?>
                                <td><?php echo $row['nombre'] ?></td>
                                <?php 
                                    for ($i=1; $i<=7; $i++) {
                                        if ($i==$hora){
                                            echo "<td>x</td>";
                                        }else{
                                            echo "<td>-</td>";
                                        }
                                    }
                                    if ($hora!=0){
                                        echo "<td>Asignado</td>";
                                    }else{
                                        echo "<td>No Asignado</td>";
                                    }
                                ?>
					    	</tr>
                        <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</main>










    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>