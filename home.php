<?php

session_start();    

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
        <img style="margin-left: 15%;" src="assets/images/image_caract.png" alt="">
    </div>
</div>

<div class="row">
    <div class="col-12" style="background-color: #ea5c2c; height:15px;"></div>
</div>

<!-- Fin Navbar -->
       
        <section>
            <div class="container-fluid pt-5">
                <div class="row content-wrapper justify-content-center">
                    <form action="php/registro_form.php" method="POST">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-md col-6 form-group">
                                    <select name="jornada" class="form-control" required>
                                        <option value="">Selecciona la jornada</option>
                                        <option>Diurna</option>
                                        <option>Nocturna</option>
                                        <option>Virtual</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 col-md col-6 form-group">
                                    <select name="programa" class="form-control" required>
                                        <option value="">Selecciona el programa</option>
                                        <option>Administración humana</option>
                                        <option>Administración financiera</option>
                                        <option>Administración de mercadeo</option>
                                        <option>Administración de empresas</option>
                                        <option>Administración de negocios internacionales</option>
                                        <option>Contaduría pública</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 col-md col-6 form-group">
                                    <label class="form-control" for="start">Fecha inicio de prácticas
                                        <input class="ml-5" type="date" id="start" name="fechaini">
                                    </label>
                                </div>

                                <div class="col-lg-6 col-md col-6 form-group">
                                <label class="form-control" for="start" required >Fecha final de prácticas
                                        <input class="ml-5" type="date" id="start" name="fechafin">
                                    </label>
                                </div>

                                <div class="col-lg-6 col-md col-6 form-group pb-5">
                                    <textarea style="height: 80px;" name="nombreemp" placeholder="Nombre de la empresa donde realizará las prácticas" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                </div>
        </section>
        
        <section style="height: 150px!important; background-color:#14617d">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-12">
                            <h5 class="align-center display-2 text-white pt-4"><strong>Ahora te invitamos a responder unas preguntas que nos ayudarán a conocerte mejor.</strong></h5>

                        </div>
                    </div>
                </div>
        </section>

        <section class="form4 cid-sEt6ITROrL">
            <div class="container-fluid">
                <div class="row content-wrapper justify-content-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md col-6 form-group pt-5">
                                    <textarea name="pregunta1" placeholder="Expectativas y temores frente a la experiencia de prácticas profesionales" class="form-control" required></textarea>
                                </div>

                                <div class="col-lg-6 col-md col-6 form-group pt-5">
                                    <textarea name="pregunta2" placeholder="Competencias del ser que le gustaría a desarrollar con el acompañamiento" class="form-control" required></textarea>
                                </div>

                                <div class="col-lg-6 col-md col-6 form-group">
                                    <select name="pregunta3" class="form-control" required>
                                            <option value="">Mencione si ha laborado anteriormente</option>
                                            <option>Si</option>
                                            <option>No</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 col-md col-6 form-group">
                                    <textarea name="pregunta4" placeholder="Motivos por los cuales desea realizar las prácticas empresariales" class="form-control" required></textarea>
                                </div>

                                <div class="col-lg-6 col-md col-6 form-group">
                                    <textarea name="pregunta5" placeholder="¿Qué expectativas tienes frente a tus practicas profesionales?" class="form-control" required></textarea>
                                </div>

                                <div class="col-lg-6 col-md col-6 form-group">
                                    <textarea name="pregunta6" placeholder="¿Qué competencias blandas te gustaría fortalecer durante esta práctica?" class="form-control" required></textarea>
                                </div>

                                <div class="col-lg-6col-md col-6 form-group">
                                    <textarea name="pregunta7" placeholder="¿Cuáles son los temores que identificas frente a esta nueva experiencia profesional?" class="form-control" required></textarea>
                                </div>

                                <div class="col-lg-6col-md col-6 form-group">
                                    <textarea name="pregunta8" placeholder="¿Cuáles sentimientos logras identificar en ti en relación a esta nueva experiencia?" class="form-control" required></textarea>
                                </div>

                                <div class="col-lg-6col-md col-6 form-group">
                                    <textarea name="pregunta9" placeholder="¿Hasta ahora cual ha sido tu mayor logro profesional y académico?" class="form-control" required></textarea>
                                </div>

                                <div class="col-lg-6col-md col-6 form-group">
                                    <select name="pregunta10" class="form-control" required>
                                    <option value="">¿Tienes claridad sobre las funciones a realizar durante el proceso de prácticas?</option>
                                            <option>Si</option>
                                            <option>No</option>
                                    </select>
                                </div>

                                <div class="col-lg-6col-md col-6 form-group">
                                    <textarea name="pregunta11" placeholder="¿Consideras que eres autónomo y responsable a la hora de afrontar las consecuencias de tus decisiones?  explícanos tu respuesta" class="form-control" required></textarea>
                                </div>

                                <div class="col-lg-6col-md col-6 form-group">
                                    <textarea name="pregunta12" placeholder="¿Cuáles son tus objetivos profesionales que esperas cumplir en tus practicas?" class="form-control" required></textarea>
                                </div>

                                <div class="col-lg-6col-md col-6 form-group">
                                    <textarea name="pregunta13" placeholder="¿Qué fortalezas personales y profesionales identificas que puedan aportar a este nuevo paso profesional?" class="form-control" required></textarea>
                                </div>

                                <div class="col-lg-6col-md col-6 form-group">
                                    <textarea name="pregunta14" placeholder="¿Qué oportunidades de mejoras personales y profesionales identificas que puedan afectar esta etapa de practicas?" class="form-control" required></textarea>
                                </div>

                                <div class="col-lg-6col-md col-6 form-group">
                                    <select name="pregunta15" class="form-control" required>
                                    <option value="">¿Tienes claridad sobre tus responsabilidad en el proceso de práctica?</option>
                                            <option>Si</option>
                                            <option>No</option>
                                    </select>
                                </div>

                                <div class="col-lg-6col-md col-6 form-group">
                                    <select name="pregunta16" class="form-control" required>
                                            <option value="">¿Conocen la normatividad vigente sobre las practicas profesionales?</option>
                                            <option>Si</option>
                                            <option>No</option>
                                    </select>
                                </div>
                            </div>
                    </div>

            <div class="col-12 col-md-auto mbr-section-btn pt-5"><button type="submit" class="btn btn-danger display-4">Enviar &gt;</button></div>

                    </form>
                </div>
            </div>
        </section>
<footer style="height: 200px!important;"></footer>
</body>
</html>