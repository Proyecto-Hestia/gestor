$(document).ready(function(){ 
	MostrarIngrexpro(); 
	$("#frmip_id").attr('readonly',true); 
}); 
 
    $("#RegistrarIngrexpro").click(function(){
        var frmip_idpro1 = $("#frmip_idpro").val(),
            frmip_iding1 = $("#frmip_iding").val(),
			frmip_cant1 = $("#frmip_cant").val(),
			frmip_med1 = $("#frmip_med").val();
			
        $.post("index.php?accion=RegistrarIngrexpro",{
            frmip_idpro:frmip_idpro1,
            frmip_iding:frmip_iding1,
			frmip_cant:frmip_cant1,
			frmip_med:frmip_med1},function(datos){

            $("#frmRegistrarIngrexpro").modal('hide');	
            MostrarIngrexpro();
        });

        $("#frmip_idpro").val("");
        $("#frmip_iding").val("");
		$("#frmip_cant").val("");
		$("#frmip_med").val("");
    });	

    function MostrarIngrexpro(){
			var table = $('#MostrarIngrexpro').DataTable({
			destroy:true,
        	responsive: true,
        	"bDeferRender":true,
        	"sPaginationType":"full_numbers",
        	"ajax":{
        		"url":"VO/MostrarIngrexPro.php",
        		"type":"POST"
        	},
        	"columns":[
        		{"data":"ID"},
        		{"data":"id_pro"},
				{"data":"id_ing"},
				{"data":"Stock"},
				{"data":"Medida"},
        		{"data":"Editar"},
        		{"data":"Eliminar"}
        	]
    	});
        new $.fn.dataTable.FixedHeader( table );
	}
	
	function EditarIngrexpro(id){
		$.post("index.php?accion=EditarIngrexpro",{id:id},function(data){
			var data = JSON.parse(data);
			console.log(data);
			$("#frmip_id1").val(data.ID);
			$("#frmip_idpro1").val(data.id_pro);
			$("#frmip_iding1").val(data.id_ing);
			$("#frmip_stock1").val(data.Stock);
			$("#frmip_med1").val(data.Medida);
		});
	}

	$("#ActualizarIngrexpro").click(function(){
		var frmip_id1 = $("#frmip_id1").val(),
			frmip_idpro1 = $("#frmip_idpro1").val(),
			frmip_iding1 = $("#frmip_iding1").val(),
			frmip_stock1 = $("#frmip_stock1").val(),
			frmip_med1 = $("#frmip_med1").val();
		$.post("index.php?accion=ActualizarIngrexpro",{
			frmip_id1:frmip_id1,
			frmip_idpro1:frmip_idpro1,
			frmip_iding1:frmip_iding1,
			frmip_stock1:frmip_stock1,
			frmip_med1:frmip_med1
		},function(datos){
			$("#frmEditarIngrexpro").modal('hide');	
			MostrarIngrexpro();				
		});	
	});
	function EliminarIngrexpro(id){
		$.post("index.php?accion=EliminarIngrexpro",{id:id},function(datos){
			MostrarIngrexpro();
		});

	}