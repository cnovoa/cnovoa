<?php

/**
 * charts
 * v = 1.1
 */
$modulesData["charts"] = array(
    "opts"  => array(
        "add-annotations" => false
    ),
    "files"  => array(
        "local" => array(
            "js" => array(
                $project["urlsLocal"]["js"] . "chartJS/chart.4.min.js"
            ),
        ),
        "live" => array(
            "js" => array(
                $project["urls"]["js"] . "chartJS/chart.4.min.js"
            ),
        ),
    ),
);
/**
 * Add Annotations Plugin
 */
if ($modulesData["charts"]["opts"]["add-annotations"]) {

    array_push(
        $modulesData["charts"]["files"]["local"]["js"],
        $project["urlsLocal"]["js"] . "chartJS/chart.annotation.2.min.js"
    );
    array_push(
        $modulesData["charts"]["files"]["live"]["js"],
        $project["urls"]["js"] . "chartJS/chart.annotation.2.min.js"
    );
}
