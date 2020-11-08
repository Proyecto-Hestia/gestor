<!-- ..................................MODAL REGISTRAR USUARIO................................--> 
<div class="modal fade" id="frmRegistrarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
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
			<div class="modal-body mb-0"> 
				<div class="row no-gutters">
				<div class="col-md-2"></div>
				<div class="col-md-2"></div>  
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmusu_id" onkeyup="verificaridusu();habilitarusu();" class="form-control" placeholder="ID"> 
						</div> 
						<div class="md-form form-sm">
							<p id="u1" style="color:red"></p>
						</div>
					</div>
				</div>
				<br>
				<div class="row no-gutters">
				<div class="col-md-2"></div> 
				<div class="col-md-2"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<select class="browser-default custom-select" id="frmusu_rol" onkeyup="verificarrolusu();habilitarusu();" class="form-control">
								<option value="">---ROL---</option>
								<?php foreach ($result2 as $filas):?>
       								<option value="<?php echo $filas['id_rol']; ?>"><?php echo $filas['des_rol']; ?></option>
								<?php endforeach; ?>
							</select>
						</div> 
						<div class="md-form form-sm">
							<p id="u3" style="color:red"></p>
						</div>
					</div>
				</div>
				<br>
				<div class="row no-gutters">
				<div class="col-md-2"></div> 
				<div class="col-md-2"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<select class="browser-default custom-select" id="frmusu_idper" onkeyup="verificarperusu();habilitarusu();" class="form-control">
								<option value="">---PERSONAL---</option>
								<?php foreach ($result3 as $filas):?>
       								<option value="<?php echo $filas['id_per']; ?>"><?php echo $filas['nom_per'] . " " . $filas['ape_per']; ?></option>
								<?php endforeach; ?>
							</select>
						</div> 
						<div class="md-form form-sm">
							<p id="u4" style="color:red"></p>
						</div>
					</div>
				</div>
				<br>
				<div class="row no-gutters">
				<div class="col-md-2"></div>
				<div class="col-md-2"></div>  
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="password" id="frmusu_cla" class="form-control" placeholder="Contraseña" onkeyup="verificarclausu();habilitarusu();"> 
						</div> 
						<div class="md-form form-sm">
							<p id="u2" style="color:red"></p>
						</div>
					</div>
				</div>
				<br>
				<div class="row no-gutters">
				<div class="col-md-2"></div>
				<div class="col-md-2"></div>  
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="password" id="frmusu_cla2" required class="form-control" placeholder="Confirmar Contraseña" onkeyup="verificarclausu2();habilitarusu();"> 
						</div> 
						<div class="md-form form-sm">
							<p id="uc2" style="color:red"></p>
						</div>
					</div>
				</div>
				<br>
				<div class="row no-gutters">
				<div class="col-md-2"></div>
				<div class="col-md-2"></div>  
					<div class="col-md-4">
						<select class="browser-default custom-select" id="frmusu_estado"  class="form-control">
								<option value="ACTIVO">ACTIVO</option>
								<option value="INACTIVO">INACTIVO</option>
						</select>
					</div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" disabled="true" id="RegistrarUsuario">Registrar 
					<i class="fa fa-send ml-1"></i>
					</button>
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>

<?php //$filas = $result->fetch(); ?>

<!-- .....................................MODAL EDITAR USUARIO.......................................--> 

<div class="modal fade" id="frmEditarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
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
				<div class="col-md-2"></div>
				<div class="col-md-2"></div>  
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmusu_id1" disabled="true" required class="form-control" placeholder="Identificacion"> 
						</div> 
						<div class="md-form form-sm">
							<p id="r1" style="color:red"></p>
						</div>
					</div>
				</div>
			<div class="row no-gutters">
				<div class="col-md-2"></div> 
				<div class="col-md-2"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<select class="browser-default custom-select" id="frmusu_rol1" required class="form-control">
								<?php foreach ($result4 as $filas):?>
       								<option value="<?php echo $filas['id_rol']; ?>"><?php echo $filas['des_rol']; ?></option>
								<?php endforeach; ?>
							</select>
						</div> 
					</div>
				</div>
				<br>
				<div class="row no-gutters">
				<div class="col-md-2"></div> 
				<div class="col-md-2"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<select class="browser-default custom-select" id="frmusu_idper1" class="form-control">
								<?php foreach ($result5 as $filas):?>
       								<option value="<?php echo $filas['id_per']; ?>"><?php echo $filas['nom_per'] . " " . $filas['ape_per']; ?></option>
								<?php endforeach; ?>
							</select>
						</div> 
					</div>
				</div>
				<br>
				<div class="row no-gutters">
				<div class="col-md-2"></div>
				<div class="col-md-2"></div>  
					<div class="col-md-4">
						<select class="browser-default custom-select" id="frmusu_estado1" class="form-control">
								<option value="ACTIVO">ACTIVO</option>
								<option value="INACTIVO">INACTIVO</option>
						</select>
					</div>
					<div class="col-md-1"></div>
				</div>
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="ActualizarUsuario"> Actualizar
					<i class="fa fa-send ml-1"></i>
					</button>
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>
