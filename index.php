<?php 

session_start();

if (isset($_SESSION['usuario'])){
    header("location: home.php");
}

?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.3.5, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.3.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo5.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Login y registro</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/css/estilos.css">  
  
</head>
<body>
  
  <section class="form4 cid-sEt6ITROrL mbr-fullscreen" id="form4-0">
    <div class="container-fluid">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-7">
                <div class="mbr-form form-with-styler">
            <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar a la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión &gt;</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse &gt;</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario.php" class="formulario__login" method="POST">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Institucional" name="correo">
                        <input type="password" placeholder="CC" name="cc">
                        <button class="col-12 col-md-auto mbr-section-btn btn btn-secondary display-4">Ingresar &gt;</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_usuario.php" class="formulario__register" method="POST">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre" required>
                        <input type="email" placeholder="Correo Institucional" name="correo" required>
                        <input type="text" placeholder="CC" name="cc" required>
                        <input type="number" placeholder="Edad" name="edad" size="2" required>
                        
                        <button class="col-12 col-md-auto mbr-section-btn btn btn-secondary display-4">Regístrarse &gt;</button>
                    </form>
                </div>
            </div>
            </main>                    
            </div>
            </div>

            <div class="col-lg-5 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="assets/images/bg4.jpg" alt="Mobirise">
            </div>
            </div>
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/v"></a></section>
    
    <script src="assets/web/assets/jquery/jquery.min.js"></script>  
    <script src="assets/popper/popper.min.js"></script>  
    <script src="assets/tether/tether.min.js"></script>  
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>  
    <script src="assets/smoothscroll/smooth-scroll.js"></script>  
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/js/script.js"></script>
    
</body>
</html>

