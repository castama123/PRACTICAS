<?php

session_start();    
require_once('php/conexion_bd.php');
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

  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <script src="https://kit.fontawesome.com/5447e852eb.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- Inicio Navbar -->
<div>
    <div class="row" style="background-color: #176383">
        <div class="col-1"></div>
        <div class="col-9">
            <h4 class="text-center text-white pt-4" >Bienvenid@ <?php echo $_SESSION['nombre'] ?></h4>
        </div>
        <div class="col-2">
            <h6 style="text-align:right; padding-top: 2rem;"><a class="text-white pr-2" href="php/cerrar_sesion.php">Cerrar sesión</a></h6>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12" style="background-color: #122138;">
        <img style="margin-left: 15%;" src="assets/images/image_reportes.png" alt="">
    </div>
</div>

<div class="row">
    <div class="col-12" style="background-color: #ea5c2c; height:15px;"></div>
</div>

<!-- Fin Navbar -->

<div class="col-12 col-md-auto mbr-section-btn pt-5 text-center">
    <a onclick="Ventana_Sec('tabla/consultar_form.php')" class="btn btn-secondary display-4">Consultar respuestas del formulario <i style="padding-left: 0.5rem; "class="fas fa-book"> </i></a>
    
</div>

<section class="form4 cid-sEt6ITROrL mbr-fullscreen" id="form4-0">
    <div class="container-fluid">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-12" data-form-type="formoid">
                <div class="mbr-form form-with-styler">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 display-2">
                                <strong>Reporte quincenal experiencia proceso de prácticas</strong></h1>
                        </div>
                    <form action="php/reportes_form.php" method="POST">
                        <div class="container">
                        <h2 class="text-center pt-2 pb-3 font-italic">Espacio exclusivamente para el estudiante</h2>
                        <p class="text-center pb-4">Querido estudiante, en este espacio debes realizar los reportes que ayudarán a que tu proceso de prácticas sea mucho mejor</p>
                        <div class="row">
                            <div class="col-lg-6 col-md col-6 form-group">
                                <select name="numerorep" class="form-control" required>
                                    <option value="">Selecciona número de reporte</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>

                            <div class="col-lg-6 col-md col-6 form-group">
                                <label class="form-control" for="start">Fecha reporte
                                    <input class="ml-5" type="date" id="start" name="fecharep">
                                </label>
                            </div>
                        </div>

                        <div class="row text-center justify-content-center">
                            <div class="col-lg-6 col-md col-6 form-group pb-5">
                                <textarea name="observaciones" placeholder="Observaciones por parte de los estudiantes sobre su experiencia" class="form-control" required></textarea>
                            </div>
                        </div>
                        </div>

                        <div class="col-12 col-md-auto mbr-section-btn"><button type="submit" class="btn btn-danger display-4">Enviar &gt;</button></div>
                    </form>

<!------------------- Consumiendo datos desde MySQL Reportes--------------->

                    <nav style="background-color:rgba(9 70 99)">
                            <h1 class="text-white text-center pb-4 pt-4">Reportes quincenales -  Generar compromiso</h1>
                    </nav>

                    <div class="container">
                        <h2 class="text-center pt-5 font-italic">Espacio para generar compromiso entre el estudiante y el asesor de prácticas</h2>
                        <h3 class="text-center pt-2">Selecciona el número de reporte donde deseas generar el compromiso</h3>
                    </div>

                    <section>
                    <div class="container pt-4 pb-4">
                        <div class="row row-cols-4 row-cols-lg-4 g-2 g-lg-4 text-center pb-5">
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reportes/reporte_1.php')"  class="btn btn-secondary display-4">Reporte 1</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reportes/reporte_2.php')"  class="btn btn-secondary display-4">Reporte 2</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reportes/reporte_3.php')"  class="btn btn-secondary display-4">Reporte 3</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reportes/reporte_4.php')"  class="btn btn-secondary display-4">Reporte 4</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reportes/reporte_5.php')" class="btn btn-secondary display-4">Reporte 5</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reportes/reporte_6.php')" class="btn btn-secondary display-4">Reporte 6</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reportes/reporte_7.php')" class="btn btn-secondary display-4">Reporte 7</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reportes/reporte_8.php')" class="btn btn-secondary display-4">Reporte 8</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reportes/reporte_9.php')" class="btn btn-secondary display-4">Reporte 9</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reportes/reporte_10.php')" class="btn btn-secondary display-4">Reporte 10</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reportes/reporte_11.php')" class="btn btn-secondary display-4">Reporte 11</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reportes/reporte_12.php')" class="btn btn-secondary display-4">Reporte 12</a>
                            </div>
                        </div>
                        <div class="col p-3 text-center">
                            <a onclick="Ventana_Sec('cierre.php')" class="btn btn-secondary display-4">Cierre del proceso</a>
                        </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>

<script language=javascript>
function Ventana_Sec (URL){
  window.open(URL,"Compromiso","width=1200,height=700,top=30,left=70,scrollbars=NO,titlebar=NO,menubar=YES,toolbar=NO,directories=YES,location=YES,status=NO,resizable=NO") 
}
</script>

</body>
</html>

<!-- <th><a href="tabla/consultar_compromiso.php" target="blank" class="btn btn-secondary display-4">Ver compromiso</a></th> -->