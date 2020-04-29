
</script>
<div id="editProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="edit_product" id="edit_product">
					<div class="modal-header">						
						<h4 class="modal-title">Recibir equipo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Serie</label>
							<input type="text" name="edit_serie"  id="edit_serie" class="form-control" required readonly>
							<input type="hidden" name="edit_id" id="edit_id" >
						</div>
						<div class="form-group">
							<label>Nro Orden</label>
							<input type="text" name="edit_id_orden" id="edit_id_orden" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Fecha</label>
							<input class="form-control" type="text" name="horario_rec" id="horario_rec" value="<?php date_default_timezone_set('America/Argentina/Buenos_Aires'); echo date("Y-m-d H:i:s");?>" readonly>
						</div>
						<div class="form-group">
							<label>ID Recolector</label>
							<input class="form-control" type="text" name="id_recolector_password" id="id_recolector_password" required>
						</div>
						<div class="form-group">
							<label>Ingrese nuevamente ID Recolector</label>
							<input class="form-control" type="text" name="id_recolector_2" id="id_recolector_2" required>
						</div>
						<div class="form-group">
							<label>Estado</label>
							<select class="form-control" name="edit_estado_rec" id="edit_estado_rec" required>
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
						</div>
						<div class="form-group">
							<label>Cable HDMI</label>
							<input type="text" name="edit_cable_hdmi" id="edit_cable_hdmi" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Cable AV</label>
							<input type="text" name="edit_cable_av" id="edit_cable_av" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label>Fuente</label>
							<input type="text" name="edit_fuente" id="edit_fuente" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Control</label>
							<input type="text" name="edit_control_1" id="edit_control_1" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Confirmar">
					</div>
				</form>
			</div>
		</div>
		