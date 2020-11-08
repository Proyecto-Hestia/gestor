$(document).ready(function(){ 
	MostrarMesas(); 
	$("#frmtab_id").attr('readonly',true); 
}); 
 
	

    $("#RegistrarMesa").click(function(){
		var frmzona_id1 = $("#frmzona_id").val(),
			frmcap_tab1 = $("#frmcap_tab").val(),
            frmestado1 = $("#frmestado").val();

        $.post("index.php?accion=RegistrarMesa",{
			frmzona_id:frmzona_id1,
            frmcap_tab:frmcap_tab1,
            frmestado:frmestado1
        },function(datos){

            $("#frmRegistrarMesa").modal('hide');	
            MostrarMesas();
        });
		$("#frmzona_id").val("");
        $("#frmcap_tab").val("");
        $("#frmestado").val("");
    });	

    function MostrarMesas(){
			var table = $('#MostrarMesas').DataTable({
			destroy:true,
        	responsive: true,
        	"bDeferRender":true,
        	"sPaginationType":"full_numbers",
        	"ajax":{
        		"url":"VO/MostrarMesas.php",
        		"type":"POST"
        	},
        	"columns":[
        		{"data":"ID"},
        		{"data":"Zona"},
        		{"data":"Capacidad"},
                {"data":"Ubicacion"},
				{"data":"Estado"},
				{"data":"Qr"},
        		{"data":"Editar"},
        		{"data":"Eliminar"}
        	]
    	});
        new $.fn.dataTable.FixedHeader( table );
	}
	
	
	function EditarMesa(id){
		$.post("index.php?accion=EditarMesa",{id:id},function(data){

			var data = JSON.parse(data);
			console.log(data);
            $("#frmtab_id1").val(data.ID);
			$("#frmzona_id1").val(data.ZONA);
            $("#frmcap_tab1").val(data.CAPACIDAD);
            $("#frmestado1").val(data.ESTADO);
		});

	}

	function EditarQr(id){
		$.post("index.php?accion=EditarMesa",{id:id},function(data){

			var data = JSON.parse(data);
			console.log(data);
            $("#frmtab_id1").val(data.ID);
			$("#frmzona_id1").val(data.ZONA);
            $("#frmcap_tab1").val(data.CAPACIDAD);
            $("#frmestado1").val(data.ESTADO);
		});

	}

	$("#ActualizarMesa").click(function(){

		var frmtab_id1 = $("#frmtab_id1").val(),
			frmzona_id1 = $("#frmzona_id1").val(),
            frmcap_tab1 = $("#frmcap_tab1").val(),
            frmestado1 = $("#frmestado1").val();

		$.post("index.php?accion=ActualizarMesa",{
			frmtab_id1:frmtab_id1,
			frmzona_id1:frmzona_id1,
            frmcap_tab1:frmcap_tab1,
            frmestado1:frmestado1
        },function(datos){

			$("#frmEditarMesa").modal('hide');	
			MostrarMesas();				
		});	
	});

	function EliminarMesa(id){
		$.post("index.php?accion=EliminarMesa",{id:id},function(datos){
			MostrarMesas();
		});

	}

	function Qr(id){
		$.post("index.php?accion=Qr",{id:id},function(data){
			MostrarMesas();	
		});
		document.getElementById('Qr').innerHTML = "";
		setTimeout(function(){ var contenedorQr = document.getElementById('Qr');
		contenedorQr.innerHTML='<img src="Vista/img/qr/qrproducto'+id+'.png"/>'; }, 500);
		
	}