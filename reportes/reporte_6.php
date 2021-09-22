<?php

session_start();    
require_once('../php/conexion_bd.php');
if(!isset($_SESSION['usuario'])){
  echo '
      <script>
          alert("Debes iniciar sesión");
          window.location = "index.php";
      </script>
    ';
    
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>

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

<?php include "header.php";?>

<section class="form4 cid-sEt6ITROrL mbr-fullscreen" id="form4-0">
    <div class="container-fluid">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-12" data-form-type="formoid">
                <div class="mbr-form form-with-styler">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1 class="mbr-section-title mb-4 display-2"><strong>Reporte quincenal experiencia proceso de prácticas</strong></h1>
                </div>

                <nav style="background-color:rgba(9 70 99)"><h1 class="text-white text-center pb-4 pt-4">Reporte 6</h1></nav>

                    <div class="container">
                        <h2 class="text-center pt-5 font-italic">Espacio para generar compromiso entre el estudiante y el asesor de prácticas</h2>
                    </div>

                <section>

                        <div class="container px-4">
                            <div class="row gx-5">
                                <div class="col">
                                    <table class="table-striped table-bordered" style="widht:100%">
                                        <thead class="text-center table-danger table-striped">
                                            <h3 class="text-center pb-4 pt-4 font-weight-bold">Observaciones Reporte 6</h3>
                                            <tr>
                                                <th class="pb-3 pt-3 pl-2 pr-2">Número de Reporte</th>
                                                <th class="pb-3 pt-3 pl-2 pr-2">Fecha Reporte</th>
                                                <th class="pb-3 pt-3 pl-5 pr-5">Observaciones</th>   
                                            </tr>
                                        </thead>

                                        <tbody class="text-center">
                                                <!----------- Consulta para el reporte 6 ----------->
                                                <?php
                                                    $sqlreporte = "SELECT * FROM reportes WHERE numerorep = 6 ";
                                                    $resultadoreporte=mysqli_query($conexion,$sqlreporte);
                                                    while($mostrar = $resultadoreporte->fetch_array(MYSQLI_BOTH)){
                                                ?>
                                                    <tr>
                                                        <?php
                                                        if($_SESSION['idusuario'] === $mostrar['idusuario']){
                                                        ?>
                                                        <th><?php echo $mostrar['numerorep']?></th>
                                                        <th><?php echo $mostrar['fecharep']?></th>
                                                        <th><?php echo $mostrar['observaciones']?></th>
                                                        <?php
                                                            }
                                                        ?>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="col">

<!----------------------------- Llenando compromiso para el reporte 6 ---------------------->
                                        <thead class="text-center table-danger table-striped">
                                            <h3 class="text-center pb-4 pt-4 font-weight-bold">Genera tu compromiso</h3>
                                        </thead>
                                <form action="../php/registrar_compromiso_6.php" method="POST">
                                    <div class="row">

                                        <div class="col-lg-12 col-md col-12 form-group">
                                            <label class="form-control" for="start">Fecha compromiso
                                                <input name="fechacom_6" class="ml-5" type="date" id="start">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row text-center justify-content-center">
                                        <div class="col-lg-12 col-md col-12 form-group pb-2">
                                            <textarea name="compromiso_6" placeholder="Escribe tu compromiso" class="form-control" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-auto mbr-section-btn pb-5"><button type="submit" class="btn btn-secondary display-4">Guardar &gt;</button></div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<section>
    <div class="container">
<!----------------------------- Mostrando compromiso para el reporte 6 desde la Base de Datos ---------------------->
        <table class="table table-striped" style="widht:100%">
            <thead class="table-danger table-striped">
                <tr>
                    <th class="">Fecha compromiso</th>
                    <th class="">Compromiso realizado</th>   
                </tr>
            </thead>
            <tbody>
                <tr>
<!---------------------------------- Consulta para el compromiso ---------------------------------------------------->

                    <?php
                        $sqlreporte = "SELECT * FROM compromiso_6";
                        $resultadoreporte=mysqli_query($conexion,$sqlreporte);
                        while($mostrar = $resultadoreporte->fetch_array(MYSQLI_BOTH)){
                        ?>
                        <tr>
                            <?php
                                if($_SESSION['idusuario'] === $mostrar['idusuario']){
                            ?>
                            <th><?php echo $mostrar['fechacom_6']?></th>
                            <th><?php echo $mostrar['compromiso_6']?></th>
                            <?php
                                }
                            ?>
                        </tr>
                            <?php
                                }
                            ?>
                    </tr>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>
