<script>
    <?php
    $crossConfigOptions['appOptions']['refrsh']['intrval'] = false;
    $crossConfigOptions['appOptions']['refrsh']['_now'] = false;
    ?>
    /* widget related variables - INI */
    var templates = {};
    var firstLoad = true;
    var refrsh = <?php echo json_encode($crossConfigOptions['appOptions']['refrsh']); ?>;
    var msg = {
        some: "Some error occurred, please try again later"
    };
    /* widget related variables - END */
    /* WIDGET FUNCTIONS - INI */
    var runWidgetStart = function() {
        du_checkBrand();
        du_startTemplates();
        <?php /* if ($modules["social"]) { ?>
            du_socialStartBtns();
        <?php } ?>
        <?php if ($modules["newsletter"]) { ?>
            du_startNewsletter();
        <?php } */ ?>
        <?php if ($modules['getJson']) { ?>
            du_jsonP_getData();
        <?php } ?>
        refrsh._now = parseInt(du_support.genCacheId("d"));
        if (
            refrsh._now >= refrsh.start &&
            refrsh._now <= refrsh.end
        ) {
            refrsh.intrval = setInterval(
                du_jsonP_getData,
                refrsh.rate
            );
        }
    };
    /** GET DATA - INI */
    <?php if ($modules["getJson"]) { ?>
        var du_jsonP_getData = function() {
            var getjsonData = {
                file: "<?php echo $project["name"]["seo"] . "_pa_sop"; ?>" +
                    //versionKey +
                    ".json?v=" + du_support.genCacheId(),
                callback: "<?php echo "run_data" . $project["name"]["_bodyId"] . "_" . $mainYear["key"]; ?>", //+ versionKey,
                runOk: du_checkLoadedData, // du_checkVersionData,
                runKo: du_fatalError, // du_fatalError
            };
            getjsonpData(getjsonData);
        };
    <?php } ?>
    var du_startTemplates = function() {
        if (versionKey != "small") {
            jq('#du-horiz-table', mainEl).remove();
        }
        /* TABLE Tds */
        templates.ptCell = jq(".du-pt.du-template", mainEl).clone().removeClass("du-template");
        templates.valCell = jq(".du-val.du-template", mainEl).clone().removeClass("du-template");
        /* change */
        templates.ch = jq(".du-change-holder.du-template", mainEl).clone().removeClass("du-template");
        jq(".du-templates", mainEl).remove();
    };
    var addError = function(theError) {
        if (firstLoad) {
            du_fatalError(
                msg.some,
                theError
            )
        }
    };
    var du_fatalError = function(sms, theError) {
        jq('#du-widget', mainEl).html('<div class="du-row-error">' + sms + '</div>');
        wait(0);
    };
    /** GET DATA - END */
    var du_checkBrand = function() {
        const brand = mainEl.data("du-brand");
        if (
            brand &&
            brand != "none"
        ) {
            du_loadCssFile(
                "<?php echo $project["urls"]["brands"] . "du_"; ?>" +
                brand +
                "<?php echo "_el" . $mainYear["key"] . "_theme.min.css" . $project["options"]["localCacheBust"]; ?>"
            );
        }
    };
    <?php if (0) { ?>
        var runWidgetBinds = function() {
            jq("#du-search", mainEl)
                .on("keypress", function(e) {
                    if (
                        e.key === "Enter" ||
                        e.which == 13
                    ) {
                        jq("#du-btn-search", mainEl).trigger("click");
                        jq(this).trigger("blur");
                    }
                });
            jq("#du-btn-search", mainEl)
                .on("click", function() {
                    var postcode = "<collected postcode>";
                    <?php if ($modules["newsletter"]) { ?>
                        /* move to where applies */
                        /******** add newsletter ********/
                        du_newsletterShowForm();
                        du_newsletterClass.addPostcode(postcode);
                        /***************************/
                    <?php } ?>
                    <?php if ($modules["getJson"]) { ?>
                        var address = du_support.checkPostCode(jq("#du-search", mainEl).val());
                        if (address) {
                            var headerData = {
                                type: widgetKEY,
                                info: address
                            }
                            getjson(headerData, du_json_test, du_json_test);
                        } else {
                            alert("bad postcode");
                        }
                    <?php } else { ?>
                        alert(jq("#du-search", mainEl).val());
                    <?php } ?>
                    <?php if ($modules['lotame']) { ?>
                        /* move to where applies */
                        /******** add lotame ********/
                        const lotameData = {
                            /* ENTER LOTAME DATA HERE */
                            /* Available Keys: outcode | birhtyear */
                            "outcode": "OL9",
                            "birhtyear": "1996"
                        };

                        du_lotameSendData(lotameData);
                        /***************************/

                    <?php } ?>
                });
            jq(".du-banner", mainEl).css("visibility", "visible");
            /* .css() instead of .show(), might fail if css not loaded yet */
            jq("#du-widget .du-container", mainEl).css("display", "block");
            jq("#du-results", mainEl).css("display", "block");
            jq("#du-footer", mainEl).css("display", "block");
            <?php if ($modules['charts']) {
                /**
                 * only start after showing the container
                 */
            ?>
                du_startCharts();
            <?php } ?>
            wait(0);
        };
        <?php if ($modules["newsletter"]) { ?>
            var du_finished = function() {
                alert("called du_finished")
            }
        <?php } ?>
    <?php } ?>
    /* WIDGET FUNCTIONS - END */