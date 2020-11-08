$(document).ready(function () {
    MostrarProgramacionMesas();
    $("#frm_id_prog_mes").attr('readonly', true);
});

$("#RegistrarProgramacionMesa").click(function () { 
    var frm_mesa_id1 = $("#frm_mesa_id").val(),
        frm_mese_id1 = $("#frm_mese_id").val();
        frm_tur_id1 = $("#frm_tur_id").val();
        frm_fecha_ini1 = $("#frm_fecha_ini").val();
        frm_fecha_fin1 = $("#frm_fecha_fin").val();
        frm_est1 = $("#frm_est").val();

    $.post("index.php?accion=RegistrarProgramacionMesa", {
        frm_mesa_id: frm_mesa_id1,
        frm_mese_id: frm_mese_id1,
        frm_tur_id: frm_tur_id1,
        frm_fecha_ini: frm_fecha_ini1,
        frm_fecha_fin: frm_fecha_fin1,
        frm_est: frm_est1,
    }, function (datos) {

        $("#frmRegistrarProgramacionMesa").modal('hide');
        MostrarProgramacionMesas();
    });
    
    $("#frm_mesa_id").val("");
    $("#frm_mese_id").val("");
    $("#frm_tur_id").val("");
    $("#frm_fecha_ini").val("");
    $("#frm_fecha_fin").val("");
    $("#frm_est").val("");
});

function MostrarProgramacionMesas() {
    var table = $('#MostrarProgramacion').DataTable({
        destroy: true,
        responsive: true,
        "bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "VO/MostrarProgramacionMesas.php",
            "type": "POST"
        },
        "columns": [
            { "data": "Codigo" },
            { "data": "Codigo_mesa" },
            { "data": "Codigo_mesero" },
            { "data": "Codigo_turno" },
            { "data": "Fecha_ini" },
            { "data": "Fecha_fin" },
            { "data": "Estado" },
            { "data": "Acciones" }
        ]
    });
    new $.fn.dataTable.FixedHeader(table);
}

function EditarProgramacionMesa(id) {
    $.post("index.php?accion=EditarProgramacionMesa", { id: id }, function (data) {

        var data = JSON.parse(data);
        console.log(data);
        $("#frm_id_prog_mes1").val(data.ID);
        $("#frm_mesaId1").val(data.MESA);
        $("#frm_meseId1").val(data.MESERO);
        $("#frm_turId1").val(data.TURNO);
        $("#frm_fecha_ini1").val(data.FECHA_INI);
        $("#frm_fecha_fin1").val(data.FECHA_FIN);
        $("#frm_esta1").val(data.ESTADO);
    });

}

$("#ActualizarProgramacionMesa").click(function () {

    var frm_id_prog_mes1 = $("#frm_id_prog_mes1").val(),
        frm_mesa_id1 = $("#frm_mesaId1").val(),
        frm_mese_id1 = $("#frm_meseId1").val(),
        frm_tur_id1 = $("#frm_turId1").val(),
        frm_fecha_ini1 = $("#frm_fecha_ini1").val(),
        frm_fecha_fin1 = $("#frm_fecha_fin1").val(),
        frm_est1 = $("#frm_esta1").val();


    $.post("index.php?accion=ActualizarProgramacionMesa", {
        frm_id_prog_mes1: frm_id_prog_mes1,
        frm_mesa_id1: frm_mesa_id1,
        frm_mese_id1: frm_mese_id1,
        frm_tur_id1: frm_tur_id1,
        frm_fecha_ini1: frm_fecha_ini1,
        frm_fecha_fin1: frm_fecha_fin1,
        frm_est1: frm_est1
    }, function (datos) {

            $("#frmEditarProgramacionMesa").modal('hide');
        MostrarProgramacionMesas();
    });
});

function EliminarProgramacionMesa(id) {
    $.post("index.php?accion=EliminarProgramacionMesa", { id: id }, function (datos) {
        MostrarProgramacionMesas();
    });
}