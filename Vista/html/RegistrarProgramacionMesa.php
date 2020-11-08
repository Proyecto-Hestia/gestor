<!-- ..................................MODAL REGISTRAR TURNO................................--> 
<div class="modal fade" id="frmRegistrarProgramacionMesa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
	<div class="modal-dialog modal-lg cascading-modal" role="document"> 
		<!--Content--> 
		<div class="modal-content"> 
			<!--Header--> 
			<div class="modal-header cyan white-text"> 
				<h4 class="title">
					<i class="fa fa-pencil"></i> Registro
				</h4> 
				<button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close"> 
					<span aria-hidden="true">&times;</span> 
				</button> 
			</div> 
			<!--Body--> 
			<div class="modal-body mb-0" id="container"> 
				<div class="row no-gutters"> 
					<div class="col-md-4"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm">
							<select name="browser-default custom-select" id="frm_mesa_id" required class="form-control">
								<option value="">---MESA---</option>
								<?php foreach ($result1 as $filas):?>
									<option value="<?php echo $filas['id_zona']; ?>"><?php echo $filas['id_zona']."-".$filas['nom_zona'] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="md-form form-sm">
						<p id="m1" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
                <br>
				<div class="row no-gutters"> 
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="md-form form-sm">
							<select name="browser-default custom-select" id="frm_mese_id" required class="form-control">
								<option value="">---MESERO---</option>
								<?php foreach ($result3 as $filas):?>
									<option value="<?php echo $filas['id_usu']; ?>"><?php echo $filas['nom_per']." ".$filas['ape_per'] ?></option>
								<?php endforeach; ?>
							</select> 
						</div>
						<div class="md-form form-sm">
						<p id="m1" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-4"></div>
                </div> 
                <br>
				<div class="row no-gutters"> 
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="md-form form-sm">
							<select name="browser-default custom-select" id="frm_tur_id" required class="form-control">
								<option value="">---TURNO---</option>
								<?php foreach ($result5 as $filas):?>
									<option value="<?php echo $filas['id_tur']; ?>"><?php echo $filas['nom_tur'] ?></option>
								<?php endforeach; ?>
							</select> 
						</div> 
					</div>
					<div class="col-md-4"></div>
				</div> 
                <br>
                <div class="row no-gutters"> 
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="text-center mt-1-half"> 
							<input type="text" id="frm_fecha_ini" class="form-control" placeholder="Fecha inicio"> 
						</div> 
					</div>
					<div class="col-md-4"></div>
				</div> 
                <br>
                <div class="row no-gutters"> 
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="text-center mt-1-half"> 
							<input type="text" id="frm_fecha_fin" class="form-control" placeholder="Fecha fin"> 
						</div> 
					</div>
					<div class="col-md-4"></div>
				</div> 
                <br>
                <div class="row no-gutters"> 
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="text-center mt-1-half"> 
							<input type="text" id="frm_est" class="form-control" placeholder="Estado"> 
						</div> 
					</div>
					<div class="col-md-4"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="text-center mt-1-half"> 
							<button class="btn btn-cyan mb-2" id="RegistrarProgramacionMesa">Registrar 
							<i class="fa fa-send ml-1"></i>
							</button>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>


<!-- .....................................MODAL EDITAR TURNO.......................................--> 
<div class="modal fade" id="frmEditarProgramacionMesa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg cascading-modal" role="document"> 
		<!--Content--> 
		<div class="modal-content"> 
			<!--Header--> 
			<div class="modal-header cyan white-text"> 
				<h4 class="title">
					<i class="fa fa-pencil"></i> Actualizar
				</h4> 
				<button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close"> 
					<span aria-hidden="true">&times;</span> 
				</button> 
			</div> 
			<!--Body--> 
			<div class="modal-body mb-0"> 
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="md-form form-sm"> 
							<input type="text" disabled="true" id="frm_id_prog_mes1" class="form-control"> 
						</div> 
					</div> 
					<div class="col-md-3"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="md-form form-sm">
							<select name="browser-default custom-select" id="frm_mesaId1" required class="form-control">
								<option value="">---MESA---</option>
								<?php foreach ($result2 as $filas):?>
									<option value="<?php echo $filas['id_zona']; ?>"><?php echo $filas['id_zona']."-".$filas['nom_zona'] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
				<br>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<select name="browser-default custom-select" id="frm_meseId1" required class="form-control">
							<option value="">---MESERO---</option>
								<?php foreach ($result4 as $filas):?>
									<option value="<?php echo $filas['id_usu']; ?>"><?php echo $filas['nom_per']." ".$filas['ape_per'] ?></option>
								<?php endforeach; ?>
						</select>
					</div>
					<div class="col-md-3"></div>
                </div>
                <br>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<select name="browser-default custom-select" id="frm_turId1" required class="form-control">
							<option value="">---TURNO---</option>
								<?php foreach ($result6 as $filas):?>
									<option value="<?php echo $filas['id_tur']; ?>"><?php echo $filas['nom_tur'] ?></option>
								<?php endforeach; ?>
						</select>
					</div>
					<div class="col-md-3"></div>
				</div>
                <br>
                <div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<input type="text" id="frm_fecha_ini1" class="form-control">
					</div>
					<div class="col-md-3"></div>
				</div>
                <br>
                <div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<input type="text" id="frm_fecha_fin1" class="form-control">
					</div>
					<div class="col-md-3"></div>
				</div>
                <br>
                <div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<input type="text" id="frm_esta1" class="form-control">
					</div>
					<div class="col-md-3"></div>
				</div>
				<br>
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="ActualizarProgramacionMesa">Actualizar 
						<i class="fa fa-send ml-1"></i>
					</button> 
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>