<?php

$mainYear = array(
    "key" => 23,
    "long" => 2023,
);
$mainConfigFile = __DIR__ . "/index.config.v" . $mainYear["key"] . ".php";
if (!is_file($mainConfigFile)) {
    echo "missing the config file, copy from \n<br>"
        . "cross_configs/index.config.v23.php";
    die();
}
include $mainConfigFile;
include __DIR__ . "/websites_list.php";
