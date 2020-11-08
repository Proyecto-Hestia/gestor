$(document).ready(function () {
    MostrarTurnos();
    $("#frm_id_tur").attr('readonly', true);
});

$("#RegistrarTurno").click(function () {
    var frm_nom_tur1 = $("#frm_nom_tur").val(),
        frm_fechor_ini_tur1 = $("#frm_fechor_ini_tur").val(),
        frm_fechor_fin_tur1 = $("#frm_fechor_fin_tur").val();

    $.post("index.php?accion=RegistrarTurno", {
        frm_nom_tur: frm_nom_tur1,
        frm_fechor_ini_tur: frm_fechor_ini_tur1,
        frm_fechor_fin_tur: frm_fechor_fin_tur1
    }, function (datos) {

        $("#frmRegistrarTurno").modal('hide');
        MostrarTurnos();
    });

    $("#frm_nom_tur").val("");
    $("#frm_fechor_ini_tur").val("");
    $("#frm_fechor_fin_tur").val("");
});	

function MostrarTurnos() {
    var table = $('#MostrarTurno').DataTable({
        destroy: true,
        responsive: true,
        "bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "VO/MostrarTurnos.php",
            "type": "POST"
        },
        "columns": [
            { "data": "Codigo" },
            { "data": "Nombre" },
            { "data": "Hora_inicio" },
            { "data": "Hora_fin" },
            { "data": "Acciones" }
        ]
    });
    new $.fn.dataTable.FixedHeader(table);
}

function EditarTurno(id) {
    $.post("index.php?accion=EditarTurno", { id: id }, function (data) {

        var data = JSON.parse(data);
        console.log(data);
        $("#frm_id_tur1").val(data.ID);
        $("#frm_nom_tur1").val(data.NOMBRE);
        $("#frm_fechor_ini_tur1").val(data.HORA_INICIO);
        $("#frm_fechor_fin_tur1").val(data.HORA_FIN);
    });

}

$("#ActualizarTurno").click(function () {

    var frm_id_tur1 = $("#frm_id_tur1").val(),
        frm_nom_tur1 = $("#frm_nom_tur1").val(),
        frm_fechor_ini_tur1 = $("#frm_fechor_ini_tur1").val();
        frm_fechor_fin_tur1 = $("#frm_fechor_fin_tur1").val();

    $.post("index.php?accion=ActualizarTurno", {
        frm_id_tur1: frm_id_tur1,
        frm_nom_tur1: frm_nom_tur1,
        frm_fechor_ini_tur1: frm_fechor_ini_tur1,
        frm_fechor_fin_tur1: frm_fechor_fin_tur1
    }, function (datos) {

        $("#frmEditarTurno").modal('hide');
        MostrarTurnos();
    });
});

function EliminarTurno(id) {
    $.post("index.php?accion=EliminarTurno", { id: id }, function (datos) {
        MostrarTurnos();
    });

}