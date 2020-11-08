<!-- ..................................MODAL REGISTRAR INGREXPRO................................--> 
<div class="modal fade" id="frmRegistrarIngrexpro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
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
							<select name="" id="frmip_idpro" class="browser-default custom-select" class="form-control" onkeyup="nose();habilitarip();">
								<option value="">--Producto--</option>
								<?php foreach ($result2 as $filas): ?>
									<option value="<?php echo $filas['id_pro']; ?>"><?php echo $filas['nom_pro']; ?></option>
								?>
								<?php endforeach; ?>
							</select>
						</div> 
					</div>
				</div>
				<br>
				<div class="row no-gutters"> 
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="text-center mt-1-half"> 
                        	<select name="" id="frmip_iding" class="browser-default custom-select" class="form-control" onkeyup="nose2();habilitarip();">
								<option value="">--Ingrediente--</option>
								<?php foreach ($result as $filas): ?>
									<option value="<?php echo $filas['id_ing']; ?>"><?php echo $filas['nom_ing']; ?></option>
								?>
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
						<div class="md-form form-sm"> 
							<input type="text" id="frmip_cant" class="form-control" placeholder="Cantidad">
						</div> 
					</div>
					<div class="col-md-4"></div>
				</div>
				<br>
				<div class="row no-gutters"> 
					<div class="col-md-4"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<select name="" id="frmip_med" class="form-control">
								<option value="">--Unidad de Medida--</option>
								<option value="gr">Gramos</option>
								<option value="ml">Mililitros</option>
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
							<button class="btn btn-cyan mb-2" id="RegistrarIngrexpro">Registrar 
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


<!-- .....................................MODAL EDITAR INGREXPRO.......................................--> 
<div class="modal fade" id="frmEditarIngrexpro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
							<input type="text" disabled="true" id="frmip_id1" class="form-control"> 
						</div> 
					</div> 
					<div class="col-md-3"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="md-form form-sm"> 
							<select id="frmip_idpro1" class="browser-default custom-select" class="form-control" onkeyup="nose();habilitarip();">
								<option value="">--Producto--</option>
								<?php foreach ($result4 as $filas): ?>
									<option value="<?php echo $filas['id_pro']; ?>"><?php echo $filas['nom_pro']; ?></option>
								?>
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
						<div class="text-center mt-1-half"> 
							<select id="frmip_iding1" class="browser-default custom-select" class="form-control" onkeyup="nose2();habilitarip();">
								<option value="">--Ingrediente--</option>
								<?php foreach ($result3 as $filas): ?>
									<option value="<?php echo $filas['id_ing']; ?>"><?php echo $filas['nom_ing']; ?></option>
								?>
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
						<div class="md-form form-sm"> 
							<input type="text" id="frmip_stock1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
				<br>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="md-form form-sm"> 
							<select name="" id="frmip_med1" class="form-control">
								<option value="gr">Gramos</option>
								<option value="ml">Mililitros</option>
							</select>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
				<br>
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="ActualizarIngrexpro">Actualizar 
						<i class="fa fa-send ml-1"></i>
					</button> 
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>
