<?php

require_once('../php/conexion_bd.php');


// Consultando en la Base de datos

// $sqlreporte = "SELECT Rep.numerorep, Rep.fecharep, Rep.observaciones, Com.compromiso, Rep.idusuario
//                 FROM reportes Rep
//                 LEFT OUTER JOIN reportes_compromiso Com ON Rep.idusuario = Com.idusuario";

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
  <script src="https://kit.fontawesome.com/5447e852eb.js" crossorigin="anonymous"></script>
</head>
<body>
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
        <img style="margin-left: 15%;" src="../assets/images/image_reportes.png" alt="">
    </div>
</div>

<div class="row">
    <div class="col-12" style="background-color: #ea5c2c; height:15px;"></div>
</div>


<div class="col-12 col-md-auto mbr-section-btn pt-5 text-center">
    <a onclick="Ventana_Sec('consultar_form_admin.php')" class="btn btn-secondary display-4">Consultar respuestas del formulario <i style="padding-left: 0.5rem; "class="fas fa-book"> </i></a>
    
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

<!------------------- Consumiendo datos desde MySQL Reportes--------------->

                    <nav style="background-color:rgba(9 70 99)">
                            <h1 class="text-white text-center pb-4 pt-4">Visualizar reportes y compromiso</h1>
                    </nav>

                    <div class="container">
                        <h2 class="text-center pt-5 font-italic">Espacio para visualizar compromiso entre el estudiante y el asesor de prácticas</h2>
                        <h4 class="text-center pt-2">Selecciona el número de reporte donde deseas visualizar el compromiso</h4>
                    </div>

                    <section>
                    <div class="container pt-4 pb-4">
                        <div class="row row-cols-4 row-cols-lg-4 g-2 g-lg-4 text-center pb-5">
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reporte1_admin.php')"  class="btn btn-secondary display-4">Reporte 1</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reporte2_admin.php')"  class="btn btn-secondary display-4">Reporte 2</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reporte3_admin.php.')"  class="btn btn-secondary display-4">Reporte 3</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reporte4_admin.php.')"  class="btn btn-secondary display-4">Reporte 4</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reporte5_admin.php.')" class="btn btn-secondary display-4">Reporte 5</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reporte6_admin.php.')" class="btn btn-secondary display-4">Reporte 6</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reporte7_admin.php.')" class="btn btn-secondary display-4">Reporte 7</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reporte8_admin.php.')" class="btn btn-secondary display-4">Reporte 8</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reporte9_admin.php.')" class="btn btn-secondary display-4">Reporte 9</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reporte10_admin.php.')" class="btn btn-secondary display-4">Reporte 10</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reporte11_admin.php.')" class="btn btn-secondary display-4">Reporte 11</a>
                            </div>
                            <div class="col p-3">
                            <a onclick="Ventana_Sec('reporte12_admin.php.')" class="btn btn-secondary display-4">Reporte 12</a>
                            </div>
                        </div>
                        <div class="col p-3 text-center">
                            <a onclick="Ventana_Sec('cierre_admin.php')" class="btn btn-secondary display-4">Cierre del proceso</a>
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
