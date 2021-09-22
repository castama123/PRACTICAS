<?php

require_once('../php/conexion_bd.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>

  <link rel="stylesheet" href="../assets/tether/tether.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="../assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>

<?php include "header_admin.php";?>

<section>
    <div class="container-fluid pt-5">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-12" data-form-type="formoid">
                <div class="mbr-form form-with-styler">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h1 class="mbr-section-title mb-4 display-2 pb-3 text-center"><strong>Reporte quincenal experiencia proceso de prácticas</strong></h1>
                    </div>

                    <nav style="background-color:rgba(9 70 99)"><h1 class="text-white text-center pb-4 pt-4">Reporte 3</h1></nav>

                    <div class="container">
                        <h2 class="text-center pt-5 pb-5 font-italic">Visualización de reportes y compromisos realizados</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container-fluid">
    <!-- --------------------------- Mostrando compromiso para el reporte desde la Base de Datos -------------------- -->
        <table class="table table-striped" style="widht:100%">
            <thead class="table-danger table-striped">
                <tr>
                    <th class="">Nombre</th>
                    <th class="">Fecha Reporte</th>
                    <th class="">Observaciones</th>
                    <th class="">Fecha Compromiso</th>
                    <th class="">Compromiso</th>  
                </tr>
            </thead>
            <tbody>
                <tr>
<!---------------------------------- Consulta para el compromiso ---------------------------------------------------->

                <?php
                    $sqlreporte = "SELECT U.nombre, R.fecharep, R.observaciones, C.fechacom_3, C.compromiso_3
                    FROM usuarios U 
                        INNER JOIN reportes R
                            ON U.idusuario = R.idusuario
                                INNER JOIN compromiso_3 C 
                            ON U.idusuario = C.idusuario
                       WHERE R.numerorep = '3'
                    ORDER BY U.nombre";
                    $resultadoreporte=mysqli_query($conexion,$sqlreporte);
                    while($mostrar = $resultadoreporte->fetch_array(MYSQLI_BOTH)){
                    ?>
                    <tr>
                        <th style="font-weight: 100;"><?php echo $mostrar['nombre']?></th>
                        <th style="font-weight: 100;"><?php echo $mostrar['fecharep']?></th>
                        <th style="font-weight: 100;"><?php echo $mostrar['observaciones']?></th>
                        <th style="font-weight: 100;"><?php echo $mostrar['fechacom_3']?></th>
                        <th style="font-weight: 100;"><?php echo $mostrar['compromiso_3']?></th>
                        <?php
                            }
                        ?>
                    </tr>
                        <?php
                            
                        ?>
                    </tr>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>
