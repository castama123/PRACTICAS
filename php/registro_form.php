<?php
session_start();    
include 'conexion_bd.php';

    $idusuario = $_SESSION['idusuario'];
    $jornada = $_POST['jornada'];
    $programa = $_POST['programa'];
    $fechaini = $_POST['fechaini'];
    $fechafin = $_POST['fechafin'];
    $nombreemp = $_POST['nombreemp'];
    $pregunta1 = $_POST['pregunta1'];
    $pregunta2 = $_POST['pregunta2'];
    $pregunta3 = $_POST['pregunta3'];
    $pregunta4 = $_POST['pregunta4'];
    $pregunta5 = $_POST['pregunta5'];
    $pregunta6 = $_POST['pregunta6'];
    $pregunta7 = $_POST['pregunta7'];
    $pregunta8 = $_POST['pregunta8'];
    $pregunta9 = $_POST['pregunta9'];
    $pregunta10 = $_POST['pregunta10'];
    $pregunta11 = $_POST['pregunta11'];
    $pregunta12 = $_POST['pregunta12'];
    $pregunta13 = $_POST['pregunta13'];
    $pregunta14 = $_POST['pregunta14'];
    $pregunta15 = $_POST['pregunta15'];
    $pregunta16 = $_POST['pregunta16'];

 
    $query = "INSERT INTO info_usuario (idusuario, jornada, programa, fechaini, fechafin, nombreemp, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, pregunta7, pregunta8, pregunta9, pregunta10, pregunta11, pregunta12, pregunta13, pregunta14, pregunta15, pregunta16) 
              VALUES($idusuario, '$jornada', '$programa', '$fechaini', '$fechafin', '$nombreemp', '$pregunta1', '$pregunta2', '$pregunta3', '$pregunta4', '$pregunta5', '$pregunta6', '$pregunta7', '$pregunta8', '$pregunta9', '$pregunta10', '$pregunta11', '$pregunta12', '$pregunta13', '$pregunta14', '$pregunta15', '$pregunta16')";

      $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
          setTimeout(function () {
            Swal.fire({
              icon: 'success',
              title: 'Tu formulario se ha enviado con éxito',
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
         echo '
            <script>
                alert ("Debes llenar todos los campos");
                window.location = "../home.php";
            </script>         
         ';
     }
     mysqli_close($conexion);
?>
