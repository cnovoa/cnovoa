<script>
    /* jq-tables - INI */
    var du_startTables = function() {
        if (jq("#du-table0 tbody tr", mainEl).length > 15) {
            jq("#du-table0", mainEl)
                .DataTable({
                    "autoWidth": false,
                    "lengthChange": false,
                    language: {
                        searchPlaceholder: "Search in table"
                    }
                });
        }
        if (jq("#du-table1 tbody tr", mainEl).length > 15) {
            jq("#du-table1", mainEl)
                .DataTable({
                    "autoWidth": false,
                    "lengthChange": false,
                    language: {
                        searchPlaceholder: "Search in table"
                    }
                });
        }
        jq("#du-table2", mainEl)
            .DataTable({
                "autoWidth": false,
                language: {
                    searchPlaceholder: "Search in table"
                }
            });
    }