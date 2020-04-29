<?php
//include 'conexion.php';
SESSION_START();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>PostalMarketing</title>
    <!--metodo para hace la pagina responsive-->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">

  <!-- vinculacion con estilo css -->
  <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/estilos.css">
 <script>src="../js/jquery-3.4.1.min.js"</script>
  <script>src="../bootstrap/js/bootstrap.min.js"</script>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link href="../fonts/styles.css" rel="stylesheet">
 <link rel="stylesheet" href="../css/flexbox.css">
  
  <link rel="stylesheet" href="../css/logo.css">
  
  
 
 </head>
<body>
  <header class="header">
    <div class="contenedor">
      <img src="../img/logo.png" class="info__logo">
      <span class="icon-menu" id="btn-menu"></span>
      <nav class="nav" id="nav">
      <ul class="menu">
        <li class="menu__item"><a class="menu__link" href="../index.php">INICIO</a></li>
        <li class="menu__item"><a class="menu__link select" href="../admin/administracion.php">PANEL</a></li>
        <li class="menu__item"><a class="menu__link" href="../admin/xfiltrox.php">FILTRO</a></li>
        <li class="menu__item"><a class="menu__link" href="../cerrar_sesion.php">CERRAR SESION</a></li>
      </ul>
    </nav>
         </div>
         
         <br>
         <br>
<div class="container">
         <section class="padre">
         <div class="alert alert-info" style="position:inherit;">Panel Buscador</div>
         <div class="alert alert-info" style="position:inherit;width:673px;">
      <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
      <div class="form-group mx-sm-3 mb-2">
      
         <input type="text" class="form-control"  name="identificacionae" id="identificacionae" placeholder="Identificación" style="width:120px;height:40px">
         <button type="submit" name="identificacionaee" id="identificacionae" class="btn btn-info">Buscar</button>
</div>
    </form>
        <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
        <div class="form-group mx-sm-3 mb-2">
         
         <input type="text" class="form-control"  name="emaila" id="emaila" placeholder="email" style="width:100px;height:40px">
         <button type="submit" name="emailaa" id="emaila" class="btn btn-info">Buscar</button>
      </div>

    </form>
    <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
    <div class="form-group mx-sm-3 mb-2">
    
         <input type="date" class="form-control"  name="fechaconfirmadosa" id="fechaconfirmadosa" placeholder=" Fecha" style="width:170px;height:40px">
         <button type="submit" name="fechaconfirmadosaa" id="fechaconfirmadosa" class="btn btn-info">Buscar</button>
      </div>

    </form>
    <br>
    <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
      <div class="form-group mx-sm-3 mb-2">
      
         <input type="text" class="form-control"  name="seriea" id="seriea" placeholder="Serie" style="width:120px;height:40px">
         <button type="submit" name="serieaa" id="seriea" class="btn btn-info">Buscar</button>
</div>
    </form>
        <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
        <div class="form-group mx-sm-3 mb-2">
         
         <input type="text" class="form-control"  name="ordena" id="ordena" placeholder="orden" style="width:100px;height:40px">
         <button type="submit" name="ordenaa" id="ordena" class="btn btn-info">Buscar</button>
      </div>

    </form>
    
       
     
 
</section>
        
<!--PANEL PARA PACTAR-->

<section class="padre">

<div  class="alert alert-info"style="position:inherit;">Panel Pactar</div>
<div class="alert alert-info" style= "position:inherit;padding-top: 15px; padding-bottom: 55px;width:695px;">
<a href="#" id="show3">Click aqui</a>
        <div id="elementpactar" style="display: none;">
        <div id="close3"><a href="#" id="hide3">Volver Atras</a></div>
