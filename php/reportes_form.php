<?php
session_start();    
include 'conexion_bd.php';

    $idusuario = $_SESSION['idusuario'];
    $numerorep = $_POST['numerorep'];
    $fecharep = $_POST['fecharep'];
    $observaciones = $_POST['observaciones'];

    /* Verificar que el registro no se repita en la base de datos */
    
    $verificar_registro = mysqli_query($conexion, "SELECT * FROM reportes WHERE idusuario = '$idusuario' and numerorep= '$numerorep'");

    if(mysqli_num_rows($verificar_registro) > 0){
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
          setTimeout(function () {
            Swal.fire({
              icon: 'error',
              title: 'Este número de reporte ya fue ingresado',
              confirmButtonColor: '#14617d',
              backdrop: `#122138`,
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../home2.php'
              }
            })      
          });
        </script>
        ";     
        exit();
        }else{

  /*Inserta un reporte nuevo en la base de datos */

          $query = "INSERT INTO reportes (idusuario, numerorep, fecharep, observaciones) 
              VALUES($idusuario, '$numerorep', '$fecharep', '$observaciones')";

      $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
          setTimeout(function () {
            Swal.fire({
              icon: 'success',
              title: 'Gracias por enviar el reporte',
              confirmButtonColor: '#14617d',
                  backdrop: `#122138`,
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../home2.php'
              }
            })      
          }, 500);
        </script>
        ";
     }else{
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
          setTimeout(function () {
            Swal.fire({
              icon: 'warning',
              title: 'Debes llenar todos los campos del reporte',
              confirmButtonColor: '#14617d',
                  backdrop: `#122138`,
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../home2.php'
              }
            })      
          }, 500);
        </script>
        ";
     }
        }
     mysqli_close($conexion);
?>
