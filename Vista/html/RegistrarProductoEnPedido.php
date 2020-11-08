<!-- ..................................MODAL REGISTRAR CATEGORIA................................--> 
<div class="modal fade" id="frmRegistrarProductoEnPedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
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
                <!--ID-->
                <div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<center><label>ID del pedido</label> </center>
					</div>
					<div class="col-md-4"></div>
				</div> 
				<div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm">
							<input type="text" disabled id="frmid_ped" class="form-control">
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
                <br>
                <!--PRODUCTO-->
                <div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<center><label>Producto</label> </center>
					</div>
					<div class="col-md-4"></div>
				</div> 
				<div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm">
							<input type="text" id="frmpro_id" class="form-control">
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
                <br>
                <!--COMENTARIOS-->
                <div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<center><label>Comentarios</label> </center>
					</div>
					<div class="col-md-4"></div>
				</div> 
				<div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm">
							<textarea class="form-control" id="frmcom_det_ped" cols="30" rows="10"></textarea>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
				<br>
				<!--SIN INGREDIENTES-->
                <div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<center><label>Sin ingredientes</label> </center>
					</div>
					<div class="col-md-4"></div>
				</div> 
				<div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm">
							<input type="text" id="frmsin_ing" class="form-control">
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
                <br>
                <!--CANTIDAD-->
                <div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<center><label>Cantidad</label> </center>
					</div>
					<div class="col-md-4"></div>
				</div> 
				<div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm">
							<input type="text" id="frmcant" class="form-control">
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
				<br>
				<div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="text-center mt-1-half"> 
							<button class="btn btn-cyan mb-2" id="RegistrarDetallePedido">Registrar 
							<i class="fa fa-check ml-1"></i>
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


<!-- .....................................MODAL EDITAR CLIENTE.......................................--> 
<div class="modal fade" id="frmEditarProductoEnPedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                <!--ID-->
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="md-form form-sm"> 
							<input type="text" disabled="true" id="frmid_ped1" class="form-control"> 
						</div> 
					</div> 
					<div class="col-md-3"></div>
				</div> 
                <br>
                <div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="md-form form-sm"> 
							<input type="text" disabled="true" id="frmid_det_ped1" class="form-control"> 
						</div> 
					</div> 
					<div class="col-md-3"></div>
				</div> 
				<br>
                <!--COMENTARIOS-->
                <div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<center><label for="frmestado">Comentarios</label> </center>
					</div>
					<div class="col-md-3"></div>
				</div>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="md-form form-sm">
							<input type="text" id="frmcom_ped1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
				<br>
                <!--SIN INGREDIENTES-->
                <div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<center><label for="frmestado">Sin ingredientes</label> </center>
					</div>
					<div class="col-md-3"></div>
				</div>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmsin_ing_ped1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
				<br>
                <!--CANTIDAD-->
				<div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<center><label for="frmestado">Cantidad</label> </center>
					</div>
					<div class="col-md-4"></div>
				</div>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="text-center mt-1-half"> 
							<input type="text" id="frmcant_ped1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-3"></div>
				</div> 
				<br>
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="ActualizarDetallePedido">Actualizar 
						<i class="fa fa-check ml-1"></i>
					</button> 
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>
