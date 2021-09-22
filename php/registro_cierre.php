<?php
session_start();    
include 'conexion_bd.php';

    $idusuario = $_SESSION['idusuario'];
    $fechacie = $_POST['fechacie'];
    $aprendizaje = $_POST['aprendizaje'];
    $mejora = $_POST['mejora'];

    /* Verificar que el registro no se repita en la base de datos */
    
    $verificar_registro = mysqli_query($conexion, "SELECT * FROM cierre WHERE idusuario = '$idusuario' ");

    if(mysqli_num_rows($verificar_registro) > 0){
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
          setTimeout(function () {
            Swal.fire({
              icon: 'error',
              title: 'Ya realizaste el cierre del proceso anteriormente',
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

          $query = "INSERT INTO cierre (idusuario, fechacie, aprendizaje, mejora) 
              VALUES($idusuario, '$fechacie', '$aprendizaje', '$mejora')";

      $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
          setTimeout(function () {
            Swal.fire({
              icon: 'success',
              title: 'Gracias por terminar el proceso de prácticas con éxito.',
              confirmButtonColor: '#14617d',
                  backdrop: `#122138`,
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../cierre.php'
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
              title: 'Debes llenar todos los campos del cierre del proceso',
              confirmButtonColor: '#14617d',
                  backdrop: `#122138`,
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../cierre.php'
              }
            })      
          }, 500);
        </script>
        ";
     }
        }
     mysqli_close($conexion);
?>
