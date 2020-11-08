$(document).ready(function(){ 
	MostrarClientes(); 
	$("#frmcli_id").attr('readonly',true); 
}); 

	$("#RegistrarCliente").click(function(){
			
			var frmid1 = $("#frmcli_id").val(),
			frmnom1 = $("#frmcli_nom").val(),
			frmape1 = $("#frmcli_ape").val(),
			frmtel1 = $("#frmcli_tel").val(),
			frmcel1 = $("#frmcli_cel").val(),
			frmmail1 = $("#frmcli_mail").val(),
			frmdir1 = $("#frmcli_dir").val(),
			frmest1 = $("#frmcli_est").val();

		$.post("index.php?accion=RegistrarCliente",{
			frmcli_id:frmid1,
			frmcli_nom:frmnom1,
			frmcli_ape:frmape1,
			frmcli_tel:frmtel1,
			frmcli_cel:frmcel1,
			frmcli_mail:frmmail1,
			frmcli_dir:frmdir1,
			frmcli_est:frmest1
			
		},function(datos){
		
			$("#frmRegistrarCliente").modal('hide');	
			MostrarClientes();
		});

		$("#frmcli_id").val("");
		$("#frmcli_nom").val("");
		$("#frmcli_ape").val("");
		$("#frmcli_tel").val("");
		$("#frmcli_cel").val("");
		$("#frmcli_mail").val("");
		$("#frmcli_dir").val("");
		$("#frmcli_est").val("");
		
	});	

	function MostrarClientes(){
		var table = $('#MostrarClientes').DataTable({
		destroy:true,
		responsive: true,
		"bDeferRender":true,
		"sPaginationType":"full_numbers",
		"ajax":{
			"url":"VO/MostrarCliente.php",
			"type":"POST"
		},
		"columns":[
			{"data":"id"},
			{"data":"nombre"},
			{"data":"apellido"},
			{"data":"telefono"},
            {"data":"celular"},
            {"data":"correo"},
            {"data":"direccion"},
            {"data":"estado"},
			{"data":"Editar"},
			{"data":"Eliminar"}
		]
	});
	new $.fn.dataTable.FixedHeader( table );
	}

	function EditarCliente(id){
		$.post("index.php?accion=EditarCliente",{id:id},function(data){

			var data = JSON.parse(data);
			;
			$("#frmcli_id1").val(data.id);
			$("#frmcli_nom1").val(data.nombre);
			$("#frmcli_ape1").val(data.apellido);
			$("#frmcli_tel1").val(data.telefono);
			$("#frmcli_cel1").val(data.celular);
			$("#frmcli_mail1").val(data.correo);
			$("#frmcli_dir1").val(data.direccion);
			$("#frmcli_est1").val(data.estado);
		});

	}

	$("#ActualizarCliente").click(function(){

		var
		
			frmid1 = $("#frmcli_id1").val(),
			frmnom1 = $("#frmcli_nom1").val(),
			frmape1 = $("#frmcli_ape1").val(),
			frmtel1 = $("#frmcli_tel1").val(),
			frmcel1 = $("#frmcli_cel1").val();
			frmmail1 = $("#frmcli_mail1").val();
			frmdir1 = $("#frmcli_dir1").val();
			frmest1 = $("#frmcli_est1").val();

		$.post("index.php?accion=ActualizarCliente",{
			frmcli_id1:frmid1,
			frmcli_nom1:frmnom1,
			frmcli_ape1:frmape1,
			frmcli_tel1:frmtel1,
			frmcli_cel1:frmcel1,
			frmcli_mail1:frmmail1,
			frmcli_dir1:frmdir1,
			frmcli_est1:frmest1
		},function(datos){

			$("#frmEditarCliente").modal('hide');	
			MostrarClientes();				
		});	
	});

	function EliminarCliente(id){
		
		$.post("index.php?accion=EliminarCliente",{id:id},function(datos){
			MostrarClientes();
		});	
	}


	