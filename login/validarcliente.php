<?php
//$_SESSION["newsession"]=$value;

$id_recolector=$_POST['id_recolector'];

//conectar a la base de datos //
    $conexion = mysqli_connect("localhost", "root", "", "formulario");
    $consulta="SELECT id_recolector FROM recolectores WHERE id_recolector='$id_recolector'"; //VALIDANDO id de la TABLA express//
    $resultado=mysqli_query($conexion, $consulta);
    $_SESSION["id_recolector"] = $_POST;

    $filas=mysqli_num_rows($resultado);
    if ($filas>0) {
        $resultado = mysqli_fetch_array($resultado, MYSQLI_BOTH);
         
        SESSION_START();
        $_SESSION["logged_user"] = $id_recolector['id_recolector'];
        $_SESSION["id_recolector"] = $_POST;
        header('location:../datoscliente.php');
        
    } else {
    	echo ("Error en la autenticacion");
    }
    mysqli_close($conexion);
?>
  