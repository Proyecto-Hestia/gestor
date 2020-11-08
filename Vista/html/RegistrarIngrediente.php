<!-- ..................................MODAL REGISTRAR PERSONA................................--> 
<div class="modal fade" id="frmRegistrarIngredientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
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
						<div class="md-form form-sm"> 
							<input type="text" id="frming_nom" class="form-control" placeholder="Nombre"> 
						</div>
						</div> 
						<div class="md-form form-sm">
						<p id="r6" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<select class="browser-default custom-select" id="frming_estado" class="form-control">
							<option value="ACTIVO">ACTIVO</option>
							<option value="INACTIVO">INACTIVO</option>
						</select>
					</div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div>
					<div class="col-md-4">
                    <div class="md-form form-sm"> 
						<div class="md-form form-sm"> 
                            <input type="text" id="frming_val" class="form-control" placeholder="Valor"> 
						</div> 
						</div> 
						<div class="md-form form-sm">
						<p id="r6" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frming_stock" class="form-control" placeholder="Stock"> 
						</div>
					</div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="RegistrarIngrediente">Registrar 
					<i class="fa fa-send ml-1"></i>
					</button>
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>

<?php //$filas = $result->fetch(); ?>

<!-- .....................................MODAL EDITAR PERSONA.......................................--> 

<div class="modal fade" id="frmEditarIngrediente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
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
							<input type="text" disabled="true" id="frming_id1" class="form-control"> 
						</div> 
					</div>
					<div class="col-md-2"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frming_nom1" class="form-control"> 
						</div>
					</div> 
					<div class="col-md-1"></div> 
				</div>
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
                            <select class="browser-default custom-select" id="frming_estado1" class="form-control">
								<option value="ACTIVO">ACTIVO</option>
								<option value="INACTIVO">INACTIVO</option>
							</select> 
						</div> 
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frming_stock1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
                            <input type="text" id="frming_val1" class="form-control"> 
						</div> 
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="ActualizarIngrediente"> Actualizar
					<i class="fa fa-send ml-1"></i>
					</button>
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>
