<?php  
    session_start(); 
    require_once('../php/conexion_bd.php');
    $idusuario = $_SESSION['idusuario'];

    $sql="SELECT * FROM info_usuario WHERE idusuario='$idusuario'";
    $resultjornada=mysqli_query($conexion,$sql);
    $resultprograma=mysqli_query($conexion,$sql);
    $resultfechaini=mysqli_query($conexion,$sql);
    $resultfechafin=mysqli_query($conexion,$sql);
    $resultnombreemp=mysqli_query($conexion,$sql);
    $resultpregunta1=mysqli_query($conexion,$sql);
    $resultpregunta2=mysqli_query($conexion,$sql);
    $resultpregunta3=mysqli_query($conexion,$sql);
    $resultpregunta4=mysqli_query($conexion,$sql);
    $resultpregunta5=mysqli_query($conexion,$sql);
    $resultpregunta6=mysqli_query($conexion,$sql);
    $resultpregunta7=mysqli_query($conexion,$sql);
    $resultpregunta8=mysqli_query($conexion,$sql);
    $resultpregunta9=mysqli_query($conexion,$sql);
    $resultpregunta10=mysqli_query($conexion,$sql);
    $resultpregunta11=mysqli_query($conexion,$sql);
    $resultpregunta12=mysqli_query($conexion,$sql);
    $resultpregunta13=mysqli_query($conexion,$sql);
    $resultpregunta14=mysqli_query($conexion,$sql);
    $resultpregunta15=mysqli_query($conexion,$sql);
    $resultpregunta16=mysqli_query($conexion,$sql);

    $sql2="SELECT * FROM usuarios WHERE idusuario='$idusuario'";

    $resultnombre=mysqli_query($conexion,$sql2);
    $resultedad=mysqli_query($conexion,$sql2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuestas del formulario</title>
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
        <h1 class="text-white text-center pb-4 pt-4">Respuestas del formulario</h1>
    </nav>

    <section>
        <table class="table">

            <tr><th>Nombre completo:</th>
                <?php
                while($mostrar = $resultnombre->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['nombre'].'</td>';}?>
            </tr>

            <tr><th>Edad:</th>
                <?php
                while($mostrar = $resultedad->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['edad'].'</td>';}?>
            </tr>

            <tr><th>Jornada:</th>
                <?php
                while($mostrar = $resultjornada->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['jornada'].'</td>';}?>
            </tr>

            <tr><th>Programa académico:</th>
                <?php
                while($mostrar = $resultprograma->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['programa'].'</td>';}?>
            </tr>

            <tr><th>Nombre de la empresa donde realizará las prácticas:</th>
                <?php
                while($mostrar = $resultnombreemp->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['nombreemp'].'</td>';}?>
            </tr>

            <tr><th>Fecha inicio de prácticas:</th>
                <?php
                while($mostrar = $resultfechaini->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['fechaini'].'</td>';}?>
            </tr>

            <tr><th>Fecha fin de prácticas:</th>
                <?php
                while($mostrar = $resultfechafin->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['fechafin'].'</td>';}?>
            </tr>

            <tr><th>Expectativas y temores frente a la experiencia de prácticas profesionales:</th>
                <?php
                while($mostrar = $resultpregunta1->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta1'].'</td>';}?>
            </tr>

            <tr><th>Competencias del ser que le gustaría a desarrollar con el acompañamiento:</th>
                <?php
                while($mostrar = $resultpregunta2->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta2'].'</td>';}?>
            </tr>

            <tr><th>Mencione si ha laborado anteriormente:</th>
                <?php
                while($mostrar = $resultpregunta3->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta3'].'</td>';}?>
            </tr>

            <tr><th>Motivos por los cuales desea realizar las prácticas empresariales:</th>
                <?php
                while($mostrar = $resultpregunta4->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta4'].'</td>';}?>
            </tr>

            <tr><th>¿Qué expectativas tienes frente a tus practicas profesionales?</th>
                <?php
                while($mostrar = $resultpregunta5->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta5'].'</td>';}?>
            </tr>

            <tr><th>¿Qué competencias blandas te gustaría fortalecer durante esta práctica?</th>
                <?php
                while($mostrar = $resultpregunta6->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta6'].'</td>';}?>
            </tr>

            <tr><th>¿Cuáles son los temores que identificas frente a esta nueva experiencia profesional?</th>
                <?php
                while($mostrar = $resultpregunta7->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta7'].'</td>';}?>
            </tr>

            <tr><th>¿Cuáles sentimientos logras identificar en ti en relación a esta nueva experiencia?</th>
                <?php
                while($mostrar = $resultpregunta8->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta8'].'</td>';}?>
            </tr>

            <tr><th>¿Hasta ahora cual ha sido tu mayor logro profesional y académico?</th>
                <?php
                while($mostrar = $resultpregunta9->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta9'].'</td>';}?>
            </tr>

            <tr><th>¿Tienes claridad sobre las funciones a realizar durante el proceso de prácticas?</th>
                <?php
                while($mostrar = $resultpregunta10->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta10'].'</td>';}?>
            </tr>

            <tr><th>¿Consideras que eres autónomo y responsable a la hora de afrontar las consecuencias de tus decisiones?</th>
                <?php
                while($mostrar = $resultpregunta11->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta11'].'</td>';}?>
            </tr>

            <tr><th>Cuáles son tus objetivos profesionales que esperas cumplir en tus practicas?</th>
                <?php
                while($mostrar = $resultpregunta12->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta12'].'</td>';}?>
            </tr>

            <tr><th>¿Qué fortalezas personales y profesionales identificas que puedan aportar a este nuevo paso profesional?</th>
                <?php
                while($mostrar = $resultpregunta13->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta13'].'</td>';}?>
            </tr>

            <tr><th>¿Qué oportunidades de mejoras personales y profesionales identificas que puedan afectar esta etapa de practicas?</th>
                <?php
                while($mostrar = $resultpregunta14->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta14'].'</td>';}?>
            </tr>

            <tr><th>Tienes claridad sobre tus responsabilidad en el proceso de práctica?</th>
                <?php
                while($mostrar = $resultpregunta15->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta15'].'</td>';}?>
            </tr>

            <tr><th>¿Conocen la normatividad vigente sobre las practicas profesionales?</th>
                <?php
                while($mostrar = $resultpregunta16->fetch_array(MYSQLI_BOTH)){
                    echo '<td>'.$mostrar['pregunta16'].'</td>';}?>
            </tr>

        </table>
    </section>
</body>
</html>