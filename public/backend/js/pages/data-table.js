//[Data Table Javascript]

//Primary use:   Used only for the Data Table

$(function () {
    "use strict";

    $('.example1').DataTable();
    $('.example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,


    });


    $('.example').DataTable( {
        dom: 'Bfrtip',
        buttons: [

            // 'copy', 'csv','excel', 'pdf', 'print',

            {
                extend: 'excel',
                exportOptions: {
                    columns: ':not(.no-export)'
                }

            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':not(.no-export)'
                }

            },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':not(.no-export)'
                }
            }
        ],
        "columnDefs": [{
            "targets": 'no-order',
            "orderable": false
        }]

    } );

    $('#tickets').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
    });

    $('#employeelist').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,

    });

}); // End of use strict

