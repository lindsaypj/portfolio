$(document).ready( function () {
    // $('#guestTable').DataTable({
    //     "table-layout": 'fixed',
    //     "bAutoWidth": false,
    //     "paging"   : false,
    //     "info"     : false,
    //     // "searching" : false
    // });

    new DataTable( '#guestTable', {
        "table-layout": 'fixed',
        "bAutoWidth": false,
        "paging"   : false,
        "info"     : false,
        "language": {
            "emptyTable": "Error Receiving data from database"
        }
    } );
} );