<form action="../admin/administracion.php" method="POST" class="form-inline"style="margin:0;float:left;" >

   <input type="text" class="form-control" name="identificacion_pacto" id="identificacion_pacto" placeholder="Identificacion a pactar"style="margin:0;float:left;width:190px;height:38px;"required>
   <input type="date" class="form-control" name="fecha_asignado" id="fecha_asignado" placeholder="Fecha" style="float:left;width:160px;height:38px;"required>
   
   <input type="time" class="form-control" name="horario_pac" id="horario_pac" style="float:left;width:120px;height:38px;"required>
   <input type="text" class="form-control" name="operador" id="operador" placeholder="Operador" style="float:left;width:120px;height:38px;"required>
     
     
     <select class="form-control"  id="lista1" name="lista1"  style="float:left; width:150px;height:38px;">
            <option value="0">Seleccione CP</option>
            <option value="1000">1000</option>
            <option value="1406">1406</option>
            <option value="1407">1407</option>
            <option value="1408">1408</option>
     </select>
     <select id="select2lista" name="select2lista" style="float:left; width:170px;height:38px;"required></select>

    <select class="form-control" name="estado_pac" id="estado_pac" style="float:left; width:150px;height:38px;">
            <option value="PACTADO">PACTADO</option>
            <option value="A-CONFIRMAR">A CONFIRMAR</option>
            <option value="RECUPERADO">RECUPERADO</option>
            <option value="RECHAZADA">RECHAZADA</option>
            <option value="NO-EXISTE-NUMERO">NO EXISTE NUMERO</option>
            <option value="NO-RESPONDE">NO RESPONDE</option>
            <option value="TIEMPO-ESPERA">TIEMPO LIMITE ESPERA</option>
            <option value="SE-MUDO">SE MUDO</option>
            <option value="YA-RETIRADO">YA RETIRADO</option>
            <option value="ZONA-PELIGROSA">ZONA PELIGROSA</option>
            <option value="NO-TUVO-EQUIPO">NO TUVO EQUIPO</option>
            <option value="N/R-TELEFONO">NO RESPONDE TELEFONO</option>
            <option value="N/TEL-EQUIVOCADO">TEL EQUIVOCADO</option>
            <option value="DESHABITADO">DESHABITADO</option>
            <option value="ROBADO">ROBADO</option>
            <option value="CONFIRMADO">CONFIRMADO</option>
            <option value="RELLAMAR">RELLAMAR</option>
            <option value="NO-COINCIDE-SERIE">NO COINCIDE SERIE</option>
            <option value="LLAMARA-A-BASE">LLAMARA A BASE</option>
            <option value="ENTREGARA-EN-BASE">ENTREGARA EN BASE</option>
     </select>
        <button type="submit" name="pactar" class="btn btn-info" style="float:left;width:150px;height:36px;">PACTAR</button>

     </form>

       
       </section>



<!--PANEL EQUIPOS (a) CONFIRMAR-->

         <section class="padre">
         <div class="alert alert-info" style="position:inherit;">Equipos a confirmar</div>
         <div class="alert alert-info" style="position:inherit;width:639px;">
         <a href="#" id="show1">Click aqui</a>
        <div id="elementidentificacion" style="display: none;">
        <div id="close1"><a href="#" id="hide1">Volver Atras</a></div>
      
        <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
      <div class="form-group mx-sm-3 mb-2">
       <label>Identificación</label>
         <input type="text" class="form-control"  name="identificacion_retiro" id="identificacion_retiro" placeholder="Identificación" style="width:120px;height:40px" >
         <button type="submit" name="buscar" class="btn btn-info">Consultar</button>
         
      </div>
      </form>
      
      <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
      <div class="form-group mx-sm-3 mb-2">
      <label>Nro Orden</label>
         <input type="text" class="form-control"  name="id_orden" id="id_orden" placeholder="Nro Orden" style="width:120px;height:40px" >
         <button type="submit" name="buscarorden" class="btn btn-info">Consultar</button>
       </div>
        </form>
      <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
      
      <label>Fecha</label>
         <input type="date" class="form-control"  name="horario_rec" id="horario_rec" placeholder="Fecha" style="width:160px;height:40px" >
         <button type="submit" name="fecha" class="btn btn-info">Consultar</button>

      </form>
      
      
</section>


        
    <!--reportes EQUIPOS -->

    
<section class="padre">
         <div class="alert alert-info" style="position:inherit;">Reporte equipos retirados <br> por recolector</div>
         <div class="alert alert-info" style="position:inherit;width:597px;">
         <a href="#" id="show5">Click aqui</a>
        <div id="elementpactar5" style="display: none;">
        <div id="close5"><a href="#" id="hide5">Volver Atras</a></div>
        <form action="../admin/administracion.php" method="POST" class="form-inline" style="float:left;" >
  <div class="form-group">
        <label>Recolector:</label>
        <input type="text" class="form-control" name="reco1" id="reco1" placeholder="Recolector" required style="width:110px;height:36px;">
        <label>Fecha :</label>
        <input type="date" class="form-control" name="fecha1" id="fecha1" required style="width:180px;height:36px;">
         <button type="submit" name="consultando" class="btn btn-info" style="float:left;width:80px;height:36px;">Buscar</button>
  </div>
         </form>
    </div>
       </section>

