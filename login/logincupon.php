<!DOCTYPE html>
<html>
<head>
	<title>Panel Cliente</title>
	<meta charset="UTF-8">
	<meta charset="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="../css/estiloslog.css">
	
</head>
<body>
<?php 
	SESSION_START();
	if(isset($_SESSION['cupon'])) { 
		header('location:../descargacupon.php');
	} else { ?>
		<form action="../login/validarcupon.php" method="POST">
				<h2>Cliente</h2>
				<input type='text' placeholder='&#128272; Nro Cliente' name='identificacion'>
				
				<input type='submit' value='Ingresar'>
		</form>
<?php 
	}
?>
</body>
</html>