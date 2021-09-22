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

        <div class="col-12">
            <h4 class="text-center text-white pt-4" >Bienvenid@ <?php echo $_SESSION['nombre'] ?></h4>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-12" style="background-color: #122138;">
        <img style="margin-left: 15%;" src="assets/images/cierre.png" alt="">
    </div>
</div>

<div class="row">
    <div class="col-12" style="background-color: #ea5c2c; height:15px;"></div>
</div>

<!-- Fin Navbar -->

            <section>
                    <h1 class="pb-4 pt-5 text-center">
                        <strong>Gracias por culminar con éxito este proceso de prácticas</strong>
                    </h1>
                    <h4 class="text-center pb-5"> <strong>Te invitamos a llenar las siguientes preguntas que darán paso a tu cierre.</strong></h4>
        </section>

        <section>
            <div class="container-flui">
                <div class="row justify-content-center">
                    <form action="php/registro_cierre.php" method="POST">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-md col-6 form-group text-center pb-3">
                                    <label class="form-control" for="start">Fecha de cierre
                                        <input class="ml-5" type="date" id="start" name="fechacie">
                                    </label>
                                </div>

                                <div class="col-lg-6 col-md col-6 form-group">
                                <textarea name="aprendizaje" placeholder="Aprendizajes" class="form-control" required></textarea>
                                </div>

                                <div class="col-lg-6 col-md col-6 form-group pb-5">
                                    <textarea name="mejora" placeholder="Opciones de mejora" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                </div>

        <section class="form4 cid-sEt6ITROrL pb-5">
            <div class="col-12 col-md-auto mbr-section-btn pt-5"><button type="submit" class="btn btn-danger display-4">Enviar &gt;</button></div>
        </section>
                    </form>
                </div>
            </div>
        </section>

<!-- <footer style="height: 200px!important;"></footer> -->
</body>
</html>