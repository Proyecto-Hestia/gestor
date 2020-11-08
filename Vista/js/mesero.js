$(document).ready(function () {
    MostrarPedidos();
    $("#frm_id_ped").attr('readonly', true);
});

function MostrarPedidos() {
    var table = $('#MostrarPedido').DataTable({
        destroy: true,
        responsive: true,
        "bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "VO/MostrarMesero.php",
            "type": "POST"
        },
        "columns": [
            { "data": "Detalle" },
            { "data": "Estado" },
            { "data": "Id_ped" },
            { "data": "Id_mes" },
            { "data": "Fechor_ini" },
            { "data": "Zona" }
        ]
    });
    new $.fn.dataTable.FixedHeader(table);
}

function MostrarDetallePedidos(id_ped) {
    var id = id_ped;
    var table = $('#MostrarDetallePedido').DataTable({
        destroy: true,
        responsive: true,
        "bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "VO/MostrarDetallePedidosMesero.php",
            "data": { id: id },
            "type": "POST"
        },
        "columns": [
            { "data": "Nom_pro" },
            { "data": "Comentarios" },
            { "data": "Sin_ingredientes" },
            { "data": "Cantidad" },
            { "data": "Estado" },
            { "data": "Acciones" }
        ]
    });
    MostrarPedidos();
    new $.fn.dataTable.FixedHeader(table);

}

function RegistrarProductoEnPedido(id) {
    $("#frmid_ped").val(id);
}

$("#RegistrarDetallePedido").click(function () {
    var frmid_ped1 = $("#frmid_ped").val(),
        frmpro_id1 = $("#frmpro_id").val(),
        frmcom_det_ped1 = $("#frmcom_det_ped").val(),
        frmsin_ing1 = $("#frmsin_ing").val(),
        frmcant1 = $("#frmcant").val();

    $.post("index.php?accion=RegistrarDetallePedido", {
        frmid_ped: frmid_ped1,
        frmpro_id: frmpro_id1,
        frmcom_det_ped: frmcom_det_ped1,
        frmsin_ing: frmsin_ing1,
        frmcant: frmcant1
    }, function (datos) {

        $("#frmRegistrarProductoEnPedido").modal('hide');
        MostrarDetallePedidos(frmid_ped1);
    });
    $("#frmid_ped").val("");
    $("#frmpro_id").val("");
    $("#frmcom_det_ped").val("");
    $("#frmsin_ing").val("");
    $("#frmcant").val("");
});	

function EditarDetallePedido(id,id_ped) {
    $.post("index.php?accion=EditarDetallePedido", { id: id }, function (data) {

        var data = JSON.parse(data);
        console.log(data);
        $("#frmid_ped1").val(id_ped);
        $("#frmid_det_ped1").val(data.ID);
        $("#frmcom_ped1").val(data.COMENTARIOS);
        $("#frmsin_ing_ped1").val(data.SININGREDIENTES);
        $("#frmcant_ped1").val(data.CANTIDAD);
    });

}

$("#ActualizarDetallePedido").click(function () {

    var frmid_ped1 = $("#frmid_ped1").val(),
        frmid_det_ped1 = $("#frmid_det_ped1").val(),
        frmcom_ped1 = $("#frmcom_ped1").val(),
        frmsin_ing_ped1 = $("#frmsin_ing_ped1").val(),
        frmcant_ped1 = $("#frmcant_ped1").val();

    $.post("index.php?accion=ActualizarDetallePedido", {
        frmid_det_ped1: frmid_det_ped1,
        frmcom_ped1: frmcom_ped1,
        frmsin_ing_ped1: frmsin_ing_ped1,
        frmcant_ped1: frmcant_ped1
    }, function (datos) {

    $("#frmEditarProductoEnPedido").modal('hide');
            MostrarDetallePedidos(frmid_ped1);
    });
});

function Preparacion(id, id_ped) {
    $.post("index.php?accion=preparacion", { id: id }, function (datos) {
        MostrarDetallePedidos(id_ped);
    });

}

function Despachado(id, id_ped) {
    $.post("index.php?accion=despachado", { id: id }, function (datos) {
        MostrarDetallePedidos(id_ped);
    });

}

function Cancelado(id, id_ped) {
    $.post("index.php?accion=cancelado", { id: id }, function (datos) {
        MostrarDetallePedidos(id_ped);
    });

}