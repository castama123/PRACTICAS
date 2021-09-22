<?php

include 'conexion_bd.php';

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $cc = $_POST['cc'];
    $edad = $_POST['edad'];
     /* Encriptar contraseña o CC */
    //  $cc = hash('sha512', $cc)

    $query = "INSERT INTO usuarios (nombre, correo, cc, edad) 
              VALUES('$nombre', '$correo', '$cc', '$edad')";

    /* Verificar que el correo no se repita en la base de datos */
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
          setTimeout(function () {
            Swal.fire({
              icon: 'error',
              title: 'Este correo ya está registrado, intenta con otro',
              confirmButtonColor: '#14617d',
                  backdrop: `#122138`,
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../index.php'
              }
            })      
          });
        </script>
        ";     
        exit();
        }

    /* Verificar que el correo no se repita en la base de datos */
    $verificar_cc = mysqli_query($conexion, "SELECT * FROM usuarios WHERE cc = '$cc' ");

    if(mysqli_num_rows($verificar_cc) > 0){
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
          setTimeout(function () {
            Swal.fire({
              icon: 'error',
              title: 'Esta identificación ya está registrada, intenta con otra.',
              confirmButtonColor: '#14617d',
                  backdrop: `#122138`,
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../index.php'
              }
            })      
          }, 500);
        </script>
        ";
        exit();
        }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
          setTimeout(function () {
            Swal.fire({
              icon: 'success',
              title: 'Datos ingresados correctamente.<br>Ahora puedes iniciar sesión',
              confirmButtonColor: '#14617d',
                  backdrop: `#122138`,
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../index.php'
              }
            })      
          }, 500);
        </script>
        ";
     }else{
        //  echo '
        //     <script>
        //         alert ("Para registrarte debes ingresar todos los campos");
        //         window.location = "../index.php";
        //     </script>         
        //  ';

        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
          setTimeout(function () {
            Swal.fire({
              icon: 'warning',
              title: 'Recuerda CC debe ser un campo númerico',
              confirmButtonColor: '#14617d',
                  backdrop: `#122138`,
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../index.php'
              }
            })      
          }, 500);
        </script>
        ";
     }

     mysqli_close($conexion);
?>