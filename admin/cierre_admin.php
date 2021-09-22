<?php

require_once('../php/conexion_bd.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar formulario</title>

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

<!-- Inicio Navbar -->
<section style="background-color: #176383">
    <div>
        <div class="row">

            <div class="col-12">
                <h4 class="text-center text-white pt-4" >Bienvenid@ ADMINISTRADOR</h4>
            </div>

        </div>
    </div>
</section>

<div class="row">
    <div class="col-12" style="background-color: #122138;">
        <img style="margin-left: 15%;" src="../assets/images/cierre.png" alt="">
    </div>
</div>

<div class="row">
    <div class="col-12" style="background-color: #ea5c2c; height:15px;"></div>
</div>

<!-- Fin Navbar -->

<section>
    <div class="container-fluid pt-5 pb-5">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-12" data-form-type="formoid">
                <div class="mbr-form form-with-styler">
                    <!-- <div class="col-lg-12 col-md-12 col-sm-12">
                        <h1 class="mbr-section-title mb-4 display-2 pb-3"><strong>Cierre del proceso</strong></h1>
                    </div> -->

                    <nav style="background-color:rgba(9 70 99)"><h1 class="text-white text-center pb-4 pt-4">Lectura de aprendizajes y mejoras</h1></nav>

                    <!-- <div class="container">
                        <h2 class="text-center pt-5 pb-5 font-italic">Visualización de reportes y compromisos realizados</h2>
                    </div> -->
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
                    <th class="">Fecha Cierre</th>
                    <th class="">Aprendizajes</th>
                    <th class="">Mejoras</th>
                </tr>
            </thead>
            <tbody>
                <tr>
<!---------------------------------- Consulta para el compromiso ---------------------------------------------------->

                <?php
                    $sqlreporte = "SELECT U.nombre, C.fechacie, C.aprendizaje, C.mejora
                    FROM usuarios U JOIN cierre C 
                    ON U.idusuario=C.idusuario";
                    $resultadoreporte=mysqli_query($conexion,$sqlreporte);
                    while($mostrar = $resultadoreporte->fetch_array(MYSQLI_BOTH)){
                    ?>
                    <tr>
                        <th style="font-weight: 100;"><?php echo $mostrar['nombre']?></th>
                        <th style="font-weight: 100;"><?php echo $mostrar['fechacie']?></th>
                        <th style="font-weight: 100;"><?php echo $mostrar['aprendizaje']?></th>
                        <th style="font-weight: 100;"><?php echo $mostrar['mejora']?></th>
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
