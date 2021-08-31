$(document).ready(function() {
    tablaNegocios = $("#tablaNegocios").DataTable({
        "columnDefs": [{
            "targets": -1,
            "data": null,
            "defaultContent": "<a id='btn-abrir-popup' href='?c=administrador&a=crudUsuarios&idUsuario=<?php echo $r->idUsuario; ?>' class='btn-abrir-popup'>Modificar</a>"

        }],

        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Procesando...",
        }
    });
});