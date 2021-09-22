<?php  
    session_start(); 
    require_once('../php/conexion_bd.php');
    $idusuario = $_SESSION['idusuario'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compromisos</title>
    <link rel="stylesheet" href="../assets/tether/tether.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="../assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>

<nav style="background-color:rgba(9 70 99)">
        <h1 class="text-white text-center pb-4 pt-4">Compromisos</h1>
    </nav>
<section>
    <div class="container">
        <table class="table-striped table-bordered justify-content-center" style="widht:100%">
                <thead class="text-center table-danger table-striped">
                    <p class="text-center pt-4 pb-4">Acá se visualiza el compromiso</p>
                    <tr>
                            <th class="pb-3 pt-3 pl-2 pr-2">Número Reporte</th>
                            <th class="pb-3 pt-3 pl-2 pr-2">Fecha Reporte</th>
                            <th class="pb-3 pt-3 pl-5 pr-5">Observaciones</th>
                            <th class="pb-3 pt-3 pl-5 pr-5">Fecha compromiso</th>
                            <th class="pb-3 pt-3 pl-5 pr-5">Compromiso</th>
                        </tr>
                </thead>
               
                <tbody>
                        <?php

                        $sql= "SELECT * FROM reportes R JOIN reportes_compromiso RC ON R.idusuario = RC.idusuario";
                        $result=mysqli_query($conexion,$sql);
                        
                        while ($mostrar=mysqli_fetch_array($result)){
                            ?>

                            <tr>
                                <td><?php echo $mostrar['numerorep'] ?></td>
                                <td><?php echo $mostrar['fecharep'] ?></td>
                                <td><?php echo $mostrar['observaciones'] ?></td>
                                <td><?php echo $mostrar['fechacom'] ?></td>
                                <td><?php echo $mostrar['compromiso'] ?></td>
                            </tr>
                        <?php    
                        }
                        ?>
                </tbody>
        </table>
    </div>
</section>
</body>
</html>