<style>
    /******
    * jq-tables
    */
    div#du-body.du-body .du-datatables-holder {
        margin: 10px auto 0;
        width: 100%;
        text-align: center;
        overflow: auto;
    }

    div#du-body.du-body .du-datatables {
        background: #FFF;
        width: 100%;
        border-spacing: 0;
    }

    div#du-body.du-body .du-datatables-holder thead {
        color: #FFF;
        background: <?php echo $widgetOptions["colors"]["main"]; ?>
    }

    div#du-body.du-body .du-datatables-holder thead tr {}

    div#du-body.du-body .du-datatables-holder thead td {
        background: <?php echo $widgetOptions["colors"]["main"]; ?>
    }

    div#du-body.du-body .du-datatables-holder thead th {}

    div#du-body.du-body .du-datatables-holder thead td,
    div#du-body.du-body .du-datatables-holder thead th {
        border-bottom: 1px solid #000;
        padding: 5px 18px;
    }

    div#du-body.du-body .du-datatables-holder tbody {}

    div#du-body.du-body .du-datatables-holder tbody td {}

    div#du-body.du-body .du-datatables-holder tbody td {
        border-bottom: 1px solid #AFAFAF;
        padding: 5px 10px;
    }

    div#du-body.du-body .du-datatables-holder .dataTables_length,
    div#du-body.du-body .du-datatables-holder .dataTables_filter {
        background-color: #000;
        border-top: 5px solid <?php echo $widgetOptions["colors"]["main"]; ?>;
        text-align: center;
        padding: 7px;
        color: #fff;
    }

    div#du-body.du-body .du-datatables-holder .dataTables_length label select,
    div#du-body.du-body .du-datatables-holder .dataTables_filter label input {
        color: #000;
        padding-left: 8px;
        margin-left: 8px;
    }

    div#du-body.du-body .du-datatables-holder .dataTables_wrapper .dataTables_info {
        padding-top: 0.755em;
    }

    div#du-body.du-body .du-datatables-holder .dataTables_wrapper .dataTables_paginate {
        padding-top: 0.25em;
    }