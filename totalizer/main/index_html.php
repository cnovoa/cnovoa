<script src="<?php echo "##tempFinalFile##" . $IndexApp->getScriptFilename() . $project["options"]["localCacheBust"]; ?>"></script>
<?php
$addMainNewsletter = "";
if (
    $modules["newsletter"] &&
    $modulesData["newsletter"] &&
    $modulesData["newsletter"]["main"]
) {
    $addMainNewsletter = 'data-du-newsletter="' . $modulesData["newsletter"]["main"] . '"';
}
$htmlClasses = array(
    'du-body',
    'du-mobile',
    'du-wait-hide',
    $project["widget"]["class"],
    'du-vers-' . $version['id']
);
?>
<div <?php echo
        'id="' . $project["widget"]["id"] . '" '
            . 'class="' . implode(" ", $htmlClasses) . '" '
            . $addMainNewsletter . " "
            . 'data-du-brand="' . $brand . '" '
            . 'data-tmdatatrack="' . $project["widget"]["tmdatatrack"] . '"';
        ?>>
    <div class="du-wait"><span>&nbsp;</span></div>
    <noscript>
        <div id="du-js-warning">This widget requires javascript to work.</div>
    </noscript>
    <a name="du-top"></a>
    <div id="du-widget-body">
        <div id="du-temp-header" class="du-header">
            <div class="du-container">
                <div class="du-text">Interactive</div>
            </div>
        </div>
        <!-- ++++++++ -->
        <div id="du-main-header" class="du-header">
            <div class="du-container">
                <h2><?php echo $project["name"]["headerAlt"]; ?></h2>
                <?php /*
                <img class="du-header-img" alt="<?php echo $project["name"]["headerAlt"]; ?>" src="<?php echo $IndexApp->formatImageUrl("img", "du" . $project["name"]["_bodyId"] . "_header.jpg"); ?>" />
                <div class="du-text">Vestibulum dolor lorem, aliquet sit amet massa convallis, accumsan tincidunt sapien. Pellentesque tortor lorem, posuere ac tempus et, commodo id nibh. Sed vel tortor in neque laoreet interdum ut et lacus. Vivamus semper fringilla lobortis. Vestibulum et ligula tincidunt, molestie nibh vitae, sollicitudin quam. Nullam lacinia imperdiet tellus, posuere lobortis odio molestie quis. Ut volutpat sed velit id interdum.</div>
                */ ?>
            </div>
        </div>
        <div id="du-widget">
            <div class="du-container" style="display:none">
                <div class="du-text du-waiting">We are waiting for the first results from Press Association</div>
                <div class="du-text du-text-results">With the results available from <span class="du-data-councils">-</span> councils, the Press Association calculates the state of parties as follows:</div>
                <table id="du-main-table" class="du-res-table">
                    <thead>
                        <tr>
                            <?php
                            foreach ($widgetOptions["tableOptions"]["header"] as $tableHeaderKey => $tableHeaderValue) {
                                echo "<th>" . $tableHeaderValue . "</th>";
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!$testOptions["autofill"]) { ?>
                            <tr class="du-templates">
                                <td class="du-pt du-template"><span class="du-pt-icon"></span></td>
                                <td class="du-val du-template"></td>
                                <td><span class="du-change-holder du-template"><span class="du-icon du-arrow"></span></span></td>
                            </tr>
                        <?php } else { ?>
                            <tr>
                                <td class="du-pt"><span class="du-pt-icon du-pt-con"></span>CON</td>
                                <td class="du-val">38<span class="du-down"><span class="du-icon du-arrow"></span>1</span>
                                </td>
                                <td class="du-val">842<span class="du-down"><span class="du-icon du-arrow"></span>49</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="du-pt"><span class="du-pt-icon du-pt-lab"></span>LAB</td>
                                <td class="du-val">58<span class="du-eq"><span class="du-icon du-arrow"></span>0</span>
                                </td>
                                <td class="du-val">1,326<span class="du-down"><span class="du-icon du-arrow"></span>11</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="du-pt"><span class="du-pt-icon du-pt-lib_dem"></span>LIB DEM</td>
                                <td class="du-val">4<span class="du-up"><span class="du-icon du-arrow"></span>1</span>
                                </td>
                                <td class="du-val">378<span class="du-up"><span class="du-icon du-arrow"></span>30</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="du-pt"><span class="du-pt-icon du-pt-green"></span>GREEN</td>
                                <td class="du-val">0<span class="du-eq"><span class="du-icon du-arrow"></span>0</span>
                                </td>
                                <td class="du-val">45<span class="du-down"><span class="du-icon du-arrow"></span>3</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="du-pt"><span class="du-pt-icon du-pt-ukip"></span>UKIP</td>
                                <td class="du-val">0<span class="du-eq"><span class="du-icon du-arrow"></span>0</span>
                                </td>
                                <td class="du-val">58<span class="du-up"><span class="du-icon du-arrow"></span>24</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="du-pt"><span class="du-pt-icon du-pt-noc"></span>NOC</td>
                                <td class="du-val">24<span class="du-eq"><span class="du-icon du-arrow"></span>0</span>
                                </td>
                                <td class="du-val">0<span class="du-eq"><span class="du-icon du-arrow"></span>0</span>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <table id="du-horiz-table" class="du-res-table">
                    <tbody>
                        <?php
                        $autoFillData = array(
                            "Party" => "<td class='du-pt'><span class='du-pt-icon du-pt-con'></span>CON</td><td class='du-pt'><span class='du-pt-icon du-pt-lab'></span>LAB</td><td class='du-pt'><span class='du-pt-icon du-pt-lib-dem'></span>LIB DEM</td><td class='du-pt'><span class='du-pt-icon du-pt-green'></span>GREEN</td><td class='du-pt'><span class='du-pt-icon du-pt-ukip'></span>UKIP</td><td class='du-pt'><span class='du-pt-icon du-pt-noc'></span>NOC</td>",
                            "Councils" => "<td class='du-val'>38<span class='du-down'><span class='du-icon du-arrow'></span>1</span></td><td class='du-val'>4<span class='du-up'><span class='du-icon du-arrow'></span>1</span></td><td class='du-val'>0<span class='du-eq'><span class='du-icon du-arrow'></span>0</span></td><td class='du-val'>0<span class='du-eq'><span class='du-icon du-arrow'></span>0</span></td><td class='du-val'>24<span class='du-eq'><span class='du-icon du-arrow'></span>0</span></td><td class='du-val'>58<span class='du-eq'><span class='du-icon du-arrow'></span>0</span></td>",
                            "Seats" => "<td class='du-val'>842<span class='du-down'><span class='du-icon du-arrow'></span>49</span></td><td class='du-val'>1,326<span class='du-down'><span class='du-icon du-arrow'></span>11</span></td><td class='du-val'>378<span class='du-up'><span class='du-icon du-arrow'></span>30</span></td><td class='du-val'>45<span class='du-down'><span class='du-icon du-arrow'></span>3</span></td><td class='du-val'>58<span class='du-up'><span class='du-icon du-arrow'></span>24</span></td><td class='du-val'>0<span class='du-eq'><span class='du-icon du-arrow'></span>0</span></td>",
                        );
                        foreach ($widgetOptions["tableOptions"]["header"] as $tableHeaderKey => $tableHeaderValue) {
                            $autoFill = $testOptions["autofill"] ? $autoFillData[$tableHeaderValue] : "";
                            echo "<tr class='du-tr-" . $IndexApp->classFriendly($tableHeaderValue) . "'>"
                                . "<th>" . $tableHeaderValue . "</th>"
                                . $autoFill
                                . "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php if (
            $modules["newsletter"] &&
            $modulesData["newsletter"]
        ) { ?>
            <!-- /******************/
            /* Newsletter - INI  */ -->
            <div class="du-nlf-holder"></div>
        <?php } ?>
        <?php if (false) { ?>
            <div id="du-footer" style="display:none">
                <div class="du-container">
                    <div class="du-footer-txt"><span>Source: </span> semper et vitae sem.</div>
                    <?php
                    if (
                        $modules["social"] &&
                        $modulesData["social"]
                    ) { ?>
                        <ul id="du-social-holder">
                            <li class="du-social-box"><a class="du-social-btn du-btn" target="_blank" href="" title=""><span></span></a></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <!-- ++++++++ -->
    </div>
    <?php
    if ($local) {
        /**
         * for local testing of social buttons
         */
    ?>
        <!--meta property="fb:app_id" content="226899387441465"-->
        <meta property="fb:app_id" content="261815760677199">
        <meta name="twitter:site" value="@MENSports">
    <?php } ?>
    <script>
        (function(me) {
            function waitForIt(thisFunc, attempts) {
                if (typeof(window[thisFunc]) == "function") {
                    const thisApp =
                        new window[thisFunc](
                            <?php
                            $vars = array(
                                "me",
                            );
                            if ($version) {
                                $vars[] = "'" . $version["id"] . "'";
                            }
                            echo implode(", ", $vars);
                            ?>
                        );
                } else {
                    if (--attempts > 0) {
                        setTimeout(function() {
                            waitForIt(thisFunc, attempts)
                        }, 150);
                    }
                }
            }
            waitForIt("<?php echo $project["widget"]["widgetFunction"]; ?>", 30);
        }(document.currentScript));
    </script>
</div>