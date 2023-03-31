<?php

/**
 * Get Json
 * v = 1.1
 */

$modulesData["getJson"] = array(
    "local"  => array(
        "json" => $project["urlsLocal"]["url"]
            . $project["urlsLocal"]["proj"],
        "jsonp" => $project["urlsLocal"]["data"]
    ),
    "live" => array(
        "json" => $project["urls"]["img"],
        "jsonp" => $project["urls"]["data"]
    ),
);
