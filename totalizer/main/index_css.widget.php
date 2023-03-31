<style>
    /******
     * WIDGET CSS
     */
    div#du-body.du-body {
        background: #DDDDDD;
        border: 0;
        color: #000;
        font-family: <?php echo $widgetOptions["fonts"]["main"]["font-family"]; ?>;
        font-size: 17px;
        line-height: 1.1em;
        margin: 10px auto;
        padding: 0;
        text-align: left;
        min-height: 330px;
    }

    div#du-body.du-body .du-container {
        width: 96%;
        max-width: 750px;
        padding: 10px 2% 20px;
        margin: 0 auto;
    }

    div#du-body.du-body .du-text {
        line-height: 1.2em;
        color: #000;
    }

    div#du-body.du-body .du-header {
        display: block;
        font-family: <?php echo $widgetOptions["fonts"]["sec"]["font-family"]; ?>;
    }

    div#du-body.du-body h2 {
        border-bottom: 3px solid #9c9c9c;
        font-size: 2.6em;
        letter-spacing: 5px;
        line-height: 0.9em;
        margin: 0.4em 5% 0.2em;
        padding-bottom: 10px;
        text-align: center;
        text-transform: uppercase;
    }

    div#du-body.du-body .du-header .du-text {
        font-size: 1.1em;
        padding: 2px 8%;
        text-align: center;
    }

    div#du-body.du-body #du-widget {
        min-height: 250px;
    }

    div#du-body.du-body #du-widget .du-container {
        background: url("<?php echo $IndexApp->formatImageUrl("img", "du_er22_bg.png"); ?>") no-repeat scroll center center transparent;
        color: #000;
        display: none;
        max-width: 660px;
        min-height: 210px;
        padding: 15px 1% 10px;
    }

    div#du-body.du-body #du-widget .du-text {
        font-size: 1.2em;
        margin-bottom: 20px;
        padding: 0 6%;
        text-align: justify;
    }

    div#du-body.du-body #du-widget .du-text .du-data-councils {
        font-weight: bold;
    }

    div#du-body.du-body #du-widget .du-text.du-waiting {
        text-align: center
    }

    div#du-body.du-body.du-has-results #du-widget .du-text.du-waiting,
    div#du-body.du-body #du-widget .du-text.du-text-results {
        display: none;
    }

    div#du-body.du-body.du-has-results #du-widget .du-text.du-text-results {
        display: block;
    }

    div#du-body.du-body div#du-widget table {
        display: none;
        font-size: 1.5em;
        margin: 0 auto 30px;
        width: 90%;
        text-align: left;
    }

    div#du-body.du-body.du-has-results.du-vers-main div#du-widget table#du-main-table,
    div#du-body.du-body.du-has-results.du-mobile div#du-widget table#du-main-table,
    div#du-body.du-body.du-has-results div#du-widget table#du-horiz-table {
        display: table;
    }

    div#du-body.du-body.du-has-results div#du-widget table#du-main-table,
    div#du-body.du-body.du-has-results.du-mobile div#du-widget table#du-horiz-table {
        display: none;
    }




    div#du-body.du-body div#du-widget table th {
        background-color: #000;
        color: #fff;
        padding: 3px 6px;
    }

    div#du-body.du-body div#du-widget table td {
        border-bottom: 2px solid #9c9c9c;
        padding: 3px 6px;
    }

    div#du-body.du-body div#du-widget table .du-pt {
        font-weight: bold;
        white-space: nowrap;
    }

    div#du-body.du-body div#du-widget table .du-val {
        font-size: 1.3em;
        text-align: center;
    }

    div#du-body.du-body div#du-widget table td .du-up,
    div#du-body.du-body div#du-widget table td .du-down {
        display: inline-block;
        zoom: 1;
        *display: inline;
    }

    div#du-body.du-body div#du-widget table td .du-up {
        color: <?php echo $widgetOptions['colors']['up']; ?>;
    }

    div#du-body.du-body div#du-widget table td .du-down {
        color: <?php echo $widgetOptions['colors']['down']; ?>;
    }

    div#du-body.du-body .du-pt-icon {
        display: block;
        width: 0.8em;
        float: left;
        height: 0.8em;
        border: 2px solid #adadad;
        background: #eee;
        margin: 0.2em 6px 0 0;

        -webkit-border-radius: 1em;
        -moz-border-radius: 1em;
        border-radius: 1em;
    }

    <?php
    foreach ($crossConfigOptions['parties'] as $partyKey => $partyValue) {
        echo $IndexApp->generateClasses(
            "div#du-body.du-body .du-pt-icon.du-pt-##pt##",
            $partyKey,
            $partyValue
        ) . " {
            background: " . $partyValue['colors']['main'] . ";
            border-color: " . $partyValue['colors']['main-dark'] . "
        }
        ";
    }
    ?>

    /** */
    div#du-body.du-body #du-footer {
        text-align: center;
        background: #000
    }

    div#du-body.du-body .du-footer-txt {
        color: #fff;
    }

    div#du-body.du-body .du-footer-txt span {
        font-weight: bold
    }

    /*******
     * Sprite
     */
    <?php if ($sprites) { ?>

    /** */
    div#du-body.du-body .du-arrow {
        display: inline-block;
        zoom: 1;
        *display: inline;
        height: 30px;
        margin: 0 5px;
        width: 29px;
    }

    div#du-body.du-body .du-up .du-arrow {
        background-position: -240px -220px;
    }

    div#du-body.du-body .du-down .du-arrow {
        background-position: -240px -180px;
    }

    div#du-body.du-body .du-eq {
        display: none
    }

    div#du-body.du-body.du-vers-small .du-arrow,
    div#du-body.du-body.du-mobile .du-arrow {
        height: 20px;
        width: 19px;
    }

    div#du-body.du-body.du-vers-small .du-up .du-arrow,
    div#du-body.du-body.du-mobile .du-up .du-arrow {
        background-position: -180px -270px;
    }

    div#du-body.du-body.du-vers-small .du-down .du-arrow,
    div#du-body.du-body.du-mobile .du-down .du-arrow {
        background-position: -200px -270px
    }

    <?php } ?>
    /*** */

    <?php if ($project["options"]["breaks"]["tablet"]) { ?>

    /******
    * TABLET
    */
    div#du-body.du-body.du-tablet {
        font-size: 15px;
    }

    <?php } ?>

    /******
    * MOBILE
    */
    div#du-body.du-body.du-mobile {
        font-size: 14px;
    }

    div#du-body.du-body.du-mobile h2 {
        font-size: 1.8em;
        line-height: 1.1em;
        margin: 0.4em 2% 0.2em;
    }

    div#du-body.du-body.du-mobile div#du-widget table {
        width: 100%;
        font-size: 1em;
    }

    div#du-body.du-body.du-mobile #du-widget .du-text {
        padding: 0;
    }

    div#du-body.du-body.du-mobile .du-pt-icon {
        width: 0.5em;
        margin-right: 2px;
    }

    div#du-body.du-body.du-mobile div#du-widget table td {
        padding: 3px;
    }

    div#du-body.du-body.du-mobile div#du-widget table td.du-pt {
        padding-left: 0;

    }

    /****************
     * SMALL VERSION 
     ****************/
    div#du-body.du-body.du-vers-small {
        font-size: 15px;
        min-height: auto;
    }

    div#du-body.du-body.du-vers-small .du-header .du-container {
        padding-bottom: 7px;
    }

    div#du-body.du-body.du-vers-small h2 {
        margin: 0.2em 5%;
        padding-bottom: 3px;
    }

    div#du-body.du-body.du-vers-small #du-widget {
        min-height: 80px;
    }

    div#du-body.du-body.du-vers-small #du-widget .du-container {
        min-height: 120px;
        padding-top: 0;
        max-width: none;
    }

    div#du-body.du-body.du-vers-small #du-widget .du-text {
        text-align: center;
        margin-bottom: 5px;
    }

    div#du-body.du-body.du-vers-small .du-mobile #du-widget .du-text {
        text-align: justify;
    }

    div#du-body.du-body.du-vers-small div#du-widget table {
        width: auto;
        font-size: 1.1em;
        margin-bottom: 5px;
    }

    div#du-body.du-body.du-vers-small div#du-widget table .du-val {
        font-size: 1.1em;
    }

    div#du-body.du-body.du-vers-small div#du-widget #du-horiz-table tbody td {
        border-right: 2px solid #9c9c9c;
        padding: 1px 6px;
    }

    div#du-body.du-body.du-vers-small div#du-widget #du-horiz-table .du-tr-seats td {
        border-bottom: 0 none;
    }