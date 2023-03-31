<?php
$readme = array(
    "# " . $project["name"]["long"],
    "",
    "### " . implode("\n### ", $widgetInfo["widget"][0]["data"]),
);
$readmeTemp = array(
    "Created by" => false,
    "Journalists" => false,
    "Designer" => false,
    "Resources" => array(),
    "Data Source" => array(),
    "Obs" => false,
    "Links" => array(),
);
//<pre>
?>
<?php
foreach ($widgetInfo["other"] as $otherKey => $otherValue) {
    if (count($otherValue["data"]) == 0) {
        continue;
    }
    switch ($otherValue["name"]) {
        case "Coder":
            $readmeTemp["Created by"] = "\t- " . implode("\n\t- ", $otherValue["data"]);
            break;
        case "Journalist":
            $readmeTemp["Journalists"] = "\t- " . implode("\n\t- ", $otherValue["data"]);
            break;
        case "Designer":
            $readmeTemp["Designer"] = "\t- " . implode("\n\t- ", $otherValue["data"]);
            break;
        case "Obs":
            $readmeTemp["Obs"] = "\t- " . implode("\n\t- ", $otherValue["data"]);
            break;
        case "Resources":
        case "Data Source":
            foreach ($otherValue["data"] as $tempData => $tempValue) {
                if (is_array($tempValue)) {
                    //if (isset($tempValue["url"])) {
                    $readmeTemp[$otherValue["name"]][] = "\t- [" . $tempValue["title"] . "](" . $tempValue["url"] .  " \"" . $tempValue["title"] . "\")";
                    //}
                } else {
                    $readmeTemp[$otherValue["name"]][] = "\t- " . $tempValue;
                }
            }
            $readmeTemp[$otherValue["name"]] = implode("\n", $readmeTemp[$otherValue["name"]]);
            break;
        default:
            var_dump("---------------");
            var_dump($otherKey);
            var_dump($otherValue);
            break;
    }
}
if (
    isset($widgetInfo["Widget Live"]) &&
    isset($widgetInfo["Widget Live"]["Widget Live"]) &&
    isset($widgetInfo["Widget Live"]["Widget Live"]["data"]) &&
    count($widgetInfo["Widget Live"]["Widget Live"]["data"]) > 0
) {
    foreach ($widgetInfo["Widget Live"]["Widget Live"]["data"] as $otherKey => $otherValue) {
        $readmeTemp["Links"][] = "\t- [" . $otherValue["title"] . "](" . $otherValue["url"] . " \"" . $otherValue["title"] . "\")";
        //var_dump("---------------");
        //var_dump($otherKey);
        //var_dump($otherValue);
    }
    $readmeTemp["Links"] = implode("\n", $readmeTemp["Links"]);
}
$readmeExtra = array();
if (
    isset($widgetInfo["extra"])
) {
    foreach ($widgetInfo["extra"] as $groupKey => $groupValue) {
        $newGroupName = $groupValue["name"];
        $readmeExtra[] = array();
        foreach ($groupValue["data"] as $groupRowKey => $groupRowValue) {
            if (
                is_array($groupRowValue)
            ) {
                if (isset($groupRowValue["code"])) {
                    $readmeExtra[$newGroupName][] = "```\n" . $groupRowValue["code"] . "\n```";
                } else if (isset($groupRowValue["url"])) {
                    $readmeExtra[$newGroupName][] = "[" . $groupRowValue["title"] . "](" . $groupRowValue["url"] . " \"" . $groupRowValue["title"] . "\")";
                } else {
                    $readmeExtra[$newGroupName][] = "1. " . implode("\n", $groupRowValue);
                }
            } else {
                $readmeExtra[$newGroupName][] = "1. " . str_replace(array("<b>", "</b>"), array("**", "**"), $groupRowValue);
            }

            //  var_dump("---------------");
            //  var_dump($groupRowKey);
            //  var_dump($groupRowValue);
        }
        $readmeExtra[$newGroupName] = implode("\n", $readmeExtra[$newGroupName]);
    }
}



/** final  */
foreach ($readmeTemp as $tempKey => $tempValue) {
    // var_dump("---------------");
    // var_dump($tempKey);
    // var_dump($tempValue);
    if ($tempValue) {
        $readme[] = "- " . $tempKey . ":";
        $readme[] = $tempValue;
    }
}
foreach ($readmeExtra as $extraKey => $extraValue) {
    if ($extraValue) {
        $readme[] = "\n## " . $extraKey;
        $readme[] = $extraValue;
    }
}

//$readme = array_merge($readme, $readmeTemp["Created by"]);
/*
foreach ($widgetInfo as $groupKey => $groupValue) {
    var_dump("---------------");
    var_dump($groupKey);
    var_dump($groupValue);
    "sdfsd";
}
*/
//var_dump("//////////////////// ");
//var_dump($readme);
echo implode("\n", $readme);
?>