<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel Recolector</title>
	<meta charset="UTF-8">
	<meta charset="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
   <!--fuente para iconos-->
   
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
  <link rel="stylesheet" href="../css/abscenter.css">
  
  <?php
  	if (isset($_SESSION['Msg_error'])) { $Msg_error=$_SESSION['Msg_error']; unset($_SESSION['Msg_error']); }else{ $Msg_error=null;}
  ?>
	
</head>
<body>
<?php 
	if(isset($_SESSION['logged_user'])) { 
		header('location:../datoscliente.php');
		exit();
	} else { 
?>
	<div class="text-center">
    	<div class="container">
			<div class="abs-center">
				<form class="form-horizontal" action="../login/validarcliente.php" method="POST">
					<section class="padre">
						<div class="card">
							<div class="card-body">
								<div class="form-group">
									<h1>Recolector</h1>
									<input type="text" class="form-control" name="id_recolector" id="id_recolector" placeholder="Nro Recolector" required>
									<small class="form-text text-muted">Ingrese Usuario</small>
									<?php if (strlen($Msg_error) > 5): ?>
										<label class="alert alert-danger"><?= $Msg_error ?></label>
									<?php endif ?>
		  						</div>
								<div class="form-group">
			  						<button type="submit" name="ingresarClient" class="btn btn-info">Ingresar</button>
								</div>
                			</div>
              			</div>
              		</section>
				</form>
			</div>
		</div>
	</div>
<?php 
	}
?>
</body>
</html>