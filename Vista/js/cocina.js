$(document).ready(function(){ 
	MostrarPedidos(); 
	$("#frm_id_ped").attr('readonly',true); 
}); 
 
    function MostrarPedidos(){
			var table = $('#MostrarPedido').DataTable({
			destroy:true,
        	responsive: true,
        	"bDeferRender":true,
        	"sPaginationType":"full_numbers",
        	"ajax":{
        		"url":"VO/MostrarPedidos.php",
        		"type":"POST"
        	},
        	"columns":[
				{"data":"Detalle"},
        		{"data":"Estado"},
        		{"data":"Id_ped"},
        		{"data":"Id_mes"},
                {"data":"Fechor_ini"},
        		{"data":"Fechor_fin"}
        	]
    	});
        new $.fn.dataTable.FixedHeader( table );
	}

	function MostrarDetallePedidos(id_ped){
		var id = id_ped;
		var table = $('#MostrarDetallePedido').DataTable({
		destroy:true,
		responsive: true,
		"bDeferRender":true,
		"sPaginationType":"full_numbers",
		"ajax":{
			"url":"VO/MostrarDetallePedidos.php",
			"data": {id:id},	
			"type":"POST"
		},
		"columns":[
			{"data":"Nom_pro"},
			{"data":"Comentarios"},
			{"data":"Sin_ingredientes"},
			{"data":"Cantidad"},
			{"data":"Estado"},
			{"data":"Acciones"}
		]
	});
	MostrarPedidos();
	new $.fn.dataTable.FixedHeader( table );

}

	function Preparacion(id,id_ped){
		$.post("index.php?accion=preparacion",{id:id},function(datos){
			MostrarDetallePedidos(id_ped);
		});

	}

	function Despachado(id,id_ped){
		$.post("index.php?accion=despachado",{id:id},function(datos){
			MostrarDetallePedidos(id_ped);
		});

	}
	
	function Cancelado(id, id_ped) {
		$.post("index.php?accion=cancelado", { id: id }, function (datos) {
			MostrarDetallePedidos(id_ped);
		});

	}