$(document).ready(function(){ 
	MostrarIngredientes(); 
	$("#frming_id").attr('readonly',true); 
}); 
 
    $("#RegistrarIngrediente").click(function(){
        var frming_nom1 = $("#frming_nom").val(),
            frming_estado1 = $("#frming_estado").val(),
            frming_stock1 = $("#frming_stock").val(),
            frming_val1 = $("#frming_val").val();
        $.post("index.php?accion=RegistrarIngredientes",{
            frming_nom:frming_nom1,
            frming_estado:frming_estado1,
            frming_stock:frming_stock1,
            frming_val:frming_val1},function(datos){

            $("#frmRegistrarIngredientes").modal('hide');	
            MostrarIngredientes();
        });

        $("#frming_nom").val("");
        $("#frming_estado").val("");
        $("#frming_stock").val("");
        $("#frming_val").val("");
    });	

    function MostrarIngredientes(){
			var table = $('#MostrarIngredientes').DataTable({
			destroy:true,
        	responsive: true,
        	"bDeferRender":true,
        	"sPaginationType":"full_numbers",
        	"ajax":{
        		"url":"VO/MostrarIngredientes.php",
        		"type":"POST"
        	},
        	"columns":[
        		{"data":"ID"},
        		{"data":"Nom"},
				{"data":"Estado"},
				{"data":"Stock"},
				{"data":"Val"},
        		{"data":"Editar"},
        		{"data":"Eliminar"}
        	]
    	});
        new $.fn.dataTable.FixedHeader( table );
	}
	
	function EditarIngrediente(id){
		$.post("index.php?accion=EditarIngrediente",{id:id},function(data){
			var data = JSON.parse(data);
			console.log(data);
			$("#frming_id1").val(data.ID);
			$("#frming_nom1").val(data.Nom);
			$("#frming_estado1").val(data.Estado);
			$("#frming_stock1").val(data.Stock);
			$("#frming_val1").val(data.Val);
		});
	}

	$("#ActualizarIngrediente").click(function(){
		var frming_id1 = $("#frming_id1").val(),
			frming_nom1 = $("#frming_nom1").val(),
			frming_estado1 = $("#frming_estado1").val(),
			frming_stock1 = $("#frming_stock1").val(),
			frming_val1 = $("#frming_val1").val();

		$.post("index.php?accion=ActualizarIngrediente",{
			frming_id1:frming_id1,
			frming_nom1:frming_nom1,
			frming_estado1:frming_estado1,
			frming_stock1:frming_stock1,
			frming_val1:frming_val1
		},function(datos){
			$("#frmEditarIngrediente").modal('hide');	
			MostrarIngredientes();
		});	
	});
	function EliminarIngrediente(id){
		$.post("index.php?accion=EliminarIngrediente",{id:id},function(datos){
			MostrarIngredientes();
		});

	}