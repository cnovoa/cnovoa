<?php
ob_start();
include "_pkgInc/IndexClass.php";
$myInputsArgs = array(
    "live" => FILTER_SANITIZE_ENCODED,
    "gen" => FILTER_SANITIZE_ENCODED,
    "version" => FILTER_SANITIZE_ENCODED,
    "brand" => FILTER_SANITIZE_ENCODED,
);
$myInputs = filter_input_array(INPUT_GET, $myInputsArgs);
if (is_null($myInputs)) {
    $myInputs = array();
}
$local = !(isset($myInputs["live"]) && !!$myInputs["live"]);
$testOptions = array(
    "autofill" => false && $local,
    "speedUp" => true && $local
);
include "configs/config.versions.php";
$version = false;
if ($versions) {
    if (
        isset($myInputs["version"]) &&
        array_key_exists($myInputs["version"], $versions)
    ) {
        $version = $versions[$myInputs["version"]];
        $version['id'] = $myInputs["version"];
    } else {
        unset($myInputs["version"]);
        if (
            isset($myInputs["gen"]) &&
            $myInputs["gen"] != "readme"
        ) {
            unset($myInputs["gen"]);
        }
    }
}
include "../cross_configs/index.main.cross_config.php";
include "configs/config.main.php";
include "configs/config.widget.php";

/** BRAND */
$brand = "none";
if (
    $local &&
    isset($myInputs["brand"]) &&
    isset($websites_list[$myInputs["brand"]])
) {
    $brand = $myInputs["brand"];
}

$indexOptions = array(
    "modules" => $modules,
    "modulesData" => $modulesData,
    "myInputs" => $myInputs,
    "local" => $local,
    "name" => $project["name"],
    "widget" => $project["widget"],
    "urls" => $project["urls"],
    "urlsLocal" => $project["urlsLocal"],
    "version" => false,
    "versionData" => false,
    "versionOptions" => $versionsFiles,
);
if ($version) {
    $indexOptions["version"] = $version['id'];
    $indexOptions["versionData"] = $version;
}
$IndexApp = new IndexApp($indexOptions);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $project["name"]["long"]; ?> - Interactive</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0" />
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW" />
    <link rel="stylesheet" href="_pkgInc/holderPage.css.php" />
    <style>
        body {
            margin: 0;
            padding: 0 0 90vh;
        }
    </style>
</head>

<body class="<?php echo $IndexApp->getBodyClass(); ?>">
    <?php echo $IndexApp->getOptionsLightsHtml(); ?>
    <?php
    if (
        $local &&
        isset($myInputs["gen"]) &&
        $myInputs["gen"] == "widget"
    ) {
        $options = "";
        foreach ($websites_list as $websites_listKey => $websites_listValue) {
            $optionSelected = "";
            if ($brand == $websites_listKey) {
                $optionSelected = " selected='selected' ";
            }
            $options .= "<option value='" . $websites_listKey . "' " . $optionSelected . ">" . $websites_listValue["name"] . "</option>";
        }
    ?>
        <form action="">
            <?php
            foreach ($myInputs as $myInputsKey => $myInputsValue) {
                if ($myInputsKey == "brand") {
                    continue;
                }
                echo ' 
                <input type="hidden" name="' . $myInputsKey . '" value="' . $myInputsValue . '">
                ';
            }
            ?>
            <select name="brand" id="" onchange="this.form.submit()"><?php echo $options; ?></select>
        </form>
    <?php } ?>
    <!-- ********************************** INI *************************** -->
    <!-- #### -->
    <?php
    $addLive = "";
    if (!$local) {
        $addLive = "&live=1";
    }
    if (isset($myInputs["version"])) {
        $addLive .=  "&version=" . $myInputs["version"];
    }
    if (
        $local &&
        (!isset($myInputs["gen"])
            ||
            (isset($myInputs["gen"]) &&
                $myInputs["gen"] != "readme"
            )
        )
    ) {
        $IndexApp->updateReadmeIfNeeded();
    }
    if (isset($myInputs["gen"])) {
        switch ($myInputs["gen"]) {
            case "css":
                ob_clean();
                include "main/index_css.php";
                $IndexApp->formatAndSaveCss(ob_get_contents());
                die();
                break;
            case "script":
                ob_clean();
                include "main/index_script.php";
                $IndexApp->formatAndSaveJs(ob_get_contents());
                die();
                break;
            case "innerHtml":
                ob_clean();
                include "main/index_html.php";
                $IndexApp->generateInnerHtml(ob_get_contents());
                break;
            case "widget":
                include "main/index_html.php";
                $IndexApp->generateMainHtml(ob_get_contents(), $addLive);
                break;
            case "readme":
                ob_clean();
                include "configs/config.info.php";
                include "main/gen_readme.php";
                die();
                break;
            default:
                echo "Bad option";
                break;
        }
    } else {
        include "configs/config.info.php";
        include "main/index.info.php";
    }
    ?>

    <!-- #### -->
    <!-- ********************************** END *************************** -->
</body>

</html><?php
        if (!$local) {
            $IndexApp->formatAndSaveCodeFiles(ob_get_contents());
        }
