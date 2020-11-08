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
            "url": "VO/MostrarAdminPedidos.php",
            "type": "POST"
        },
        "columns": [
            { "data": "Detalle" },
            { "data": "Estado" },
            { "data": "Id_ped" },
            { "data": "Id_mes" },
            { "data": "Fechor_ini" },
            { "data": "Fechor_fin" }
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
            "url": "VO/MostrarAdminDetallePedidos.php",
            "data": { id: id },
            "type": "POST"
        },
        "columns": [
            { "data": "Nom_pro" },
            { "data": "Comentarios" },
            { "data": "Sin_ingredientes" },
            { "data": "Cantidad" },
            { "data": "Estado" }
        ]
    });
    new $.fn.dataTable.FixedHeader(table);
}
