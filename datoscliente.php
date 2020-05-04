<?php
//include 'conexion.php';
SESSION_START();

if(!isset($_SESSION['logged_user'])){ 
    header('location:login/logincliente.php');
  } if(!isset($_SESSION['logged_user'])){
    header('location:login/logincliente.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Panel Recolector</title>

<link rel="stylesheet" href="css/alertorden.css">
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
  
  <script text="text/javascript" src="js/jquery.js"></script>
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
        <li class="menu__item"><a class="menu__link select" href="cerrar_sesion.php">FINALIZAR</a></li>
      </ul>
    </nav>
</div>
</header>
<script>

$(function(){
    $('#ordengenerar').on('click', function(e){
        e.preventDefault();

        var id_recolector = $('#id_recolector').val();
        
        

        $.ajax({
            type:"POST",
            url: "datoscliente.php",
            data: {'id_recolector':id_recolector
                   'fecha_orden':fecha_orden},
                beforeSend: function(){
                    $('#imagenorden').show();
                    $('#mensajesorden').html('Procesando datos...');

                },
                success:function(respuesta){
                  
                    $('#imagenorden').hide();
                    if(respuesta==1){
                        $('#mensajesorden').html('Enviado correctamente');
                    }
                    else{
                        $('#mensajesorden').html('Verificar ID Recolector');
                    }
            }    
        })
    })
})
</script>
         
         
         

    <div class="container" style="position:inherit;">
        <div class="table-wrapper" style="position:inherit;">
            <div class="table-title" style="position:inherit;">
                <div class="row" style="position:inherit;">
                    <div class="col-sm-6" style="position:inherit;">
					<b><h2>Panel Recolector</b></h2>
          
					</div>
          <br>
          
                    <section>
                    
                    <div class="form-group mx-sm-3 mb-2">
						<a href="#addProductModal" class="btn btn-success" data-toggle="modal" style="width:150px;height:40px;"><i class="material-icons" >&#xE147;</i> <span>Agregar Equipo</span></a>
					</div>
          
     <div class="form-group mx-sm-3 mb-2">
         <form  action="" method="POST">
         
         <input type="text" class="form-control"  name="id_recolector" placeholder="ID recolector" style="float:right;width:150px;height:40px;" required>
        <input type="hidden" class="form-control" name="fecha_orden"style="float:right;width:150px;height:40px;" value="<?php date_default_timezone_set('America/Argentina/Buenos_Aires'); echo date("Y-m-d H:i:s");?>" readonly>
        <button type="submit" name="ordengenerar" id="ordengenerar" class="btn btn-primary mb-2" style="width:150px;height:40px;">Generar Orden</button>
        <div id="alertorden"><img id="imagenorden" src="img/cargando.gif" alt=""><span id="mensajesorden"></span></div>
      
    </form>
    </div> 
</section>
 <?php
    
    if(isset($_POST['ordengenerar']))
    {
      include('conexion.php');
         
      sleep(2);
          $fecha_orden=$_POST['fecha_orden'];
          $id_recolector=$_POST['id_recolector'];

          $sql1="SELECT id_recolector,nombre_recolector from
           recolectores where id_recolector='$id_recolector'";
          $resultado = $con->query($sql1);
            $row = mysqli_num_rows($resultado);


             if($row==0){
              echo "No existe ID";
             }

             
             else {
              $sql = "INSERT INTO ordenes (id_recolector,
              fecha_orden)
              VALUES ('$id_recolector','$fecha_orden')";
              $result = mysqli_query($con,$sql);
              
              $_SESSION["id_recolector"] = $_POST;
              //$_SESSION[$_POST["id_recolector"]];
              
             }

             if($row==0){
              
             }
             else {
           $mostrar="SELECT id
           from ordenes
           order by id desc
           limit 1";
           $resultados=mysqli_query($con,$mostrar);
           $fila=mysqli_fetch_row($resultados);
          $_SESSION['id_order'] = $fila['0'];
   
          echo "

    <table class='table table-responsive'>
    <thead>
  <tr>
  <th scope='col'>Nro.Orden</th>

</tr>
   <tr>  
        <td>".$fila['0']."</td>
 
       </tr>
       </tbody>
</table>
    ";

  }
}
?>
					
                </div>
            </div>
            
			<div class='col-sm-4 pull-right' style="position:inherit;">
      
				<div id="custom-search-input" style="position:inherit;">
                            <div class="input-group col-md-12" style="position:inherit;">
                            
                                <input type="text" class="form-control" placeholder="Buscar"  id="q" style="position:inherit;"/>
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="button" onclick="load(1);">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>    
                            </div>    
                </div>
                <br>
                <form action="enviarcliente.php" method="POST" >
	<button class="btn btn-primary mb-2" style="margin:;float:left;">Enviar cupon a cliente</button>
	</form>
  
			</div>
      
      

			<div class='clearfix'></div>
			<hr>
			<div id="loader"></div><!-- Carga de datos ajax aqui -->
			<div id="resultados"></div><!-- Carga de datos ajax aqui -->
			<div class='outer_div'></div><!-- Carga de datos ajax aqui -->
            
            
            
            </div>	
        </div>
    </div>
	<!-- Edit Modal HTML -->
	<?php include("html/modal_add.php");?>
	<!-- Edit Modal HTML -->
	<?php include("html/modal_edit.php");?>
	<!-- Delete Modal HTML -->
	<?php include("html/modal_delete.php");?>
	<script src="js/script.js"></script>
	<script src="js/menu.js"></script>

</body>
</html>                          		                            