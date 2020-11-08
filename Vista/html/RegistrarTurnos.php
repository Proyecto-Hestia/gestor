<!-- ..................................MODAL REGISTRAR TURNO................................--> 
<div class="modal fade" id="frmRegistrarTurno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
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
							<input type="text" id="frm_nom_tur" onkeyup="verTurno();habilitarTurno();" class="form-control" placeholder="Nombre"> 
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
						<center><label>Hora</label> </center>
					</div>
					<div class="col-md-4"></div>
				</div>
				<div class="row no-gutters"> 
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frm_fechor_ini_tur" class="form-control" placeholder="Hora Inicio"> 
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
						<div class="text-center mt-1-half"> 
							<input type="text" id="frm_fechor_fin_tur" class="form-control" placeholder="Hora Fin"> 
						</div> 
					</div>
					<div class="col-md-4"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="text-center mt-1-half"> 
							<button class="btn btn-cyan mb-2" id="RegistrarTurno">Registrar 
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
<div class="modal fade" id="frmEditarTurno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
							<input type="text" disabled="true" id="frm_id_tur1" class="form-control"> 
						</div> 
					</div> 
					<div class="col-md-3"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frm_nom_tur1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
				<br>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<input type="text" id="frm_fechor_ini_tur1" class="form-control"> 
					</div>
					<div class="col-md-3"></div>
				</div>
				<br>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<input type="text" id="frm_fechor_fin_tur1" class="form-control">
					</div>
					<div class="col-md-3"></div>
				</div>
				<br>
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="ActualizarTurno">Actualizar 
						<i class="fa fa-send ml-1"></i>
					</button> 
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>
