<script>
    /* TABLES widget related variables - INI */
    var tableHeaders = <?php echo json_encode($widgetOptions["tableOptions"]["header"]); ?>;
    var currentData = false;
    /* TABLES widget related variables - END */
    /* TABLES widget FUNCTIONS - INI */
    var du_checkLoadedData = function(response) {
        if (
            typeof response.data == "undefined" ||
            typeof response.total == "undefined"
        ) {
            addError("bad data in file");
            return false;
        }
        if (
            currentData &&
            typeof currentData.upd != "undefined" &&
            typeof response.upd != "undefined" &&
            (
                currentData.upd.now == response.upd.now ||
                (
                    (
                        currentData.upd.now != response.upd.now &&
                        currentData.upd.now >= response.upd.now)
                )
            )
        ) {
            return false;
        }
        wait(1);
        currentData = response;
        jq('#du-widget .du-container', mainEl)
            .css("display", "block");
        firstLoad = false;
        if (
            typeof response.total.tc == "undefined" ||
            response.total.tc == 0
        ) {
            wait(0);
        } else {
            du_updateTable(response);
        }
        <?php if ($modules["newsletter"]) { ?>
            /* move to where applies */
            /******** add newsletter ********/
            du_newsletterShowForm();
            /***************************/
        <?php } ?>
    };
    var du_updateTable = function(response) {
        jq(mainEl).addClass("du-has-results");
        jq('#du-widget .du-data-councils', mainEl)
            .hide()
            .text(response.total.tc)
            .fadeIn();
        jq('#du-widget table td', mainEl)
            .remove();
        jq('#du-widget table tr', mainEl)
            .each(function() {
                if (jq(this).html() == "") {
                    jq(this).remove();
                }
            });
        for (var key in response.data) {
            if (!response.data.hasOwnProperty(key)) {
                continue;
            }
            du_addPartyData(response.data[key]);
        }
        if (jq('#du-main-table', mainEl).is(":visible")) {
            du_animateBigTable();
        } else {
            du_animateSmallTable();
        }
        wait(0);
    };
    var du_addPartyData = function(ptData) {
        var cellsData = {
            party: templates.ptCell.clone(),
            councils: du_createCell(ptData.tc, ptData.tcc),
            seats: du_createCell(ptData.sw, ptData.sc)
        }
        jq('.du-pt-icon', cellsData.party)
            .addClass('du-pt-' + du_support.classFriendly(ptData.p))
            .after(ptData.p);
        newRow = du_addPartyDataNormal(cellsData);
        if (versionKey == "small") {
            newRow = du_addPartyDataSmall(cellsData);
        }
    };
    var du_addPartyDataSmall = function(cellsData) {
        for (var i = 0; i < tableHeaders.length; i++) {
            var rowId = tableHeaders[i].toLowerCase();
            jq("#du-horiz-table .du-tr-" + rowId, mainEl).append(cellsData[rowId].clone());
        }
    };
    var du_addPartyDataNormal = function(cellsData) {
        var newRow = jq("<tr/>");
        newRow
            .append(cellsData.party)
            .append(cellsData.councils)
            .append(cellsData.seats);
        jq('#du-main-table tbody', mainEl).append(newRow);
    };
    var du_createCell = function(keyDataVal, keyDataChange) {
        var newCell = templates.valCell.clone();
        var newChange = templates.ch.clone();
        var difClass = "du-eq";
        switch (true) {
            case keyDataChange > 0:
                difClass = "du-up";
                break;
            case keyDataChange < 0:
                difClass = "du-down";
                break;
        }
        newChange
            .addClass(difClass)
            .find(".du-icon")
            .after(du_support.addCommas(Math.abs(keyDataChange)));
        newCell
            .text(du_support.addCommas(keyDataVal))
            .append(newChange);
        return newCell;
    };
    var du_animateBigTable = function() {
        var row = 0;
        jq("#du-main-table tbody tr", mainEl)
            .css("visibility", "hidden")
            .each(function() {
                var me = jq(this);
                setTimeout(function() {
                    me
                        .hide()
                        .css("visibility", "visible")
                        .fadeIn("slow");
                }, row++ * 300);
            });
    };
    var du_animateSmallTable = function() {
        jq("#du-horiz-table tbody tr td", mainEl)
            .css("visibility", "hidden");
        jq("#du-horiz-table tbody tr td", mainEl)
            .each(function() {
                var me = jq(this);
                var row = me.index() - 1;
                setTimeout(function() {
                    me
                        .hide()
                        .css("visibility", "visible")
                        .fadeIn("slow");
                }, row++ * 300);
            });
    };
    /* TABLES widget FUNCTIONS - END */