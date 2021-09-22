<?php  
    session_start(); 
    require_once('conexion_bd.php'); 
 
    //Get Data.
    $correo = $_POST['correo']; 
    $cc = $_POST['cc']; 
 
    //Prepare Statement.
    $sql_login = "SELECT idusuario, correo, nombre  FROM usuarios WHERE correo='$correo' and cc='$cc'"; 
 
    //Execute Statement.
    $validar_login = mysqli_query($conexion,$sql_login);
    if (mysqli_num_rows($validar_login) > 0){
        while($data = $validar_login->fetch_row()){ 
            $_SESSION['idusuario'] = $data[0]; 
            $_SESSION['usuario'] = $data[1]; 
            $_SESSION['nombre'] = $data[2]; 
          } 

          $idusuario = $_SESSION['idusuario'];
          $sql_home = "SELECT idusuario FROM info_usuario WHERE idusuario='$idusuario'";
          $validar_home= mysqli_query($conexion,$sql_home);

          if (mysqli_num_rows($validar_home) > 0){
            header("location:../home2.php"); 
            exit;
          } else {
            header("location:../home.php"); 
            exit;
          }
    } else {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script> 
      <script> 
        setTimeout(function () { 
          Swal.fire({
            icon: 'warning',
            title: 'Información incorrecta, intentalo de nuevo.',
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
      exit;   
    }
?>