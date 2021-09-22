<?php
session_start();    
include 'conexion_bd.php';

    $idusuario = $_SESSION['idusuario'];
    $fechacom_4 = $_POST['fechacom_4'];
    $compromiso_4 = $_POST['compromiso_4'];

   /* Verificar que al menos exista un reporte para dejar enviar el compromiso */
   $verificar_reporte = mysqli_query($conexion, "SELECT * FROM practicas.reportes WHERE idusuario = '$idusuario' and numerorep = 4 ");

  if(mysqli_num_rows($verificar_reporte) > 0){
   
  /* Verificar que el compromiso no se repita en la base de datos */
  $verificar_compromiso = mysqli_query($conexion, "SELECT * FROM compromiso_4 WHERE idusuario = '$idusuario' ");

  if(mysqli_num_rows($verificar_compromiso) > 0){
      echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
      <script>
        setTimeout(function () {
          Swal.fire({
            icon: 'error',
            title: 'El compromiso 4 ya ha sido registrado anteriormente',
            confirmButtonColor: '#14617d',
                  backdrop: `#122138`,
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = '../reportes/reporte_4.php'
            }
          })      
        });
      </script>
      ";     
      exit();
      }else{

            /*Inserta un compromiso nuevo en la base de datos */
            $query = "INSERT INTO compromiso_4 (idusuario, fechacom_4, compromiso_4)
                      VALUES('$idusuario', '$fechacom_4', '$compromiso_4')";
          // echo $query;
          $ejecutar = mysqli_query($conexion, $query);

          if($ejecutar){
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
              setTimeout(function () {
                Swal.fire({
                  icon: 'success',
                  title: 'Gracias por enviar tu compromiso número 4',
                  confirmButtonColor: '#14617d',
                  backdrop: `#122138`,
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location.href = '../reportes/reporte_4.php'
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
                  title: 'Debes llenar todos los campos del compromiso',
                  confirmButtonColor: '#14617d',
                  backdrop: `#122138`,
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location.href = '../reportes/reporte_4.php'
                  }
                })      
              }, 500);
            </script>
            ";
        }
      }
    }else{
      echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
      <script>
        setTimeout(function () {
          Swal.fire({
            icon: 'error',
            title: 'No puedes llenar el compromiso si no tiene un reporte',
            confirmButtonColor: '#14617d',
                  backdrop: `#122138`,
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = '../reportes/reporte_4.php'
            }
          })
        });
      </script>
      ";
      exit();
  }
  mysqli_close($conexion);
?>

