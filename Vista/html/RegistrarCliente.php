<!-- ..................................MODAL REGISTRAR CLIENTE................................--> 
<div class="modal fade" id="frmRegistrarCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
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
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmcli_id" onkeyup="verificarclid();habilitarclien();"  class="form-control" placeholder="Identificacion"> 
						</div> 
						<div class="md-form form-sm">
						<p id="cl1" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmcli_nom" onkeyup="verificarclinom();habilitarclien();"  class="form-control" placeholder="Nombre"> 
						</div>
						<div class="md-form form-sm">
						<p id="cl2" style="color:red"></p>
						</div>
					</div>
				</div><br>
				<div class="row no-gutters">
					<div class="col-md-1"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmcli_ape" onkeyup="verificarcliape();habilitarclien();"  class="form-control" placeholder="Apellido">   
						</div> 
						<div class="md-form form-sm">
						<p id="cl3" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmcli_tel" onkeyup="verificarclitel();habilitarclien();"  class="form-control" placeholder="Telefono"> 
						</div>
						<div class="md-form form-sm">
						<p id="cl4" style="color:red"></p>
						</div>
					</div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div>
					<div class="col-md-4"> 
                    	<div class="md-form form-sm"> 
							<input type="text" id="frmcli_cel" onkeyup="verificarclicel();habilitarclien();"  class="form-control" placeholder="Celular"> 
						</div>
						<div class="md-form form-sm">
						<p id="cl5" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmcli_mail" onkeyup="verificarclicorr();habilitarclien();"  class="form-control" placeholder="Correo"> 
						</div>
						<div class="md-form form-sm">
						<p id="cl6" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmcli_dir" onkeyup="verificarclidire();habilitarclien();" class="form-control" placeholder="Direccion"> 
						</div>
						<div class="md-form form-sm">
						<p id="cl7" style="color:red"></p>
						</div>
					</div> 
					<div class="col-md-2"></div> 
					<div class="col-md-4">
						<select class="browser-default custom-select" id="frmcli_est" class="form-control">
								<option value="ACTIVO">ACTIVO</option>
								<option value="INACTIVO">INACTIVO</option>
						</select>
						<div class="md-form form-sm">
						<p id="cl8" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-1"></div> 
				</div> 
				<br>
			
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" disabled="true" id="RegistrarCliente">Registrar 
					<i class="fa fa-send ml-1"></i>
					</button>
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>

<?php //$filas = $result->fetch(); ?>

<!-- .....................................MODAL EDITAR CLIENTE.......................................--> 

<div class="modal fade" id="frmEditarCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
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
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmcli_id1" disabled="true"  class="form-control" placeholder="Identificacion"> 
						</div> 
						<div class="md-form form-sm">
						<p id="r1" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmcli_nom1"  class="form-control" placeholder="Nombre"> 
						</div>
						<div class="md-form form-sm">
						<p id="r2" style="color:red"></p>
						</div>
					</div>
				</div><br>
				<div class="row no-gutters">
					<div class="col-md-1"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmcli_ape1"  class="form-control" placeholder="Apellido">   
						</div> 
						<div class="md-form form-sm">
						<p id="r6" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmcli_tel1"  class="form-control" placeholder="Telefono"> 
						</div>
					</div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div>
					<div class="col-md-4"> 
                    <div class="md-form form-sm"> 
							<input type="text" id="frmcli_cel1"  class="form-control" placeholder="Celular"> 
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmcli_mail1" class="form-control" placeholder="Correo"> 
						</div>
						<div class="md-form form-sm">
						<p id="r7" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmcli_dir1"  class="form-control" placeholder="Direccion"> 
						</div>
						<div class="md-form form-sm">
						<p id="r4" style="color:red"></p>
						</div>
					</div> 
					<div class="col-md-2"></div> 
					<div class="col-md-4">
						<select class="browser-default custom-select" id="frmcli_est1" class="form-control">
								<option value="ACTIVO">ACTIVO</option>
								<option value="INACTIVO">INACTIVO</option>
						</select>
						<div class="md-form form-sm">
						<p id="r9" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-1"></div> 
				</div>
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="ActualizarCliente"> Actualizar
					<i class="fa fa-send ml-1"></i>
					</button>
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>