</section>

<?php
if(!isset($_SESSION['administracion'])){ 
  header('location:../login/loginadm.php');
} if(!isset($_SESSION['administracion'])){
  header('location:../login/loginadm.php');
}

 //BUSCAR POR SERIE   PANEL
 if(isset($_POST['serieaa']))
 {
   include ('../abrir_conexion_cliente.php');
   $seriea=$_POST['seriea'];
   $acentos = $conn->query("SET NAMES 'utf8'");    
   $query=mysqli_query($conn,"SELECT direccion,localidad,codigo_postal,id_orden,serie,identificacion,tarjeta,nombre_cliente,
   horario_rec,estado_rec,cable_hdmi,cable_av,fuente,control_1, id_recolector
    FROM express where serie='$seriea'");
   
 if($seriea=$query)
 {
   echo
   "
      
   <div class='table-responsive'>
       <table class='table table-striped table-hover'>
   <thead>
     <tr>
     <th scope='col'>Nro Orden</th>
     <th scope='col'>Recolector</th>
     
     <th scope='col'>Serie</th>
     <th scope='col'>Identificacion</th>
     <th scope='col'>Direccion</th>
     <th scope='col'>localidad</th>
     <th scope='col'>Codigo Postal</th>
     <th scope='col'>Tarjeta</th>
     <th scope='col'>Fecha</th>
     <th scope='col'>Estado</th>
     <th scope='col'>Cable HDMI</th>
     <th scope='col'>Cable AV</th>
     <th scope='col'>Fuente</th>
     <th scope='col'>Control</th>
      
   </tr>
   </thead>
 
       ";
 }
 while ($consulta = mysqli_fetch_array($query))
 
 {
 echo 
   "
   <tbody>
  <tr>
    <td>".$consulta['id_orden']."</td> 
    <td>".$consulta['id_recolector']."</td>
    <td>".$consulta['serie']."</td>          
    <td>".$consulta['identificacion']."</td> 
    <td>".$consulta['direccion']."</td> 
    <td>".$consulta['localidad']."</td> 
    <td>".$consulta['codigo_postal']."</td>  
    <td>".$consulta['tarjeta']."</td>  
    <td>".$consulta['horario_rec']."</td>
    <td>".$consulta['estado_rec']."</td>     
    <td>".$consulta['cable_hdmi']."</td>
    <td>".$consulta['cable_av']."</td>
    <td>".$consulta['fuente']."</td>
    <td>".$consulta['control_1']."</td>
    
   
 </tr>
 </tbody>
 
 </div>
 
 ";
 }
 
 include("../cerrar_conexion.php");
 }
//BUSCAR POR EMAIL  PANEL
 if(isset($_POST['emailaa']))
{
  include ('../abrir_conexion_cliente.php');
  $emaila=$_POST['emaila'];
  $acentos = $conn->query("SET NAMES 'utf8'");    
  $query=mysqli_query($conn,"SELECT e.id_orden,e.tarjeta,e.horario_rec,
  e.cable_hdmi,e.cable_av,e.fuente,e.control_1,e.id_recolector_2,e.equipo,e.serie,e.identificacion,e.nombre_cliente,e.direccion,e.localidad,e.codigo_postal,e.telefono1,s.email,e.estado_rec
  FROM express e INNER JOIN solocliente s ON e.identificacion=s.identificacion where s.email='$emaila'");
  
if($emaila=$query)
{
  echo
  "
     
  <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>Nro Orden</th>
    <th scope='col'>Recolector</th>
    <th scope='col'>Serie</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Direccion</th>
    <th scope='col'>Localidad</th>
    <th scope='col'>Codigo Postal</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>Estado</th>
    <th scope='col'>Cable HDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
     
  </tr>
  </thead>

      ";
}
while ($consulta = mysqli_fetch_array($query))

{
echo 
  "
  <tbody>
 <tr>
   <td>".$consulta['id_orden']."</td> 
   <td>".$consulta['id_recolector_2']."</td>
   <td>".$consulta['serie']."</td>  
   <td>".$consulta['email']."</td>         
   <td>".$consulta['identificacion']."</td>  
   <td>".$consulta['direccion']."</td> 
   <td>".$consulta['localidad']."</td> 
   <td>".$consulta['codigo_postal']."</td> 
   <td>".$consulta['tarjeta']."</td>  
   <td>".$consulta['horario_rec']."</td>
   <td>".$consulta['estado_rec']."</td>     
   <td>".$consulta['cable_hdmi']."</td>
   <td>".$consulta['cable_av']."</td>
   <td>".$consulta['fuente']."</td>
   <td>".$consulta['control_1']."</td>
   
  
</tr>
</tbody>

</div>

";
}

include("../cerrar_conexion.php");
}
//BUSCAR POR IDENTIFICACION confirmados PANEL
if(isset($_POST['identificacionaee']))
{
  include ('../abrir_conexion_cliente.php');
  $identificacionae=$_POST['identificacionae'];
  $acentos = $conn->query("SET NAMES 'utf8'");    
  $query=mysqli_query($conn,"SELECT direccion,localidad,codigo_postal,id_orden,serie,identificacion,tarjeta,nombre_cliente,
  horario_rec,estado_rec,cable_hdmi,cable_av,fuente,control_1, id_recolector
   FROM express where identificacion='$identificacionae'");
  
if($identificacionae=$query)
{
  echo
  "
     
  <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>Nro Orden</th>
    <th scope='col'>Recolector</th>
    
    <th scope='col'>Serie</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Direccion</th>
    <th scope='col'>Localidad</th>
    <th scope='col'>Codigo Postal</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>Estado</th>
    <th scope='col'>Cable HDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
     
  </tr>
  </thead>

      ";
}
while ($consulta = mysqli_fetch_array($query))

{
echo 
  "
  <tbody>
 <tr>
   <td>".$consulta['id_orden']."</td> 
   <td>".$consulta['id_recolector']."</td>
   
   <td>".$consulta['serie']."</td>          
   <td>".$consulta['identificacion']."</td> 
   <td>".$consulta['direccion']."</td>
   <td>".$consulta['localidad']."</td>
   <td>".$consulta['codigo_postal']."</td> 
   <td>".$consulta['tarjeta']."</td>  
   <td>".$consulta['horario_rec']."</td>
   <td>".$consulta['estado_rec']."</td>     
   <td>".$consulta['cable_hdmi']."</td>
   <td>".$consulta['cable_av']."</td>
   <td>".$consulta['fuente']."</td>
   <td>".$consulta['control_1']."</td>
   
  
</tr>
</tbody>

</div>

";
}

include("../cerrar_conexion.php");
}
//BUSCAR POR NRO ORDEN confirmados PANEL
if(isset($_POST['ordenaa']))
{
  include ('../abrir_conexion_cliente.php');
  $ordena=$_POST['ordena'];
  $acentos = $conn->query("SET NAMES 'utf8'");    
  $query=mysqli_query($conn,"SELECT id_orden,serie,identificacion,tarjeta,
  horario_rec,nombre_cliente,estado_rec,cable_hdmi,cable_av,fuente,control_1, id_recolector
   FROM express where id_orden='$ordena'");
  
if($ordena=$query)
{
  echo
  "
     
  <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>Nro Orden</th>
    <th scope='col'>Recolector</th>
    
    <th scope='col'>Serie</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>Estado</th>
    <th scope='col'>Cable HDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
     
  </tr>
  </thead>

      ";
}
while ($consulta = mysqli_fetch_array($query))

{
echo 
  "
  <tbody>
 <tr>
   <td>".$consulta['id_orden']."</td> 
   <td>".$consulta['id_recolector']."</td>
   
   <td>".$consulta['serie']."</td>          
   <td>".$consulta['identificacion']."</td>  
   <td>".$consulta['tarjeta']."</td>  
   <td>".$consulta['horario_rec']."</td>
   <td>".$consulta['estado_rec']."</td>     
   <td>".$consulta['cable_hdmi']."</td>
   <td>".$consulta['cable_av']."</td>
   <td>".$consulta['fuente']."</td>
   <td>".$consulta['control_1']."</td>
   
  
</tr>
</tbody>

</div>

";
}

include("../cerrar_conexion.php");
}
//BUSCAR POR HORARIO confirmados PANEL
if(isset($_POST['fechaconfirmadosaa']))
{
  include ('../abrir_conexion_cliente.php');
  $fechaconfirmadosa=$_POST['fechaconfirmadosa'];
  $acentos = $conn->query("SET NAMES 'utf8'");    
  $query=mysqli_query($conn,"SELECT direccion,localidad,codigo_postal,id_orden,serie,identificacion,tarjeta,
  horario_rec,nombre_cliente,estado_rec,cable_hdmi,cable_av,fuente,control_1,id_recolector
   FROM express where horario_rec LIKE '%$fechaconfirmadosa%'");
  
if($fechaconfirmadosa=$query)
{
  echo
  "
     
  <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>Nro Orden</th>
    <th scope='col'>Recolector</th>
     <th scope='col'>Serie</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Direccion</th>
    <th scope='col'>Localidad</th>
    <th scope='col'>Codigo Postal</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>Estado</th>
    <th scope='col'>Cable HDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
     
  </tr>
  </thead>

      ";
}
while ($consulta = mysqli_fetch_array($query))

{
echo 
  "
  <tbody>
 <tr>
   <td>".$consulta['id_orden']."</td> 
   <td>".$consulta['id_recolector']."</td>
   <td>".$consulta['serie']."</td>          
   <td>".$consulta['identificacion']."</td>
   <td>".$consulta['direccion']."</td> 
   <td>".$consulta['localidad']."</td> 
   <td>".$consulta['codigo_postal']."</td>   
   <td>".$consulta['tarjeta']."</td>  
   <td>".$consulta['horario_rec']."</td>
   <td>".$consulta['estado_rec']."</td>     
   <td>".$consulta['cable_hdmi']."</td>
   <td>".$consulta['cable_av']."</td>
   <td>".$consulta['fuente']."</td>
   <td>".$consulta['control_1']."</td>
   
  
</tr>
</tbody>

</div>

";
}

include("../cerrar_conexion.php");
}
if(!isset($_SESSION['administracion'])){ 
  header('location:../login/loginadm.php');
} if(!isset($_SESSION['administracion'])){
  header('location:../login/loginadm.php');
}

//PANEL PARA PACTAR
if(isset($_POST['pactar']))

{

include ('../abrir_conexion_cliente.php');
   $identificacion_pacto=$_POST['identificacion_pacto'];
   $fecha_asignado=$_POST['fecha_asignado'];
   $horario_pac=$_POST['horario_pac'];
   $operador=$_POST['operador'];
   $select2lista=$_POST['select2lista'];
   
   
   $estado_pac=$_POST['estado_pac'];
   $pactar=mysqli_query($conn,"UPDATE express SET fecha_asignado='$fecha_asignado', horario_pac='$horario_pac', operador='$operador', id_recolector='$select2lista', estado_pac='$estado_pac' where identificacion='$identificacion_pacto'");
   $mostrarpacto=mysqli_query($conn,"SELECT * FROM express WHERE identificacion='$identificacion_pacto'");
  if (mysqli_affected_rows($conn)>0){
  if($mostrarpacto=$mostrarpacto)
  {
    echo 
    
      "
      
      <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>ESTADO.PAC</th>
    <th scope='col'>ID.RECOLECTOR</th>
    <th scope='col'>OPERADOR</th>
    <th scope='col'>FECHA.PAC</th>
    <th scope='col'>HORARIO.PAC</th>
    <th scope='col'>IDENTIFICACIÓN</th>
    <th scope='col'>SERIE</th>
    <th scope='col'>TARJETA</th>
    <th scope='col'>EQUIPO</th>
    <th scope='col'>EMPRESA</th>
    <th scope='col'>NOMBRE</th>
    <th scope='col'>DIRECCIÓN</th>
    <th scope='col'>CP</th>
    <th scope='col'>LOCALIDAD</th>

  </tr>
  </thead>

      ";
  }
  while ($consulta = mysqli_fetch_array($mostrarpacto))
  {
    echo 
    "
    
    </tbody>
    <tr>
      <td>".$consulta['estado_pac']."</td> 
      <td>".$consulta['id_recolector']."</td>
      <td>".$consulta['operador']."</td>
      <td>".$consulta['fecha_asignado']."</td>         
      <td>".$consulta['horario_pac']."</td>  
      <td>".$consulta['identificacion']."</td>
      <td>".$consulta['serie']."</td>  
      <td>".$consulta['tarjeta']."</td>
      <td>".$consulta['equipo']."</td>     
      <td>".$consulta['empresa']."</td>
      <td>".$consulta['nombre_cliente']."</td>
      <td>".$consulta['direccion']."</td>
      <td>".$consulta['codigo_postal']."</td>
      <td>".$consulta['localidad']."</td>
   </tr>
   </tbody>

   
   </div>
   ";
  }
 }else {
    echo  "<div class='alert alert-info'>¡Reporte no enviado! El sistema no permite espacios vacios o los datos son incorrectos. ¡Intente nuevamente!</div>";
 }

   
include("../cerrar_conexion.php");
 
}

//BUSCAR POR IDENTIFICACION a confirmar
if(isset($_POST['buscar']))
{
  include ('../abrir_conexion_cliente.php');
  $identificacion_retiro=$_POST['identificacion_retiro'];
  $acentos = $conn->query("SET NAMES 'utf8'");    
  $query=mysqli_query($conn,"SELECT id_orden,serie,identificacion,tarjeta,
  horario_rec,estado_rec,cable_hdmi,cable_av,fuente,control_1, id_recolector_2,horario_rec
   FROM autorizar where identificacion='$identificacion_retiro'");
  
if($identificacion_retiro=$query)
{
  echo
  "
     
  <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>Nro Orden</th>
    <th scope='col'>Recolector</th>
    
    <th scope='col'>Serie</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>Estado</th>
    <th scope='col'>Cable HDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
     
  </tr>
  </thead>

      ";
}
while ($consulta = mysqli_fetch_array($query))

{
echo 
  "
  <tbody>
 <tr>
   <td>".$consulta['id_orden']."</td> 
   <td>".$consulta['id_recolector_2']."</td>
   
   <td>".$consulta['serie']."</td>          
   <td>".$consulta['identificacion']."</td>  
   <td>".$consulta['tarjeta']."</td>  
   <td>".$consulta['horario_rec']."</td>
   <td>".$consulta['estado_rec']."</td>     
   <td>".$consulta['cable_hdmi']."</td>
   <td>".$consulta['cable_av']."</td>
   <td>".$consulta['fuente']."</td>
   <td>".$consulta['control_1']."</td>
   
  
</tr>
</tbody>

</div>

";
}

include("../cerrar_conexion.php");
}
//BUSCAR POR NRO ORDEN a confirmar
if(isset($_POST['buscarorden']))
{
  include ('../abrir_conexion_cliente.php');
  $id_orden=$_POST['id_orden'];
  $acentos = $conn->query("SET NAMES 'utf8'");    
  $query=mysqli_query($conn,"SELECT id_orden,serie,identificacion,tarjeta,
  horario_rec,estado_rec,cable_hdmi,cable_av,fuente,control_1, id_recolector_2,horario_rec
   FROM autorizar where id_orden='$id_orden'");
  
if($identificacion_retiro=$query)
{
  echo
  "
     
  <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>Nro Orden</th>
    <th scope='col'>Recolector</th>
    
    <th scope='col'>Serie</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>Estado</th>
    <th scope='col'>Cable HDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
     
  </tr>
  </thead>

      ";
}
while ($consulta = mysqli_fetch_array($query))

{
echo 
  "
  <tbody>
 <tr>
   <td>".$consulta['id_orden']."</td> 
   <td>".$consulta['id_recolector_2']."</td>
   
   <td>".$consulta['serie']."</td>          
   <td>".$consulta['identificacion']."</td>  
   <td>".$consulta['tarjeta']."</td>  
   <td>".$consulta['horario_rec']."</td>
   <td>".$consulta['estado_rec']."</td>     
   <td>".$consulta['cable_hdmi']."</td>
   <td>".$consulta['cable_av']."</td>
   <td>".$consulta['fuente']."</td>
   <td>".$consulta['control_1']."</td>
   
  
</tr>
</tbody>

</div>

";
}

include("../cerrar_conexion.php");
}
//BUSCAR POR HORARIO a confirmar
if(isset($_POST['horario_rec']))
{
  include ('../abrir_conexion_cliente.php');
  $horario_rec=$_POST['horario_rec'];
  
  $acentos = $conn->query("SET NAMES 'utf8'");    
  $query=mysqli_query($conn,"SELECT id_orden,serie,identificacion,tarjeta,
  horario_rec,estado_rec,cable_hdmi,cable_av,fuente,control_1, id_recolector_2,horario_rec
   FROM autorizar where horario_rec like '%$horario_rec%'");
  
if($horario_rec=$query)
{
  echo
  "
     
  <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>Nro Orden</th>
    <th scope='col'>Recolector</th>
    
    <th scope='col'>Serie</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>Estado</th>
    <th scope='col'>Cable HDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
    
     
  </tr>
  </thead>

      ";
}
while ($consulta = mysqli_fetch_array($query))

{
echo 
  "
  <tbody>
 <tr>
   <td>".$consulta['id_orden']."</td> 
   <td>".$consulta['id_recolector_2']."</td>
   
   <td>".$consulta['serie']."</td>          
   <td>".$consulta['identificacion']."</td>  
   <td>".$consulta['tarjeta']."</td>  
   <td>".$consulta['horario_rec']."</td>
   <td>".$consulta['estado_rec']."</td>     
   <td>".$consulta['cable_hdmi']."</td>
   <td>".$consulta['cable_av']."</td>
   <td>".$consulta['fuente']."</td>
   <td>".$consulta['control_1']."</td>
   
   
  
</tr>
</tbody>

</div>

";
}

include("../cerrar_conexion.php");
}
//reportes
if(isset($_POST['consultando']))
{
  include('../abrir_conexion_cliente.php');

     $fecha1=$_POST['fecha1'];
     $reco1=$_POST['reco1'];
     $acentos = $conn->query("SET NAMES 'utf8'");
       $sql=mysqli_query($conn,"SELECT DISTINCT estado_rec,
             id_recolector_2,
             horario_rec,
             identificacion,
             serie,
             tarjeta,
             equipo,
             nombre_cliente,
             cable_hdmi,
             cable_av,
             fuente,
             control_1
from express WHERE id_recolector_2='$reco1' AND horario_rec
LIKE '%$fecha1%'  
UNION SELECT estado_rec,
             id_recolector_2,
             horario_rec,
             identificacion,
             serie,
             tarjeta,
             equipo,
             nombre_cliente,
             cable_hdmi,
             cable_av,
             fuente,
             control_1
FROM autorizar
WHERE id_recolector_2='$reco1' 
AND horario_rec LIKE '%$fecha1%'");

       if($reco1 and $fecha1)
       {
      echo 
      "
     
      <div class='table-responsive'>
      <table class='table table-striped table-hover'>
<thead>
    <tr>
    
    <th scope='col'>Estado</th>
    <th scope='col'>Recolector</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Nombre Cliente</th>
    <th scope='col'>Serie</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Equipo</th>
    <th scope='col'>Cable HHDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
    

  </tr>
</thead>
      ";
    }
    while($consulta = mysqli_fetch_array($sql)) 
    {
      echo 
      "
         <tbody>
        <tr>
          <td>".$consulta['estado_rec']."</td>  
          <td>".$consulta['id_recolector_2']."</td>
          <td>".$consulta['horario_rec']."</td>
          <td>".$consulta['identificacion']."</td>
          <td>".$consulta['nombre_cliente']."</td>
          <td>".$consulta['serie']."</td>
          <td>".$consulta['tarjeta']."</td>
          <td>".$consulta['equipo']."</td>
          <td>".$consulta['cable_hdmi']."</td>
          <td>".$consulta['cable_av']."</td>
          <td>".$consulta['fuente']."</td>
          <td>".$consulta['control_1']."</td>
       </tr>
       </tbody>
       </div>

 ";
    }

include("../cerrar_conexion.php");
 }
?>

  <script src="../js/menu.js"></script> 
  
  </body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#lista1').val(0);
		recargarLista();

		$('#lista1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"../datos.php",
			data:"codigorecolectores=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>
<script type="text/javascript">
$(document).ready(function(){
  $("#hide1").click(function(){
    $("#elementidentificacion").hide();
  });
  $("#show1").click(function(){
    $("#elementidentificacion").show();
  });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
  $("#hide3").click(function(){
    $("#elementpactar").hide();
  });
  $("#show3").click(function(){
    $("#elementpactar").show();
  });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $("#hide4").click(function(){
    $("#elementpactar4").hide();
  });
  $("#show4").click(function(){
    $("#elementpactar4").show();
  });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $("#hide5").click(function(){
    $("#elementpactar5").hide();
  });
  $("#show5").click(function(){
    $("#elementpactar5").show();
  });
});
</script>




