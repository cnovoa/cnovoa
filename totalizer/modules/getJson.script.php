<script>
    /* Get Json - INI */
    var getjson = function(headerData, runOk, runKo) {
        jq.ajax({
            type: "POST",
            url: "<?php echo $modulesData["getJson"][$project["localOrLive"]]["json"]; ?>return<?php echo $project["name"]["_bodyId"]; ?>.json.php",
            contentType: "application/x-www-form-urlencoded",
            data: headerData,
            dataType: "json",
            success: function(response, status) {
                runOk(response, status);
            },
            error: function(response, status) {
                runKo(response, status);
            }
        });
    };
    /* Get Json - END */
    /**
     * Get JsonP - INI
     */
    var getjsonpData = function(getjsonData) {
        if (typeof getjsonData.tries == "undefined") {
            getjsonData.tries = 0;
            getjsonData.whatWrong = "timeout";
            getjsonData.runTempKo = getjsonpData;
        }
        if (
            getjsonData.whatWrong == "timeout" &&
            getjsonData.tries < 5
        ) {
            ++getjsonData.tries;
            getjsonp(getjsonData);
            return true;
        }
        getjsonData.runKo(msg.some);
    };
    var getjsonp = function(getjsonData) {
        jq.ajax({
            type: "GET",
            cache: true,
            timeout: 4000 + (getjsonData.tries * 1000), // 2 seconds timeout
            url: "<?php echo $modulesData["getJson"][$project["localOrLive"]]["jsonp"]; ?>" + getjsonData.file,
            jsonpCallback: getjsonData.callback,
            dataType: "jsonp",
            success: getjsonData.runOk,
            error: function(response, status) {
                getjsonData.whatWrong = status;
                getjsonData.runTempKo(getjsonData);
            }
        });
    };
    /* Get JsonP - END */