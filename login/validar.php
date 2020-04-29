<?php


$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//conectar a la base de datos //
    $conexion = mysqli_connect("localhost", "root", "", "formulario");
    $administracion= mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'"); //VALIDANDO USUARIO Y CONTRASEÑA DE LA TABLA USUARIOS//
    if (mysqli_num_rows($administracion) > 0)
{
    session_start();
    $_SESSION['administracion']="$usuario";
    header("location: ../admin/administracion.php");
   exit();
}
 else
 {
     $mensajeaccesoincorrecto = "el usuario y la contraseña es invalidado";
     echo "$mensajeaccesoincorrecto";
    }
    
?>
  