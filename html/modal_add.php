<?php require_once('./conexion.php');?>
<link rel="stylesheet" href="./css/alert.css">
<script text="text/javascript" src="./js/jquery.js"></script>

<script>

$(function(){
    $('#enviar').on('click', function(e){
        e.preventDefault();

        var id_recolector = $('#id_recolector').val();
        var serie = $('#serie').val();
        var identificacion = $('#identificacion').val();
        var id_orden = $('#id_orden').val();
        var estado = $('#estado').val();
        var horario_rec = $('#horario_rec').val();
        var cable_hdmi = $('#cable_hdmi').val();
        var cable_av = $('#cable_av').val();
        var fuente = $('#fuente').val();
        var control_1 = $('#control_1').val();
        var adicional = $('#adicional').val();

        $.ajax({
            type:"POST",
            url: "./javascriptvalidacion/insertar.php",
            data: {'id_recolector': id_recolector, 
                'serie':serie, 
                'identificacion':identificacion,
                   'id_orden':id_orden,
                   'estado':estado,
                   'horario_rec':horario_rec,
                   'cable_hdmi':cable_hdmi,
                   'cable_av':cable_av,
                   'fuente':fuente,
                   'control_1':control_1,
                   'adicional':adicional},
                beforeSend: function(){
                    $('#imagen').show();
                    $('#mensajes').html('Procesando datos...');

                },
                success:function(respuesta){
                    $('#imagen').hide();
                    if(respuesta==1){
                        $('#mensajes').html('Enviado correctamente');
                    }
                    else{
                        $('#mensajes').html('Verificar Identificación Cliente');
                    }
            }    
        })
    })
})
</script>

<div id="addProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" name="add_product" id="add_product">>
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Equipo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	
					<div class="form-group">
							<label>ID Recolector</label>
							<input type="text" name="id_recolector"  id="id_recolector" class="form-control" required>
							
						</div>
									
						<div class="form-group">
							<label>Serie</label>
							<input type="text" name="serie"  id="serie" class="form-control" required>
							
						</div>
						<div class="form-group">
							<label>identificacion CTE</label>
							<input type="text" name="identificacion" id="identificacion" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label>Nro Orden</label>
							<input type="text" name="id_orden"  id="id_orden" class="form-control" required>
							
						</div>
						<div class="form-group">
						  <label>Estado</label>
					        <select type="text" name="estado" id="estado" class="form-control" required>
	                        <option value="A-CONFIRMAR">A CONFIRMAR</option>
						  </select>					
						</div>
						<div class="form-group">
							<label>Fecha</label>
							<input class="form-control" type="text" name="horario_rec" id="horario_rec" value="<?php date_default_timezone_set('America/Argentina/Buenos_Aires'); echo date("Y-m-d H:i:s");?>" readonly>
						</div>
						<div class="form-group">
							<label>Cable HDMI</label>
							<select  name="cable_hdmi" id="cable_hdmi" class="form-control" required>
	                        <option value="Si">Si</option>
							<option value="No">No</option>
							</select>					
						</div>	
						<div class="form-group">
							<label>Cable av</label>
							<select  name="cable_av" id="cable_av" class="form-control" required>
							<option value="Si">Si</option>
							<option value="No">No</option>
							</select>
						</div>	
						<div class="form-group">
							<label>fuente</label>
							<select  name="fuente" id="fuente" class="form-control" required>
							<option value="Si">Si</option>
							<option value="No">No</option>
							</select>
						</div>					
					
						<div class="form-group">
							<label>control_1</label>
							<select  name="control_1" id="control_1" class="form-control" required>
							<option value="Si">Si</option>
							<option value="No">No</option>
							</select>
						</div>
						<div class="form-group">
							<label>Sugerencias/Opcional</label>
							<textarea type="text" name="adicional" id="adicional" class="form-control">
							</textarea>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" id="enviar" class="btn btn-success" value="Guardar datos">
						<div id="alert"><img id="imagen" src="img/cargando.gif" alt=""><span id="mensajes"></span></div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
	function check(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros y letras
    patron = /[A-Za-z0-9 ]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>