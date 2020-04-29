<?php
//include 'conexion.php';
SESSION_START();

if(!isset($_SESSION['cupon'])){ 
    header('location:login/logincupon.php');
  } if(!isset($_SESSION['cupon'])){
    header('location:login/logincupon.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Panel Recolector</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/estilos.css">
  <script>src="js/jquery-3.4.1.min.js"</script>
  <script>src="bootstrap/js/bootstrap.min.css"</script>
  
  <link href="fonts/styles.css" rel="stylesheet">
 <link rel="stylesheet" href="css/formulario.css">
  <link rel="stylesheet" href="css/logo.css">
  <link rel="stylesheet" href="css/flexbox.css">
 
 </head>
<body>
  <div>
  <header class="header">
    <div class="contenedor">
      <img src="img/logo.png" class="info__logo">
      
      <span class="icon-menu" id="btn-menu"></span>

      <nav class="nav" id="nav">
      <ul class="menu">
        <li class="menu__item"><a class="menu__link select" href="index.php">INICIO</a></li>
        <li class="menu__item"><a class="menu__link select" href="nosotros.php">EMPRESA</a></li>
        <li class="menu__item"><a class="menu__link select" href="cobertura.php">COBERTURA</a></li>
        <li class="menu__item"><a class="menu__link select" href="cerrar_sesion.php">FINALIZAR</a></li>
      </ul>
    </nav>
</div>
</header>

<br>
<br>

<div class="container"><div>
         <section class="padre">
         <div class="alert alert-info" style="position:inherit;">Cupón equipos confirmados</div>
         <div class="alert alert-info" style="position:inherit;">
         <a href="#" id="show1">Click aqui</a>
        <div id="element1" style="display: none;">
        <div id="close1"><a href="#" id="hide1">Volver Atras</a></div>
      <form  action="pdfsend/pdfpower.php" method="POST" style="margin:0; float:left;">
      <div class="form-group mx-sm-3 mb-2">
      <label>¡Ingrese su numero de orden <br>
      y su numero de identificación!</label>
         <input type="text" class="form-control"  name="id_orden" id="id_orden" placeholder="Nro Orden" style="width:150px;height:40px" required>
         <input type="text" class="form-control"  name="identificacion" id="identificacion" placeholder="Identificación" style="width:150px;height:40px" required>
         <button type="submit" name="pdf" class="btn btn-danger">CUPÓN PDF</button>
         
      </div>
      </form>
</div>
</section>
  

         <section class="padre">
<div class="alert alert-danger" style="position:inherit;">Cupón equipos <strong>a confirmar</strong></div>
         <div class="alert alert-danger" style="position:inherit;">
<a href="#" id="show">Click aqui</a>
<div id="element" style="display: none;">
   <div id="close"><a href="#" id="hide">Volver Atras</a></div>
   <form  action="pdfsend/pdfpowerconfirmar.php" method="POST" style="margin:0; float:left;">
      <div class="form-group mx-sm-3 mb-2">
      <label>¡Ingrese su numero de orden <br>
      y su numero de identificación!</label>
         <input type="text" class="form-control"  name="id_orden" id="id_orden" placeholder="Nro Orden" style="width:150px;height:40px" required>
         <input type="text" class="form-control"  name="identificacion" id="identificacion" placeholder="Identificación" style="width:150px;height:40px" required>
         <button type="submit" name="submit" id="enviar-btn" class="btn btn-danger">CUPÓN PDF</button>
         
      </div>
      </form>
</div>
</div>   
</section>
</div>
 
         
         

<script type="text/javascript">
$(document).ready(function(){
  $("#hide").click(function(){
    $("#element").hide();
  });
  $("#show").click(function(){
    $("#element").show();
  });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $("#hide1").click(function(){
    $("#element1").hide();
  });
  $("#show1").click(function(){
    $("#element1").show();
  });
});
</script>

	<script src="js/script.js"></script>
	<script src="js/menu.js"></script>

</body>
</html                            		                            