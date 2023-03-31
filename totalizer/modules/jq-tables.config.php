<?php

/**
 * JQUERY dataTables support
 * v = 1.01
 */
$modulesData["jq-tables"] = array(
    "files"  => array(
        "local" => array(
            "js" => array(
                $project["urlsLocal"]["js"] . "jquery.dataTables.min.js",
            ),
            "css" => array(
                $project["urlsLocal"]["js"] . "jquery.dataTables.min.css",
            ),
        ),
        "live" => array(
            "js" => array(
                $project["urls"]["js"] . "jquery.dataTables.min.js",
            ),
            "css" => array(
                $project["urls"]["js"] . "jquery.dataTables.min.css",
            ),
        ),
    ),
);
