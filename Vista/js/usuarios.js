$(document).ready(function(){ 
	MostrarUsuarios(); 
	$("#frmusu_id").attr('readonly',true); 
}); 

	$("#RegistrarUsuario").click(function(){
			
			var frmid1 = $("#frmusu_id").val(),
			frmrol1 = $("#frmusu_rol").val(),
			frmidper1 = $("#frmusu_idper").val(),
			frmcla1 = $("#frmusu_cla").val(),
			frmestado1 = $("#frmusu_estado").val();

		$.post("index.php?accion=RegistrarUsuario",{
			frmusu_id:frmid1,
			frmusu_rol:frmrol1,
			frmusu_idper:frmidper1,
			frmusu_cla:frmcla1,
			frmusu_estado:frmestado1
			
		},function(datos){
		
			$("#frmRegistrarUsuario").modal('hide');	
			MostrarUsuarios();
		});

		$("#frmusu_id").val("");
		$("#frmusu_rol").val("");
		$("#frmusu_idper").val("");
		$("#frmusu_cla").val("");
		$("#frmusu_estado").val("");
		
	});	

	function MostrarUsuarios(){
		var table = $('#MostrarUsuarios').DataTable({
		destroy:true,
		responsive: true,
		"bDeferRender":true,
		"sPaginationType":"full_numbers",
		"ajax":{
			"url":"VO/MostrarUsuarios.php",
			"type":"POST"
		},
		"columns":[
			{"data":"Id"},
			{"data":"Rol"},
			{"data":"IdPersona"},
            {"data":"Estado"},
			{"data":"Editar"},
			{"data":"Eliminar"}
		]
	});
	new $.fn.dataTable.FixedHeader( table );
	}

	function EditarUsuario(id){
		$.post("index.php?accion=EditarUsuario",{id:id},function(data){

			var data = JSON.parse(data);
			console.log(data);
			$("#frmusu_id1").val(data.Id);
			$("#frmusu_rol1").val(data.Rol);
			$("#frmusu_idper1").val(data.IdPersona);
			$("#frmusu_estado1").val(data.Estado);
		});

	}

	$("#ActualizarUsuario").click(function(){

		var
		
			frmid1 = $("#frmusu_id1").val(),
			frmrol1 = $("#frmusu_rol1").val(),
			frmidper1 = $("#frmusu_idper1").val(),
			frmestado1 = $("#frmusu_estado1").val();

		$.post("index.php?accion=ActualizarUsuario",{
			frmusu_id1:frmid1,
			frmusu_rol1:frmrol1,
			frmusu_idper1:frmidper1,
			frmusu_estado1:frmestado1
		},function(datos){

			$("#frmEditarUsuario").modal('hide');	
			MostrarUsuarios();				
		});	
	});

	function EliminarUsuario(id){
		
		$.post("index.php?accion=EliminarUsuario",{id:id},function(datos){
			MostrarUsuarios();
		});	
	}


	